<!DOCTYPE html>
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
    <title>Vendor</title>
</head>
<body>
    @include('layouts.header')
    <div class="row no-gutters mt-5">
        @include('layouts.sidebar')
                    
        <div class="col-md-10 p-5 mt-2">
            <h1><i class="fas fa-building"></i> Vendor</h1><hr>
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
            <a href="vendor/new" class="btn btn-primary mt-2 mb-3" role="button"><i class="fas fa-plus-square"></i> Add New</a>

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
                    @foreach ($vendors as $key => $vendor)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ ucfirst($vendor->name) }}</td>
                            <td>{{ ucfirst($vendor->address) }}</td>
                            <td>{{ $vendor->telpon }}</td>
                            <td>{{ $vendor->email }}</td>
                            <td>
                                <a href="/setting/vendor/edit/{{ $vendor->id }}" class="btn btn-primary"><i class="fas fa-edit"></i> Update</a>
                                <a href="/setting/vendor/delete/{{ $vendor->id }}" class="btn btn-danger"><i class="fas fa-ban"></i> Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
    </div>
</body>
</html>