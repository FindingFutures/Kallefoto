<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Subpage;
use Validator;

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
      Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');


        view()->composer('*', function ($view) {

            $subpages = Subpage::get();
            $view->with('subpages', $subpages);

        });
    }
}
