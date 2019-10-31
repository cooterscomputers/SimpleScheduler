<?php

$full_name = isset($_SESSION['response']->data->full_name)?$_SESSION['response']->data->full_name:'';
$email = isset($_SESSION['response']->data->email)?$_SESSION['response']->data->email:'';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SimpleScheduler | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="<?php echo base_url(); ?>"><b>Simple</b>Scheduler</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>

      <?php echo form_open(base_url().'index.php/register/validate'); ?>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Full Name" name="full_name" value="<?php echo $full_name; ?>" >
          <?php if(isset($_SESSION['response']->data->first_name_check)){ ?>
          <span class="text-red glyphicon glyphicon-user form-control-feedback"></span>
          <?php }elseif(isset($_SESSION['response']->data->last_name_check)){ ?>
          <span class="text-red glyphicon glyphicon-user form-control-feedback"></span>
          <?php }else{ ?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <?php } ?>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" >
          <?php if(isset($_SESSION['response']->data->email_check)){ ?>
          <span class="text-red glyphicon glyphicon-envelope form-control-feedback"></span>
          <?php }else{ ?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <?php } ?>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <?php if(isset($_SESSION['response']->data->password_check)){ ?>
          <span class="text-red glyphicon glyphicon-lock form-control-feedback"></span>
          <?php }else{ ?>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?php } ?>
          <span class="text-blue">Must be at least 6 characters, one upper case, one lower case, one special character and one number</span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Retype password" name="password_again">
          <?php if(isset($_SESSION['response']->data->password_again_check)){ ?>
          <span class="text-red glyphicon glyphicon-log-in form-control-feedback"></span>
          <?php }else{ ?>
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          <?php } ?>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="agree"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

<!-- jQuery 3 -->
<script src="/assets/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/assets/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/assets/AdminLTE-2.4.5/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
