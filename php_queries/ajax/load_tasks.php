<?php
include '../../config.php';
if (isset($_POST['action']) && $_POST['action'] == 'get') {
    $open = '';
    $ip = '';
    $closed = '';

    $select = mysqli_query($mysqli, "SELECT * FROM `tasks` WHERE `status` LIKE 'open'");
    while ($res = mysqli_fetch_array($select)) {
        $open .= '
        <div class="card my-3 taskcard" draggable="true" role="button" data-bs-toggle="modal" onclick="EditParams(\''.$res['id']. '\', \''.$res['title']. '\',\''.$res['description']. '\',\''.$res['due_date']. '\',\''.$res['status']. '\',\''.$res['user']. '\')" data-bs-target="#edit">
        <div class="card-body">
        <h4 class="card-title">' . $res['title'] . '</h4>
        <p class="card-text">' . $res['description'] . '</p>
                <div class="row text-end">
                    <div class="col">
                    <small class="w-100 text-end"><strong>Due Date: </strong>' . $res['due_date'] . '</small>
                    </div>
                </div>
                <div class="row text-end">
                    <div class="col">
                    <small class="w-100 text-end"><strong>Assignee: </strong>' . $res['user'] . '</small>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    $select = mysqli_query($mysqli, "SELECT * FROM `tasks` WHERE `status` LIKE 'in progress'");
    while ($res = mysqli_fetch_array($select)) {
        $ip .=
            '
        <div class="card my-3 taskcard">
        <div class="card-body">
        <h4 class="card-title">' . $res['title'] . '</h4>
        <p class="card-text">' . $res['description'] . '</p>
                <div class="row text-end">
                    <div class="col">
                    <small class="w-100 text-end"><strong>Due Date: </strong>' . $res['due_date'] . '</small>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    $select = mysqli_query($mysqli, "SELECT * FROM `tasks` WHERE `status` LIKE 'done'");
    while ($res = mysqli_fetch_array($select)) {
        $closed .=
            '
        <div class="card my-3 taskcard">
        <div class="card-body">
        <h4 class="card-title">' . $res['title'] . '</h4>
        <p class="card-text">' . $res['description'] . '</p>
                <div class="row text-end">
                    <div class="col">
                    <small class="w-100 text-end"><strong>Due Date: </strong>' . $res['due_date'] . '</small>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
    $data = array($open, $ip, $closed);
    print_r(json_encode($data));
}
