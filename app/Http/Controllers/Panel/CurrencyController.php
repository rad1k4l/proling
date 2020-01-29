<?php

namespace App\Http\Controllers\Panel {

    use App\Models\Panel\Currency;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class CurrencyController extends Controller
    {
        public function index()
        {
            $currencies = (new Currency())
                ->select([ "course" , "code" ,"name" , "symbol" , "id" ])
                ->orderBy("id" , "desc")
                ->get()
                ->toArray();

            return view("panel.currency" , compact("currencies"));
        }

        public function getCurrencies(){
            $currencies = (new Currency())
                ->select([ "course" , "code" ,"name" , "symbol" , "id" ])
                ->orderBy("id" , "desc")
                ->paginate(2)
                ->toArray();


            return response()->json([
                "status" => "OK",
                "requested" => $currencies
            ]);
        }



        public function add(Request $request){
            $validated = $request->validate([
                "name" => "required",
                "course" => "required",
                "symbol" => "required",
                "code" => "required",
            ]);
            $model = new Currency();

            $model->name = $validated["name"];
            $model->course = $validated["course"];
            $model->symbol = $validated["symbol"];
            $model->code = $validated['code'];
            $model->save();

            return response()->json([
                "status" => "OK",
            ]);
        }

        public function update(Request $request){




            $validated = $request->validate([
                "currency_id" => "required|integer",
                "name" => "required",
                "course" => "required",
                "symbol" => "required",
                "code" => "required",
            ]);

            Currency::where([
                [
                    "id" , "=" , $validated["currency_id"]
                ],

            ])->update([
                "name" => $validated["name"],
                "course" => $validated["course"],
                "symbol" => $validated["symbol"],
                "code" => $validated["code"],
            ]);

            return response()->json([
                "status" => "OK",
            ],200);
        }


        public function delete(Request $request){
            $validated = $request->validate([
                "currency_id" => "required|integer",
            ]);

            Currency::where([
                [ "id", "=", $validated['currency_id']]
            ])->delete();

            return response()->json([
                "status" => "OK",
            ],200);
        }



    }
}
