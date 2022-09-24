<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
// $databasePassword = 'shafiq70393755';
$databaseName = '3ms';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

date_default_timezone_set("Asia/Beirut");


session_start();

if (isset($_POST['username'])) {
  $username = $_REQUEST['username'];
  $password = md5($_REQUEST['password']);

  $query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
  $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
  $rows = mysqli_num_rows($result);
  if ($rows == 1) {
    $res = mysqli_fetch_array($result);
    $_SESSION['user_id'] = $res['id'];
    $_SESSION['username'] = $username;
    $_SESSION['first_name'] = $res['first_name'];
    $_SESSION['last_name'] = $res['last_name'];
    $_SESSION['department'] = $res['department'];
    $_SESSION['position'] = $res['position'];
    $_SESSION['user_type'] = $res['type'];
    if ($res['type'] != 'super admin') {
      $_SESSION['modules'] = array();
      $select_modules = mysqli_query($mysqli, "SELECT * FROM `user_access` WHERE `user_id` = '$res[id]'");
      while ($mod = mysqli_fetch_array($select_modules)) {
        array_push($_SESSION['modules'], $mod['module']);
      }
    }

    
    $query2 = "UPDATE `users` SET `online` = '1' WHERE `id` = '$res[id]'";
    $result2 = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));
    echo '<script> location.replace("index.php"); </script>';
  } else {
    echo '<script> location.replace("modules/login.php?err=1"); </script>';
  }
}
