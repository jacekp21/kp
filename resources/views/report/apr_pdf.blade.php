<!doctype html>
<html lang="en">
<head>
    <title>Account Payable Report</title>
    <style>
        .table{
        font-family: sans-serif;
        color: #232323;
        border-collapse: collapse;
        }
        .table, th, td {
        font-size: 14px;
        padding: 0px 30px;
        }
    </style>
</head>
<body>
    <div class="row no-gutters mt-5">    
        <div class="col-md-10 p-5 mt-2">
        <h1 align="center">PT BANGUN PRIMA ABADI</h1>
        <h2 align="center" style="color:blue;">Account Payable Report</h2>
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
                        @if ($rp->Apr)
                            @foreach ($rp->Apr as $key => $detail)
                                <tr class="apr-row">
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
