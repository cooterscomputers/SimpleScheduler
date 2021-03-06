<?php

if(isset($_SESSION['error']) && $_SESSION['error'] == TRUE){

$full_name = isset($_SESSION['response']->data->full_name)?$_SESSION['response']->data->full_name:'';
$email = isset($_SESSION['response']->data->email)?$_SESSION['response']->data->email:'';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SimpleScheduler | Register Error</title>
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

    <?php if(isset($_SESSION['user_create_fail'])){ ?>
    <div class="register-box-body">
      <p class="login-box-msg">We Are Working On Fixing That</p>
      <p>Hey <?php echo $full_name; ?>! There was an error getting you registered.</p>
      <p>You can go back and try again. Our apploigize for the incovience.</p>
      <a href="<?php echo base_url().'register'; ?>" class="text-center">Try To Register Again?</a>
    </div>
    <!-- /.form-box -->
    <?php } ?>

    <?php if(isset($_SESSION['already_register'])){ ?>
    <div class="register-box-body">
      <p class="login-box-msg">Already A Member</p>
      <p>Hey <?php echo $full_name; ?>! Looks like you are already registered.</p>
      <p>You can try to sign in here:
      <a href="<?php echo base_url().'login'; ?>" class="text-center">Login?</a>
      </p>
    </div>
    <!-- /.form-box -->
    <?php } ?>

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
<?php }else{ redirect(base_url().'register'); } ?>
