<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Language\Create;
use App\Http\Requests\Language\Delete;
use App\Http\Requests\Language\Update;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends ApiController
{

    public function index() {
        $languages = Language::where('parent', 0)->orderBy('sort', 'ASC')->get();
        return view("panel.language.index" , compact('languages'));
    }

    public function create(Create $request){
        $validated = $request->validated()['submitted'];
        $language = new Language();
        foreach (config("translatable.locales") as $code) {
            $language->translateOrNew($code)->name = $validated["name_" . $code]["data"];
        }
        $language->sort = 0;
        $language->parent = 0;
        $language->save();
        return $this->responseOk();
    }

    public function update(Update $request) {
        $validated = $request->validated();
        $submitted = $validated["submitted"];
        $language = Language::find($validated['id']);
        foreach (config("translatable.locales") as $code) {
            $language->translateOrNew($code)->name = $submitted["name_" . $code]["data"];
        }
        $language->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Delete $request){
        $validated = $request->validated();
        Language::destroy($validated['id']);
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function updateState(Request $request){
        $itemsId = $request->validate([
            "data" => ["required"],
        ]);

        $this->saveState($itemsId['data']);
        return response()->json([
            "status" => "OK"
        ]);
    }

    public function saveState($ids , $pid = 0 ){
        foreach ($ids as $k => $item) {
            $id = $item['id'];
            Language::where("id" , "=" , $id)
                ->update([
                    "sort" => $k,
                    "parent" => $pid
                ]);
            if (isset($item["children"])){
                $this->saveState($item["children"] , $id);
            }
        }
    }

    public function get(Request $request){
        $validate = $request->validate([
            "id" => "required|integer",
        ]);
        $language = Language::find($validate['id']);
        return response()->json([
            "status" =>"OK",
            "data" => $language
        ]);
    }

}
