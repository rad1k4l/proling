<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutCard\Add;
use App\Http\Requests\AboutCard\Update;
use App\Models\About;

use Illuminate\Http\Request;

class AboutCardController extends Controller
{
    public function index() {
        $about_cards = About::where('type', About::CARD)->get();
        return view("panel.about.cards.index" , compact('about_cards'));
    }

    public function create(Add $request){
        $validated = $request->validated()['submitted'];
        $cards = new About();

        foreach (config("translatable.locales") as $code) {
            $cards->translateOrNew($code)->title = $validated["title_" . $code]["data"];
            $cards->translateOrNew($code)->body = $validated["body_" . $code]["data"];
        }

        $cards->sort = 0;
        $cards->type = About::CARD;
        $cards->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function update(Update $request) {
        $validated = $request->validated();
        $submitted = $validated["submitted"];
        $cards = About::find($validated['id']);

        foreach (config("translatable.locales") as $code) {
            $cards->translateOrNew($code)->title = $submitted["title_" . $code]["data"];
            $cards->translateOrNew($code)->body = $submitted["body_" . $code]["data"];
        }

        $cards->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Request $request){
        $validated = $request->validate([
            "card_id" => ["required", 'int'],
        ]);

        About::destroy($validated['card_id']);
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function updateState(Request $request){
        $cardsegoriesId = $request->validate([
            "data" => ["required"],
        ]);

        $this->saveState($cardsegoriesId['data']);
        return response()->json([
            "status" => "OK"
        ]);
    }

    public function saveState($ids , $pid = 0 ){
        foreach ($ids as $k => $cards) {
            $id = $cards['id'];
            About::where("id" , "=" , $id)
                ->update([
                    "sort" => $k,
                ]);
            if (isset($cards["children"])){
                $this->saveState($cards["children"] , $id);
            }
        }
    }

    public function get(Request $request){
        $validate = $request->validate([
            "id" => "required|integer",
        ]);
        $about_cards = About::find($validate['id']);

        return response()->json([
            "status" =>"OK",
            "data" => $about_cards
        ]);
    }
}
