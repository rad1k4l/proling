<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Service\Create;
use App\Http\Requests\Service\Delete;
use App\Http\Requests\Service\Update;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends ApiController
{
    public function index() {
        $services = Service::all();

        return view("panel.service.index" , compact('services'));
    }

    public function create(Create $request){
        $validated = $request->validated()['submitted'];
        $service = new Service();
        foreach (config("translatable.locales") as $code) {
            $service->translateOrNew($code)->title = $validated["title_" . $code]["data"];
            $service->translateOrNew($code)->text = $validated["text_" . $code]["data"];
        }
        $service->sort = 0;
        $service->save();
        return $this->responseOk();
    }

    public function update(Update $request) {
        $validated = $request->validated();
        $submitted = $validated["submitted"];
        $service = Service::find($validated['id']);
        foreach (config("translatable.locales") as $code) {
            $service->translateOrNew($code)->title = $validated["title_" . $code]["data"];
            $service->translateOrNew($code)->text = $validated["text_" . $code]["data"];
        }
        $service->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Delete $request){
        $validated = $request->validated();
        Service::destroy($validated['id']);
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
            Service::where("id" , "=" , $id)
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
        $service = Service::find($validate['id']);
        return response()->json([
            "status" =>"OK",
            "data" => $service
        ]);
    }
}
