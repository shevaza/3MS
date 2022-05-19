<?php
include '../config.php';
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
    <link rel="stylesheet" href="../datatables/datatables.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-select/dist/css/bootstrap-select.css">
    <link rel="icon" href="/res/img/logo.png">
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="dashboard.php" role="button"><i class="fas fa-arrow-left    "></i></a>
                <img class="me-2" src="../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    3MPlast ERP
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link diabled me-2 border-end border-dark border-2" aria-current="page" href="#">Welcome</a>
                        <a class="nav-link" aria-current="page" href="../">Login</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- MAIN CONTAINER -->
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover table-responsive w-100">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Extension</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $select = mysqli_query($mysqli, "SELECT * FROM `users`");
                        while ($u = mysqli_fetch_array($select)) {
                            if ($u['online'] == 1) {
                                $color = 'bg-success text-light';
                                $status = '<i class="fa-solid fa-circle-check me-1"></i> ONLINE';
                            } else {
                                $color = 'bg-danger text-light';
                                $status = '<i class="fa-solid fa-circle-xmark me-1"></i> OFFLINE';
                            }
                            echo '     
                            <tr>
                                <td scope="row">' . $u['username'] . '</td>
                                <td>' . $u['email'] . '</td>
                                <td>' . $u['extension'] . '</td>
                                <td>' . $u['department'] . '</td>
                                <td>' . $u['position'] . '</td>
                                <td class="' . $color . '">' . $status . '</td>
                            </tr>
                            ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- CLOSE MAIN CONTAINER -->

</body>
<script src="../jquery/jquery.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../fontawesome/js/all.js"></script>
<script src="../datatables/datatables.min.js"></script>
<script src="../bootstrap/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script>
    $('.table').dataTable({
        "scrollX": true
    });
</script>

</html>