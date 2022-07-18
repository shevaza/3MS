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
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i class="fas fa-arrow-left    "></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Molds
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
                    <form action="../../php_queries/add_mold.php" method="post">
                        <div class="card-header">
                            <h4><i class="fas fa-plus"></i> Add New Mold</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Mold Name</label>
                                        <input type="text" required class="form-control" name="mold_name" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Mold Description</label>
                                        <textarea rows="3" class="form-control" required name="mold_description" aria-describedby="helpId" placeholder="Short Description of Mold functionality."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Mold Cavities</label>
                                        <input type="number" required class="form-control" name="mold_cavity" id="" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="">Compatible Machines</label>
                                    <select class="selectpicker form-control" name="m[]" multiple required>
                                        <?php
                                        $machines_q = mysqli_query($mysqli, "SELECT * FROM `machines`");
                                        while ($m = mysqli_fetch_array($machines_q)) {
                                            echo '<option value="' . $m['id'] . '">' . $m['number'] . '</option>';
                                        }
                                        ?>
                                    </select>
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
                        <h4><i class="fas fa-industry"></i> Molds</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped table-responsive w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Cavities</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select = mysqli_query($mysqli, "SELECT * FROM `molds`");
                                while ($res = mysqli_fetch_array($select)) {
                                    echo '<tr>';
                                    echo '<td class="w-auto">' . $res['id'] . '</td>';
                                    echo '<td class="w-auto">' . $res['name'] . '</td>';
                                    echo '<td class="w-auto">' . $res['description'] . '</td>';
                                    echo '<td class="w-auto">' . $res['cavity'] . '</td>';
                                    echo '<td class="w-25">
                                    <div class="btn-group" role="group" aria-label="">
                                        <button type="button" class="btn btn-sm btn-warning px-3" data-bs-toggle="modal" data-bs-target="#info_' . $res['id'] . '"><i class="fas fa-gear"></i> Machines</button>
                                        <button type="button" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] . '"><i class="fas fa-pen"></i> Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger px-3" data-bs-toggle="modal" data-bs-target="#delete_' . $res['id'] . '"><i class="fas fa-trash"></i> Delete</button>
                                    </div>
                                    </td>';
                                    echo '</tr>';


                                    echo '
                                    <div class="modal fade" id="edit_' . $res['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <form action="../../php_queries/edit_delete_mold.php" method="post">
                                            <div class="modal-header">
                                            <i class="fas fa-pen me-2"></i>
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Mold: ' . $res['name'] . '</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Mold Name</label>
                                                                <input type="text" value="' . $res['name'] . '" min="0" required class="form-control" name="mold_name" id="" aria-describedby="helpId" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Mold Description</label>
                                                                <textarea rows="3" class="form-control" required name="mold_description" aria-describedby="helpId" placeholder="Short Description of machine functionality.">' . $res['description'] . '</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Mold Cavities</label>
                                                                <input type="number" value="' . $res['cavity'] . '" required class="form-control" name="mold_cavity" id="" min="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="">Compatible Machines</label>
                                                                    <select id="sm_' . $res['id'] . '" class="selectpicker form-control" name="machines[]" multiple required>';
                                    $machines_q1 = mysqli_query($mysqli, "SELECT * FROM `machines`");
                                    while ($m1 = mysqli_fetch_array($machines_q1)) {
                                        echo '.<option value="' . $m1['id'] . '">' . $m1['number'] . '</option>';
                                    };
                                    echo '
                                                                    </select>
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
                                            <form action="../../php_queries/edit_delete_mold.php" method="post">
                                            <div class="modal-header">
                                            <i class="fas fa-trash me-2"></i>
                                                <h5 class="modal-title" id="staticBackdropLabel">Delete Mold: ' . $res['name'] . '</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                        Are you sure you want to delete Mold: ' . $res['name'] . '?
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
                                        
                                        


                                         <div class="modal fade" id="info_' . $res['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <form action="../../php_queries/edit_delete_mold.php" method="post">
                                            <div class="modal-header">
                                            <i class="fas fa-gear me-2"></i>
                                                <h5 class="modal-title" id="staticBackdropLabel">Compatible on:</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ';
                                    $machines = mysqli_query($mysqli, "SELECT * FROM `machine_mold_comp` WHERE `mold_id` = '$res[id]'");
                                    while ($mmc = mysqli_fetch_array($machines)) {
                                        echo '
                                                            <form action="../../php_queries/edit_delete_mold.php" method="post">
                                                            <div class="row py-2 border-2 border-bottom">
                                                            <div class="col">
                                                            Machine: <span class="fw-bold">' . $mmc['machine_id'] .
                                            '</span></div>
                                                            <div class="col">
                                                            <button type="submit" onclick="confirm("are you sure?")" name="delete_machine" value="' . $mmc['id'] . '" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                            </div>
                                                            </div>';
                                    }
                                    echo ' </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>





                                         <div class="modal fade" id="components_' . $res['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <form action="../../php_queries/edit_delete_mold.php" method="post">
                                            <div class="modal-header">
                                            <i class="fas fa-trash me-2"></i>
                                                <h5 class="modal-title" id="staticBackdropLabel">Delete Mold: ' . $res['name'] . '</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                        Are you sure you want to delete Mold: ' . $res['name'] . '?
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