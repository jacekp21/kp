<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Warehouse;
use App\Models\payment;
use App\Models\payment_detail;
use App\Models\User;

class PyController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all PY
        $pys = payment::with('vendor')->with('warehouse')->get();

        return view('payment.index')->with('pys', $pys);
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

        // Redirect to New PY Page
        return view('payment.new', ['vendors' => $vendors], ['whs' => $whs])->with('header', 'New Payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Storing Payment
        $post = $request->input();

        // return $post;
        $id = $post['id'];

        $pyd = $post['pyd'];
        unset($post['pyd']);

        if (isset($post['deleted_line_ids'])) {
            $deleted = $post['deleted_line_ids'];
            unset($post['deleted_line_ids']);
        }

        if ($id) {
            // Update PY
            $py = payment::find($id)->update($post);

            foreach ($pyd as $key => $detail) {
                if (empty($detail['py_id'])) {
                    $pyd[$key]['py_id'] = $id;
                }
            }

            $payment_detail = payment_detail::upsert($pyd, ['id', 'ap_id', 'description', 'qty', 'unit', 'unit_price']);

            if ($payment_detail) {
                if (!empty($deleted)) {
                    payment_detail::whereIn('id', $deleted)->delete();
                }

                return redirect('/payment')->with('success','Data PY berhasil diperbaharui');
            } else {
                return redirect('/payment')->with('error','Data PY gagal diperbaharui');
            }
        } else {
            // New PY
            $py = payment::create($post);
            
            foreach ($pyd as $key => $item) {
                $pyd[$key]['py_id'] = $py->id;
            }

            $py_detail = $py->py_detail()->createMany($pyd);

            if ($py_detail) {
                return redirect('/payment')->with('success','Data PY berhasil diinput');
            } else {
                return redirect('/payment')->with('error','Data PY gagal diinput');
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
        return view('payment.show', [
            'py' => payment::with('py_detail')->with('vendor')->with('warehouse')->findOrFail($id)
        ])->with('no', 0);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Redirect to PY Edit page
        $pys = payment::with('py_detail')->find($id);

        // Populate Vendor
        $vendors = Vendor::all();
        
        // Populate Warehouse
        $whs = Warehouse::all();

        // Return to view for edit
        return view('payment.new')->with('pys', $pys)->with('whs', $whs)->with('vendors', $vendors)->with('subTotal', 0)->with('no', 0)->with('header', 'Edit Payment');
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

