<?php
session_start();
// if (empty($_SESSION['user_id'])) {
//     header('location:login.php');
// }
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
    <script>
        function switchTab(i) {
            $('.model').hide();
            $('#' + i).fadeIn();
        }
    </script>
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <img class="me-2" src="../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Corrective Maintenance
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                        <a class="nav-link" aria-current="page" href="#">Users</a>
                        <a class="nav-link" aria-current="page" href="#">Settings</a>
                        <a class="nav-link" aria-current="page" href="login.php">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- MAIN CONTAINER -->
    <div class="container-fluid">
        <div class="row flex-nowrap mt-5">
            <div class="col col-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Corrective Maintenance</h4>
                    </div>
                    <div class="card-body p-5">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">A</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>






            <div class="col col-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Logs</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Machine 2</h5>
                                    <small>Today 9:20 AM</small>
                                </div>
                                <p class="mb-1">Fixed Heater</p>
                                <small>Mhmd Chbib</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Machine 9</h5>
                                    <small>Yesterday 6:00 PM</small>
                                </div>
                                <p class="mb-1">Fixed Mold</p>
                                <small>Mhmd Chbib</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Machine #</h5>
                                    <small>DateTime</small>
                                </div>
                                <p class="mb-1">Description</p>
                                <small>Username</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>




























        </div>
    </div>
    <!-- CLOSE MAIN CONTAINER -->

</body>
<?php
include '../js.php';
?>

</html>