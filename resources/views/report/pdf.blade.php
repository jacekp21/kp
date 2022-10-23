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
    <div class="row no-gutters">    
        <div class="col-md-3">
            <hr>
            <!-- <div sytle="align-content: center;"> -->
                <h2 style="color:black; padding-bottom:0px; margin-bottom:0px; text-align: center;">PT BANGUN PRIMA ABADI</h2>
                <h3 style="color:blue; text-align: center;">{{ $title }}</h3>
                <h6 style="color:red; text-align: center;">{{ $period }}</h6>
            <!-- </div> -->
            <hr><br>
            <div class="container mt-5">
                <div class="row">
                    <!-- {{ $report }} -->
                    <table style="width:100%" class="table table-striped align-middle table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">VENDOR</th>
                            <th scope="col">CURRENCY</th>
                            <th scope="col">SALDO AWAL</th>
                            <th scope="col">DEBIT</th>
                            <th scope="col">CREDIT</th>
                            <th scope="col">SALDO AKHIR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($report as $key => $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->currency }}</td>
                            <td>{{ 0 }}</td>
                            <td>{{ $data->debit }}</td>
                            <td>{{ $data->credit }}</td>
                            <td>{{ 0 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
                </div>
            </div>
        </div>
    </div>
</body>
    
</html>