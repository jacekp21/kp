<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>New Account</title>
</head>
<body>
    <a href="http://localhost:8000/">Home</a>
    <h1>This is Purchase Order Page!!</h1>

    <form action="http://localhost:8000/po/data" method="post">
        <label for="vendor">Vendor</label>
        <input type="text" name="vendor" id=""><br>
        <label for="vendor">Alamat</label>
        <input type="text" name="alamat" id=""><br>
        
        <input type="submit" value="Save">
    </form>
</body>
</html>