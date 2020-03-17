<?php

namespace App\Http\Controllers;

use App\Models\VideoPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function index()
    {



        $videopages = VideoPage::where('sort', 'ASC')->get();
        return view('web.pages.home', compact('videopages'));
    }


}
