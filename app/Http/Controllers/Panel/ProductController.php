<?php

namespace App\Http\Controllers\Panel {

    use App\Http\Requests\ProductSave;
    use App\Models\Panel\Category;
    use App\Models\Panel\Currency;
    use App\Models\Product;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class ProductController extends Controller
    {
        public function addForm ($store) {

            (new Product())
                ->deleteById(2);
            $categories = Category::all();
            $currencies = Currency::all();
            return view(
                'panel.store.product', compact(
                'currencies',
                'categories',
                'store'
            ));
        }

        public function store(ProductSave $request, $store)
        {
            $validated = $request->validated();
            $images = [];
            $imgCount = count($validated['images'] );
            for($i = 0; $i < $imgCount; $i++)
            {
                $image = $validated['images'][$i];
                $images[] = $this->img('product/images',
                    null,
                    $image,
                    Product::IMAGE_SIZES);
            }
            $validated['store_id'] = $store;

            $added = (new Product)->add($validated, $images);
            if ($added)
                return response()->json($validated);
            else
                return response()->json([
                    'status' => 'ERR'
                ]);
        }

        public function saveTempImage()
        {

        }
    }
}
