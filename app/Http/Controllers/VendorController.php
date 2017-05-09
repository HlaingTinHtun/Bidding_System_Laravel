<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealer;
use App\Http\Requests;
use Auth;
use Validator;
use App\Http\Requests\VendorAccountRequest;
use App\Http\Requests\VendorItemRequest;
// Model namespace
use App\Category;
use App\Product;
use App\Order;

class VendorController extends Controller
{
    protected $dealerId;

    public function __construct() {
        $this->dealerId = Auth::guard('dealer')->user()->id;
    }

    public function index()
    {
        $orderItems = Order::where('dealer_id', $this->dealerId)
                      ->OrderBy('id','desc')
                      ->limit(5)->get();

        $products   = Product::where('dealer_id', $this->dealerId)
                      ->OrderBy('id','desc')
                      ->limit(5)->get();
        $ordercount = $orderItems->count();
        $productcount = $products->count();
        return view('vendors.home', compact('products','orderItems','ordercount','productcount'));
    }

    public function myPosts()
    {
        $products = Product::where('dealer_id', $this->dealerId)
                    ->orderBy('id','desc')
                    ->paginate(10);
        $productcount = $products->count();
        return view('vendors.myposts', compact('products','productcount'));
    }

    public function buyerPosts()
    {
        $orderItems = Order::where('dealer_id', $this->dealerId)
                      ->OrderBy('id','desc')
                      ->paginate(5);
        $ordercount = $orderItems->count();
        return view('vendors.buyerposts', compact('orderItems','ordercount'));
    }

    public function creditMemo()
    {
        return view('vendors.creditmemo');
    }

    public function invoice()
    {
        return view('vendors.invoice');
    }
    public function newItem(Request $request)
    {
        $categories = Category::all();
        return view('vendors.newitem', compact('categories'));
    }

    public function saveItem(VendorItemRequest $request)
    {
        //  ProductImage Upload in public/dealer folder 
        $data = $request->except(['_token','image','_url']);

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $tempFileName = $this->genFileName($file->getClientOriginalExtension());
            $file->move('assets/images/dealer', $tempFileName);
            $filePath = 'assets/images/dealer/'.$tempFileName;
        }
        // Custom Fields
        if (!empty($request->custom_fields_keys) && !empty($request->custom_fields_values)) {
           $data['custom_field'] = json_encode(array_combine($request->custom_fields_keys, $request->custom_fields_values));
        }

        $data['dealer_id'] = $this->dealerId;
        $data['image_url'] = $filePath;
        
        Product::create($data);

        return redirect('dealer/newitem')->with('success','Your new item has been succesfully saved!');

    }

    public function loginForm()
    {
        return view('vendors.loginform');
    }

    public function myAccount()
    {
        $user = Auth::guard('dealer')->user();
      
        return view('vendors.myaccount' , compact('user'));
    }

    public function updateAccount (VendorAccountRequest $request)
    {   
        $request->validate();
        
        $data = $request->except(['_token','image','_url']);

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $tempFileName = $this->genFileName($file->getClientOriginalExtension());
            $file->move('assets/images/dealer', $tempFileName);
            $filePath = 'assets/images/dealer/'.$tempFileName;
            $data['image_url'] = $filePath;
        }

        $user = Auth::guard('dealer')->user();
        $user->update($data);

        return redirect('dealer/myaccount')->with('success','Your update request has been succesfully updated!');
    }

    protected function genFileName($extension) { 
        $s = strtoupper(md5(uniqid(rand(),true))); 
        $guidText = 
            substr($s,0,8) . '-' . 
            substr($s,8,4) . '-' . 
            substr($s,12,4). '-' . 
            substr($s,16,4). '-' . 
            substr($s,20); 
        return $guidText .".". $extension;
    }

}
