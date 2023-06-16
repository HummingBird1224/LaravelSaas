<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\LargeCategory;
use App\Models\Issue;

class DashboardController extends Controller
{
    public function index()
    {
        $recommended_services=Service::where('recommended', 1)->with('category')->with('guide')->get();
        $services=Service::get();
        $lcs=LargeCategory::with('categories')->get();
        $issues=Issue::get();
        return view('dashboard', [
            'r_services'=>$recommended_services, 
            'services'=>$services,
            'lcs'=>$lcs,
            'issues'=>$issues,
        ]);
    }
}
