<?php
include '../config.php';

if (isset($_POST['add_item'])) {
    $parent_sku = $_POST['parent_sku'];
    $parent_name = $_POST['parent_name'];
    $parent_desc_eng = $_POST['parent_desc_eng'];
    $parent_desc_ar = $_POST['parent_desc_ar'];
    $parent_barcode = $_POST['parent_barcode'];


    $check = mysqli_query($mysqli, "SELECT `id` FROM `items` WHERE `sku_code` LIKE '$parent_sku' OR `barcode` LIKE '$parent_barcode'");
    if (mysqli_num_rows($check) > 0) {
        header('location: ../modules/Setup/items.php?err=itemfound');
    }else {       
        $insert = mysqli_query($mysqli, "INSERT INTO `items` (`sku_code`, `name`, `description_en`, `description_ar`, `barcode`)
VALUES ('$parent_sku','$parent_name','$parent_desc_eng','$parent_desc_ar','$parent_barcode')");
    header('location: ../modules/Setup/items.php');
}
}
