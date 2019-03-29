<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Subpage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
          
            $subpages = Subpage::get();
            $view->with('subpages', $subpages);

        });
    }
}
