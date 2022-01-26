<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Page</title>

    <style>
        *{
            margin: 0;
            padding: 7px;
            outline: 0;
            font-family: helvetica;
        }
        body {
            height: 100vh;
            background: #66696B;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 450px;
            height: 450px;
            background-color: rgba(0,0,0,.5);
            box-shadow: 0 0 10px rgba(255,255,255,.3);
        }

        .container h1{
            text-align: center;
            color: #fafafa;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        .container label{
            text-align: left;
            color: #fff;
        }

        .container form input{
            width: calc(100% - 10px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #fff;
            color: #fff;
            font-size: 20px;
        }

        .container form button{
            width: 100%;
            padding: 5px 0;
            border: none;
            background-color:#2979ff;
            font-size: 18px;
            color: #fafafa;
        }

    </style>
</head>
<body>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Login Here</h1>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <a href="http://localhost:8000/dashboard" class="btn btn-primary mt-3" role="button">Login</a>
            </form>
        </div>     
    </body>
</html>
