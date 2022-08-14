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
            <h1 {{ ($po->status == 'void') ? "class=text-danger" : "" }}><i class="fas fa-file-invoice-dollar m-2"></i>{{ $po->po_no ?? '' }} {{ ($po->status == 'void') ? "(Cancelled)" : '' }}</h1><hr>
            <div class="container mt-5">
                <div class="row">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="date" class="form-label">Po Date : </label>
                            <label>{{ $po->po_date }}</label>
                        </div>
                        <div class="col-md-3 mb-3">
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
                        <table class="table table-striped table-po-detail" style="border-bottom-style: none;">
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
                        <a href="/po" class="btn btn-success">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <a href="/po/print/{{ $po->id }}" class="btn btn-primary">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    
</html>

<script>
    $(document).ready(function() {
        function insertIDToIndex(parent) {
            $(parent).each(function (i, v) {
                $.each($(this).find("input,textarea,select"), function () {
                    let tempName = $(this).attr("name");
                    let replaced = tempName.replace(
                        /\[(.*)\]\[/g,
                        "[" + i + "]["
                    );

                    $(this).attr("name", replaced);
                });
                $(this).find('.index-number').text(i+1);
                // index++;
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

            let discount = $('#discount').val();
            let tax = $('#tax').val();

            $('#lbl-sub_total').html(formatter.format(sub_total));
            $('#sub_total').val(sub_total);

            $('#lbl-total').html(formatter.format(sub_total));
            $('#total').val(sub_total - discount + tax);
        }

        function itemRow() {
            let itemIndex = 0;
            let $template = $($("#row-template").html()).clone();

            $template.find('.item-qty, .item-price').on('input focusout', function(e) {
                calculateAmt('.table-po-detail tr.po-detail-row');
            });

            $template.find('.line-delete').on('click', function(e) {
                e.preventDefault();

                // remove entire <tr>
                $(this).closest('tr').remove();

                insertIDToIndex('.table-po-detail tr.po-detail-row');
            });

            return $template;
        };

        // clicked button add
        $("#btn-add-detail").click(function(e) {
            e.preventDefault();

            // Remove No Data row
            if ($(".table-po-detail tbody").find("tr td").text() == "No Data") {
                $(".table-po-detail tbody").find("tr").remove();
            }

            $(".table-po-detail tbody").append(itemRow);
            
            insertIDToIndex('tr.po-detail-row');
        });

        $('#discount').on('input focusout', function(e) {
            let total = parseFloat($('#sub_total').val()) - parseFloat($(this).val()) + parseFloat($('#tax').val());
            $('#total').val(total);
            $('#lbl-total').html(formatter.format(total));
        });

        $('#tax').on('input focusout', function(e) {
            let total = parseFloat($('#sub_total').val()) - parseFloat($('#discount').val()) + parseFloat($(this).val());
            $('#total').val(total = total || 0);
            $('#lbl-total').html(formatter.format(total));
        });

        $(".line-delete").click(function(e) {
            e.preventDefault();

                // remove entire <tr>
                $(this).closest('tr').remove();

                let detailLineId = $(this).closest('tr').find('[name*=id]').val();

                if (detailLineId) {
                    $('.deleted-detail-line').append("<input type='hidden' name='deleted_line_ids[]' value=" + detailLineId + " />");
                }

                insertIDToIndex('.table-po-detail tr.po-detail-row');
        });

    });
</script>