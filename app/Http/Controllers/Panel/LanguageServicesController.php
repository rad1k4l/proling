<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;

use App\Http\Requests\LanguageService\Add;
use App\Http\Requests\LanguageService\Update;
use App\Models\LanguageService;
use Illuminate\Http\Request;

class LanguageServicesController extends ApiController {

    public function index() {
        $languageServices = LanguageService::all();
        return view("panel.language-service.index", ['services' => $languageServices]);
    }

    public function create(Add $request) {

        $validated = $request->validated()['submitted'];
        $lang_service  = new LanguageService();
        $lang_service->name = $validated['name']['data'];
        $lang_service->save();
        return response()->json([
            'status' => 'OK'
        ]);
    }

    public function update(Update $request) {
        $validated = $request->validated();
        $submitted = $validated["submitted"];
        $lang_service = LanguageService::find($validated['id']);

        $lang_service->name = $submitted['name']['data'];
        $lang_service->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Request $request){
        $validated = $request->validate([
            "id" => [ "required", 'integer'],
        ]);

        LanguageService::destroy($validated['id']);
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function updateState(Request $request) {
        $categoriesId = $request
            ->validate([
                "data" => "required"
            ]);
        $this->saveState($categoriesId['data']);
        return response()->json([
            "status" => "OK"
        ]);
    }

    public function saveState($ids, $pid = 0){
        foreach ($ids as $k => $cat) {
            $id = $cat['id'];
            Routes::where("id" , "=" , $id)
                ->update([
                    "sort" => $k,
                ]);
            if (isset($cat["children"])){
                $this->saveState($cat["children"] , $id);
            }
        }
    }

    public function get(Request $request){
        $validate = $request->validate([
            "id" => [ "required", "integer" ],
        ]);
        $category = LanguageService::find($validate['id']);
        return $this->responseOk(['data' => $category ]);
    }
}
