<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
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

        $lang = app()->getLocale();
        $aboutCards = \Cache::get("about.cards.{$lang}", function () {
            return About::where('type', About::CARD)->orderBy('sort', 'desc')->get();
        });
        $about = \Cache::get("about.{$lang}", function () {
            return About::where('type', About::MAIN)->first();
        });

        return view('web.pages.about', compact('about', 'aboutCards'));
    }



}
