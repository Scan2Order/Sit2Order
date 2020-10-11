<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Request;
use Auth;
use Illuminate\Http\Request as HttpRequest;

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

    protected function registered(HttpRequest $request, $user)
    {
        if ($user->hasRole('superadministrator')) {
            return redirect('/admin/dashboard');
        }

        if ($user->hasRole('restaurant')) {
            return redirect('/restaurant');
        }

        if ($user->hasRole('user')) {
            return redirect('/menu');
        }
    }
    // public function redirectTo()
    // {
    //     $role = Auth::user()->role;
    //     switch ($role) {
    //         case 'user':
    //             return '/menu';
    //             break;
    //         case 'restaurant':
    //             return '/restaurant';
    //             break;

    //         default:
    //             return '/menu';
    //             break;
    //     }
    //     dd($role);
    // }


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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'min:11'],
            'gender' => ['required', 'string'],
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone'  => $data['phone'],
            'gender' => $data['gender'],
            // 'role' => $data['role'],
        ]);
        switch ($data['role']) {
            case 1:
                $user->attachRole('user');
                return $user;
                break;
            case 2:
                $user->attachRole('restaurant');
                return $user;
                break;
            default:
                $user->attachRole('user');
                return $user;
                break;
        }
        // $user->attachRole('user');

    }
}
