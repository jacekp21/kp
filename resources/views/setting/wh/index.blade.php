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

        <!-- START : Custom Style -->
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
        <!-- END : Custom Style -->
        <title>Warehouse Page</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-warehouse"></i> Warehouse</h1><hr>
                <a href="http://localhost:8000/setting/wh/new" class="btn btn-primary mt-2 mb-3" role="button"><i class="fas fa-plus-square"></i> Add New</a>
                <div>
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Warehouse</th>
                                <th scope="col">Address</th>
                                <th scope="col">Head Of Warehouse</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AMP</td>
                                <td>Senggarang</td>
                                <td>Puji Hartono</td>
                                <td>085264113372</td>
                                <td>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Office</td>
                                <td>Tanjungpinang</td>
                                <td>Michael</td>
                                <td>08968899123</td>
                                <td>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </body>
</html>