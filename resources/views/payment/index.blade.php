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
        <title>Payment Page</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
 
            <div class="col-md-10 p-5 mt-2" style="border: 1px;">
                <h1><i class="fas fa-file-alt mr-2"></i>Payment</h1>
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
                <a href="http://localhost:8000/payment/new" class="btn btn-primary mt-2 mb-3" role="button"><i class="fas fa-plus-square"></i> Add New</a>

                <table style="width:100%" class="table table-striped align-middle table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Payment Date</th>
                            <th scope="col">Ap Number</th>
                            <th scope="col">Vendor</th>
                            <th scope="col">Description</th>
                            <th scope="col">Currency</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($pys as $key => $py)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $py->pay_date}}</td>
                            <td>{{ $py->Ap_No}}</td>
                            <td>{{ $py->vendor->name }}</td>
                            <td>{{ $py->description }}</td>
                            <td>{{ $py->currency}}</td>
                            <td>{{ $py->total}}</td>
                            <td>
                                <a href="/py/edit/{{ $py->id }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i> Update
                                </a>
                                <a href="/py/disable/{{ $py->id }}" class="btn btn-danger">
                                    <i class="fas fa-ban"></i> Void
                                </a>
                            </td> 
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>   
            </div>
        </div>
    </body>            
</html>
