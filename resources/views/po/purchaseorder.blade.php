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
        <title>Purchase Order Page</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white"><i class="fas fa-user"></i> WELCOME ADMIN | PT BANGUN PRIMA ABADI</a>
            <a href="http://localhost:8000/login/" class="btn btn-primary mt-3" role="button"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
        </div>
        </nav>
        <div class="row no-gutters mt-5">
        @section('sidebar')
     
            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-file-alt mr-2"></i> Purchase Order</h1><hr>
                <a href="http://localhost:8000/po/new" class="btn btn-primary mt-2 mb-3" role="button">
                    <i class="fas fa-plus-square"></i> Add New
                </a>
            </div>
            
            <div>
                <table class="table table-striped align-middle table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Date Of Purchase Order</th>
                        <th scope="col">Po Number</th>
                        <th scope="col">Vendor</th>
                        <th scope="col">Currency</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>22 January 2021</td>
                        <td>005/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>22 January 2021</td>
                        <td>006/PO-BPA/I/2021</td>
                        <td>OZ-COMPANY</td>
                        <td>IDR</td>
                        <td>Rp 10.000.000,-</td>
                        <td>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                        </td>

                    </tbody>
                </table>   
            </div>
        </div>
    </body>
</html>