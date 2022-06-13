<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Data Warehouse</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="row no-gutters mt-5">
            @include('layouts.sidebar')
            <div class="col-md-10 p-5 mt-2">
                <h1><i class="fas fa-file-invoice-dollar m-2"></i>New Warehouse</h1><hr>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-5">
                            <form action="/setting/wh/store" method="POST" >
                                @csrf
                                <div class="mb-3">
                                    <label for="wh" class="form-label">Warehouse</label>
                                    <input type="hidden" name="id" value="{{ $wh->id ?? '' }}">
                                    <input type="text" name="name" id="name" value="{{ old('name', $wh->name ?? '') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Gudang">
                                    @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" id="address" value="{{ old('address', $wh->address ?? '') }}" class="form-control @error('address') is-invalid @enderror" placeholder="Alamat Gudang">
                                    @error('address')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="head_of_warehouse" class="form-label">Head Of Warehouse</label>
                                    <input type="text" id="head_of_warehouse" name="head_of_warehouse" value="{{ old('head_of_warehouse', $wh->head_of_warehouse ?? '') }}" class="form-control @error('head_of_warehouse') is-invalid @enderror" placeholder="Kepala Gudang">
                                    @error('head_of_warehouse')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="telpon" class="form-label">No. Telp</label>
                                    <input type="text" id="telpon" name="telpon" value="{{ old('telpon', $wh->telpon ?? '') }}" class="form-control @error('telpon') is-invalid @enderror" placeholder="Telpon Gudang">
                                    @error('telpon')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{url()->previous()}}" class="btn btn-primary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
