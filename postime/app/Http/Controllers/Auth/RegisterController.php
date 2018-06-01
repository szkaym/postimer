<?php

namespace App\Http\Controllers\Auth;

use App\Model\TUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:t_users',
            'user_password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Model\TUser
     */
    protected function create(array $data)
    {
        return TUser::create([
            'user_name' => $data['user_name'],
            'user_code' => md5($data['user_email']),
            'user_email' => $data['user_email'],
            'user_active' => 1,
            'user_password' => bcrypt($data['user_password']),
        ]);
    }
}
