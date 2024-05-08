<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Configuración-Curso</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

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
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
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
                                <div>
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
                                <div>
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
                                <div>
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
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Dashboards</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="configuracion.html">Ajustes</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Curso</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-success dim float-right" href="#modal-form-add" data-toggle="modal" type="button">Agregar</button>
                                    <div id="modal-form-add" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Ingrese los Datos</h3>
        
                                                            <!--
                                                                <p>Sign in today for more expirience.</p> 
                                                            -->
        
                                                            <form role="form">
                                                                <div class="form-group"><label>Programa</label> <input type="text" placeholder="" class="form-control"></div>                                                              
                                                                <div class="form-group"><label>Descripcion</label> <input type="text" placeholder="" class="form-control"></div>     
                                                                <div>
                                                                    <button class="btn btn-primary btn-sm m-t-n-xs float-right" type="submit"><i class="fa fa-check"></i>&nbsp;Confirmar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6"><h4>Subir Icono</h4>
                                                            <p class="text-center">
                                                                <a href=""><i class="fa fa-cloud-download big-icon"></i></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                </div>
            </div>

        </div>
        
        <div class="wrapper wrapper-content animated fadeInRight">


            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Border Table </h5>
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
                <div class="ibox-content col-lg-12">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-lg-1">ID</th>
                            <th class="col-lg-2">Curso</th>
                            <th class="col-lg-2">Categoria</th>
                            <th class="col-lg-2">Duracion</th>
                            <th class="col-lg-1">Estado</th>
                            <th class="col-lg-1">Editar</th>
                            <th class="col-lg-1">Ver</th>
                            <th class="col-lg-1">Borrar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Creacion de Logotipo</td>
                            <td>Diseño Grafico</td>
                            <td>3 semanas</td>
                            <td><button class="btn btn-outline-success btn-primary dim" type="button"><span>Activo</span></i></button></td>
                            <td><button class="btn btn-info" type="button" href="#modal-form" data-toggle="modal"><i class="fa fa-paste"></i></button></td>
                            <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 b-r">

                                                    <!--
                                                        <p>Sign in today for more expirience.</p> 
                                                    -->

                                                    <form role="form">
                                                        <label class="col-form-label">Curso</label>
                                                        <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Creación de Logotipo">
                                                        <label class="col-form-label">Duracion</label>
                                                        <div class="form-group row">
                                                            <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                <option>3 semanas</option>
                                                                <option>SENATI</option>
                                                                <option>UPC</option>
                                                            </select>                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                        <div>
                                                            <button class="btn btn-white btn-sm m-t-n-xs float-left" type="submit">Cancelar</button>
                                                            <button class="btn btn-primary btn-sm m-t-n-xs float-right" type="submit"><i class="fa fa-check"></i>&nbsp;Confirmar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-6">
                                                        <!---<a href=""><i class="fa fa-cloud-download big-icon"></i></a>-->
                                                        <label class="col-form-label">Categoria</label>
                                                        <div class="form-group row">
                                                            <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                <option>Diseño Grafico</option>
                                                                <option>SENATI</option>
                                                                <option>UPC</option>
                                                            </select>                
                                                            </div>
                                                        </div>
                                                            <label class="col-form-label">Estado</label>
                                                            <input type="checkbox" class="js-switch" checked/>
                                                    </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <td><button class="btn btn-success" type="button" href="#modaleye1-form" data-toggle="modal"><i class="fa fa-eye"></i></button></td>
                        <div id="modaleye1-form" class="modal fade" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6 b-r">

                                                <!--
                                                    <p>Sign in today for more expirience.</p> 
                                                -->

                                                <form role="form">
                                                    <label class="col-form-label">Curso</label>
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                                <option>Creacion de Logotipo</option>
                                                            </p>                
                                                            </div>
                                                        </div>
                                                    <label class="col-form-label">Duracion</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>3 semanas</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-6">
                                                    <!---<a href=""><i class="fa fa-cloud-download big-icon"></i></a>-->
                                                    <label class="col-form-label">Categoria</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>Diseño Grafico</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                    <label class="col-form-label">Estado</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>Activo</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                                
                                        </div>
                                </div>
                                </div>
                            </div>
                    </div>
                            <td><button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Brandting</td>
                            <td>Programacion</td>
                            <td>3 semanas</td>
                            <td><button class="btn btn-outline-success btn-primary dim" type="button"><span>Activo</span></i></button></td>
                            <td><button class="btn btn-info" type="button" href="#modal2-form" data-toggle="modal"><i class="fa fa-paste"></i></button></td>
                            <div id="modal2-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6 b-r">
    
                                                        <!--
                                                            <p>Sign in today for more expirience.</p> 
                                                        -->
    
                                                        <form role="form">
                                                            <label class="col-form-label">Curso</label>
                                                            <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Brandting">
                                                            <label class="col-form-label">Duracion</label>
                                                            <div class="form-group row">
                                                                <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                    <option>3 semanas</option>
                                                                    <option>SENATI</option>
                                                                    <option>UPC</option>
                                                                </select>                
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                            <div>
                                                                <button class="btn btn-white btn-sm m-t-n-xs float-left" type="submit">Cancelar</button>
                                                                <button class="btn btn-primary btn-sm m-t-n-xs float-right" type="submit"><i class="fa fa-check"></i>&nbsp;Confirmar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <!---<a href=""><i class="fa fa-cloud-download big-icon"></i></a>-->
                                                            <label class="col-form-label">Categoria</label>
                                                            <div class="form-group row">
                                                                <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                    <option>Programacion</option>
                                                                    <option>SENATI</option>
                                                                    <option>UPC</option>
                                                                </select>                
                                                                </div>
                                                            </div>
                                                                <label class="col-form-label">Estado</label>
                                                                <input type="checkbox" class="js-switch_2" checked/>
                                                        </div>
                                                        
                                                </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <td><button class="btn btn-success" type="button" href="#modaleye2-form" data-toggle="modal"><i class="fa fa-eye"></i></button></td>
                        <div id="modaleye2-form" class="modal fade" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6 b-r">

                                                <!--
                                                    <p>Sign in today for more expirience.</p> 
                                                -->

                                                <form role="form">
                                                    <label class="col-form-label">Curso</label>
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                                <option>Branding</option>
                                                            </p>                
                                                            </div>
                                                        </div>
                                                    <label class="col-form-label">Duracion</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>3 semanas</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-6">
                                                    <!---<a href=""><i class="fa fa-cloud-download big-icon"></i></a>-->
                                                    <label class="col-form-label">Categoria</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>Programacion</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                    <label class="col-form-label">Estado</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>Activo</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                                
                                        </div>
                                </div>
                                </div>
                            </div>
                    </div>
                            <td><button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Illustrator Avanzado</td>
                            <td>Diseño Grafico</td>
                            <td>3 semanas</td>
                            <td><button class="btn btn-outline-success btn-primary dim" type="button"><span>Activo</span></i></button></td>
                            <td><button class="btn btn-info" type="button" href="#modal3-form" data-toggle="modal"><i class="fa fa-paste"></i></button></td>
                            <div id="modal3-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6 b-r">
    
                                                        <!--
                                                            <p>Sign in today for more expirience.</p> 
                                                        -->
    
                                                        <form role="form">
                                                            <label class="col-form-label">Curso</label>
                                                            <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Illustrator Avanzado">
                                                            <label class="col-form-label">Duracion</label>
                                                            <div class="form-group row">
                                                                <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                    <option>3 semanas</option>
                                                                    <option>SENATI</option>
                                                                    <option>UPC</option>
                                                                </select>                
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                            <div>
                                                                <button class="btn btn-white btn-sm m-t-n-xs float-left" type="submit">Cancelar</button>
                                                                <button class="btn btn-primary btn-sm m-t-n-xs float-right" type="submit"><i class="fa fa-check"></i>&nbsp;Confirmar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <!---<a href=""><i class="fa fa-cloud-download big-icon"></i></a>-->
                                                            <label class="col-form-label">Categoria</label>
                                                            <div class="form-group row">
                                                                <div class="col-sm-10"><select class="form-control m-b" name="account">
                                                                    <option>Diseño Grafico</option>
                                                                    <option>SENATI</option>
                                                                    <option>UPC</option>
                                                                </select>                
                                                                </div>
                                                            </div>
                                                                <label class="col-form-label">Estado</label>
                                                                <input type="checkbox" class="js-switch_3" checked/>
                                                        </div>
                                                        
                                                </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <td><button class="btn btn-success" type="button" href="#modaleye3-form" data-toggle="modal"><i class="fa fa-eye"></i></button></td>
                        <div id="modaleye3-form" class="modal fade" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6 b-r">

                                                <!--
                                                    <p>Sign in today for more expirience.</p> 
                                                -->

                                                <form role="form">
                                                    <label class="col-form-label">Curso</label>
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                                <option>Illustrator Avanzado</option>
                                                            </p>                
                                                            </div>
                                                        </div>
                                                    <label class="col-form-label">Duracion</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>3 semanas</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-6">
                                                    <!---<a href=""><i class="fa fa-cloud-download big-icon"></i></a>-->
                                                    <label class="col-form-label">Categoria</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>Diseño Grafico</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                    <label class="col-form-label">Estado</label>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10"><p class="form-control m-b" name="account">
                                                            <option>Activo</option>
                                                        </p>                
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                                
                                        </div>
                                </div>
                                </div>
                            </div>
                    </div>
                            <td><button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        
                        </tbody>
                    </table>

                </div>
            </div>
        </div>








        </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-8">
                </div>
        </div>
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">
                    <li>
                        <a class="nav-link active" data-toggle="tab" href="#tab-1"> Notes </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#tab-2"> Projects </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#tab-3"> <i class="fa fa-gear"></i> </a>
                    </li>
                </ul>

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                            <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        There are many variations of passages of Lorem Ipsum available.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a2.jpg">
                                    </div>
                                    <div class="media-body">
                                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        All the Lorem Ipsum generators on the Internet tend to repeat.
                                        <br>
                                        <small class="text-muted">Today 4:21 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        <br>
                                        <small class="text-muted">Yesterday 2:45 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                        <br>
                                        <small class="text-muted">Yesterday 1:10 pm</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="float-left text-center">
                                        <img alt="image" class="rounded-circle message-avatar" src="img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        Uncover many web sites still in their infancy. Various versions have.
                                        <br>
                                        <small class="text-muted">Monday 8:37 pm</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small float-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small float-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small float-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary float-right">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class="small float-right m-t-xs">9 hours ago</div>-->
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small float-right m-t-xs">9 hours ago</div>
                                    <h4>Business valuation</h4>
                                    It is a long established fact that a reader will be distracted.

                                    <div class="small">Completion with: 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small float-right m-t-xs">9 hours ago</div>
                                    <h4>Contract with Company </h4>
                                    Many desktop publishing packages and web page editors.

                                    <div class="small">Completion with: 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small float-right m-t-xs">9 hours ago</div>
                                    <h4>Meeting</h4>
                                    By the readable content of a page when looking at its layout.

                                    <div class="small">Completion with: 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary float-right">NEW</span>
                                    <h4>The generated</h4>
                                    <!--<div class="small float-right m-t-xs">9 hours ago</div>-->
                                    There are many variations of passages of Lorem Ipsum available.
                                    <div class="small">Completion with: 22%</div>
                                    <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3><i class="fa fa-gears"></i> Settings</h3>
                            <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                        </div>

                        <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                    <label class="onoffswitch-label" for="example">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

    

    
 <!--- Cambiar Imagen-->
    <script>
        document.getElementById('inputGroupFile').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('previewImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
                document.querySelector('.custom-file-label').innerHTML = file.name;
            }
        });
    </script>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>
    <script src="js/plugins/switchery/switchery.js"></script>


<script>
    

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });

        var elem_2 = document.querySelector('.js-switch_2');
        var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

        var elem_3 = document.querySelector('.js-switch_3');
        var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

        var elem_4 = document.querySelector('.js-switch_4');
        var switchery_4 = new Switchery(elem_4, { color: '#1AB394' });
          
        var elem_5 = document.querySelector('.js-switch_5');
        var switchery_5 = new Switchery(elem_5, { color: '#f1AB394' });
            

        


</script>

    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
</body>
</html>
