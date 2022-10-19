<?php
include '../config.php';
if (isset($_POST['add'])) {

    if (isset($_POST['end_date'])) {
        $end_date = $_POST['end_date'];
    }else{
        $end_date = date("Y-m-d H:i:s", time());
    }
    if ($_POST['error'] == '0') {
        $error = '';
    }else{
        $error = $_POST['error'];
    }

    $insert = mysqli_query($mysqli, "INSERT INTO `maintenance_order`
  (`title`, `machine_id`, `mold_id`, `type`, `description`, `start_time`, `end_time`, `super_user_id`, `ass_user_id`)
  VALUES ('$_POST[title]','$_POST[machine]', '$_POST[mold]','corrective','$_POST[description]','$_POST[start_date]','$end_date','$_POST[user_id]','$_POST[user_id]')");

    $last_id = mysqli_insert_id($mysqli);

    
        $insert = mysqli_query($mysqli, "INSERT INTO `maintenance_log`
  (`order_id`, `diagnosis`, `start`, `end`, `error_id`, `user_id`, `status`)
  VALUES ('$last_id','$_POST[description]', '$_POST[start_date]','$end_date', NULLIF('$error',''),'$_POST[user_id]','$_POST[status]')");

    header('Location: ../modules/maintenance/maintenance_corrective.php');

}