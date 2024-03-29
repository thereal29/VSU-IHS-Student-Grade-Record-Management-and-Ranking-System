<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // for login into different user roles
    public function login(Request $request){
        $errors = new MessageBag; // initiate MessageBag
        $input = $request->all();
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:8',
        ]);
        if(auth()->attempt(['username'=>$input["username"], 'password'=>$input["password"]])){
            if(auth()->user()->role == 'Administrator'){
                return redirect()->route('admin.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the System Administrator
            }else if(auth()->user()->role == 'Honors and Awards Committee'){
                return redirect()->route('honors_committee.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Honors and Awards Committee
            }else if(auth()->user()->role == 'Guidance Facilitator'){
                return redirect()->route('guidance_facilitator.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Guidance Facilitator
            }else if(auth()->user()->role == 'Adviser'){
                return redirect()->route('adviser.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Adviser
            }else if(auth()->user()->role == 'Subject Teacher'){
                return redirect()->route('subject_teacher.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Subject Teacher
            }else if(auth()->user()->role == "Non-graduating Junior High School"){
                return redirect()->route('stud1.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Non-Graduating Junior High School
            }else if(auth()->user()->role == 'Graduating Junior High School student and qualified for honors'){
                return redirect()->route('stud2.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Graduating Junior High School student and qualified for honors
            }else if(auth()->user()->role == 'Non-graduating Senior High School student or non-qualified student for honors'){
                return redirect()->route('stud3.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Non-Graduating Senior High School student or non-qualified for honors
            }else if(auth()->user()->role == 'Graduating Senior High School student and qualified for honors'){
                return redirect()->route('stud4.dashboard')->with('alert-success', 'You are now logged in.');// this route is for the Graduating Senior High School and qualified for honors
            }else{
                return redirect()->route('/');
            }
        }
        else{
            $errors = new MessageBag(['password' => ['Incorrect Username and/or Password.']]);
            return Redirect::back()->withErrors($errors)->withInput($request->only('username','remember'));
        }
    }
}
