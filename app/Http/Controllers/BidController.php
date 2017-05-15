<?php

/**
 * @author HlaingTinHtun <hlaingtinhtun@gmail.com>
 * @copyright 2017 - Freelance Inc.
 **/

namespace App\Http\Controllers;

use App\Bid;
use App\Events\UserHasRegistered;
use App\Http\Requests\PostBidRequest;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class BidController extends Controller
{
    public function postBid(PostBidRequest $request)
    {
        $productCurPrice = Product::find($request->id)->initialprice;
        $postamount = $request->bidamount;

        if ($postamount <= $productCurPrice){
            return redirect()->back()->with('failmessage', 'Your Bid Amount Needs To Be Higher Than The Current Amount');
        }else{
            $bidderid = (Auth::user()->id);
            $data = [
                'amount'=> $request->bidamount,
                'bidded_at'=> Carbon::now(),
                'bidder_id'=> $bidderid,
                'product_id'=> $request->id,
            ];
            $product = Product::find($request->id);
            $product->initialprice = $postamount;
            $product->buyer_id = $bidderid;
            $route = $request->route;
            if ($product->save()){
                if (Bid::create($data)){
                    $bidder = User::find($bidderid)->name;
                    event(new UserHasRegistered($bidder,$postamount,$route));
                    return redirect()->back()->with('bidsuccess', 'You Place Your Bid Successfully');
                }else{
                    return redirect()->back()->with('fake_error', 'Connection Slow Down, Please Try Again');
                }
            }else{
                return redirect()->back()->with('fake_error', 'Connection Slow Down, Please Try Again');
            }
        }
    }
}
