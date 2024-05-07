<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Calendar</title>

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
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                        <li><a href="dashboard_areas.html">Áreas</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="horario-general-presencial.html"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios G.Presencial</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="horarioPresencial">Presencial</a></li>
                        <li><a href="horarioGeneral">Horario General</a></li>
                        <li><a href="horarioArea">Areas</a></li>
                        <li class="active"><a href="horarioSalon">Salon</a></li>
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
                            
                            <!--- <ul class="nav nav-third-level">
                                <li>
                                    <a href="candidatos.html">Candidatos</a>
                                </li>
                                <li>
                                    <a href="form-candidatos-colab.html">Formulario</a>
                                </li>
                            </ul>
                            -->
                        </li>
                        <li>
                            <a href="colaboradores">Colaboradores</a>
                            <!---
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="Colaboradores.html">Colaboradores</a>
                                </li>
                                <li>
                                    <a href="form-candidatos-colab.html">Candidato a Colab</a>
                                </li>
                                <li>
                                    <a href="form-horario-clase.html">Horario Clase</a>
                                    
                                </li>
                                <li>
                                    <a href="horario-clase-semanal.html">Horario Semanal</a>
                                </li>
                            </ul>
                            -->
                        </li>


                        <li>
                            
                        </li>

                        <li>
                            <a href="HorarioCapacitacion">Capacitacion-Horario</a>
                            <!---
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="capacitacion-colab.html">Informacion</a>
                                </li>
                                <li>
                                    <a href="capacitacion-horario.html">Horario</a>
                                </li>
                            </ul>
                            -->
                        </li>
                    </ul>
                    
                </li>
                <li>
                    <a href="areas"><i class="fa fa-tags"></i> <span class="nav-label">Áreas</span></a>
                </li>
                <li>
                    <a href="Responsabilidades"><i class="fa fa-list-alt"></i> <span class="nav-label">Responsabilidades</span></a>
                    <!-- 
                    <ul class="nav nav-second-level">
                        <li><a href="responsabilidades_areas.html">Areas</a></li>
                        <li><a href="responsabilidades-semanas.html">Semanas</a></li>
                        <li><a href="responsabilidades-asis.html">Asistencia</a></li>
                    </ul>
                    -->
                </li>
                <li>
                    <a href="maquinas"><i class="fa fa-desktop"></i> <span class="nav-label">Maquinas</span></a>
                    <!---
                    <ul class="nav nav-second-level collapse">

                        <li>
                            <a href="Maquinas.html"><span class="nav-label">Maquinas</span></a>
                            
                        </li>

                        <li><a href="Computadora.html">Computadoras</a></li>
                        
                    </ul>
                    -->
                </li>
                <li>
                    <a href="salones"><i class="fa fa-address-card-o"></i> <span class="nav-label">Salones</span></a>
                </li>
                <li>
                    <a href="configuracion.html"><i class="fa fa-cog"></i> <span class="nav-label">Ajustes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="configuracion-institucion">Institucion</a></li>
                        <li><a href="configuracion-carrera">Carrera</a></li>
                        <li><a href="configuracion-curso">Curso</a></li>
                        <li><a href="configuracion-programa">Programas</a></li>
                    </ul>
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
        <h2>Calendario</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                Dashboard
            </li>
            <li class="breadcrumb-item active">
                <strong>Horario General Precencial - Salon</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-lg-12">
          <div class="ibox ">
            <div class="ibox-content">
                <h1 class="titulo">Horario General Presencial - Salon</h1>
                <br>
                <div class="container">    
                  <table>
                      <thead>
                          <tr class="m1">
                            <th class="hm">Marzo</th>
                            <th class="fecha" colspan="4">Viernes 1</th>
                            
                          </tr>
                        </thead>
                    <thead> 
                      <tr class="m1">
                        <th class="hm">Hora / Salon</th>
                        <th colspan="2" id="Clase1">Salon 1</th>
                        <th colspan="2" id="Clase2">Salon 2</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="celdas">
                        <th rowspan="4" >8:30 am - 12:30 pm</th>
                        <td id="c1">Marlo Samaniego</td>
                        <td id="c2"></td>
                        <td id="c3"></td>
                        <td id="c4">Marlo Samaniego</td>
                        
                      </tr>
                      <tr class="celdas">
                        <td id="c5">Isabel Torres</td>
                        <td id="c6">Carmen Torres   </td>
                        <td id="c7">Daniel Roman</td>
                        <td id="c8"></td>       
                        
                      </tr>
                      <tr class="celdas">
                        <td id="c9"></td>
                        <td id="c10"></td>
                        <td id="c11"></td>
                        <td id="c12"></td>       
                        
                      </tr>
                      <tr class="celdas">
                        <td id="c13"></td>
                        <td id="c14"></td>
                        <td id="c15"></td>
                        <td id="c16"></td>       
                        
                      </tr>
                      <tr>
                        <th>12:30 pm - 2:00 pm</th>
                        <td class="receso" colspan="8">RECESO</td>
                      </tr>
                      <tr class="celdas">
                        <th rowspan="4" >2:00 pm - 6:00 pm</th>
                        <td id="c17" ></td>
                        <td id="c18" ></td>
                        <td id="c19" >Daniel Roman</td>
                        <td id="c20" >Juan Carlos</td>      
                      </tr>
                      <tr class="celdas">
                        <td id="c21" ></td>
                        <td id="c22" ></td>
                        <td id="c23" ></td>
                        <td id="c24" ></td>
                      </tr>
                      <tr class="celdas">
                        <td id="c25" ></td>
                        <td id="c26" ></td>
                        <td id="c27" ></td>
                        <td id="c28" ></td>
                      </tr>
                      <tr class="celdas">
                        <td id="c29" ></td>
                        <td id="c30" ></td>
                        <td id="c31" ></td>
                        <td id="c32" ></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <style>
                  .container {
                  width: 1400px;
                  
                  margin: 0 auto;
                  font-family: sans-serif;
                  }
                  
                  h1 {
                    text-align: center;
                  }
                  
                  .fecha {
                    text-align: center;
                    color: white;
                    
                  }
                  
                  table {
                    width: 100%;
                    border-collapse: collapse;
                  }
                  
                  th, td {
                    border: 1px solid black;
                    padding: 5px;
                    color: black;
                    height: 40px;
                    width: 200px;
                  }
                  
                  th {
                    text-align: center;
                    min-width: 100px;
                    
                    
                  }
                  .m1{
                      background-color: #4e7bbf;
                      color: white;
                      
                  }
                  .hm{
                      background-color: #4e7bbf;
                      width: 200px;
                      color: white;
                  }
                  .titulo{
                    font-weight: 600;
                  }
                  .receso{
                      background-color: #b6b937;
                      font-size: 25px;
                      font-weight: 600;
                      color: white;
                      height: 100px;
                  }
                  td {
                    text-align: center;
                  }
                  #Clase1,#Clase2{
                    color: white;
                  }
                  .celdas{
                    
                    height: 40px;
                  }
                
                </style>
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




</body>

</html>
