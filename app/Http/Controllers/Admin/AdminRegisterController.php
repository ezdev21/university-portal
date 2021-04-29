<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Teacher;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeacherRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:teacher');
    }

    public function showRegistrationForm()
    {
        return view('teacher.register');
    }
    public function register(Request $request)
    {
        $this->validate($request,[
            'name'=>['string','required'],
            'email'=>['required','email'],
            'password'=>['required','min:4']
        ]);
        try{
            $teacher=Teacher::create(
                ['name'=>$request->name,
                 'email'=>$request->email,
                 'password'=>$request->password]
            );
            Auth::guard('teacher')->loginUsingId($teacher->id);
            return redirect()->route('teacher.home');
        }
        catch(\Exception $e){
          return redirect()->back()->withInput($request->except('password'));
        }
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:4', 'confirmed'],
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(array $data)
    // {
    //    return Teacher::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
