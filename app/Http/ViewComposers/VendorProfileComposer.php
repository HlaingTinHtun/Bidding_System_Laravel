<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class VendorProfileComposer
{
    public $account;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->account = Auth::guard('dealer')->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('name', $this->account->name);
    }
}