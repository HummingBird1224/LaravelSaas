<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Review;
use App\Models\Service;
use App\Models\Guide;
use App\Models\ServiceUI;
use App\Models\ServicePricePlan;
use App\Models\DocumentDown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Guid\Guid;

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
        return view('services.list', ['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('services.add');
    }

    public function store(Request $request) {
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

        $service->up_user()->attach(Auth::id());

		return redirect()->route('service_view', ['id' => $service->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     dd($request);
    // }

    public function requested_materials()
    {
        $guide_id = DocumentDown::select('guide_id')->where('user_id', Auth::id())->get();
        $service_id = DocumentDown::select('service_id')->where('user_id', Auth::id())->get();
        $gids = json_decode(json_encode($guide_id), true);
        $sids = json_decode(json_encode($service_id), true);
        $request_gid = [];
        $request_sid = [];

        foreach ($gids as $key => $gid) {
            foreach ($gid as $key => $g) {
                foreach (json_decode($g) as $j) {
                    array_push($request_gid, $j);
                }
            }
        }
        foreach ($sids as $key => $sid) {
            foreach ($sid as $key => $s) {
                foreach (json_decode($s) as $k) {
                    array_push($request_sid, $k);
                }
            }
        }
        $requested_guides = Guide::whereIn('id', array_unique($request_gid))->get();
        $requested_services = Service::whereIn('id', array_unique($request_sid))->get();

        return view('mypage.requested_materials', ['r_guides'=>$requested_guides, 'r_services'=>$requested_services]);
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
        $service=Service::reviewAvgCount()->findOrFail($id);
        $all_review = Review::where('service_id', $id)->where('status', 'approved')->limit(5)->get();
        $reviews = [];
        for($i = 1; $i < 6; $i++){
            $reviews[$i] = $service->score_count($i, $service->id);
        }
        $service_user = Service::select('user_id')->where('id', $id)->get();
        $service_user_id = $service_user[0]->user_id;
        $service_company = Company::where('user_id', $service_user_id)->get();
        $service_company = $service_company[0];
        // dd($service_company);


        return view('services.show', ['service'=>$service, 'reviews'=>$reviews, 'all_review'=>$all_review, 'service_company'=>$service_company]);
    }

    public function service_reviews($id)
    {
        $service=Service::reviewAvgCount()->findOrFail($id);
        $all_reviews = Review::where('service_id', $id)->where('status', 'approved')->get();
        $reviews = [];
        for($i = 1; $i < 6; $i++){
            $reviews[$i] = $service->score_count($i, $service->id);
        }
        $sizes=[];
        $sizes[1]=0;
        $sizes[2]=0;
        $sizes[3]=0;
        $sizes[4]=0;
        $sizes[5]=0;
        foreach($all_reviews as $review){
            $size=$review->user->company->corporation_scale;
            if($size == "no_employee" | $size== "very_small") $sizes[1]++;
            else if($size == 'smaller') $sizes[2]++;
            else if($size == 'small' | $size == 'medium') $sizes[3]++;
            else if($size == 'large' | $size == 'small_large' | $size == 'medium_large') $sizes[4]++;
            else $sizes[5]++;
        }
        $services=Service::where('guide_id', $service->guide_id)->reviewAvgCount()->where('data', '!=', null)->get();

        return view('services.all_reviews', [
                    'service'=>$service, 
                    'reviews'=>$reviews, 
                    'all_reviews'=>$all_reviews, 
                    'sizes'=>$sizes,
                    'services'=>$services
                ]);
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
