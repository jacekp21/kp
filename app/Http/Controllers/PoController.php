<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Po;
use App\Models\Po_detail;
use App\Models\User;

class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all PO
        $po = Po::all();

        return view('po.index')->with('po', $po);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Redirect to New PO Page
        return view('po.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Storing Purchase Order
        $post = $request->input();
        $id = $post->id;
        if ($id) {
            // Update PO
            return "Update PO";
        } else {
            // New PO
            return "New PO";
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
        // Redirect to PO Edit page
    }

    /**
     * Void the specified PO from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function void($id)
    {
        //
    }
}
