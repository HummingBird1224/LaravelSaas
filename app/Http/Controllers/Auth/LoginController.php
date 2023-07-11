<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectAfterLogout = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function loginview(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request);
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'メールフィールドは必須です。',
                'email.email' => 'メールは有効なメールアドレスである必要があります。',
                'password.required' => 'パスワードフィールドは必須です。',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'error' => 'メールアドレス、パスワードをご確認ください。またはソーシャルログインをお試しください。',
        ]);
    }

    /**
     * Logout, Clear Session, and Return.
     *
     * @return void
     */
    
    public function logout()
    {
        $user = Auth::user();
        Log::info('User Logged Out. ', [$user]);
        Auth::logout();
        Session::flush();
        
        return redirect('/');
    }

    public function resetPwd(Request $request) {
        $details = [];
        $bccAry = [];
        $pwd = User::where('email', $request->email)->get();
        
        if (count($pwd) == 0) {
            return '<div id="toast-container" class="toast-top-right"></div>';
        } else {
            $details = $pwd[0];
        }
        
        $details['pwr_url'] = 'http://keepaautobuy.xsrv.jp/reset_pwd?token='.$pwd[0]['_token'];
        $details['name'] = $pwd[0]['name'];

        Mail::to($details["email"])
                ->bcc($bccAry)         
                ->send(new \App\Mail\PublicMail($details));
        return redirect()->route('logout');
    }

    public function forgotPwd () {
        $emails = User::select('email')->get();
        return view('auth.forgot', ['emails' => $emails]);
    }

    public function forgot_email (Request $request) {
        $users = User::where('email', $request->email)->get();
        $user = $users[0];
        $user_pass = base64_encode(random_bytes(10));
        $password = Hash::make($user_pass);
        $user->password = $password;
        $user->save();

        $details = [];
        $details['email'] = $request->email;
        $details['name'] = $user['first_name'] . " " . $user['last_name'];
        $details['password'] = $user_pass;
        $details['siteUrl'] = 'https://' . request()->getHost();

        // Mail::to($details['email'])
		// 		->send(new \App\Mail\ForgotPasswordMail($details));

        return;
    }

    public function updatePwd(Request $request) {
        $user = User::where('_token', $request['token'])->first();
        $user->forceFill([
            'password' => Hash::make($request['password']),
        ])->save();
        return redirect()->route('logout');
    }
}