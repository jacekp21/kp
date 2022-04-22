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
        <title>New Admin Page</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white"><i class="fas fa-user"></i> WELCOME ADMIN | PT BANGUN PRIMA ABADI</a>
                <a href="http://localhost:8000/login/" class="btn btn-primary mt-3" role="button"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
            </div>
        </nav>
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-money-bill mr-2"></i> New Transaction</h1><hr>

                <form action="http://localhost:8000/po/data" method="post">
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Vendor</label>
                        <input class="form-control" list="vendorOptions" id="vendor" placeholder="">
                        <datalist id="vendorOptions">
                            <option value="Vendor A">
                            <option value="PT ABC">
                            <option value="KURNIAWAN">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Via</label>
                        <input class="form-control" list="viaOptions" id="via" placeholder="">
                        <datalist id="viaOptions">
                            <option value="BANK">
                            <option value="CHEQUE">
                            <option value="CASH (C.O.D)">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Bank</label>
                        <input class="form-control" list="bankOptions" id="bank" placeholder="">
                        <datalist id="bankOptions">
                            <option value="MDR">
                            <option value="BCA">
                            <option value="BRI">
                            <option value="ETC">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Account Name</label>
                        <input class="form-control" list="anOptions" id="an" placeholder="">
                        <datalist id="anOptions">
                            <option value="A">
                            <option value="B">
                            <option value="C">
                            <option value="D">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Account Number</label>
                        <input class="form-control" list="anbOptions" id="anb" placeholder="">
                        <datalist id="anbOptions">
                            <option value="3801575291">
                            <option value="1090016273888">
                            <option value="1234566034">
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="dopy" class="form-label">Date Of Payment</label>
                        <input type="date" class="form-control" id="dopy" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" placeholder="">
                    </div>
                    <div class="m-3">
                        <label for="terbilang" class="form-label">Terbilang :</label>
                        <input type="text" class="form-control" id="terbilang" placeholder="">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Add</button> 
                    </div>
                    <div>
                        <table class="table table-striped align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">No. Po</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Disc %</th>
                                    <th scope="col">Tax %</th>
                                    <th scope="col">No. Cheque</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0202/PO-BPA/X/2021</td>
                                    <td>TANAH PILIHAN</td>
                                    <td>20</td>
                                    <td>TRIP</td>
                                    <td>Rp 250.000.000,-</td>
                                    <td>5 %</td>
                                    <td>10 %</td>
                                    <td>CN0012930401</td>
                                </tr>
                                <tr>
                                    <td>0102/PO-BPA/X/2021</td>
                                    <td>BATU</td>
                                    <td>2</td>
                                    <td>TON</td>
                                    <td>Rp 20.000.000,-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>CN0012930402</td>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button> 
                        <button type="submit" class="btn btn-primary">Print</button> 
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>