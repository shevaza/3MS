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
    $having = "";
    if (isset($_POST['user']) && $_POST['user'] != 'all') {
        $having .= "HAVING `users` LIKE '$_POST[user],%' OR  `users` LIKE '%, $_POST[user],%' OR  `users` LIKE '%, $_POST[user]' OR  `users` LIKE '$_POST[user]'";
    }
    $query = "SELECT tasks.*, GROUP_CONCAT(task_ass.user_id SEPARATOR ', ') AS `users` FROM `tasks` INNER JOIN `task_ass` on tasks.id = task_ass.task_id $where GROUP BY tasks.id $having ORDER BY `id` DESC";
    $select = mysqli_query($mysqli, $query);
    while ($res = mysqli_fetch_array($select)) {
        $task_users = mysqli_query($mysqli, "SELECT * FROM `task_ass` WHERE `task_id` = '$res[id]'");
        $arr = '';

        $open .= '
        <div class="card my-3 taskcard" draggable="true" role="button" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] . '">
        <div class="card-body">
        <div class="row">
            <div class="col">
            <h4 class="card-title">' . $res['title'] . '</h4>
            <p class="card-text">' . $res['description'] . '</p>
            </div>
            <div class="col text-end">
            <small class="w-100 text-end"><strong>Created By: </strong>
            ';
        $get_user = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$res[created_by]'");
        $get_user = mysqli_fetch_assoc($get_user);
        $open .= '
            <span class="badge badge-danger">' . $get_user['username'] . '</span>';
        $open .= '
            </small>
            </div>
        </div>
        <div class="row">';
        if ($res['due_date'] < date("Y-m-d")) {
            $open .= '
    <div class="col">
    <h3><span class="badge badge-danger">Overdue!</span></h3>
    </div>
    ';
        }

        $open .= '
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


        $open .=
            '<div class="modal fade" id="edit_' . $res['id'] . '" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <div class="row w-100 m-0">
                    <div class="col">
                        <h4>
                            Edit Task
                        </h4>
                    </div>
                    <div class="col text-end">
                        <button type="button" class="btn btn-sm btn-outline-light" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form class="form-inline" method="POST" autocomplete="off">
                            <input type="hidden" name="edit_id" id="edit_id" value="'.$res['id'].'">
                            <div class="form-group">
                                <label for="">Title *</label>
                                <input type="text" name="edit_title" value="' . $res['title'] . '" id="edit_title" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="edit_desc" id="edit_desc" cols="30" rows="4">' . $res['description'] . '</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Assign To *</label>
                                <select class="selectpicker w-100" data-live-search="true" name="edit_user" id="edit_user_' . $res['id'] . '" required multiple>';

        $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
        while ($r = mysqli_fetch_array($select_users)) {
            $open .= '<option value="' . $r['id'] . '">' . $r['first_name'] . ' ' . $r['last_name'] . '</option>';
        }

        $open .= '</select>
                            </div>
                            <div class="form-group">
                                <label for="">Due Date *</label>
                                <input type="date" class="form-control" name="edit_date" id="edit_date" value="' . $res['due_date'] . '" required>
                            </div>
                            <div class="form-group row mt-4 m-1">
                            <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                            </div>

                    </div>

                    <div class="col p-3 mb-2 border-2 border style=" overflow-y:scrollable">
                        ';
        $select_comments = mysqli_query($mysqli, "SELECT *, users.username FROM `task_comments` INNER JOIN `users` ON task_comments.user_id = users.id WHERE `task_id` = '$res[id]' ");
        while ($c = mysqli_fetch_array($select_comments)) {
            $open .= '
                        <div class="card my-2">
                            <div class="row p-1">
                                <div class="col">
                                    <strong>' . $c['username'] . ': </strong>
                                    ' . $c['comment'] . '
                                </div>
                                <div class="col-auto"><small>' . $c['comment_date'] . '</small></div>
                            </div>
                        </div>
                        ';
        }
        $open .= '
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-6 m-0 p-0">
                        <div class="input-group">
                            <input class="form-control" type="text" name="" id="comment_' . $res['id'] . '" placeholder="Comment..">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="addComment(\'' . $res['id'] . '\', document.getElementById(\'comment_' . $res['id'] . '\').value)"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

            </div>
                <div class="modal-footer d-block">
                <div class="row">
                <div class="col">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal" onclick="return confirm(\'Are you sure you want to delete? \')?deleteTask(\'' . $res['id'] . '\'):\'\';"><i class="fas fa-trash-alt"></i></button>
                </div>
                    <div class="col text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-auto">
                        <button id="' . $res['id'] . '" onclick="switchStat(this.id, \'done\')" class="btn btn-success btn-sm" href="#" role="button" data-bs-dismiss="modal">Done <i class="fas fa-check-double"></i></button>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2">
                        <button class="btn btn-warning btn-sm btn-block" id="' . $res['id'] . '" onclick="switchStat(this.id, \'inProgress\')" href="#" role="button" data-bs-dismiss="modal"><strong>In Progress <i class="fas fa-arrow-right"></i></strong></button>
                        </div>
                        </div>
                        </div>
                        </form>
                </div>
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
    $having = "";
    if (isset($_POST['user']) && $_POST['user'] != 'all') {
        $having .= "HAVING `users` LIKE '$_POST[user],%' OR  `users` LIKE '%, $_POST[user],%' OR  `users` LIKE '%, $_POST[user]' OR  `users` LIKE '$_POST[user]'";
    }
    $query = "SELECT tasks.*, GROUP_CONCAT(task_ass.user_id SEPARATOR ', ') AS `users` FROM `tasks` INNER JOIN `task_ass` on tasks.id = task_ass.task_id $where GROUP BY tasks.id $having ORDER BY `id` DESC";
    $select = mysqli_query($mysqli, $query);
    while ($res = mysqli_fetch_array($select)) {
        $task_users = mysqli_query($mysqli, "SELECT * FROM `task_ass` WHERE `task_id` = '$res[id]'");
        $arr = '';

        $ip .= '
        <div class="card my-3 taskcard" draggable="true" role="button" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] . '">
        <div class="card-body">
        <div class="row">
            <div class="col">
            <h4 class="card-title">' . $res['title'] . '</h4>
            <p class="card-text">' . $res['description'] . '</p>
            </div>
            <div class="col text-end">
            <small class="w-100 text-end"><strong>Created By: </strong>
            ';
        $get_user = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$res[created_by]'");
        $get_user = mysqli_fetch_assoc($get_user);
        $ip .= '
            <span class="badge badge-danger">' . $get_user['username'] . '</span>';
        $ip .= '
            </small>
            </div>
        </div>
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
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <div class="row w-100 m-0">
                    <div class="col">
                        <h4>
                            Edit Task
                        </h4>
                     </div>
                     <div class="col text-end">
                        <button type="button" class="btn btn-sm btn-outline-light" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                     </div>
                </div>
                </div>
                <div class="modal-body">
                <div class="row">
                <div class="col">
                    <form class="form-inline" method="POST" autocomplete="off">
                    <input type="hidden" name="edit_id" id="edit_id" value="' . $res['id'] . '">
                        <div class="form-group">
                            <label for="">Title *</label>
                            <input type="text" name="edit_title" value="' . $res['title'] . '" id="edit_title" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="edit_desc" id="edit_desc" cols="30" rows="4">' . $res['description'] . '</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Assign To *</label>
                            <select class="selectpicker w-100" data-live-search="true" name="edit_user" id="edit_user_' . $res['id'] . '" required multiple>';

        $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
        while ($r = mysqli_fetch_array($select_users)) {
            $ip .= '<option value="' . $r['id'] . '">' . $r['first_name'] . ' ' . $r['last_name'] . '</option>';
        }

        $ip .= '</select>
                        </div>
                        <div class="form-group">
                            <label for="">Due Date *</label>
                            <input type="date" class="form-control" name="edit_date" id="edit_date" value="' . $res['due_date'] . '" required>
                        </div>
  <div class="form-group row mt-4 m-1">
                            <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                            </div>

                        </div>

                        <div class="col p-3 mb-2 border-2 border style="overflow-y:scrollable">
                        ';
        $select_comments = mysqli_query($mysqli, "SELECT *, users.username FROM `task_comments` INNER JOIN `users` ON task_comments.user_id = users.id WHERE `task_id` = '$res[id]' ");
        while ($c = mysqli_fetch_array($select_comments)) {
            $ip .= '
                            <div class="card my-2">
                            <div class="row p-1">
                            <div class="col">
                            <strong>' . $c['username'] . ': </strong>
                            ' . $c['comment'] . '
                            </div>
                            <div class="col-auto"><small>' . $c['comment_date'] . '</small></div>
                            </div>
                            </div>
                            ';
        }
        $ip .= '
                        </div>
                        </div>
                        <div class="row justify-content-end">
                        <div class="col-6 m-0 p-0">
                        <div class="input-group">
                            <input class="form-control" type="text" name="" id="comment_' . $res['id'] . '" placeholder="Comment..">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="addComment(\'' . $res['id'] . '\', document.getElementById(\'comment_' . $res['id'] . '\').value)"><i class="fas fa-arrow-right"></i></button>
                        </div>
                        </div>
                        </div>

                </div>
                <div class="modal-footer d-block">
                <div class="row">
                <div class="col">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal" onclick="return confirm(\'Are you sure you want to delete? \')?deleteTask(\'' . $res['id'] . '\'):\'\';"><i class="fas fa-trash-alt"></i></button>
                </div>
                    <div class="col text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                    </div>
                </div>
                <div class="row mt-4">
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
    $having = "";
    if (isset($_POST['user']) && $_POST['user'] != 'all') {
        $having .= "HAVING `users` LIKE '$_POST[user],%' OR  `users` LIKE '%, $_POST[user],%' OR  `users` LIKE '%, $_POST[user]' OR  `users` LIKE '$_POST[user]'";
    }
    $query = "SELECT tasks.*, GROUP_CONCAT(task_ass.user_id SEPARATOR ', ') AS `users` FROM `tasks` INNER JOIN `task_ass` on tasks.id = task_ass.task_id $where GROUP BY tasks.id $having ORDER BY `id` DESC";
    $select = mysqli_query($mysqli, $query);
    while ($res = mysqli_fetch_array($select)) {
        $task_users = mysqli_query($mysqli, "SELECT * FROM `task_ass` WHERE `task_id` = '$res[id]'");
        $arr = '';

        $closed .= '
        <div class="card my-3 taskcard" draggable="true" role="button" data-bs-toggle="modal" data-bs-target="#edit_' . $res['id'] .
            '">
        <div class="card-body">
       <div class="row">
            <div class="col">
            <h4 class="card-title">' . $res['title'] . '</h4>
            <p class="card-text">' . $res['description'] . '</p>
            </div>
            <div class="col text-end">
            <small class="w-100 text-end"><strong>Created By: </strong>
            ';
        $get_user = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$res[created_by]'");
        $get_user = mysqli_fetch_assoc($get_user);
        $closed .= '
            <span class="badge badge-danger">' . $get_user['username'] . '</span>';
        $closed .= '
            </small>
            </div>
        </div>
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


        $closed .=
            '
         <div class="modal fade" id="edit_' . $res['id'] . '" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <div class="row w-100 m-0">
                    <div class="col">
                        <h4>
                            Edit Task
                        </h4>
                    </div>
                    <div class="col text-end">
                        <button type="button" class="btn btn-sm btn-outline-light" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form class="form-inline" method="POST" autocomplete="off">
                        <input type="hidden" name="edit_id" id="edit_id" value="' . $res['id'] . '">

                            <div class="form-group">
                                <label for="">Title *</label>
                                <input type="text" name="edit_title" value="' . $res['title'] . '" id="edit_title" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea class="form-control" name="edit_desc" id="edit_desc" cols="30" rows="4">' . $res['description'] . '</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Assign To *</label>
                                <select class="selectpicker w-100" data-live-search="true" name="edit_user" id="edit_user_' . $res['id'] . '" required multiple>';

        $select_users = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `department` LIKE 'Maintenance'");
        while ($r = mysqli_fetch_array($select_users)) {
            $closed .= '<option value="' . $r['id'] . '">' . $r['first_name'] . ' ' . $r['last_name'] . '</option>';
        }

        $closed .= '</select>
                            </div>
                            <div class="form-group">
                                <label for="">Due Date *</label>
                                <input type="date" class="form-control" name="edit_date" id="edit_date" value="' . $res['due_date'] . '" required>
                            </div>
  <div class="form-group row mt-4 m-1">
                            <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                            </div>

                    </div>

                    <div class="col p-3 mb-2 border-2 border style=" overflow-y:scrollable">
                        ';
        $select_comments = mysqli_query($mysqli, "SELECT *, users.username FROM `task_comments` INNER JOIN `users` ON task_comments.user_id = users.id WHERE `task_id` = '$res[id]' ");
        while ($c = mysqli_fetch_array($select_comments)) {
            $closed .= '
                        <div class="card my-2">
                            <div class="row p-1">
                                <div class="col">
                                    <strong>' . $c['username'] . ': </strong>
                                    ' . $c['comment'] . '
                                </div>
                                <div class="col-auto"><small>' . $c['comment_date'] . '</small></div>
                            </div>
                        </div>
                        ';
        }
        $closed .= '
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-6 m-0 p-0">
                        <div class="input-group">
                            <input class="form-control" type="text" name="" id="comment_' . $res['id'] . '" placeholder="Comment..">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="addComment(\'' . $res['id'] . '\', document.getElementById(\'comment_' . $res['id'] . '\').value)"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

            </div>
                <div class="modal-footer d-block">
                <div class="row">
                <div class="col">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal" onclick="return confirm(\'Are you sure you want to delete? \')?deleteTask(\'' . $res['id'] . '\'):\'\';"><i class="fas fa-trash-alt"></i></button>
                </div>
                    <div class="col text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="edit" class="btn btn-danger"><i class="fas fa-pen"></i> Edit</button>
                    </div>
                </div>
                <div class="row mt-4">
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


$date = date("Y-m-d H:i:s");


if (isset($_POST['action']) && $_POST['action'] == 'open') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'open' WHERE `id` = '$_POST[id]' ");
}

if (isset($_POST['action']) && $_POST['action'] == 'inProgress') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'in progress' , `ip_date` = '$date' WHERE `id` = '$_POST[id]' ");
}

if (isset($_POST['action']) && $_POST['action'] == 'done') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'done', `close_date` = '$date' WHERE `id` = '$_POST[id]' ");
}


if (isset($_POST['action']) && $_POST['action'] == 'archive') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'archive', `close_date` = '$date' WHERE `id` = '$_POST[id]' ");
}

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $update = mysqli_query($mysqli, "UPDATE `tasks` SET `status` = 'deleted', `close_date` = '$date' WHERE `id` = '$_POST[id]' ");
}

if (isset($_POST['action']) && $_POST['action'] == 'comment') {
    $insert = mysqli_query($mysqli, "INSERT INTO `task_comments` (`task_id`, `comment`, `user_id`)
    VALUES ('$_POST[id]', '$_POST[comment]', '$_SESSION[user_id]') ");
}
