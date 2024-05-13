<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>responsabilidades-Asistencia</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


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
                <li>
                    <a href="horario-general-presencial.html"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios G.Presencial</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="horarioPresencial">Presencial</a></li>
                        <li><a href="horarioGeneral">Horario General</a></li>
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
                <li  class="active">
                    <a href="Responsabilidades"><i class="fa fa-list-alt"></i> <span class="nav-label">Responsabilidades</span></a>
                </li>
                <li>
                    <a href="maquinas"><i class="fa fa-desktop"></i> <span class="nav-label">Maquinas</span></a>
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
                <h2>Responsabilidades</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="Responsabilidades">Responsabilidades-Area</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="responsabilidades-meses">Meses</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Asistencia</strong>
                    </li>
                </ol>
            </div>
            
</div>
        <style>
            .juntar {
                margin-bottom: 0px;
            }
            table {
                margin: 0 auto;           
                width: 80%; 
                border-collapse: collapse;
                background-color: #ffffff;
                margin-bottom: 20px;
            }
            tr {
                width:100%;                 
            }                     
            th, td {
                border: 1px solid #ddd;
                padding: 18px;
                text-align: center;                
            }
            th {
                background-color: #4E7BBF;
                color:rgb(255, 255, 255);
                padding: 15px;
            }
            .semana {
                background-color: #4E7BBF;
                position: relative;
            }
            .semana button {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                background-color: antiquewhite;
            }
            .area {
                background-color: #78EA91;
                color: #000000;
            }
            .colabo {
                background-color: #eaeaeb;
                color: #000000;
            }               
            .check, .x {
                cursor: pointer;
            }
            .respon {
                background-color: #A0D6F4;
                color: #000000;
                padding: 10px;
            }
            #semana2{
                display: none;
            }
            .semanaactiva{
                display: block;
            }
            .regre{
                position: absolute;
                left: 10px;
                background-color: antiquewhite;
            }
        </style>
    <div><table class="juntar">
            <tr>
                <th> Marzo </th>
                <th class="semana" colspan="8">Semana: 1
                    <button onclick="avanzarSemana()">-></button>
                    
                </th>
            </tr>
            <tr>
                <th> Área </th>
                <th class="area" colspan="8">Estructura</th>
            </tr>
        </table><table id="semana1">
                <thead>         
                    <tr>
                        <th> Colaboradores / Responsabilidades </th>
                        <td class="respon">Asistencia diaria</td>
                        <td class="respon">Reuniones Virtuales</td>
                        <td class="respon">Aportes de Ideas</td>
                        <td class="respon">Participación</td>
                        <td class="respon">Presentación de trabajos</td>
                        <td class="respon">Lecturas</td>
                        <td class="respon">Faltas justificadas</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="colabo">Marlo Samaniego</th>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">❌</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                    </tr>
                    <tr>
                        <th class="colabo">Daniel Roman</th>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                    </tr>
                    <tr>
                        <th class="colabo">Isabel Torres</th>
                        <td class="check" onclick="toggleCheck(this)">❌</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                    </tr>
                    <tr>
                        <th class="colabo">Paolo Guerrero</th>
                        <td class="check" onclick="toggleCheck(this)">❌</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                    </tr>
                    <tr>
                        <th class="colabo">Julio Flores</th>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">❌</td>
                        <td class="check" onclick="toggleCheck(this)">❌</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                        <td class="check" onclick="toggleCheck(this)">✔️</td>
                    </tr>
                </tbody>
            </table>
            <table id="semana2">
                <thead>          
                    <tr>
                        <th> Colaboradores / Responsabilidades </th>
                        <td class="respon">Asistencia diaria</td>
                        <td class="respon">Reuniones Virtuales</td>
                        <td class="respon">Aportes de Ideas</td>
                        <td class="respon">Participación</td>
                        <td class="respon">Presentación de trabajos</td>
                        <td class="respon">Lecturas</td>
                        <td class="respon">Faltas justificadas</td>
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <th class="colabo">Marlo Samaniego</th>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                    </tr>
                    <tr>
                        <th class="colabo">Daniel Roman</th>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                    </tr>
                    <tr>
                        <th class="colabo">Isabel Torres</th>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                    </tr>
                    <tr>
                        <th class="colabo">Paolo Guerrero</th>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                    </tr>
                    <tr>
                        <th class="colabo">Julio Flores</th>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                        <td class="" onclick="toggleCheck(this)"></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <button onclick="guardarCambios()" class="ladda-button btn btn-primary mr-5" data-style="expand-left">Guardar</button>
                <button onclick="descartarCambios()" class="ladda-button btn btn-primary" data-style="expand-left">Descartar</button>
            </div>       
            <script>
                var currentWeek = 1;
        
                function toggleCheck(cell) {
                    if (cell.textContent === '✔️') {
                        cell.textContent = '❌';
                    } else {
                        cell.textContent = '✔️';
                    }
                }
                function actualizarSemana(offset) {
                    currentWeek += offset;
                    var semanaTitulo = document.querySelector('.semana');
                    semanaTitulo.textContent = "Semana: " + currentWeek;
        
                    var checkCells = document.querySelectorAll('.check');
                    checkCells.forEach(function(cell) {
                        cell.textContent = '';
                    });
                    var backButton = document.getElementById('backButton');
                    var nextButton = document.getElementById('nextButton');
        
                    if (currentWeek === 1) {
                        backButton.style.display = 'none';
                        nextButton.style.display = 'inline-block';
                    } else if (currentWeek === 2) {
                        backButton.style.display = 'inline-block';
                        nextButton.style.display = 'none';
                    } else {
                        backButton.style.display = 'inline-block';
                        nextButton.style.display = 'none'; 
                    }
                }        
                function regresarSemana() {
                    if (currentWeek > 1) {
                        $("#semana2").css("display", "none");
                        $("#semana1").css("display", "table");
                        actualizarSemana(-1);
                    }
                }
            
                function avanzarSemana() {
                    $("#semana1").css("display", "none");
                    $("#semana2").css("display", "table");
                    actualizarSemana(1);
                }        

            </script>

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
<script src="js/plugins/switchery/switchery.js"></script>

</body>

</html>
