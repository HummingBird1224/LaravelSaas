<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Company;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'email'                 => 'required|email|max:255',
                'password'              => 'required|min:6|max:30|confirmed',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'email.required' => 'メールフィールドは必須です。',
                'email.email' => 'メールは有効なメールアドレスである必要があります。',
                'email.max' => '電子メールは255文字を超えてはなりません。',

                'password.required' => 'パスワードフィールドは必須です。',
                'password.min' => 'パスワードは6文字以上である必要があります。',
                'password.max' => 'パスワードは30文字以内にする必要があります。',
                'password.confirmed' => 'パスワードの確認が一致しません。',

                'password_confirmation.required' => 'パスワード確認フィールドは必須です。',
                'password_confirmation.same' => 'パスワードの確認とパスワードは一致している必要があります。',
            ]
        );
    }
    public function index()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function change_profile_view(){
        $user = User::findOrFail(Auth::id());
		return view('account.change_profile',['user'=>$user] );
	}

	public function change_email_view(){
		return view('account.change_email');
	}

    public function company_profile_view(){
        $user = User::findOrFail(Auth::id())
                ->with(['company'=>function($query){
                    $query->where('source', 1);
                }])->first();
        return view('account.company_profile', ['user'=>$user]);
    }

    public function profile_edit(Request $request){
        $_user=$request->user;
        $_company=$request->company;
        $file=$request->file('avatar');
        $user = User::updateOrCreate(
            [
                'id'=>Auth::id()
            ],
            [
                'first_name'=>$_user['first_name'],
                'last_name'=>$_user['last_name'],
                'furigana_first'=>$_user['furigana_first'],
                'furigana_last'=>$_user['furigana_last'],
                'phone_number'=>$_user['phone_number'],
            ]);
        if($file) {
            $user->avatar = $file->storeAs(
            'uploads/avatars', $file->hashName(), 'public'
            );
            $user->save();
        }
        $company=Company::updateOrCreate(
                [
                    'user_id'=>Auth::id(),
                    'source'=>0
                ],
                [
                    'name'=>$_company['name'],
                    'employee_number'=>$_company['employee_number'],
                    'industry'=>$_company['industry'],
                    'location'=>$_company['prefecture'],
                    'address'=>$_company['address'],
                    'department'=>$_company['department'],
                    'job_title'=>$_company['job_title'],
                ]);
        return back()->withInput();
    }

    public function email_edit(Request $request){
        $this->validator($request->all())->validate();
        $user = User::findOrFail(Auth::id())
                ->update([
                    'email'=> $request->email,
                    'password'=>Hash::make($request->password)
                ]);
        return back();
    }

    public function company_profile_edit(Request $request){
        $file=$request->file('logo');
        $company=Company::updateOrCreate(
                [
                    'user_id'=>Auth::id(),
                    'source'=>1
                ],
                [
                    'name'=>$request->name,
                    'employee_number'=>$request->employee_number,
                    'industry'=>$request->industry,
                    'location'=>$request->prefecture,
                    'address'=>$request->address,
                    'representative'=>$request->representative,
                    'phone_number'=>$request->phone_number,
                    'founded_year'=>$request->founded_year,
                    'founded_month'=>$request->founded_month,
                    'capital'=>$request->capital,
                    'company_url'=>$request->company_url,
                ]);
        if($file) {
            $company->logo = $file->storeAs(
            'uploads/company/logos', $file->hashName(), 'public'
            );
            $company->save();
        }
        return back()->withInput();
    }
}
