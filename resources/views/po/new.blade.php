<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>New Po</title>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost:8000/dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="http://localhost:8000/po">Purchase Order</a></li>
    <li class="breadcrumb-item active" aria-current="page">New</a></li>
  </ol>
</nav>
    <h1>Purchase Order</h1>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-3">

    <form action="http://localhost:8000/po/data" method="post">
   
        <div class="mb-3">
                    <label for="date" class="form-label">Po Date</label>
                    <input type="date" class="form-control" id="date" placeholder="">
        <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Po Number</label>
                    <input class="form-control" list="ponumOptions" id="ponum" placeholder="">
        <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Vendor</label>
                    <input class="form-control" list="vendorOptions" id="vendor" placeholder="">
                    <datalist id="vendorOptions">
                        <option value="Vendor A">
                        <option value="PT ABC">
                        <option value="KURNIAWAN">
                    </datalist>
        <!-- kurang coding alamat - bersifat auto -->
        <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Ware House</label>
                    <input class="form-control" list="gudangOptions" id="terms" placeholder="">
                    <datalist id="gudangOptions">
                        <option value="AMP TPI">
                        <option value="CENTER">
                        <option value="OFFICE">
                    </datalist>
        <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Currency</label>
                    <input class="form-control" list="currencyOptions" id="currency" placeholder="">
                    <datalist id="currencyOptions">
                        <option value="IDR">
                        <option value="SGD">
                        <option value="USD">
                    </datalist>
        <div class="mb-3">
                    <label for="dog" class="form-label">Description Of Goods</label>
                    <input type="text" class="form-control" id="dog" placeholder="">
        <div class="mb-3">
                    <label for="qty" class="form-label">Qty</label>
                    <input type="text" class="form-control" id="qty" placeholder="">
        <div class="mb-3">
                    <label for="unit" class="form-label">Unit</label>
                    <input type="text" class="form-control" id="unit" placeholder="">
        <div class="mb-3">
                    <label for="unitprice" class="form-label">Unit Price</label>
                    <input type="text" class="form-control" id="unitprice" placeholder="IDR ...">
        </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Add</button> 
                    </div>
            <strong><i>Please Supply The Following Items </i></strong>
        <div>
             <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                            <th scope="col">Po. Date</th>
                            <th scope="col">Description Of Goods</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>01/01/2022</td>
                            <td>SEPATU SAFETY</td>
                            <td>20</td>
                            <td>PSG</td>
                            <td>Rp 250.000,-</td>
                            <td>Rp 5.000.000,-</td>
                            </tr>
                            <tr>
                            <td>01/01/2022</td>
                            <td>CANGKUL</td>
                            <td>20</td>
                            <td>BUAH</td>
                            <td>Rp 20.000,-</td>
                            <td>Rp 400.000,-</td>
                            </tr>
                        </tbody>
                        </table>   
        <div class="mb-3">
                    <label for="remark" class="form-label">Remark</label>
                    <input type="text" class="form-control" id="remark" placeholder="">
        <div class="mb-3">
                    <label for="subtotal" class="form-label">Sub Total</label>
                    <input type="text" class="form-control" id="subtotal" placeholder="">
        <div class="mb-3">
                    <label for="disc" class="form-label">Discount</label>
                    <input type="text" class="form-control" id="disc" placeholder="">   
        <div class="mb-3">
                    <label for="tax" class="form-label">Tax</label>
                    <input type="text" class="form-control" id="tax" placeholder=""> 
        <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" class="form-control" id="total" placeholder=""> 
        
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</body>
</html>