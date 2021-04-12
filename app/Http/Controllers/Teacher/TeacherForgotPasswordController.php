<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class TeacherForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    public function __construct(){
        $this->middleware('guest:teacher');
    }
    public function showLinkRequestForm()
    {
        return view('teacher.passwords.email');
    }

    public function broker(){
        return Password::broker('teachers');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request,['email'=>'required|email']);
        $response=$this->broker()->sendResetLink($request->only('email'));
        $response==Password::RESET_LINK_SENT
        ?$this->sendResetLinkResponse(Request $request,$response)
        :$this->sendResetLinkFailedResponse(Request $request,$response);
    }
}
