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
            .table>:not(caption)>*>* {
                border-bottom-width: 0px;
            }
        </style>
        <title>New PO Page</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-file-invoice-dollar m-2"></i>{{ $header ?? '' }}</h1><hr>
                <div class="container mt-5">
                    <div class="row">
                        <form action="/po/store" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="date" class="form-label">Po Date</label>
                                    <input type="text" name="id" value="{{ old('id', $pos->id ?? '') }}" class="form-control" id="id" placeholder="" hidden>
                                    <input type="date" name="po_date" value="{{ old('po_date', $pos->po_date ?? '') }}" class="form-control" id="po_date" placeholder="">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="exampleDataList" class="form-label">Po Number</label>
                                    <input type="text" class="form-control" name="po_no" value="{{ old('po_no', $pos->po_no ?? '') }}" list="ponumOptions" id="po_no" placeholder="">
                                </div>
                            </div>

                            <div class="deleted-detail-line hidden"></div>
                            
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="vendor" class="form-label">Vendor</label>
                                    <select class="form-control @error('vendor_id') is-invalid @enderror" id='vendor' name='vendor_id' placeholder="Select Vendor">
                                        @foreach($vendors as $vendor)
                                            <option {{ !isset($pos->vendor_id) ? 'Selected' : '' }}>Select Vendor</option>
                                            <option value='{{ $vendor->id }}'{{ old('vendor_id', ($pos->vendor_id ?? '')) == ($vendor->id ?? '') ? 'Selected' : '' }}>{{ $vendor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="warehouses" class="form-label">Warehouse</label>
                                    <select class="form-control" id='warehouse' name='warehouse_id' placeholder="Select Warehouse">
                                        <option {{ !isset($pos->warehouse_id) ? 'Selected' : '' }}>Select Warehouse</option>
                                        @foreach($whs as $wh)
                                          <option value='{{ $wh->id }}' {{ old('warehouse_id', ($pos->warehouse_id ?? '')) == ($wh->id ?? '') ? 'Selected' : '' }}>{{ $wh->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="currency" class="form-label">Currency</label>
                                    <select class="form-control @error('position') is-invalid @enderror" id='currency' name='currency' placeholder="Select Currency">
                                        <option {{ !isset($user->position) ? 'Selected' : '' }}>Select Currency</option>
                                        <option value='IDR' {{ old('currency', ucfirst($pos->currency ?? '')) == 'IDR' ? 'Selected' : '' }}>IDR</option>
                                        <option value='SGD' {{ old('currency', ucfirst($pos->currency ?? '')) == 'SGD' ? 'Selected' : '' }}>SGD</option>
                                        <option value='USD' {{ old('currency', ucfirst($pos->currency ?? '')) == 'USD' ? 'Selected' : '' }}>USD</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <button type="button" id="btn-add-detail" class="btn btn-primary">Add</button>
                            </div>
                            <strong><i>Please Supply The Following Items </i></strong>
                            <div>
                                <table class="table table-striped table-po-detail" style="border-bottom-style: none;">
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

                                    @if (isset($pos))
                                        @if ($pos->po_detail)
                                            @foreach ($pos->po_detail as $key => $detail)
                                            <tr class="po-detail-row">
                                                <td>
                                                    <a class="line-delete" href="#"><span class="badge bg-primary rounded-pill">-</span></a>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="{{ isset($detail->id) ? 'pod['.$detail->id.'][id]' : 'pod[{index}][id]' }}" value="{{ $detail->id }}">
                                                    <span class="index-number">{{ $no += 1 }}</span>
                                                </td>
                                                <td>
                                                    <div class="form-group mb0">
                                                        <input type="text" name="{{ isset($detail->id) ? 'pod['.$detail->id.'][description]' : 'pod[{index}][description]' }}" value="{{ $detail->description }}" class="form-control" placeholder="Description *" required="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group mb0">
                                                        <div class="input-group">
                                                            <input type="text" name="{{ isset($detail->id) ? 'pod['.$detail->id.'][qty]' : 'pod[{index}][qty]' }}" value="{{ $detail->qty }}" class="form-control text-right item-qty" placeholder="0" required="1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="{{ isset($detail->id) ? 'pod['.$detail->id.'][unit]' : 'pod[{index}][unit]' }}" value="{{ $detail->unit }}" class="form-control" placeholder="Unit">
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" name="{{ isset($detail->id) ? 'pod['.$detail->id.'][unit_price]' : 'pod[{index}][unit_price]' }}" value="{{ $detail->unit_price }}" class="form-control text-right item-price" placeholder="* 0.00">
                                                    </div>
                                                </td>
                                                <td class="text-right" align="right">
                                                    <label for="" id="" class="row-amount">{{ $subTotal += $detail->qty * $detail->unit_price }}</label>
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
                                            <td id="lbl-sub_total" class="text-right h6" align="right">Rp {{ $subTotal ?? '0' }}</td>
                                            <input type="hidden" id="sub_total" name="sub_total" value="{{ old('sub_total', $pos->sub_total ?? 0) }}">
                                        </tr>
                                        <tr>
                                            <td class="h6" colspan="6" align="right">Discount</td>
                                            <td align="right">
                                                <input type="text" name="discount" id="discount" style="width: 130px;" value="{{ old('discount', $pos->discount ?? 0) }}" data-value="0" onkeypress="return isDecimalNumber(event);" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="h6" colspan="6" align="right">Tax</td>
                                            <td align="right">
                                                <input type="text" name="tax" id="tax" style="width: 130px;" value="{{ old('tax', $pos->tax ?? 0) }}" data-value="0" onkeypress="return isDecimalNumber(event);" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right h6" colspan="6" align="right">Total</td>
                                            <td id="lbl-total" class="h6" align="right">Rp. {{ isset($pos->total) ? $pos->total : 0 }}</td>
                                            <input type="hidden" id="total" name="total">
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="remark" class="form-label">Remark</label>
                                    <textarea name="remark" id="remark" cols="30" rows="3"></textarea>
                                </div>
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
                        <input type="hidden" name="pod[{index}][id]">
                        <span class="index-number"></span>
                    </td>
                    <td>
                        <div class="form-group mb0">
                            <input type="text" name="pod[{index}][description]" class="form-control" placeholder="Description *" required="1">
                        </div>
                    </td>
                    <td>
                        <div class="form-group mb0">
                            <div class="input-group">
                                <input type="text" name="pod[{index}][qty]" class="form-control text-right item-qty" placeholder="0" required="1">
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="pod[{index}][unit]" class="form-control" placeholder="Unit">
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="text" name="pod[{index}][unit_price]" class="form-control text-right item-price" placeholder="* 0.00">
                        </div>
                    </td>
                    <td class="text-right" align="right">
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
            // let rowCount = $('.table-po-detail tbody>tr').length;

            let index = 0;

            // if (rowCount > 1) {
            //     index = rowCount;
            // } else {
            //     index = 0;
            // }

            // console.log(target);

            $.each($(target), function(i, v) {
                $.each($(this).find('input,textarea,select'), function() {
                    let tempName = $(this).attr('name');
                    let replaced = tempName.replace(/{index}/g, index);
                    $(this).attr('name', replaced);
                });

                // console.log(index);
                
                $(this).find('.index-number').text(index+1);

                index ++;
            });
        }

        function calculateAmt(target) {
            let sub_total = 0;
            $.each($(target), function() {
                let qty = parseInt($(this).find("[name*=qty]").val() || 0);
                let unit_price = parseFloat($(this).find("[name*=unit_price]").val() || 0);
                let amount = qty * unit_price;
                $(this).find(".row-amount").text(amount);

                sub_total += amount;
            });

            $('#lbl-sub_total').html(formatter.format(sub_total));
            $('#sub_total').val(sub_total);

            $('#lbl-total').html(formatter.format(sub_total));
            $('#total').val(sub_total);
        }

        function itemRow() {
            let itemIndex = 0;
            let $template = $($("#row-template").html()).clone();

            $template.find('.item-qty, .item-price').on('input focusout', function(e) {
                // calculateGST('#modal_issue_pv tr.bypass-expense-line');
                calculateAmt('.table-po-detail tr.po-detail-row');
            });

            $template.find('.line-delete').on('click', function(e) {
                e.preventDefault();

                // remove entire <tr>
                $(this).closest('tr').remove();

                // const detailLineId = $(this).closest('tr').find('[name*=id]').val();

                // console.log(detailLineID);
                // if (detailLineId) {
                //     $('.deleted-detail-line').append("<input name='deleted_line_ids[]' value=" + detailLineId + " />");
                // }

                insertIDToIndex('.table-po-detail tr.po-detail-row');
            });

            return $template;
        };

        // clicked button add
        $("#btn-add-detail").click(function(e) {
            // Remove No Data row
            if ($(".table-po-detail tbody").find("tr td").text() == "No Data") {
                $(".table-po-detail tbody").find("tr").remove();
            }

            $(".table-po-detail tbody").append(itemRow);
            // refreshServiceOptions();
            insertIDToIndex('.table-po-detail tr.po-detail-row'); 
        });

        $('#discount').on('input focusout', function(e) {
            console.log( parseFloat($('#sub_total').val()) - parseFloat($(this).val()) + parseFloat($('#tax').val()) );
            let total = parseFloat($('#sub_total').val()) - parseFloat($(this).val()) + parseFloat($('#tax').val());
            $('#total').val(total);
            $('#lbl-total').html(formatter.format(total));
        });

        $('#tax').on('input focusout', function(e) {
            console.log(parseFloat($('#sub_total').val()) - parseFloat($('#discount').val()) + parseFloat($(this).val()));
            let total = parseFloat($('#sub_total').val()) - parseFloat($('#discount').val()) + parseFloat($(this).val());
            $('#total').val(total = total || 0);
            $('#lbl-total').html(formatter.format(total));
        });

        $(".line-delete").click(function(e) {
            e.preventDefault();

                // remove entire <tr>
                $(this).closest('tr').remove();

                let detailLineId = $(this).closest('tr').find('[name*=id]').val();
                // console.log(detailLineId);

                if (detailLineId) {
                    $('.deleted-detail-line').append("<input type='hidden' name='deleted_line_ids[]' value=" + detailLineId + " />");
                }

                insertIDToIndex('.table-po-detail tr.po-detail-row');
        });

    });
</script>