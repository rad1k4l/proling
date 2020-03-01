<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {

        $services = Service::orderBy('sort', 'ASC')->get();
        return view('web.pages.service', compact('services'));
    }


}
