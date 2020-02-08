<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\Store;
use App\Models\About;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;

class AboutController extends ApiController
{

    public function index() {
        $about = (new About())->createIfNotExistMain();
        return view('panel.about.index', compact('about'));
    }

    public function update(Store $request){
        $validated = $request->validated();
        $model = (new About())->createIfNotExistMain();

        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $model->translateOrNew($code)->body = $validated['body'][$code];
            $model->translateOrNew($code)->title = $validated['title'][$code];
        }
        $model->save();
        return $this->responseOk();
    }


}
