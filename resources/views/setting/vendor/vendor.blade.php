<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Vendor List</title>
</head>

</body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost:8000/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost:8000/setting/setting">Setting</a></li>
    <li class="breadcrumb-item active" aria-current="page">Vendor</a></li>
    
  </ol>
</nav>

    <h1>Data Vendor</h1>
    <a href="http://localhost:8000/setting/vendor/new" class="btn btn-primary mt-3" role="button">New</a>
    <label for="gsearch">Search</label>
    <input type="search" id="gsearch" name="gsearch">
    <div>
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Vendor Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Hartono - PT MOZ</td>
                            <td>Jl. Gajah Mada No. 34A Indonesia/td>
                            <td>081991008888</td>
                            <td>ptmoz.2122@gmail.com</td>
                            <td>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-danger">Void</button>
                            </td>
                            
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Toko Cipta Computer</td>
                            <td>Jl. Gambir Tanjungpinang</td>
                            <td>0771-231899</td>
                            <td>cc.tanjungpinang2@gmail.com</td>
                            <td>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-danger">Void</button>
                            </td>
                            </tr>
                        </tbody>
                        </table>   
                </div>

</html>