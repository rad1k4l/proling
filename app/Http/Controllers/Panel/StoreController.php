<?php

namespace App\Http\Controllers\Panel {

    use App\Http\Requests\StoreCreateRequest;
    use App\Http\Requests\StorePhotoChange;
    use App\Models\Good;
    use App\Models\Panel\Store;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Str;
    use Intervention\Image\Facades\Image;

    class StoreController extends Controller
    {
        public $img_path  = "user/stores/img";
        public $img_path_400x400  = "user/stores/img/400x400";

        public function showStores()
        {
            $user = auth()->user();
            $storeModel = new Store();

            if($user->isAdmin === 0){
                $stores = $storeModel->where([
                    ["uid" , "=" , $user->id]
                ])->get()->sortByDesc("id");
            }else{
                $stores = $storeModel->all()->sortByDesc("id");
            }
            return  view("panel.stores" , compact(["stores"]) );
        }

        public function  showProductAddForm(){
            return view("panel.store.product");
        }


        public function create(StoreCreateRequest $request) {
            $data = $request->validated();
            $store = new Store();

            $store->name = $data['name'];
            $store->number = $data['number'];
            $store->description  = $data['description'];
            $store->uid = auth()->user()->id;
            $store->time  = time();
            $store->status = 1;

            $store->save();
            return response()->json(["status" => "OK"]);
        }

        public function store($store_id) {
            $user = auth()->user();
            $store = Store::findOrFail($store_id);

            return view("panel.store.detail" , compact(["user" , "store"]));
        }

        public function addProduct(Request $request) {
            $validated = $request->validate([
                "name" => "required",
                "description" => "required",
                "cid" => "required",
                "files.*" => "required|file",
                "price" => "required",
                "currency" => "required"
            ]);
            $product = new Good();
            $product->name = $validated['name'];
            $product->description = $validated['description'];
            $product->category_id = $validated['cid'];
            $product->price = $validated["price"];
            $product->currency_id = $validated['currency'];
            $product->store_id = $validated["store_id"];



            return response()->json([
                "status" => "OK",
                "product" => $product->id
            ]);
        }

        public function changePhoto(StorePhotoChange $request) {

            $validated = $request->validated();
            $store = (new Store() )->find($validated['store_id']);
            if($store->image !== "store.png"){
                $file = public_path($this->img_path)."/{$store->image}";

                if (file_exists($file)){
                    unlink($file);
                }

                $file = public_path($this->img_path_400x400)."/{$store->image}";
                if (file_exists($file))
                {
                    unlink(public_path($this->img_path_400x400)."/{$store->image}");
                }
                unset($file);
            }

            $image = $validated['image'];
            $extension = $image->getClientOriginalExtension();
            $imageName = md5(time()) . "_". Str::random(). ".". $extension;
            $image->move(public_path($this->img_path) ,  $imageName);
            $path = public_path($this->img_path) . "/" . $imageName;

            $img = Image::make($path);
            $img->resize(400 , 400);
            $img->save(public_path("{$this->img_path_400x400}/{$imageName}"));

            Store::where([
                [ "id" , "=", $validated['store_id'] ]
            ])->update(["image" => $imageName]);

            return response()->json([
                "status" => "OK",
                "url"  => asset("{$this->img_path_400x400}/{$imageName}"),
            ]);
        }

        public function changeName(Request $request) {

            $validated = $request->validate([
                "name" => "required|alpha_dash|max:255",
                "store_id" => "required|integer"
            ]);

            Store::where([
                [ "id" , "=" , $validated['store_id'] ]
            ])->update([
                "name"=> $validated["name"]
            ]);

            return response()->json([
                "status" => "OK",
                "name" => $validated["name"],
            ]);
        }

        public function changeDescription(Request $request) {

            $validated = $request->validate([
                "description" => "required",
                "store_id" => "required|integer"
            ]);

            Store::where([
                [ "id" , "=" , $validated['store_id'] ]
            ])->update([
                "description"=> $validated["description"]
            ]);

            return response()->json([
                "status" => "OK",
                "description" => $validated["description"],
            ]);
        }

        public function changeContact(Request $request) {

            $validated = $request->validate([
                "contact" => "required|integer",
                "store_id" => "required|integer"
            ]);

            Store::where([
                [ "id" , "=" , $validated['store_id'] ]
            ])->update([
                "contact"=> $validated["contact"]
            ]);

            return response()->json([
                "status" => "OK",
                "contact" => $validated["contact"],
            ]);
        }

    }
}
