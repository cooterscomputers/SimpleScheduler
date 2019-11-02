<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Scheduler</title>

    <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css">
      <!-- fullCalendar -->
      <link rel="stylesheet" href="/assets/AdminLTE-2.4.5//bower_components/fullcalendar/dist/fullcalendar.min.css">
      <link rel="stylesheet" href="/assets/AdminLTE-2.4.5//bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
      <!-- Theme style -->
      <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="/assets/AdminLTE-2.4.5/dist/css/skins/_all-skins.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <script>
        var base_url = "<?php echo base_url(); ?>";
        var csrf_token_name  = "<?php echo $this->security->get_csrf_token_name(); ?>";
        var csrf_token_value = "<?php echo $this->security->get_csrf_hash(); ?>";
      </script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-calendar" ></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Simple</b>Scheduler</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <i class="text-green fa fa-user "></i>
              <span class="hidden-xs"><?php echo $full_name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                <i class="text-green fa fa-user fa-2x"></i>
                <p>
                  <?php echo $full_name; ?>
                </p>
              </li>
              <!-- Menu Body --
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>

              </li>
               /.row -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url().'scheduler/profile' ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url().'logout' ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
          <i class="text-green fa fa-user fa-2x"></i>
        </div>
        <div class="pull-left info">
          <p><?php echo $full_name; ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url().'scheduler' ?>">
            <i class="fa fa-calendar"></i> <span>Scheduler</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">


          <hr>

             <section class="content">
                <div class="row">
                  <div class="col-md-3">

                    <!-- /. box -->
                    <div class="box box-solid">
                      <div class="box-header with-border">
                        <h3 class="box-title">Create Event</h3>
                      </div>
                      <div class="box-body">
                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                          <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                          <ul class="fc-color-picker" id="color-chooser">
                            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                          </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="input-group">
                          <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                          <div class="input-group-btn">
                            <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                          </div>
                          <!-- /btn-group -->
                        </div>
                        <!-- /input-group -->
                      </div>
                    </div>
                    <div class="box box-solid">
                      <div class="box-header with-border">
                        <h4 class="box-title">Your Events</h4>
                      </div>
                      <div class="box-body">
                        <!-- the events -->
                        <div id="external-events">
                          <div class="external-event bg-green">Lunch</div>
                          <div class="external-event bg-yellow">Go home</div>
                          <div class="external-event bg-aqua">Do homework</div>
                          <div class="external-event bg-light-blue">Work on UI design</div>
                          <div class="external-event bg-red">Sleep tight</div>
                          <div class="checkbox">
                            <label for="drop-remove">
                              <input type="checkbox" id="drop-remove">
                              remove after drop
                            </label>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>                    
                  </div>
                  <!-- /.col -->
                  <div class="col-md-9">
                    <div class="box box-primary">
                      <div class="box-body no-padding">
                        <!-- THE CALENDAR -->
                        <div id="calendar"></div>
                        <div class="agenda-view ">
                            <div class="col-md-3 agenda-view--title">
                              <h5>Agenda Overview</h5>
                            </div>
                            <div class="col-md-9 agenda-view--text">
                            </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>
              <!-- /.content -->


              <!-- Change Event Modal -->

          <div id="updateEventModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Event</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                    <input type="hidden" value="" id="updateEventModal--input-id">
                    <input type="hidden" value="" id="updateEventModal--input-dom-id">
                    <input type="hidden" value="" id="updateEventModal--input-start-time">
                    <input type="hidden" value="" id="updateEventModal--input-end-time">

                  <!-- Title -->
                  <div class="form-group">
                      <label>Title</label>
                      <input id="updateEventModal--input-title" class="form-control" rows="3" placeholder="Title ...">
                  </div>

                  <!-- Description -->
                  <div class="form-group">
                      <label>Description</label>
                      <textarea id="updateEventModal--input-description" class="form-control" rows="3" placeholder="Decription ..."></textarea>
                  </div>

                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                          <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                          <ul class="fc-color-picker" id="modal-color-chooser">
                            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                          </ul>
                        </div>

                  <div class="form-group">
                    <label>Color</label>
                    <input type="text" value="" id="updateEventModal--input-backgroundColor">
                  </div>

                  <div class="form-group">
                    <label>Remove</label>
                    <input type="checkbox" value="" id="updateEventModal--input-remove">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button id="updateEventModal--save-event-button" type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        <!-- /.box-body -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="<?php echo base_url(); ?>">SimpleScheduler</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/assets/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/assets/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/assets/AdminLTE-2.4.5/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- SlimScroll -->
<script src="/assets/AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/assets/AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/assets/AdminLTE-2.4.5/dist/js/adminlte.min.js"></script>
<!-- fullCalendar -->
<script src="/assets/AdminLTE-2.4.5/bower_components/moment/moment.js"></script>
<script src="/assets/AdminLTE-2.4.5/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

<script src="/assets/ajax.js"></script>
<script src="/assets/view.js"></script>


</body>
</html>
