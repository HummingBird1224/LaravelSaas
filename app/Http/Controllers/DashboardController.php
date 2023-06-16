<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $recommended_services=Service::where('recommended', 1)->get();
        $services=Service::get();
        return view('dashboard', ['r_services'=>$recommended_services, 'services'=>$services]);
    }
}
