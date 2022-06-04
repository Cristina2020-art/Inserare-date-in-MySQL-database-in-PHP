<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Aplicatie cu Bootstrap</title>
  </head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Inserare date in Database in php</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" required placeholder="Enter your Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" required placeholder="Enter your Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" required placeholder="Enter your Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="">Designation</label>
                                        <input type="text" name="designation" class="form-control" required placeholder="Enter your Designation">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" name="insert_data" class="btn btn-primary">SAVE DATA</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>