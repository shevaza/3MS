<?php
include '../config.php';
if (isset($_POST['add'])) {
    $check = mysqli_query($mysqli, "SELECT `id` FROM `machines` WHERE `number` LIKE '$_POST[machine_number]'");
    if (mysqli_num_rows($check) > 0) {
        header('Location: ../modules/setup/machines.php?err=Machine already exists.');
    } else {
        $insert = mysqli_query($mysqli, "INSERT INTO `machines` (`number`, `description`) 
    VALUES ('$_POST[machine_number]', '$_POST[machine_description]')");
        header('Location: ../modules/setup/machines.php');
    }
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
