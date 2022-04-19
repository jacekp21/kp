<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Link -->
    <script src="https://kit.fontawesome.com/cc8db81d9c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta3-web/css/all.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white">
                    <i class="fas fa-user"></i> WELCOME ADMIN | PT BANGUN PRIMA ABADI
                </a>
                <a href="http://localhost:8000/login/" class="btn btn-primary mt-3" role="button">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </nav>
        <div class="row no-gutters mt-5">
        @include('layouts.sidebar')
        <div class="col-md-10 p-5 mt-2">
        <h1><i class="fas fa-file-invoice-dollar m-2"></i>New Po</h1><hr>
        <div class="container mt-5">
        <div class="row">
        <div class="col-md-3">

        <form action="http://localhost:8000/po/data" method="post">

        <div class="mb-3">
            <label for="date" class="form-label">Po Date</label>
            <input type="date" class="form-control" id="date" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleDataList" class="form-label">Po Number</label>
            <input class="form-control" list="ponumOptions" id="ponum" placeholder="">
        </div>
        <div class="mb-3">
        <label for="exampleDataList" class="form-label">Vendor</label>
        <input class="form-control" list="vendorOptions" id="vendor" placeholder="">
        <datalist id="vendorOptions">
        <option value="Vendor A">
        <option value="PT ABC">
        <option value="KURNIAWAN">
        </datalist>
        <!-- kurang coding alamat - bersifat auto -->
        <div class="mb-3">
        <label for="exampleDataList" class="form-label">Ware House</label>
        <input class="form-control" list="gudangOptions" id="terms" placeholder="">
        <datalist id="gudangOptions">
        <option value="AMP TPI">
        <option value="CENTER">
        <option value="OFFICE">
        </datalist>
        <div class="mb-3">
        <label for="exampleDataList" class="form-label">Currency</label>
        <input class="form-control" list="currencyOptions" id="currency" placeholder="">
        <datalist id="currencyOptions">
        <option value="IDR">
        <option value="SGD">
        <option value="USD">
        </datalist>
        <div class="mb-3">
        <label for="dog" class="form-label">Description Of Goods</label>
        <input type="text" class="form-control" id="dog" placeholder="">
        <div class="mb-3">
        <label for="qty" class="form-label">Qty</label>
        <input type="text" class="form-control" id="qty" placeholder="">
        <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input type="text" class="form-control" id="unit" placeholder="">
        <div class="mb-3">
        <label for="unitprice" class="form-label">Unit Price</label>
        <input type="text" class="form-control" id="unitprice" placeholder="IDR ...">
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Add</button>
        </div>
        <strong><i>Please Supply The Following Items </i></strong>
        <div>
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">Po. Date</th>
                        <th scope="col">Description Of Goods</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/01/2022</td>
                        <td>SEPATU SAFETY</td>
                        <td>20</td>
                        <td>PSG</td>
                        <td>Rp 250.000,-</td>
                        <td>Rp 5.000.000,-</td>
                    </tr>
                    <tr>
                        <td>01/01/2022</td>
                        <td>CANGKUL</td>
                        <td>20</td>
                        <td>BUAH</td>
                        <td>Rp 20.000,-</td>
                        <td>Rp 400.000,-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mb-3">
            <label for="remark" class="form-label">Remark</label>
            <input type="text" class="form-control" id="remark" placeholder="">
        </div>
        <div class="mb-3">
            <label for="subtotal" class="form-label">Sub Total</label>
            <input type="text" class="form-control" id="subtotal" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disc" class="form-label">Discount</label>
            <input type="text" class="form-control" id="disc" placeholder="">
        </div>
        <div class="mb-3">
            <label for="tax" class="form-label">Tax</label>
            <input type="text" class="form-control" id="tax" placeholder="">
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" class="form-control" id="total" placeholder="">
        </div>

        </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
        </form>

    </body>
</html>
