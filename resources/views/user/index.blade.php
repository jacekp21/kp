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

            /* START : Toggle on off */
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            .switch input { 
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #2196F3;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
            /* END : Toggle on off */
        </style>
        <!-- END : Custom Style -->
        <title>User Page</title>
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
            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-user-cog mr-2"></i> User</h1><hr>
                @if (session('success'))
                    <div class="alert-success">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                
                @if ($errors->any())
                    <div class="alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <a href="/user/new" class="btn btn-primary mt-2 mb-3" role="button"><i class="fas fa-plus-square"></i> Add New</a>
                <div>
                    <table class="table table-striped align-middle table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Position</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th> 
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ ucfirst($user->position) }}</td>
                                <td>{{ $user->no_telp }}</td>
                                <td>{{ ucfirst($user->role) }}</td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" disabled {{ $user->status ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>
                                    <a href="/user/edit/{{ $user->id }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i> Update
                                    </a>
                                    <a href="/user/disable/{{ $user->id }}" class="btn btn-danger">
                                        <i class="fas fa-ban"></i> Void
                                    </a>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </body>
</html>
