<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Font Awesome Link -->
        {{-- <script src="https://kit.fontawesome.com/cc8db81d9c.js" crossorigin="anonymous"></script> --}}
        {{-- <link rel="stylesheet" href="fontawesome-free-6.0.0-beta3-web/css/all.min.css"/> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
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
        <title>New PO Page</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-file-invoice-dollar m-2"></i>New Po</h1><hr>
                <div class="container mt-5">
                    <div class="row">
                        <form action="/po/data" method="post">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="date" class="form-label">Po Date</label>
                                    <input type="text" class="form-control" id="id" placeholder="" hidden>
                                    <input type="date" class="form-control" id="po_date" placeholder="">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleDataList" class="form-label">Po Number</label>
                                    <input type="text" class="form-control" list="ponumOptions" id="po_no" placeholder="">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="vendor" class="form-label">Vendor</label>
                                    <select class="form-control" id='vendor' name='vendor' placeholder="Select Vendor">
                                        <option value='0'>Select Vendor</option>
                                        @foreach($vendors as $vendor)
                                          <option value='{{ $vendor->id }}'>{{ $vendor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- kurang coding alamat - bersifat auto -->
                                <div class="col-md-3 mb-3">
                                    <label for="warehouses" class="form-label">Warehouse</label>
                                    <select class="form-control" id='warehouse' name='warehouse' placeholder="Select Warehouse">
                                        <option value='0'>Select Warehouse</option>
                                        @foreach($whs as $wh)
                                          <option value='{{ $wh->id }}'>{{ $wh->name }}</option>
                                        @endforeach
                                    </select>
                                </div>    
                            </div>
                            
                            <div class="row">
                                <div class="col-md-2 mb-2">
                                    <label for="currency" class="form-label">Currency</label>
                                    <select class="form-control" id='currency' name='currency' placeholder="Select Currency">
                                        <option value='-'>Select Currency</option>
                                        <option value='IDR'>IDR</option>
                                        <option value='SGD'>SGD</option>
                                        <option value='USD'>USD</option>
                                    </select>
                                </div>
                                {{-- <div class="col-md-3 mb-3 offset-1">
                                    <label for="description" class="form-label">Description Of Goods</label>
                                    <textarea rows="2" cols="4" name="description" class="form-control" id="description" placeholder=""></textarea>
                                </div> --}}
                            </div>

                            {{-- <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="qty" class="form-label">Qty</label>
                                    <input type="text" name="qty" class="form-control" id="qty" placeholder="">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="unit" class="form-label">Unit</label>
                                    <input type="text" name="unit" class="form-control" id="unit" placeholder="">
                                </div>
                            </div> --}}
                            
                            {{-- <div class="col-md-3 mb-3">
                                <label for="unitprice" class="form-label">Unit Price</label>
                                <input type="text" name="unit_price" class="form-control" id="unit_price" placeholder="Amount">
                            </div> --}}
                            <div>
                                <button type="button" id="btn-add-detail" class="btn btn-primary">Add</button>
                            </div>
                            <strong><i>Please Supply The Following Items </i></strong>
                            <div>
                                <table class="table table-striped table-po-detail">
                                    <thead >
                                        <tr>
                                            <th class="h5" width="10%">No.</th>
                                            <th class="h5" width="45%">Description Of Goods</th>
                                            <th class="h5" width="10%">Qty</th>
                                            <th class="h5" width="10%">Unit</th>
                                            <th class="h5" width="15%">Unit Price</th>
                                            <th class="h5" width="10%">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SEPATU SAFETY</td>
                                            <td>20</td>
                                            <td>PSG</td>
                                            <td>Rp 250.000,-</td>
                                            <td align="right">Rp 5.000.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>CANGKUL</td>
                                            <td>20</td>
                                            <td>BUAH</td>
                                            <td>Rp 20.000,-</td>
                                            <td align="right">Rp 400.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>CANGKUL</td>
                                            <td>20</td>
                                            <td>BUAH</td>
                                            <td>Rp 20.000,-</td>
                                            <td align="right">Rp 400.000,-</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="h5" colspan="5" align="right">Sub Total</td>
                                            <td id="total" class="text-right h5" align="right">Rp 0.00</td>
                                        </tr>
                                        <tr>
                                            <td class="h5" colspan="5" align="right">Discount</td>
                                            <td align="right">
                                                <input type="text" name="discount" style="width: 130px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="h5" colspan="5" align="right">Tax</td>
                                            <td align="right">
                                                <input type="text" name="tax" style="width: 130px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right h5" colspan="5" align="right">Total</td>
                                            <td id="grand_total" class="h5" align="right">Rp 0.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                            {{-- <div class="d-flex">
                                <div class="col-md-4 align-items-start flex-column">
                                    <label for="remark" class="form-label">Remark</label>
                                    <textarea rows="2" cols="4" class="form-control" id="remark" placeholder=""></textarea>
                                </div>
                                <div class="col-md-3 align-items-end flex-column offset-md-5">
                                    <div class="col">
                                        <label for="sub_total" class="col-form-label">Sub Total</label>
                                        <input type="text" class="form-control" id="subtotal" placeholder="">
                                    </div>
                                    <div class="col">
                                        <label for="disc" class="form-label">Discount</label>
                                        <input type="text" class="form-control" id="disc" placeholder="">
                                    </div>
                                    <div class="col">
                                        <label for="tax" class="form-label">Tax</label>
                                        <input type="text" class="form-control" id="tax" placeholder="">
                                    </div>
                                    <div class="col">
                                        <label for="total" class="form-label">Total</label>
                                        <input type="text" class="form-control" id="total" placeholder="">
                                    </div>
                                </div>
                            </div> --}}

                            </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="hidden">
            <template id="row-template">
                <tbody class="po-detail">
                    <tr class="po-detail-row-first">
                        <td>
                            <div class="form-group mb0">
                                {{-- <input type="text" name="pod[new][no][{{ID}}]" class="form-control" placeholder="Date *" required="1"> --}}
                                <label for="">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb0">
                                {{-- <input type="text" name="pod[new][description][{{ID}}]" class="form-control" placeholder="Description *" required="1"> --}}
                                <label for="">descripsi</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb0">
                                <div class="input-group">
                                    {{-- <input type="text" name="item[new][qty][{{ID}}]" class="form-control text-right item-qty" placeholder="* 0" required="1"> --}}
                                    <label for="">10</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{-- <input type="text" name="item[new][unit][{{ID}}]" class="form-control" placeholder="Unit"> --}}
                            pcs
                        </td>
                        <td>
                            {{-- <div class="input-group"> --}}
                                {{-- <input type="text" name="item[new][unit_price][{{ID}}]" class="form-control text-right item-price" placeholder="* 0.00" value = "0" onkeypress="return isDecimalNumber(event);" onpaste="return false;"> --}}
                                Rp 10.000,-
                            {{-- </div> --}}
                        </td>
                        <td class="text-right" align="right">
                            {{-- <div class="input-group"> --}}
                                {{-- <input type="text" name="item[new][unit_price][{{ID}}]" class="form-control text-right item-price" placeholder="* 0.00" value = "0" onkeypress="return isDecimalNumber(event);" onpaste="return false;"> --}}
                                Rp. 100.000
                            {{-- </div> --}}
                        </td>
                    </tr>
                </tbody>
            </template>
        </div>


    </body>
    
</html>



<script>
    $(document).ready(function() {
        var itemRow = (function(){

            var itemIndex = 0;
            var itemTemplate = $("#row-template").html();

            return function(){
                return itemTemplate;
            }
        })();//self executing function.

        // clicked new item
        $("#btn-add-detail").click(function(e) {
            // result = $(".table-po-detail").append(itemRow);
            // refreshServiceOptions();
            // console.log("testing");
            result = $(".table-po-detail").append(itemRow);
            refreshServiceOptions();
        });
    });
</script>
