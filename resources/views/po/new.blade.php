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

                            <div>
                                <button type="button" id="btn-add-detail" class="btn btn-primary">Add</button>
                            </div>
                            <strong><i>Please Supply The Following Items </i></strong>
                            <div>
                                <table class="table table-striped table-po-detail">
                                    <thead >
                                        <tr>
                                            <th class="h6" width="3%"></th>
                                            <th class="h6" width="5%">No.</th>
                                            <th class="h6" width="47%">Description Of Goods</th>
                                            <th class="h6" width="10%">Qty</th>
                                            <th class="h6" width="10%">Unit</th>
                                            <th class="h6" width="15%">Unit Price</th>
                                            <th class="h6" width="10%">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr class="po-detail-row">
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
                                                <label for="">Rp. 0,-</label>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="h6" colspan="6" align="right">Sub Total</td>
                                            <td id="sub_total" class="text-right h6" align="right">Rp 0.00,-</td>
                                        </tr>
                                        <tr>
                                            <td class="h6" colspan="6" align="right">Discount</td>
                                            <td align="right">
                                                <input type="text" name="discount" style="width: 130px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="h6" colspan="6" align="right">Tax</td>
                                            <td align="right">
                                                <input type="text" name="tax" style="width: 130px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right h6" colspan="6" align="right">Total</td>
                                            <td id="total" class="h6" align="right">Rp. 0</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

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
                                <input type="text" name="pod[unit_price][{index}]" class="form-control text-right item-price" placeholder="* 0.00" onkeypress="" onpaste="return false;">
                            </div>
                        </td>
                        <td class="text-right" align="right">
                            {{-- <div class="input-group"> --}}
                                {{-- <input type="text" name="item[new][unit_price][{{ID}}]" class="form-control text-right item-price" placeholder="* 0.00" value = "0" onkeypress="return isDecimalNumber(event);" onpaste="return false;"> --}}
                                {{-- Rp. 100.000 --}}
                            {{-- </div> --}}
                            <label for="" id="" class="row-amount">0</label>
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
            // let total = 0;
            $.each($(target), function(i, v) {
                $.each($(this).find('input,textarea,select'), function() {
                    let tempName = $(this).attr('name');
                    let replaced = tempName.replace(/{index}/g, index);
                    $(this).attr('name', replaced);
                });

                $(this).find('.index-number').text(index+1);

                index ++;
            });

            // console.log($(this).find('.index-number'));
            // $(this).find('.index-number').text(index);

            // console.log($('#sub_total').html());
            // console.log(total);

            // $('#sub_total').html(total);
            // $('#total').html(`S${convertToCurrency(total.toString())}`);
            // console.log(formatter.format(total.toString()));
            // $('#total').html();
        }

        function calculateAmt(target) {
            let sub_total = 0;
            let total = 0;
            $.each($(target), function() {
                let qty = parseInt($(this).find("[name*=qty]").val() || 0);
                let unit_price = parseFloat($(this).find("[name*=unit_price]").val() || 0);
                let amount = qty * unit_price;
                $(this).find(".row-amount").text(amount);

                sub_total += amount;
            });

            // console.log(sub_total);

            $('#sub_total').html(formatter.format(sub_total));
            $('#sub_total').html(formatter.format(sub_total));
        }

        function itemRow() {
            let itemIndex = 0;
            let $template = $($("#row-template").html()).clone();

            // $('.expense-delete', $template).on('click', function(e) {
            //     e.preventDefault();

            //     // remove entire <tr>
            //     // $(this).closest('tr').remove();

            //     $newEntry.find('.row-amount').on('input change', function(e) {
            //         calculateAmt('.table-po-detail tr.po-detail-row');
            //     });

            //     // recalculate the index
            //     insertIDToIndex('.table-expense tr.row-expense');

            //     // const expenseDeletedID = $(this).closest('tr').find('#expense_id').val();
            //     // if (expenseDeletedID) {
            //     //     // update the selected_ids with removed expenseID
            //     //     selected_ids = selected_ids.filter(item => item !== expenseDeletedID)
            //     // }
            // });

            // $('.row-amount',$template).on('input', function() {
            //     let total = 0;

            //     $('.row-amount.form-control').each( function() {
            //         total += Number($(this).val(), 2);
            //     });
            //     $('#total').html('S' + convertToCurrency(total));
            // });

            $template.find('.item-qty, .item-price').on('input focusout', function(e) {
                // calculateGST('#modal_issue_pv tr.bypass-expense-line');
                calculateAmt('.table-po-detail tr.po-detail-row');
            });

            $template.find('.line-delete').on('click', function(e) {
                e.preventDefault();

                // remove entire <tr>
                $(this).closest('tr').remove();

                insertIDToIndex('.table-po-detail tr.po-detail-row');
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
            // refreshServiceOptions();
            insertIDToIndex('.table-po-detail tr.po-detail-row');
        });

        // $(document).on("focusout", ".item-price", function(e) {
        //     price = parseFloat($(this).val());

        //     // if(price != 0){
        //     //     $(this).val(price);
        //     // }else{
        //     //     $(this).val(0);
        //     // }
        //     console.log(price)
        // });
    });
</script>
