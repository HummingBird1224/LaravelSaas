<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

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
        $docs=$request->checked_docs;
        $doc_arr=array();
        for($i=0; $i<count($docs);$i++){
            $doc=Guide::findOrFail($docs[$i]);
            array_push($doc_arr, $doc);
        }
        return view('guides.download_confirm', ['requested_guides'=>$doc_arr]);
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
