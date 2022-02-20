<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List Po</title>
</head>
<body>
    <!-- <form action="http://localhost:8000/test/new" method="post"> -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost:8000/dashboard">Home</a></a></li>
    <li class="breadcrumb-item active" aria-current="page">Purchase Order</li>
  </ol>
</nav>

    <h1>Data Purchase Order</h1>
    <a href="http://localhost:8000/po/new" class="btn btn-primary mt-3" role="button">New</a>
    <label for="gsearch">Search</label>
    <input type="search" id="gsearch" name="gsearch">
                    <div>
                    <table class="table table-striped align-middle">
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
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-danger">Void</button>
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
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-danger">Void</button>
                            </td>
                        </tbody>
                        </table>   
                </div>
    <!-- </form> -->
</body>
</html>