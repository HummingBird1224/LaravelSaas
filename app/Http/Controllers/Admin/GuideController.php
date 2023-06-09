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
        dd($request);
        $image=$request->file('image');
        $material=$request->file('material');
        $guide=Company::create(
            [
                'title'=>$request->title,
                'description'=>$request->description,
                'industry'=>$request->industry,
                'location'=>$request->prefecture,
                'address'=>$request->address,
                'representative'=>$request->representative,
                'phone_number'=>$request->phone_number,
                'founded_year'=>$request->founded_year,
                'founded_month'=>$request->founded_month,
                'capital'=>$request->capital,
                'company_url'=>$request->company_url,
            ]

        );
        if($file) {
            $company->logo = $file->storeAs(
            'uploads/company/logos', $file->hashName(), 'public'
            );
            $company->save();
        }
        return back()->withInput();
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
