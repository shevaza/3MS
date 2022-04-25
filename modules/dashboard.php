<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header('location:login.php');
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
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <img class="me-2" src="../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link diabled me-2 border-end border-dark border-2" aria-current="page" href="#">Welcome <?php echo ucfirst($_SESSION['username']) ?></a>
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        <a class="nav-link" aria-current="page" href="#">Users</a>
                        <a class="nav-link" aria-current="page" href="#">Settings</a>
                        <a class="nav-link" aria-current="page" href="../php_queries/logout.php">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- MAIN CONTAINER -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- SIDE NAV -->
            <div class="col-auto col-md-3 col-xl-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-0 w-100 pt-2 text-white min-vh-100">
                    <!-- <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline ">Menu</span>
                    </a> -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 mt-3 w-100 align-items-center align-items-sm-start" id="menu">
                        <li class="side-item" onclick="switchTab('dashboard')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        </li>
                        <!-- <li class="side-item" onclick="switchTab('production')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-industry"></i> <span class="ms-1 d-none d-sm-inline">Production</span></a>
                        </li> -->
                        <li class="side-item" onclick="switchTab('maintenance')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-tools"></i> <span class="ms-1 d-none d-sm-inline">Maintenance</span> </a>
                        </li>
                        <li class="side-item" onclick="switchTab('setup')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-gear"></i> <span class="ms-1 d-none d-sm-inline">Setup</span> </a>
                        </li>
                        <li class="side-item" onclick="switchTab()">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-user"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>







            <!-- DASHBOARD -->
            <div id="dashboard" class="col py-3 model">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Industry Production</h4>
                                <canvas id="Chart" width="100" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <!-- PRODUCTION -->
            <div id="production" class="col py-3 model">
                <div class="row mb-2">
                    <div class="col col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Year Production</h4>
                                <canvas id="PieChart" width="100" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col col-8">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Month Production</h4>
                                <canvas id="LineChart" width="100" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="text-dark" href="production_scheduler.php">
                            <div class="card db-item">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Scheduler</h4>
                                    <p class="card-text">Machine and Production Scheduling</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>





            <!-- MAINTENANCE -->
            <div id="maintenance" class="col py-3 model">
                <div class="row">
                    <div class="col">
                        <a class="text-dark" href="maintenance_preventative.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-wrench" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="card-title">Preventative Maintenance</h4>
                                            <p class="card-text">Maintenance planning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="text-dark" href="maintenance_corrective.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-toolbox" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="card-title">Corrective Maintenance</h4>
                                            <p class="card-text">Maintenance on spot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="text-dark" href="maintenance_log.php">
                            <div class="card db-item">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Maintenance Logs</h4>
                                    <p class="card-text">All maintenance logs</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <!-- SETUP -->
            <div id="setup" class="col py-3 model">
                <div class="row">
                    <div class="col">
                        <a class="text-dark" href="#">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-wrench" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="card-title">Machines</h4>
                                            <p class="card-text">Setup factory machines</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="text-dark" href="#">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-toolbox" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="card-title">Molds</h4>
                                            <p class="card-text">Setup Machine Molds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="text-dark" href="#">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-toolbox" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="card-title">Items</h4>
                                            <p class="card-text">Setup Production Items</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
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
<script src="../custom/chart.js"></script>

</html>