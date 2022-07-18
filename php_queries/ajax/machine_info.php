<?php
include '../../config.php';
if (isset($_POST['action']) && $_POST['action'] == 'get') {
    $machine_log = mysqli_query($mysqli, "SELECT * FROM `machine_status` WHERE `machine_id` = '$_POST[id]' ");
    $r = '';
    while ($res = mysqli_fetch_assoc($machine_log)) {
        $get_id = mysqli_query($mysqli, "SELECT `number` FROM `machines` WHERE `id` = '$res[machine_id]'");
        $res1 = mysqli_fetch_array($get_id);

        $get_user = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$res[user_id]' ");
        $res2 = mysqli_fetch_array($get_user);

        $r .= '
        <tr>
        <td>' . $res1['number'] . '</td>
        <td>' . $res['datetime'] . '</td>
        <td>' . $res['power_on_time'] . ' hrs</td>
        <td>' . $res['oil_level'] . ' cm</td>
        <td>' . $res2['username'] . '</td>
        </tr>
        ';
    }

    print_r($r);
}


if (isset($_POST['action']) && $_POST['action'] == 'on') {
    $machine_log = mysqli_query($mysqli, "UPDATE `machines` SET `status` = '1' WHERE `id` = '$_POST[id]'");
}

if (isset($_POST['action']) && $_POST['action'] == 'off') {
    $machine_log = mysqli_query($mysqli, "UPDATE `machines` SET `status` = '0' WHERE `id` = '$_POST[id]'");
}

if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $query = mysqli_query($mysqli, "INSERT INTO `machine_status`
    (`machine_id`, `power_on_time`, `oil_level`, `user_id`)
    VALUES ('$_POST[id]', '$_POST[runtime]', '$_POST[oil]', '$_SESSION[user_id]')");
}
