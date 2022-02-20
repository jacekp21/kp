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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <title>New Admin Page</title>
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
                <h1><i class="fas fa-user-cog mr-2"></i> New Account</h1><hr>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
                <div class="pt-3 mb-1">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password"> <!-- Belum membuat Icon show and hide di password -->
                </div>
                <div class="mb-1">
                    <label for="exampleDataList" class="form-label">Position</label>
                    <input class="form-control" list="positionOptions" id="position" placeholder="Type to search...">
                    <datalist id="positionOptions">
                        <option value="Admin">
                        <option value="Manager">
                        <option value="Accounting">
                        <option value="Purchasing">
                    </datalist>
                </div>
                <div class="mb-1">
                    <label for="telp" class="form-label">No. Telp</label>
                    <input type="text" class="form-control" id="telp" placeholder="No.Telp">
                </div>
                <div class="mb-1">
                    <label for="exampleDataList" class="form-label">Role</label>
                    <input class="form-control" list="roleOptions" id="Role" placeholder="">
                    <datalist id="roleOptions">
                        <option value="Admin">
                        <option value="Manager">
                        <option value="Staff">
                    </datalist>
                    </div>
                <div class="mb-1">
                    <label for="Image" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile" onchange="preview()">
                    <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button>
                </div>
                <img id="frame" src="" class="img-fluid" />
                 </div>
                <script>
                    function preview() {
                        frame.src = URL.createObjectURL(event.target.files[0]);
                    }
                    function clearImage() {
                        document.getElementById('formFile').value = null;
                        frame.src = "";
                    }
                </script>
        </div>
    </div>
</body>

</html>
