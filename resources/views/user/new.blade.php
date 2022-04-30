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
        <title>New User Page</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white"><i class="fas fa-user"></i> WELCOME ADMIN | PT BANGUN PRIMA ABADI</a>
                <a href="http://localhost:8000/login/" class="btn btn-primary mt-3" role="button"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
            </div>
        </nav>
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
            <div class="col-md-5 p-5 mt-2">
                <h1><i class="fas fa-user-cog mr-2"></i> New Account</h1><hr>
                <form action="/user/store" method="post">
                    @csrf
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                    <div class="pt-3 mb-1">
                        <label for="username" class="form-label">Username</label>
                        <input type="hidden" name="user_id" value="{{ $user->user_id ?? '' }}">
                        <input type="text" class="form-control" name="username" id="username" 
                        value="{{ $user->username ?? '' }}" placeholder="Username">
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"> <!-- Belum membuat Icon show and hide di password -->
                    </div>
                    <div class="form-inline mb-1">
                        <label for="position">Position</label>
                        <select class="form-control" name="position" id="position" placeholder="Type to search...">
                            <option selected>Choose position..</option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Purchasing">Purchasing</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="telp" class="form-label">No. Telp</label>
                        <input type="text" name="no_telp" class="form-control" id="telp" placeholder="No.Telp">
                    </div>
                    <div class="mb-1">
                        <label for="role" class="form-label">Role</label>
                        {{-- <input class="form-control" list="roleOptions" id="role" placeholder="">
                        <datalist id="roleOptions">
                            <option value="Admin">
                            <option value="Manager">
                            <option value="Staff">
                        </datalist> --}}
                        <select class="form-control" name="role" id="role" placeholder="Type to search...">
                            <option selected>Choose position..</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    {{-- <div class="mb-1">
                        <label for="Image" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile" onchange="preview()">
                        <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button>
                    </div>
                    <img id="frame" src="" class="img-fluid" /> --}}

                </form>
                
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
