<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

	public function orderForm()
    {
        return view('customers.order');
    }

    public function account()
    {
        $user = Auth::user();
        
        return view('customers.accountview', compact('user'));

    }

    public function loginForm()
    {
        return view('customers.auth');
    }

    public function wishList()
    {
        return view('customers.wishlist');
    }

}
