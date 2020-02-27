<?php

namespace App\Http\Controllers\Panel {

    use App\Http\Requests\EditRoutes;
    use App\Models\Panel\Routes;
    use App\Http\Controllers\Controller;
    use App\Panel\Icon;
    use http\Env\Response;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Route;
    use Illuminate\Support\Facades\Validator;

    class RoutesController extends Controller{
        public function index(){
            $routes = Routes::menu();
            $icons = Icon::all();
            $languages = [];

            $locales = config("translatable.locales");
            foreach ($locales as $k => $locale){
                $languages[$locale] = "";
            }
            $locales = $languages;
            unset($languages);
            return view("panel.routes" , compact("routes" , "icons" , "locales"));
        }

        public function save(Request $request) {
            $rules = [
                "name" => "required",
                "for_admin" => "required|boolean",
                "icon" => "required"
            ];

            foreach (config("translatable.locales") as $locale) {
                $rules["lang.".$locale] = "required";
            }

            $validated = Validator::make($request->all(),$rules);

            if ($validated->fails() ){
                return response()->json([
                    "status" => "ERROR",
                    "msg" => "Bütün xanalar düzgün doldurulmalıdı",

                ]);
            }
            try{
                route(request()->post("name"));
            }catch (\Exception $exception){
                return response()->json([
                    "status" => "ERROR",
                    "msg" => $exception->getMessage(),
                ]);
            }
            $model = new Routes();
            $model->name = request()->post("name");
            $model->icon = request()->post("icon");
            $model->for_admin = request()->post("for_admin");
            foreach (config("translatable.locales") as $locale) {
                $model->translateOrNew($locale)->title = request()->post("lang")[$locale];
            }
            $model->save();

            return response()->json([
                "status" => "OK",
            ]);
        }

        public function edit($id){
            $routes  = Routes::find($id);
            if ($routes === null) {
                return redirect()->back()->with("error" , "Bu route dəyişdirilə bilməz");
            }
            return view("panel.routes_edit" , compact("routes" ,"id"));
        }

        public function update(EditRoutes $request , $id){
            $validatedData = $request->validated();

            $model = Routes::find($id);

            if ($model === null) {
                return redirect()->back()->with("error" , "Bu route dəyişdirilə bilməz");
            }

            if(!$this->isValidRoute($validatedData['name']))
                return redirect()->back()->with("error" , "Belə bir route mövcud deyil");

            $model->name = $validatedData["name"];
            $model->icon = $validatedData["icon"];
            $model->for_admin = $request->post("for_admin" , false) !== false ? 1 : 0;
            foreach (config("translatable.locales") as $locale) {
                $model->translateOrNew($locale)->title = $validatedData["lang_$locale"] ;
            }
            $model->save();
            return redirect()->route("panel.routes")->with("success" , "Uğurla dəyişdirildi");
        }

        public function isValidRoute(string $routename ) : bool {
            try{
                route($routename);
                return true;
            }catch (\Exception $exception) {
                return false;
            }
        }


    }
}
