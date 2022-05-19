<?php
include '../config.php';
if (isset($_POST['edit'])) {
    $check = mysqli_query($mysqli, "SELECT * FROM `machines` WHERE `number` LIKE '$_POST[machine_number]'");
    $res = mysqli_fetch_array($check);
    if (mysqli_num_rows($check) > 0 && $res['id'] != $_POST['edit']) {
        header('Location: ../modules/setup/machines.php?err=Machine already exists.');
    } else {
        $update = mysqli_query($mysqli, "UPDATE `machines` SET `number` = '$_POST[machine_number]', `description` = '$_POST[machine_description]'
        WHERE `id` = '$_POST[edit]'");
        header('Location: ../modules/setup/machines.php');
    }
}

if (isset($_POST['delete'])) {
    $delete = mysqli_query($mysqli, "DELETE FROM `machines` WHERE `id` LIKE '$_POST[delete]'");
    header('Location: ../modules/setup/machines.php');
}