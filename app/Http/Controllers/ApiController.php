<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function responseOk(){
        return [
            'status' => 'ok'
        ];
    }


    public function responseErr(){
        return [
            'status' => 'err'
        ];
    }
}
