<?php
include '../../config.php';
if (empty($_SESSION['user_id'])) {
    header('location:../login.php');
}
if (isset($_GET['err'])) {
    if ($_GET['err'] == 'itemfound') {
        echo '<script>alert("Item already exists!")</script>';
    } else {
        echo '<script>alert("' . $_GET['err'] . '")</script>';
    }
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
                                    <th>Desc EN</th>
                                    <th>Desc AR</th>
                                    <th>Barcode</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $items = mysqli_query($mysqli, "SELECT * FROM `items`");
                                while ($i = mysqli_fetch_array($items)) {
                                    echo '<tr>';
                                    echo '<td>' . $i['id'] . '</td>';
                                    echo '<td>' . strtoupper($i['sku_code']) . '</td>';
                                    echo '<td>' . $i['name'] . '</td>';
                                    echo '<td>' . $i['description_en'] . '</td>';
                                    echo '<td>' . $i['description_ar'] . '</td>';
                                    echo '<td>' . $i['barcode'] . '</td>';
                                    echo '<td><a class="btn btn-primary btn-sm me-auto" href="#" role="button" data-bs-toggle="modal" data-bs-target="#formula_' . $i['id'] . '"><i class="fas fa-blender"></i> Formula</a>
                                    <a class="btn btn-danger btn-sm me-auto" href="#" role="button" data-bs-toggle="modal" data-bs-target="#delete_' . $i['id'] . '"><i class="fas fa-trash"></i> Delete</a>
                                    </td>';
                                    echo '</tr>';

                                    echo '
                                    <div class="modal fade" id="delete_' . $i['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    Delete '.$i['name']. '
                                    </div>
                                    <div class="modal-body">
                                    Are You Sure?
                                    </div>
                                    <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" name="delete_item" class="btn btn-danger">Delete</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    ';


                                    echo '
                                    <div class="modal fade" id="formula_' . $i['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    ' . $i['name'] . ' Formula
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group mb-2">
                                    <label for="parent_sku">Components</label>
                                    <select class="form-control selectpicker" id="comp_' . $i['id'] . '" onchange="checkComps(' . $i['id'] . ')" required data-live-search="true" required multiple>
                                    ';
                                    $select = mysqli_query($mysqli, "SELECT * FROM `components`");
                                    while ($res = mysqli_fetch_array($select)) {
                                        echo '<option value="' . $res['id'] . '">' . strtoupper($res['name']) . '</option>';
                                    }
                                    echo '
                                    </select>
                                    </div>
                                    
                                    <form method="post" autocomplete="off" name="formula_' . $i['id'] . '" id="compqty_' . $i['id'] . '">
                                    
                                    
                                                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" name="add_formula" class="btn btn-success">Save</button>
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $components = mysqli_query($mysqli, "SELECT * FROM `components`");
                                while ($comp = mysqli_fetch_array($components)) {
                                    echo '<tr>';
                                    echo '<td>' . $comp['id'] . '</td>';
                                    echo '<td>' . $comp['name'] . '</td>';
                                    echo '<td>' . $comp['name'] . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


            <div class="modal fade" id="parent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <form method="post" action="../../php_queries/add_item.php" autocomplete="off">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                New Parent Item
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label for="sku">SKU</label>
                                    <input type="text" class="form-control" style="text-transform: uppercase" name="parent_sku" id="sku" aria-describedby="helpId" placeholder="3MP-XXX" required>
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
                                <button type="submit" name="add_item" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal fade" id="child" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <form method="post" action="../../php_queries/add_component.php" autocomplete="off">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                New Child Item
                            </div>
                            <div class="modal-body">

                                <div class="form-group mb-2">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="child_name" id="" aria-describedby="helpId" placeholder="Component Title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="parent_sku">Required Mould</label>
                                    <select class="form-control selectpicker" name="comp_mold" id="comp_mold" required data-live-search="true" required>
                                        <?php
                                        $select = mysqli_query($mysqli, "SELECT * FROM `molds`");
                                        while ($res = mysqli_fetch_array($select)) {
                                            echo '<option value="' . $res['id'] . '">' . strtoupper($res['name']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="add_component" class="btn btn-success">Save</button>
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




<script>
    function checkComps(id) {
        $('#compqty_' + id).html('');
        var qty_div = document.getElementById("compqty_" + id);
        var comp = $('#comp_' + id + ' option:selected');
        for (let index = 0; index < comp.length; index++) {
            var comp_name = comp[index].innerHTML;
            var comp_id = comp[index].value;
            var row = '<div class="row py-3 border-1 border-bottom"><div class="col">' + comp_name + '</div><div class="col col-3"><input type="hidden" name="fc_id[]" value="' + comp_id + '"><input class="form-control" name="fc_qty[]" placeholder="Quantity" type="number" required min="1" value="1"></div><div class="col-auto">Pcs</div></div>';
            // qty_div.innerHTML += row;
            $('#compqty_' + id).append(row);
        }
        var row = '<input type="hidden" name="item_id" value="' + id + '">';
        qty_div.innerHTML += row;
    }
</script>

</html>



<?php
if (isset($_POST['add_formula'])) {
    $item = $_POST['item_id'];
    $comps = $_POST['fc_id'];
    $qtys = $_POST['fc_qty'];

    for ($i = 0; $i < count($comps); $i++) {
        $insert = mysqli_query($mysqli, "INSERT INTO `item_formula` (`item_id`, `component_id`, `component_qty`)
        VALUES ($item, $comps[$i], $qtys[$i])");
    }
}
?>