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
    <title>Dashboard</title>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white"><i class="fas fa-user"></i> WELCOME ADMIN | PT BANGUN PRIMA ABADI</a>
            <a href="http://localhost:8000/logout/" class="btn btn-primary mt-3" role="button"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
        </div>
    </nav>
    <div class="row no-gutters mt-5">
        @include('layouts.sidebar')
        
        <div class="col-md-10 p-5 mt-2">
            <h1><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</h1><hr>
            
            <div class="row text-white">
                <div class="card bg-danger pl-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">  
                            <i class="fas fa-times mr-2"></i>
                        </div>
                        <h2 class="card-title">Unpaid AP</h2>
                        <div class="display-6">Rp 9.000.000</div>
                        <a href=""><p class="card-text text-white">Details <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>

                <div class="card bg-warning pl-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">  
                            <i class="fas fa-check mr-2"></i>

                        </div>
                        <h2 class="card-title">Paid AP</h2>
                        <div class="display-6">Rp 90.000.000</div>
                        <a href="">
                            <p class="card-text text-white">Details <i class="fas fa-angle-double-right"></i></p>
                        </a>
                    </div>
                </div>
                <div class="card bg-primary ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">  
                            <i class="fas fa-user-cog mr-2"></i>
                        </div>
                        <h2 class="card-title">Admin</h2>
                        <div class="display-6">5</div>
                        <a href=""><p class="card-text text-white">Details <i class="fas fa-angle-double-right"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>