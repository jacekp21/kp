<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

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

        // $validator = Validator::make($request->all(), [
        //     'name'          => 'required',
        //     'address'       => 'required',
        //     'telpon'        => 'required',
        //     'email'         => 'required|email:dns',
        //     'bank'          => 'required',
        //     'cabang'        => 'required',
        //     'nama_rekening' => 'required',
        //     'no_rek'        => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/setting/vendor/new')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
 
        // Retrieve the validated input...
        // $validated = $validator->validated();

        $request->validate([
            'name'          => 'required',
            'address'       => 'required',
            'telpon'        => 'required',
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

        // return response()->json($post);

        if ($id) {
            // Edit
            $post = Vendor::find($id)->update($post);

            if ($post) {
                return back()->with('success','Data Vendor Berhasil diperbaharui');
            } else {
                return redirect('/setting/vendor')->with('error','Data Vendor Gagal diperbaharui');
            }

        } else {
            // New
            $post['created_by'] = $user->id;
            // return response()->json($post);
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
