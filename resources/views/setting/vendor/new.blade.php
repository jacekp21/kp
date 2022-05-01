<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>VENDOR</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="/setting/setting">Setting</a></li>
                  <li class="breadcrumb-item"><a href="/setting/vendor">Vendor</a></li>
                  <li class="breadcrumb-item active" aria-current="page">New</a></li>
              </ol>
          </nav>
          
          <div class="container mt-5">
            <form action="/setting/vendor/store" method="POST" >
                @csrf
                <div class="row">
                    <h1>Data Vendor</h1>
                    <hr>
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="vendor" class="form-label">Vendor Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="telpon" class="form-label">No. Telp</label>
                            <input type="text" name="telpon" class="form-control" id="telpon" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="">
                        </div>
                        <h2>Data Bank</h2>
                        <hr>
                        <div class="mb-3">
                            <label for="bank" class="form-label">Bank</label>
                            <input type="text" class="form-control" id="bank" name="bank" placeholder="">
                        <div class="mb-3">
                            <label for="cabang" class="form-label">Cabang</label>
                            <input type="text" class="form-control" id="cabang" name="cabang" placeholder="">
                        <div class="mb-3">
                            <label for="nama_rekening" class="form-label">Nama Rekening</label>
                            <input type="text" class="form-control" id="nama_rekening" name="nama_rekening" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="no_rek" class="form-label">No. Rekening</label>
                            <input type="text" class="form-control" id="no_rek" name="no_rek" placeholder="">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
          </div>
      </div>
    </div>
</body>
</html>
