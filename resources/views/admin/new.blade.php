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
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta3-web/css/all.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>New Account</title>

    <style>
            body
                {
                background-color:#f5f5f5;
                }
            .imagePreview {
                    width: 235px;
                    height: 200px;
                    background-position: center center;
                    background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
                    background-color:#fff;
                    background-size: cover;
                    background-repeat:no-repeat;
                    background-size: 250px 200px;
                    display: inline-block;
                    box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
                    margin-bottom: 5px;
                }
            .btn-primary
                {
                display:block;
                border-radius:0px;
                box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
                margin-top:-5px;
                }
            .imgUp
                {
                    margin-bottom:15px;
                }
            .del
                {
                position:absolute;
                top:0px;
                right:15px;
                width:30px;
                height:30px;
                text-align:center;
                line-height:30px;
                background-color:rgba(255,255,255,0.6);
                cursor:pointer;
                }
            .imgAdd
                {
                width:30px;
                height:30px;
                border-radius:50%;
                background-color:#4b8def;
                color:#fff;
                box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
                text-align:center;
                line-height:30px;
                margin-top:0px;
                cursor:pointer;
                font-size:15px;
                }
        </style>
</head>
<body>
    <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="http://localhost:8000/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="http://localhost:8000/admin/admin">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">New</a></li>
    </ol>
    </nav>
            <form>
                <h1>New Account</h1>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password"> <!-- Belum membuat Icon show and hide di password -->
                </div>
                <div class="mb-1">
                    <label for="exampleDataList" class="form-label">Position</label>
                    <input class="form-control" list="positionOptions" id="position" placeholder="Type to search...">
                    <datalist id="positionOptions">
                        <option value="Admin">
                        <option value="Manager">
                        <option value="Accounting">
                        <option value="Purchasing">
                    </datalist>
                </div>
                <div class="mb-1">
                    <label for="telp" class="form-label">No. Telp</label>
                    <input type="text" class="form-control" id="telp" placeholder="No.Telp">
                </div>
                <div class="mb-1">
                    <label for="exampleDataList" class="form-label">Role</label>
                    <input class="form-control" list="roleOptions" id="Role" placeholder="">
                    <datalist id="roleOptions">
                        <option value="Admin">
                        <option value="Manager">
                        <option value="Staff">
                    </datalist>
                    </div>
                <div class="mb-1">
                    <label for="Image" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile" onchange="preview()">
                    <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button>
                </div>
                <img id="frame" src="" class="img-fluid" />
                 </div>
                <script>
                    function preview() {
                        frame.src = URL.createObjectURL(event.target.files[0]);
                    }
                    function clearImage() {
                        document.getElementById('formFile').value = null;
                        frame.src = "";
                    }
                </script>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 imgUp">
                            <div class="imagePreview"></div>
                            <label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
                        </div><!-- col-2 -->
                        <i class="fa fa-plus imgAdd"></i>
                    </div><!-- row -->
                </div><!-- container -->
            </form>
            <a href="http://localhost:8000/">Home</a>
        </div>
    </div>
</body>

</html>
