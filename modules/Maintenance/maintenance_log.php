<?php
// if (empty($_SESSION['user_id'])) {
//     header('location:login.php');
// }
include '../../config.php';
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
                    Maintenance Log
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
            <div class="col mb-3">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h4><i class="fas fa-wrench"></i> Maintenance Log</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover w-100" id="log_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Desc</th>
                                    <th>Machine</th>
                                    <th>Mould</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Diagnosis</th>
                                    <th>User</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>






            <!-- <div class="col col-sm-12 col-lg-3 col-md-3">

            </div> -->




























        </div>
    </div>
    <!-- CLOSE MAIN CONTAINER -->

</body>
<?php
include '../../js.php';
?>



<script>
    $(document).ready(function() {
        $('.table').DataTable().clear().destroy();
        $('#log_table').DataTable({
            "ajax": {
                "url": '../../php_queries/ajax/maint_log.php',
                "dataSrc": ""
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "title"
                },
                {
                    "data": "type"
                },
                {
                    "data": "description"
                },
                {
                    "data": "machine_id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "start_time"
                },
                {
                    "data": "end_time"
                },
                {
                    "data": "diagnosis"
                },
                {
                    "data": "username"
                },
                {
                    "data": "status"
                }
            ],
        });
    });
</script>

</html>