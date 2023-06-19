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
        $recommended_services=Service::where('recommended', 1)->with(['guide'=>function($query){
            $query->with('category');
        }])->get();
        $services=Service::get();
        $lcs=LargeCategory::with('categories')->get();
        $issues=Issue::get();
        $categories=Category::with(['guide'=>function($query){
            $query->with(['services'=>function($query){
                $query->withCount(['reviews'=>function($query){
                    $query->where('status', 'approved');
                }])->withAvg(['reviews'=>function($query){
                    $query->where('status', 'approved');
                }],  'score');
            }]);
        }])->get();
        // dd($categories[14]->guide->services);
        
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
