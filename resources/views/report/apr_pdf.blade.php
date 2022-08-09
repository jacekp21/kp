<!doctype html>
<html lang="en">
<head>
    <title>Account Payable Report</title>
    <link rel="stylesheet" type="text/css" herf="style.css">
    <style>
        .table{
        font-family: sans-serif;
        color: #232323;
        /*border-collapse: collapse;*/
        }
        .table, th, td {
        /*border: 1px solid #000;*/
        padding: 8px 20px;
        }
    </style>
</head>
<body>
    <div class="row no-gutters mt-5">    
        <div class="col-md-10 p-5 mt-2">
        <hr>
        <h1 align="center">PT BANGUN PRIMA ABADI</h1>
        <h2 align="center" style="color:blue;">Account Payable Report</h2>
        <!--Periode-->
        <hr>
            <br>
            <table align="center" color="grey">
                <thead >
                    <tr>
                        <th class="h6" width="5%">Vendor</th>
                        <th class="h6" width="25%">Currency</th>
                        <th class="h6" width="10%">Saldo Awal</th>
                        <th class="h6" width="10%">Debit</th>
                        <th class="h6" width="15%">Credit</th>
                        <th class="h6" width="10%">Saldo Akhir</th>
                        </tr>
                </thead>
                <tbody>
                    @if (isset($rp))
                        @if ($rp->Report)
                            @foreach ($rp->Report as $key => $detail)
                                <tr class="py-detail-row">
                                <td>
                                    {{ $detail->vendor_id }}
                                </td>
                                <td>
                                    {{ $detail->currency }}
                                </td>
                                <td>
                                    {{ $detail->saldo_awal }}
                                </td>
                                <td>
                                    {{ $detail->debit}}
                                </td>
                                <td>
                                    {{ $detail->credit}}
                                </td>
                                <td class="text-right" align="right">
                                    <label for="" id="" class="row-amount">{{ $detail->saldo_awal - $detail->debit + $detail->credit }}</label>
                                </td>
                                </tr>
                          @endforeach
                        @endif
                    @else
                                <tr>
                                    <td colspan="6" class="text-center">No Data</td>
                                </tr>
                        @endif
                </tbody>
                        </table>
                        <p align="right">Date-Time : <?php echo date('d/m/Y, H:i'); ?></p>
                        <p align="right">Prepared By, </p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p align="right">____________________</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
