<?php
include '../../config.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <style>
        .calc {
            background-color: #aaffaa !important;
        }
    </style>
    <?php
    include '../../css.php';
    ?>
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i class="fas fa-arrow-left"></i></a>
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
            <div class="modal-dialog modal-xl" role="document">
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
                                        <select class="selectpicker w-100" data-style="btn-lg btn-outline-danger" name="machine_id" id="machine_id" required>
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
                                        <select class="selectpicker w-100" data-style="btn-lg btn-outline-danger" name="shift" id="shift" required>
                                            <option disabled>Select Shift</option>
                                            <option value="Morning">Morning &#x263C;</option>
                                            <option value="Evening">Evening &#x263D;</option>
                                            <option value="Night">Night &#x263E;</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Quantity Left</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="qty_left" id="qty_left" aria-describedby="helpId" placeholder="Quantity Left" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Cycle Time</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="cycle_time" id="cycle_time" aria-describedby="helpId" placeholder="Cycle Time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Item Weight</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="item_weight" id="item_weight" aria-describedby="helpId" placeholder="Item Weight" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Produced Quantity</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="prod_qty" id="prod_qty" aria-describedby="helpId" placeholder="Produced Quantity" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Color Change Qty</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="color_change_qty" id="color_change_qty" aria-describedby="helpId" placeholder="Color Change Qty" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Damaged Qty</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="damaged_qty" id="damaged_qty" aria-describedby="helpId" placeholder="Damaged Quantity" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Carrot Weight</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="carrot_weight" id="carrot_weight" aria-describedby="helpId" placeholder="Carrot Weight" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Number of Cavities</label>
                                        <input type="number" step="0.5" min="0" class="form-control" name="cavities" id="cavities" aria-describedby="helpId" placeholder="Cavities" required>
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



        <div class="row mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col">
                                    <input type="date" name="from" id="" class="form-control" value="" aria-describedby="helpId">
                                </div>
                                <div class="col">
                                    <input type="date" name="to" id="" class="form-control" value="" aria-describedby="helpId">
                                </div>
                                <div class="col col-auto">
                                    <div class="btn-group" role="group" aria-label="Button group name">
                                        <button type="submit" class="btn btn-danger" name="from" value="today">Today</button>
                                        <button type="submit" class="btn btn-danger" name="from" value="week">Week</button>
                                        <button type="submit" class="btn btn-danger" name="from" value="month">Month</button>
                                    </div>
                                </div>
                                <div class="col col-auto">
                                    <div class="btn-group" role="group" aria-label="Button group name">
                                        <input type="checkbox" class="btn-check" id="morning" autocomplete="off" name="morning" value="true">
                                        <label class="btn btn-outline-danger" for="morning">Morning</label>
                                        <input type="checkbox" class="btn-check" id="evening" autocomplete="off" name="evening" value="true">
                                        <label class="btn btn-outline-danger" for="evening">Evening</label>
                                        <input type="checkbox" class="btn-check" id="night" autocomplete="off" name="night" value="true">
                                        <label class="btn btn-outline-danger" for="night">Night</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-danger">Filter</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Log Time: <?php
                                    $m = '';
                                    $e = '';
                                    $n = '';
                                    if (isset($_GET['from'])) {
                                        $from = $_GET['from'];
                                        $to = $_GET['to'];
                                        if ($from == 'today') {
                                            $from = $to = date('Y-m-d');
                                        } elseif ($from == 'week') {
                                            $from = date('Y-m-d', strtotime(' - 3 days'));
                                            $to = date('Y-m-d');
                                        } elseif ($from == 'month') {
                                            $from = date('Y-m-d', strtotime(' - 1 months'));
                                            $to = date('Y-m-d');
                                        }
                                        if (isset($_GET['morning'])) {
                                            $m = 'Morning';
                                        }
                                        if (isset($_GET['evening'])) {
                                            $e = 'Evening';
                                        }
                                        if (isset($_GET['night'])) {
                                            $n = 'Night';
                                        }
                                    } else {
                                        $from = date('Y-m-d');
                                        $to = date('Y-m-d');
                                    }

                                    echo $from . ' - ' . $to ?>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="main-table" class="table w-100 table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Machine</th>
                                <th>Shift</th>
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
                                <th>Time left for shift</th>
                                <th>Total Weight</th>
                                <th>Total Waste Qty</th>
                                <th>Total Damaged Qty</th>
                                <th>Productive Time</th>
                                <th>% Defective</th>
                                <th>Notes</th>
                                <th>Date Added</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = mysqli_query($mysqli, "SELECT * FROM `machine_log` WHERE DATE(`date`) >= '$from' AND DATE(`date`) <= '$to'
                            AND (`shift` LIKE '$m' OR `shift` LIKE '$e' OR `shift` LIKE '$n') ORDER BY `id` DESC");
                            while ($res = mysqli_fetch_array($select)) {
                                echo '<tr>';
                                echo '<td>' . $res['id'] . '</td>';
                                echo '<th>' . $res['machine_id'] . '</th>';
                                echo '<td>' . $res['shift'] . '</td>';
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
                                echo '<td class="calc">' . number_format((($res['qty_left'] / $res['cavities']) * $res['cycle_time']) / 3600, 2) . '</td>';
                                echo '<td class="calc">' . number_format(($res['prod_qty'] * $res['item_weight']) / 1000, 2) . '</td>';
                                echo '<td class="calc">' . number_format(($res['carrot_weight'] * $res['damaged_qty']) + ($res['carrot_weight'] * $res['color_change_qty']) + ($res['carrot_weight'] * $res['prod_qty']), 2) . '</td>';
                                echo '<td class="calc">' . number_format((($res['color_change_qty'] * $res['item_weight']) + ($res['damaged_qty'] * $res['item_weight']) + ($res['carrot_weight'] * $res['damaged_qty']) + ($res['carrot_weight'] * $res['color_change_qty']) + ($res['carrot_weight'] * $res['prod_qty'])) / 1000, 2) . '</td>';
                                echo '<td class="calc">' . number_format(($res['prod_qty'] + $res['color_change_qty'] + $res['damaged_qty']) / $res['cavities'] * $res['cycle_time'] / 3600, 2) . '</td>';
                                echo '<td class="calc">' . number_format(($res['color_change_qty'] + $res['damaged_qty']) / ($res['color_change_qty'] + $res['damaged_qty'] + $res['prod_qty']) * 100, 2)  . '</td>';
                                echo '<td>' . $res['notes'] . '</td>';
                                echo '<td>' . $res['date'] . '</td>';
                                echo '<td>
                                     <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                     <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_' . $res['id'] . '">Edit</a>
                                     <a class="btn btn-danger btn-sm" role="button">Delete</a>
                                     </div></td>';
                                echo '</tr>';
                                echo '
                                <div class="modal fade" id="modal_' . $res['id'] . '" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Entry ' . $res['id'] . '</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">



                                            <div class="row mb-3">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Machine</label>
                                                            <select class="selectpicker w-100" data-style="btn-lg btn-outline-danger" name="machine_id" id="machine_id" required>
                                                                <option disabled>Select Number</option>';
                                                                $select = mysqli_query($mysqli, "SELECT `id`,`number` FROM `machines`");
                                                                while ($m = mysqli_fetch_array($select)) {
                                                                    echo '<option value="' . $m['id'] . '">' . $m['number'] . '</option>';
                                                                }
                                                            echo'
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Shift</label>
                                                            <select class="selectpicker w-100" data-style="btn-lg btn-outline-danger" name="shift" id="shift" required>
                                                                <option disabled>Select Shift</option>
                                                                <option value="Morning">Morning &#x263C;</option>
                                                                <option value="Evening">Evening &#x263D;</option>
                                                                <option value="Night">Night &#x263E;</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Quantity Left</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="qty_left" id="qty_left" aria-describedby="helpId" placeholder="Quantity Left" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Cycle Time</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="cycle_time" id="cycle_time" aria-describedby="helpId" placeholder="Cycle Time" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Item Weight</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="item_weight" id="item_weight" aria-describedby="helpId" placeholder="Item Weight" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Produced Quantity</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="prod_qty" id="prod_qty" aria-describedby="helpId" placeholder="Produced Quantity" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Color Change Qty</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="color_change_qty" id="color_change_qty" aria-describedby="helpId" placeholder="Color Change Qty" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Damaged Qty</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="damaged_qty" id="damaged_qty" aria-describedby="helpId" placeholder="Damaged Quantity" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Carrot Weight</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="carrot_weight" id="carrot_weight" aria-describedby="helpId" placeholder="Carrot Weight" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="">Number of Cavities</label>
                                                            <input type="number" step="0.5" min="0" class="form-control" name="cavities" id="cavities" aria-describedby="helpId" placeholder="Cavities" required>
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
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                     ';
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="14" style="text-align:right; padding-right:10px">Totals:</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Machine Productivity</h4>
                    <?php
                    $select = mysqli_query($mysqli, "SELECT `machine_id`,SUM((`prod_qty` + `color_change_qty` + `damaged_qty`) / `cavities` * `cycle_time` / 3600) AS `ma` FROM `machine_log` WHERE DATE(`date`) >= '$from' AND DATE(`date`) <= '$to'
                    AND (`shift` LIKE '$m' OR `shift` LIKE '$e' OR `shift` LIKE '$n')
                    GROUP BY `machine_id` ORDER BY `machine_id` ASC");
                    while ($res = mysqli_fetch_array($select)) {
                        if (number_format($res['ma'] / 8 * 100, 2) < 90 && number_format($res['ma'] / 8 * 100, 2) > 50) {
                            $danger = 'bg-warning';
                        } elseif (number_format($res['ma'] / 8 * 100, 2) < 50) {
                            $danger = 'bg-danger text-light';
                        } else {
                            $danger = 'bg-success text-light';
                        }
                        echo '<div class="row py-3 my-2 border-top ' . $danger . '">
                        <div class="col">
                        <h4>Machine #' . $res['machine_id'] . '</h4>
                        <h5>' . number_format($res['ma'] / 8 * 100, 2) . '%</h5>
                        </div>
                    </div>';
                    }
                    ?>
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
<script>
    $(document).ready(function() {
        table.destroy();
        table = $('#main-table').DataTable({
            "scrollX": true,
            order: [
                [0, 'desc']
            ],
            footerCallback: function(row, data, start, end, display) {
                var api = this.api();

                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                };

                // Total over all pages
                total_weight = api
                    .column(14)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal_weight = api
                    .column(14, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);




                // Total over all pages
                total_damaged = api
                    .column(16)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal_damaged = api
                    .column(16, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);




                // Total over all pages
                total_time = api
                    .column(17)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal_time = api
                    .column(17, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);


                // Total over all pages
                total_deff = api
                    .column(18)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal_deff = api
                    .column(18, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Update footer
                $(api.column(14).footer()).html(pageTotal_weight + ' (' + total_weight + ' Total)');
                $(api.column(16).footer()).html(pageTotal_damaged + ' (' + total_damaged + ' Total)');
                $(api.column(17).footer()).html(pageTotal_time + ' (' + total_time + ' Total)');
                $(api.column(18).footer()).html(pageTotal_deff + ' (' + total_deff + ' Total)');
            },
        });
    });
</script>

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