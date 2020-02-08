<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\Save;
use App\Models\Slide;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index() {

        return ;
    }

    public function save(Save $request){
        $validated = $request->validated();


    }
}
