<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguagePost\Store;
use App\Models\About;
use App\Models\LanguagePost;
use Illuminate\Http\Request;

class LanguagePostController extends ApiController
{
    public function index() {
        $language_post = (new LanguagePost())->createIfNotExistMain();
        return view('panel.language-post.index', compact('language_post'));
    }

    public function update(Store $request){
        $validated = $request->validated();
        $model = (new LanguagePost())->createIfNotExistMain();

        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $model->translateOrNew($code)->content = $validated['content'][$code];
            $model->translateOrNew($code)->title = $validated['title'][$code];
        }
        $model->save();
        return $this->responseOk();
    }




}
