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
        <title>Purchase Order Page</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
     
            <div class="col-md-10 p-5 mt-2" style="border: 1px;">
                <h1><i class="fas fa-file-alt mr-2"></i> Purchase Order</h1>
                <hr>
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
                <a href="http://localhost:8000/po/new" class="btn btn-primary mt-2 mb-3" role="button"><i class="fas fa-plus-square"></i> Add New</a>

                <table style="width:100%" class="table table-striped align-middle table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">PO Date</th>
                            <th scope="col">PO Number</th>
                            <th scope="col">Vendor</th>
                            <th scope="col">Currency</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pos as $key => $po)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $po->po_date }}</td>
                            <td>{{ $po->po_no }}</td>
                            <td>{{ $po->vendor->name }}</td>
                            <td>{{ $po->currency }}</td>
                            <td>{{ $po->total }}</td>
                            <td>{{ ucfirst($po->status) }}</td>
                            <td>
                                @if ($po->status == 'active')
                                    <a href="/po/edit/{{ $po->id }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i> Update
                                    </a>
                                    <a href="/po/show/{{ $po->id }}" class="btn btn-success">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <a href="/po/void/{{ $po->id }}" class="btn btn-danger" onclick ="if (!confirm('Anda Yakin? Aksi ini tidak dapat dikembalikan lagi!')) return false;">
                                        <i class="fas fa-ban"></i> Void
                                    </a>
                                @else
                                    <a href="/po/show/{{ $po->id }}" class="btn btn-success">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                @endif
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
        </div>
    </body>
</html>