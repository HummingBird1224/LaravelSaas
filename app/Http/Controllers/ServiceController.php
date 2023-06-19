<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use App\Models\Guide;
use App\Models\ServiceUI;
use App\Models\ServicePricePlan;
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
        // dd($request->all());
        // dd($request);
        $service = new Service;

		$service->user_id       =   Auth::id();
		$service->guide_id      =   $request->guide_id;
		$service->title         =   $request->title;
		$service->description   =   $request->description;

        $data = $request->file('data');
        $logo = $request->file('logo_img');
        if($data && $logo) {
            $service->data = $data->storeAs(
                'uploads/services/datas', time().'_'.$data->getClientOriginalName(), 'public'
            );
            $service->logo = $logo->storeAs(
                'uploads/services/logos', time().'_'.$logo->getClientOriginalName(), 'public'
            );
        }
		$service->save();

        for ($i = 0; $i < count($request->uis); $i++) {
            $service_uis = new ServiceUI;

            $service_uis->service_id    =   $service->id;
            $service_uis->description   =   $request->uis[$i]['description'];

            $uis    =   $request->file('uis');
            if($uis) {
                $service_uis->portfolio = $uis[$i]['img']->storeAs(
                    'uploads/services/uis', time().'_'.$uis[$i]['img']->getClientOriginalName(), 'public'
                );
            }

            $service_uis->save();
        }

        foreach ($request->plans as $plan) {
            $service_plans = new ServicePricePlan;

            $service_plans->service_id  =   $service->id;
            $service_plans->title       =   $plan['title'];
            $service_plans->price       =   $plan['year'];
            $service_plans->monthly     =   $plan['month'];
            $service_plans->initial     =   $plan['initial_price'];
            $service_plans->min_user    =   $plan['min_user'];
            $service_plans->min_usage   =   $plan['min_usage'];
            $service_plans->description =   $plan['description'];

            $service_plans->save();
        }

		return redirect()->route('service_view', ['id' => $service->id]);
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

    public function requested_materials()
    {
        $requested_services=Auth::user()->down_services;
        return view('mypage.requested_materials', ['r_services'=>$requested_services]);
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

        // $review = Review :: where('service_id', $id)->where('status', 'publishing')->get();
        return view('services.show', ['service'=>$service, 'review'=>$review]);
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