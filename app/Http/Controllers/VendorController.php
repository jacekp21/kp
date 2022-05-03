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

        return view('setting.vendor.index')->with('vendors', $vendors);
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
        // Validasi Data
        $validatedInput = $request->validate([
            'name'          => 'required',
            'address'       => 'required',
            'telpon'        => 'required|max:15',
            'email'         => 'required|email:dns',
            'bank'          => 'required',
            'cabang'        => 'required',
            'nama_rekening' => 'required',
            'no_rek'        => 'required',
        ]);

        // Store Vendor information
        $post = $request;
        $id = $request->id;
        $user = auth()->user();

        if ($id) {
            // Update Vendor
            $post = Vendor::find($id)->update($post);

            if ($post) {
                return back()->with('success','Data Vendor Berhasil diperbaharui');
            } else {
                return redirect('/setting/vendor')->with('error','Data Vendor Gagal diperbaharui');
            }

        } else {
            // Create Vendor
            $post['created_by'] = $user->id;
            $id = Vendor::create($post->all());

            if ($id) {
                return redirect('/setting/vendor')->with('success','Data Vendor Berhasil di Input');
            } else {
                return redirect('/setting/vendor')->with('error','Data Vendor Gagal di Input');
            }
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find vendor
        $vendor = Vendor::find($id);

        // Return to view for edit
        return view('setting.vendor.new', ['vendor' => $vendor]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // Delete Vendor
        dd($id);
    }
}
