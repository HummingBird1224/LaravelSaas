<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::get();
        return view('client.services.list', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_view()
    {
        return view('client.services.add');
    }

    public function add_service(Request $request) {
        $service = new Service;

		$service->user_id = Auth::id();
		$service->title = $request->title;
		$service->description = $request->description;
		$service->logo = $request->logo;
		// $service->secret_key = $request->secret_key;
		// $service->partner_tag = $request->partner_tag;

		$service->save();
        $service_id = 16;

		return redirect()->route('service_view', ['id' => $service_id]);
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
    }

    public function service_activities()
    {
        return view('admin.service_activities');
    }

    public function service_managing()
    {
        return view('admin.service_managing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::findOrFail($id);
        return view('services.show', ['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}