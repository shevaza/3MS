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
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="items.php" role="button"><i class="fas fa-arrow-left"></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Colors
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
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4>Colors</h4>
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
                                    <th>Color</th>
                                    <th>Color Code</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_colors = mysqli_query($mysqli, "SELECT * FROM `colors`");
                                while ($c = mysqli_fetch_array($select_colors)) {
                                    echo '<tr>';
                                    echo '<td>'.$c['id'].'</td>';
                                    echo '<td>'.$c['color_name'].'</td>';
                                    echo '<td>'.$c['color_code'].'</td>';
                                    echo '<td></td>';
                                    echo '</tr>';
                                }
                                ?>
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
                                New Color
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="color_name" id="" aria-describedby="helpId" placeholder="Black" required autocomplete="off">
                                </div>
                                <div class="row my-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Color</label>
                                            <input type="color" class="form-control" onchange="getColor(this.value)" name="color_code" id="color_code" aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Code</label>
                                        <input type="text" class="form-control" id="cc" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="save_color" class="btn btn-success">Save</button>
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
    function getColor(c) {
        $('#cc').val(c);
    }
</script>

</html>



<?php
if (isset($_POST['save_color'])) {
    $color = $_POST['color_name'];
    $code = $_POST['color_code'];
    $check = mysqli_query($mysqli, "SELECT * FROM `colors` WHERE `color_name` LIKE '$color' || `color_code` LIKE '$code'");
    if (mysqli_num_rows($check) > 0) {
        echo '<script>alert("Color already exists!")</script>';
    }else {   
        $insert = mysqli_query($mysqli, "INSERT INTO `colors` (`color_name`, `color_code`) VALUES ('$color', '$code')");
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
?>