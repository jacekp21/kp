<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\po;
use App\Model\po_detail;
// use App\Model\User;

class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // set variabel
        $data = "ini PO Controller!";

        // contoh pemanggilan data dari model po
        // $po = 

        // Jika kita ingin return ke view PO
        // return view('po.purchaseorder', ['name' => 'test']);

        // foreach (Users::all() as $Users) {
        //     echo $Users->username;
        // }

        // return user::all();

        return view('po', [
            'po' => po::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // salah satu cara passing id melalui URL
        // return "PO Controller Show dengan id : " . $id;

        // return view('po.show', [
        //     'po' => po::findOrFail($id)
        // ]);
        
        // Jika kita ingin 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
