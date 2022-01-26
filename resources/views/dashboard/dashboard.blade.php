<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="style.css">

            <style>
                body {
                    margin: 0;
                    font-family: sans-serif;
                    font-size: 1rem;
                    color: #212529;
                    -webkit-text-size-adjust: 100%;
                    -webkit-tap-highlight-color: transparent;
                }

                main {
                    display: flex;
                    flex-wrap: nowrap;
                    height: -webkit-fill-availeble;
                    max-height: 100vh;
                    overflow-x: auto;
                    overflow-y: hidden;
                }

                * {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    text-decoration: none;
                }

                .sidebar {
                    position: fixed;
                    left: 0px;
                    width: 250px;
                    height: 100%;
                    background: #66696B;
                    transition: all 0.5s ease;
                }

                .sidebar .top {
                    font-size: 18px;
                    color: #fff;
                    text-align: center;
                    line-height: 70px;
                    background: #43a8da;
                }

                .sidebar ul a {
                    display: block;
                    height: 100%;
                    width: 100%;
                    line-height: 65px;
                    font-size: 14px;
                    color: #fff;
                    padding-left: 40px;
                    box-sizing: border-box;
                    border-top: 1px solid rgba(6, 255, 251, 0.1);
                    border-bottom: 1px solid rgba(125, 134, 146, 0.302);
                    transition: all 0.5s ease;
                }

                ul li:hover a {
                    padding-left: 100px;
                    background: #efe7bc;
                    color: rgb(0, 0, 0);
                }

                .sidebar ul a i {
                    margin-right: 16px;
                }

                section {
                    background: #ffffff;
                    background-position: center;
                    background-size: cover;
                    height: 100vh;
                    width: 100%;
                }

                section h1 {
                    text-align: center;
                    padding-top: 200px;
                    font-size: 60px;
                    color: #004369;
                }

            </style>
    </head>
    <body>
        <main>
            </label>
            <div class="sidebar">
                <div class="top">
                    PT Bangun Prima Abadi
                </div>
                <ul>
                    <li><a href="http://localhost:8000/dashboard"class="#"><i class=""></i>Dashboard</a></li>
                    <li><a href="http://localhost:8000/admin/admin" class="#"><i class=""></i>Admin</a></li>
                    <li><a href="http://localhost:8000/po" class="#"><i class=""></i>Purchase Order</a></li>
                    <li><a href="http://localhost:8000/ap/ap" class="#"><i class=""></i>Account Payable</a></li>
                    <li><a href="http://localhost:8000/payment" class="#"><i class=""></i>Payment</a></li>
                    <li><a href="http://localhost:8000/report/report" class="#"><i class=""></i>Report</a></li>
                    <li><a href="http://localhost:8000/setting/setting" class="#"><i class=""></i>Setting</a></li>
                    <li><a href="http://localhost:8000/login"class="#"><i class=""></i>Logout</a></li>
                </ul>
            </div>
            <section>
                <h1>Grapik</h1>
            </section>
        </main>
    </body>
</html>