<?php
include '../config.php';

if (isset($_POST['add_component'])) {
    // $parent_id = $_POST['parent_id'];
    $child_name = $_POST['child_name'];
    // $child_qty = $_POST['child_qty'];
    $comp_mold = $_POST['comp_mold'];



    $check = mysqli_query($mysqli, "SELECT `id` FROM `components` WHERE `name` LIKE '$child_name'");
    if (mysqli_num_rows($check) > 0) {
        header('location: ../modules/Setup/items.php?err=itemfound');
    } else {
        $insert = mysqli_query($mysqli, "INSERT INTO `components` (`name`, `comp_mold`) VALUES ('$child_name', '$comp_mold')");
        // $child_id = mysqli_insert_id($mysqli);
        // $insert = mysqli_query($mysqli, "INSERT INTO `item_formula` (`item_id`, `component_id`, `qty`)
        // VALUES ('$parent_id', '$child_id', '$child_qty')");
        header('location: ../modules/Setup/items.php');
    }
}
