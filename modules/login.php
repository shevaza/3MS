<?php
require('../config.php');
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    header('location:dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3MPlast</title>
    <?php
    include '../css.php';
    ?>
</head>

<body>
    <div class="leftbg"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span class="text-danger">OnPoint</span> - Industry Management</a>
    </nav>

    <div class="container" style="margin-top:5%;">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-dark text-xl-start text-md-start text-sm-center text-center">
                <img src="../res/img/logo.png" class="img-fluid" alt="" width="200">
                <h3 class="my-0">Welcome to</h3>
                <h1 class="my-0" style="font-size:5rem">3MPlast</h1>
                <h4 class="my-0">"Quality Reimagined"</h4>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-2">
                <div class="row">
                    <div class="col">
                        <div class="card card-hover box mb-4">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <a class="text-light" href="">
                                    <h4 class="card-title">Emails & Extentions</h4>
                                    <p class="card-text">A list of all emails and phone extentions</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box card p-2 text-light">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row justify-content-center mb-3">
                                        <div class="col">
                                            <h2 class="text-center border-bottom pb-3">Login</h2>
                                            <div class="mb-1 text-start">
                                                <label for="" class="form-label"></label>
                                                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                <small id="helpId">Username</small>
                                            </div>
                                            <div class="mb-1 text-start">
                                                <label for="" class="form-label"></label>
                                                <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                <small id="helpId">Password</small>
                                            </div>
                                            <a class="d-grid" href="dashboard.php">
                                                <button type="button" class="btn btn-danger btn-block mt-2">Login</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-dark text-light bg-dark fixed-bottom justify-content-center">
        <small>
            &copy; 2022 Copyright <a class="text-danger" target="_blank" href="https://onpointleb.000webhostapp.com/">OnPoint</a> - Shafiq Zabet
        </small>
    </nav>

</body>
<?php
include '../js.php';
?>

</html>