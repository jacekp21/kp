<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>AP List</title>
</head>

</body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost:8000/dashboard">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Account Payable</li>
  </ol>
</nav>

    <h1>Data Account Payable</h1>
    <a href="http://localhost:8000/ap/new" class="btn btn-primary mt-3" role="button">New</a>
    <label for="gsearch">Search</label>
    <input type="search" id="gsearch" name="gsearch">
    <div>
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Vendor Name</th>
                            <th scope="col">Date Of Invoice</th>
                            <th scope="col">Invoice Number</th>
                            <th scope="col">Po Number</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Hartono - PT MOZ</td>
                            <td>22 November 2021</td>
                            <td>001/INV-MOZ/AR/XI/2021</td>
                            <td>022/PO-BPA/XI/2021</td>
                            <td>Rp 100.000.000,-</td>
                            <td><button type="submit" class="btn btn-danger">Void</button></td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Hartono - PT MOZ</td>
                            <td>22 November 2021</td>
                            <td>002/INV-MOZ/AR/XI/2021</td>
                            <td>022/PO-BPA/XI/2021</td>
                            <td>Rp 50.000.000,-</td>
                            <td><button type="submit" class="btn btn-danger">Void</button></td>
                            </tr>
                        </tbody>
                        </table>   
                </div>
                
</html>