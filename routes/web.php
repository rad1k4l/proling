<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;


Route::group(['prefix' => "{main_lang?}", 'where' => [
], "middleware" => 'language' ], function ($locale){

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

    Route::get("/translate/test", function (){
//    $model = new \App\Models\Service();
//
//
//    foreach ( config('app.locales') as $lang)
//    {
//        $model->translateOrNew($lang)->title = "{$lang} Title";
//
//        $model->translateOrNew($lang)->header = "{$lang} Header";
//        $model->translateOrNew($lang)->text = "{$lang} Text";
//    }
//
//    $model->sort = 0;
//
//    $model->save();
        dump(app()->getLocale());
        $services = \App\Models\Service::all();

        foreach ($services as $service) {
            echo "{$service->header}<br>";
        }


    })->name('translate');
});






