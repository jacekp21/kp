<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Report</title>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost:8000/">Home</a></li>
    <li class="breadcrumb-item">Report</a></li>
  </ol>
</nav>

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