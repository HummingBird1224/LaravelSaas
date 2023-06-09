<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Guide;
use App\Models\Service;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommended_guides=Guide::where('recommended', 1)->get();
        $common_guides=Guide::where('recommended',0)->get();
        return view('guides.guide_list', ['recommended_guides'=>$recommended_guides,'common_guides'=>$common_guides]);   
    }

    public function guide_list(){
        $guides=Guide::with('category')->get();
        return view('admin.category_documents.list', ['guides'=>$guides]);
    }

    public function search(Request $request)
    {
        $search_word=$request->get('search_word');
        if($search_word){
            $common_guides = Guide:: where('recommended',0)
                            -> where('title', 'like', '%'.$search_word.'%')
                             ->get();
        }
        else {
            $common_guides = Guide:: where('recommended',0)->get();
        }
        
        return response()->json($common_guides);
    }

    public function download_confirm(Request $request)
    {
        $type=$request->query('type');
        // dd($type);
        if($type=='document'){
            $service=Service::with('up_user')->reviewavgcount()->findOrFail($request->query('id'));
            $c_services=Service::where('guide_id', $service->guide_id)
                        ->where('id','!=', $service->id)->with('up_user')->reviewavgcount()->get();
            $c_services=$c_services->where('data', '!=', null);
            return view('guides.download_confirm', [
                'service'=>$service, 
                'c_services'=>$c_services, 
                'type'=>'document',
            ]); 
        }
        else if($type=='category_documents'){
            $docs=$request->query('id');
            $doc_arr=array();
            foreach(explode(',', $docs) as $i){
                $doc=Guide::with(['services'=>function($query){
                    $query->with('up_user');
                }])->findOrFail($i);
                array_push($doc_arr, $doc);
            }
            return view('guides.download_confirm',['requested_guides'=>$doc_arr, 'type'=>'category_document'] );
        }
        else if($type=='category'){
            $c_id=$request->query('id');
            $category=Category::findOrFail($c_id);
            $services=$category->guide->services->where('data', '!=', null);
            
            return view('guides.download_confirm',['services'=>$services,'c_title'=>$category->title, 'type'=>'category']);
        }
    }

    public function service_add($id)
    {
        $service=Service::with('up_user')->reviewavgcount()->findOrFail($id);
        return $service;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(Guide $guide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guide $guide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
        //
    }
}
