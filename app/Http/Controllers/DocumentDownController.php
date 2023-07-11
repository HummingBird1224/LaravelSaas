<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Guide;
use App\Models\Service;
use App\Models\Company;
use App\Models\Category;
use App\Models\DocumentDown;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Block\Element\Document;

class DocumentDownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function post_mail(Request $request) {
        $code = substr(md5(uniqid(mt_rand(), true)), 0, 20);
        $guides = json_encode($request->guide);
        $services = json_encode($request->service);

        $create_row = DocumentDown::create([
			'user_id'     =>  Auth::id(),
			'guide_id'    =>  $guides,
      		'service_id'  =>  $services,
			'down_link'   =>  $code,
		]);
        $create_row->save();
        

        

        // dd($code);
        // $user = User::findOrFail(Auth::id());
        // $user->first_name           =   $request->first_name;
        // $user->last_name            =   $request->last_name;
        // $user->kana_first           =   $request->kana_first;
        // $user->kana_last            =   $request->kana_last;
        // $user->phone_number         =   $request->phone_number;
        // $user->department           =   $request->department;
        // $user->official_position    =   $request->job_title;
        // $user->company_name         =   $request->company_name;
        // $user->prefecture           =   $request->prefecture;
        // $user->address              =   $request->address;
        // $user->business_type        =   $request->industry;
        // $user->corporation_scale    =   $request->employee_number;
        $details = [];
        $details['email'] = $request->email;
        $details['site_domain'] = request()->getHost();
        $details['site_url'] = 'https://' . request()->getHost();
        $details['down_link'] = 'https://' . request()->getHost() . '/dowonload/document/' . $code;
        // dd($details);
        // $service = $request->service;
        // dd($guide, $service);
        // $data = "";
		// $filename = "Download File";
		// $data .= "This is download file.\n";
        // $data .= "First Name: " . $request->first_name . "\n";
        // $data .= "Last Name: " . $request->last_name . "\n";
        // $data .= "Kana Name: " . $request->kana_first . " " . $request->kana_last . "\n";
        // $data .= "Email Address: " . $request->email . "\n";

        // header('Content-Type: application/txt');
		// header('Content-Disposition: attachment; filename="' . $filename . "_" . date("Y-m-d") . '.txt"');
		// echo $data;
		// exit();

        Mail::to($details['email'])
				->send(new \App\Mail\DocDownMail($details));

                
        // dd($request);
        

        return redirect()->route('requested_materials');
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
     * @param  \App\Models\DocumentDown  $documentDown
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentDown $documentDown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocumentDown  $documentDown
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentDown $documentDown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DocumentDown  $documentDown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentDown $documentDown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocumentDown  $documentDown
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentDown $documentDown)
    {
        //
    }
}
