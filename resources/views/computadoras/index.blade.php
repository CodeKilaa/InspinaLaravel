<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal-Computadoras y Programas</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

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
                    
                </li>
                <li>
                    <a href="salones.html"><i class="fa fa-address-card-o"></i> <span class="nav-label">Salones</span></a>
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
                <h2>Computadora y Programas</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Computadora y Programas</strong>
                    </li>
                </ol>
            </div>
            
        </div>
        

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <a class="product-name " style="margin-left: 20px;"><h1>Computadora</h1></a>
                                    <div class="col-lg-12">
                                        <div class="ibox ">
                                            <div class="ibox-content">
                                                <div class="row">
                                                    <div class="col-sm-3 b-r">
                                                        <dl class="row mb-0">
                                                            <div class="col-sm-6 text-sm-left"><dt>Tipo:</dt>
                                                                <dd class="sm-2">Computadora</dd>
                                                            </div>
                                                        </dl>
                                                        <p class="text-center">
                                                            <a href=""><i class="fa fa-desktop big-icon "></i></a>
                                                        </p>

                                                        
                                                        <div class="form-group"><label></label>
                                                            <input type="checkbox" class="js-switch_4" checked />
                                                            <a style="color: black;">Activo</a>
                                                            
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-3">
                                                        <form role="form">
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-6 text-sm-left"><dt>Codigo de Serie:</dt>
                                                                    <dd class="sm-2">Xo78Wew787545</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-4">
                                                                <div class="col-sm-6 text-sm-left"><dt>Procesador:</dt>
                                                                    <dd class="sm-2">Core I8</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-4">
                                                                <div class="col-sm-6 text-sm-left"><dt>Tarjeta Grafica:</dt>
                                                                    <dd class="sm-2">MSI Radeon Rx 570</dd>
                                                                </div>
                                                            </dl>
                                                            
                                                            <div>

                                                            </div>
                                                        </form>                                                                                                               
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <form role="form">
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-6 text-sm-left"><dt>Memoria Grafica:</dt>
                                                                    <dd class="sm-2">geforce gtx 1650</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-4">
                                                                <div class="col-sm-6 text-sm-left"><dt>Ram:</dt>
                                                                    <dd class="sm-2">Static Ram</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-4">
                                                                <div class="col-sm-6 text-sm-left"><dt>Almacenamiento:</dt>
                                                                    <dd class="sm-2">8 GBytes</dd>
                                                                </div>
                                                            </dl>

                                                        </form>                                                                                                               
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <form role="form">
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-6 text-sm-left"><dt>Ultimo Mantenimiento</dt>
                                                                    <dd class="sm-2">27/03/2024</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-4">
                                                                <div class="col-sm-6 text-sm-left"><dt>Incidencias:</dt>
                                                                    <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye" style="font-size: 20px;" href="#modal-form2" ></a>
                                                                </div>
                                                            </dl>
                                                        </form>                                                                                                               
                                                    </div>      
                                                </div>
                                                <div class="text-right">
                                                    <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                                    
                                                    <a data-toggle="modal" class="btn btn-primary btn-success fa fa-edit" style="font-size: 20px;" href="#modal-form" ></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                        <div id="modal-form2" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="ibox">
                                                                    <div class="ibox-content product-box">
                                                                        <a class="product-name text-center"><h1><strong> Incidencias</strong></h1></a>
                                                                        <a data-toggle="modal" class="btn btn-primary btn-success fa fa-plus-circle float-right" onclick="hideModal('modal-form2'); showModal('modal-form3');" style="font-size: 20px;" href="#modal-form3" ></a>                                           
                                                                                <div class="col-lg-14">
                                                                                    <div class="ibox ">
                                                                                        <div class="ibox-content">
                                                                                            <div class="row">
                                                                                                
                                                                                                <div class="col-sm-12">
                                                                                                    <form role="form">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-2 text-sm-left">
                                                                                                                <dt>Fecha:</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-3 text-sm-left">
                                                                                                                <dt>10/03/2024</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-3 text-sm-left">
                                                                                                                <dt>Descripcion:</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-2 text-sm-left">
                                                                                                                <dt>******</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-2 text-sm-left">
                                                                                                                <a class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <br>
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-2 text-sm-left">
                                                                                                                <dt>Fecha:</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-3 text-sm-left">
                                                                                                                <dt>22/03/2024</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-3 text-sm-left">
                                                                                                                <dt>Descripcion:</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-2 text-sm-left">
                                                                                                                <dt>******</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-2 text-sm-left">
                                                                                                                <a class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                                                                                            </div>
                                                                                                        </div>                       
                                                                                                        <div>
                                                                                                           
                                                                                                        </div>
                                                                                                    </form>                                                                                                               
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
   
                                        <div id="modal-form3" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="ibox">
                                                                    <div class="ibox-content product-box">
                                                                        <a class="product-name text-center"><h1><strong>Incidencias</strong></h1></a>
                                                                        <a class="btn btn-primary btn-success float-right" style="font-size: 14px;" href="" >Agregar</a>                                           
                                                                                <div class="col-lg-14">
                                                                                    <div class="ibox ">
                                                                                        <div class="ibox-content">
                                                                                            <div class="row">
                                                                                                
                                                                                                <div class="col-sm-12">
                                                                                                    <form role="form">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4 text-sm-left">
                                                                                                                <dt>Fecha:</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-6 text-sm-left">
                                                                                                                <input style="padding: 1px 8px;" type="date" class="form-control" ></input>
                                                                                                            </div>
                                                                                                                                                                               
                                                                                                        </div>
                                                                                                        <br>
                                                                                                        <div class="row">
                                                                                                            
                                                                                                            <div class="col-sm-4 text-sm-left">
                                                                                                                <dt>Descripcion:</dt>
                                                                                                            </div>
                                                                                                            <div class="col-sm-6 text-sm-left">
                                                                                                                <input style="padding: 1px 8px;" type="text" class="form-control" ></input>    
                                                                                                            </div>
                                                                                                            
                                                                                                        </div>                      
                                                                                                        <div>
                                                                                                           
                                                                                                        </div>
                                                                                                    </form>                                                                                                               
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
                                    
                            
                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div id="modal-form" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="ibox">
                                                                    <div class="ibox-content product-box">
                                                                        <a class="product-name"><h1>Computadora</h1></a>                                           
                                                                                <div class="col-lg-14">
                                                                                    <div class="ibox ">
                                                                                        <div class="ibox-content">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-6 b-r">
                                                                                                    <dl class="row mb-0">
                                                                                                        <div class="col-sm-12 text-sm-left"><dt>Tipo:</dt>
                                                                                                            <select class="form-control m-b" name="account">
                                                                                                                <option> Computadora</option>
                                                                                                                <option> Impresora</option>
                                                                                                            
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </dl>
                                                                                                    <p class="text-center">
                                                                                                        <a href=""><i class="fa fa-desktop big-icon "></i></a>
                                                                                                        <div class="col-sm-10 btn btn-w-m btn-success"><h4>Cambiar Icono</h4></div>
                                                                                                    </p>
                                                                                                    <div class="form-group"><label></label>
                                                                                                        <input type="checkbox" class="js-switch" checked />
                                                                                                        <a style="color: black;">Activo</a>
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-sm-6">
                                                                                                    <form role="form">
                                                                                                        <dl class="row mb-0">
                                                                                                            <div class="col-sm-12 text-sm-left"><dt>Codigo de Serie:</dt>
                                                                                                                <input style="padding: 1px 8px;" type="text" class="form-control" value="Xo78Wew787545"></input>
                                                                                                            </div>
                                                                                                        </dl>
                                                                                                        <dl class="row mb-0">
                                                                                                            <div class="col-sm-12 text-sm-left"><dt>Procesador:</dt>
                                                                                                                <select class="form-control m-b" name="account">
                                                                                                                    <option> Core I8</option>
                                                                                                                    <option> Core I5</option>
                                                                                                                    <option> Core I3</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </dl>
                                                                                                        <dl class="row mb-0">
                                                                                                            <div class="col-sm-12 text-sm-left"><dt>Tarjeta Grafica:</dt>
                                                                                                                <input style="padding: 1px 8px;" type="text" class="form-control" value="MSI Radeon Rx 570"></input>
                                                                                                            </div>
                                                                                                        </dl>
                                                                                                        <dl class="row mb-0">
                                                                                                            <div class="col-sm-12 text-sm-left"><dt>Memoria Grafica:</dt>
                                                                                                                <input style="padding: 1px 8px;" type="text" class="form-control" value="geforce gtx 1650"></input>
                                                                                                            </div>
                                                                                                        </dl>
                                                                                                        <dl class="row mb-0">
                                                                                                            <div class="col-sm-12 text-sm-left"><dt>Ram:</dt>
                                                                                                                <input style="padding: 1px 8px;" type="text" class="form-control" value="Static Ram"></input>
                                                                                                            </div>
                                                                                                        </dl>
                                                                                                        <dl class="row mb-0">
                                                                                                            <div class="col-sm-12 text-sm-left"><dt>Almacenamiento:</dt>
                                                                                                                <select class="form-control m-b" name="account">
                                                                                                                    <option> 8 GBytes</option>
                                                                                                                    <option> 7 GBytes</option>
                                                                                                                    <option> 6 GBytes</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </dl>
                                                                                                        
                                                                                                        <div><br><br>
                                                                                                            <div>
                                                                                                                <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success" type="submit"><strong> Guardar</strong></button>
                                                                                                                <div>
                                                                                                                    <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                                                                </div> 
                                                                                                            </div>
                                                                                                        
                                                                                                            
                                                                                                        </div>
                                                                                                    </form>                                                                                                               
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
                </div>
                <style>
                                    
                    
                </style>
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="row col-md-12">
                                <a class="product-name col-sm-11"><h1>Programas</h1></a>
                                <button data-toggle="modal" class="btn btn-sm btn-primary float-right  btn-success   mt-2" style="height: 40px;" type="submit" href="#modal-form4" ><strong> Seleccionar</strong></button> 
                            </div>
                            <div id="modal-form4" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog modal-custom">
                                    <div class="modal-content">
                                        
                                            <div class="row">
                                                <div class="ibox-content">

                                                    
                                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                <thead>
                                                <tr>
                                                    <th>Marcar</th>
                                                    <th>Programa</th>
                                                    <th>Sistema</th>
                                                    <th>Seleccionar</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="gradeX">
                                                    <td class="text-center"><input type="checkbox" checked style="cursor: pointer;" /></td>
                                                    <td>Adobe Ilustrator
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td class="text-center"><button class="btn btn-outline-success btn-success dim" type="button"><span>Seleccionar</span></i></button></td>
                                                    <td class="center"></td>
                                                </tr>
                                                <tr class="gradeC">
                                                    <td class="text-center"><input type="checkbox" checked style="cursor: pointer;" /></td>
                                                    <td>Adobe Photoshop
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td class="text-center"><button class="btn btn-outline-success btn-success dim" type="button"><span>Seleccionar</span></i></button></td>
                                                    <td class="center">C</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td class="text-center"><input type="checkbox" checked style="cursor: pointer;" /></td>
                                                    <td>Star UML
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td class="text-center"><button class="btn btn-outline-success btn-success dim" type="button"><span>Seleccionar</span></i></button></td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td class="text-center"><input type="checkbox" checked style="cursor: pointer;" /></td>
                                                    <td>Adobe LighTroom
                                                    </td>
                                                    <td>Win 98+</td>
                                                    <td class="text-center"><button class="btn btn-outline-success btn-success dim" type="button"><span>Seleccionar</span></i></button></td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td class="text-center"><input type="checkbox" checked style="cursor: pointer;" /></td>
                                                    <td>Adobe Express
                                                    </td>
                                                    <td>Win 98+</td>
                                                    <td class="text-center"><button class="btn btn-outline-success btn-success dim" type="button"><span>Seleccionar</span></i></button></td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td class="text-center"><input type="checkbox" checked style="cursor: pointer;" /></td>
                                                    <td>Adobe InDesigner
                                                    </td>
                                                    <td>Win 98+</td>
                                                    <td class="text-center"><button class="btn btn-outline-success btn-success dim" type="button"><span>Seleccionar</span></i></button></td>
                                                    <td class="center">A</td>
                                                </tr>
                                                
                                                
                                                </tbody>
                                                
                                                </table>
                                                    </div>
                            
                                                </div>
                                                
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <style>
                                button.dim{
                                    margin-bottom: 10px !important;
                                }
                                
                            </style>    
                            
                                <div class="modal-body">              
                                    <div class="row">        
                                        <div class="col-md-4">
                                            <div class="ibox">
                                                <div class="ibox-content product-box">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r">
                                                            <h4 class="text-center">
                                                                ID: 01   
                                                            </h4>
                                                            <p class="text-center">
                                                                <img src="" class="fa fa-desktop big-icon">
                                                            </p>
                                                            
                                                            <p class="text-center">
                                                                <input type="checkbox" class="js-switch_5" checked />
                                                                <a style="color: black;">Activo</a>       
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form role="form">
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Programa:</h3>
                                                                        <dd class="sm-2">Star UML</dd>
                                                                    </div>
                                                                </dl>
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Descripcion:</h3>
                                                                        <dd class="sm-2">Creación de Diagramas</dd>
                                                                    </div>
                                                                </dl>
                                                                <div class="text-right">
                                                                    <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mb-2" style="font-size: 20px; margin-right: 30px;" href="" ></a>
                                                                </div>                                                       
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>    
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ibox">
                                                <div class="ibox-content product-box">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r">
                                                            <h4 class="text-center">
                                                                ID: 02 
                                                            </h4>
                                                            <p class="text-center">
                                                                <img src="" class="fa fa-desktop big-icon">
                                                            </p>
                                                            
                                                            <p class="text-center">
                                                                <input type="checkbox" class="js-switch_6" checked />
                                                                <a style="color: black;">Activo</a>       
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form role="form">
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Programa:</h3>
                                                                        <dd class="sm-2">Adove Ilustrator</dd>
                                                                    </div>
                                                                </dl>
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Descripcion:</h3>
                                                                        <dd class="sm-2">Editor de Graficos</dd>
                                                                    </div>
                                                                </dl>
                                                                
                                                                <div class="text-right">
                                                                    <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mb-2" style="font-size: 20px; margin-right: 30px;" href="" ></a>
                                                                </div>                                                       
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div> 
                                        <div class="col-md-4">
                                            <div class="ibox">
                                                <div class="ibox-content product-box">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r">
                                                            <h4 class="text-center">
                                                                ID: 03  
                                                            </h4>
                                                            <p class="text-center">
                                                                <img src="" class="fa fa-desktop big-icon">
                                                            </p>
                                                            
                                                            <p class="text-center">
                                                                <input type="checkbox" class="js-switch_7" checked />
                                                                <a style="color: black;">Activo</a>       
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form role="form">
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Programas:</h3>
                                                                        <dd class="sm-2">Adobe Photoshop</dd>
                                                                    </div>
                                                                </dl>
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Descripcion:</h3>
                                                                        <dd class="sm-2">Editor de Fotografias</dd>
                                                                    </div>
                                                                </dl>
                                                                <div class="text-right">
                                                                    <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mb-2" style="font-size: 20px; margin-right: 30px;" href="" ></a>
                                                                </div>                                                
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>    
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ibox">
                                                <div class="ibox-content product-box">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r">
                                                            <h4 class="text-center">
                                                                ID: 04  
                                                            </h4>
                                                            <p class="text-center">
                                                                <img src="" class="fa fa-desktop big-icon">
                                                            </p>
                                                            
                                                            <p class="text-center">
                                                                <input type="checkbox" class="js-switch_8" checked />
                                                                <a style="color: black;">Activo</a>       
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form role="form">
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Programas:</h3>
                                                                        <dd class="sm-2">Adobe LighTroom</dd>
                                                                    </div>
                                                                </dl>
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Descripcion:</h3>
                                                                        <dd class="sm-2">Software de edición y gestión de fotografías</dd>
                                                                    </div>
                                                                </dl>
                                                                <div class="text-right">
                                                                    <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mb-2" style="font-size: 20px; margin-right: 30px;" href="" ></a>
                                                                </div>                                                
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>    
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ibox">
                                                <div class="ibox-content product-box">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r">
                                                            <h4 class="text-center">
                                                                ID: 05  
                                                            </h4>
                                                            <p class="text-center">
                                                                <img src="" class="fa fa-desktop big-icon">
                                                            </p>
                                                            
                                                            <p class="text-center">
                                                                <input type="checkbox" class="js-switch_9" checked />
                                                                <a style="color: black;">Activo</a>       
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form role="form">
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Programas:</h3>
                                                                        <dd class="sm-2">Adobe InDesigner</dd>
                                                                    </div>
                                                                </dl>
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Descripcion:</h3>
                                                                        <dd class="sm-2">Software de maquetación y diseño editorial</dd>
                                                                    </div>
                                                                </dl>
                                                                <div class="text-right">
                                                                    <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mb-2" style="font-size: 20px; margin-right: 30px;" href="" ></a>
                                                                </div>                                                
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>    
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ibox">
                                                <div class="ibox-content product-box">
                                                    <div class="row">
                                                        <div class="col-sm-6 b-r">
                                                            <h4 class="text-center">
                                                                ID: 06  
                                                            </h4>
                                                            <p class="text-center">
                                                                <img src="" class="fa fa-desktop big-icon">
                                                            </p>
                                                            
                                                            <p class="text-center">
                                                                <input type="checkbox" class="js-switch_10" checked />
                                                                <a style="color: black;">Activo</a>       
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form role="form">
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Programas:</h3>
                                                                        <dd class="sm-2">Adobe Express</dd>
                                                                    </div>
                                                                </dl>
                                                                <dl class="row mb-5">
                                                                    <div class="col-sm-12 text-sm-left"><h3>Descripcion:</h3>
                                                                        <dd class="sm-2">Herramienta de Diseño Grafico</dd>
                                                                    </div>
                                                                </dl>
                                                                <div class="text-right">
                                                                    <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mb-2" style="font-size: 20px; margin-right: 30px;" href="" ></a>
                                                                </div>                                                
                                                                </div>
                                                            </form>
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
    
                    

        
        

<!--- Cambiar Imagen-->
<script>

var currentWeek = 1;
        
        function toggleCheck(cell) {
            if (cell.textContent === '✔️') {
                cell.textContent = '❌';
            } else {
                cell.textContent = '✔️';
            }
        }
        

        
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
<script src="js/plugins/dataTables/datatables.min.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>


<script>


$(document).ready(function(){
            $('.dataTables-example').DataTable({
                
                responsive: true,
               
                buttons: [
                

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });
    


function hideModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('show');
    modal.style.display = 'none';
  }
}

function showModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add('show');
  }
}


    

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });

        var elem_4 = document.querySelector('.js-switch_4');
        var switchery_4 = new Switchery(elem_4, { color: '#1AB394' });
            switchery_4.disable();
            
        var elem_5 = document.querySelector('.js-switch_5');
        var switchery_5 = new Switchery(elem_5, { color: '#1AB394' });
            switchery_5.disable();

        var elem_6 = document.querySelector('.js-switch_6');
        var switchery_6 = new Switchery(elem_6, { color: '#1AB394' });
            switchery_6.disable();
            var elem_7 = document.querySelector('.js-switch_7');
        var switchery_7 = new Switchery(elem_7, { color: '#1AB394' });
            switchery_7.disable();
            var elem_8 = document.querySelector('.js-switch_8');
        var switchery_8 = new Switchery(elem_8, { color: '#1AB394' });
            switchery_8.disable();
            var elem_9 = document.querySelector('.js-switch_9');
        var switchery_9 = new Switchery(elem_9, { color: '#1AB394' });
            switchery_9.disable();
            var elem_10 = document.querySelector('.js-switch_10');
        var switchery_10 = new Switchery(elem_10, { color: '#1AB394' });
            switchery_10.disable();
            
            
        
    


        

        

      
        


</script>

</body>

</html>
