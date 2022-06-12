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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all Ap
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

        // Redirect to New Ap Page
        return view('ap.new', ['vendors' => $vendors], ['whs' => $whs]);
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
        $id = $post['id'];

        $post['remark'] = 'Testing';
        $apd = $post['apd'];
        unset($post['apd']);

        if ($id) {
            // Update Ap
            return "Update Ap";
        } else {
            // New AP
            $ap = Ap::create($post);
            foreach ($apd as $key => $item) {
                $apd[$key]['ap_id'] = $ap->id;
            }

            $ap_detail = $ap->ap_detail()->createMany($apd);

            if ($ap_detail) {
                return redirect('/ap')->with('success','Data Account Payable berhasil diinput');
            } else {
                return redirect('/ap')->with('error','Data Account Payable gagal diinput');
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
        // return "Ap Controller Show dengan id : " . $id;

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
        // Redirect to Ap Edit page
        return "AP Edit Page";
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
