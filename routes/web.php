<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale()
], function () {

    Route::get('/', ['as' => 'homepage', 'uses' => 'WebController@index']);

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
    Route::get('/test', function () {
        DB::listen(function ($query){
            dump($query->sql);
        });

        $categories = \App\Models\Category::first();
        dump($categories->name);
    });

});






