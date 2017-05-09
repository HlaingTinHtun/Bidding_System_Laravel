<?php

namespace App\Http\Controllers\Dealer\Auth;

use App\Dealer;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $guard = 'dealer';

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'dealer/myaccount';
    protected $redirectPath = 'dealer/myaccount';

    protected $redirectAfterLogout = 'dealer/login';

   
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name'    => 'required|max:255',
            'email'   => 'required|email|max:255|unique:dealers',
            'password'=> 'required|min:6|confirmed',
            'company' => 'required|max:255',
            'city'    => 'required|max:255',
            'address' => 'required|max:255',
            'terms'   => 'required|min:1'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Dealer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => '2',
            'city' => $data['city'],
            'company' => $data['company'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
        ]);
    }
   
    public function showLoginForm(Request $request)
    {
        $request->session()->forget('url');
        return view('vendors.loginform');
    }

    public function showRegistrationForm()
    {
        return view('vendors.registerform');
    }

  
}
