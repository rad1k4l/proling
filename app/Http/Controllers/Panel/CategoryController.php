<?php
namespace App\Http\Controllers\Panel;

use App\Http\Middleware\Permission;
use App\Http\Requests\CategoryAdd;
use App\Http\Requests\CategoryUpdate;
use App\Models\Panel\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {

    public function index() {
        $cats = Category::root();
        return view("panel.category.index" , [ "categories" => $cats ]);
    }

    public function create(CategoryAdd $request){
        $validated = $request->validated()['submitted'];
        $cat = new Category();
        foreach (config("translatable.locales") as $code) {
            $cat->translateOrNew($code)->name = $validated["category_" . $code]["data"];
        }
        $cat->sort = 0;
        $cat->parent = 0;
        $cat->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function update(CategoryUpdate $request) {
        $validated = $request->validated();
        $submitted = $validated["submitted"];
        $cat = Category::find($validated['id']);


        foreach (config("translatable.locales") as $code) {
            $cat->translateOrNew($code)->name = $submitted["category_" . $code]["data"];
        }
        $cat->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Request $request){
        $validated = $request->validate([
            "category_id" => "required",
        ]);

        Category::destroy($validated['category_id']);
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function updateState(Request $request){
        $categoriesId = $request->validate([
            "data" => "required",
        ]);

        $this->saveState($categoriesId['data']);
        return response()->json([
           "status" => "OK"
        ]);
    }

    public function saveState($ids , $pid = 0 ){
        foreach ($ids as $k => $cat) {
            $id = $cat['id'];
            Category::where("id" , "=" , $id)
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
        $category = Category::find($validate['id']);

        return response()->json([
           "status" =>"OK",
            "data" => $category
        ]);
    }
}
