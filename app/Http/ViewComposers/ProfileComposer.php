<?php

namespace App\Http\ViewComposers;

use App\Category;
use App\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProfileComposer
{
    public $account;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = Category::all()->take(10);
        $this->image = array(
            url('/assets/images/home1/cat1.png'),
            url('/assets/images/home1/cat2.png'),
            url('/assets/images/home1/cat3.png'),
            url('/assets/images/home1/cat4.png'),
            url('/assets/images/home1/cat5.png'),
            url('/assets/images/home1/cat6.png'),
            url('/assets/images/home1/cat8.png'),
            url('/assets/images/home1/cat7.png'),
            url('/assets/images/home1/cat10.png'),
            url('/assets/images/home1/cat9.png'),
        );
        $cat15 = Category::all()->take(15);
        $this->catlatest5 = array($cat15[10],$cat15[11],$cat15[12],$cat15[13],$cat15[14]);

        $this->color = array(
            'background:#c75347;',
            'background:#fdc33e;',
            'background:#f59fba;',
            'background:#c75347;',
            'background:#7da7d5;',
            'background:#59c6bb;',
        );
        $this->footcat = Category::all()->take(6);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories',$this->categories)->with('image',$this->image)->with('catlatest5',$this->catlatest5)
             ->with('footcat',$this->footcat)->with('color',$this->color);
    }
}