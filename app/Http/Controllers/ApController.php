<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Warehouse;
use App\Models\Ap;
use App\Models\Ap_detail;
use App\Models\User;

class ApController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all AP
        $aps = Ap::with('vendor')->with('warehouse')->get();

        return view('ap.index')->with('aps', $aps);
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

        // Redirect to New AP Page
        return view('ap.new', ['vendors' => $vendors], ['whs' => $whs])->with('header', 'New Account Payable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Storing Account Payable
        $post = $request->input();

        // return $post;
        $id = $post['id'];

        // User Input Validation
        //$validatedInput = $request->validate([
           // 'Ap_date'       => 'required',
            //'po_no'         => 'required',
           // 'vendor_id'     => 'required',
            //'warehouse_id'  => 'required',
            //'currency'      => 'required|in:IDR,SGD,USD'
       //],
        // User Input Validation Error Message
        //[
            //'po_date.required'      => 'Po Date is required',
            //'po_no.required'        => 'Po number is required',
            //'vendor_id.in'          => 'Vendor selection is invalid',
            //'warehouse_id.required' => 'Warehouse selection is invalid',
           // 'currency.in'           => 'Currency selection is invalid',
        //]);

        $apd = $post['apd'];
        unset($post['apd']);

        if (isset($post['deleted_line_ids'])) {
            $deleted = $post['deleted_line_ids'];
            unset($post['deleted_line_ids']);
        }

        if ($id) {
            // Update AP
            $ap = Ap::find($id)->update($post);

            foreach ($apd as $key => $detail) {
                if (empty($detail['ap_id'])) {
                    $apd[$key]['ap_id'] = $id;
                }
            }

            $ap_detail = ap_detail::upsert($apd, ['id', 'ap_id', 'description', 'qty', 'unit', 'unit_price']);

            if ($ap_detail) {
                if (!empty($deleted)) {
                    Ap_detail::whereIn('id', $deleted)->delete();
                }

                return redirect('/ap')->with('success','Data AP berhasil diperbaharui');
            } else {
                return redirect('/ap')->with('error','Data AP gagal diperbaharui');
            }
        } else {
            // New AP
            $ap = Ap::create($post);
            
            foreach ($apd as $key => $item) {
                $apd[$key]['ap_id'] = $ap->id;
            }

            $ap_detail = $ap->ap_detail()->createMany($apd);

            if ($ap_detail) {
                return redirect('/ap')->with('success','Data AP berhasil diinput');
            } else {
                return redirect('/ap')->with('error','Data AP gagal diinput');
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
        // return "AP Controller Show dengan id : " . $id;

        // return view('ap.show', [
        //     'ap' => ap::findOrFail($id)
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
        // Redirect to AP Edit page
        $aps = Ap::with('ap_detail')->find($id);

        // Populate Vendor
        $vendors = Vendor::all();
        
        // Populate Warehouse
        $whs = Warehouse::all();

        // Return to view for edit
        return view('ap.new')->with('aps', $aps)->with('whs', $whs)->with('vendors', $vendors)->with('subTotal', 0)->with('no', 0)->with('header', 'Edit Account Payable');
    }

    /**
     * Void the specified AP from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function void($id)
    {
        //
    }
}
