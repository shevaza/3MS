<?php
include '../../config.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
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
                    Machine Logs
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
    <div class="container-fluid mt-3">

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">New Machine Log</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Machine</label>
                                        <select class="selectpicker w-100" data-style="btn-danger" name="machine_id" id="machine_id" required>
                                            <option disabled>Select Number</option>
                                            <?php
                                            $select = mysqli_query($mysqli, "SELECT `id`,`number` FROM `machines`");
                                            while ($m = mysqli_fetch_array($select)) {
                                                echo '<option value="' . $m['id'] . '">' . $m['number'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Shift</label>
                                        <select class="selectpicker w-100" data-style="btn-danger" name="shift" id="shift" required>
                                            <option disabled>Select Shift</option>
                                            <option>Morning</option>
                                            <option>Evening</option>
                                            <option>Night</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Quantity Left</label>
                                        <input type="number" min="0" class="form-control" name="qty_left" id="qty_left" aria-describedby="helpId" placeholder="Quantity Left" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Cycle Time</label>
                                        <input type="number" min="0" class="form-control" name="cycle_time" id="cycle_time" aria-describedby="helpId" placeholder="Cycle Time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Item Weight</label>
                                        <input type="number" min="0" class="form-control" name="item_weight" id="item_weight" aria-describedby="helpId" placeholder="Item Weight" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Produced Quantity</label>
                                        <input type="number" min="0" class="form-control" name="prod_qty" id="prod_qty" aria-describedby="helpId" placeholder="Produced Quantity" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Color Change Qty</label>
                                        <input type="number" min="0" class="form-control" name="color_change_qty" id="color_change_qty" aria-describedby="helpId" placeholder="Color Change Qty" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Damaged Qty</label>
                                        <input type="number" min="0" class="form-control" name="damaged_qty" id="damaged_qty" aria-describedby="helpId" placeholder="Damaged Quantity" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Carrot Weight</label>
                                        <input type="number" min="0" class="form-control" name="carrot_weight" id="carrot_weight" aria-describedby="helpId" placeholder="Carrot Weight" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Number of Cavities</label>
                                        <input type="number" min="0" class="form-control" name="cavities" id="cavities" aria-describedby="helpId" placeholder="Cavities" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Stoppage time Start</label>
                                        <input type="datetime-local" class="form-control" name="stoppage_time_start" id="stoppage_time_start" aria-describedby="helpId" placeholder="Stoppage time Start" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Stoppage time End</label>
                                        <input type="datetime-local" class="form-control" name="stoppage_time_end" id="stoppage_time_end" aria-describedby="helpId" placeholder="Stoppage time End" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Notes</label>
                                        <textarea class="form-control" name="notes" id="notes" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="save_machine_log" class="btn btn-danger">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <table class="table w-100 table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Machine</th>
                                    <th>Qty Left</th>
                                    <th>Cycle Time</th>
                                    <th>Item Weight</th>
                                    <th>Produced Qty</th>
                                    <th>Color Change Qty</th>
                                    <th>Damaged Qty</th>
                                    <th>Carrot Weight</th>
                                    <th>Cavities</th>
                                    <th>Stoppage Time Start</th>
                                    <th>Stoppage Time End</th>
                                    <th>Notes</th>
                                    <th>Date Added</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = mysqli_query($mysqli, "SELECT * FROM `machine_log` ORDER BY `id` DESC");
                                while ($res = mysqli_fetch_array($select)) {
                                    echo '<td>' . $res['id'] . '</td>';
                                    echo '<td>' . $res['machine_id'] . '</td>';
                                    echo '<td>' . $res['qty_left'] . '</td>';
                                    echo '<td>' . $res['cycle_time'] . '</td>';
                                    echo '<td>' . $res['item_weight'] . '</td>';
                                    echo '<td>' . $res['prod_qty'] . '</td>';
                                    echo '<td>' . $res['color_change_qty'] . '</td>';
                                    echo '<td>' . $res['damaged_qty'] . '</td>';
                                    echo '<td>' . $res['carrot_weight'] . '</td>';
                                    echo '<td>' . $res['cavities'] . '</td>';
                                    echo '<td>' . $res['stoppage_time_start'] . '</td>';
                                    echo '<td>' . $res['stoppage_time_end'] . '</td>';
                                    echo '<td>' . $res['notes'] . '</td>';
                                    echo '<td>' . $res['date'] . '</td>';
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
    <div class="actionbtn">
        <i class="fas fa-plus"></i>
    </div>
</body>
<?php
include '../../js.php';
?>

</html>

<?php
if (isset($_POST['save_machine_log'])) {
    $machine_id = $_POST['machine_id'];
    $shift = $_POST['shift'];
    $qty_left = $_POST['qty_left'];
    $cycle_time = $_POST['cycle_time'];
    $item_weight = $_POST['item_weight'];
    $prod_qty = $_POST['prod_qty'];
    $color_change_qty = $_POST['color_change_qty'];
    $damaged_qty = $_POST['damaged_qty'];
    $carrot_weight = $_POST['carrot_weight'];
    $cavities = $_POST['cavities'];
    $stoppage_time_start = $_POST['stoppage_time_start'];
    $stoppage_time_end = $_POST['stoppage_time_end'];
    $notes = $_POST['notes'];
    $insert = mysqli_query($mysqli, "INSERT INTO `machine_log`
    (`user_id`, `machine_id`,`shift`, `qty_left`, `cycle_time`, `item_weight`, `prod_qty`, `color_change_qty`, `damaged_qty`, `carrot_weight`, `stoppage_time_start`, `stoppage_time_end`, `notes`, `cavities`)
    VALUES ('$_SESSION[user_id]','$machine_id','$shift','$qty_left','$cycle_time','$item_weight','$prod_qty','$color_change_qty','$damaged_qty','$carrot_weight','$stoppage_time_start','$stoppage_time_end','$notes','$cavities')");
    echo mysqli_error($mysqli);
}
echo '<script><meta http-equiv="refresh" content="30"></script>';
?>