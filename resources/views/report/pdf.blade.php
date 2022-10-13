<!doctype html>
<html lang="en">
<head>
    <title>Report</title>
    <style>
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
        }
        .table > tbody {
            vertical-align: inherit;
        }
        .table > thead {
            vertical-align: bottom;
            border-top:1px solid black;
            border-bottom: 1px solid black;
        }
        .table > :not(:first-child) {
            border-top: 2px solid currentColor;
        }
        .table-striped > tbody > tr:nth-of-type(odd) > * {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
        }
        .table-primary {
            --bs-table-bg: #cfe2ff;
            --bs-table-striped-bg: #c5d7f2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bacbe6;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfd1ec;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #bacbe6;
        }
    </style>
</head>
<body>
    <div class="row no-gutters mt-5">    
        <div class="col-md-10 p-5 mt-2">
        <hr><h1 style="color:blue;">PURCHASE ORDER</h1>
            <p style="color:red;">PT BANGUN PRIMA ABADI</p>
            <hr>
            <br>
            <div class="container mt-5">
                <div class="row">
                    {{ $text }}
                </div>
            </div>
        </div>
    </div>
</body>
    
</html>