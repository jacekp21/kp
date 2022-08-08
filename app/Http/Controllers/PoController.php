<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Warehouse;
use App\Models\Po;
use App\Models\Po_detail;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

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
        //return $pos;
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
        return view('po.new', ['vendors' => $vendors], ['whs' => $whs])->with('header', 'New Purchase Order');
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
        //return $post;
        // return $post;
        // User Input Validation
        $validatedInput = $request->validate([
            'po_date'       => 'required',
            'po_no'         => 'required',
            'vendor_id'     => 'required',
            'warehouse_id'  => 'required',
            'currency'      => 'required|in:IDR,SGD,USD'
        ],
        // User Input Validation Error Message
        [
            'po_date.required'      => 'Po Date is required',
            'po_no.required'        => 'Po number is required',
            'vendor_id.in'          => 'Vendor selection is invalid',
            'warehouse_id.required' => 'Warehouse selection is invalid',
            'currency.in'           => 'Currency selection is invalid',
        ]);

        $pod = $post['pod'];
        unset($post['pod']);

        if (isset($post['deleted_line_ids'])) {
            $deleted = $post['deleted_line_ids'];
            unset($post['deleted_line_ids']);
        }

        if ($id) {
            // Update PO
            $po = Po::find($id)->update($post);

            foreach ($pod as $key => $detail) {
                if (empty($detail['po_id'])) {
                    $pod[$key]['po_id'] = $id;
                }
            }

            $po_detail = po_detail::upsert($pod, ['id', 'po_id', 'description', 'qty', 'unit', 'unit_price']);

            if ($po_detail) {
                if (!empty($deleted)) {
                    Po_detail::whereIn('id', $deleted)->delete();
                }

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

        // $po = po::with('po_detail')->with('vendor')->with('warehouse')->findOrFail($id);
        // return $po;

        return view('po.show', [
            'po' => po::with('po_detail')->with('vendor')->with('warehouse')->findOrFail($id)
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
        // Redirect to PO Edit page
        $pos = Po::with('po_detail')->find($id);

        // Populate Vendor
        $vendors = Vendor::all();
        
        // Populate Warehouse
        $whs = Warehouse::all();

        // Return to view for edit
        return view('po.new')->with('pos', $pos)->with('whs', $whs)->with('vendors', $vendors)->with('subTotal', 0)->with('no', 0)->with('header', 'Edit Purchase Order');
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

    /**
     * Print the specified PO from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        $data['po'] = po::with('po_detail')->with('vendor')->with('warehouse')->findOrFail($id);
        $data['no'] = 0;
        // $po = [ 'po' => 
        //     [
        //         'po_no' => 'PO-001',
        //         'po_date' => '2022',
        //     ]
        // ];
        // $pdf = Pdf::loadView('po.show', $po);
        // return $pdf->download('po.pdf');

        // dd($po);

        // return $data;
          
        $pdf = Pdf::loadView('po.pdf', $data);

        // dd($pdf);
    
        return $pdf->stream('po-'.$data['po']['po_no'].'pdf');
    }
}
