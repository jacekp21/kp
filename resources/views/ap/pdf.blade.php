<!doctype html>
<html lang="en">
<head>
<title>Account Payable|| {{ $ap->ap_no }}</title>
    <style>
        .table{
        font-family: sans-serif;
        color: #232323;
        border-collapse: collapse;
        }
        .table, th, td {
        border: 1px solid #000;
        padding: 8px 20px;
        }
    </style>
</head>
<body>
        <div class="col-md-10 p-5 mt-2">
        <h1>ACCOUNT PAYABLE</h1>
        <p style="color:red;">{{ $ap->vendor->name ?? '' }}</p>
        <hr>
            <div class="container mt-5">
                <div class="row">
                    @csrf
                    <div class="row">
                    <div class="col-md-3 mb-3">
                            <label for="exampleDataList" class="form-label">Number : </label>
                            <label for="">{{ $ap->ap_no }}</label>
                    </div>
                    <br>
                    <div class="col-md-3 mb-3">
                        <label for="date" class="form-label">Date : </label>
                        <label for="">{{ $ap->inv_date }}</label>
                    </div>
                    <br>
                    <div class="col-md-3 mb-3">
                            <label for="exampleDataList" class="form-label">PO Number : </label>
                            <label for="">{{ $ap->po_no }}</label>
                    </div>
                    <br>
                    <div class="col-md-3 mb-3">
                        <label for="vendor" class="form-label">Vendor : </label>
                        <label>{{ $ap->vendor->name }}</label>
                    </div>
                    <br>
                    <!-- keterangan-->
                    <div class="col-md-3 mb-3">
                        <label for="currency" class="form-label">Currency : </label>
                        <label>{{ $ap->currency }}</label>    
                    </div>
                    <br>
                    <div class="col-md-3 mb-3">
                        <label for="term" class="form-label">Term : </label>
                        <label>{{ $ap->term }}</label>    
                    </div>
                    <br>
                    <div class="col-md-3 mb-3">
                        <label for="warehouses" class="form-label">Warehouse : </label>
                        <label for="">{{ $ap->warehouse->name }}</label> 
                    </div>
                    <br>
                    <div>
                        <table border="1" align="center" width="100%";>
                            <thead>
                                <tr>
                                    <th class="h6" width="5%">No.</th>
                                    <th class="h6" width="47%">Description</th>
                                    <th class="h6" width="10%">Qty</th>
                                    <th class="h6" width="10%">Unit</th>
                                    <th class="h6" width="15%">Unit Price</th>
                                    <th class="h6" width="35%">Amount</th>  
                                </tr>
                            </thead>
                            <tbody>
                            @if (isset($ap))
                            @if ($ap->ap_detail)
                                @foreach ($ap->ap_detail as $key => $detail)
                                <tr class="ap-detail-row">
                                    <td>
                                        <span class="index-number">{{ $no += 1 }}</span>
                                    </td>
                                    <td>
                                        <div class="form-group mb0">
                                            <label for="">{{ $detail->description }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group mb0">
                                            <label for="">{{ $detail->qty }}</label>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="">{{ $detail->unit }}</label>
                                    </td>
                                    <td>
                                        {{ $detail->unit_price }}
                                    </td>
                                    <td class="text-right" align="right">
                                        <label for="" id="" class="row-amount">{{ $detail->qty * $detail->unit_price }}</label>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        @else
                                <tr>
                                    <td colspan="7" class="text-center">No Data</td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot class="borderless">
                                <tr>
                                    <td class="h6 border-0" colspan="5" align="right">Sub Total</td>
                                    <td id="lbl-sub_total" class="text-right h6 border-0" align="right">Rp {{ old('sub_total', $ap->sub_total ?? '0') }}</td>
                                </tr>
                                <tr>
                                    <td class="h6 border-0" colspan="5" align="right">Discount</td>
                                    <td align="right" class="border-0">
                                        Rp. {{ old('sub_total', $ap->discount ?? '0') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="h6 border-0" colspan="5" align="right">Tax</td>
                                    <td align="right" class="border-0">
                                        Rp. {{ old('sub_total', $ap->tax ?? '0') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right h6 border-0" colspan="5" align="right">Total</td>
                                    <td id="lbl-total" class="h6 border-0" align="right">Rp. {{ old('sub_total', $ap->total ?? '0') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <br>
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