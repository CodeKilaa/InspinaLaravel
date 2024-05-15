<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal-Colaboradores</title>

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
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span> <span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="horario-general-presencial.html"><i class="fa fa-clock-o"></i> <span class="nav-label">Horarios G.Presencial</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="horarioGeneral">Presencial</a></li>
                        <li><a href="horarioAreas">Areas</a></li>
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
                        <li class="active">
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
                <h2>Colaboradores</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Colaboradores</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
                <style>
                                    
                    .modal-custom {
                        max-width: 700px; 
                        
                    }
                </style>
                <div class="ibox-content">
                    <div class="text-center">
                    <a data-toggle="modal"  class="btn btn-primary "  href="#modal-form5" > Agregar <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div id="modal-form1" class="modal fade" aria-hidden="true">
                        <div class="modal-dialog modal-custom">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Informacion Personal </h3>
                                            

                                            <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Nombres:</h5></label><label for="">Marlo</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Apellidos:</h5></label><label for="">Zamaniego Calderon</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Dirección:</h5></label><label for="">Urb. Emilio Fernandez lt.13 Mz. H</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Institución:</h5></label><label for="">Senati</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Ciclo:</h5></label><label for="">4to</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Correo:</h5></label><label for="">marlo@gmail.com</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Fecha de Nacimiento:</h5></label><label for="">O2/05/2000</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">DNI:</h5></label><label for="">72802334</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Celular:</h5></label><label for="">924561234</label></div>    
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Área:</h5></label><label for="">Estructura</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Carrera:</h5></label><label for="">Ingeniero de Software</label></div>
                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Estado:</h5></label><label for="">Activo</label></div>     
                                                <div>
                                                    <a data-toggle="modal" class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit btn-success" onclick="hideModal('modal-form1'); showModal('modal-form2');" style="font-size: 20px; width: 60px;"  href="#modal-form"></a>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                            <a style="color: black;">ID:00003</a>
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a2.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            <a class="btn btn-primary btn-success fa fa-desktop" style="width: 100px; font-size: 18px;" href="computadoras" ></a>
                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 100px; font-size: 18px;" href="prestamos" ></a>
                                            
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>

                <div id="modal-form5" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog modal-custom">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Informacion Principal </h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Nombres:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Apellidos:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Direccion:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Institucion:</h5></label><select class="form-control m-b" name="account">
                                                                        <option> Senati</option>
                                                                        <option> UPC</option>
                                                                        <option> UNI</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Ciclo:</h5></label><select class="form-control m-b" name="account">
                                                                        <option> 1</option>
                                                                        <option> 2</option>
                                                                        <option> 3</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Correo:</h5></label><input style="padding: 1px 8px;" type="email" class="form-control"></input></div>
                                                                </form>
            
                                                                
                                                            </div>
                                                            <div class="col-sm-4 b-r "><h3 class="m-t-none m-b">.</h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>                                                                 
                                                                    
                                                                    <div class="form-group"><label><h5 class="m-t-none">Fecha de Nacimiento:</h5></label><input style="padding: 1px 8px;" type="date" class="form-control"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">DNI:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Celular:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control"></input></div>    
                                                                    <div class="form-group"><label><h5 class="m-t-none">Área:</h5></label><select class="form-control m-b" name="account">
                                                                        <option> Programación</option>
                                                                        <option> Diseño</option>
                                                                        <option> Arquitectura</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Carrera:</h5></label><select class="form-control m-b" name="account">
                                                                        <option> Ingenieria de Software</option>
                                                                        <option> Desarollo de Software</option>
                                                                        <option> Diseño Gráfico</option>
                                                                    </select></div>
                                                                        
                                                                    
                                                                </form>
            
                                                                <form role="form">
                                                                    
                                                                    <br>
                                                                    <br>
                                                                
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success"  type="submit"><strong> Guardar</strong></button>
                                                                        <div>
                                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 text-center "><h2><strong> Ingrese Datos</strong></h2>
                                            
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a4.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            
                                            <a data-toggle="modal" class="btn btn-primary btn-success" style="width: 200px; font-size: 16px;" href="" >Subir Imagen</a>
                                            
                                    </div>
                                    
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    </div>
                </div>
                
            </div>
        </div>
        
        

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="wrapper-content mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox-content">
                            <div class="d-flex align-items-center">
                                <p class="mr-2"><strong>Filtro de Colaboradores:</strong></p>
                                <div class="form-check form-check-inline mr-2">
                                    <input class="form-check-input" type="checkbox" id="activoCheckbox">
                                    <label class="form-check-label" for="activoCheckbox">Activo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desactivoCheckbox">
                                    <label class="form-check-label" for="desactivoCheckbox">Desactivo</label>
                                </div>
                                <button type="button" class="btn btn-primary ml-2">Filtrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box ">
                            <div class="text-center rounded-circle mb-5">
                                <img src="img/a2.jpg" class="rounded-circle ">
                            </div>
                            <div class="product-desc">
                                <span class="product-price btn-Default" style="background-color: transparent;">
                                    <input type="checkbox" class="js-switch_4" checked />
                                    <a style="color: black;">Activo</a>
                                </span>
                                
                                
                                <a href="#" class="product-name"><h2>Marlo Samaniego Calderon</h2></a>



                                <small class="text-muted text-left"><h3>Área:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>Estructura</h5>
                                </div>
                                <small class="text-muted text-left"><h3>DNI:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>72802334</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Correo:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>marlo@gmail.com</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Celular:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>924561234</h5>
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right ">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mx-1" style="font-size: 20px;" href="" ></a>
                                            <a class="btn btn-primary fa fa-clock-o mx-1" style="font-size: 20px;" href="horario-clases" ></a>
                                            <a class="btn btn-primary btn-warning fa fa-book mx-1" style="font-size: 20px;" href="capacitacion" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye mx-1" style="font-size: 20px;" href="#modal-form1" ></a>
                                        </div>
                                        <div id="modal-form" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog modal-custom">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Nombres:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Marlo"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Apellidos:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Zamaniego Calderon"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Dirección:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Urb. Emilio Fernandez lt.13 Mz. H"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Institución:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Senati</option>
                                                                        <option> UTP</option>
                                                                        <option> UCH</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Ciclo:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> 1ro</option>
                                                                        <option> 2do</option>
                                                                        <option> 3ro</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Correo:</h5></label><input style="padding: 1px 8px;" type="email" class="form-control" value="Marlo@gmail.com"></input></div>
                                                                                                                       
                                                                </form>   
                                                            </div>
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">.</h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Fecha de Nacimiento:</h5></label><input style="padding: 1px 8px;" type="date" class="form-control" value="02/05/2000"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">DNI:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="75123445"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Celular:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="923456123"></input></div>      
                                                                    <div class="form-group"><label><h5 class="m-t-none">Área:</h5></label><select class="form-control m-b" name="account" >
                                                                        <option selected>Estructura</option>
                                                                        <option> Diseño</option>
                                                                        <option> Programación</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Salón:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Salón 1</option>
                                                                        <option>Salón 2</option>
                                                                        <option> Salón 3</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Carrera:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Desarrollo de Software</option>
                                                                        <option> Ingenieria de Software</option>
                                                                        <option> Diseño Grafico</option>
                                                                    </select></div>
                                                                        
                                                                    
                                                                </form>
            
                                                                <form role="form">
                                                                    
                                                                    <div class="form-group"><label>Estado:   </label>
                                                                        <input type="checkbox" class="js-switch" checked />
                                                                <br>
                                                                <br>        
                                                                        
                                                                </div>
                                                                
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success"  type="submit"><strong> Guardar</strong></button>
                                                                        <div>
                                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                            <a style="color: black;">ID:00003</a>
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a2.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-desktop mb-4" style="width: 120px; font-size: 18px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success mb-4" style="width: 120px; font-size: 12px;" href="" >Cambiar Imagen</a>
                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 120px; font-size: 18px;" href="prestamos" ></a>
                                            
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

                            <div class="text-center rounded-circle mb-5">
                                <img src="img/a1.jpg" class="rounded-circle ">
                            </div>
                            <div class="product-desc">
                                <span class="product-price btn-Default" style="background-color: transparent;">
                                    <input type="checkbox" class="js-switch_5" checked />
                                    <a style="color: black;">Activo</a>
                                </span>
                                
                                <a href="#" class="product-name"><h2> Juan Flores Ortega</h2></a>



                                <small class="text-muted text-left"><h3>Área:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>Programación</h5>
                                </div>
                                <small class="text-muted text-left"><h3>DNI:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>77892239</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Correo:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>JuanF@gmail.com</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Celular:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>924661234</h5>
                                </div>
                                <div class="m-t text-righ">
                                    <style>
                                    
                                        .modal-custom {
                                            max-width: 700px; 
                                            
                                        }
                                    </style>
                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mx-1" style="font-size: 20px;" href="" ></a>
                                            <a class="btn btn-primary fa fa-clock-o mx-1" style="font-size: 20px;" href="horario-clases" ></a>
                                            <a class="btn btn-primary btn-warning fa fa-book mx-1" style="font-size: 20px;" href="capacitacion" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye mx-1" style="font-size: 20px;" href="#modal-formVer1" ></a>
                                        </div>
                                        <div id="modal-formVer1" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog modal-custom">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                            

                                                            <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Nombres:</h5></label><label for="">Juan</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Apellidos:</h5></label><label for="">Flores Ortega</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Dirección:</h5></label><label for="">Urb. Emilio Fernandez lt.13 Mz. H</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Institución:</h5></label><label for="">Senati</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Ciclo:</h5></label><label for="">4to</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Correo:</h5></label><label for="">Juan@gmail.com</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Fecha de Nacimiento:</h5></label><label for="">O2/05/2000</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">DNI:</h5></label><label for="">75123445</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Celular:</h5></label><label for="">923456123</label></div>    
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Área:</h5></label><label for="">Programación</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Carrera:</h5></label><label for="">Ingeniero de Software</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Estado:</h5></label><label for="">Activo</label></div>     
                                                                <div>
                                                                    <a data-toggle="modal" class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit btn-success" onclick="hideModal('modal-formVer1'); showModal('modal-formjuan');" style="font-size: 20px; width: 60px;"  href="#modal-form6"></a>
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                                            <a style="color: black;">ID:00003</a>
                                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                                <img src="img/a1.jpg" class="img-lg w-200 h-200" >
                                                                
                                                            </div>
                                                            <a class="btn btn-primary btn-success fa fa-desktop" style="width: 100px; font-size: 18px;" href="computadoras" ></a>
                                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 100px; font-size: 18px;" href="prestamos" ></a>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div id="modal-form6" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog modal-custom">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Nombres:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Juan"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Apellidos:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Flores Ortega"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Dirección:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Urb. Emilio Fernandez lt.13 Mz. H"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Institución:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Senati</option>
                                                                        <option> UTP</option>
                                                                        <option> UCH</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Ciclo:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> 1ro</option>
                                                                        <option> 2do</option>
                                                                        <option> 3ro</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Correo:</h5></label><input style="padding: 1px 8px;" type="email" class="form-control" value="juan@gmail.com"></input></div>
                                                                                                                       
                                                                </form>   
                                                            </div>
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">.</h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Fecha de Nacimiento:</h5></label><input style="padding: 1px 8px;" type="date" class="form-control" value="02/05/2000"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">DNI:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="75123445"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Celular:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="923456123"></input></div>      
                                                                    <div class="form-group"><label><h5 class="m-t-none">Área:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected>Programación</option>
                                                                        <option> Diseño</option>
                                                                        <option> Programación</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Salón:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Salón 1</option>
                                                                        <option>Salón 2</option>
                                                                        <option> Salón 3</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Carrera:</h5></label><select class="form-control m-b" name="account">
                                                                        <option > Desarrollo de Software</option>
                                                                        <option> Ingenieria de Software</option>
                                                                        <option selected> Diseño Grafico</option>
                                                                    </select></div>
                                                                        
                                                                    
                                                                </form>
            
                                                                <form role="form">
                                                                    
                                                                    <div class="form-group"><label>Estado:   </label>
                                                                        <input type="checkbox" class="js-switch_11" checked />
                                                                <br>
                                                                <br>        
                                                                        
                                                                </div>
                                                                
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success"  type="submit"><strong> Guardar</strong></button>
                                                                        <div>
                                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                            <a style="color: black;">ID:00003</a>
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a1.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-desktop mb-4" style="width: 120px; font-size: 18px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success mb-4" style="width: 120px; font-size: 12px;" href="" >Cambiar Imagen</a>
                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 120px; font-size: 18px;" href="prestamos" ></a>
                                            
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
                        <div class="ibox-content product-box active">

                            <div class="text-center rounded-circle mb-5">
                                <img src="img/a7.jpg" class="rounded-circle ">
                            </div>
                            <div class="product-desc">
                                <span class="product-price btn-Default" style="background-color: transparent;">
                                    <input type="checkbox" class="js-switch_6" checked />
                                    <a style="color: black;">Activo</a>
                                </span>
                                
                                <a href="#" class="product-name"><h2> Paolo Guerrero Carillo </h2></a>



                                <small class="text-muted text-left"><h3>Área:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>Analisis</h5>
                                </div>
                                <small class="text-muted text-left"><h3>DNI:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>78912364</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Correo:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>PaoloG9@gmail.com</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Celular:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>937560234</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mx-1" style="font-size: 20px;" href="" ></a>
                                            <a class="btn btn-primary fa fa-clock-o mx-1" style="font-size: 20px;" href="horario-clases" ></a>
                                            <a class="btn btn-primary btn-warning fa fa-book mx-1" style="font-size: 20px;" href="capacitacion" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye mx-1" style="font-size: 20px;" href="#modal-formVer2" ></a>
                                        </div>
                                        <div id="modal-formVer2" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog modal-custom">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Informacion Personal </h3>
                                                            

                                                            <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Nombres:</h5></label><label for="">Paolo</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Apellidos:</h5></label><label for="">Guerrero Carrillo</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Dirección:</h5></label><label for="">Urb. Emilio Fernandez lt.13 Mz. H</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Institución:</h5></label><label for="">Senati</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Ciclo:</h5></label><label for="">4to</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Correo:</h5></label><label for="">paolo@gmail.com</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Fecha de Nacimiento:</h5></label><label for="">O2/05/2000</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">DNI:</h5></label><label for="">75123445</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Celular:</h5></label><label for="">923456123</label></div>    
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Área:</h5></label><label for="">Analisis</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Carrera:</h5></label><label for="">Ingenieria de Software</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Estado:</h5></label><label for="">Activo</label></div>     
                                                                <div>
                                                                    <a data-toggle="modal" class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit btn-success" onclick="hideModal('modal-formVer2'); showModal('modal-formjuan');" style="font-size: 20px; width: 60px;"  href="#modal-form7"></a>
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                                            <a style="color: black;">ID:00003</a>
                                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                                <img src="img/a7.jpg" class="img-lg w-200 h-200" >
                                                                
                                                            </div>
                                                            <a class="btn btn-primary btn-success fa fa-desktop" style="width: 100px; font-size: 18px;" href="computadoras" ></a>
                                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 100px; font-size: 18px;" href="prestamos" ></a>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div id="modal-form7" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog modal-custom">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Nombres:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Paolo"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Apellidos:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Gerrero Carrillo"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Dirección:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Urb. Emilio Fernandez lt.13 Mz. H"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Institución:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Senati</option>
                                                                        <option> UTP</option>
                                                                        <option> UCH</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Ciclo:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> 1ro</option>
                                                                        <option> 2do</option>
                                                                        <option> 3ro</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Correo:</h5></label><input style="padding: 1px 8px;" type="email" class="form-control" value="paolo@gmail.com"></input></div>
                                                                                                                       
                                                                </form>   
                                                            </div>
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">.</h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Fecha de Nacimiento:</h5></label><input style="padding: 1px 8px;" type="date" class="form-control" value="02/05/2000"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">DNI:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="75123445"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Celular:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="923456123"></input></div>      
                                                                    <div class="form-group"><label><h5 class="m-t-none">Área:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected>Analisis</option>
                                                                        <option> 2</option>
                                                                        <option> 3</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Salón:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Salon 1</option>
                                                                        <option> 2</option>
                                                                        <option> 3</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Carrera:</h5></label><select class="form-control m-b" name="account">
                                                                        <option > Desarrollo de Software</option>
                                                                        <option> Ingenieria de Software</option>
                                                                        <option selected> Diseño Grafico</option>
                                                                    </select></div>
                                                                        
                                                                    
                                                                </form>
            
                                                                <form role="form">
                                                                    
                                                                    <div class="form-group"><label>Estado:   </label>
                                                                        <input type="checkbox" class="js-switch_12" checked />
                                                                <br>
                                                                <br>        
                                                                        
                                                                </div>
                                                                
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success"  type="submit"><strong> Guardar</strong></button>
                                                                        <div>
                                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                            <a style="color: black;">ID:00003</a>
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a7.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-desktop mb-4" style="width: 120px; font-size: 18px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success mb-4" style="width: 120px; font-size: 12px;" href="" >Cambiar Imagen</a>
                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 120px; font-size: 18px;" href="prestamos" ></a>
                                            
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

                            <div class="text-center rounded-circle mb-5">
                                <img src="img/a4.jpg" class="rounded-circle">
                            </div>
                            <div class="product-desc">
                                <span class="product-price btn-Default" style="background-color: transparent;">
                                    <input type="checkbox" class="js-switch_7" checked />
                                    <a style="color: black;">Activo</a>
                                </span>
                                
                                <a href="#" class="product-name"><h2> Juan Calderon Torres</h2></a>


                                <small class="text-muted text-left"><h3>Área:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>Programacion</h5>
                                </div>
                                <small class="text-muted text-left"><h3>DNI:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>76211803</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Correo:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>JCald@gmail.com</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Celular:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>945261734</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mx-1" style="font-size: 20px;" href="" ></a>
                                            <a class="btn btn-primary fa fa-clock-o mx-1" style="font-size: 20px;" href="horario-clases" ></a>
                                            <a class="btn btn-primary btn-warning fa fa-book mx-1" style="font-size: 20px;" href="capacitacion" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye mx-1" style="font-size: 20px;" href="#modal-formVer3" ></a>
                                        </div>
                                        <div id="modal-formVer3" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog modal-custom">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                            

                                                            <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Nombres:</h5></label><label for="">Juan</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Apellidos:</h5></label><label for="">Calderon Torres</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Dirección:</h5></label><label for="">Urb. Emilio Fernandez lt.13 Mz. H</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Institución:</h5></label><label for="">Senati</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Ciclo:</h5></label><label for="">4to</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Correo:</h5></label><label for="">juanCal@gmail.com</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Fecha de Nacimiento:</h5></label><label for="">O2/05/2000</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">DNI:</h5></label><label for="">75123445</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Celular:</h5></label><label for="">923456123</label></div>    
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Área:</h5></label><label for="">Programacion</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Carrera:</h5></label><label for="">Diseño Grafico</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Estado:</h5></label><label for="">Activo</label></div>     
                                                                <div>
                                                                    <a data-toggle="modal" class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit btn-success" onclick="hideModal('modal-formVer3'); showModal('modal-formjuan');" style="font-size: 20px; width: 60px;"  href="#modal-form8"></a>
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                                            <a style="color: black;">ID:00003</a>
                                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                                <img src="img/a4.jpg" class="img-lg w-200 h-200" >
                                                                
                                                            </div>
                                                            <a class="btn btn-primary btn-success fa fa-desktop" style="width: 100px; font-size: 18px;" href="computadoras" ></a>
                                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 100px; font-size: 18px;" href="prestamos" ></a>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div id="modal-form8" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog modal-custom">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Nombres:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Juan"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Apellidos:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Calderon Torres"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Dirección:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Urb. Emilio Fernandez lt.13 Mz. H"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Institución:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Senati</option>
                                                                        <option> UTP</option>
                                                                        <option> UCH</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Ciclo:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> 1ro</option>
                                                                        <option> 2do</option>
                                                                        <option> 3ro</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Correo:</h5></label><input style="padding: 1px 8px;" type="email" class="form-control" value="Juan@gmail.com"></input></div>
                                                                                                                       
                                                                </form>   
                                                            </div>
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">.</h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Fecha de Nacimiento:</h5></label><input style="padding: 1px 8px;" type="date" class="form-control" value="02/05/2000"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">DNI:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="75123445"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Celular:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="923456123"></input></div>      
                                                                    <div class="form-group"><label><h5 class="m-t-none">Área:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected>Programacion</option>
                                                                        <option> Analisis</option>
                                                                        <option> Estructura</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Salón:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Salón 2</option>
                                                                        <option> Salón 1</option>
                                                                        <option> Salón3</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Carrera:</h5></label><select class="form-control m-b" name="account">
                                                                        <option > Desarrollo de Software</option>
                                                                        <option> Ingenieria de Software</option>
                                                                        <option selected> Diseño Grafico</option>
                                                                    </select></div>
                                                                        
                                                                    
                                                                </form>
            
                                                                <form role="form">
                                                                    
                                                                    <div class="form-group"><label>Estado:   </label>
                                                                        <input type="checkbox" class="js-switch_13" checked />
                                                                <br>
                                                                <br>        
                                                                        
                                                                </div>
                                                                
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success"  type="submit"><strong> Guardar</strong></button>
                                                                        <div>
                                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                            <a style="color: black;">ID:00003</a>
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a4.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-desktop mb-4" style="width: 120px; font-size: 18px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success mb-4" style="width: 120px; font-size: 12px;" href="" >Cambiar Imagen</a>
                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 120px; font-size: 18px;" href="prestamos" ></a>
                                            
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

                            <div class="text-center rounded-circle mb-5">
                                <img src="img/a3.jpg" class="rounded-circle">
                            </div>
                            <div class="product-desc">
                                <span class="product-price btn-Default" style="background-color: transparent;">
                                    <input type="checkbox" class="js-switch_8" checked />
                                    <a style="color: black;">Activo</a>
                                </span>
                                
                                <a href="#" class="product-name"><h2> Ana Zapata Condo</h2></a>


                                <small class="text-muted text-left"><h3>Área:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>Android</h5>
                                </div>
                                <small class="text-muted text-left"><h3>DNI:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>79601203</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Correo:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>AnaZaco@gmail.com</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Celular:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>912356123</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mx-1" style="font-size: 20px;" href="" ></a>
                                            <a class="btn btn-primary fa fa-clock-o mx-1" style="font-size: 20px;" href="horario-clases" ></a>
                                            <a class="btn btn-primary btn-warning fa fa-book mx-1" style="font-size: 20px;" href="capacitacion" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye mx-1" style="font-size: 20px;" href="#modal-formVer4" ></a>
                                        </div>
                                        <div id="modal-formVer4" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog modal-custom">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                            

                                                            <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Nombres:</h5></label><label for="">Ana</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Apellidos:</h5></label><label for="">Zapata Condo</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Dirección:</h5></label><label for="">Urb. Emilio Fernandez lt.13 Mz. H</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Institución:</h5></label><label for="">Senati</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Ciclo:</h5></label><label for="">4to</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Correo:</h5></label><label for="">ana@gmail.com</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Fecha de Nacimiento:</h5></label><label for="">O2/05/2000</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">DNI:</h5></label><label for="">75123445</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Celular:</h5></label><label for="">923456123</label></div>    
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Área:</h5></label><label for="">Android</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Carrera:</h5></label><label for="">Diseño Grafico</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Estado:</h5></label><label for="">Activo</label></div>     
                                                                <div>
                                                                    <a data-toggle="modal" class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit btn-success" onclick="hideModal('modal-formVer4'); showModal('modal-formjuan');" style="font-size: 20px; width: 60px;"  href="#modal-form9"></a>
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                                            <a style="color: black;">ID:00003</a>
                                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                                <img src="img/a3.jpg" class="img-lg w-200 h-200" >
                                                                
                                                            </div>
                                                            <a class="btn btn-primary btn-success fa fa-desktop" style="width: 100px; font-size: 18px;" href="computadoras" ></a>
                                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 100px; font-size: 18px;" href="prestamos" ></a>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div id="modal-form9" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog modal-custom">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Nombres:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Ana"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Apellidos:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Zapata Condo"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Dirección:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Urb. Emilio Fernandez lt.13 Mz. H"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Institución:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Senati</option>
                                                                        <option> UTP</option>
                                                                        <option> UCH</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Ciclo:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> 1ro</option>
                                                                        <option> 2do</option>
                                                                        <option> 3ro</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Correo:</h5></label><input style="padding: 1px 8px;" type="email" class="form-control" value="ana@gmail.com"></input></div>
                                                                                                                       
                                                                </form>   
                                                            </div>
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">.</h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Fecha de Nacimiento:</h5></label><input style="padding: 1px 8px;" type="date" class="form-control" value="02/05/2000"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">DNI:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="75123445"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Celular:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="923456123"></input></div>      
                                                                    <div class="form-group"><label><h5 class="m-t-none">Área:</h5></label><select class="form-control m-b" name="account">
                                                                        <option>Programacion</option>
                                                                        <option> Analisis</option>
                                                                        <option selected>Android</option>
                                                                        <option> Estructura</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Salon:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Salon 3</option>
                                                                        <option> Salon 1</option>
                                                                        <option> Salon 2</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Carrera:</h5></label><select class="form-control m-b" name="account">
                                                                        <option > Desarrollo de Software</option>
                                                                        <option> Ingenieria de Software</option>
                                                                        <option selected> Diseño Grafico</option>
                                                                    </select></div>
                                                                        
                                                                    
                                                                </form>
            
                                                                <form role="form">
                                                                    
                                                                    <div class="form-group"><label>Estado:   </label>
                                                                        <input type="checkbox" class="js-switch_14" checked />
                                                                <br>
                                                                <br>        
                                                                        
                                                                </div>
                                                                
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success"  type="submit"><strong> Guardar</strong></button>
                                                                        <div>
                                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                            <a style="color: black;">ID:00003</a>
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a3.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-desktop mb-4" style="width: 120px; font-size: 18px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success mb-4" style="width: 120px; font-size: 12px;" href="" >Cambiar Imagen</a>
                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 120px; font-size: 18px;" href="prestamos" ></a>
                                            
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

                            <div class="text-center rounded-circle mb-5">
                                <img src="img/a6.jpg" class="rounded-circle ">
                            </div>
                            <div class="product-desc">
                                <span class="product-price btn-Default" style="background-color: transparent;">
                                    <input type="checkbox" class="js-switch_9" checked />
                                    <a style="color: black;">Activo</a>
                                </span>
                                
                                <a href="#" class="product-name"><h2>Isabel Aguilera Fano</h2></a>


                                <small class="text-muted text-left"><h3>Área:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>Analisis</h5>
                                </div>
                                <small class="text-muted text-left"><h3>DNI:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>72802034</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Correo:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>isaFano@gmail.com</h5>
                                </div>
                                <small class="text-muted text-left"><h3>Celular:</h3></small>
                                <div class="small m-t-xs text-left">
                                    <h5>978941234</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash mx-1" style="font-size: 20px;" href="" ></a>
                                            <a class="btn btn-primary fa fa-clock-o mx-1" style="font-size: 20px;" href="horario-clases" ></a>
                                            <a class="btn btn-primary btn-warning fa fa-book mx-1" style="font-size: 20px;" href="capacitacion" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye mx-1" style="font-size: 20px;" href="#modal-formVer5" ></a>
                                        </div>
                                        <div id="modal-formVer5" class="modal fade" aria-hidden="true">
                                        <div class="modal-dialog modal-custom">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                            

                                                            <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Nombres:</h5></label><label for="">Isabel</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Apellidos:</h5></label><label for="">Aguilera Fano</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Dirección:</h5></label><label for="">Urb. Emilio Fernandez lt.13 Mz. H</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Institución:</h5></label><label for="">Senati</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Ciclo:</h5></label><label for="">4to</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Correo:</h5></label><label for="">Isabel@gmail.com</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Fecha de Nacimiento:</h5></label><label for="">O2/05/2000</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">DNI:</h5></label><label for="">75123445</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Celular:</h5></label><label for="">923456123</label></div>    
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Área:</h5></label><label for="">Analisis</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Carrera:</h5></label><label for="">Diseño Grafico</label></div>
                                                                <div class="form-group"><label><h5 class="m-t-none m-b mx-2">Estado:</h5></label><label for="">Activo</label></div>     
                                                                <div>
                                                                    <a data-toggle="modal" class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit btn-success" onclick="hideModal('modal-formVer5'); showModal('modal-formjuan');" style="font-size: 20px; width: 60px;"  href="#modal-form10"></a>
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                                            <a style="color: black;">ID:00003</a>
                                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                                <img src="img/a6.jpg" class="img-lg w-200 h-200" >
                                                                
                                                            </div>
                                                            <a class="btn btn-primary btn-success fa fa-desktop" style="width: 100px; font-size: 18px;" href="computadoras" ></a>
                                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 100px; font-size: 18px;" href="prestamos" ></a>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div id="modal-form10" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog modal-custom">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Información Personal </h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Nombres:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Isabel"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Apellidos:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Aguilera Fano"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Dirección:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="Urb. Emilio Fernandez lt.13 Mz. H"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Institución:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Senati</option>
                                                                        <option> UTP</option>
                                                                        <option> UCH</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Ciclo:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> 1ro</option>
                                                                        <option> 2do</option>
                                                                        <option> 3ro</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Correo:</h5></label><input style="padding: 1px 8px;" type="email" class="form-control" value="ana@gmail.com"></input></div>
                                                                                                                       
                                                                </form>   
                                                            </div>
                                                            <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">.</h3>
                                                                

                                                                <form role="form"><style>.form-group{margin-bottom: 0rem;}</style>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Fecha de Nacimiento:</h5></label><input style="padding: 1px 8px;" type="date" class="form-control" value="02/05/2000"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">DNI:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="75123445"></input></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Celular:</h5></label><input style="padding: 1px 8px;" type="text" class="form-control" value="923456123"></input></div>      
                                                                    <div class="form-group"><label><h5 class="m-t-none">Área:</h5></label><select class="form-control m-b" name="account">
                                                                        <option>Programacion</option>
                                                                        <option selected> Analisis</option>
                                                                        <option>Android</option>
                                                                        <option> Estructura</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Salon:</h5></label><select class="form-control m-b" name="account">
                                                                        <option selected> Salon 3</option>
                                                                        <option> Salon 1</option>
                                                                        <option> Salon 2</option>
                                                                    </select></div>
                                                                    <div class="form-group"><label><h5 class="m-t-none">Carrera:</h5></label><select class="form-control m-b" name="account">
                                                                        <option > Desarrollo de Software</option>
                                                                        <option> Ingenieria de Software</option>
                                                                        <option selected> Diseño Grafico</option>
                                                                    </select></div>
                                                                        
                                                                    
                                                                </form>
            
                                                                <form role="form">
                                                                    
                                                                    <div class="form-group"><label>Estado:   </label>
                                                                        <input type="checkbox" class="js-switch_15" checked />
                                                                <br>
                                                                <br>        
                                                                        
                                                                </div>
                                                                
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-left m-t-n-xs btn-success"  type="submit"><strong> Guardar</strong></button>
                                                                        <div>
                                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs  btn-success"  type="submit"><strong> Descartar</strong></button>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 text-center text-danger"><h2><strong> Colaborador </strong></h2>
                                            <a style="color: black;">ID:00003</a>
                                            <div class="custom-file w-200 h-300 " style="padding: 20px 0px;">
                                                <img src="img/a6.jpg" class="img-lg w-200 h-200" >
                                                
                                            </div>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-desktop mb-4" style="width: 120px; font-size: 18px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success mb-4" style="width: 120px; font-size: 12px;" href="" >Cambiar Imagen</a>
                                            <a class="btn btn-primary btn-success fa fa-dropbox" style="width: 120px; font-size: 18px;" href="prestamos" ></a>
                                            
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

        var elem_11 = document.querySelector('.js-switch_11');
        var switchery_11 = new Switchery(elem_11, { color: '#1AB394' });
        
        var elem_12 = document.querySelector('.js-switch_12');
        var switchery_12 = new Switchery(elem_12, { color: '#1AB394' });

        var elem_13 = document.querySelector('.js-switch_13');
        var switchery_13 = new Switchery(elem_13, { color: '#1AB394' });

        var elem_14 = document.querySelector('.js-switch_14');
        var switchery_14 = new Switchery(elem_14, { color: '#1AB394' });

        var elem_15 = document.querySelector('.js-switch_15');
        var switchery_15 = new Switchery(elem_15, { color: '#1AB394' });

    

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
