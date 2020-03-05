<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale(), 'middleware' => 'compress' ], function () {

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


    // translate services
    Route::group(["prefix" => "translate/services"], function () {
        Route::get("/", "TranslateServiceController@index")->name("panel.translate.service.index");
        Route::post("create", "TranslateServiceController@create")->name("panel.translate.service.create");
        Route::post("update", "TranslateServiceController@update")->name("panel.translate.service.update");
        Route::post("delete", "TranslateServiceController@delete")->name("panel.translate.service.delete");
        Route::post("update/state", "TranslateServiceController@updateState")->name("panel.translate.service.state");
        Route::post("get", "TranslateServiceController@get")->name("panel.translate.service.get");
    });
    //./translate services end


    // services
    Route::group(["prefix" => "services"], function () {
        Route::get("/", "ServiceController@index")->name("panel.service.index");
        Route::post("create", "ServiceController@create")->name("panel.service.create");
        Route::post("update", "ServiceController@update")->name("panel.service.update");
        Route::post("delete", "ServiceController@delete")->name("panel.service.delete");
        Route::post("update/state", "ServiceController@updateState")->name("panel.service.state");
        Route::post("get", "ServiceController@get")->name("panel.service.get");
    });
    //./ services end

    // languages
    Route::group(["prefix" => "languages"], function () {
        Route::get("/", "LanguageController@index")->name("panel.languages.index");
        Route::post("create", "LanguageController@create")->name("panel.languages.create");
        Route::post("update", "LanguageController@update")->name("panel.languages.update");
        Route::post("delete", "LanguageController@delete")->name("panel.languages.delete");
        Route::post("update/state", "LanguageController@updateState")->name("panel.languages.state");
        Route::post("get", "LanguageController@get")->name("panel.languages.get");
    });
    //./ languages end

    // language Post route
    Route::group([ 'prefix' => 'language/post' ], function () {
        Route::get('index', "LanguagePostController@index")
            ->name("panel.language.post.index");

        Route::post('update', "LanguagePostController@update")
            ->name("panel.language.post.update");
    });
    //./language Post end



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
    //currency end



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


    // lang services route
    Route::group(["prefix" => "language/services"], function () {
        Route::get('index', "LanguageServicesController@index")->name("panel.language.services.index");
        Route::post("create", "LanguageServicesController@create")->name("panel.language.services.create");
        Route::post("update", "LanguageServicesController@update")->name("panel.language.services.update");
        Route::post("delete", "LanguageServicesController@delete")->name("panel.language.services.delete");
        Route::post("update/state", "LanguageServicesController@updateState")->name("panel.language.services.state");
        Route::post("get", "LanguageServicesController@get")->name("panel.language.services.get");
    });
    //./lang services end



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
// cache
Route::get('/flush', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    \App\Models\SelectScope::columnsFlushCache();
    Artisan::call('view:clear');
    return redirect()->back()->with('success', "Cache silindi");
})->name('cache.clear');
// ./cache
