<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get vendor data
        $vendors = Vendor::all();

        // return view('setting.vendor.index');

        // if (view()->exists('setting.vendor.index')) {
        //     // return "ada vendor";
        //     return view('setting.vendor.index');
        // }

        return view('setting.vendor.index')->with('vendors', $vendors);
        // return view('setting/vendor/vendor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Redirect to Vendor New Page
        return view('setting.vendor.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data
        // $validated = $request->validate([
        //     'name'          => 'required',
        //     'address'       => 'required',
        //     'telpon'        => 'required',
        //     'email'         => 'required',
        //     'bank'          => 'required',
        //     'cabang'        => 'required',
        //     'nama_rekening' => 'required',
        //     'no_rek'        => 'required',
        // ]);

        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|unique:employees|max:255',
        //     'age' => 'required',
        //     'contact_no' => 'required|unique:employees|max:255',
        //   ]);

        // Store user information
        $post = $request;
        $id = $request->user_id;

        return response()->json($post);

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

        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
