<?php
include '../../config.php';
if (empty($_SESSION['user_id'])) {
    header('location:../login.php');
}
if (isset($_GET['err'])) {
    echo '<script>alert("' . $_GET['err'] . '")</script>';
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
                    Machines
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
            <div class="col col-sm-12 col-lg-3 col-md-3 mb-3">
                <div class="card">
                    <form action="../../php_queries/add_machine.php" method="post">
                        <div class="card-header">
                            <h4><i class="fas fa-plus"></i> Add New Machine</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Machine Number</label>
                                        <input type="number" value="1" min="0" required class="form-control" name="machine_number" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Machine Description</label>
                                        <textarea rows="3" class="form-control" required name="machine_description" aria-describedby="helpId" placeholder="Short Description of machine functionality."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-plus"></i> Add</button>
                        </div>
                    </form>
                </div>
            </div>




            <div class="col-sm-12 col-md-9 col-lg-9 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-industry"></i> Machines</h4>
                    </div>
                    <div class="card-body p-5">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Number</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = mysqli_query($mysqli, "SELECT * FROM `machines`");
                                while ($res = mysqli_fetch_array($select)) {
                                    if ($res['status'] == '1') {
                                        $status = 'success';
                                    } else {
                                        $status = 'danger';
                                    }
                                    echo '<tr>';
                                    echo '<td class="w-auto">' . $res['id'] . '</td>';
                                    echo '<td class="w-auto">' . $res['number'] . '</td>';
                                    echo '<td class="w-auto">' . $res['description'] . '</td>';
                                    echo '<td class="w-auto text-light bg-' . $status . '">' . $res['status'] . '</td>';
                                    echo '<td class="w-25">
                                    <div class="btn-group" role="group" aria-label="">
                                        <button type="button" class="btn btn-sm btn-success disabled px-3"><i class="fas fa-screwdriver"></i> Molds</button>
                                        <button type="button" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] . '">
                                            <i class="fas fa-pen"></i> Edit
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger px-3" data-bs-toggle="modal" data-bs-target="#delete_' . $res['id'] . '">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </div>  
                                    </td>';
                                    echo '</tr>';

                                    echo '
                                        <div class="modal fade" id="edit_' . $res['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <form action="../../php_queries/edit_delete_machine.php" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Machine # ' . $res['number'] . '</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Machine Number</label>
                                                                <input type="number" value="' . $res['number'] . '" min="0" required class="form-control" name="machine_number" id="" aria-describedby="helpId" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Machine Description</label>
                                                                <textarea rows="3" class="form-control" required name="machine_description" aria-describedby="helpId" placeholder="Short Description of machine functionality.">' . $res['description'] . '</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="edit" value="' . $res['id'] . '" class="btn btn-primary">Save</button>
                                                    </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>



                                        <div class="modal fade" id="delete_' . $res['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <form action="../../php_queries/edit_delete_machine.php" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Delete Machine # ' . $res['number'] . '</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                        Are you sure you want to delete Machine # ' . $res['number'] . '?
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="delete" value="' . $res['id'] . '" class="btn btn-danger">Delete</button>
                                                    </div>
                                            </form>
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
    <!-- CLOSE MAIN CONTAINER -->

</body>
<?php
include '../../js.php';
?>

</html>