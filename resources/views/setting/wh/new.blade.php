<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Data Warehouse</title>
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
                <h1><i class="fas fa-file-invoice-dollar m-2"></i>New Warehouse</h1><hr>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="wh" class="form-label">Warehouse</label>
                                <input type="text" class="form-control" id="wh" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Address</label>
                                <input type="text" class="form-control" id="alamat" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="head" class="form-label">Head Of Warehouse</label>
                                <input type="text" class="form-control" id="head" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="telp" class="form-label">No. Telp</label>
                                <input type="text" class="form-control" id="telp" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
