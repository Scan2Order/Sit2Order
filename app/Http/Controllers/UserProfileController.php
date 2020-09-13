<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index()
    {
        $user = auth()->user();
        // dd($user);
        return view('User/home', ['user' => $user]);
    }

    public function update(Request $request)
    {

        /**
         * fetching the user model
         */
        $user = Auth::User();


        /**
         * Validate request/input 
         **/
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required'
        ]);

        $user = User::findOrFail(auth()->id());
        $user->name = $request->name;
        $user->phone = $request->phone;

        $user->save();

        /**
         * storing the input fields name & email in variable $input
         * type array
         **/
        // $input = $request->only('name', 'phone');



        /**
         * Accessing the update method and passing in $input array of data
         **/
        // $user->update($input);

        /**
         * after everything is done return them pack to /profile/ uri
         **/
        return redirect('/user');
    }

    public function create()
    {
        $user = auth()->user();
        return view('User/user-assets/profileEdit', ['user' => $user]);
    }
}
