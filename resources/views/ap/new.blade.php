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
                <h1><i class="fas fa-file-invoice-dollar m-2"></i>New Po</h1><hr>
                <div class="container mt-5">
                    <div class="row">
                        <form action="/ap/store" method="post">
                            @csrf
                            <div class="row">
                            <div class="col-md-3 mb-3">
                                    <label for="date" class="form-label">PO Date</label>
                                    <input type="text" name="id" class="form-control" id="id" placeholder="" hidden>
                                    <input type="date" name="po_date" class="form-control" id="po_date" placeholder="">
                            </div>
                            <div class="col-md-3 mb-3">
                                    <label for="exampleDataList" class="form-label">Po Number</label>
                                    <input type="text" class="form-control" name="po_no" list="ponumOptions" id="po_no" placeholder="">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="vendor" class="form-label">Vendor</label>
                                    <select class="form-control" id='vendor' name='vendor_id' placeholder="Select Vendor">
                                        <option value='0'>Select Vendor</option>
                                        @foreach($vendors as $vendor)
                                          <option value='{{ $vendor->id }}'>{{ $vendor->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <!-- keterangan-->
                            <div class="col-md-3 mb-3">
                                    <label for="currency" class="form-label">Currency</label>
                                    <select class="form-control" id='currency' name='currency' placeholder="Select Currency">
                                        <option value='-'>Select Currency</option>
                                        <option value='IDR'>IDR</option>
                                        <option value='SGD'>SGD</option>
                                        <option value='USD'>USD</option>
                                    </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                    <label for="term" class="form-label">Term</label>
                                    <select class="form-control" id='term' name='term' placeholder="Select Term">
                                        <option value='-'>Select Term</option>
                                        <option value='IDR'>N/30</option>
                                        <option value='SGD'>N/60</option>
                                        <option value='USD'>N/90</option>
                                    </select>
                            </div>
                                <div class="col-md-3 mb-3">
                                    <label for="warehouses" class="form-label">Warehouse</label>
                                    <select class="form-control" id='warehouse' name='warehouse_id' placeholder="Select Warehouse">
                                        <option value='0'>Select Warehouse</option>
                                        @foreach($whs as $wh)
                                          <option value='{{ $wh->id }}'>{{ $wh->name }}</option>
                                        @endforeach
                                    </select>
                            </div> 

                            <div>
                                <button type="button" id="btn-add-detail" class="btn btn-primary">Add</button>
                            </div>
                            <div>
                                <table class="table table-striped table-ap-detail">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. Po</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Disc %</th>
                                            <th scope="col">Tax %</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001/PO-BPA/X/2021</td>
                                            <td>SEPATU SAFETY</td>
                                            <td>20</td>
                                            <td>PSG</td>
                                            <td>Rp 250.000,-</td>
                                            <td>5 %</td>
                                            <td>10 %</td>
                                            <td>Rp 5.225.000,-"</td>
                                        </tr>
                                        <tr>
                                            <td>002/PO-BPA/X/2021</td>
                                            <td>CANGKUL</td>
                                            <td>20</td>
                                            <td>BUAH</td>
                                            <td>Rp 20.000,-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Rp 400.000,-"</td>
                                        </tr>
                                    </tbody>
                                </table>   
                            </div>
                            <div class="mb-3">
                                <label for="sub" class="form-label">Sub Total</label>
                                <input type="text" class="form-control" id="sub" placeholder=""> 
                            </div>
                            <div class="mb-3">
                                <label for="ongkir" class="form-label">Ongkir</label>
                                <input type="text" class="form-control" id="ongkir" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="dp" class="form-label">Dp</label>
                                <input type="text" class="form-control" id="dp" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label">Total</label>
                                <input type="text" class="form-control" id="total" placeholder=""> 
                            </div>
                            <div class="mb-3">
                                <label for="note" class="form-label">Note :</label>
                                <input type="text" class="form-control" id="note" placeholder="">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="submit" class="btn btn-primary">Print</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>