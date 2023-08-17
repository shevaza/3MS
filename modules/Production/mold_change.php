<?php
include '../../config.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <?php
    include '../../css.php';
    ?>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: 'fetchEvents.php',
                // selectable: true,
                // select: async function(start, end, allDay) {
                //     const {
                //         value: formValues
                //     } = await Swal.fire({
                //         title: 'Add Event',
                //         html: '<input id="swalEvtTitle" class="swal2-input form-control" placeholder="Enter title">' +
                //             '<textarea id="swalEvtDesc" class="swal2-input form-control" placeholder="Enter description"></textarea>' +
                //             '<input id="swalEvtURL" class="swal2-input form-control" placeholder="Enter URL">',
                //         focusConfirm: false,
                //         preConfirm: () => {
                //             return [
                //                 document.getElementById('swalEvtTitle').value,
                //                 document.getElementById('swalEvtDesc').value,
                //                 document.getElementById('swalEvtURL').value
                //             ]
                //         }
                //     });

                //     if (formValues) {
                //         // Add event
                //         fetch("eventHandler.php", {
                //                 method: "POST",
                //                 headers: {
                //                     "Content-Type": "application/json"
                //                 },
                //                 body: JSON.stringify({
                //                     request_type: 'addEvent',
                //                     start: start.startStr,
                //                     end: start.endStr,
                //                     event_data: formValues
                //                 }),
                //             })
                //             .then(response => response.json())
                //             .then(data => {
                //                 if (data.status == 1) {
                //                     Swal.fire('Event added successfully!', '', 'success');
                //                 } else {
                //                     Swal.fire(data.error, '', 'error');
                //                 }

                //                 // Refetch events from all sources and rerender
                //                 calendar.refetchEvents();
                //             })
                //             .catch(console.error);
                //     }
                // },
                eventClick: function(info) {
                    info.jsEvent.preventDefault();

                    // change the border color
                    info.el.style.borderColor = 'red';

                    Swal.fire({
                        title: info.event.title,
                        icon: 'info',
                        html: '<p>' + info.event.extendedProps.remarks + '</p><p>Remove Mold: ' + info.event.extendedProps.remove + '</p>' + '</p><p>Install Mold: ' + info.event.extendedProps.install + '</p> ',
                        showCloseButton: true,
                        showCancelButton: true,
                        showDenyButton: false,
                        cancelButtonText: 'Close',
                        confirmButtonText: 'Delete',
                        denyButtonText: 'Edit'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Delete event
                            fetch("eventHandler.php", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json"
                                    },
                                    body: JSON.stringify({
                                        request_type: 'deleteEvent',
                                        event_id: info.event.id
                                    }),
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.status == 1) {
                                        Swal.fire('Event deleted successfully!', '', 'success');
                                    } else {
                                        Swal.fire(data.error, '', 'error');
                                    }

                                    // Refetch events from all sources and rerender
                                    calendar.refetchEvents();
                                })
                                .catch(console.error);
                        } else if (result.isDenied) {
                            // Edit and update event
                            Swal.fire({
                                title: 'Edit Event',
                                html: '<input id="swalEvtTitle_edit" class="swal2-input" placeholder="Enter title" value="' + info.event.title + '">' +
                                    '<textarea id="swalEvtDesc_edit" class="swal2-input" placeholder="Enter description">' + info.event.extendedProps.description + '</textarea>' +
                                    '<input id="swalEvtURL_edit" class="swal2-input" placeholder="Enter URL" value="' + info.event.url + '">',
                                focusConfirm: false,
                                confirmButtonText: 'Submit',
                                preConfirm: () => {
                                    return [
                                        document.getElementById('swalEvtTitle_edit').value,
                                        document.getElementById('swalEvtDesc_edit').value,
                                        document.getElementById('swalEvtURL_edit').value
                                    ]
                                }
                            }).then((result) => {
                                if (result.value) {
                                    // Edit event
                                    fetch("eventHandler.php", {
                                            method: "POST",
                                            headers: {
                                                "Content-Type": "application/json"
                                            },
                                            body: JSON.stringify({
                                                request_type: 'editEvent',
                                                start: info.event.startStr,
                                                end: info.event.endStr,
                                                event_id: info.event.id,
                                                event_data: result.value
                                            })
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.status == 1) {
                                                Swal.fire('Event updated successfully!', '', 'success');
                                            } else {
                                                Swal.fire(data.error, '', 'error');
                                            }

                                            // Refetch events from all sources and rerender
                                            calendar.refetchEvents();
                                        })
                                        .catch(console.error);
                                }
                            });
                        } else {
                            Swal.close();
                        }
                    });
                }
            });

            calendar.render();
        });
    </script>
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i class="fas fa-arrow-left    "></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Mold change
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link diabled me-2 border-end border-dark border-2" aria-current="page" href="#">Welcome <span class="fw-bold text-black"><?php echo ucfirst($_SESSION['username']) ?></span></a>
                        <a class="nav-link active" aria-current="page" href="../dashboard.php">Dashboard</a>
                        <a class="nav-link" aria-current="page" href="../contacts.php">Users</a>
                        <a class="nav-link" aria-current="page" href="#">Settings</a>
                        <a class="nav-link" aria-current="page" href="login.php">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col col-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Mold Change Schedule</h4>
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <h4 class="card-title">Set New Date</h4>
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Install</label>
                                <select class="selectpicker w-100" data-style="btn btn-outline-danger" name="mold" id="mold" required data-live-search="true">
                                    <option disabled>Select Mold</option>
                                    <?php
                                    $select = mysqli_query($mysqli, "SELECT `id`,`name` FROM `molds`");
                                    while ($m = mysqli_fetch_array($select)) {
                                        echo '<option value="' . $m['id'] . '">' . $m['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Date</label>
                                <input type="date" name="start" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Remarks</label>
                                <textarea name="remarks" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include '../../js.php';
?>

</html>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $install = $_POST['mold'];
    $remarks = $_POST['remarks'];
    $start = $_POST['start'];
    $user = $_SESSION['user_id'];
    $insert = mysqli_query($mysqli, "INSERT INTO `mold_change` (`title`, `start`, `end`, `install`,`remarks`, `user`)
VALUES ('$title', '$start', '$start', '$install', '$remarks', '$user')");
}
?>