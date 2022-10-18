<?php
include '../../config.php';
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
    include '../../css.php';
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
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i class="fas fa-arrow-left"></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Preventative Maintenance
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
                                <h4><i class="fas fa-wrench"></i> Preventative Maintenance</h4>
                            </div>
                            <div class="col text-end">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-plus"></i> Add Task</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover w-100">
                            <thead>
                                <tr>
                                    <th>Task ID</th>
                                    <th>Machine</th>
                                    <th>Mould</th>
                                    <th>Desc</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Repeat Hrs</th>
                                    <th>Repeat Oil</th>
                                    <th>Assigned To</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = mysqli_query($mysqli, "SELECT * FROM `maintenance_order` WHERE `type` LIKE 'preventative'");
                                while ($res = mysqli_fetch_array($select)) {
                                    $ass_user = 'NA';
                                    if (isset($res['ass_user_id'])) {
                                        $select_user = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `id` = '$res[ass_user_id]'");
                                        $ass_user = mysqli_fetch_array($select_user);
                                        $ass_user = $ass_user['username'];
                                    }
                                    echo '
                                    <tr>
                                    <td>' . $res['id'] . '</td>
                                    <td>' . $res['machine_id'] . '</td>
                                    <td>' . $res['mold_id'] . '</td>
                                    <td>' . $res['description'] . '</td>
                                    <td>' . $res['start_time'] . '</td>
                                    <td>' . $res['end_time'] . '</td>
                                    <td>' . $res['repeat_hrs'] . '</td>
                                    <td>' . $res['repeat_oil'] . ' cm</td>
                                    <td>' . $ass_user . '</td>
                                    <td>
                                    <div class="btn-group">
                                    <a class="btn btn-success btn-sm text-light" data-bs-toggle="modal" data-bs-target="#fill_' . $res['id'] . '"><i class="fas fa-plus"></i> </a>
                                    <a class="btn btn-primary btn-sm " href="#" role="button"><i class="fas fa-pen"></i> </a>
                                    <a class="btn btn-danger btn-sm " href="#" role="button"><i class="fas fa-trash-alt"></i> </a>
                                    </div>
                                    </td>
                                    </tr>
                                    ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form action="../../php_queries/preventative.php" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">New Maintenance Schedule</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Machine</label>
                                            <select class="form-control selectpicker" required name="machine" id="" data-style="btn-outline-danger" data-live-search="true">
                                                <option selected value="NULL">NA</option>
                                                <option value="all">All</option>
                                                <?php
                                                $machines = mysqli_query($mysqli, "SELECT * FROM `machines`");
                                                while ($a = mysqli_fetch_array($machines)) {
                                                    echo '<option value="' . $a['id'] . '">' . $a['number'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Mould</label>
                                            <select class="form-control selectpicker" required name="mold" id="" data-style="btn-outline-danger" data-live-search="true">
                                                <option selected value="NULL">NA</option>
                                                <option value="all">All</option>
                                                <?php
                                                $machines = mysqli_query($mysqli, "SELECT * FROM `molds`");
                                                while ($a = mysqli_fetch_array($machines)) {
                                                    echo '<option value="' . $a['id'] . '">' . $a['name'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="" class="form-label">Start Time</label>
                                        <input type="datetime-local" name="start" id="" required class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">End Time</label>
                                        <input type="datetime-local" name="end" id="" required class="form-control" placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="col-auto">
                                        <label for="" class="form-label">Repeat on Time</label>
                                        <div class="input-group">
                                            <input type="number" name="repeat_hrs" required class="form-control" value="0" step=".05" min="0">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">Hrs</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <label for="" class="form-label">Repeat on Oil</label>
                                        <div class="input-group">
                                            <input type="number" name="repeat_oil" required class="form-control" value="0" step=".05" min="0">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">cm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Description</label>
                                            <textarea name="description" id="" required class="form-control" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Assigned to</label>
                                            <select class="form-control selectpicker" required name="ass_user" id="" data-style="btn-outline-warning" data-live-search="true">
                                                <option value="NULL" selected>NA</option>
                                                <?php
                                                $select = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'maintenance'");
                                                while ($a = mysqli_fetch_array($select)) {
                                                    echo '<option value="' . $a['id'] . '">' . $a['username'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="add" value="" class="btn btn-danger">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <div class="col col-sm-12 col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-clock"></i> Upcoming Tasks</h4>
                        <div class="input-group">
                            <input type="number" class="form-control" value="72" min="0" name="get_hrs" id="get_hrs">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="list-group" id="prev_list">

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
<script>
    function getList() {
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/get_prev_list.php",
            data: {
                hrs: $('#get_hrs').val()
            },
            dataType: "HTML",
            success: function(r) {
                $('#prev_list').html(r);
            }
        });
    }
    $(document).ready(function() {
        getList();
    });

    $('#get_hrs').keyup(function(e) {
        if ($('#get_hrs').val() > 0) {
            getList();
        }
    });
</script>

</html>


<?php
if (isset($_POST['done'])) {
    $order_id = $_POST['order_id'];
    $diagnosis = $_POST['diagnosis'];
    $start = $_POST['start'];
    $start = date("Y-m-d H:i:s", strtotime($start));
    $end = $_POST['end'];
    $end = date("Y-m-d H:i:s", strtotime($end));
    $user_id = $_POST['user_id'];
    $status = $_POST['status'];

    $insert = mysqli_query($mysqli, "INSERT INTO `maintenance_log` (`order_id`, `diagnosis`, `start`, `end`, `user_id`, `status`) VALUES ('$order_id','$diagnosis','$start','$end','$user_id','$status')");
}
?>