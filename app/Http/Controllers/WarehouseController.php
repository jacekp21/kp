<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List of Warehouse
        $whs = Warehouse::all();

        return view('setting.wh.index')->with('whs', $whs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Redirect to Warehouse new page
        return view('setting.wh.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store Warehouse Information
        // Validasi Data
        $validatedInput = $request->validate([
            'name'              => 'required',
            'address'           => 'required',
            'head_of_warehouse' => 'required',
            'telpon'            => 'required|max:15',
        ],
        // Warehouse Input Validation Custom Error Message
        [
            'name.required' => 'Warehouse name is required',
            'address.required' => 'Warehouse address is required',
            'head_of_warehouse.required' => 'Head of warehouse is required',
            'telpon.required' => 'Phone Number is required'
        ]);

        // Store Warehouse information
        $post = $request->input();
        $id = $request->id;

        if ($id) {
            // Update Warehouse
            $updated = Warehouse::find($id)->update($post);

            if ($updated) {
                return redirect('/setting/wh')->with('success','Data Warehouse Berhasil diperbaharui');
            } else {
                return redirect('/setting/wh')->with('error','Data Warehouse Gagal diperbaharui');
            }

        } else {
            // Create Warehouse
            $created = Warehouse::create($post);

            if ($created) {
                return redirect('/setting/wh')->with('success','Data Warehouse Berhasil di Input');
            } else {
                return redirect('/setting/wh')->with('error','Data Warehouse Gagal di Input');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
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
        // Find warehouse by id
        $wh = Warehouse::find($id);

        // Return to view for edit
        return view('setting.wh.new', ['wh' => $wh]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // Delete Warehouse
    }
}
