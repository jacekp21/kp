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

    <!-- START : Custom Style -->
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
    <!-- END : Custom Style -->
    <title>Admin Page</title>
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
                    <li class="nav-item has-submenu">
                        <a class="nav-link text-white" href="http://localhost:8000/setting/setting"> 
                            <i class="fas fa-cog mr-2"></i> Setting
                        </a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link text-white" href="#">Vendor </a></li>
                            <li><a class="nav-link text-white" href="#">Warehouse </a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-user-cog mr-2"></i> Admin</h1><hr>
                <a href="http://localhost:8000/admin/new" class="btn btn-primary mt-2 mb-3" role="button"><i class="fas fa-plus-square"></i> Add New</a>
                <div>
                    <table class="table table-striped align-middle table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Position</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th> 
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Yonna Christiana</td>
                            <td>Administrator</td>
                            <td>082299008899</td>
                            <td>Admin</td>
                            <td>-</td> <!-- <img src="langit.png"> -->
                            <td>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                            </td> 
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Crystina</td>
                            <td>Purchaser</td>
                            <td>081299003333</td>
                            <td>Staff</td>
                            <td></td> <!-- tombol switch -->
                            <td>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Update</button>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-ban"></i> Void</button>
                            </td>
                            </tr>
                        </tbody>
                        </table>   
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.has-submenu .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 

// var dropdown = document.getElementsByClassName("has-submenu");
// var i;

// for (i = 0; i < dropdown.length; i++) {
//     dropdown[i].addEventListener("click", function() {
//         this.classList.toggle("active");
//         var dropdownContent = this.nextElementSibling;
//         if (dropdownContent.style.display === "block") {
//             dropdownContent.style.display = "none";
//         } else {
//             dropdownContent.style.display = "block";
//         }
//     });
// }
</script>