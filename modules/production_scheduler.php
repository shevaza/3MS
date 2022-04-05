<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <link href='../calendar/lib/main.css' rel='stylesheet' />
    <script src='../calendar/lib/main.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');

            new Draggable(containerEl, {
                itemSelector: '.fc-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText
                    };
                }
            });
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                editable: true,
                droppable: true,
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                    // if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    // }
                },
                eventClick: function(info) {
                    alert('Event: ' + info.event.title);
                    alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                    alert('View: ' + info.view.type);

                    // change the border color just for fun
                    info.el.style.borderColor = 'red';
                }
            });
            calendar.render();
        });
    </script>
    <?php
    include '../css.php';
    ?>
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <img class="me-2" src="../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="dashboard.php">
                    Scheduler
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <ul class="navbar-nav ms-auto">
                        <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
                        <a class="nav-link" aria-current="page" href="#">Users</a>
                        <a class="nav-link" aria-current="page" href="#">Settings</a>
                        <a class="nav-link" aria-current="page" href="login.php">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col col-lg-3">
                <div id='external-events'>
                    <div class="card mb-2">
                        <div class="card-body p-2 text-center">
                            <strong>Production Orders</strong>
                        </div>
                    </div>
                    <div class="card p-2 mb-2">
                        <div class="card-title">
                            <h4>
                                Queen
                            </h4>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Queen Chair</div>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Pandora-Queen Interior Cap</div>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Pandora-Queen Exterior Cap</div>
                        </div>

                        <!-- <p>
                            <input type='checkbox' id='drop-remove' />
                            <label for='drop-remove'>remove after drop</label>
                        </p> -->
                    </div>
                    <div class="card p-2 mb-2">
                        <div class="card-title">
                            <h4>
                                Andora
                            </h4>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Andora وجه</div>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Aura - Andora ارجل</div>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Andora جسر</div>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Aura - Laura - Andora - Aurora برغي</div>
                        </div>

                        <!-- <p>
                            <input type='checkbox' id='drop-remove' />
                            <label for='drop-remove'>remove after drop</label>
                        </p> -->
                    </div>
                    <div class="card p-2 mb-2">
                        <div class="card-title">
                            <h4>
                                Bonita
                            </h4>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Bonita برميل</div>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Bonita غطا</div>
                        </div>
                        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event mb-2 p-1'>
                            <div class='fc-event-main'>Bonita خابور</div>
                        </div>

                        <!-- <p>
                            <input type='checkbox' id='drop-remove' />
                            <label for='drop-remove'>remove after drop</label>
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include '../js.php';
?>

</html>