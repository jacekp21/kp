<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vendor;
use App\Models\Warehouse;
use App\Models\payment;
use App\Models\payment_detail;
use App\Models\Ap;
use App\Models\Ap_detail;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }

    public function cetak_pdf()
    {
        //
    }

    /**
     * Print the specified PO from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print(Request $request)
    {
        $post = $request->input();

        $type = $post['type'];
        $month = $post['month'];

        $first_day_this_month = date('01 F Y', $post['month']); // hard-coded '01' for first day
        $last_day_this_month  = date('t F Y', $post['month']);

        $period = "PERIODE ". strtoupper($first_day_this_month) ." S.D ". strtoupper($last_day_this_month);

        if (strtolower($type) == 'payment') {
            $data['title'] = "PAYMENT";
            $data['period'] = $period;
            $data['report'] =   DB::table('vendors')
                                ->select(DB::raw('vendors.name, py.currency, sum(ap.total) as debit, sum(py.total) as credit'))
                                ->leftJoin('py', 'py.vendor_id', '=', 'vendors.id')
                                ->leftJoin('ap', 'ap.vendor_id', '=', 'vendors.id')
                                ->whereMonth('py.pay_date', '=', $month)
                                ->groupBy('name')
                                ->groupBy('currency')
                                ->get();

            $pdf = Pdf::loadView('report.pdf', $data);
        } else {
            $data['title'] = "ACCOUNT PAYABLE";
            $data['period'] = $period;
            $data['report'] =   DB::table('vendors')
                                ->select(DB::raw('vendors.name, py.currency, sum(ap.total) as debit, sum(py.total) as credit'))
                                ->leftJoin('py', 'py.vendor_id', '=', 'vendors.id')
                                ->leftJoin('ap', 'ap.vendor_id', '=', 'vendors.id')
                                ->whereMonth('py.pay_date', '=', $month)
                                ->groupBy('name')
                                ->groupBy('currency')
                                ->get();

            $pdf = Pdf::loadView('report.pdf', $data);
        }
        
        return $pdf->stream('report'.'pdf');
    }
}
