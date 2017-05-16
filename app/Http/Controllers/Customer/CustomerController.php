<?php

namespace App\Http\Controllers\Customer;

use App\Category;
use App\Events\UserHasRegistered;
use App\Http\Requests\OrderFormRequest;
use App\Order;
use App\Orderdetail;
use App\Product;
use App\User;
use App\WishList;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $allcat = Category::all();
        $allpro = DB::table('products')->orderBy('id', 'desc')->paginate(6);
        $cat20 = Category::all()->take(20);
        $catlatest5second = array($cat20[15],$cat20[16],$cat20[17],$cat20[18],$cat20[19]);
        $count = array(
            $this->bag = Product::where('cat_id',16)->count(),
            $this->shoenfootwear = Product::where('cat_id',17)->count(),
            $this->skirtnpants = Product::where('cat_id',18)->count(),
            $this->blousenshirts = Product::where('cat_id',19)->count(),
            $this->menpants = Product::where('cat_id',19)->count(),
        );
        return view('customers.index',compact('allcat','allpro','catlatest5second','count'));
    }

    public function about()
    {
        return view('customers.about');
    }

    public function contact()
    {
        return view('customers.contact');
    }

    public function loginForm()
    {
        return view('customers.auth');
    }

    public function itemDetail($slug,Request $request)
    {

        $productdetail = Product::find(Product::whereSlug($slug)->firstOrFail()->id);

        $relatedpros = Product::where('cat_id',$productdetail->cat_id)->paginate(5);

        $bidderid = $productdetail->buyer_id;

        $bidder = User::find($bidderid)->name;

        if ($productdetail->end_date < Carbon::now()){
            $expiredDate = 'It Has Been Expired';
        }else{
            $expiredDate = null;
        }

        return view('customers.detail',compact('productdetail','relatedpros','bidder','expiredDate'));
    }

    public function addToWishList(Request $request)
    {
        $data = array(
            "user_id" => Auth::user()->id,
            "product_id" => $request->id,
        );

        if (WishList::create($data))
        {
            return redirect()->back()->with('successmessage', ' The Item Has Been Added To Your WishList');
        }else{
            return redirect()->back()->with('failmessage', 'Connetion time out..');
        }
    }

    public function wishList()
    {
        $products = DB::table('products')
                    ->select('products.name as pname','products.image_url as purl','products.price as pprice','products.descr as pdescr')
                    ->join('wish_list', 'products.id', '=', 'wish_list.product_id')
                    ->join('users', 'wish_list.user_id', '=', 'users.id')
                    ->where('users.id','=',Auth::user()->id)->paginate(5);
        $count = $products->count();
        return view('customers.wishlist',compact('count','products'));
    }

    public function showCategory($slug)
    {
        $products = Product::where('cat_id',Category::whereSlug($slug)->firstOrFail()->id)->orderBy('id', 'desc')->paginate(4);
        $count = $products->count();
        return view('customers.itemcategory',compact('products','count'));
    }

    public function orderForm(Request $request)
    {
        $product = Product::find($request->id);
        return view('customers.order',compact('product'));
    }

    public function postOrder(OrderFormRequest $request)
    {
        $request->validate();
        $data = [
          "address" => $request->get('address'),
          "township" => $request->get('township'),
          "ordernote" => $request->get('ordernote'),
          "product_id" => $request->id,
          "dealer_id" => Product::find($request->id)->dealer_id,
          "customer_id" => Auth::user()->id,
          "price" => Product::find($request->id)->price,
        ];

        if (Order::create($data)){
            $orderid = DB::getPdo()->lastInsertId();
            $data = [
                "order_id" => $orderid,
                "quantity" => 1,
                "price_each" => Product::find($request->id)->price,
            ];
            if (Orderdetail::create($data))
            {
                return redirect('home')->with('successmessage', ' Item Has Successfully Ordered. Delivery System Will Come To Your Address Along With the Item');
            }
        }else{
            return redirect()->back()->with('failmessage', 'Connetion time out..');
        }
    }

    public function account()
    {
        $user = Auth::user();

        return view('customers.accountview', compact('user'));
    }
}
