<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" /> --}}
    <title>Login Page</title>
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5">

                    <h3 class="mb-5">Log in</h3>

                    <form action="/login" method="POST">
                        @csrf
                        <!-- Username Input -->
                        <div class="form-outline @if($errors->has('username') || $errors->has('message')) mb-1 @else mb-4 @endif">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-lg @error('username') is_invalid @enderror"
                            id="username" autofocus required value="{{ old('username') }}"/>
                        </div>

                        @error('username')
                            <div class="text-danger mb-3">
                                {{ $message }}
                            </div>
                        @enderror

                        @if ($errors->has('message'))
                            <div class="text-danger mb-3">
                                {{ $errors->first('message') }}
                            </div>
                        @enderror

                        <!-- Password Input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                            id="password" autofocus required/>
                        </div>

                        <div class="row justify-content-end pe-2">
                            <button class="btn btn-primary btn-lg btn-block col-md-4" type="submit">Login</button>
                        </div>
                    </form>
                    <hr class="my-4">
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>

{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script> --}}
</html>
