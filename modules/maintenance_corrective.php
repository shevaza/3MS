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
                        <a class="nav-link diabled me-2 border-end border-dark border-2" aria-current="page" href="#">Welcome Shafiq</a>
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
        <div class="row my-5">
            <div class="col-sm-12 col-md-9 col-lg-9 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-wrench    "></i> Corrective Maintenance</h4>
                    </div>
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Machine #</span>
                                    </div>
                                    <select class="form-control" name="" id="">
                                        <option disabled selected>Select Machine</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Username</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="Shafiq" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="" id="" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Status</span>
                                    </div>
                                    <select class="form-control" name="" id="">
                                        <option disabled selected>Maintenance Status</option>
                                        <option>Fixed</option>
                                        <option>Requires Spare Parts</option>
                                        <option>Pending</option>
                                        <option>Not Fixed</option>
                                        <option>Wasted</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Date</span>
                                    </div>
                                    <input type="datetime-local" class="form-control" placeholder="Date/Time" aria-label="Date/Time" aria-describedby="basic-addon1" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col text-end">
                                <input name="" id="" class="btn btn-danger" type="button" value="Submit">
                            </div>
                        </div>

                    </div>
                </div>
            </div>






            <div class="col col-sm-12 col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-clock"></i> Recent Logs</h4>
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