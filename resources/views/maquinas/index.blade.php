<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | E-commerce</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

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
                <li>
                    <a href="horario-general-presencial.html"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios G.Presencial</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="horario-general-presencial.html">Presencial</a></li>
                        <li><a href="horario-general-calendar.html">Horario General</a></li>
                        <li><a href="horario-gp-areas.html">Areas</a></li>
                        <li><a href="horario-gp-salon.html">Salon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="horario-general-virtual.html"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios G.Virtual</span></a>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-group"></i> <span class="nav-label">Personal</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="candidatos.html">Candidatos</a>
                            
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
                            <a href="Colaboradores.html">Colaboradores</a>
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
                            <a href="capacitacion-horario.html">Capacitacion-Horario</a>
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
                    <a href="dashboard_areas.html"><i class="fa fa-tags"></i> <span class="nav-label">Áreas</span></a>
                </li>
                <li>
                    <a href="responsabilidades_areas.html"><i class="fa fa-list-alt"></i> <span class="nav-label">Responsabilidades</span></a>
                    <!-- 
                    <ul class="nav nav-second-level">
                        <li><a href="responsabilidades_areas.html">Areas</a></li>
                        <li><a href="responsabilidades-semanas.html">Semanas</a></li>
                        <li><a href="responsabilidades-asis.html">Asistencia</a></li>
                    </ul>
                    -->
                </li>
                <li class="active">
                    <a href="Maquinas.html"><i class="fa fa-desktop"></i> <span class="nav-label">Maquinas</span></a>
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
                    <a href="salones.html"><i class="fa fa-address-card-o"></i> <span class="nav-label">Salones</span></a>
                </li>
                <li>
                    <a href="configuracion.html"><i class="fa fa-cog"></i> <span class="nav-label">Ajustes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="config-institucion.html">Institucion</a></li>
                        <li><a href="config-carrera.html">Carrera</a></li>
                        <li><a href="config-curso.html">Curso</a></li>
                        <li><a href="config-programas.html">Programas</a></li>
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
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Maquinas</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Maquinas</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
                
                <div class="ibox-content">
                    <div class="text-center">
                    <a data-toggle="modal" class="btn btn-primary "  href="#modal-form1" > Agregar <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                        <div id="modal-form1" class="modal fade" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                        
                                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Maquina</h3>
                                                <select class="form-control m-b" name="account">
                                                    <option> 1</option>
                                                    <option> 2</option>
                                                    <option> 3</option>
                                                    <option> 4</option>
                                                    <option> 5</option>
                                                    <option> 6</option>
                                                </select>
                                                <p></p>

                                                <form role="form">
                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Detalles Tecnicos</h3></label><input type="email" placeholder="Enter Description" class="form-control"></div>
                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Numero Identificador</h3></label>
                                                        <select class="form-control m-b" name="account">
                                                            <option> 001</option>
                                                            <option> 002</option>
                                                            <option> 003</option>
                                                            <option> 004</option>
                                                            <option> 005</option>
                                                            <option> 006</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Salon Asignado</h3></label>
                                                        <select class="form-control m-b" name="account">
                                                            <option> Salon 1</option>
                                                            <option> Salon 2</option>
                                                            <option> Salon 3</option>
                                                            <option> Salon 4</option>
                                                            
                                                        </select>
                                                    </div> 
                                                    <div>
                                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>ADD</strong></button>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-6"><h4> Cambiar Icono </h4>
                                                <div class="custom-file">
                                                    <input type="file" class="custon-file-imput" id="imputGroupFile" accept="image/*">
                                                    <label class="custom-file-label" for="imputGroupFile"></i></label>

                                                    
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
        
        

        <div class="wrapper wrapper-content animated fadeInRight col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="img/pc.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price bg-danger">
                                    Inactive
                                </span>
                                
                                <a href="#" class="product-name"><h2> Maquina 1</h2></a>



                                <small class="text-muted text-center"><h3>Detalles Tecnicos</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>60 Dias</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Numero Identificador</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>001</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Salon Asignado</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Sin Asignar</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;"  href="#modal-form" ></a>
                                        </div>
                                        <div id="modal-form" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Maquina</h3>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 1</option>
                                                                    <option> 2</option>
                                                                    <option> 3</option>
                                                                    <option> 4</option>
                                                                    <option> 5</option>
                                                                    <option> 6</option>
                                                                </select>
                                                                <p></p>
                                                                <form role="form">
                                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Detalles Tecnicos</h3></label><input type="email" placeholder="Enter Description" class="form-control"></div>
                                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Numero Identificador</h3></label>
                                                                        <select class="form-control m-b" name="account">
                                                                            <option> 001</option>
                                                                            <option> 002</option>
                                                                            <option> 003</option>
                                                                            <option> 004</option>
                                                                            <option> 005</option>
                                                                            <option> 006</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Salon Asignado</h3></label>
                                                                        <select class="form-control m-b" name="account">
                                                                            <option> Salon 1</option>
                                                                            <option> Salon 2</option>
                                                                            <option> Salon 3</option>
                                                                            <option> Salon 4</option>
                                                                            <option> Ninguno</option>
                                                                            
                                                                        </select>
                                                                    </div> 
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>ADD</strong></button>
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-6"><h4> Cambiar Icono </h4>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custon-file-imput" id="imputGroupFile" accept="image/*">
                                                                    <label class="custom-file-label" for="imputGroupFile"></i></label>
                
                                                                    
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
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="img/pc.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Maquina 2</h2></a>



                                <small class="text-muted text-center"><h3>Detalles Tecnicos</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>60 Dias</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Numero Identificador</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>001</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Salon Asignado</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Salon 2</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                        <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-form" ></a>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box active">

                            <div class="product-imitation">
                                <img src="img/pc.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Maquinas 3</h2></a>



                                <small class="text-muted text-center"><h3>Detalles Tecnicos</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>60 Dias</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Numero Identificador</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>001</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Salon Asignado</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Salon 1</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash"  style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-form" ></a>
                                        </div>                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="img/pc.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Maquina 4 </h2></a>


                                <small class="text-muted text-center"><h3>Detalles Tecnicos</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>60 Dias</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Numero Identificador</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>001</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Salon Asignado</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Salon3</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-form" ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="img/pc.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Maquina 5</h2></a>


                                <small class="text-muted text-center"><h3>Detalles Tecnicos</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>60 Dias</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Numero Identificador</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>001</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Salon Asignado</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Salon 4</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-form" ></a>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="img/pc.jpg" class="rounded-circle" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2>Maquina 6</h2></a>


                                <small class="text-muted text-center"><h3>Detalles Tecnicos</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>60 Dias</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Numero Identificador</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>001</h5>
                                </div>
                                <small class="text-muted text-center"><h3>Salon Asignado</h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Salon 3</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-form" ></a>
                                        </div>                                    
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

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/switchery/switchery.js"></script>


<script>
    

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });

        var elem_2 = document.querySelector('.js-switch_2');
        var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

        var elem_3 = document.querySelector('.js-switch_3');
        var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

        var elem_4 = document.querySelector('.js-switch_4');
        var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
            switchery_4.disable();
        var elem_5 = document.querySelector('.js-switch_5');
        var switchery_5 = new Switchery(elem_5, { color: '#f8ac59' });
            switchery_5.disable();

        


</script>

</body>

</html>
