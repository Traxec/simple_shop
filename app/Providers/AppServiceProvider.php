<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Goods_category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // dd(Goods_category::all());
        // View::share('Goods_categories', Goods_category::all()->toTree());
      view()->composer('layouts._header', function ($view) {
        $view->with('Goods_categories',Goods_category::all()->toTree());
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
