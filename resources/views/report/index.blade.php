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
    <title>Report page</title>
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
            <h1><i class="fas fa-file-invoice mr-2"></i>  Report</h1><hr>

<div class="top-10 mt-5 end-0"><h1>PT BANGUN PRIMA ABADI REPORT</h1></div>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
            <form action="http://localhost:8000/po/data" method="post">
            <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Pilih Laporan</label>
                    <input class="form-control" list="reportOptions" id="report" placeholder="">
                    <datalist id="reportOptions">
                        <option value="Laporan Hutang">
                        <option value="Laporan Payment">
                    </datalist>
            </div>
            <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Periode Transaksi Dari 
                    </label>    
                        <input type="date" class="form-control" id="date" placeholder="">
                        Ke
                        <input type="date" class="form-control" id="date" placeholder="">
            </div>
            <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Periode Bulan
                    </label>
                    <div class="mb-3">
                        <input class="form-control" list="bulanOptions" id="bulan" placeholder="">
                        <datalist id="bulanOptions">
                            <option value="Jan">
                            <option value="Feb">
                            <option value="Mar">
                            <option value="Apr">
                            <option value="May">
                            <option value="Jun">
                            <option value="Jul">
                            <option value="Aug">
                            <option value="Sep">
                            <option value="Oct">
                            <option value="Nov">
                            <option value="Dec">
                        </datalist>       
            </div>
        <div>
        <a href="/report/apr" class="btn btn-success">
            <i class="fas fa-eye"></i> View</a>
        </div>

</body>
</html>