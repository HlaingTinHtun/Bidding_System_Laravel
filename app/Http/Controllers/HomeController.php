<?php

/**
 * @author HlaingTinHtun <hlaingtinhtun@gmail.com>
 * @copyright 2017 - Freelance Inc.
 **/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class HomeController extends Controller
{
    
 
    public function index()
    {   
        return view('customers.index');
    }

    public function itemDetail()
    {
        return view('customers.detail');
    }

    public function itemCategory()
    {
        return view('customers.itemcategory');
    }

    public function contact()
    {
        return view('customers.contact');
    }

    public function about()
    {
        return view('customers.about');
    }

    
}
