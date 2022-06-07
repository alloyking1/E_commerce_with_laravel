<?php

namespace App\Providers;

use App\Cart\CartHelper;
use App\Cart\Contracts\CartHelperInterface;
use Illuminate\Support\ServiceProvider;

class CartHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CartHelperInterface::class, function () {
            return new CartHelper(session());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd(session());
    }
}
