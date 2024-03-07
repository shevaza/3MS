<?php
include '../../config.php';
if (empty($_SESSION['user_id'])) {
    header('location:../login.php');
}
require '../../vendor/autoload.php'; // Include Firestore SDK

use Google\Cloud\Firestore\FirestoreClient;
use Google\Auth\Credentials\ServiceAccountCredentials;

// Path to your service account key JSON file
$serviceAccountKeyFilePath = '../../firebase/3mkey.json';

// Initialize Firestore with service account credentials
$firestore = new FirestoreClient([
    'keyFilePath' => $serviceAccountKeyFilePath,
]);

$collection = $firestore->collection('users');
$query = $collection->documents();
$users = [];
foreach ($query as $document) {
    // Extract document data
    $userData = $document->data();

    // Store data in the array
    $users[] = $userData;
}

$data = [];



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
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i
                        class="fas fa-arrow-left    "></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Timesheets
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link diabled me-2 border-end border-dark border-2" aria-current="page"
                            href="#">Welcome <span class="fw-bold text-black">
                                <?php echo ucfirst($_SESSION['username']) ?>
                            </span></a>
                        <a class="nav-link active" aria-current="page" href="../dashboard.php">Dashboard</a>
                        <a class="nav-link" aria-current="page" href="../contacts.php">Users</a>
                        <a class="nav-link" aria-current="page" href="#">Settings</a>
                        <a class="nav-link" aria-current="page" href="../../php_queries/logout.php">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <select class="form-control" name="" id="" onchange="getuserData(this.value)">
                    <?php
                    foreach ($users as $user) {
                        echo '<option value="' . $user['employee_id'] . '">' . $user['full name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-md-auto col-12 text-center mb-4">
                <div class="card">
                    <div id="div1" class="card-body">
                     
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Timesheet</h4>
                        <div class="table-responsive" id="div2">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include '../../js.php';
?>
<script>
    function getuserData(user) {
        $.ajax({
            type: "POST",
            url: "../../Ajax/getuser.php",
            data: {
                id: user
            },
            success: function (r) {
                $('#div1').html(JSON.parse(r)[0]);
                $('#div2').html(JSON.parse(r)[1]);
                $('#table').dataTable({
                    order: [[0, 'desc']]
                });
            }
        });
    }
</script>

</html>