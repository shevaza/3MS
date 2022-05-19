<?php
include '../config.php';
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../custom/custom.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-select/dist/css/bootstrap-select.css">
    <link rel="stylesheet" href="../datatables/datatables.min.css">
    <link rel="icon" href="../res/img/logo.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container-fluid">
                    <img class="me-2" src="../res/img/logo.png" alt="" width="60">
                    <a class="navbar-brand" href="#">
                        3MPlast ERP
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarID">
                        <ul class="navbar-nav ms-auto">
                            <a class="nav-link diabled me-2 border-end border-dark border-2" aria-current="page" href="#">Welcome <span class="fw-bold text-black"><?php echo ucfirst($_SESSION['username']) ?></span></a>
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                            <a class="nav-link" aria-current="page" href="contacts.php">Users</a>
                            <a class="nav-link" aria-current="page" href="#">Settings</a>
                            <a class="nav-link" aria-current="page" href="../php_queries/logout.php">Logout</a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <marquee class="bg-light p-1 fw-bold border-2 border-top" behavior="scroll" direction="left">
                Welcome to 3MPlast - Daily Message Here
            </marquee>
        </div>
    </div>

    <!-- MAIN CONTAINER -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- SIDE NAV -->
            <div class="col-2 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-0 w-100 pt-2 text-white">
                    <!-- <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline ">Menu</span>
                    </a> -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 mt-3 w-100 align-items-center align-items-sm-start" id="menu">
                        <li class="w-100 text-end" onclick="switchNav()">
                            <a href="#" class="nav-link link-secondary px-0 align-middle pb-1">
                                <h3 class="d-sm-inline fw-bold"><i class="fa-solid fa-xmark"></i></h3>
                            </a>
                        </li>

                        <li class="side-item" onclick="switchTab('dashboard')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        </li>
                        <li class="side-item" onclick="switchTab('production')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-industry"></i> <span class="ms-1 d-none d-sm-inline">Production</span></a>
                        </li>
                        <li class="side-item" onclick="switchTab('maintenance')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-tools"></i> <span class="ms-1 d-none d-sm-inline">Maintenance</span> </a>
                        </li>
                        <li class="side-item" onclick="switchTab('setup')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-gear"></i> <span class="ms-1 d-none d-sm-inline">Setup</span> </a>
                        </li>
                        <li class="side-item" onclick="switchTab('users')">
                            <a href="#" class="nav-link px-0 align-middle py-4">
                                <i class="fs-4 fas fa-user"></i> <span class="ms-1 d-none d-sm-inline">User Settings</span> </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>







            <!-- DASHBOARD -->
            <div id="dashboard" class="col py-3 model">
                <div class="row mb-4">
                    <div class="col col-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="card text-white bg-success card-hover">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-auto">
                                        <i class="fa-solid fa-play" style="font-size: 5rem; transform:rotate(-3deg)"></i>
                                    </div>
                                    <div class="col">
                                        <h4 class="card-title"><?php
                                                                echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM `machines` WHERE `status` = '1'")); ?></h4>
                                        <p class="card-text">Active Machines</p>
                                    </div>
                                </div>
                            </div>
                            <a href="setup/machines.php" class="link-light card-footer text-end">
                                <span>
                                    Details <i class="fa-solid fa-circle-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="card text-white bg-warning card-hover">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-auto">
                                        <i class="fa-solid fa-hourglass" style="font-size: 5rem; transform:rotate(-3deg)"></i>
                                    </div>
                                    <div class="col">
                                        <h4 class="card-title">
                                            <?php
                                            $datetime = new DateTime();
                                            $now = $datetime->format('Y-m-d H:i:s');
                                            $upcoming = mysqli_query($mysqli, "SELECT * FROM `maintenance_order` WHERE `end_time` > '$now' ");
                                            echo mysqli_num_rows($upcoming);
                                            ?>
                                        </h4>
                                        <p class="card-text">Upcoming Maintenance Tasks</p>
                                    </div>
                                </div>
                            </div>
                            <a href="Maintenance/maintenance_preventative.php" class="link-light card-footer text-end">
                                <span>
                                    Details <i class="fa-solid fa-circle-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="card text-white bg-primary card-hover">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-auto">
                                        <i class="fa-solid fa-tools" style="font-size: 5rem; transform:rotate(-3deg)"></i>
                                    </div>
                                    <div class="col">
                                        <h4 class="card-title">
                                            <?php
                                            echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM `maintenance_log` WHERE `end` = NULL"));
                                            ?>
                                        </h4>
                                        <p class="card-text">Ongoing Maintenance Tasks</p>
                                    </div>
                                </div>
                            </div>
                            <a href="Maintenance/maintenance_log.php" class="link-light card-footer text-end">
                                <span>
                                    Details <i class="fa-solid fa-circle-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="card text-white bg-secondary card-hover">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-auto">
                                        <i class="fa-solid fa-user" style="font-size: 5rem; transform:rotate(-3deg)"></i>
                                    </div>
                                    <div class="col">
                                        <h4 class="card-title">
                                            <?php echo mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM `users` WHERE `online` = '1'"));
                                            ?>
                                        </h4>
                                        <p class="card-text">Logged in Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <span>
                                    Details <i class="fa-solid fa-circle-chevron-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Industry Production</h4>
                                <canvas id="Chart" width="100" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <!-- PRODUCTION -->
            <div id="production" class="col py-3 model">
                <div class="row mb-2">
                    <div class="col col-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                        <a class="text-dark" href="production/production_scheduler.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <h4 class="card-title">Scheduler</h4>
                                    <p class="card-text">Machine and Production Scheduling</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                        <a class="text-dark" href="production/production_scheduler.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <h4 class="card-title">Scheduler</h4>
                                    <p class="card-text">Machine and Production Scheduling</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                        <a class="text-dark" href="production/production_scheduler.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <h4 class="card-title">Scheduler</h4>
                                    <p class="card-text">Machine and Production Scheduling</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-3 col-xl-3 mb-3">
                        <a class="text-dark" href="production/production_scheduler.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <h4 class="card-title">Scheduler</h4>
                                    <p class="card-text">Machine and Production Scheduling</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col col-3">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Year Production</h4>
                                <canvas id="PieChart" width="100" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col col-9">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Month Production</h4>
                                <canvas id="LineChart" width="100" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <!-- MAINTENANCE -->
            <div id="maintenance" class="col py-3 model">
                <div class="row">
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <a class="text-dark" href="maintenance/maintenance_preventative.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fa-regular fa-calendar-check" style="font-size: 5rem;"></i>
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
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <a class="text-dark" href="maintenance/maintenance_corrective.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fa-solid fa-triangle-exclamation" style="font-size: 5rem;"></i>
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
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <a class="text-dark" href="maintenance/maintenance_log.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto text-end">
                                            <i class="fa-solid fa-file-waveform" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="card-title">Maintenance Logs</h4>
                                            <p class="card-text">All maintenance logs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <!-- SETUP -->
            <div id="setup" class="col py-3 model">
                <div class="row">
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <a class="text-dark" href="setup/machines.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-robot" style="font-size: 5rem;"></i>
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
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <a class="text-dark" href="setup/molds.php">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-toolbox" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="card-title">Moulds</h4>
                                            <p class="card-text">Setup Machine Moulds</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col col-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                        <a class="text-dark" href="#">
                            <div class="card db-item">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-auto text-end">
                                            <i class="fas fa-cart-shopping" style="font-size: 5rem;"></i>
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



            <!-- USER SETTINGS -->
            <div id="users" class="col py-3 model">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h5>
                                            <i class="fas fa-user"></i> Users
                                        </h5>
                                    </div>
                                    <div class="col text-end">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off"><i class="fas fa-plus"></i> Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped table-responsive w-100">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Department</th>
                                            <th>Position</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $select_users = mysqli_query($mysqli, "SELECT * FROM `users`");
                                        while ($u = mysqli_fetch_array($select_users)) {
                                            if ($u['type'] == 'admin') {
                                                $admin_btns = '
                                                <button type="button" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal" data-bs-target="#edit_' . $u['id'] . '"><i class="fas fa-pen"></i> Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger px-3" data-bs-toggle="modal" data-bs-target="#delete_' . $u['id'] . '"><i class="fas fa-trash"></i> Delete</button>
                                                ';
                                            } else {
                                                $admin_btns = '';
                                            }
                                            echo '
                                             <tr>
                                            <td class="w-auto">' . $u['id'] . '</td>
                                            <td class="w-auto">' . $u['username'] . '</td>
                                            <td class="w-auto">' . $u['email'] . '</td>
                                            <td class="w-auto">' . $u['department'] . '</td>
                                            <td class="w-auto">' . $u['position'] . '</td>
                                            <td class="w-auto">' . $u['type'] . '</td>
                                            <td class="w-25">
                                            <div class="btn-group" role="group" aria-label="">
                                                <button type="button" class="btn btn-sm btn-info px-3" data-bs-toggle="modal" data-bs-target="#info_' . $u['id'] . '"><i class="fas fa-info"></i> Info</button>
                                                ' . $admin_btns . '
                                    </div>
                                            </td>
                                        </tr>
                                            
                                        
                                           
                                <div class="modal fade" id="info_' . $u['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Info about ' . $u['username'] . '</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <div class="form-group">
                                                        <label for="">Username</label>
                                                        <input type="text"
                                                            class="form-control" value="' . $u['username'] . '" disabled name="" id="" aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Email</label>
                                                            <input type="text"
                                                                class="form-control" value="' . $u['email'] . '" disabled name="" id="" aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <div class="form-group">
                                                        <label for="">Extension</label>
                                                        <input type="text"
                                                            class="form-control" value="' . $u['extension'] . '" disabled name="" id="" aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    <div class="form-group">
                                                        <label for="">Mobile</label>
                                                        <input type="text"
                                                            class="form-control" value="' . $u['phone'] . '" disabled name="" id="" aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col">
                                                        <div class="form-group">
                                                        <label for="">Department</label>
                                                        <input type="text"
                                                            class="form-control" value="' . $u['department'] . '" disabled name="" id="" aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    <div class="form-group">
                                                        <label for="">Position</label>
                                                        <input type="text"
                                                            class="form-control" value="' . $u['position'] . '" disabled name="" id="" aria-describedby="helpId" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                        
                                        ';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



















        </div>
    </div>
    <!-- CLOSE MAIN CONTAINER -->

</body>
<script src="../jquery/jquery.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../fontawesome/js/all.js"></script>
<script src="../datatables/datatables.min.js"></script>
<script src="../custom/dashboard.js"></script>
<script src="../custom/custom.js"></script>
<script src="../bootstrap/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="../custom/chart.min.js"></script>
<script src="../custom/chart.js"></script>

</html>