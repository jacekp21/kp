<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Payment List</title>
</head>
<body>
</body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Payment</li>
  </ol>
</nav>

    <h1>Data Payment</h1>
    <a href="http://localhost:8000/payment/new" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">New </a>
    <div>
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Vendor Name</th>
                            <th scope="col">Via</th>
                            <th scope="col">Invoice Number</th>
                            <th scope="col">Po Number</th>
                            <th scope="col">Currency</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Paid Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Hartono - PT MOZ</td>
                            <td>Cash</td>
                            <td>001/INV-MOZ/AR/I/2021</td>
                            <td>022/PO-BPA/I/2021</td>
                            <td>IDR</td>
                            <td>Rp 100.000.000,-</td>
                            <td>31 January 2021</td>
                            <td>Void</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Syamsul</td>
                            <td>Cash</td>
                            <td>Nota 001</td>
                            <td>001/PO-BPA/IX/2021</td>
                            <td>IDR</td>
                            <td>Rp 100.320,-</td>
                            <td>04 November 2021</td>
                            <td>Void</td>
                            </tr>
                        </tbody>
                        </table>   
                </div>
                <a href="http://localhost:8000/">Home</a>
</html>