<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Vendor;
use App\Models\Warehouse;
use Barryvdh\DomPDF\Facade\Pdf;


class ReportController extends Controller
{
  public function index()
  {
    $aprs = Report::all();
    return view('/report/apr',['aprs'=>$aprs]);
  }

  public function indexpy()
  {
    $pyrs = Report::all();
    return view('/report/pyr',['pyrs'=>$pyrs]);
  }


  public function cetak_pdf()
  {
      $data['Report'] = Report::with('Report')->with('vendor')->with('warehouse')->findOrFail($id);
      $data['no'] = 0;
      $pdf = Pdf::loadView('report.pdf', $data);
  
      return $pdf->stream('report-'.$data['report'].'pdf');
  }
}
