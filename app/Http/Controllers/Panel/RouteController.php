<?php


namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryAdd;
use App\Http\Requests\CategoryUpdate;
use App\Http\Requests\Route\Add;
use App\Http\Requests\RouteAdd;
use App\Models\Panel\Category;
use App\Models\Routes;
use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function index() {
        $routes = Routes::where('parent', 0)->orderBy('sort','asc')->get();
        return view("panel.route.index", compact('routes'));
    }

    public function create(RouteAdd $request) {
        $validated = $request->validated()['submitted'];
        if (trim($validated['route']['data']) !== '#')
            try {
                route($validated['route']['data']);
            }catch (\Exception $exception){
                return response()->json([
                    'status' => 'err',
                    'info' => "Route not found {$exception->getMessage()}"
                ]);
            }

        $route  = new Routes();
        $route->name = $validated['route']['data'] === '#' ? null : $validated['route']['data'];
        $route->title = $validated['title']['data'];
        $route->sort = 0;
        $route->icon = "home";

        $route->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function update(Add $request) {
        $validated = $request->validated();
        $submitted = $validated["submitted"];
        $route = Routes::find($validated['id']);
        if (trim($submitted['route']['data']) !== '#')
            try {
                route($submitted['route']['data']);
            }catch (\Exception $exception){
                return response()->json([
                    'status' => 'err',
                    'info' => "Route not found {$exception->getMessage()}"
                ]);
            }

        if (!$route){
            return response()->json([
                'status' => 'err',
                'info' => "Route not found"
            ]);
        }
        $route->name = $submitted['route']['data'] === '#' ? null : $submitted['route']['data'];
        $route->title = $submitted['title']['data'];
        $route->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Request $request){
        $validated = $request->validate([
            "category_id" => "required",
        ]);

        Routes::destroy($validated['category_id']);
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
                    'parent' => $pid
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

        $route = Routes::find($validate['id']);
        if (!$route->name) $route->name = "#";
        return response()->json([
            "status" =>"OK",
            "data" => $route
        ]);
    }
}
