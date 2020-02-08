<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

use Illuminate\Support\Facades\Route;

Route::group([ 'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale() ], function () {

    Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@index']);

    Route::get('/online-order', ['as' => 'online-order', 'uses' => 'OnlineOrderController@index']);

    Route::get('/online-translate', ['as' => 'online-translate', 'uses' => 'OnlineTranslateController@index']);

    Route::get('/online-deliver', ['as' => 'online-deliver', 'uses' => 'OnlineDeliverController@index']);

    Route::get('/about', ['as' => 'about', 'uses' => 'AboutController@index']);

    Route::get('/service', ['as' => 'service', 'uses' => 'ServiceController@index']);

    Route::get('/language', ['as' => 'language', 'uses' => 'LanguageController@index']);

    Route::get('/price', ['as' => 'price', 'uses' => 'PriceController@index']);

    Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@index']);

    Route::get('/video', ['as' => 'video', 'uses' => 'VideoPageController@index']);

    Route::get('/privacy-policy', ['as' => 'privacy-policy', 'uses' => 'PrivacyPolicyController@index']);

    Route::get('/state', function () {

        return LaravelLocalization::localizeUrl(route('about', ['state' => 'ad']));
    });

});

// admin permissions
Route::group([ 'middleware' => "auth", 'namespace' => 'Panel' , 'prefix' => 'panel'], function () {
    Route::get('/logout', function() {
        auth()->logout();
        return redirect()->route('login');
    })->name('panel.logout');

    //  Users
    Route::group(['prefix' => 'user', 'as' => 'panel.user.'], function(){
        Route::get('list/index', "UserController@listIndex")->name("list.index");
        Route::post('list/get', "UserController@userList")->name("list.get");
    });
    // ./users

    // cache
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        \App\Models\SelectScope::columnsFlushCache();
        Artisan::call('view:clear');
        return redirect()->back()->with('success', "Cache silindi");
    })->name('cache.clear');
    // ./cache

    // category route
    Route::group(["prefix" => "category"], function () {
        Route::get("/", "CategoryController@index")->name("panel.category.index");
        Route::post("create", "CategoryController@create")->name("panel.category.create");
        Route::post("update", "CategoryController@update")->name("panel.category.update");
        Route::post("delete", "CategoryController@delete")->name("panel.category.delete");
        Route::post("update/state", "CategoryController@updateState")->name("panel.category.state");
        Route::post("get", "CategoryController@get")->name("panel.category.get");
    });
    //./category end

    // currency route
    Route::group(["prefix" => "currency"], function () {
        Route::get("index", "CurrencyController@index")
            ->name("panel.currency.index");
        Route::post("get", "CurrencyController@getCurrencies")
            ->name("panel.currency.get_all");
        Route::post("create", "CurrencyController@add")
            ->name("panel.currency.create");
        Route::post("update", "CurrencyController@update")
            ->name("panel.currency.update");

        Route::post("delete", "CurrencyController@delete")
            ->name("panel.currency.delete");
    });
    //        currency end
//
//    Route::group(['prefix' => "routes11"], function () {
//        Route::get('/', "RoutesController@index")->name("panel.routes");
//        Route::get('/get/{id}', "RoutesController@edit")->name("panel.routes.edit.form")
//            ->where('id', '[0-9]+');
//        Route::post('/new', "RoutesController@save")->name("panel.routes.save");
//        Route::post('/update/{id}', "RoutesController@update")->name("panel.routes.update");
//    });


    // category route
    Route::group(["prefix" => "route"], function () {
        Route::get('index', "RouteController@index")->name("panel.route.index");
        Route::post("create", "RouteController@create")->name("panel.route.create");
        Route::post("update", "RouteController@update")->name("panel.route.update");
        Route::post("delete", "RouteController@delete")->name("panel.route.delete");
        Route::post("update/state", "RouteController@updateState")->name("panel.route.state");
        Route::post("get", "RouteController@get")->name("panel.route.get");
    });
    //./category end



    // About route
    Route::group([ 'prefix' => 'about/main' ], function () {
        Route::get('index', "AboutController@index")
            ->name("panel.about.index");

        Route::post('update', "AboutController@update")
            ->name("panel.about.update");
    });
    //./About end

    // About cards route
    Route::group(["prefix" => "about/cards"], function () {
        Route::get('index', "AboutCardController@index")->name("panel.about.cards.index");
        Route::post("create", "AboutCardController@create")->name("panel.about.cards.create");
        Route::post("update", "AboutCardController@update")->name("panel.about.cards.update");
        Route::post("delete", "AboutCardController@delete")->name("panel.about.cards.delete");
        Route::post("update/state", "AboutCardController@updateState")->name("panel.about.cards.state");
        Route::post("get", "AboutCardController@get")->name("panel.about.cards.get");
    });
    //./About cards end




    Route::get('home', 'HomeController@index')->name('panel.home');
});


Route::group([ 'middleware' =>'auth', 'prefix' => 'panel' ], function (){
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

});


\Illuminate\Support\Facades\Auth::routes([
    'register' => (bool)env('APP_REGISTER', false),
    'reset' =>  (bool)env('APP_RESET', false)
]);
