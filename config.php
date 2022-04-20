<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
// $databasePassword = 'shafiq70393755';
$databaseName = '3ms';


// if (isset($_SESSION['db'])) {
//     $databaseName = $_SESSION['db'];
// }else {
//     echo 'NO DATABASE SELECTED';
// }

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

date_default_timezone_set("Asia/Beirut");


session_start();
// include 'log.php';
if (isset($_POST['username'])) {
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($mysqli, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($mysqli, $password);
  $query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
  $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
  $rows = mysqli_num_rows($result);
  if ($rows == 1) {
    $res = mysqli_fetch_array($result);
    $_SESSION['user_id'] = $res['id'];
    $_SESSION['username'] = $username;
    $_SESSION['user_type'] = $res['user_type'];
    // logsql('login', 0, $username, $res['user_type']);
    // header("Location: index.php");
    echo '<script> location.replace("index.php"); </script>';
  } else {
    echo '<script> location.replace("login.php?err=1"); </script>';

  }
}
