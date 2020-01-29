<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Panel\Routes;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ViewFacade::composer(['web.layouts.app'], function(View $view){
            $menus = Category::all();

            $view->with(compact("menus"));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
