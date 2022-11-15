<?php
include '../../config.php';
    $select = mysqli_query($mysqli, "SELECT
    maintenance_order.id,
    maintenance_order.title,
    maintenance_order.type,
    maintenance_order.description,
    maintenance_order.machine_id,
    molds.name,
    maintenance_order.start_time,
    maintenance_order.end_time,
    maintenance_log.diagnosis,
    users.username,
    maintenance_log.status
    FROM `maintenance_order`
    INNER JOIN `maintenance_log` ON maintenance_order.id = maintenance_log.order_id
    INNER JOIN `users` ON maintenance_order.super_user_id = users.id
    INNER JOIN `molds` ON maintenance_order.mold_id = molds.id
    ");
    $result = array();
    while($res=mysqli_fetch_array($select)){
        $result[] = $res;
    }
    echo (json_encode($result));