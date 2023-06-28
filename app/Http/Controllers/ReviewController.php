<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function repuation_answers()
	{
		$publishing = Review :: where('user_id', Auth::id())->where('status','!=','approved')->with('service')->get();
		$approved = Review :: where('user_id', Auth::id())->where('status', 'approved')->with('service')->get();
		return view('mypage.reputation_answers', ['publishing_reviews'=>$publishing, 'approved_reviews'=>$approved]);
	}

    public function index()
    {
        //
    }

    public function add($service_id) {
        return view('reviews.add_review', ['service_id'=>$service_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		$create_review = new Review;

		$create_review->user_id = Auth::id();
        $create_review->service_id = $request->service_id;
		$create_review->title = $request->title;
		$create_review->description = $request->description;
		$create_review->effect_after_implementation = $request->effect_after_implementation;
		$create_review->score = $request->score;
		$create_review->good_point = $request->good_point;
		$create_review->bad_point = $request->bad_point;
		$create_review->save();

        // return redirect(session('links')[2]);
        
        return redirect()->route('service_view', $request->service_id);
        // return ;
    }

    public function review_managing()
    {
        $reviews=Review::where('status', 'publishing')->with('service')->with('user')->get();
        return view('admin.review_managing', ['reviews'=>$reviews]);
    }

    public function review_permit(Request $request)
    {
        $review=Review::findOrFail($request->id);
        $review->status='approved';
        $review->save();
        return $review;
    }

    public function review_reject(Request $request) {
        $review = Review::findOrFail($request->id);
        $review->rejected_reason = $request->reason;
        $review->status = 'rejected';
        $review->save();
        return $review;
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
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show($service_id, $review_id)
    {
        $service=Service::findOrFail($service_id);
        $review=Review::findOrFail($review_id);
        $services=Service::where('guide_id', $service->guide_id)->where('id','!=', $service->id)->reviewAvgCount()->get();
        return view('reviews.show_review', ['service'=>$service, 'review'=>$review, 'services'=>$services]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review, $id)
    {
        $review=Review::findOrFail($id)->delete();
        return $id;
    }
}
