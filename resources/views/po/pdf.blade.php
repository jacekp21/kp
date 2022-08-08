<!doctype html>
<html lang="en">
<head>
    <title>PO || {{ $po->po_no }}</title>
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
    <div class="row no-gutters mt-5">    
        <div class="col-md-10 p-5 mt-2">
        <hr>
        <h1 style="color:blue;">PURCHASE ORDER</h1>
        <hr>
            <br>
            <div class="container mt-5">
                <div class="row">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="date" class="form-label">Po Date : </label>
                            <label>{{ $po->po_date }}</label>
                        </div>
                        <br> 
                        <div class="col-php amd-3 mb-3">
                            <label for="exampleDataList" class="form-label">Po Number : </label>
                            <label>{{ $po->po_no }}</label>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="vendor" class="form-label">Vendor : </label>
                            <label>{{ $po->vendor->name }}</label>
                        </div>
                        <br>
                        <div class="col-md-3 mb-3">
                            <label for="warehouses" class="form-label">Warehouse : </label>
                            <label>{{ $po->warehouse->name }}</label>
                        </div>
                        <br>
                        <div class="col-md-3 mb-3">
                            <label for="currency" class="form-label">Currency : </label>
                            <label>{{ $po->currency }}</label>
                        </div>
                        <br>
                    </div>

                    <strong><p><i>Please Supply The Following Items</i></p></strong>

                    <div>
                        <table border="1" align="center">
                            <thead >
                                <tr>
                                    <th class="h6" width="5%">No.</th>
                                    <th class="h6" width="47%">Description Of Goods</th>
                                    <th class="h6" width="10%">Qty</th>
                                    <th class="h6" width="10%">Unit</th>
                                    <th class="h6" width="15%">Unit Price</th>
                                    <th class="h6" width="10%">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (isset($po))
                                @if ($po->po_detail)
                                    @foreach ($po->po_detail as $key => $detail)
                                    <tr class="po-detail-row">
                                        <td>
                                            <span class="index-number">{{ $no += 1 }}</span>
                                        </td>
                                        <td>
                                            {{ $detail->description }}
                                        </td>
                                        <td>
                                            {{ $detail->qty }}
                                        </td>
                                        <td>
                                            {{ $detail->unit }}
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
                                    <td colspan="6" class="text-center">No Data</td>
                                </tr>
                            @endif
                            </tbody>
                            <br>
                            <tfoot>
                                <tr>
                                    <td rowspan="4" colspan="2">
                                    <strong><label for="remark" class="form-label">Remark : </label>
                                        <label>{{ $po->remark }}</label></strong>
                                    </td>
                                    <td class="h6" colspan="3" align="right">Sub Total</td>
                                    <td id="lbl-sub_total" class="text-right h6" align="right">Rp {{ old('sub_total', $po->sub_total ?? '0') }}</td>
                                </tr>
                                <tr>
                                    <td class="h6" colspan="3" align="right">Discount</td>
                                    <td align="right">
                                        {{ $po->discount }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="h6" colspan="3" align="right">Tax</td>
                                    <td align="right">
                                        {{ $po->tax }}
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="text-right h6" colspan="3" align="right">Total</td>
                                    <td id="lbl-total" class="h6" align="right">Rp. {{ isset($po->sub_total) ? $po->sub_total - $po->discount + $po->tax : 0 }}</td>
                                </tr>
                            </tfoot>
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
