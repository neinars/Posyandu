<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengunjung;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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
    protected $redirectTo = "pengunjung/home";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users', 'regex:/^\S*$/u', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'NIK' => ['required', 'string', 'max:16', 'min:16'],
            'address' => ['required'],
            'phone' => ['required', 'string', 'regex:/(08)[0-9]/', 'max:13', 'min:10'],
            'jk' => ['required'],
            'age' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            ]);
            
            UserRole::create([
                'user_id' => $user->id,
                'role_id' => 3,
            ]);
            
            Pengunjung::create([
                'name' => $data['name'],
                'NIK' => $data['NIK'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'jk' => $data['jk'],
                'age' => $data['age'],
                'user_id' => $user->id,
                ]);

                // dd($user);
            return $user;
    }
}
