<?php
include '../../config.php';
if (empty($_SESSION['user_id'])) {
    header('location:../login.php');
}
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
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i class="fas fa-arrow-left    "></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Machine Log
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
                        <a class="nav-link" aria-current="page" href="../../php_queries/logout.php">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- MAIN CONTAINER -->
    <div class="container-fluid mt-5">

        <div id="machines" class="model" style="display:contents">
            <div class="row justify-content-center">
                <?php
                $select_machines = mysqli_query($mysqli, "SELECT * FROM `machines`");
                while ($a = mysqli_fetch_array($select_machines)) {
                    $s = ($a['status'] == 1) ? 'bg-success text-light' : '';
                    echo '
                            <div id="' . $a['id'] . '" name="' . $a['number'] . '" class="col-12 col-sm-3 col-lg-2 m-3 text-center mach">
                            <div id="card_' . $a['id'] . '" class="card card-hover p-4 ' . $s . '">
                            <h2>' . $a['number'] . '</h2>
                            </div>
                            </div>';
                }
                ?>
                </dib>
            </div>
        </div>

        <div id="data" class="model">
            <div class="row">
                <div class="col">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-auto col-sm-4 my-2 my-md-0">
                                    <button type="button" onclick="close1()" class="btn btn-danger btn-sm me-2 py-0"><i class="fas fa-times"></i></button>
                                </div>
                                <div class="col-xs-auto col-sm-4 text-center d-grid my-2 my-md-0">
                                    <a class="btn btn-lg btn-primary display-flex" href="#" role="button" data-bs-toggle="modal" data-bs-target="#new"><i class="fas fa-plus"></i> Add</a>
                                </div>
                                <div class="col-xs-auto col-sm-4 text-end my-2 my-md-0">
                                    <a class="btn btn-success btn-lg me-4" href="#" role="button" data-bs-toggle="modal" data-bs-target="#turn_on">ON</a>
                                    <a class="btn btn-danger btn-lg " href="#" role="button" data-bs-toggle="modal" data-bs-target="#turn_off">OFF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    Machine # <span id="m_title"></span>
                                </div>
                                <div class="col text-end">
                                    <input placeholder="Search" type="search" class="form-control" name="myInput" id="myInput" onkeyup="filter()">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row flex-nowrap">
                                <div class="col">
                                    <table id="myTable" class="w-100" cellpadding="5">
                                        <thead>
                                            <tr>
                                                <th>Machine #</th>
                                                <th>DateTime</th>
                                                <th>Power On Time</th>
                                                <th>Oil Level</th>
                                                <th>User</th>
                                            </tr>
                                        </thead>
                                        <tbody id="machine_data">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="modal fade" id="turn_on" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        Are you Sure you want to switch the machine ON ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" onclick="turn_on()" class="btn btn-success">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="turn_off" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        Are you Sure you want to switch the machine OFF ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" onclick="turn_off()" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="new" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Machine Runtime</label>
                            <input type="number" class="form-control" min="0" id="runtime" name="runtime" required aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">hrs</small>
                        </div>

                        <div class="form-group">
                            <label for="">Machine Oil Level</label>
                            <input type="number" class="form-control" min="0" id="oil" name="oil" required aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">cm</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" onclick="submit()" class="btn btn-primary">Submit</button>
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
    $(document).ready(function() {
        $('#machines').fadeIn();
        var id, num;
    });

    function close1() {
        $('.model').hide();
        $('#machines').fadeIn();
    }

    $('.mach').click(function() {

        id = this.id;
        num = this.attributes["name"].value;
        $('.model').hide();
        $('#data').fadeIn();
        $('#m_title').text(num);
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/machine_info.php",
            data: {
                action: "get",
                id: id
            },
            dataType: "HTML",
            success: function(r) {
                $('#machine_data').html(r);

            }
        });
    });

    function turn_on() {
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/machine_info.php",
            data: {
                action: "on",
                id: id
            },
            success: function() {
                alert('Machine Switched ON');
                $('#turn_on').modal('hide');
                $('#card_' + id).removeClass("bg-light text-dark").addClass("bg-success text-light");
            }
        });
    }

    function turn_off() {
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/machine_info.php",
            data: {
                action: "off",
                id: id
            },
            success: function() {
                alert('Machine Switched OFF');
                $('#turn_off').modal('hide');
                $('#card_' + id).removeClass("bg-success text-light").addClass("bg-light text-dark");
            }
        });
    }


    function submit() {
        var runtime = $('#runtime').val();
        var oil = $('#oil').val();
        if (runtime && oil != 0) {
            $.ajax({
                type: "POST",
                url: "../../php_queries/ajax/machine_info.php",
                data: {
                    action: "add",
                    id: id,
                    oil: oil,
                    runtime: runtime
                },
                success: function() {
                    alert('Added Successfully!');
                    $('#new').modal('hide');
                    location.reload();
                }
            });
        } else {
            alert('Value cannot be 0 !');
        }
    }
</script>

</html>