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
        // View user page
        $users = User::where('username', '!=', 'Admin')->get();

        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create user page
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
        $post = $request;
        $id = $request->user_id;

        if ($id) {
            // Edit
            $post = User::find($id)->update($post);

            if ($post) {
                return back()->with('success','Data User Berhasil diperbaharui');
            } else {
                return redirect('/user')->with('error','Data User Gagal diperbaharui');
            }

        } else {
            // New
            $user_id = User::create($post->all());

            if ($user_id) {
                return redirect('/user')->with('success','Data User Berhasil di Input');
            } else {
                return redirect('/user')->with('error','Data User Gagal di Input');
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
        // Return to view for edit
        $user = User::find($id);

        return view('user.new', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     // Update user
    //     dd($request, $id);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        //
    }
}
