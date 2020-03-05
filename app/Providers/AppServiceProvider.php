<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Routes;
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

            $lang = app()->getLocale();
            $categories = \Cache::get("categories.{$lang}", function () {
                return Category::orderBy('sort', 'asc')->get()->toArray();
            });
            $view->with(compact("categories"));


        });

        ViewFacade::composer(['panel.template.sidenav'], function(View $view){
            $menus = Routes::where('parent', 0)->orderBy('sort','asc')->get();
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
