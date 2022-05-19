<?php
include '../config.php';
if (isset($_POST['machine_number'])) {
    $check = mysqli_query($mysqli, "SELECT `id` FROM `machines` WHERE `number` LIKE '$_POST[machine_number]'");
    if (mysqli_num_rows($check) > 0) {
        header('Location: ../modules/setup/machines.php?err=Machine already exists.');
    } else {
        $insert = mysqli_query($mysqli, "INSERT INTO `machines` (`number`, `description`) 
    VALUES ('$_POST[machine_number]', '$_POST[machine_description]')");
        header('Location: ../modules/setup/machines.php');
    }
}
