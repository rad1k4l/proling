<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $about = About::where('type', About::MAIN)->first();
        $aboutCards = About::where('type', About::CARD)->orderBy('sort', 'desc')->get();



        return view('web.pages.about', compact('about', 'aboutCards'));
    }



}
