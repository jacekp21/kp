<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Warehouse;
use App\Models\Py;
use App\Models\Py_detail;
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
        // Get all Py
        $pys = Py::with('vendor')->with('warehouse')->get();

        // return $pys;

        return view('py.index')->with('pys', $pys);
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

        // Redirect to New Py Page
        return view('py.new', ['vendors' => $vendors], ['whs' => $whs]);
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
        $pyd = $post['pyd'];
        unset($post['pyd']);

        if ($id) {
            // Update Py
            return "Update Py";
        } else {
            // New PY
            $py = Py::create($post);
            foreach ($pyd as $key => $item) {
                $apd[$key]['py_id'] = $py->id;
            }

            $py_detail = $py->py_detail()->createMany($pyd);

            if ($py_detail) {
                return redirect('/py')->with('success','Data Account Payable berhasil diinput');
            } else {
                return redirect('/py')->with('error','Data Account Payable gagal diinput');
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
        // return "Py Controller Show dengan id : " . $id;

        // return view('py.show', [
        //     'py' => py::findOrFail($id)
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
        // Redirect to Py Edit page
        return "PY Edit Page";
    }

    /**
     * Void the specified PY from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function void($id)
    {
        //
    }
}
