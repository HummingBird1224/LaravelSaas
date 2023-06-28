<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $company = Company::where('user_id',Auth::id())->first();
        // dd($company);
        return view('account.company_profile', ['company'=>$company]);
    }

    public function profile_edit(Request $request){
        dd($request);
        $file=$request->file('avatar');
        $user = User::updateOrCreate(
            [
                'id'=>Auth::id()
            ],
            [
                'first_name'=>$request['first_name'],
                'last_name'=>$request['last_name'],
                'kana_first'=>$request['kana_first'],
                'kana_last'=>$request['kana_last'],
                'phone_number'=>$request['phone_number'],
                'company_name'=>$request['company_name'],
                'corporation_scale'=>$request['corporation_scale'],
                'business_type'=>$request['business_type'],
                'prefecture'=>$request['prefecture'],
                'address'=>$request['address'],
                'department'=>$request['department'],
                'official_position'=>$request['official_position'],
                'prefecture'=>$request['prefecture'],
                'address'=>$request['address'],
            ]);
        if($file) {
            $user->avatar = $file->storeAs(
                'uploads/avatars', time().'_'.$file->getClientOriginalName(), 'public'
            );
            $user->save();
        }
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
        $user=Auth::user();
        $file=$request->file('logo');
        $company=Company::updateOrCreate(
                [
                    'user_id'=>Auth::id(),
                ],
                [
                    'name'=>$request->name,
                    'corporation_scale'=>$request->corporation_scale,
                    'business_type'=>$request->business_type,
                    'prefecture'=>$request->prefecture,
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
                'uploads/company/logos', time().'_'.$file->getClientOriginalName(), 'public'
            );
            $company->save();
        }
        if($user->role=='user'){
            $user->role='waiting';
            $user->save();
        }
        return back()->withInput();
    }

    public function client_managing()
    {
        $waiting_users=User::where('role', 'waiting')->get();
        return view('admin.client_managing', ['w_users'=>$waiting_users]);
    }

    public function client_permit($id)
    {
        $user=User::findOrFail($id);
        $user->role="client";
        $user->save();
        return $user;
    }

    public function client_reject(Request $request,$id)
    {
        $user=User::findOrFail($id);
        $user->role="rejected";
        $user->rejected_reason=$request->reason;
        $user->save();
        return $user;
    }

    public function user_list() 
    {
        $users=User::where('role', 'user')->get();
        $clients=User::where('role', 'client')->get();
        return view('admin.user_list', ['users'=>$users, 'clients'=>$clients]);
    }

    public function show_profile($id)
    {
        $profile = User::findOrFail($id);
        return view('admin.change_user_profile', ['user'=>$profile]);
    }

    public function change_profile(Request $request)
    {
        // dd($request);
        $user = User::findOrFail($request->user_id);

        $user->role         = $request->user_role;
        $user->email        = $request->email;
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        $user->kana_first   = $request->kana_first;
        $user->kana_last    = $request->kana_last;
        $user->phone_number = $request->phone_number;
        $user->company_name = $request->company_name;
        $user->corporation_scale = $request->corporation_scale;
        $user->business_type = $request->business_type;
        $user->prefecture   = $request->prefecture;
        $user->address      = $request->address;
        $user->department   = $request->department;
        $user->official_position = $request->official_position;

        $user->save();
        return redirect()->route('user_list');
    }

    public function add_new_user()
    {
        return view('admin.change_user_profile');
    }
    
    public function add_user_profile(Request $request)
    {
        $user_pass = base64_encode(random_bytes(10));
        $user = new User;

        $user->role         = $request->user_role;
        $user->email        = $request->email;
        $user->password     = $user_pass;
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        $user->kana_first   = $request->kana_first;
        $user->kana_last    = $request->kana_last;
        $user->phone_number = $request->phone_number;
        $user->company_name = $request->company_name;
        $user->corporation_scale = $request->corporation_scale;
        $user->business_type = $request->business_type;
        $user->prefecture   = $request->prefecture;
        $user->address      = $request->address;
        $user->department   = $request->department;
        $user->official_position = $request->official_position;

        $user->save();

        $details = [];
        $details['email'] = $request->email;
        $details['password'] = $user_pass;
        $details['siteUrl'] = request()->getHost() . ':' . request()->getPort();

        Mail::to($details['email'])
				->send(new \App\Mail\CreateUserMail($details));
                
        return redirect()->route('user_list');
    }

    public function client_register(Request $request,$id)
    {
        $user=User::findOrFail($id);
        $user->role="rejected";
        $user->rejected_reason=$request->reason;
        $user->save();
        return $user;
    }
}
