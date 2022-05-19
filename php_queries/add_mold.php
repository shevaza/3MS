<?php
include '../config.php';
if (isset($_POST['mold_name'])) {
    $check = mysqli_query($mysqli, "SELECT `id` FROM `molds` WHERE `name` LIKE '$_POST[mold_name]'");
    if (mysqli_num_rows($check) > 0) {
        header('Location: ../modules/setup/molds.php?err=Machine already exists.');
    } else {
        $insert = mysqli_query($mysqli, "INSERT INTO `molds` (`name`, `description`) 
    VALUES ('$_POST[mold_name]', '$_POST[mold_description]')");

    $mold_id = mysqli_insert_id($mysqli);

        for ($i = 0; $i < count($_POST['m']); $i++) {
            $machine_id = $_POST['m'][$i];
            $insert = mysqli_query($mysqli, "INSERT INTO `machine_mold_comp` (`machine_id`, `mold_id`) 
              VALUES ('$machine_id', '$mold_id')");
        }

        header('Location: ../modules/setup/molds.php');
    }
}