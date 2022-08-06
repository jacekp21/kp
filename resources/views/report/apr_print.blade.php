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
        <title>AP Report Page</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
     
            <div class="col-md-10 p-5 mt-2" style="border: 1px;">
            <center>
                <h1>PT BANGUN PRIMA ABADI</h1>
                <h2>Account Payable Report</h2>
            </center>
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

                <br/>
		<table class='table table-light'>
			<thead>
				<tr>
					<th>Vendor</th>
					<th>Currency</th>
					<th>Saldo Awal</th>
					<th>Debit</th>
					<th>Credit</th>
					<th>Saldo Akhir</th>
				</tr>
			</thead>
			<tbody>
				@foreach($aprs as $apr)
				<tr>
                    <td>{{$apr->vendor_id}}</td>
					<td>{{$apr->currency}}</td>
					<td>{{$apr->saldo_awal}}</td>
					<td>{{$apr->debit}}</td>
					<td>{{$apr->kredit}}</td>
                    <td>{{$apr->saldo_akhir}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
            </div>
        </div>
    </body>
</html>