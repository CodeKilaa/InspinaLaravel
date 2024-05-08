<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Horario-General</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/switchery/switchery.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle img-lg" src="img/image.png"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Administrador</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span></a>
                </li>
                <li class="active">
                    <a href="horario-general-presencial.html"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios G.Presencial</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="horarioPresencial">Presencial</a></li>
                        <li class="active"><a href="horarioGeneral">Horario General</a></li>
                        <li><a href="horarioArea">Areas</a></li>
                        <li><a href="horarioSalon">Salon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="horarioVirtual"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios G.Virtual</span></a>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-group"></i> <span class="nav-label">Personal</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="candidatos">Candidatos</a>
                        </li>
                        <li>
                            <a href="colaboradores">Colaboradores</a>
                        </li>
                        <li>
                            <a href="HorarioCapacitacion">Capacitacion-Horario</a>
                        </li>
                    </ul>
                    
                </li>
                <li>
                    <a href="areas"><i class="fa fa-tags"></i> <span class="nav-label">Áreas</span></a>
                </li>
                <li>
                    <a href="Responsabilidades"><i class="fa fa-list-alt"></i> <span class="nav-label">Responsabilidades</span></a>
                </li>
                <li>
                    <a href="maquinas"><i class="fa fa-desktop"></i> <span class="nav-label">Maquinas</span></a>
                </li>
                <li>
                    <a href="salones"><i class="fa fa-address-card-o"></i> <span class="nav-label">Salones</span></a>
                </li>
                <li>
                    <a href="configuracion"><i class="fa fa-cog"></i> <span class="nav-label">Ajustes</span></a>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-sign-out"></i> <span class="nav-label">Cerrar Sesion</span></a>
                </li>
            </ul>

        </div>
    </nav>

<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <a class="dropdown-item float-left" href="profile.html">
                                <img alt="image" class="rounded-circle" src="img/a7.jpg">
                            </a>
                            <div class="media-body">
                                <small class="float-right">46h ago</small>
                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a class="dropdown-item float-left" href="profile.html">
                                <img alt="image" class="rounded-circle" src="img/a4.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="float-right text-navy">5h ago</small>
                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a class="dropdown-item float-left" href="profile.html">
                                <img alt="image" class="rounded-circle" src="img/profile.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="float-right">23h ago</small>
                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="mailbox.html" class="dropdown-item">
                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                <span class="float-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="profile.html">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="float-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="grid_options.html">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="float-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="notifications.html">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>


            <li>
                <a href="login.html">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>

    </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Calendar</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Extra pages
            </li>
            <li class="breadcrumb-item active">
                <strong>Calendar</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Striped Table </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <style>
                        

                        .fc-event {
                            text-align: center;
                            font-size: 14px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                                              
                        }
                        .fc-day-header {
                            display: none !important;
                        }
                        .receso{
                            font-size: 20px;
                            font-weight:400;
                        }

                    </style>
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="float-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2018
    </div>
</div>

</div>
</div>

<!-- Mainly scripts -->
<script src="js/plugins/fullcalendar/moment.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI  -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar -->
<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>

<script src='locales/es.js'></script>

<script>

    $(document).ready(function() {

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({

            locale: 'es',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'agendaWeek',
                
            },
            allDayText: 'Hora/Dia',
            defaultView:'agendaWeek',
            contentHeight: 'auto',
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            eventOverlap: true, 
            slotEventOverlap: false,
            allDaySlot: true,
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();

                }
            },
            firstDay: 1,
            minTime: "08:30:00",
            maxTime: "18:30:00",

            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Lunes',
                    
                    start: new Date(y, m, d-2, 9, 0),
                    end: new Date(y, m, d-2, 13, 30),
                    allDay: true,
                    color: '#1ab394',
                    editable: false
                },
                {
                    title: 'Martes',
                    
                    start: new Date(y, m, d-1, 9, 0),
                    end: new Date(y, m, d-1, 13, 30),
                    allDay: true,
                    color: '#1ab394',
                    editable: false
                    
                },
                {
                    title: 'Miercoles',
                    
                    start: new Date(y, m, d, 9, 0),
                    end: new Date(y, m, d, 13, 30),
                    allDay: true,
                    color: '#1ab394',
                    editable: false
                    
                },
                {
                    title: 'Jueves',
                    
                    start: new Date(y, m, d+1, 9, 0),
                    end: new Date(y, m, d+1, 13, 30),
                    allDay: true,
                    color: '#1ab394',
                    editable: false
                    
                },
                {
                    title: 'Viernes',
                    
                    start: new Date(y, m, d+2, 9, 0),
                    end: new Date(y, m, d+2, 13, 30),
                    allDay: true,
                    color: '#1ab394',
                    editable: false
                    
                },
                {
                    title: 'Sabado',
                    
                    start: new Date(y, m, d+3, 9, 0),
                    end: new Date(y, m, d+3, 13, 30),
                    allDay: true,
                    color: '#1ab394',
                    editable: false
                    
                },
                {
                    title: 'Domingo',
                    
                    start: new Date(y, m, d+4, 9, 0),
                    end: new Date(y, m, d+4, 13, 30),
                    allDay: true,
                    color: '#1ab394',
                    editable: false
                    
                },
                {
                    id: 999,
                    title: 'Marlo Estrucutra Salon 1 Maquina 1',
                    start: new Date(y, m, d-2, 8,30),
                    end: new Date(y, m, d-2, 12,30),
                    allDay: false,
                    color: '#19CB29'
                },
                {
                    title: 'Mateoo Analisis Salon 1 Maquina 1',
                    start: new Date(y, m, d-1, 8,30),
                    end: new Date(y, m, d-1, 12,30),
                    allDay: false,
                    color:'#1F76F8'
                },
                {
                    title: 'Isabel Analisis Salon 1 Maquina 6',
                    start: new Date(y, m, d, 14),
                    end: new Date(y, m, d, 18,30),
                    allDay: false,
                    color:'#1F76F8'
                },
                {
                    title: 'Marlo Estructura Salon 1 Maquina 2',
                    start: new Date(y, m, d+1, 14),
                    end: new Date(y, m, d+1, 18,30),
                    allDay: false,
                    color: '#19CB29'
                },
                {
                    title: 'Gustavo Android Salon 2 Maquina 2',
                    start: new Date(y, m, d+2, 9),
                    end: new Date(y, m, d+2, 12,30),
                    allDay: false,
                    color:'#E5835A'
                },
                {
                    title: 'Xiomara Android Salon 2 Maquina 5',
                    start: new Date(y, m, d+2, 14),
                    end: new Date(y, m, d+2, 18,30),
                    allDay: false,
                    color:'#E5835A'
                },
                {
                    title: 'Daniel Programacion Salon 2 Maquina 3',
                    start: new Date(y, m, d+3, 8,30),
                    end: new Date(y, m, d+3, 12,30),
                    allDay: false,
                    color:'#9629F1'
                },
                {
                    title: 'Daniel Programacion Salon 2 Maquina 4',
                    start: new Date(y, m, d+3, 14),
                    end: new Date(y, m, d+3, 18,30),
                    allDay: false,
                    color:'#9629F1'
                },
                {
                    title: 'Adolfo Programacion Salon 2 Maquina 4',
                    start: new Date(y, m, d+4, 8,30),
                    end: new Date(y, m, d+4, 12,30),
                    allDay: false,
                    color:'#9629F1'
                },
                {
                    start: new Date(y, m, d-2, 12,30),
                    end: new Date(y, m, d-2, 14),
                    allDay: false,
                    color: '#B6B937'
                },
                {
                    start: new Date(y, m, d-1),
                    end: new Date(y, m, d-1),
                    allDay: false,
                    color: '#B6B937'
                },
                {
                    start: new Date(y, m, d-1, 12,30),
                    end: new Date(y, m, d-1, 14),
                    allDay: false,
                    color: '#B6B937'
                },
                {
                    start: new Date(y, m, d, 12,30),
                    end: new Date(y, m, d, 14),
                    allDay: false,
                    color: '#B6B937'
                },
                {
                    title: 'RECESO',
                    start: new Date(y, m, d+1, 12,30),
                    end: new Date(y, m, d+1, 14),
                    allDay: false,
                    color: '#B6B937',
                    displayEventTime: false,
                    className: 'receso'
                },
                {
                    start: new Date(y, m, d+2, 12,30),
                    end: new Date(y, m, d+2, 14),
                    allDay: false,
                    color: '#B6B937'
                },
                {
                    start: new Date(y, m, d+3, 12,30),
                    end: new Date(y, m, d+3, 14),
                    allDay: false,
                    color: '#B6B937'
                },
                {
                    start: new Date(y, m, d+4, 12,30),
                    end: new Date(y, m, d+4, 14),
                    allDay: false,
                    color: '#B6B937'
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ],
            eventRender: function(event, element) {

            // Eliminar la hora del evento
            $(element).find('.fc-time').remove();
        },
        
        });


    });

</script>
</body>

</html>
