<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List Admin</title>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Admin</li>
  </ol>
</nav>

    <h1>Data Users</h1>
    <a href="http://localhost:8000/admin/new" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">New </a>
    <div>
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">Position</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Role</th>
                            <th scope="col">Picture</th>
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
                            <td>-</td>
                            <td>Update/Void</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Crystina</td>
                            <td>Purchaser</td>
                            <td>081299003333</td>
                            <td>Staff</td>
                            <td>-</td>
                            <td>Update/Void</td>
                            </tr>
                        </tbody>
                        </table>   
                </div>
                <a href="http://localhost:8000/">Home</a>
</body>
</html>