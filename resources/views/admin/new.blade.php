<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>New Account</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost:8000/">Home</a></li>
    <li class="breadcrumb-item"><a href="http://localhost:8000/admin">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost:8000/admin/new">New</a></li>
  </ol>
</nav>
            <form>
                <h1>New Account</h1>
                <div class="mb-3">
                    <br><label for="username" class="form-label">Username</label></br>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <br><label for="password" class="form-label">Password</label></br>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Position</label>
                    <input class="form-control" list="positionOptions" id="position" placeholder="Type to search...">
                    <datalist id="positionOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                </div>
                <div class="mb-3">
                    <br><label for="telp" class="form-label">No. Telp</label></br>
                    <input type="text" class="form-control" id="telp" placeholder="No.Telp">
                </div>
                <br><button type="submit" class="btn btn-primary">Save</button></br>
                <br><button type="reset" class="btn btn-primary">Reset</button></br>
            </form>
                
        </div>
    </div>
</body>
</html>
