<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $guides=Guide::get();
        return view('admin.category_documents.list', ['guides'=>$guides]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_documents.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('image');
        $material=$request->file('material');
        $guide=Guide::create(
            [
                'title'=>$request->title,
                'description'=>$request->description,
                'category_id'=>$request->category,
                'recommended'=>$request->recommended=='on'?1:0,
            ]

        );
        if($material) {
            $guide->material = $material->storeAs(
            'uploads/guides/materials', time().'_'.$material->getClientOriginalName(), 'public'
            );
            $guide->save();
        }
        if($image) {
            $guide->image = $image->storeAs(
            'uploads/guides/images', time().'_'.$image->getClientOriginalName(), 'public'
            );
            $guide->save();
        }
        return redirect()->route('category_documents_list');
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
    public function delete(Request $request, $id)
	{
		Guide::find($id)->delete();
		return $id;
	}
}
