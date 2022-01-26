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
            <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="http://localhost:8000/dashboard"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost:8000/admin/admin"><i class="fas fa-user-cog mr-2"></i> Admin</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost:8000/po"><i class="fas fa-file-alt mr-2"></i> Purchase Order</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost:8000/ap/ap"><i class="fas fa-file-alt mr-2"></i> Account Payable</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost:8000/payment"><i class="fas fa-cash-register mr-2"></i> Payment</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost:8000/report/report"><i class="fas fa-file-invoice mr-2"></i> Report</a><hr class="bg-secondary">
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="http://localhost:8000/setting/setting"><i class="fas fa-cog mr-2"></i> Setting</a><hr class="bg-secondary">
            </li>
            </ul>
            </div>

                     
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
            <button type="print" class="btn btn-primary">Print</button>
            <button type="view" class="btn btn-primary">View</button>
        </div>

</body>
</html>