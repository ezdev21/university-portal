<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::TEACHER_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teacher')->except('logout');
    }
    public function showLoginForm(){
        return view('teacher.login');
    }
    public function login(Request $request)
    {
       $this->validate($request,[
           'email'=>['required','string','email'],
           'password'=>['required','string','min:4']
       ]);
       if(Auth::guard('teacher')->attempt(
           ['email'=>$request->email,
           'password'=>$request->password],
           $request->remember)){
               redirect()->route('teacher.home');
           }
           return redirect()->back()->withInput($request->except('password'));
    }
    public function logout(Request $request)
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('/');
    }
}
