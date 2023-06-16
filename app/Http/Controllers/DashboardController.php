<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\LargeCategory;
use App\Models\Issue;
use App\Models\Category;
use App\Models\Guide;

class DashboardController extends Controller
{
    public function index()
    {
        $recommended_services=Service::where('recommended', 1)->with('category')->with('guide')->get();
        $services=Service::get();
        $lcs=LargeCategory::with('categories')->get();
        $issues=Issue::get();
        $categories=Category::with(['services'=>function($query){
            $query->withCount(['reviews'=>function($query){
              $query->where('status', 'approved');
             }])->withAvg(['reviews'=>function($query){
              $query->where('status', 'approved');
             }],  'score');
        }])->get();
        $guides=Guide::where('free',1)->limit(8)->get();
        return view('dashboard', [
            'r_services'=>$recommended_services, 
            'services'=>$services,
            'lcs'=>$lcs,
            'issues'=>$issues,
            'categories'=>$categories,
            'guides'=>$guides,
        ]);
    }
}
