<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .nav-link:hover {
            background-color: grey;
        }
        .display-6{
            font-weight: bold;
            margin-left: 5px;
        }
        .card-body-icon{
            position: absolute;
            z-index: 0;
            top: 25px;
            right: 4px;
            opacity: 0.4;
            font-size: 90px;
        }
    </style>
    <title>New AP Page</title>
</head>
<body>
    @include('layouts.header')
    <div class="row no-gutters mt-5">
        @include('layouts.sidebar')
        <div class="col-md-10 p-5 mt-2">
            <h1><i class="fas fa-file-invoice-dollar m-2"></i>View Payment</h1><hr>
            <div class="container mt-5">
                <div class="row">
                    @csrf
                    <div class="row">
                    <div class="col-md-3 mb-3">
                            <label for="exampleDataList" class="form-label">Number : </label>
                            <label for="">{{ $py->ap_no }}</label>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="date" class="form-label">Date : </label>
                        <label for="">{{ $py->pay_date }}</label>
                    </div>
                    <div class="col-md-3 mb-3">
                            <label for="exampleDataList" class="form-label">PO Number : </label>
                            <label for="">{{ $py->po_no }}</label>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="vendor" class="form-label">Vendor : </label>
                        <label>{{ $py->vendor->name }}</label>
                    </div>
                    <!-- keterangan-->
                    <div class="col-md-3 mb-3">
                        <label for="currency" class="form-label">Currency : </label>
                        <label>{{ $py->currency }}</label>    
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="term" class="form-label">Term : </label>
                        <label>{{ $py->term }}</label>    
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="warehouses" class="form-label">Warehouse : </label>
                        <label for="">{{ $py->warehouse->name }}</label> 
                    </div>
                    <div>
                        <table class="table table-striped table-ap-detail">
                            <thead>
                                <tr>
                                    <th class="h6" width="5%">No.</th>
                                    <th class="h6" width="47%">Description</th>
                                    <th class="h6" width="10%">Qty</th>
                                    <th class="h6" width="10%">Unit</th>
                                    <th class="h6" width="15%">Unit Price</th>
                                    <th class="h6" width="13%">Amount</th>  
                                </tr>
                            </thead>
                            <tbody>
                            @if (isset($py))
                            @if ($py->py_detail)
                                @foreach ($py->py_detail as $key => $detail)
                                <tr class="py-detail-row">
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
                                    <td id="lbl-sub_total" class="text-right h6 border-0" align="right">Rp {{ old('sub_total', $py->sub_total ?? '0') }}</td>
                                </tr>
                                <tr>
                                    <td class="h6 border-0" colspan="5" align="right">Discount</td>
                                    <td align="right" class="border-0">
                                        Rp. {{ old('sub_total', $py->discount ?? '0') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="h6 border-0" colspan="5" align="right">Tax</td>
                                    <td align="right" class="border-0">
                                        Rp. {{ old('sub_total', $py->tax ?? '0') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right h6 border-0" colspan="5" align="right">Total</td>
                                    <td id="lbl-total" class="h6 border-0" align="right">Rp. {{ old('sub_total', $py->total ?? '0') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                </div>
                    <a href="/py" class="btn btn-success">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <a href="/py/print/{{ $py->id }}" class="btn btn-primary">
                        <i class="fas fa-print"></i> Print
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Font Awesome Link -->
<script src="https://kit.fontawesome.com/cc8db81d9c.js" crossorigin="anonymous"></script>
</html>