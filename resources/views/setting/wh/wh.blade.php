<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Warehouse List</title>
</head>

</body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Setting</li>
    <li class="breadcrumb-item active" aria-current="page">Warehouse</a></li>
  </ol>
</nav>

    <h1>Data Warehouse</h1>
    <a href="http://localhost:8000/ap/new" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">New </a>
    <div>
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Warehouse</th>
                            <th scope="col">Address</th>
                            <th scope="col">Head Of Warehouse</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>AMP</td>
                            <td>Senggarang</td>
                            <td>Puji Hartono</td>
                            <td>085264113372</td>
                            <td>Update/Void</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Office</td>
                            <td>Tanjungpinang</td>
                            <td>Michael</td>
                            <td>08968899123</td>
                            <td>Update/Void</td>
                            </tr>
                        </tbody>
                        </table>   
                </div>
                <a href="http://localhost:8000/setting/setting">Setting</a>
                <a href="http://localhost:8000/setting/wh/new">Add New</a>
</html>