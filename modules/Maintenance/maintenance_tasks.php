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
                        <a class="nav-link" aria-current="page" href="../../php_queries/logout.php">Logout</a>
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
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col col-auto">
                                    <h3>
                                        Filter
                                    </h3>
                                </div>
                                <div class="mb-2 mb-lg-0 col-12 col-sm-11 col-md-3 col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Task</span>
                                        </div>
                                        <input class="form-control" type="search" placeholder="Task Title.." name="task" id="filter_title" onkeyup="getData()">
                                    </div>
                                </div>
                                <div class="mb-2 mb-lg-0 col-12 col-sm-11 col-md-3 col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">User</span>
                                        </div>
                                        <select class="selectpicker form-control" data-style="btn-outline-danger" data-live-search="true" name="" id="filter_user" onchange="getData()">
                                            <option value="all" selected>All</option>
                                            <?php
                                            $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
                                            while ($r = mysqli_fetch_array($select_users)) {
                                                echo '<option value="' . $r['id'] . '">' . $r['first_name'] . ' ' . $r['last_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 mb-lg-0 col-12 col-sm-11 col-md-3 col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">Date Range</span>
                                        </div>
                                        <input class="form-control" type="date" name="from" id="filter_from" onchange="getData()">
                                        <input class="form-control" type="date" name="to" id="filter_to" onchange="getData()">
                                    </div>
                                </div>
                                <div class="mb-2 mb-lg-0 col-12 col-sm-11 col-md-auto">
                                    <button type="button" name="" id="clearFilter" class="btn btn-outline-danger btn-sm btn-block">Clear Filter <i class="fa-solid fa-eraser"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex-nowrap" style="overflow-x:auto">
            <div class="col-12 col-sm-4">
                <div class="card taskboard">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3>
                                    Open
                                </h3>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-danger btn-sm " href="#" role="button" data-bs-toggle="modal" onclick="Select('open')" data-bs-target="#new"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body tasks-cont" id="open-body">

                    </div>
                    <div class="card-footer text-muted">
                        <!-- Footer -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card taskboard">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3>
                                    In Progress
                                </h3>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-danger btn-sm " href="#" role="button" data-bs-toggle="modal" onclick="Select('in progress')" data-bs-target="#new"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body tasks-cont" id="ip-body">

                    </div>
                    <div class="card-footer text-muted">
                        <!-- Footer -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card taskboard">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h3>
                                    Done
                                </h3>
                            </div>
                            <div class="col text-end">
                                <a class="btn btn-danger btn-sm " href="#" role="button" data-bs-toggle="modal" data-bs-target="#new" onclick="Select('done')"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body tasks-cont" id="done-body">

                    </div>
                    <div class="card-footer text-muted">
                        <!-- Footer -->
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
                    <form class="form-inline" method="POST" autocomplete="off">
                        <div class="form-group">
                            <label for="">Title *</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="desc" id="desc" cols="30" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Assign To *</label>
                            <select class="selectpicker w-100" data-live-search="true" name="user[]" id="user" required multiple>
                                <?php
                                $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
                                while ($r = mysqli_fetch_array($select_users)) {
                                    echo '<option value="' . $r['id'] . '">' . $r['username'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Due Date *</label>
                            <input type="date" class="form-control" name="date" id="date" required>
                        </div>
                        <div class="form-group">
                            <label for="">Status *</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="open">Open</option>
                                <option value="in progress">In Progress</option>
                                <option value="done">Done</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="save" class="btn btn-danger">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
















</body>
<?php
include '../../js.php';
?>

<script>
    $(document).ready(function() {
        $('#filter_user').selectpicker('val', '<?php echo $_SESSION['user_id']; ?>');
        getData();
    });

    function getData() {
        var title = $('#filter_title').val();
        var user = $('#filter_user').val();
        var from = $('#filter_from').val();
        var to = $('#filter_to').val();
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/load_tasks.php",
            data: {
                action: 'get',
                title: title,
                user: user,
                from: from,
                to: to
            },
            dataType: "html",
            success: function(r) {
                data = JSON.parse(r);
                $('#open-body').html(data[0]);
                $('#ip-body').html(data[1]);
                $('#done-body').html(data[2]);
                $('.card-body').slideDown();
                $('.selectpicker').selectpicker();
            }
        });
    }

    function switchStat(id, status) {
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/load_tasks.php",
            data: {
                action: status,
                id: id
            },
            dataType: "html",
            success: function(r) {
                $('.card-body').slideUp();
                getData();
            }
        });
    }

    function deleteTask(id) {
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/load_tasks.php",
            data: {
                action: 'delete',
                id: id
            },
            dataType: "html",
            success: function(r) {
                $('.card-body').slideUp();
                getData();
            }
        });
    }

    function Select(s) {
        document.getElementById("status").value = s;
    }

    $('#clearFilter').click(function(e) {
        e.preventDefault();
        $('#filter_title').val('');
        $('#filter_user').val('all');
        $('#filter_from').val('');
        $('#filter_to').val('');
        $('.card-body').slideUp();
        getData();
    });


    $('.comment_btn').click(function(e) {
        e.preventDefault();
        console.log('click');
    });


    function addComment(id, comment) {
        $.ajax({
            type: "POST",
            url: "../../php_queries/ajax/load_tasks.php",
            data: {
                action: 'comment',
                id: id,
                comment: comment
            },
            dataType: "html",
            success: function(r) {
                $('.card-body').slideUp();
                getData();
            }
        });
    }
</script>

</html>

<?php
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $user = $_POST['user'];
    $due_date = $_POST['date'];
    $status = $_POST['status'];
    $insert = mysqli_query($mysqli, "INSERT INTO `tasks` (`title`, `description`, `due_date`, `status`, `created_by`)
    VALUES ('$title', '$desc', '$due_date', '$status', '$_SESSION[user_id]')");
    $last_id = mysqli_insert_id($mysqli);

    for ($i = 0; $i < count($user); $i++) {
        $insert = mysqli_query($mysqli, "INSERT INTO `task_ass` (`task_id`, `user_id`) VALUES ('$last_id', '$user[$i]')");
    }
    echo '<script><meta http-equiv="refresh" content="30"></script>';
}

if (isset($_POST['edit'])) {
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $desc = $_POST['edit_desc'];
    $due_date = $_POST['edit_date'];
    $edit = mysqli_query($mysqli, "UPDATE `tasks` SET `title` = '$title', `description` = '$desc', `due_date` = '$due_date' WHERE `id` = '$id'");
}

?>