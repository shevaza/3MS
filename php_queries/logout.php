<?php
include '../config.php';
$query2 = "UPDATE `users` SET `online` = '0' WHERE `id` = '$_SESSION[user_id]'";
$result2 = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));
if(session_destroy())
{
header("Location: ../modules/login.php");
}?>
