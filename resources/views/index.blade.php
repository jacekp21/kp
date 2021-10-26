<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Main</title>
</head>
<body class="sb-nav-fixed">
    
    <div class="container">
        <div class="row">
            <div class="col">Header <h1>Main Page!!</h1></div> 
        </div>
        <div class="row">
            <div class="col">
                Navbar <br>
                <a href="http://localhost:8000/dashboard" rel="noopener noreferrer">Dashboard</a><br>
                <a href="http://localhost:8000/admin" rel="noopener noreferrer">Admin</a><br>
                <a href="http://localhost:8000/po" rel="noopener noreferrer">Purchase Order</a><br>
                <a href="http://localhost:8000/ap" rel="noopener noreferrer">Account Payable</a><br>
                <a href="http://localhost:8000/payment" rel="noopener noreferrer">Payment</a><br>
                <a href="http://localhost:8000/report" rel="noopener noreferrer">Report</a><br>
                <a href="http://localhost:8000/setting" rel="noopener noreferrer">Setting</a><br>
            </div>
            <div class="col">
            <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">Footer</div> 
        </div>
    </div>
    
    
</body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</html>