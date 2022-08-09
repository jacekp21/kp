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
    
    <title>Payment Report page</title>
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
            <div class="col-md-10 p-5">
                <div class="top-10 mt-5 end-0"><h1>Payment Report</h1></div><hr>
            <br>
            <div class="container mt-2">
                <form action="/" method="GET">
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                            <label for="date" class="form-label col-md-1" style="text-align:center">Start Date</label>
                            <input type="date" class="form-control" name="start_date">
                            <label for="date" class="form-label col-md-1" style="text-align:center">End Date</label>
                            <input type="date" class="form-control" name="end_date">
                             <a href="/report/apr_print" class="btn btn-primary col-md-1" type="submit">Get</a>
                    </div>
                </form>
            </div>
    </body>
</html>