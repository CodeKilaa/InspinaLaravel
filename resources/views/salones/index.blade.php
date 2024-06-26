<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Salones</title>

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
                        <li><a href="horarioSalon">Salón</a></li>
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
                    <a href="maquinas"><i class="fa fa-desktop"></i> <span class="nav-label">Máquinas</span></a>
                </li>
                <li class="active"> 
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
                <h2>Salones</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Salones</strong>
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
                                        
                                            <div class="col-sm-6 b-r"><div class="form-group"><label><h3 class="m-t-none m-b">Nombre</h3></label><input type="text" placeholder="Enter your name" class="form-control"></div>
                                                <p></p>

                                                <form role="form">
                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Descripción</h3></label><input type="text" placeholder="Enter Description" class="form-control"></div>
                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Cantidad De Máquinas</h3></label>
                                                        <select class="form-control m-b" name="account">
                                                            <option> 1</option>
                                                            <option> 2</option>
                                                            <option> 3</option>
                                                            <option> 4</option>
                                                            <option> 5</option>
                                                            <option> 6</option>
                                                        </select>
                                                        
                                                    </div>
                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Código</h3></label><input type="text" placeholder="Enter code" class="form-control"></div>
                                                    <div>
                                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>ADD</strong></button>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-6"><h4> Subir Icono </h4>
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
                                <img src="svg/salon.svg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price bg-danger">
                                    Inactive
                                </span>
                                
                                <a href="#" class="product-name"><h2> Salón 1</h2></a>



                                <small class="text-muted text-center"><h3><strong>Código</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>001</h5>
                                </div>
                                <small class="text-muted text-center"><h3><strong>Descripción</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Ambiente para la elaboración para el trabajo.</h5>
                                </div>
                                <small class="text-muted text-center"><h3><strong>Cantidad De Máquinas</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>0</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;"  href="#modal-edit" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye " style="font-size: 20px;" href="#modal-view1" ></a>
                                            <!---MODAL DE VISTA --->
                                            
                                            <div id="modal-view1" class="modal fade" aria-hidden="true">
                                                    <div class="modal-dialog modal-custom">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row text-center">
                                                                    <a class="product-name col-sm-4"><h3>ID: 001</h3></a>
                                                                    <a class="product-name col-sm-4"><h1><strong>Salón 1 </strong></h1></a>  
                                                                    <a class="product-name col-sm-4"><h3>Descripción: Ambiente para la elaboración para el trabajo.</h3></a> 
                                                                </div>
                                                                <hr>         
                                                                <div class="row">        
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">
                                                                        </div>
                                                                    </div>
                                                                </div>    
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--- FIN DE MODAL--->
                                        </div>
                                        <div id="modal-edit" class="modal fade" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-6 b-r">
                                                                <div class="form-group"><label><h3 class="m-t-none m-b">Nombre</h3></label><input type="text" placeholder="Salón 1" class="form-control"></div>
                                                                <p></p>
                                                                <form role="form">
                                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Descripción</h3></label><input type="text" placeholder="Ambiente para la elaboración para el trabajo." class="form-control"></div>
                                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Código</h3></label>
                                                                        <select class="form-control m-b" name="account">
                                                                            <option> 001</option>
                                                                            <option> 002</option>
                                                                            <option> 003</option>
                                                                            <option> 004</option>
                                                                            <option> 005</option>
                                                                            <option> 006</option>
                                                                            <option> 007</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Cantidad De Máquinas</h3></label>
                                                                        <select class="form-control m-b" name="account">
                                                                            <option> 0</option>
                                                                            <option> 1</option> 
                                                                            <option> 2</option>
                                                                            <option> 3</option>
                                                                            <option> 4</option>
                                                                            <option> 5</option>
                                                                            <option> 6</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group"><label>Estado:  </label>
                                                                        <input type="checkbox" class="js-switch2" checked/>       
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>EDIT</strong></button>
                                                                        
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
                                <img src="svg/salon.svg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Salón 2 </h2></a>


                                <small class="text-muted text-center"><h3><strong>Código</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>2</h5>
                                </div>
                                <small class="text-muted text-center"><h3><strong>Descripción</strong></h3></small>
                                <small class="small m-t-xs text-center">
                                    <h5>Ambiente para la elaboración para el trabajo.</h5>
                                </small>
                                <small class="text-muted text-center"><h3><strong>Cantidad De Máquinas</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>3</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-edit2" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye " style="font-size: 20px;" href="#modal-view2" ></a>

                                            <!---MODAL DE VISTA --->
                                            
                                            <div id="modal-view2" class="modal fade" aria-hidden="true">
                                                    <div class="modal-dialog modal-custom">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row text-center">
                                                                    <a class="product-name col-sm-4"><h3>ID: 002</h3></a>
                                                                    <a class="product-name col-sm-4"><h1><strong>Salón 2 </strong></h1></a>  
                                                                    <a class="product-name col-sm-4"><h3>Descripción: Ambiente para la elaboración para el trabajo.</h3></a> 
                                                                </div>
                                                                <hr>         
                                                                <div class="row">        
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 4   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch7" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">4</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">004</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 2</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
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
                                                                                        <h2 class="text-center">
                                                                                        Máquina 7   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch8" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">7</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">007</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 2</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
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
                                                                                        <h2 class="text-center">
                                                                                        Máquina 6   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch9" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">006</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Días</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">006</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 2</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
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
                                                <!--- FIN DE MODAL--->
                                        </div>
                                    </div>
                                    
                                </div>
                                <div id="modal-edit2" class="modal fade" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6 b-r">
                                                        <div class="form-group"><label><h3 class="m-t-none m-b">Nombre</h3></label><input type="text" placeholder="Salón 2" class="form-control"></div>
                                                        <p></p>
                                                        <form role="form">
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Descripción</h3></label><input type="text" placeholder="Ambiente para la elaboración para el trabajo." class="form-control"></div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Código</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 002</option>
                                                                    <option> 001</option>
                                                                    
                                                                    <option> 003</option>
                                                                    <option> 004</option>
                                                                    <option> 005</option>
                                                                    <option> 006</option>
                                                                    <option> 007</option>
                                                                </select>
                                                                
                                                            </div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Cantidad De Máquinas</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 3</option>
                                                                    <option> 0</option>
                                                                    <option> 1</option> 
                                                                    <option> 2</option>
                                                                    
                                                                    <option> 4</option>
                                                                    <option> 5</option>
                                                                    <option> 6</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="form-group"><label>Estado:  </label>
                                                                <input type="checkbox" class="js-switch" checked/>       
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>EDIT</strong></button>
                                                                
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
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="svg/salon.svg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Salón 3 </h2></a>


                                <small class="text-muted text-center"><h3><strong>Código</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>3</h5>
                                </div>
                                <small class="text-muted text-center"><h3><strong>Descripción</strong></h3></small>
                                <small class="small m-t-xs text-center">
                                    <h5>Ambiente para la elaboración para el trabajo.</h5>
                                </small>
                                <small class="text-muted text-center"><h3><strong>Cantidad De Máquinas</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>1</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-edit3" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye " style="font-size: 20px;" href="#modal-view3" ></a>
                                            
                                            
                                            <!---MODAL DE VISTA --->
                                            
                                            <div id="modal-view3" class="modal fade" aria-hidden="true">
                                                    <div class="modal-dialog modal-custom">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row text-center">
                                                                    <a class="product-name col-sm-4"><h3>ID: 003</h3></a>
                                                                    <a class="product-name col-sm-4"><h1><strong>Salón 3 </strong></h1></a>  
                                                                    <a class="product-name col-sm-4"><h3>Descripción: Ambiente para la elaboración para el trabajo.</h3></a> 
                                                                </div>
                                                                <hr>         
                                                                <div class="row">        
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">                                                   
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 7   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch10" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">7</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">007</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 3</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">                                                         
                                                                                            
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--- FIN DE MODAL--->
                                        </div>
                                    </div>
                                </div>
                                <div id="modal-edit3" class="modal fade" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6 b-r">
                                                        <div class="form-group"><label><h3 class="m-t-none m-b">Nombre</h3></label><input type="text" placeholder="Salón 2" class="form-control"></div>
                                                        <p></p>
                                                        <form role="form">
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Descripción</h3></label><input type="text" placeholder="Ambiente para la elaboración para el trabajo." class="form-control"></div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Código</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 003</option>
                                                                    <option> 001</option>
                                                                    <option> 002</option>
                                                                    
                                                                    
                                                                    
                                                                    <option> 004</option>
                                                                    <option> 005</option>
                                                                    <option> 006</option>
                                                                    <option> 007</option>
                                                                </select>
                                                                
                                                            </div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Cantidad De Máquinas</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 1</option> 
                                                                    
                                                                    <option> 0</option>
                                                                    
                                                                    <option> 2</option>
                                                                    <option> 3</option>
                                                                    <option> 4</option>
                                                                    <option> 5</option>
                                                                    <option> 6</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="form-group"><label>Estado:  </label>
                                                                <input type="checkbox" class="js-switch3" checked/>       
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>EDIT</strong></button>
                                                                
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
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="svg/salon.svg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Salón 4 </h2></a>


                                <small class="text-muted text-center"><h3><strong>Código</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>4</h5>
                                </div>
                                <small class="text-muted text-center"><h3><strong>Descripción</strong></h3></small>
                                <small class="small m-t-xs text-center">
                                    <h5>Ambiente para la elaboración para el trabajo.</h5>
                                </small>
                                <small class="text-muted text-center"><h3><strong>Cantidad De Máquinas</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>1</h5>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-edit4" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye " style="font-size: 20px;" href="#modal-view4" ></a>
                                            <!---MODAL DE VISTA --->
                                            
                                            <div id="modal-view4" class="modal fade" aria-hidden="true">
                                                    <div class="modal-dialog modal-custom">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row text-center">
                                                                    <a class="product-name col-sm-4"><h3>ID: 004</h3></a>
                                                                    <a class="product-name col-sm-4"><h1><strong>Salón 4 </strong></h1></a>  
                                                                    <a class="product-name col-sm-4"><h3>Descripción: Ambiente para la elaboración para el trabajo.</h3></a> 
                                                                </div>
                                                                <hr>         
                                                                <div class="row">        
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">                                                   
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 7   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch11" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">7</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">007</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 4</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="ibox">                                                         
                                                                                            
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--- FIN DE MODAL--->
                                        </div>
                                    </div>
                                </div>
                                <div id="modal-edit4" class="modal fade" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6 b-r">
                                                        <div class="form-group"><label><h3 class="m-t-none m-b">Nombre</h3></label><input type="text" placeholder="Salón 4" class="form-control"></div>
                                                        <p></p>
                                                        <form role="form">
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Descripción</h3></label><input type="text" placeholder="Ambiente para la elaboración para el trabajo." class="form-control"></div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Código</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 004</option>
                                                                    
                                                                    <option> 001</option>
                                                                    <option> 002</option>
                                                                    
                                                                    <option> 003</option>
                                                                    
                                                                    
                                                                    <option> 005</option>
                                                                    <option> 006</option>
                                                                    <option> 007</option>
                                                                </select>
                                                                
                                                            </div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Cantidad De Máquinas</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 1</option> 
                                                                    
                                                                    <option> 0</option>
                                                                    
                                                                    <option> 2</option>
                                                                    <option> 3</option>
                                                                    <option> 4</option>
                                                                    <option> 5</option>
                                                                    <option> 6</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="form-group"><label>Estado:  </label>
                                                                <input type="checkbox" class="js-switch4" checked/>       
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>EDIT</strong></button>
                                                                
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
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="svg/salon.svg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2> Salón 5</h2></a>


                                <small class="text-muted text-center"><h3><strong>Código</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>005</h5>
                                </div>
                                <small class="text-muted text-center"><h3><strong>Descripción</strong></h3></small>
                                <div class="small m-t-xs text-center">
                                    <h5>Ambiente para la elaboración para el trabajo.</h5>
                                </div>
                                <small class="text-muted text-center"><h3><strong>Cantidad de Máquinas</strong></h3></small>
                                <small class="small m-t-xs text-center">
                                    <h5>4</h5>
                                </small>
                                <div class="m-t text-righ">

                                    <style>
                                    
                                        .modal-custom {
                                            max-width: 80%; 
                                            
                                        }
                                    </style>

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    <div class="ibox-content">
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-edit5" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye " style="font-size: 20px;" href="#modal-view5" ></a>
                                            <!---MODAL DE VISTA --->
                                            
                                            <div id="modal-view5" class="modal fade" aria-hidden="true">
                                                    <div class="modal-dialog modal-custom">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row text-center">
                                                                    <a class="product-name col-sm-4"><h3>ID: 002</h3></a>
                                                                    <a class="product-name col-sm-4"><h1><strong>Salón 2 </strong></h1></a>  
                                                                    <a class="product-name col-sm-4"><h3>Descripción: Ambiente para la elaboración para el trabajo.</h3></a> 
                                                                </div>
                                                                <hr>         
                                                                <div class="row">
                                                                <div class="col-md-3">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 4   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch12" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">4</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">004</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 5</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                    </div>        
                                                                    <div class="col-md-3">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 2   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch13" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">002</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">002</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 5</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 1   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch14" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">001</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">001</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 5</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>    
                                                                            </div>
                                                                        </div> 
                                                                    <div class="col-md-3">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 8   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch15" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">008</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">008</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 5</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
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
                                                <!--- FIN DE MODAL--->
                                            
                                            
                                            
                                            
                                            
                                            
                                                
                                            
                                        </div>

                                    </div>
                                    
                                    

                                </div>
                                <div id="modal-edit5" class="modal fade" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6 b-r">
                                                        <div class="form-group"><label><h3 class="m-t-none m-b">Nombre</h3></label><input type="text" placeholder="Salón 5" class="form-control"></div>
                                                        <p></p>
                                                        <form role="form">
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Descripción</h3></label><input type="text" placeholder="Ambiente para la elaboración para el trabajo." class="form-control"></div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Código</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 005</option>
                                                                    
                                                                    
                                                                    <option> 001</option>
                                                                    <option> 002</option>
                                                                    
                                                                    <option> 003</option>
                                                                    
                                                                    <option> 004</option>
                                                                    
                                                                    <option> 006</option>
                                                                    <option> 007</option>
                                                                </select>
                                                                
                                                            </div>
                                                            <div class="form-group"><label><h3 class="m-t-none m-b">Cantidad De Máquinas</h3></label>
                                                                <select class="form-control m-b" name="account">
                                                                    <option> 4</option>
                                                                    
                                                                    <option> 0</option>
                                                                    <option> 1</option> 
                                                                    <option> 2</option>
                                                                    <option> 3</option>
                                                                    
                                                                    <option> 5</option>
                                                                    <option> 6</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="form-group"><label>Estado:  </label>
                                                                <input type="checkbox" class="js-switch5" checked/>       
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>EDIT</strong></button>
                                                                
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
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <img src="svg/salon.svg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    Activo
                                </span>
                                
                                <a href="#" class="product-name"><h2>Salón 6</h2></a>

                                <small class="text-muted text-center"><h3><strong>Código</strong></h3></small>
                                <small class="small m-t-xs text-center">
                                    <h5>006</h5>
                                </small>
                                <small class="text-muted text-center"><h3><strong>Descripción</strong></h3></small>
                                <small class="small m-t-xs text-center">
                                    <h5>Ambiente para la elaboración de trabajo.</h5>
                                </small>
                                
                                <small class="text-muted text-center"><h3><strong>Cantidad de Máquinas</strong></h3></small>
                                <small class="small m-t-xs text-center">
                                    <h5>2</h5>
                                </small>
                                <div class="m-t text-righ">

                                    <a href="#" data-toggle="model"> <i ></i> </a>
                                    
                                        <div class="text-right">
                                            <a data-toggle="modal" class="btn btn-primary btn-danger fa fa-trash" style="font-size: 20px;" href="" ></a>
                                            <a data-toggle="modal" class="btn btn-primary fa fa-edit" style="font-size: 20px;" href="#modal-edit6" ></a>
                                            <a data-toggle="modal" class="btn btn-primary btn-success fa fa-eye " style="font-size: 20px;" href="#modal-view6" ></a>

                                            <!---MODAL DE VISTA --->
                                            
                                            <div id="modal-view6" class="modal fade" aria-hidden="true">
                                                    <div class="modal-dialog modal-custom">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row text-center">
                                                                    <a class="product-name col-sm-4"><h3>ID: 006</h3></a>
                                                                    <a class="product-name col-sm-4"><h1><strong>Salón 6 </strong></h1></a>  
                                                                    <a class="product-name col-sm-4"><h3>Descripción: Ambiente para la elaboración para el trabajo.</h3></a> 
                                                                </div>
                                                                <hr>
                                                                <div class="container">
                                                                <div class="row justify-content-center">
                                                                <div class="col-md-4">
                                                                        <div class="ibox">
                                                                            <div class="ibox-content product-box">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 b-r">
                                                                                        <h2 class="text-center">
                                                                                        Máquina 6   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch16" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">006</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">006</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 6</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
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
                                                                                        <h2 class="text-center">
                                                                                        Máquina 7   
                                                                                        </h2>
                                                                                        <p class="text-center">
                                                                                            <img src="img/pc.jpg" class="rounded-circle h-150">
                                                                                        </p>
                                                                                        
                                                                                        <p class="text-center">
                                                                                            <input type="checkbox" class="js-switch17" checked />
                                                                                            <a style="color: black;">Activo</a>       
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <form role="form">
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>ID:</dt>
                                                                                                    <dd class="sm-2">7</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Detalles Técnicos:</dt>
                                                                                                    <dd class="sm-2">60 Dias</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Número Identificador:</dt>
                                                                                                    <dd class="sm-2">007</dd>
                                                                                                </div>
                                                                                            </dl>
                                                                                            <dl class="row mb-2">
                                                                                                <div class="col-sm-12 text-sm-left"><dt>Salón Asignado</dt>
                                                                                                    <dd class="sm-2">Salón 6</dd>
                                                                                                </div>
                                                                                            </dl>                                                      
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
                                                <!--- FIN DE MODAL--->
                                        </div>                                    
                                    
                                </div>
                                

                                
                            </div>
                            <div id="modal-edit6" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 b-r">
                                                    <div class="form-group"><label><h3 class="m-t-none m-b">Nombre</h3></label><input type="text" placeholder="Salón 6" class="form-control"></div>
                                                    <p></p>
                                                    <form role="form">
                                                        <div class="form-group"><label><h3 class="m-t-none m-b">Descripción</h3></label><input type="text" placeholder="Ambiente para la elaboración para el trabajo." class="form-control"></div>
                                                        <div class="form-group"><label><h3 class="m-t-none m-b">Código</h3></label>
                                                            <select class="form-control m-b" name="account">
                                                                <option> 006</option>
                                                                
                                                                
                                                                
                                                                <option> 001</option>
                                                                <option> 002</option>
                                                                
                                                                <option> 003</option>
                                                                
                                                                <option> 004</option>
                                                                <option> 005</option>
                                                                
                                                                <option> 007</option>
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="form-group"><label><h3 class="m-t-none m-b">Cantidad De Máquinas</h3></label>
                                                            <select class="form-control m-b" name="account">
                                                                <option> 2</option>
                                                                
                                                                <option> 0</option>
                                                                <option> 1</option> 
                                                                
                                                                <option> 3</option>
                                                                <option> 4</option>
                                                                <option> 5</option>
                                                                <option> 6</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group"><label>Estado:</label>
                                                            <input type="checkbox" class="js-switch6" checked/>       
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs fa fa-edit" type="submit"><strong>EDIT</strong></button>
                                                            
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

        var elem_2 = document.querySelector('.js-switch2');
        var switchery_2 = new Switchery(elem_2, { color: '#1AB394' });
        

        var elem_3 = document.querySelector('.js-switch3');
        var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

        var elem_4 = document.querySelector('.js-switch4');
        var switchery_4 = new Switchery(elem_4, { color: '#1AB394' });

        var elem_5 = document.querySelector('.js-switch5');
        var switchery_5 = new Switchery(elem_5, { color: '#1AB394' });

        var elem_6 = document.querySelector('.js-switch6');
        var switchery_6 = new Switchery(elem_6, { color: '#1AB394' });
        
        var elem_7 = document.querySelector('.js-switch7');
        var switchery_7 = new Switchery(elem_7, { color: '#1AB394' });
        switchery_7.disable();
        var elem_8 = document.querySelector('.js-switch8');
        var switchery_8 = new Switchery(elem_8, { color: '#1AB394' });
        switchery_8.disable();
        var elem_9 = document.querySelector('.js-switch9');
        var switchery_9 = new Switchery(elem_9, { color: '#1AB394' });
        switchery_9.disable();

        var elem_10 = document.querySelector('.js-switch10');
        var switchery_10 = new Switchery(elem_10, { color: '#1AB394' });
        switchery_10.disable();
        var elem_11 = document.querySelector('.js-switch11');
        var switchery_11 = new Switchery(elem_11, { color: '#1AB394' });
        switchery_11.disable();
        var elem_12 = document.querySelector('.js-switch12');
        var switchery_12 = new Switchery(elem_12, { color: '#1AB394' });
        switchery_12.disable();
        var elem_13 = document.querySelector('.js-switch13');
        var switchery_13 = new Switchery(elem_13, { color: '#1AB394' });
        switchery_13.disable();
        var elem_14 = document.querySelector('.js-switch14');
        var switchery_14 = new Switchery(elem_14, { color: '#1AB394' });
        switchery_14.disable();
        var elem_15 = document.querySelector('.js-switch15');
        var switchery_15 = new Switchery(elem_15, { color: '#1AB394' });
        switchery_15.disable();
        var elem_16 = document.querySelector('.js-switch16');
        var switchery_16 = new Switchery(elem_16, { color: '#1AB394' });
        switchery_16.disable();
        var elem_17 = document.querySelector('.js-switch17');
        var switchery_17 = new Switchery(elem_17, { color: '#1AB394' });
        switchery_17.disable();

        

</script>

</body>

</html>
