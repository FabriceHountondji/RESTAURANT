<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Admin\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Session;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function login(){

        return view('auth.login');
    }

    public function authenticate(Request $request){

        $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        $compte = User::where('email','=', $request->email)->first();

        if($compte){

            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                return redirect(route('dashboard.index'))->with('success', 'Vous êtes connecté à présent ');
            }else{
                return back()->with('error', 'Mot de passe est incorrect');
            }
        }else{
            return back()->with('error', 'Nous n\'avons pas pu trouver un compte pour votre adresse E-mail');
        }
    }
}
