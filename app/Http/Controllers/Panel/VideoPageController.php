<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\ApiController;
use App\Http\Requests\VideoPage\Create;
use App\Http\Requests\VideoPage\Delete;
use App\Http\Requests\VideoPage\Update;
use App\Models\VideoPage;
use Illuminate\Http\Request;

class VideoPageController extends ApiController
{
    public function index() {
        $videopages = VideoPage::orderBy('sort', 'ASC')->get();
        return view("panel.video-page.index" , compact('videopages'));
    }

    public function create(Create $request){
        $validated = $request->validated()['submitted'];
        $videopage = new VideoPage();
        foreach (config("translatable.locales") as $code) {
            $videopage->translateOrNew($code)->title = $validated["title_" . $code]["data"];
        }
        $videopage->sort = 0;
        $videopage->save();
        return $this->responseOk();
    }

    public function updateForm(int $id) {
        $videopage = VideoPage::find($id);

        // abort the request
        if (!$videopage) abort(404, 'Video page not found');
        return view('panel.video-page.edit', compact('videopage'));
    }

    public function update(Update $request, $id) {
        $validated = $request->validated();
        $videopage = VideoPage::find($id);
        foreach (config("translatable.locales") as $code) {
            $videopage->translateOrNew($code)->title = $validated["title"][$code];
            $videopage->translateOrNew($code)->short_title = $validated["short_title"][$code];
            $videopage->translateOrNew($code)->content = $validated["content"][$code];
        }
        $videopage->youtube_embed = $validated['youtube_embed'];
        $videopage->save();
        return response()->json([
            "status" => "OK",
        ]);
    }

    public function delete(Delete $request){
        $validated = $request->validated();
        VideoPage::destroy($validated['id']);
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

    public function saveState($ids, $pid = 0){
        foreach ($ids as $k => $cat) {
            $id = $cat['id'];
            VideoPage::where("id" , "=" , $id)
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
            "id" => "required|integer",
        ]);
        $service = VideoPage::find($validate['id']);
        return response()->json([
            "status" =>"OK",
            "data" => $service
        ]);
    }
}
