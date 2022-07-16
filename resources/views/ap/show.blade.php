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
                <h1><i class="fas fa-file-invoice-dollar m-2"></i>View Account Payable</h1><hr>
                <div class="container mt-5">
                    <div class="row">
                        @csrf
                        <div class="row">
                        <div class="col-md-3 mb-3">
                                <label for="exampleDataList" class="form-label">Number : </label>
                                <label for="">{{ $ap->ap_no }}</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="date" class="form-label">Date : </label>
                            <label for="">{{ $ap->inv_date }}</label>
                        </div>
                        <div class="col-md-3 mb-3">
                                <label for="exampleDataList" class="form-label">PO Number : </label>
                                <label for="">{{ $ap->po_no }}</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="vendor" class="form-label">Vendor : </label>
                            <label>{{ $ap->vendor->name }}</label>
                        </div>
                        <!-- keterangan-->
                        <div class="col-md-3 mb-3">
                            <label for="currency" class="form-label">Currency : </label>
                            <label>{{ $ap->currency }}</label>    
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="term" class="form-label">Term : </label>
                            <label>{{ $ap->term }}</label>    
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="warehouses" class="form-label">Warehouse : </label>
                            <label for="">{{ $ap->warehouse->name }}</label> 
                        </div>
                        <div>
                            <table class="table table-striped table-ap-detail">
                                <thead>
                                    <tr>
                                    <th class="h6" width="3%"></th>
                                        <th class="h6" width="5%">No.</th>
                                        <th class="h6" width="47%">Description</th>
                                        <th class="h6" width="10%">Qty</th>
                                        <th class="h6" width="10%">Unit</th>
                                        <th class="h6" width="15%">Unit Price</th>
                                        <th class="h6" width="10%">Amount</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                @if (isset($ap))
                                @if ($ap->ap_detail)
                                    @foreach ($ap->ap_detail as $key => $detail)
                                    <tr class="ap-detail-row">
                                        <td>
                                            <a class="line-delete" href="#"><span class="badge bg-primary rounded-pill">-</span></a>
                                        </td>
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
                                <tfoot>
                                <tr>
                                    <td class="h6" colspan="6" align="right">Sub Total</td>
                                    <td id="lbl-sub_total" class="text-right h6" align="right">Rp {{ old('sub_total', $ap->sub_total ?? '0') }}</td>
                                </tr>
                                    <tr>
                                        <td class="h6" colspan="6" align="right">Discount</td>
                                        <td align="right">
                                            Rp. {{ old('sub_total', $ap->discount ?? '0') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="h6" colspan="6" align="right">Tax</td>
                                        <td align="right">
                                            Rp. {{ old('sub_total', $ap->tax ?? '0') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right h6" colspan="6" align="right">Total</td>
                                        <td id="lbl-total" class="h6" align="right">Rp. {{ old('sub_total', $ap->total ?? '0') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    </div>
                        {{-- <button type="" class="btn btn-success"><i class="fas fa-arrow-left m-2"></i>Back</button>
                        <button type="" class="btn btn-primary"><i class="fas fa-print m-2"></i>Print</button> --}}
                        <a href="/ap" class="btn btn-success">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <a href="/ap/print/{{ $ap->id }}" class="btn btn-primary">
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