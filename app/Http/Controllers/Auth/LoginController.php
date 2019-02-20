<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    
    public function initLogin(Request $request){
        $params = $request->all();
        $userData = \App\User::where('email',$params['email'])->get(['email','mobile','name','password']);
        if($userData->isEmpty()){
            return response()->json(['message'=>'No User Found.'])->setStatusCode(401,"User Not Found.");
        } else if(!$this->attemptLogin($request)){
            return response()->json(['message'=>'Invalid Credentinals.'])->setStatusCode(401,"Please enter correct password.");
        }
        //$request->flashExcept('password');
        return response()->json(['message'=>'Successfully Loggged In.'])->setStatusCode(200,"OK");
    }  
    
     public function authenticate(Request $request)
    {
         $params = $request->all();
        $userData = \App\User::where('email',$params['email'])->get(['email','mobile','name','password']);
        if($userData->isEmpty()){
            return response()->json(['message'=>'No User Found.'])->setStatusCode(401,"User Not Found.");
        } else if(!$this->attemptLogin($request)){
            return response()->json(['message'=>'Invalid Credentinals.'])->setStatusCode(401,"Please enter correct password.");
        }
        //$request->flashExcept('password');
        return response()->json(['message'=>'Successfully Loggged In.'])->setStatusCode(200,"OK");
    }
}
