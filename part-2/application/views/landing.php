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
      <link rel="stylesheet" href="/assets/css/base.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

      <meta name="description" content="We are a family business in Perry, Iowa servicing Perry, Iowa and surrounding areas with Web Design Service & Web Hosting Services." />

        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="Website" />
        <meta property="og:title" content="Simple Scheduler" />
        <meta property="og:description" content="Simple Scheduler is an simple personal online calendar to schedule events and keep track of your time." />
        <meta property="og:url" content="<?php echo base_url();?>" />
        <meta property="og:site_name" content="Simple Scheduler" />
        <meta property="article:publisher" content="Kyle Coots" />
        <meta property="article:author" content="Kyle Coots" />
        <meta property="article:tag" content="Simple Scheduler" />
        <meta property="article:tag" content="Online Calendar" />
        <meta property="article:published_time" content="2019-10-06T14:00:00+00:00" />
        <meta property="article:modified_time" content="2019-10-06T14:00:00+00:00" />
        <meta property="og:updated_time" content="2019-10-06T14:00:00+00:00" />
        <meta property="og:image" content="<?php echo base_url(). '/assets/images/preview.png'?>" />
        <meta property="og:image:secure_url" content="<?php echo base_url(). '/assets/images/preview.png';?>" />
        <meta property="og:image:width" content="1198" />
        <meta property="og:image:height" content="952" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Simple Scheduler is an simple personal online calendar to schedule events and keep track of your time." />
        <meta name="twitter:title" content="Simple Scheduler" />
        <meta name="twitter:site" content="@cootercomputers" />
        <meta name="twitter:image" content="<?php echo base_url(). 'assets/images/preview.png'; ?>" />
        <meta name="twitter:creator" content="@cooterscomputers" />

        <meta property="fb:pages" content="https://www.facebook.com/cooterscomputers" />

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(). 'assets/images/reach.jpeg'; ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-calendar"></i></span>
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
              <img src="<?php echo base_url(). 'assets/images/reach.jpeg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Your Name Here</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(). 'assets/images/reach.jpeg'; ?>" class="img-circle" alt="User Image">

                <p>
                  Your Name Here

                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="<?php echo base_url(). 'assets/images/reach.jpeg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Your Name Here</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-calendar"></i> <span>Scheduler</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'login'; ?>">
            <i class="fa fa-sign-in"></i> <span>Login</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'register'; ?>">
            <i class="fa fa-registered"></i> <span>Register</span>
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

<div class="row">
  <div class="col-md-8">
    <p>Simple Scheduler is just that, a simple way to schedule your personal event on your personal calendar.</p>
  </div>
</div>

          <hr>

             <section class="content">
                <div class="row">
                  <div class="col-md-3">
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
    <strong>Copyright &copy; 2019 <a href="<?php echo base_url(); ?>">Simple Scheduler</a>.</strong> All rights
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

<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay,list'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day',
        list  : 'list'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          description    : 'All Day Event'
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12', //yellow
          description    : 'Long Event - This is an event that spans multiple days.'
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7', //Blue
          description    : 'All Day Event - This event last all day long.'
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef', //Info (aqua)
          description    : 'Time for lunchy! :)'
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a', //Success (green)
          description    : 'Bithday party @ 7pm'
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc', //Primary (light-blue)
          description    : 'Click this event to goto Google.com'
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      },
      eventMouseover: function(event, jsEvent, view) {
        $('body .agenda-view .agenda-view--text').append('<span id=\"'+event.id+'\" class=\"fc-agenda-event hover-end\">Decription: '+event.description +'</span>');
      },
      eventMouseout: function(event, jsEvent, view) {
        $('#'+event.id).remove();
      },
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>