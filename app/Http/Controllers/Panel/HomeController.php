<?php

namespace App\Http\Controllers\Panel {

    use App\Http\Controllers\Controller;

    class HomeController extends Controller
    {

        public function index(){
            return redirect()->route('panel.about.index');
        }


    }
}
