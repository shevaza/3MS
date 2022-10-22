<?php
// if (empty($_SESSION['user_id'])) {
//     header('location:login.php');
// }
include '../../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3MPlast</title>
    <?php
    include '../../css.php';
    ?>
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i class="fas fa-arrow-left    "></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Corrective Maintenance
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link diabled me-2 border-end border-dark border-2" aria-current="page" href="#">Welcome <span class="fw-bold text-black"><?php echo ucfirst($_SESSION['username']) ?></span></a>
                        <a class="nav-link active" aria-current="page" href="../dashboard.php">Dashboard</a>
                        <a class="nav-link" aria-current="page" href="../contacts.php">Users</a>
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
                        <div class="row">
                            <div class="col">
                                <h4><i class="fas fa-wrench"></i> Corrective Maintenance</h4>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">User</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo ucfirst($_SESSION['username']) ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="../../php_queries/corrective.php">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Machine #</span>
                                        </div>
                                        <select class="form-control selectpicker" data-style="btn-outline-primary" required data-live-search="true" name="machine" id="">
                                            <option value="0" selected>NA</option>
                                            <?php
                                            $machines = mysqli_query($mysqli, "SELECT * FROM `machines`");
                                            while ($m = mysqli_fetch_array($machines)) {
                                                echo '<option value="' . $m['id'] . '">' . $m['number'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Mould</span>
                                        </div>
                                        <select class="form-control selectpicker" required data-style="btn-outline-primary" data-live-search="true" name="mold" id="">
                                            <option value="0" selected>NA</option>
                                            <?php
                                            $machines = mysqli_query($mysqli, "SELECT * FROM `molds`");
                                            while ($m = mysqli_fetch_array($machines)) {
                                                echo '<option value="' . $m['id'] . '">' . $m['name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Title</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Title" aria-describedby="basic-addon1" name="title" value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Error</span>
                                        </div>
                                        <select class="form-control selectpicker" data-style="btn-outline-danger" data-live-search="true" name="error" id="">
                                            <option value="0" selected>NA</option>
                                            <?php
                                            $errors_q = mysqli_query($mysqli, "SELECT * FROM `errors`");
                                            while ($e = mysqli_fetch_array($errors_q)) {
                                                echo '<option value="' . $e['id'] . '">' . $e['description_en'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Description</label>
                                        <textarea class="form-control" name="description" id="" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Status</span>
                                        </div>
                                        <select class="form-control selectpicker" data-style="btn-outline-primary" name="status" id="">
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
                                            <span class="input-group-text" id="basic-addon1">Start Date</span>
                                        </div>
                                        <input type="datetime-local" name="start_date" class="form-control" placeholder="Date/Time" aria-label="Date/Time" aria-describedby="basic-addon1" value="">
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">End Date</span>
                                        </div>
                                        <input type="datetime-local" name="end_date" id="end_date" class="form-control" placeholder="Date/Time" aria-label="Date/Time" aria-describedby="basic-addon1" value="">
                                    </div>
                                </div>
                                <div class="col-auto mb-3">
                                    <button type="button" id="done" class="btn btn-outline-success" data-bs-toggle="button" aria-pressed="false" autocomplete="off"><i class="fas fa-check"></i> Done</button>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col text-end">
                                    <input name="add" id="" class="btn btn-danger" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
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
                            <?php
                            $logs = mysqli_query($mysqli, "SELECT * 
                            FROM `maintenance_log` JOIN `maintenance_order` ON `maintenance_log`.order_id = `maintenance_order`.id
                            WHERE `maintenance_order`.type LIKE 'corrective' ORDER BY maintenance_log.id DESC LIMIT 6");
                            while ($res = mysqli_fetch_array($logs)) {
                                $mould = mysqli_query($mysqli, "SELECT `name` FROM `molds` WHERE `id` = '$res[mold_id]' LIMIT 1");
                                $m = 'NA';
                                while ($mold = mysqli_fetch_array($mould)) {
                                    $m = $mold['name'];
                                }
                                echo '
                                   <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Machine: ' . $res['machine_id'] . ' | Mould: ' . $m . '</h5>
                                    <small>' . $res['end_time'] . '</small>
                                </div>
                                <p class="mb-1">' . $res['description'] . '</p>          
                                <div class="row">
                                <div class="col">
                                ';
                                $user = mysqli_query($mysqli, "SELECT `username` FROM `users` Where `id` = '$res[user_id]'");
                                while ($u = mysqli_fetch_array($user)) {
                                    $us = $u['username'];
                                }
                                echo'
                                <small>' . $us . '</small>
                                </div>
                                <div class="col text-end">
                                <small>Status: ' . $res['status'] . '</small>
                                </div>
                                </div>
                            </a>
                                ';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>




























        </div>
    </div>
    <!-- CLOSE MAIN CONTAINER -->

</body>
<?php
include '../../js.php';
?>

</html>