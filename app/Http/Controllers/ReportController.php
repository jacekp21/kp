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

  public function cetak_pdf()
  {
    $aprs = Report::all();

    $pdf = PDF::loadview('apreport_pdf',['aprs'=>$aprs]);
    return $pdf->download('laporan-ap-pdf');
  }
}
