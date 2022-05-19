<?php
require('../config.php');
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    header('location:dashboard.php');
}
if (isset($_GET['err']) && $_GET['err'] == 1) {
    $error = ' <div class="alert alert-light text-danger d-flex align-items-center mb-0" role="alert">
                                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                                    <div class="ms-2">
                                                        Username or password incorrect. 
                                                    </div>
                                                </div>';
} else {
    $error = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3MPlast</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../custom/custom.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-select/dist/css/bootstrap-select.css">
    <link rel="stylesheet" href="../Animate/animate.min.css">
    <link rel="icon" href="../res/img/logo.png">
</head>

<body>
    <div id="splash" class="bg-light" style="position:absolute; width:100%; height:100%;">

        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center animate__animated animate__pulse animate__delay-2s">
            <img src="../res/img/logo.png" class="img-fluid animate__animated animate__fadeInDown" alt="" width="150px">
            <h3 class="animate__animated animate__fadeIn animate__delay-1s">Welcome to 3MPlast</h3>
        </div>

    </div>
    <div id="main" style="display:none">
        <div class="leftbg"></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><span class="text-danger">OnPoint</span> - Enterprise Resource Planning</a>
        </nav>

        <div class="container" style="margin-top:5%;">

            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 text-dark text-xl-start text-md-start text-sm-center text-center pb-3">
                    <img src="../res/img/logo.png" class="img-fluid" alt="" width="200">
                    <h3 class="my-0">Welcome to</h3>
                    <h1 class="my-0" style="font-size:5rem">3MPlast</h1>
                    <h4 class="my-0">"Quality Reimagined"</h4>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-1">
                    <div class="row">
                        <div class="col">
                            <a href="contacts.php">
                                <div class="card card-hover box mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col col-auto">
                                                <i class="fas fa-envelope text-danger" style="font-size:4rem; transform:rotate(-5deg)"></i>
                                            </div>
                                            <div class="col text-danger text-start">
                                                <h4 class="card-title">Emails & Extentions</h4>
                                                <p class="card-text">A list of all emails and phone extentions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a href="">
                                <div class="card card-hover box mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col col-auto">
                                                <i class="fas fa-message text-danger" style="font-size:4rem; transform:rotate(-5deg)"></i>
                                            </div>
                                            <div class="col text-danger text-start">
                                                <h4 class="card-title">Support Ticketing System</h4>
                                                <p class="card-text">Support for internal and external issues.</p>
                                            </div>
                                        </div>
                                    </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col mb-3">
                        <div class="box card p-2 text-danger">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row justify-content-center mb-3">
                                        <div class="col">
                                            <form action="../config.php" method="post">
                                                <h2 class="text-center border-bottom border-danger pb-3"><i class="fas fa-user"></i> Login</h2>
                                                <?php echo $error; ?>
                                                <div class="mb-1 text-start">
                                                    <label for="" class="form-label"></label>
                                                    <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                    <small id="helpId">Username</small>
                                                </div>
                                                <div class="mb-1 text-start">
                                                    <label for="" class="form-label"></label>
                                                    <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                    <small id="helpId">Password</small>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-danger btn-block mt-2 d-grid w-100">Login</button>
                                            </form>
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



    <!-- MAIN -->
    </div>



    <nav class="navbar navbar-dark text-light bg-dark fixed-bottom justify-content-center">
        <small>
            &copy; 2022 Copyright <a class="text-danger" target="_blank" href="https://onpointleb.000webhostapp.com/">OnPoint</a> - Shafiq Zabet
        </small>
    </nav>

</body>
<script src="../jquery/jquery.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../fontawesome/js/all.js"></script>
<script src="../custom/dashboard.js"></script>
<script src="../custom/chart.min.js"></script>
<script src="../bootstrap/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="../custom/chart.js"></script>
<script>
    $(document).ready(function() {
        $('#splash').fadeIn();
        setTimeout(() => {
            $('#splash').fadeOut();
            $('#main').fadeIn();
        }, 5000);
    });
</script>


</html>