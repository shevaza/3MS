 <?php
    include '../../config.php';
    $result = '';
    $select_main = mysqli_query($mysqli, "SELECT * FROM `maintenance_order` WHERE `type` LIKE 'preventative'");
    while ($m = mysqli_fetch_array($select_main)) {
        $select_log = mysqli_query($mysqli, "SELECT * FROM `maintenance_log` WHERE `order_id` LIKE '$m[id]' ORDER BY `date` DESC Limit 1");
        if ($l = mysqli_fetch_array($select_log)) {
            $last_log = $l['date'];
        } else {
            $last_log = time();
        }
        $hrs = $_POST['hrs'];
        $now = time();
        if ((($now - strtotime($last_log)) / 3600) + $hrs >= ($m['repeat_hrs'])) {
            $result .= '
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-bs-toggle="modal" data-bs-target="#fill_' . $m['id'] . '">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">' . $m['description'] . '</h5>
                                        <small>Due in ' . ceil($m['repeat_hrs'] - (($now - strtotime($last_log)) / 3600)) . ' Hrs</small>
                                    </div>
                                    <p class="mb-1">Machine: ' . $m['machine_id'] . '</p>
                                    ';
            $mau = mysqli_query($mysqli, "SELECT `username` FROM `users` WHERE `id` = '$m[ass_user_id]'");
            while ($a = mysqli_fetch_array($mau)) {
                $result .= '
                                        <small>' . strtoupper($a['username']) . '</small>
                                    ';
            }
            $result .= '
                                </a>



                                 <div class="modal fade" id="fill_' . $m['id'] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <form method="POST">
                    <input type="hidden" name="order_id" value="' . $m['id'] . '">
                    <input type="hidden" name="user_id" value="' . $_SESSION['user_id'] . '">
                     <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Order #' . $m['id'] . '</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                     <div class="modal-body">
                     <div class="form-group mt-3">
                        <label for="">Title</label>
                        <input type="text" value="' . $m['description'] . '" name="title" id="date" class="form-control" disabled aria-describedby="helpId">
                        </div>

                          <div class="form-group mt-3">
                        <label for="">Diagnosis</label>
                        <input type="text" name="diagnosis" id="diagnosis" class="form-control"  aria-describedby="helpId">
                        </div>

                        <div class="row">
                        <div class="col">
                        <div class="form-group mt-3">
                      <label for="">Start</label>
                      <input type="datetime-local" name="start" id="start" class="form-control"  aria-describedby="helpId">
                      </div>
                        </div>
                        <div class="col">
                            <div class="form-group mt-3">
                            <label for="">End</label>
                            <input type="datetime-local" name="end" id="end" class="form-control"  aria-describedby="helpId">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                         <div class="form-group mt-3">
                            <label for="">Status</label>
                            <select name="status" class="form-control">
                            <option>Done</option>
                            <option>Postponed</option>
                            <option>Canceled</option>
                            </select>
                            </div>
                        </div>
                        </div>

                     </div>
                        <div class="modal-footer">
                        <input name="done" id="done" class="btn btn-primary" type="submit" value="done">
                        </div>
                        </form>
                    </div>
                    </div>
                    </div>
                                ';
        }
    }
    print_r($result);
    ?>
   