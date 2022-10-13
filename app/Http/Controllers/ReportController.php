<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Warehouse;
use App\Models\Po;
use App\Models\Po_detail;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        // $aprs = 'ada';
        // return view('/report/apr', ['aprs' => $aprs]);

        return view('report.index');
    }

    public function cetak_pdf()
    {
        // $aprs = Report::all();

        // $pdf = PDF::loadview('apreport_pdf', ['aprs' => $aprs]);
        // return $pdf->download('laporan-ap-pdf');
    }

    /**
     * Print the specified PO from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print(Request $request)
    {
        // $data['po'] = Po::with('po_detail')->with('vendor')->with('warehouse')->findOrFail($id);
        // $data['no'] = 0;

        // $pdf = Pdf::loadView('po.pdf', $data);

        // return $pdf->stream('po-'.$data['po']['po_no'].'pdf');

        $post = $request->input();
        return $post;
        // return "ada";
        // $pdf_text = "It will be the text you want to load";
        // $data['text'] = "It will be the text you want to load";

        // $pdf = Pdf::loadView('report.pdf', $data);

        // return $pdf->stream('report'.'pdf');
    }
}
