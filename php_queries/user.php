<?php
include '../config.php';

if (isset($_POST['add_user'])) {
$user = $_POST['new_username'];
$password = $_POST['password'];
$password = md5($password);
$email = $_POST['email'];
$phone = $_POST['phone'];
$extension = $_POST['extension'];
$address = $_POST['address'];
$department = $_POST['department'];
$position = $_POST['position'];
$type = $_POST['type'];
$module = $_POST['module'];

$insert = mysqli_query($mysqli, "INSERT INTO `users` (`username`, `password`, `email`, `phone`, `extension`, `address`, `department`, `position`, `type`)
VALUES ('$user', '$password', '$email', '$phone', '$extension', '$address', '$department', '$position', '$type')");

$new_user_id = mysqli_insert_id($mysqli);

for($i = 0; $i < count($module); $i++) {
    $insert_access = mysqli_query($mysqli, "INSERT INTO `user_access`(`user_id`, `module`) VALUES ('$new_user_id', '$module[$i]')");
}

header('location: ../modules/dashboard.php');

}


if (isset($_POST['delete_user'])) {
$delete = mysqli_query($mysqli, "DELETE FROM `users` WHERE `id` = '$_POST[delete_user]'");
    header('location: ../modules/dashboard.php');
}