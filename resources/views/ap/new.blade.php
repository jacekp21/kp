<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>New Account Payable</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</a></li>
    <li class="breadcrumb-item">Account Payable</a></li>
    <li class="breadcrumb-item active" aria-current="page">New</a></li>
  </ol>
</nav>
    <a href="http://localhost:8000/">Home</a>

    <form>
    <div class="position-absolute top-0 end-0"><h1>ACCOUNT PAYABLE FORM</h1></div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Vendor</label>
                    <input class="form-control" list="vendorOptions" id="vendor" placeholder="">
                    <datalist id="vendorOptions">
                        <option value="Vendor A">
                        <option value="PT ABC">
                        <option value="KURNIAWAN">
                    </datalist>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Address</label>
                    <input type="text" class="form-control" id="alamat" placeholder="">
                <div class="mb-3">
                    <label for="doi" class="form-label">Data Of Invoice</label>
                    <input type="date" class="form-control" id="dop" placeholder="">
                <div class="mb-3">
                    <label for="noinv" class="form-label">No. Invoice</label>
                    <input type="text" class="form-control" id="noinv" placeholder="">
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Currency</label>
                    <input class="form-control" list="currencyOptions" id="currency" placeholder="">
                    <datalist id="currencyOptions">
                        <option value="IDR">
                        <option value="SGD">
                        <option value="USD">
                    </datalist>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Ware House</label>
                    <input class="form-control" list="gudangOptions" id="terms" placeholder="">
                    <datalist id="gudangOptions">
                        <option value="AMP TPI">
                        <option value="CENTER">
                        <option value="OFFICE">
                    </datalist>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Terms</label>
                    <input class="form-control" list="termsOptions" id="terms" placeholder="">
                    <datalist id="termsOptions">
                        <option value="2/10,n30">
                        <option value="2/10">
                        <option value="n30">
                    </datalist>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">No. Po</label>
                    <input class="form-control" list="nopoOptions" id="nopo" placeholder="">
                    <datalist id="nopoOptions">
                        <option value="001/PO-BPA/XI/2021">
                        <option value="002/PO-BPA/XI/2021">
                        <option value="003/PO-BPA/XI/2021">
                    </datalist>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Item</label>
                    <input class="form-control" list="itemOptions" id="item" placeholder="">
                    <datalist id="itemOptions">
                        <option value="PENGHAPUS">
                        <option value="PENA">
                        <option value="SEPATU SAFETY">
                    </datalist>
                <div class="mb-3">
                    <label for="unit" class="form-label">Unit</label>
                    <input type="text" class="form-control" id="unit" placeholder="">
                <div class="mb-3">
                    <label for="unitprice" class="form-label">Unit Price</label>
                    <input type="text" class="form-control" id="unitprice" placeholder=""> 
                <div class="mb-3">
                    <label for="disc" class="form-label">Discount</label>
                    <input type="text" class="form-control" id="disc" placeholder="">   
                <div class="mb-3">
                    <label for="tax" class="form-label">Tax</label>
                    <input type="text" class="form-control" id="tax" placeholder=""> 
                </div>  
                <div>
                    <button type="submit" class="btn btn-primary">Add</button> 
                </div>
                <div>
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                            <th scope="col">No. Po</th>
                            <th scope="col">Item</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Disc %</th>
                            <th scope="col">Tax %</th>
                            <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>001/PO-BPA/X/2021</td>
                            <td>SEPATU SAFETY</td>
                            <td>20</td>
                            <td>PSG</td>
                            <td>Rp 250.000,-</td>
                            <td>5 %</td>
                            <td>10 %</td>
                            <td>Rp 5.225.000,-"</td>
                            </tr>
                            <tr>
                            <td>002/PO-BPA/X/2021</td>
                            <td>CANGKUL</td>
                            <td>20</td>
                            <td>BUAH</td>
                            <td>Rp 20.000,-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Rp 400.000,-"</td>
                            </tr>
                        </tbody>
                        </table>   
                </div>
                <div class="mb-3">
                    <label for="sub" class="form-label">Sub Total</label>
                    <input type="text" class="form-control" id="sub" placeholder=""> 
                <div class="mb-3">
                    <label for="ongkir" class="form-label">Ongkir</label>
                    <input type="text" class="form-control" id="ongkir" placeholder=""> 
                <div class="mb-3">
                    <label for="dp" class="form-label">Dp</label>
                    <input type="text" class="form-control" id="dp" placeholder=""> 
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" class="form-control" id="total" placeholder=""> 
                <div class="mb-3">
                    <label for="note" class="form-label">Note :</label>
                    <input type="text" class="form-control" id="note" placeholder=""> 
                <div>
                    <button type="submit" class="btn btn-primary">Save</button> 
                    <button type="submit" class="btn btn-primary">Print</button> 
                </div>  

    </form>
</body>
</html>