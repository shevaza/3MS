<?php
include '../../config.php';
if (empty($_SESSION['user_id'])) {
    header('location:login.php');
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
                    Maintenance Tasks
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
    <div class="container-fluid mt-3">
        <div class="row flex-nowrap my-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col col-auto">
                                    <h3>
                                        Filter
                                    </h3>
                                </div>
                                <div class="col">
                                    <input placeholder="User" class="form-control" type="search" name="" id="">
                                </div>
                                <div class="col">
                                    <input placeholder="Status" class="form-control" type="search" name="" id="">
                                </div>
                                <div class="col">
                                    <input placeholder="Type" class="form-control" type="search" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-nowrap">
            <div class="col">
                <div class="card taskboard">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3>
                                    Open
                                </h3>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-danger btn-sm " href="#" role="button" data-bs-toggle="modal" data-bs-target="#new"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card taskboard">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3>
                                    In Progress
                                </h3>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-danger btn-sm " href="#" role="button" data-bs-toggle="modal" data-bs-target="#new"><i class="fas fa-plus"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card taskboard">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3>
                                    Done
                                </h3>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-danger btn-sm " href="#" role="button" data-bs-toggle="modal" data-bs-target="#new"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                    <div class="card-footer text-muted">
                        Footer
                    </div>
                </div>
            </div>





        </div>
    </div>
    <!-- CLOSE MAIN CONTAINER -->





    <div class="modal fade" id="new" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h4>
                        New Task
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Assign To</label>
                            <select class="selectpicker w-100" data-live-search="true" name="" id="">
                                <?php
                                $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
                                while ($r = mysqli_fetch_array($select_users)) {
                                    echo '<option value="' . $r['id'] . '">' . $r['username'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Due Date</label>
                            <input type="date" class="form-control" name="date" id="date">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" onclick="turn_on()" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>


</body>
<?php
include '../../js.php';
?>

</html>