<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        \View::composer('layout.nav',function($view){
            $works=\App\Work::where('user_id',\Auth::id())->count();
            $view->with('workCounts',$works);
        });

    }

    public function register()
    {
        //
    }
}
