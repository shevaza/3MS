<?php
include '../../config.php';
if ($_POST['action'] == 'get') {
    $data = array();
    $select = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'maintenance'");
    while ($u = mysqli_fetch_array($select)) {
        $select_tasks = mysqli_query($mysqli, "SELECT * FROM tasks INNER JOIN task_ass
    ON tasks.id = task_ass.task_id
    WHERE task_ass.user_id = '$u[id]'");
        $all_tasks = mysqli_num_rows($select_tasks);
        $select_tasks = mysqli_query($mysqli, "SELECT * FROM tasks INNER JOIN task_ass
    ON tasks.id = task_ass.task_id
    WHERE task_ass.user_id = '$u[id]' AND tasks.status LIKE 'done'");
        $done_tasks = mysqli_num_rows($select_tasks);

        $user = array($u['username'], $all_tasks, $done_tasks);
        array_push($data, $user);
    }
    print_r(json_encode($data));
}
