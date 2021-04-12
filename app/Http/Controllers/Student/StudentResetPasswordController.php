<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class StudentResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::STUDENT_HOME;
    public function __construct(){
        $this->middleware('guest:student');
    }
    public function showResetForm(Request $request)
    {
        return view('student.passwords.reset',[
            'token'=>$request->token,
            'email'=>$request->email]);
    }
    public function guard(){
        return Auth::guard('student');
    }
    public function broker(){
        return Password::broker('students');
    }
    public function reset(Request $request)
    {
        
    }
}
