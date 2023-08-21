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
                    Production Orders
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
        <div class="row">
            <div class="col col-lg-7">
                <div id='pending-orders'>
                    <div class="card mb-2">
                        <div class="card-body p-2 text-center">
                            <h3>
                                <strong>PO's In Progress</strong>
                            </h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <div class="btn-group w-100">
                                    <a class="btn btn-outline-primary" onclick="Switch('po')" href="#" role="button">Show PO's</a>
                                    <a class="btn btn-outline-primary" onclick="Switch('comp')" href="#" role="button">Show Components</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab" id="po">
                        <?php
                        $select_prs = mysqli_query($mysqli, "SELECT * FROM `production_request` WHERE `status` != 'DONE'");
                        while ($pr = mysqli_fetch_array($select_prs)) {
                            echo '
                        <div class="card mb-2">
                        <div class="card-title p-3">
                        <div class="row">
                        <div class="col">
                        <h4>
                            Request #' . $pr['id'] . '
                        </h4>
                        </div>
                        <div class="col">
                        Due: ' . $pr['due_date'] . '
                        </div>
                        </div>
                        </div>
                        
                        ';
                            echo '     
                        ';
                            $select_pos = mysqli_query($mysqli, "SELECT * FROM `production_order` WHERE `request_id` = '$pr[id]'");
                            while ($po = mysqli_fetch_array($select_pos)) {

                                $select_item = mysqli_query($mysqli, "SELECT * FROM `items` WHERE `id` = '$po[item_id]' ");
                                $t = mysqli_fetch_array($select_item);
                                $it = $t['name'];

                                $select_color = mysqli_query($mysqli, "SELECT * FROM `colors` WHERE `id` = '$po[item_color]' ");
                                $c = mysqli_fetch_array($select_color);
                                $color = $c['color_name'];



                                echo '
                                <div class="card-body">
                            <div class="row border-top border-4 my-4">
                            <div class="col">
                            Item ID
                            </div>
                             <div class="col">
                            Item Color
                            </div> <div class="col">
                            Item QTY
                            </div> <div class="col">
                            QTY Done
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                            ' . $it . '
                            </div>
                            <div class="col">
                            ' . $color . '
                            </div> <div class="col">
                            ' . $po['item_qty'] . '
                            </div> <div class="col">
                            ' . $po['qty_done'] . '
                            </div>
                            </div>


                            <div class="row">
                        <h5>Components</h5>
                        </div>
                            ';

                                $select_formula = mysqli_query($mysqli, "SELECT * FROM `item_formula` WHERE `item_id` = '$po[item_id]'");
                                while ($f = mysqli_fetch_array($select_formula)) {
                                    $comp = $f['component_id'];
                                    $comp_qty = $f['component_qty'];

                                    $comp_data = mysqli_query($mysqli, "SELECT * FROM `components` WHERE `id` = '$comp'");
                                    $cd = mysqli_fetch_array($comp_data);
                                    $comp_name = $cd['name'];
                                    echo '
                                            <div class="row">
                                    <div class="col">
                                    ' . $comp_name . '
                                    </div>
                                    <div class="col">
                                    ' . $comp_qty * $po['item_qty'] . '
                                    </div>
                                                </div>
                                ';
                                }
                            }
                            echo '
                                </div>
                        
                        
                        <div class="card-footer text-end">
                            <a class="btn btn-primary btn-sm " href="#" role="button">Mark Done</a>
                        </div>
                        </div>';
                        }
                        ?>
                    </div>

                    <div class="tab" id="comp" style="display: none;">
                        <div class="card p-4">
                            <div class="row border-bottom">
                                <div class="col">
                                    Component
                                </div>
                                <div class="col">
                                    QTY
                                </div>
                            </div>
                            <?php
                            $select = mysqli_query($mysqli, "SELECT *, SUM(`comp_qty`) AS `total_qty` FROM `po_details` WHERE `status` != 'done' GROUP BY `comp_id`");
                            while ($res = mysqli_fetch_array($select)) {
                                echo '
                            <div class="row p-2">
                            <div class="col">
                            ' . $res['comp_id'] . '
                            </div>
                            <div class="col">
                            ' . $res['total_qty'] . '
                            </div>
                            </div>
                            ';
                            }
                            ?>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col">
                <div class="card">
                    <form method="post">
                        <div class="card-header">
                            <h4>
                                New Order
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <input type="date" class="form-control" name="start_date" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Due Date</label>
                                        <input type="date" class="form-control" name="due_date" id="" aria-describedby="helpId" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Item</label>
                                <select class="form-control selectpicker" name="item" id="item" data-live-search="true" required>
                                    <?php
                                    $select_i = mysqli_query($mysqli, "SELECT * FROM `items`");
                                    while ($i = mysqli_fetch_array($select_i)) {
                                        echo '
                                    <option value="' . $i['id'] . '">' . strtoupper($i['sku_code']) . ' | ' . $i['name'] . '</option>
                                    ';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Colors</label>
                                <select class="form-control selectpicker" onchange="checkColors()" name="color[]" id="color" data-live-search="true" multiple required>
                                    <?php
                                    $select_c = mysqli_query($mysqli, "SELECT * FROM `colors`");
                                    while ($c = mysqli_fetch_array($select_c)) {
                                        echo '
                                    <option value="' . $c['id'] . '">' . strtoupper($c['color_code']) . ' | ' . $c['color_name'] . '</option>
                                    ';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div id="colorQty">
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-success" name="submit_order" type="submit"><i class="fas fa-check"></i> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include '../../js.php';
?>
<script>
    function checkColors() {
        $('#colorQty').html('');
        var colors = $('#color option:selected');
        for (let index = 0; index < colors.length; index++) {
            var color = colors[index].innerHTML;
            var color_code = colors[index].value;
            var row = '<div class="row py-3 border-1 border-bottom"><div class="col">' + color + '</div><div class="col col-3"><input class="form-control" name="color_qty[]" placeholder="Quantity" type="number" required min="1" value="1"></div><div class="col-auto">Pcs</div></div>';
            $('#colorQty').append(row);
        }
    }

    function Switch(id) {
        $('.tab').hide();
        $("#" + id).fadeIn();
    }
</script>

</html>

<?php
if (isset($_POST['submit_order'])) {
    $item = $_POST['item'];
    $colors = $_POST['color'];
    $color_qty = $_POST['color_qty'];
    $start_date = $_POST['start_date'];
    $due_date = $_POST['due_date'];

    $insert = mysqli_query($mysqli, "INSERT INTO `production_request` (`user_id`, `start_date`, `due_date`, `status`)
        VALUES ('$_SESSION[user_id]', '$start_date', '$due_date', 'NEW') ");

    $last_pr_id = mysqli_insert_id($mysqli);
    for ($i = 0; $i < count($colors); $i++) {
        $insert = mysqli_query($mysqli, "INSERT INTO `production_order` (`request_id`, `item_id`, `item_qty`, `item_color`, `qty_done`)
        VALUES ('$last_pr_id', '$item', '$color_qty[$i]', '$colors[$i]', 'NEW') ");

        $last_po_id = mysqli_insert_id($mysqli);
        $select = mysqli_query($mysqli, "SELECT * FROM `item_formula` WHERE `item_id` = '$item'");
        while ($a = mysqli_fetch_array($select)) {
            $qty = $a['component_qty'] * $color_qty[$i];
            $insert = mysqli_query($mysqli, "INSERT INTO `po_details` (`order_id`, `comp_id`, `comp_qty`, `comp_color`, `status`) VALUES ('$last_po_id', '$a[component_id]', '$qty', '$colors[$i]', 'NEW')");
        }
    }
    echo "<meta http-equiv='refresh' content='0'>";
}
?>