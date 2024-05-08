<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Horario-Máquina</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
    <link href="css/plugins/jqGrid/ui.jqgrid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/switchery/switchery.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <style>
        /* Additional style to fix warning dialog position */
        #alertmod_table_list_2 {
            top: 900px !important;
        }

    </style>
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
                                        <a href="form-horario-clase.html">Horario Clase</a>
                                        
                                    </li>
                                    <li>
                                        <a href="horario-clase-semanal.html">Horario Semanal</a>
                                    </li>
                                </ul>
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
                    <li class="active">
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
                    <li>
                        <a href="Maquinas.html"><i class="fa fa-desktop"></i> <span class="nav-label">Maquinas</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
    
                            <li>
                                <a href="Maquinas.html"><span class="nav-label">Maquinas</span></a>
                                
                            </li>
                            <li><a href="horario-maquinas.html">Horario</a></li>
                            <li><a href="Computadora.html">Computadoras</a></li>
                            
                            
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
                    <h2>jqGrid</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Tables</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>jqGrid</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>jQuery Grid Plugin – jqGrid</h5>
                        </div>
                        <div class="ibox-content">

                        

                            <div class="jqGrid_wrapper">
                                <table id="table_list_1"></table>
                                <div id="pager_list_1"></div>
                            </div>

                        
                            <p>

                            </p>

                            <div class="jqGrid_wrapper">
                                <table id="table_list_2"></table>
                                <div id="pager_list_2"></div>
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

        <style>
            .receso-row {
                font-weight: bold; /* Ajusta el peso de la fuente para destacar la fila */
                 /* Cambia el color de fondo de la fila "RECESO" */
                height: 100px; /* Ajusta la altura de la fila */
            }
            .normal-row {
                height: 150px; /* Ajusta la altura de las filas "8:30am - 12:30pm" y "2:00pm - 6:00pm" */
            }
            .ui-jqgrid .ui-jqgrid-htable th:nth-child(n+2):nth-child(-n+8) {
                background-color: #ADD8E6; /* Color celeste */
            }
            .jqgrid_colheader {
                font-size: 20px; /* Ajusta el tamaño de la fuente según lo necesites */
                font-weight: bold; /* Opcional: hacer el texto en negrita */
            }
            .ui-jqgrid .ui-jqgrid-view {
                
                font-size: 15px;
            }
            .ui-jqgrid .ui-jqgrid-titlebar {
                padding: 0;
                background: #4e7bbf;
                color: white;
                font-size: 14px;
            }
        </style>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- jqGrid -->
    <script src="js/plugins/jqGrid/i18n/grid.locale-en.js"></script>
    <script src="js/plugins/jqGrid/jquery.jqGrid.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>


    <script>
        $(document).ready(function () {
        
            // Examle data for jqGrid
            var mydata = [
                {id: "8:30am - 12:30pm", invdate: ["Marlo Estructura","9:00 - 12:30"], name: "", amount: ["Richard Programacion","8:30 - 12:30"], note: "", tax: ["Daniel Programacion","8:30 - 12:30"] , note:["Gustavo Android","9:00 - 12:30"],total:"" } ,
                {id: "12:30pm - 2:00pm", invdate: "RECESO", colspan: "6"} ,
                {id: "2:00pm - 6:00pm", invdate:  ["Isabel Analisis","3:00 - 6:00"], name:  ["Marlo Estructura","2:00 - 6:00"], amount:["Josue Analisis","2:00 - 6:00"], note: "", tax: ["Daniel Programación","2:00 - 6:00"], total: ["Xiomara Android","2:00 - 6:00"]}
            ];
        
            $("#table_list_2").jqGrid({
                data: mydata,
                datatype: "local",
                height: 450,
                autowidth: true,
                shrinkToFit: true,
                rowNum: 20,
                rowList: [10, 20, 30],
                colNames:['Hora/Maquina','M1', 'M2', 'M3','M4','M5','M6', 'M7'],
                colModel:[
                    {name:'id', index:'id', editable: true, width:70, sorttype:"int", search:true, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        return 'style="text-align:center; background-color: yourColor;"'; // Cambia "yourColor" al color deseado
                    }},
                    {name:'invdate',index:'invdate', editable: true, width:70, sorttype:"text", formatter:function(cellValue, options, rowObject) {
                        if (rowObject.invdate instanceof Array) {
                            return rowObject.invdate[0] + '<br>' + rowObject.invdate[1];
                        } else {
                            return cellValue;
                        }
                    }, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        if (rawObject.colspan) {
                            return 'colspan="7" style="text-align:center; background-color: #b6b937; color: white; font-size: 25px; font-weight: bold"'; 
                        } else {
                            return 'style="text-align:center; background-color: #78EA91;"'; // Cambia "yourColor" al color deseado
                        }
                    }},
                    {name:'name',index:'name', editable: true, width:70, sorttype:"text", formatter:function(cellValue, options, rowObject) {
                        if (rowObject.name instanceof Array) {
                            return rowObject.name[0] + '<br>' + rowObject.name[1];
                        } else {
                            return cellValue ;
                        }
                    }, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        return 'style="text-align:center; background-color: #;"'; // Cambia "yourColor" al color deseado
                    }},
                    {name:'amount',index:'amount', editable: true, width:70, sorttype:"text", formatter:function(cellValue, options, rowObject) {
                        if (rowObject.amount instanceof Array) {
                            return rowObject.amount[0] + '<br>' + rowObject.amount[1];
                        } else {
                            return cellValue;
                        }
                    }, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        return 'style="text-align:center; background-color: #95BBF4;"'; // Cambia "yourColor" al color deseado
                    }},
                    {name:'tax',index:'tax', editable: true, width:70, sorttype:"text", formatter:function(cellValue, options, rowObject) {
                        if (rowObject.tax instanceof Array) {
                            return rowObject.tax[0] + '<br>' + rowObject.tax[1];
                        } else {
                            return cellValue;
                        }
                    }, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        return 'style="text-align:center; background-color: #DDF2A1;"'; // Cambia "yourColor" al color deseado
                    }},
                    {name:'total',index:'total', editable: true, width:70, sorttype:"text", formatter:function(cellValue, options, rowObject) {
                        if (rowObject.total instanceof Array) {
                            return rowObject.total[0] + '<br>' + rowObject.total[1];
                        } else {
                            return cellValue;
                        }
                    }, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        return 'style="text-align:center; background-color: yourColor;"'; // Cambia "yourColor" al color deseado
                    }},
                    {name:'note',index:'note', editable: true, width:70, sorttype:"text", formatter:function(cellValue, options, rowObject) {
                        if (rowObject.note instanceof Array) {
                            return rowObject.note[0] + '<br>' + rowObject.note[1];
                        } else {
                            return cellValue;
                        }
                    }, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        return 'style="text-align:center; background-color: yourColor;"'; // Cambia "yourColor" al color deseado
                    }},
                    {name:'maquina7',index:'maquina7', editable: true, width:70, cellattr: function(rowId, val, rawObject, cm, rdata) {
                        return 'style="text-align:center; background-color: yourColor;"'; // Cambia "yourColor" al color deseado
                    }}
                ],
                cmTemplate: {cellattr: function(rowId, val, rawObject, cm, rdata) {
                    if (!rawObject.colspan) {
                        return 'style="text-align:center;" font-size: 20px;"'; 
                    }
                    return ''; 
                }},
                pager: "#pager_list_2",
                viewrecords: true,
                caption: "<div style='display:flex; justify-content: space-between; align-items: center;'><span>Febrero | </span><span style='text-align: center;'> | Lunes 19</span></div>",  
                add: true,
                edit: true,
                addtext: 'Add',
                edittext: 'Edit',
                hidegrid: false,
                rowattr: function (rd) {
                    if (rd.invdate === "RECESO") {
                        return {"class": "receso-row"}; // Aplica una clase CSS especial a la fila "RECESO"
                    } else {
                        return {"class": "normal-row"}; // Aplica una clase CSS especial a las filas "8:30am - 12:30pm" y "2:00pm - 6:00pm"
                    }
                }
            });
        
            // Add selection
            $("#table_list_2").setSelection(4, true);
        
            // Setup buttons
            $("#table_list_2").jqGrid('navGrid', '#pager_list_2',
                    {edit: true, add: true, del: true, search: true},
                    {height: 200, reloadAfterSubmit: true}
            );
        
            // Add responsive to jqGrid
            $(window).bind('resize', function () {
                var width = $('.jqGrid_wrapper').width();
                $('#table_list_1').setGridWidth(width);
                $('#table_list_2').setGridWidth(width);
            });
        
            setTimeout(function(){
                $('.wrapper-content').removeClass('animated fadeInRight');
            },700);
        
        });
        </script>
        


</body>

</html>