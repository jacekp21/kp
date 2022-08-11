<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apr;
use App\Models\Vendor;
use App\Models\Warehouse;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        $apr = Apr::get();
        return view('report.apr')->with('apr', $apr);
    }
    
    public function print()
    {
    $data['apr'] = Apr::with('vendor');

    $pdf = Pdf::loadView('report.apr_pdf', $data);

    return $pdf->stream('apr.pdf');
    }
}
