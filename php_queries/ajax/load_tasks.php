<?php
include '../../config.php';
if (isset($_POST['action']) && $_POST['action'] == 'get') {
    $open = '';
    $ip = '';
    $closed = '';




    $where = "WHERE `status` LIKE 'open'";
    if (isset($_POST['title'])) {
        $where .= " AND `title` LIKE '%$_POST[title]%'";
    }
    if (!empty($_POST['from']) && !empty($_POST['to'])) {
        $where .= " AND `due_date` BETWEEN '$_POST[from]' AND '$_POST[to]'";
    }
    $query = "SELECT * FROM `tasks` $where ORDER BY `id` DESC";
    $select = mysqli_query($mysqli, $query);
    while ($res = mysqli_fetch_array($select)) {
        $task_users = mysqli_query($mysqli, "SELECT * FROM `task_ass` WHERE `task_id` = '$res[id]'");
        $arr = '';

        $open .= '
        <div class="card my-3 taskcard" draggable="true" role="button" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] . '">
        <div class="card-body">
        <h4 class="card-title">' . $res['title'] . '</h4>
        <p class="card-text">' . $res['description'] . '</p>
        <div class="row">
        <div class="col text-end">
        <small class="w-100 text-end"><strong>Due Date: </strong>' . $res['due_date'] . '</small>
        </div>
        </div>
        <div class="row">
        <div class="col text-end">
        <small><strong>Assignee: </strong>
        ';
        while ($u = mysqli_fetch_array($task_users)) {
            $arr .= '"' . $u['user_id'] . '",';
            $get_users = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$u[user_id]'");
            $get_users = mysqli_fetch_assoc($get_users);
            $open .= '
            <span class="badge badge-danger">' . $get_users['username'] . '</span>';
        }
        $open .= '
        </small>
        </div>
        </div>
        </div>
        </div>
        ';


        $open .= '
         <div class="modal fade" id="edit_' . $res['id'] . '"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <div class="row w-100 m-0">
                    <div class="col">
                        <h4>
                            Edit Task
                        </h4>
                     </div>
                     <div class="col text-end">
                        <button type="button" class="btn btn-sm text-danger btn-light" data-bs-dismiss="modal" onclick="return confirm(\'Are you sure you want to delete? \')?deleteTask(\'' . $res['id'] . '\'):\'\';"><i class="fas fa-trash-alt"></i></button>
                     </div>
                </div>
                </div>
                <div class="modal-body">
                    <form class="form-inline" method="POST" autocomplete="off">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="form-group">
                            <label for="">Title *</label>
                            <input type="text" name="edit_title" value="' . $res['title'] . '" id="edit_title" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="edit_desc" id="edit_desc" cols="30" rows="7">' . $res['description'] . '</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Assign To *</label>
                            <select class="selectpicker w-100" data-live-search="true" name="edit_user" id="edit_user_' . $res['id'] . '" required multiple>';

        $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
        while ($r = mysqli_fetch_array($select_users)) {
            $open .= '<option value="' . $r['id'] . '">' . $r['username'] . '</option>';
        }

        $open .= '</select>
                        </div>
                        <div class="form-group">
                            <label for="">Due Date *</label>
                            <input type="date" class="form-control" name="edit_date" id="edit_date" value="' . $res['due_date'] . '" required>
                        </div>

                </div>
                <div class="modal-footer row">
                <div class="row">
                    <div class="col text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-auto">
                        <button id="' . $res['id'] . '" onclick="switchStat(this.id, \'done\')" class="btn btn-success btn-sm" href="#" role="button" data-bs-dismiss="modal">Done <i class="fas fa-check-double"></i></button>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2">
                        <button class="btn btn-warning btn-sm btn-block" id="' . $res['id'] . '" onclick="switchStat(this.id, \'inProgress\')" href="#" role="button" data-bs-dismiss="modal"><strong>In Progress <i class="fas fa-arrow-right"></i></strong></button>
                        </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    ';



        $open .= '
        <script>
        $(\'#edit_user_\'+' . $res['id'] . ').selectpicker(\'val\', [' . $arr . ']);
        </script>
        ';
    }








    $where = "WHERE `status` LIKE 'in progress'";
    if (isset($_POST['title'])) {
        $where .= " AND `title` LIKE '%$_POST[title]%'";
    }
    if (!empty($_POST['from']) && !empty($_POST['to'])) {
        $where .= " AND `due_date` BETWEEN '$_POST[from]' AND '$_POST[to]'";
    }
    $query = "SELECT * FROM `tasks` $where ORDER BY `id` DESC";
    $select = mysqli_query($mysqli, $query);
    while ($res = mysqli_fetch_array($select)) {
        $task_users = mysqli_query($mysqli, "SELECT * FROM `task_ass` WHERE `task_id` = '$res[id]'");
        $arr = '';

        $ip .= '
        <div class="card my-3 taskcard" draggable="true" role="button" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] . '">
        <div class="card-body">
        <h4 class="card-title">' . $res['title'] . '</h4>
        <p class="card-text">' . $res['description'] . '</p>
        <div class="row">
        <div class="col text-end">
        <small class="w-100 text-end"><strong>Due Date: </strong>' . $res['due_date'] . '</small>
        </div>
        </div>
        <div class="row">
        <div class="col text-end">
        <small><strong>Assignee: </strong>
        ';
        while ($u = mysqli_fetch_array($task_users)) {
            $arr .= '"' . $u['user_id'] . '",';
            $get_users = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$u[user_id]'");
            $get_users = mysqli_fetch_assoc($get_users);
            $ip .= '
            <span class="badge badge-danger">' . $get_users['username'] . '</span>';
        }
        $ip .= '
        </small>
        </div>
        </div>
        </div>
        </div>
        ';


        $ip .= '
         <div class="modal fade" id="edit_' . $res['id'] . '"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <div class="row w-100 m-0">
                    <div class="col">
                        <h4>
                            Edit Task
                        </h4>
                     </div>
                     <div class="col text-end">
                        <button type="button" class="btn btn-sm text-danger btn-light" data-bs-dismiss="modal" onclick="return confirm(\'Are you sure you want to delete? \')?deleteTask(\'' . $res['id'] . '\'):\'\';"><i class="fas fa-trash-alt"></i></button>
                     </div>
                </div>
                </div>
                <div class="modal-body">
                    <form class="form-inline" method="POST" autocomplete="off">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="form-group">
                            <label for="">Title *</label>
                            <input type="text" name="edit_title" value="' . $res['title'] . '" id="edit_title" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="edit_desc" id="edit_desc" cols="30" rows="7">' . $res['description'] . '</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Assign To *</label>
                            <select class="selectpicker w-100" data-live-search="true" name="edit_user" id="edit_user_' . $res['id'] . '" required multiple>';

        $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
        while ($r = mysqli_fetch_array($select_users)) {
            $ip .= '<option value="' . $r['id'] . '">' . $r['username'] . '</option>';
        }

        $ip .= '</select>
                        </div>
                        <div class="form-group">
                            <label for="">Due Date *</label>
                            <input type="date" class="form-control" name="edit_date" id="edit_date" value="' . $res['due_date'] . '" required>
                        </div>

                </div>
                <div class="modal-footer row">
                <div class="row">
                    <div class="col text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-auto">
                        <button id="' . $res['id'] . '" onclick="switchStat(this.id, \'open\')" class="btn btn-success btn-sm" href="#" role="button" data-bs-dismiss="modal"><i class="fas fa-arrow-left"></i> Open</button>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2">
                        <button class="btn btn-danger btn-sm btn-block" id="' . $res['id'] . '" onclick="switchStat(this.id, \'done\')" href="#" role="button" data-bs-dismiss="modal"><strong> Done <i class="fas fa-check-double"></i></strong></button>
                        </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    ';



        $ip .= '
        <script>
        $(\'#edit_user_\'+' . $res['id'] . ').selectpicker(\'val\', [' . $arr . ']);
        </script>
        ';
    }
















    $where = "WHERE `status` LIKE 'done'";
    if (isset($_POST['title'])) {
        $where .= " AND `title` LIKE '%$_POST[title]%'";
    }
    if (!empty($_POST['from']) && !empty($_POST['to'])) {
        $where .= " AND `due_date` BETWEEN '$_POST[from]' AND '$_POST[to]'";
    }
    $query = "SELECT * FROM `tasks` $where ORDER BY `id` DESC";
    $select = mysqli_query($mysqli, $query);
    while ($res = mysqli_fetch_array($select)) {
        $task_users = mysqli_query($mysqli, "SELECT * FROM `task_ass` WHERE `task_id` = '$res[id]'");
        $arr = '';

        $closed .= '
        <div class="card my-3 taskcard" draggable="true" role="button" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] . '">
        <div class="card-body">
        <h4 class="card-title">' . $res['title'] . '</h4>
        <p class="card-text">' . $res['description'] . '</p>
        <div class="row">
        <div class="col text-end">
        <small class="w-100 text-end"><strong>Due Date: </strong>' . $res['due_date'] . '</small>
        </div>
        </div>
        <div class="row">
        <div class="col text-end">
        <small><strong>Assignee: </strong>
        ';
        while ($u = mysqli_fetch_array($task_users)) {
            $arr .= '"' . $u['user_id'] . '",';
            $get_users = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$u[user_id]'");
            $get_users = mysqli_fetch_assoc($get_users);
            $closed .= '
            <span class="badge badge-danger">' . $get_users['username'] . '</span>';
        }
        $closed .= '
        </small>
        </div>
        </div>
        </div>
        </div>
        ';


        $closed .= '
         <div class="modal fade" id="edit_' . $res['id'] . '"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                <div class="row w-100 m-0">
                    <div class="col">
                        <h4>
                            Edit Task
                        </h4>
                     </div>
                     <div class="col text-end">
                        <button type="button" class="btn btn-sm text-danger btn-light" data-bs-dismiss="modal" onclick="return confirm(\'Are you sure you want to delete? \')?deleteTask(\'' . $res['id'] . '\'):\'\';"><i class="fas fa-trash-alt"></i></button>
                     </div>
                </div>
                </div>
                <div class="modal-body">
                    <form class="form-inline" method="POST" autocomplete="off">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="form-group">
                            <label for="">Title *</label>
                            <input type="text" name="edit_title" value="' . $res['title'] . '" id="edit_title" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="edit_desc" id="edit_desc" cols="30" rows="7">' . $res['description'] . '</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Assign To *</label>
                            <select class="selectpicker w-100" data-live-search="true" name="edit_user" id="edit_user_' . $res['id'] . '" required multiple>';

        $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
        while ($r = mysqli_fetch_array($select_users)) {
            $closed .= '<option value="' . $r['id'] . '">' . $r['username'] . '</option>';
        }

        $closed .= '</select>
                        </div>
                        <div class="form-group">
                            <label for="">Due Date *</label>
                            <input type="date" class="form-control" name="edit_date" id="edit_date" value="' . $res['due_date'] . '" required>
                        </div>

                </div>
                <div class="modal-footer row">
                <div class="row">
                    <div class="col text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-auto">
                        <button id="' . $res['id'] . '" onclick="switchStat(this.id, \'inProgress\')" class="btn btn-success btn-sm" href="#" role="button" data-bs-dismiss="modal"><i class="fas fa-arrow-left"></i> In Progress</button>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2">
                        <button class="btn btn-danger btn-sm btn-block" id="' . $res['id'] . '" onclick="switchStat(this.id, \'archive\')" href="#" role="button" data-bs-dismiss="modal"><strong>Archive <i class="fas fa-archive"></i></strong></button>
                        </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    ';



        $closed .= '
        <script>
        $(\'#edit_user_\'+' . $res['id'] . ').selectpicker(\'val\', [' . $arr . ']);
        </script>
        ';
    }











    $data = array($open, $ip, $closed);
    print_r(json_encode($data));
}



if (isset($_POST['action']) && $_POST['action'] == 'open') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'open' WHERE `id` = '$_POST[id]' ");
}

if (isset($_POST['action']) && $_POST['action'] == 'inProgress') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'in progress' WHERE `id` = '$_POST[id]' ");
}

if (isset($_POST['action']) && $_POST['action'] == 'done') {
    $date = date("Y-m-d");
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'done', `close_date` = '$date' WHERE `id` = '$_POST[id]' ");
}


if (isset($_POST['action']) && $_POST['action'] == 'archive') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'archive' WHERE `id` = '$_POST[id]' ");
}

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'deleted' WHERE `id` = '$_POST[id]' ");
}