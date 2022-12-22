<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = "/home";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function authenticated($request, $user)
    {

        // dd(Auth::user()->role[0]->role_name);
        $redirectTo = "pengunjung/home";

        if (Auth::user()->role[0]->role_name == 'Admin'){
            $redirectTo = "admin/home";
        }

        elseif (Auth::user()->role[0]->role_name == 'Kader'){
            $redirectTo = "kader/home";
        }

        return redirect($redirectTo);
        dd($redirectTo);
    }
}
