<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Colaborador-Horario de Clases</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

    

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
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span> <span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="horario-general-presencial.html"><i class="fa fa-clock-o"></i> <span
                                class="nav-label">Horarios G.Presencial</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="horarioPresencial">Presencial</a></li>
                            <li><a href="horarioGeneral">Horario General</a></li>
                            <li><a href="horarioArea">Areas</a></li>
                            <li><a href="horarioSalon">Salon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="horarioVirtual"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios
                                G.Virtual</span></a>
                    </li>
                    <li>
                        <a href="layouts.html"><i class="fa fa-group"></i> <span class="nav-label">Personal</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="active">
                                <a href="candidatos">Candidatos</a>
                            </li>
                            <li>
                                <a href="colaboradores">Colaboradores</a>
                            <li>
                                <a href="HorarioCapacitacion">Capacitacion-Horario</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="areas"><i class="fa fa-tags"></i> <span class="nav-label">Áreas</span></a>
                    </li>
                    <li>
                        <a href="Responsabilidades"><i class="fa fa-list-alt"></i> <span
                                class="nav-label">Responsabilidades</span></a>
                    </li>
                    <li>
                        <a href="maquinas"><i class="fa fa-desktop"></i> <span class="nav-label">Maquinas</span></a>
                    </li>
                    <li>
                        <a href="salones"><i class="fa fa-address-card-o"></i> <span
                                class="nav-label">Salones</span></a>
                    </li>
                    <li>
                        <a href="configuracion"><i class="fa fa-cog"></i> <span class="nav-label">Ajustes</span></a>
                    </li>
                    <li>
                        <a href="layouts.html"><i class="fa fa-sign-out"></i> <span class="nav-label">Cerrar
                                Sesion</span></a>
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
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="/">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Horario de Clases</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>UI Elements</a>
                        </li>
                        <li class="breadcrumb-item">
                            <strong>Horario Semanal</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeIn">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Ver</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">Agregar</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="wrapper wrapper-content">
                                        <div class="row animated fadeInDown">
                                            <div class="col-lg-12">
                                                <div class="ibox ">
                                                    
                                                    <div class="ibox-content">
                                                        <style>
                                                            
                                    
                                                            .fc-event {
                                                                text-align: right;
                                                                font-size: 15px;
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                
                                                            }
                                                            .fc-day-header {
                                                                display: none !important;
                                                            }
                               
                                                        </style>
                                                        <div id="calendar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                               
                                </div>
                            </div>
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <div class="wrapper wrapper-content animated fadeInRight">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox ">
                                                    <div class="ibox-content">
                                                        <h2><strong>Informacion</strong></h2>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <form role="form">
                                                                    <div class="form-group"><label>Nombres</label> <input type="text" placeholder="Ingrese su nombre" class="form-control"></div>
                                                                    <div class="form-group"><label>DNI</label> <input type="text" placeholder="Ingrese su DNI" class="form-control"></div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group"><label>Apellidos</label> <input type="text" placeholder="Ingrese sus Apellidos" class="form-control"></div>
                                                                <div class="form-group"><label>Ciclo</label> <input type="text" placeholder="**" class="form-control"></div>
                                                            </div>
                                                            
                            
                                                        
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="ibox">
                                                                <div class="ibox-title">
                                                                    <h5>Tabla</h5>
                                                                    <div class="ibox-tools">
                                                                        <button class="btn btn-primary" type="button" href="#modal-form-edit" data-toggle="modal"><i class="fa fa-plus-circle"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="ibox-content">
                                            
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Horario</th>
                                                                            <th>Descripcion</th>
                                                                            <th>Dia</th>
                                                                            <th>Hora Inicial</th>
                                                                            <th>Hora Final</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-group row"><label class="col-form-label"></label>
                            
                                                                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                                        <option>Presencial</option>
                                                                                        <option>Virtual</option>
                                                                                        <option>Semi-Presencial</option>
                                                                                    </select>                
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" placeholder="**">
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group row"><label class="col-form-label"></label>
                            
                                                                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                                        <option>Lunes</option>
                                                                                        <option>Martes</option>
                                                                                        <option>Miercoles</option>
                                                                                        <option>Jueves</option>
                                                                                        <option>Viernes</option>
                                                                                        <option>Sabado</option>
                                                                                    </select>                
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group date">
                                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="8:30am">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group date">
                                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="12:30pm">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-danger float-right" type="button"><i class="fa fa-trash-o"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                        <!---Div-->
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-group row"><label class="col-form-label"></label>
                            
                                                                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                                        <option>Presencial</option>
                                                                                        <option>Virtual</option>
                                                                                        <option>Semi-Presencial</option>
                                                                                    </select>                
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" placeholder="**">
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-group row"><label class="col-form-label"></label>
                            
                                                                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                                        <option>Lunes</option>
                                                                                        <option>Martes</option>
                                                                                        <option>Miercoles</option>
                                                                                        <option>Jueves</option>
                                                                                        <option>Viernes</option>
                                                                                        <option>Sabado</option>
                                                                                    </select>                
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group date">
                                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="8:30am">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group date">
                                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="12:30pm">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-danger float-right" type="button"><i class="fa fa-trash-o"></i></button>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                        
                                                                    </table>
                                                                    <div class="text-center">
                                                                        <button class="ladda-button btn btn-primary mr-5"  data-style="expand-left">Guardar</button>
                                                                        <button class="ladda-button btn btn-primary"  data-style="expand-left">Cancelar</button>
                                                                    </div>
                                                                    
                                            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
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
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

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
                defaultView: 'agendaWeek',
                weekNumbers: false,
                weekNumbersWithinDays: 7,
                viewRender: function(view, element) {
                    var startDate = moment('2024-05-06');             
                    var endDate = moment(startDate).add(6, 'weeks');     
                    if (view.end.isAfter(endDate)) {
                        $('#calendar').fullCalendar('gotoDate', startDate);
                    }
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: ''
                    
                },
                         
                allDayText: 'Hora/Area',
                slotDuration: '00:30:00', 
                slotLabelInterval: '01:00', 
                minTime: '07:00:00', 
                maxTime: '22:00:00', 
                contentHeight: 'auto',      
                eventOverlap: true, 
                slotEventOverlap: false,
                editable: false,
                droppable: true, 
                allDaySlot: true, 
                
                drop: function() {
                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }
                },
                
                events: [
                    {
                        title: 'Lunes',
                        id:'lunes',
                        start: new Date(y, m, d-1, 9, 0),
                        end: new Date(y, m, d-1, 13, 30),
                        allDay: true,
                        color: '#a0d6f4',
                        editable: false
                        
                    },
                    {
                        title: 'Martes',
                        id:'martes',
                        start: new Date(y, m, d, 9, 0),
                        end: new Date(y, m, d, 13, 30),
                        allDay: true,
                        color: '#a0d6f4',
                        editable: false
                        
                    },
                    {
                        title: 'Miercoles',
                        id:'miercoles',
                        start: new Date(y, m, d+1, 9, 0),
                        end: new Date(y, m, d+1, 13, 30),
                        allDay: true,
                        color: '#a0d6f4',
                        editable: false
                        
                    },
                    
                    {
                        title: 'Jueves',
                        id:'jueves',
                        start: new Date(y, m, d+2, 9, 0),
                        end: new Date(y, m, d+2, 13, 30),
                        allDay: true,
                        color: '#a0d6f4',
                        editable: false
                        
                    },
                                   
                    {
                        title: 'Viernes',
                        id:'viernes',
                        start: new Date(y, m, d+2, 24),
                        end: new Date(y, m, d+2, 24),
                        allDay: true,
                        color: '#a0d6f4',
                        editable: false
                        
                    },
                    {
                        title: 'Sabado',
                        id:'sabado',
                        start: new Date(y, m, d+3, 24),
                        end: new Date(y, m, d+3, 24),
                        allDay: true,
                        color: '#a0d6f4',
                        editable: false
                        
                    },
                    {
                        title: 'Domingo',
                        id:'domingo',
                        start: new Date(y, m, d+4, 24),
                        end: new Date(y, m, d+4, 24),
                        allDay: true,
                        color: '#a0d6f4',
                        editable: false
                        
                    },
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Clase Presencial',
                    start: new Date(y, m, d-1,16,0),
                    end: new Date(y, m, d-1,18,0),
                    allDay: false
                },
                {
                    title: 'Clase Presencial',
                    start: new Date(y, m, d-1,19,0),
                    end: new Date(y, m, d-1,21,0),
                    allDay: false
                },
                {
                    title: 'Clase Virtual',
                    start: new Date(y, m, d,8,0),
                    end: new Date(y, m, d,12,0),
                    allDay: false,
                    color: '#9C27B0'
                },
                {
                title: 'Clase Presencial',
                    start: new Date(y, m, d+1,8,0),
                    end: new Date(y, m, d+1,12,0),
                    allDay: false
                },
                {
                title: 'Clase Presencial',
                    start: new Date(y, m, d+3,14,0),
                    end: new Date(y, m, d+3,18,0),
                    allDay: false
                },
                {
                title: 'Clase Presencial',
                    start: new Date(y, m, d+2,19,0),
                    end: new Date(y, m, d+2,21,0),
                    allDay: false
                },
                {
                title: 'Clase Virtual',
                    start: new Date(y, m, d+3,12,0),
                    end: new Date(y, m, d+3,14,0),
                    allDay: false,
                    color: '#9C27B0'
                },
                {
                title: 'Clase Virtual',
                    start: new Date(y, m, d+4,16,0),
                    end: new Date(y, m, d+4,19,0),
                    allDay: false,
                    color: '#9C27B0'
                },
                {
                title: 'Clase Presencial',
                    start: new Date(y, m, d+5,8,0),
                    end: new Date(y, m, d+5,12,0),
                    allDay: false
                },
                {
                title: 'Clase Presencial',
                    start: new Date(y, m, d+5,14,0),
                    end: new Date(y, m, d+5,17,0),
                    allDay: false
                },
                {
                title: 'Clase Presencial',
                    start: new Date(y, m, d+5,18,0),
                    end: new Date(y, m, d+5,21,0),
                    allDay: false
                }
                    
                 
                ],
    
                eventRender: function(event, element) {
                var daysToShow = 4; // Número de días que deseas mostrar
                var columnWidth = $('.fc-day-grid-container').width() / daysToShow; // Ancho de la columna
                element.css('width', columnWidth); // Aplicar el ancho al evento
    
                
            },
            eventClick: function(event) {
                
                var eventId = event.id;

                
                switch (eventId) {
                        case 'lunes':
                        window.location.href = 'horario-dia'; 
                        break;
                        case 'martes':
                        window.location.href = 'horario-dia2'; 
                        break;
                        case 'miercoles':
                        window.location.href = 'horario-dia'; 
                        break;
                        case 'jueves':
                        window.location.href = 'horario-dia'; 
                        break;
                        case 'viernes':
                        window.location.href = 'horario-dia'; 
                        break;
                        case 'sabado':
                        window.location.href = 'horario-dia'; 
                        break;
                        case 'domingo':
                        window.location.href = 'horario-dia'; 
                        break;
                    default:                    
                        break;
                }
            }
            
            
            
                       
            });
        });
    
    </script>    

</body>

</html>
