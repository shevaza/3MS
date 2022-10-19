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

if (isset($_POST['edit'])) {
    $check = mysqli_query($mysqli, "SELECT `id` FROM `machines` WHERE `number` LIKE '$_POST[machine_number]'");
    if (mysqli_num_rows($check) > 0) {
        header('Location: ../modules/setup/machines.php?err=Machine already exists.');
    } else {
        $insert = mysqli_query($mysqli, "INSERT INTO `machines` (`number`, `description`) 
    VALUES ('$_POST[machine_number]', '$_POST[machine_description]')");
        header('Location: ../modules/setup/machines.php');
    }
}

if (isset($_POST['delete'])) {
    $check = mysqli_query($mysqli, "SELECT `id` FROM `machines` WHERE `number` LIKE '$_POST[machine_number]'");
    if (mysqli_num_rows($check) > 0) {
        header('Location: ../modules/setup/machines.php?err=Machine already exists.');
    } else {
        $insert = mysqli_query($mysqli, "INSERT INTO `machines` (`number`, `description`) 
    VALUES ('$_POST[machine_number]', '$_POST[machine_description]')");
        header('Location: ../modules/setup/machines.php');
    }
}
