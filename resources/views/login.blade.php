<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Page</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:sans-serif;
            background: linear-gradient(to right, #D500F9, #FFD54F);
            max-width: 500px;
            min-height: 500px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
            background-image : url ('bg.jpg');
        }
    </style>
</head>
<body>
    <div class="container mt-5>
        <div class="row">
            <div class="col-md-6">
            <h1>Login Here</h1>
            <form>
            <div class="mb-3">
                <br><label for="username" class="form-label">Username</label></br>
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <br><label for="password" class="form-label">Password</label></br>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <a href="http://localhost:8000/" class="btn btn-primary mt-3" role="button">Login</a>
            </form>
                
        </div>
    </div>
</body>
</html>