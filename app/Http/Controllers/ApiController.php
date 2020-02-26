<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function responseOk($with = []) : array {
        $response = [ 'status' => 'ok' ];
        foreach ($with as $key => $item){
            $response[$key] = $item;
        }
        return $response;
    }

    public function responseErr(array $with = []): array {
        $response = [ 'status' => 'err' ];

        foreach ($with as $key => $item){
            $response[$key] = $item;
        }

        return $response;
    }

    public function ok(array $with = []) : array {
        return $this->responseOk($with);
    }

    public function err(array $with = [] ) : array {
        return $this->responseErr($with);
    }

}
