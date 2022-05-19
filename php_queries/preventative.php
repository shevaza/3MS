<?php
include '../config.php';
if (isset($_POST['add'])) {

    $machine = $_POST['machine'];
    $mold = $_POST['mold'];
    $description = $_POST['description'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $repeat_hrs = $_POST['repeat_hrs'];
    $ass_user = $_POST['ass_user'];


    $insert = mysqli_query($mysqli, "INSERT INTO `maintenance_order`
    (`machine_id`, `mold_id`, `type`, `description`, `start_time`, `end_time`, `repeat_hrs`, `super_user_id`, `ass_user_id`)
    VALUES ('$machine', '$mold', 'preventative', '$description', '$start', '$end', '$repeat_hrs', '$_SESSION[user_id]', $ass_user)");

    header('Location: ../modules/maintenance/maintenance_preventative.php');
    
}
?>