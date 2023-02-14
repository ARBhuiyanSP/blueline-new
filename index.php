<?php
session_start();
include 'connection/connect.php';
include 'function/login_process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BLC Dashboard | SPL GROUP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-purple">
    <div class="card-header text-center">
      <!--- <a class="h1"><b>Blueline</b></br>Communication</a> --->
	  <img src="images/blc-logo.png" height="70px" />
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
                            <div class="form-group has-feedback">
                                <input type="text" name="email" class="form-control" placeholder="User Name">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                <?php if (isset($_SESSION['error_message']['email_empty']) && !empty($_SESSION['error_message']['email_empty'])) { ?>
                                    <div class="text-danger">
                                        <strong>Warning!</strong> <?php echo $_SESSION['error_message']['email_empty']; ?>
                                    </div>
                                    <?php
                                    unset($_SESSION['error_message']['email_empty']);
                                }
                                ?>
                                <?php if (isset($_SESSION['error_message']['email_valid']) && !empty($_SESSION['error_message']['email_valid'])) { ?>
                                    <div class="text-danger">
                                        <strong>Warning!</strong> <?php echo $_SESSION['error_message']['email_valid']; ?>
                                    </div>
                                    <?php
                                    unset($_SESSION['error_message']['email_valid']);
                                }
                                ?>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                <?php if (isset($_SESSION['error_message']['password_empty']) && !empty($_SESSION['error_message']['password_empty'])) { ?>
                                    <div class="text-danger">
                                        <strong>Warning!</strong> <?php echo $_SESSION['error_message']['password_empty']; ?>
                                    </div>
                                    <?php
                                    unset($_SESSION['error_message']['password_empty']);
                                }
                                ?>
                            </div>
							<div class="row">
								  <div class="col-8">
									<div class="icheck-purple">
									  <input type="checkbox" id="remember">
									  <label for="remember">
										Remember Me
									  </label>
									</div>
								  </div>
								  <!-- /.col -->
								  <div class="col-4">
									
								  </div>
								  <!-- /.col -->
								</div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" name="login_submit" class="btn btn-block btn-purple" value="Login">
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
						
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
