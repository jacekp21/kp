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
                <a href="/login/" class="btn btn-primary mt-3" role="button"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
            </div>
        </nav>
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
            <div class="col-md-5 p-5 mt-2">
                <h1><i class="fas fa-user-cog mr-2"></i> New Account</h1><hr>
                <form action="/user/store" method="post">
                    @csrf
                    <div class="pt-3 mb-1">
                        <label for="username" class="form-label">Username</label>
                        <input type="hidden" name="user_id" value="{{ $user->id ?? '' }}">
                        <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                        @error('username')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" value="{{ old('password', $user->password) }}" class="form-control @error('password') is-invalid @enderror" placeholder="Password"> <!-- Belum membuat Icon show and hide di password -->
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-inline mb-1">
                        <label for="position">Position</label>
                        <label for="">{{ old('position') }}</label>
                        <select name="position" id="position" class="form-control @error('position') is-invalid @enderror" placeholder="Type to search...">
                            <option {{ !isset($user->position) ? 'Selected' : '' }}>Choose position..</option>
                            <option value="Admin" {{ old('position', ucfirst($user->position)) == 'Admin' ? 'Selected' : '' }}>Admin</option>
                            <option value="Manager" {{ old('position', ucfirst($user->position)) == 'Manager' ? 'Selected' : '' }}>Manager</option>
                            <option value="Accounting" {{ old('position', ucfirst($user->position)) == 'Accounting' ? 'Selected' : '' }}>Accounting</option>
                            <option value="Purchasing" {{ old('position', ucfirst($user->position)) == 'Purchasing' ? 'Selected' : '' }}>Purchasing</option>
                        </select>
                        @error('position')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="telp" class="form-label">No. Telp</label>
                        <input type="text" value="{{ old('no_telp', $user->no_telp) }}" name="no_telp" id="telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="No. Telp">
                        @error('no_telp')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role" class="form-control js-select2-position @error('role') is-invalid @enderror" placeholder="Type to search...">
                            <option {{ !isset($user->role) ? 'Selected' : '' }}>Choose position..</option>
                            <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'Selected' : '' }}>Admin</option>
                            <option value="manager" {{ old('role', $user->role ?? '') == 'manager' ? 'Selected' : '' }}>Manager</option>
                            <option value="staff" {{ old('role', $user->role ?? '') == 'staff' ? 'Selected' : '' }}>Staff</option>
                        </select>
                        @error('role')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="mb-1">
                        <label for="Image" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile" onchange="preview()">
                        <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button>
                    </div>
                    <img id="frame" src="" class="img-fluid" /> --}}
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{url()->previous()}}" class="btn btn-primary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }

    if (category_id) {
        $(".js-select2-category").val(category_id).trigger('change');
    }
</script>

</html>
