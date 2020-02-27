<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ApiController;
use App\Http\Requests\TranslateService\Add;
use App\Http\Requests\TranslateService\Update;
use App\Models\TranslateService;
use Illuminate\Http\Request;

class TranslateServiceController extends ApiController
{

    public function index() {
        $services = TranslateService::all();

        return view("panel.translate-service.index" , compact('services'));
    }

    public function create(Add $request){
        $validated = $request->validated()['submitted'];
        $service = new TranslateService();
        foreach (config("translatable.locales") as $code) {
            $service->translateOrNew($code)->name = $validated["service_" . $code]["data"];
        }
        $service->save();
        return $this->responseOk();
    }

    public function update(Update $request) {
        $validated = $request->validated();
        $submitted = $validated["submitted"];
        $service = TranslateService::find($validated['id']);
        foreach (config("translatable.locales") as $code) {
            $service->translateOrNew($code)->name = $submitted["service_" . $code]["data"];
        }
        $service->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Request $request){
        $validated = $request->validate([
            "category_id" => ["required", 'int'],
        ]);

        TranslateService::destroy($validated['category_id']);
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function updateState(Request $request){
        $categoriesId = $request->validate([
            "data" => ["required"],
        ]);

        $this->saveState($categoriesId['data']);
        return response()->json([
            "status" => "OK"
        ]);
    }

    public function saveState($ids , $pid = 0 ){
        foreach ($ids as $k => $cat) {
            $id = $cat['id'];
            TranslateService::where("id" , "=" , $id)
                ->update([
                    "sort" => $k,
                    "parent" => $pid
                ]);
            if (isset($cat["children"])){
                $this->saveState($cat["children"] , $id);
            }
        }
    }

    public function get(Request $request){
        $validate = $request->validate([
            "id" => "required|integer",
        ]);
        $category = TranslateService::find($validate['id']);

        return response()->json([
            "status" =>"OK",
            "data" => $category
        ]);
    }


}
