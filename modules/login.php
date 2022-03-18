<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3MPlast</title>
    <?php
    include '../css.php';
    ?>
</head>

<body style="background-image: url('../res/img/bg.jpg') !important">
    <div class="container" style="margin-top:8%">
        <div class="row justify-content-center">
            <div class="col col-lg-9 col-md-12 col-sm-12">
                <div class="box card p-2">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center mb-3">
                                <div class="col text-center">
                                    <img src="../res/img/logo.png" alt="" width="100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3 border-end border-danger">
                                    <img class="img-fluid" src="https://scontent.fbey7-1.fna.fbcdn.net/v/t31.18172-8/1291468_629393823781169_1550207425_o.jpg?_nc_cat=104&ccb=1-5&_nc_sid=19026a&_nc_ohc=UIf5CkCP-fcAX_wwSn6&_nc_ht=scontent.fbey7-1.fna&oh=00_AT8V3tyxT1eJP8wiHMWvISgOlX1bOzOQbqTOSb02QRAjjg&oe=6259A4E6" alt="">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h4 class="text-center">Login</h4>
                                    <div class="mb-1">
                                        <label for="" class="form-label"></label>
                                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Username</small>
                                    </div>
                                    <div class="mb-1">
                                        <label for="" class="form-label"></label>
                                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Password</small>
                                    </div>
                                    <div class="d-grid">
                                        <a href="dashboard.php">
                                            <button type="button" class="btn btn-danger btn-block mt-2">Login</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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