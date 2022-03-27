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
        <title>Account Payable Page</title>
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
                <h1><i class="fas fa-file-alt mr-2"></i> Account Payable</h1><hr>
                <a href="http://localhost:8000/ap/new" class="btn btn-primary mt-2 mb-3" role="button">
                    <i class="fas fa-plus-square"></i> Add New
                </a>

                <!-- <div> -->
                <table style="width:100%" class="table table-striped align-middle">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Vendor Name</th>
                        <th scope="col">Date Of Invoice</th>
                        <th scope="col">Invoice Number</th>
                        <th scope="col">Po Number</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Hartono - PT MOZ</td>
                        <td>22 November 2021</td>
                        <td>001/INV-MOZ/AR/XI/2021</td>
                        <td>022/PO-BPA/XI/2021</td>
                        <td>Rp 100.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Hartono - PT MOZ</td>
                        <td>22 November 2021</td>
                        <td>002/INV-MOZ/AR/XI/2021</td>
                        <td>022/PO-BPA/XI/2021</td>
                        <td>Rp 50.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                    </tbody>
                </table>   
            <!-- </div> -->
            </div>

            
        </div>
    </body>            
</html>