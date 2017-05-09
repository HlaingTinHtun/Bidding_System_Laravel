<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer(
            'vendors.layouts.partials.header',
            'App\Http\ViewComposers\VendorProfileComposer'
        );
        view()->composer(
            'customers.layouts.master',
            'App\Http\ViewComposers\ProfileComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
