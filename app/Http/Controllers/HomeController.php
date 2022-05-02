<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return "ada";
    }

    public function showLogin()
    {
        // Form View
        return view('login');
    }

    public function login(Request $request)
    {
        // Login logic
        // Creating Rules for Email and Password
        $rules = array(
            'username' => 'required|username', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:8'
        );

        // return response()->json($request);

        // password has to be greater than 3 characters and can only be alphanumeric and);
        // checking all field
        $validator = Validator::make(Input::all() , $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails())
        {
            return Redirect::to('login')->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        }
        else
        {
            // create our user data for the authentication
            $userdata = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );
            // attempt to do the login
            if (Auth::attempt($userdata))
            {
                // validation successful
                return view('dashboard');
            }
            else
            {
                // validation not successful, send back to form
                return Redirect::to('checklogin');
            }
        }
    }

    public function logout()
    {
        // Login logic
    }

    
}
