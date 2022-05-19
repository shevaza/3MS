<?php
include '../config.php';
if (isset($_POST['edit'])) {
    $check = mysqli_query($mysqli, "SELECT * FROM `molds` WHERE `name` LIKE '$_POST[mold_name]'");
    $res = mysqli_fetch_array($check);
    if (mysqli_num_rows($check) > 0 && $res['id'] != $_POST['edit']) {
        header('Location: ../modules/setup/molds.php?err=Mold already exists.');
    } else {
        // MOLD
        $update = mysqli_query($mysqli, "UPDATE `molds` SET `name` = '$_POST[mold_name]', `description` = '$_POST[mold_description]'
        WHERE `id` = '$_POST[edit]'");

        // COMP
        $delete = mysqli_query($mysqli, "DELETE FROM `machine_mold_comp` WHERE `mold_id` = '$_POST[edit]'");
        for ($i=0; $i < count($_POST['machines']); $i++) {
            $machine_id = $_POST['machines'][$i];
            $insert = mysqli_query($mysqli, " INSERT INTO `machine_mold_comp` (`machine_id`, `mold_id`) VALUES ('$machine_id', '$_POST[edit]')");
        }


        header('Location: ../modules/setup/molds.php');
    }
}

if (isset($_POST['delete'])) {
    $delete = mysqli_query($mysqli, "DELETE FROM `molds` WHERE `id` LIKE '$_POST[delete]'");
    header('Location: ../modules/setup/molds.php');
}

if (isset($_POST['delete_machine'])) {
    $delete = mysqli_query($mysqli, "DELETE FROM `machine_mold_comp` WHERE `id` LIKE '$_POST[delete_machine]'");
    header('Location: ../modules/setup/molds.php');
}
