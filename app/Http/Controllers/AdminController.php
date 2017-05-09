<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.home');
    }
    public function loginForm()
    {
        return view('admins.loginform');
    }

    public function vendorPost()
    {
        return view('admins.vendorposts');
    }

    public function buyerPost()
    {
        return view('admins.buyerposts');
    }

    public function allUser()
    {
        return view('admins.allusers');
    }

    public function myAccount()
    {
        return view('admins.myaccount');
    }
}
