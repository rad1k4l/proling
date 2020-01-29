<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TempImageController extends Controller
{
    public function save(TempImage $request)
    {
        $validated = $request->validated();
        $hashcode = (new \App\Models\TempImage())->addImage($validated);
        return response()->json([
            'status'  => 'ok',
            'hash_code' => $hashcode
        ]);
    }


    public function deleteUnUsedImages(int $ttl) : bool // deleted
    {
        date_default_timezone_set("Asia/Baku");
        $ttl = time() - $ttl;
        $expiredImages = \App\Models\TempImage::where('upload_time', '<', $ttl)->get();
        DB::transaction(function () use($expiredImages){
            foreach ($expiredImages as $image)
            {
                $file = public_path(\App\Models\TempImage::DIRECTORY . $image->name);
                if (file_exists($file))
                    unlink($file);
                $image->delete();
            }
        });
        return true;
    }
}
