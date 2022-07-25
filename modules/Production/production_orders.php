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
</head>

<body>
    <div class="container-flex">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a name="" id="" class="btn btn-sm btn-dark me-4" href="../" role="button"><i class="fas fa-arrow-left    "></i></a>
                <img class="me-2" src="../../res/img/logo.png" alt="" width="60">
                <a class="navbar-brand" href="#">
                    Production Orders
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
            <div class="col col-lg-3">
                <div id='pending-orders'>
                    <div class="card mb-2">
                        <div class="card-body p-2 text-center">
                            <strong>Pending Production Orders</strong>
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

                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            New Order
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label for="">Item</label>
                            <select class="form-control selectpicker" name="item" id="item" data-live-search="true">
                                <option disabled selected>Select Item</option>
                                <option>Item 1</option>
                                <option>Item 2</option>
                                <option>Item 3</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Colors</label>
                            <select class="form-control selectpicker" onchange="checkColors()" name="color" id="color" data-live-search="true" multiple>
                                <option value="1">Black</option>
                                <option value="2">White</option>
                                <option value="3">Dark Brown</option>
                            </select>
                        </div>
                        <div id="colorQty">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include '../../js.php';
?>
<script>
    function checkColors() {
        $('#colorQty').html('');
        var colors = $('#color option:selected');
        for (let index = 0; index < colors.length; index++) {
            var color = colors[index].innerHTML;
            var color_code = colors[index].value;
            var row = '<div class="row py-3 border-1 border-bottom"><div class="col">' + color_code + '</div><div class="col col-3"><input class="form-control" name="' + color_code + '_qty" placeholder="Quantity" type="number" required min="0" value="0"></div><div class="col-auto">Pcs</div></div>';
            $('#colorQty').append(row);
        }
    }
</script>

</html>