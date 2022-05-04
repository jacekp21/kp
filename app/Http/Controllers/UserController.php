<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get User List
        $users = User::where('username', '!=', 'Admin')
                        ->where('status', 1)
                        ->get();

        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create New User
        return view('user.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store user information
        $request->request->add(['status' => 1]);

        // User Input Validation
        $validatedInput = $request->validate([
            'username'      => 'required',
            'password'      => 'required',
            'position'      => 'required|in:Admin,Manager,Accounting,Purchasing',
            'no_telp'       => 'required',
            'role'          => 'required|in:admin,manager,staff'
        ],
        // User Input Validation Error Message
        [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required',
            'position.in' => 'Position selection is invalid',
            'no_telp.required' => 'Phone Number is required',
            'role.in' => 'Role selection is invalid',
        ]);

        $post = $request;
        $id = $request->user_id;

        if ($id) {
            // Edit
            $post = User::find($id)->update($post->all());

            if ($post) {
                return redirect('/user')->with('success','Data User berhasil diperbaharui');
            } else {
                return redirect('/user')->with('error','Data User gagal diperbaharui');
            }

        } else {
            // New
            $user_id = User::create($post->all());

            if ($user_id) {
                return redirect('/user')->with('success','Data User berhasil diinput');
            } else {
                return redirect('/user')->with('error','Data User gagal diinput');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show User by Id
        // return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get user id and store it on user variable
        $user = User::find($id);
        // Return to view for edit
        return view('user.new', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        // Disable User
        $disabled = User::find($id)->update(['status' => 0]);

        if ($disabled) {
            return back()->with('success','Data User berhasil dinonaktifkan');
        } else {
            return back()->with('error','Data User gagal dinonaktifkan');
        }

    }
}
