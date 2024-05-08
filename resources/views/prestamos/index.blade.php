<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Préstamos</title>

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
                        <li><a href="horario-general-presencial.html">Presencial</a></li>
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
                            <a href="#">Candidatos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="candidatos.html">Candidatos</a>
                                </li>
                                <li>
                                    <a href="form-candidatos-colab.html">Formulario</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Colaboradores<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="Colaboradores.html">Colaboradores</a>
                                </li>
                                <li>
                                    <a href="form-candidatos-colab.html">Candidato a Colab</a>
                                </li>
                                <li>
                                    <a href="form-horario-clase.html">Crear Horario de Clase</a>
                                    
                                </li>
                                <li><a href="horario-gp-clase.html">Horario Clase</a></li>
                                <li>
                                    <a href="horario-clase-semanal.html">Horario Semanal</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            
                        </li>

                        <li>
                            <a href="#">Capacitacion-Horario<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="capacitacion-colab.html">Informacion</a>
                                </li>
                                <li>
                                    <a href="capacitacion-horario.html">Horario</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                </li>
                <li>
                    <a href="dashboard_areas.html"><i class="fa fa-tags"></i> <span class="nav-label">Áreas</span></a>
                </li>
                <li>
                    <a href="Maquinas.html"><i class="fa fa-list-alt"></i> <span class="nav-label">Responsabilidades</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="responsabilidades_areas.html">Areas</a></li>
                        <li><a href="responsabilidades-semanas.html">Semanas</a></li>
                        <li><a href="responsabilidades-asis.html">Asistencia</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="Maquinas.html"><i class="fa fa-desktop"></i> <span class="nav-label">Maquinas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">

                        <li>
                            <a href="Maquinas.html"><span class="nav-label">Maquinas</span></a>
                            
                        </li>

                        <li class="active"><a href="Computadora.html">Computadoras</a></li>
                        
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
                        <strong>Prestamos</strong>
                    </li>
                </ol>
            </div>
            
        </div>
        

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            
                                    <div class="col-lg-12">
                                        <div class="ibox ">
                                            <div class="ibox-content">
                                                <div class="row">
                                                    <div class="col-sm-3 b-r">
                                                        
                                                        <p class="text-center">
                                                            <a href=""><i class="fa fa-user big-icon "></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <form role="form">
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-12 text-sm-left row"> 
                                                                    <dt class="col-sm-6">Colaborador:</dt>
                                                                    <dd class="col-sm-6 sm-2">Marlo Samaniego</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-12 text-sm-left row"> 
                                                                    <dt class="col-sm-6">Area:</dt>
                                                                    <dd class="col-sm-6 sm-2">Estructura</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-12 text-sm-left row"> 
                                                                    <dt class="col-sm-6">DNI:</dt>
                                                                    <dd class="col-sm-6 sm-2">36462342</dd>
                                                                </div>
                                                            </dl>
                                                            
                                                            <div>

                                                            </div>
                                                        </form>                                                                                                               
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <form role="form">
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-12 text-sm-left row"> 
                                                                    <dt class="col-sm-6">Salon:</dt>
                                                                    <dd class="col-sm-6 sm-2">1</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-12 text-sm-left row"> 
                                                                    <dt class="col-sm-6">Correo:</dt>
                                                                    <dd class="col-sm-6 sm-2">marlo@gmail.com</dd>
                                                                </div>
                                                            </dl>
                                                            <dl class="row mb-3">
                                                                <div class="col-sm-12 text-sm-left row"> 
                                                                    <dt class="col-sm-6">Celular:</dt>
                                                                    <dd class="col-sm-6 sm-2">938163673</dd>
                                                                </div>
                                                            </dl>

                                                        </form>                                                                                                               
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>                         
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-content product-box"> 
                                <div class="modal-body">              
                                    <div class="row">        
                                        <div class="col-md-4">
                                            <div class="ibox">
                                                <div class="ibox-content product-box">
                                                    <div class="row">
                                                        <div class="col-sm-12 b-r">
                                                            <h4 class="text-center">
                                                                ID: 01     
                                                            </h4>
                                                            <form role="form">
                                                                <div class="text-sm-center"><label><h4 class="m-t-none m-b mx-2 font-bold">Herramienta:</h4></label><label class="font-bold" for="">Libro-x</label></div>
                                                                <div class="text-sm-center"><label><h5 class="m-t-none m-b mx-2">Fecha de Inscripción:</h5></label><label for="">24/04/24</label></div>
                                                                <div class="text-center mb-5">
                                                                    <input type="checkbox" class="js-switch_6" checked />
                                                                    <a style="color: black;">Activo</a>      
                                                                    <a data-toggle="modal" class="btn btn-primary btn-success mb-2 mx-5" style="font-size: 16px;" href="" >Devolver</a>
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
                                                        <div class="col-sm-12 b-r">
                                                            <h4 class="text-center">
                                                                ID: 02     
                                                            </h4>
                                                            <form role="form">
                                                                <div class="text-sm-center"><label><h4 class="m-t-none m-b mx-2">Herramienta:</h4></label><label class="font-bold" for="">Libro-z</label></div>
                                                                <div class="text-sm-center"><label><h5 class="m-t-none m-b mx-2">Fecha de Inscripción:</h5></label><label for="">24/04/24</label></div>
                                                                <div class="text-sm-center"><label><h5 class="m-t-none m-b mx-2">Fecha de Devoluciòn:</h5></label><label for="">27/04/24</label></div>
                                                                <div class="text-center mb-3">
                                                                    <input type="checkbox" class="js-switch_7" checked />
                                                                    <a style="color: black;">Inactivo</a>      
                                                                    
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
                                                        <div class="col-sm-12 b-r">
                                                            <h4 class="text-center">
                                                                ID: 03     
                                                            </h4>
                                                            <form role="form">
                                                                <div class="text-sm-center"><label><h4 class="m-t-none m-b mx-2">Herramienta:</h4></label><label class="font-bold" for="">Libro-y</label></div>
                                                                <div class="text-sm-center"><label><h5 class="m-t-none m-b mx-2">Fecha de Inscripción:</h5></label><label for="">22/04/24</label></div>
                                                                <div class="text-center mb-5">
                                                                    <input type="checkbox" class="js-switch_5" checked />
                                                                    <a  style="color: black;">Activo</a>      
                                                                    <a data-toggle="modal" class="btn btn-primary btn-success mb-2 mx-5" style="font-size: 16px;" href="" >Devolver</a>
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

        var elem_5 = document.querySelector('.js-switch_5');
        var switchery_5 = new Switchery(elem_5, { color: '#1AB394' });
            switchery_5.disable();
            var elem_6 = document.querySelector('.js-switch_6');
        var switchery_6 = new Switchery(elem_6, { color: '#1AB394' });
            switchery_6.disable();   
            var elem_7 = document.querySelector('.js-switch_7');
        var switchery_7 = new Switchery(elem_7, { color: 'red' });
            switchery_7.disable();      
    

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });

        
            
            
        
    


        

        

      
        


</script>

</body>

</html>
