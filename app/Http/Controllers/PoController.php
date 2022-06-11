<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Warehouse;
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
        $pos = Po::with('vendor')->with('warehouse')->get();

        return view('po.index')->with('pos', $pos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Populate Vendor
        $vendors = Vendor::all();
        
        // Populate Warehouse
        $whs = Warehouse::all();

        // Redirect to New PO Page
        return view('po.new', ['vendors' => $vendors], ['whs' => $whs]);
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
        $id = $post['id'];

        return $post;

        $pod = $post['pod'];
        unset($post['pod']);

        if ($id) {
            echo "masuk ini";
            return $post;
            exit;
            // Update PO
            $po = Po::find($id)->update($post);

            $po_detail = $po->po_detail()->upsert($pod);

            if ($po_detail) {
                return redirect('/po')->with('success','Data PO berhasil diperbaharui');
            } else {
                return redirect('/po')->with('error','Data PO gagal diperbaharui');
            }
        } else {
            // New PO
            $po = Po::create($post);
            foreach ($pod as $key => $item) {
                $pod[$key]['po_id'] = $po->id;
            }

            $po_detail = $po->po_detail()->createMany($pod);

            if ($po_detail) {
                return redirect('/po')->with('success','Data PO berhasil diinput');
            } else {
                return redirect('/po')->with('error','Data PO gagal diinput');
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
        $pos = Po::with('po_detail')->find($id);

        // Populate Vendor
        $vendors = Vendor::all();
        
        // Populate Warehouse
        $whs = Warehouse::all();

        // return $pos;

        // Return to view for edit
        return view('po.new')->with('pos', $pos)->with('whs', $whs)->with('vendors', $vendors)->with('subTotal', 0)->with('no', 0);
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
