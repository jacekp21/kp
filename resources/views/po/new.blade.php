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
                                <div class="col-md-3 mb-3">
                                    <label for="currency" class="form-label">Currency</label>
                                    <select class="form-control" id='currency' name='currency' placeholder="Select Currency">
                                        <option value='-'>Select Currency</option>
                                        <option value='IDR'>IDR</option>
                                        <option value='SGD'>SGD</option>
                                        <option value='USD'>USD</option>
                                    </select>
                                </div>
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
                                            <th class="h5" width="3%"></th>
                                            <th class="h5" width="5%">No.</th>
                                            <th class="h5" width="47%">Description Of Goods</th>
                                            <th class="h5" width="10%">Qty</th>
                                            <th class="h5" width="10%">Unit</th>
                                            <th class="h5" width="15%">Unit Price</th>
                                            <th class="h5" width="10%">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="po-detail-row">
                                            <td>
                                                <a class="line-delete" href="#"><span class="badge bg-primary rounded-pill">-</span></a>
                                            </td>
                                            <td>
                                                <div class="form-group mb0">
                                                    <label for="" id="po-detail-no">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group mb0">
                                                    <input type="text" name="pod[new][description][]" class="form-control" placeholder="Description" required="1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group mb0">
                                                    <div class="input-group">
                                                        <input type="text" name="item[new][qty][]" class="form-control text-right item-qty" placeholder="0" required="1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="item[new][unit][]" class="form-control" placeholder="Unit">
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" name="item[new][unit_price][]" class="form-control text-right item-price" placeholder="0.00" onkeypress="return isDecimalNumber(event);" onpaste="return false;">
                                                </div>
                                            </td>
                                            <td class="text-right" align="right">
                                                {{-- <div class="input-group"> --}}
                                                    {{-- <input type="text" name="item[new][unit_price][{{ID}}]" class="form-control text-right item-price" placeholder="* 0.00" value = "0" onkeypress="return isDecimalNumber(event);" onpaste="return false;"> --}}
                                                    {{-- Rp. 100.000 --}}
                                                {{-- </div> --}}
                                                <label for="">Rp. 0,-</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="h5" colspan="6" align="right">Sub Total</td>
                                            <td id="total" class="text-right h5" align="right">Rp 0.00</td>
                                        </tr>
                                        <tr>
                                            <td class="h5" colspan="6" align="right">Discount</td>
                                            <td align="right">
                                                <input type="text" name="discount" style="width: 130px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="h5" colspan="6" align="right">Tax</td>
                                            <td align="right">
                                                <input type="text" name="tax" style="width: 130px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right h5" colspan="6" align="right">Total</td>
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
                    <tr class="po-detail-row">
                        <td>
                            <a class="line-delete" href="#"><span class="badge bg-primary rounded-pill">-</span></a>
                        </td>
                        <td>
                            <input type="hidden" name="pod[id][{index}]">
                            <span class="index-number"></span>
                        </td>
                        <td>
                            <div class="form-group mb0">
                                <input type="text" name="pod[description][{index}]" class="form-control" placeholder="Description *" required="1">
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb0">
                                <div class="input-group">
                                    <input type="text" name="pod[qty][{index}]" class="form-control text-right item-qty" placeholder="0" required="1">
                                </div>
                            </div>
                        </td>
                        <td>
                            <input type="text" name="pod[unit][{index}]" class="form-control" placeholder="Unit">
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="text" name="pod[unit_price][{index}]" class="form-control text-right item-price" placeholder="* 0.00" onkeypress="return isDecimalNumber(event);" onpaste="return false;">
                            </div>
                        </td>
                        <td class="text-right" align="right">
                            {{-- <div class="input-group"> --}}
                                {{-- <input type="text" name="item[new][unit_price][{{ID}}]" class="form-control text-right item-price" placeholder="* 0.00" value = "0" onkeypress="return isDecimalNumber(event);" onpaste="return false;"> --}}
                                {{-- Rp. 100.000 --}}
                            {{-- </div> --}}
                            <label for="" id="pod[total][{index}]">Rp. 0,-</label>
                        </td>
                    </tr>
            </template>
        </div>


    </body>
    
</html>



<script>
    $(document).ready(function() {
        const insertIDToIndex = (target) => {
            let index = 0;
            let total = 0;
            $.each($(target), function(i, v) {
                $.each($(this).find('input,textarea,select'), function() {
                    let tempName = $(this).attr('name');
                    let replaced = tempName.replace(/{index}/g, index);
                    $(this).attr('name', replaced);
                });

                total += Number($(this).find('[name*=amount]').val(), 2);
                $(this).find('.index-number').text(index+1);

                index ++;
            });

            $('#amount').val(roundTo(total, 2));
            $('#totalExpenses').html(`S${convertToCurrency(total.toString())}`);
        }

        function itemRow() {
            let itemIndex = 0;
            let $template = $($("#row-template").html()).clone();

            $('.expense-delete', $template).on('click', function(e) {
                e.preventDefault();

                // remove entire <tr>
                $(this).closest('tr').remove();

                // recalculate the index
                insertIDToIndex('.table-expense tr.row-expense');

                const expenseDeletedID = $(this).closest('tr').find('#expense_id').val();
                if (expenseDeletedID) {
                    // update the selected_ids with removed expenseID
                    selected_ids = selected_ids.filter(item => item !== expenseDeletedID)
                }
            });

            $('.row-amount',$template).on('input', function() {
                let total = 0;

                $('.row-amount.form-control').each( function() {
                    total += Number($(this).val(), 2);
                });
                $('#totalExpenses').html('S' + convertToCurrency(total));
            });

            // $('.js-select2-expense',$template).select2({
            //     dropdownParent: $('.modal-content'),
            // });

            return $template;
        };

        // clicked new item
        $("#btn-add-detail").click(function(e) {
            // result = $(".table-po-detail").append(itemRow);
            // refreshServiceOptions();
            // console.log("testing");
            result = $(".table-po-detail tbody").append(itemRow);
            refreshServiceOptions();
        });
    });
</script>
