<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\userInformation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

use DB;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $adminUser =  User::where('email',$data['admin_email'])->first();
        $adminInfo =  userInformation::where('user_id', $adminUser['id'])->first();
        // dd(password_verify($data['admin_password'], $adminUser['password']));
        //
        if($adminInfo['role'] == 3 && password_verify($data['admin_password'], $adminUser['password']) ){


          $result = DB::table('users')->orderBy('id', 'des')->first();

          userInformation::create([
            'user_id' => $result->id+1,
            'first_lastname' => $data['first_lastname'],
            'second_lastname' => $data['second_lastname'],
            'role_name' => $data['role_name'],
            'role' => $data['role'],
            'branch_Office' => $data['branch_Office']
          ]);


          return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
          ]);

        }

    }
}
