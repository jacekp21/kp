<!doctype html>
<html lang="en">
<head>
    <title>PO {{ $po->po_no }}</title>
    <!-- Bootstrap CSS -->
    <style>
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
        }
        .table > tbody {
            vertical-align: inherit;
        }
        .table > thead {
            vertical-align: bottom;
        }
        .table > :not(:first-child) {
            border-top: 2px solid currentColor;
        }
        .table-striped > tbody > tr:nth-of-type(odd) > * {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
            border: 1px solid;
        }
        .table-primary {
            --bs-table-bg: #cfe2ff;
            --bs-table-striped-bg: #c5d7f2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bacbe6;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfd1ec;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #bacbe6;
        }
    </style>
</head>
<body>
    <div class="row no-gutters mt-5">    
        <div class="col-md-10 p-5 mt-2">
            <h1><i class="fas fa-file-invoice-dollar m-2"></i>{{ $po->po_no ?? '' }}</h1><hr>
            <div class="container mt-5">
                <div class="row">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="date" class="form-label">Po Date : </label>
                            <label>{{ $po->po_date }}</label>
                        </div>
                        <div class="col-php amd-3 mb-3">
                            <label for="exampleDataList" class="form-label">Po Number : </label>
                            <label>{{ $po->po_no }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="vendor" class="form-label">Vendor : </label>
                            <label>{{ $po->vendor->name }}</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="warehouses" class="form-label">Warehouse : </label>
                            <label>{{ $po->warehouse->name }}</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="currency" class="form-label">Currency : </label>
                            <label>{{ $po->currency }}</label>
                        </div>
                    </div>
                    <strong><i>Please Supply The Following Items </i></strong>
                    <div>
                        <table class="table table-striped" style="border-bottom-style: none;">
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
                            <tfoot>
                                <tr>
                                    <td rowspan="4" colspan="2">
                                        <label for="remark" class="form-label">Remark : </label>
                                        <label>{{ $po->remark }}</label>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    
</html>