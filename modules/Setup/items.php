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
                    Items
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
        <div class="row mt-5">
            <div class="col text-center">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-warning btn-lg p-3" href="colors.php" role="button"><strong>Colors</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4>Parent Items</h4>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-primary btn-sm me-auto" href="#" role="button" data-bs-toggle="modal" data-bs-target="#parent"> <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Barcode</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>




            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4>Child Items</h4>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-primary btn-sm me-auto" href="#" role="button" data-bs-toggle="modal" data-bs-target="#child"> <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


            <div class="modal fade" id="parent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <form method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                New Parent Item
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label for="">SKU</label>
                                    <input type="text" class="form-control" name="parent_sku" id="" aria-describedby="helpId" placeholder="3MP-XXX" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="parent_name" id="" aria-describedby="helpId" placeholder="Product Title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Description ENG</label>
                                    <input type="text" class="form-control" name="parent_desc_eng" id="" aria-describedby="helpId" placeholder="English Description">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Description AR</label>
                                    <input type="text" class="form-control" name="parent_desc_ar" id="" aria-describedby="helpId" placeholder="Arabic Description">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Barcode</label>
                                    <input type="text" class="form-control" name="parent_barcode" id="" aria-describedby="helpId" placeholder="0123456789" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="save_parent" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal fade" id="child" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <form method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                New Child Item
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label for="parent_sku">Parent SKU</label>
                                    <select class="form-control selectpicker" name="parent_id" id="parent_sku" required data-live-search="true">
                                        <?php
                                        $select = mysqli_query($mysqli, "SELECT * FROM `items`");
                                        while ($res = mysqli_fetch_array($select)) {
                                            echo '<option value="' . $res['id'] . '">' . strtoupper($res['sku_code']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="child_name" id="" aria-describedby="helpId" placeholder="Product Title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Formula Qty</label>
                                    <input type="number" min="0" class="form-control" name="child_qty" id="" aria-describedby="helpId" placeholder="Qty of Child in Parent" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="parent_sku">Required Mould</label>
                                    <select class="form-control selectpicker" name="parent_id" id="parent_sku" required data-live-search="true" required>
                                        <?php
                                        $select = mysqli_query($mysqli, "SELECT * FROM `molds`");
                                        while ($res = mysqli_fetch_array($select)) {
                                            if ($res['status'] == '1') {
                                                $color = 'bg-danger';
                                            } else {
                                                $color = '';
                                            }
                                            echo '<option class="' . $color . '" value="' . $res['id'] . '">' . strtoupper($res['name']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="save_child" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
    <!-- CLOSE MAIN CONTAINER -->

</body>
<?php
include '../../js.php';
?>

</html>