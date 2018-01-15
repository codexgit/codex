<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>SIBTRA - Sistema Integrado de Beneficios Laborales y Sociales</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-md">
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/pages/img/logo_sibtra.png" alt="logo" class="logo-default">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">

                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="<?php echo base_url(); ?>/assets/layouts/layout3/img/avatar1.jpg">
                                                <span class="username username-hide-mobile">Jorge Prado</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-user"></i> Mi Perfil </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-calendar"></i> Mis Actividades </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-envelope-open"></i> Mensajes
                                                        <span class="badge badge-danger"> 3 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-rocket"></i> Tareas
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="sesion_cerrar.html">
                                                        <i class="icon-key"></i> Cerrar Sesión </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu"">
                            <div class="container">
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown active">
                                            <a href="inicio_analista.html"> 
                                            	<i class="icon-home"></i> Inicio
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                            <a href="#"> 
                                            	<i class="icon-globe"></i> Filiales
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="filiales_listado.html" class="nav-link  ">
                                                        <i class="icon-list"></i> Listado
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="filiales_crear.html" class="nav-link  ">
                                                        <i class="icon-plus"></i> Crear 
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="ecolaboradoras_listado.html" class="nav-link  ">
                                                        <i class="icon-grid"></i> Colaboradoras
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                            <a href="#"> 
                                            	<i class="icon-heart"></i> Beneficios
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="beneficios_listado.html" class="nav-link  "> 
                                                    	<i class="icon-list"></i> Listado 
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="beneficios_crear.html" class="nav-link  "> 
														<i class="icon-plus"></i> Crear                                                    
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="#"> 
                                            	<i class="icon-note"></i> Encuestas
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
                                                    	<i class="icon-link"></i> Asociar Recopilador 
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
														<i class="icon-magnifier"></i> Validar Encuestas                                                   
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
														<i class="icon-cloud-upload"></i> Carga Masiva                                                   
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="#"> 
                                            	<i class="icon-settings"></i> Procesamiento
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
                                                    	<i class="icon-target"></i> Unitario 
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
														<i class="icon-layers"></i> Grupal                                                    
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="#"> 
                                            	<i class="icon-calculator"></i> Reportes
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
                                                    	<i class="icon-graph"></i> Gráficos 
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
														<i class="icon-docs"></i> Descargables                                                    
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
														<i class="icon-equalizer"></i> Predefinidos                                                    
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                                            <a href="#"> 
                                            	<i class="icon-feed"></i> Noticias
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
                                                    	<i class="icon-list"></i> Listado 
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class=" ">
                                                    <a href="#" class="nav-link  "> 
														<i class="icon-plus"></i> Crear                                                    
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Inicio
                                            <small>Indicadores & estadísticas</small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    <!-- BEGIN PAGE TOOLBAR -->
                                    <div class="page-toolbar">

                                    </div>
                                    <!-- END PAGE TOOLBAR -->
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE BREADCRUMBS -->
                                    <ul class="page-breadcrumb breadcrumb">
                                        <li>
                                            <a href="index.html">Inicio</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Indicadores</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="mt-content-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption caption-md">
                                                                <i class="icon-bar-chart font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel uppercase bold">Resumen Encuestas</span>
                                                                <!--<span class="caption-helper">weekly stats...</span>-->
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm active">
                                                                        <input type="radio" name="options" class="toggle" id="option1">Ayer</label>
                                                                    <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Semana</label>
                                                                    <label class="btn btn-transparent btn-no-border blue-oleo btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Mes</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row list-separated">
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Total Encuestas </div>
                                                                    <div class="uppercase font-hg font-red-flamingo"> 124
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Procesadas </div>
                                                                    <div class="uppercase font-hg theme-font"> 34
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Revisadas </div>
                                                                    <div class="uppercase font-hg font-purple"> 50
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                                    <div class="font-grey-mint font-sm"> Pendientes </div>
                                                                    <div class="uppercase font-hg font-blue-sharp"> 40
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-separated list-inline-xs hide">
                                                                <li>
                                                                    <div class="font-grey-mint font-sm"> Total Encuestas </div>
                                                                    <div class="uppercase font-hg font-red-flamingo"> 124
                                                                    </div>
                                                                </li>
                                                                <li> </li>
                                                                <li class="border">
                                                                    <div class="font-grey-mint font-sm"> Procesadas </div>
                                                                    <div class="uppercase font-hg theme-font"> 34
                                                                    </div>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <div class="font-grey-mint font-sm"> Revisadas </div>
                                                                    <div class="uppercase font-hg font-purple"> 50
                                                                    </div>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <div class="font-grey-mint font-sm"> Pendientes </div>
                                                                    <div class="uppercase font-hg font-blue-sharp"> 40
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 267px"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption caption-md">
                                                                <i class="icon-bar-chart font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Ranking</span>
                                                                <!--<span class="caption-helper">weekly stats...</span>-->
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active">
                                                                        <input type="radio" name="options" class="toggle" id="option1">Ayer</label>
                                                                    <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Semana</label>
                                                                    <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option3">Mes</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="row number-stats margin-bottom-30">
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="stat-left">
                                                                        <div class="stat-chart">
                                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                            <div id="sparkline_bar"></div>
                                                                        </div>
                                                                        <div class="stat-number">
                                                                            <div class="title"> Total </div>
                                                                            <div class="number"> 124 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="stat-right">
                                                                        <div class="stat-chart">
                                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                            <div id="sparkline_bar2"></div>
                                                                        </div>
                                                                        <div class="stat-number">
                                                                            <div class="title"> Procesadas </div>
                                                                            <div class="number"> 34 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="table-scrollable table-scrollable-borderless">
                                                                <table class="table table-hover table-light">
                                                                    <thead>
                                                                        <tr class="uppercase">
                                                                            <th colspan="2"> Analista </th>
                                                                            <th> Total </th>
                                                                            <th> Procesadas </th>
                                                                            <th> Revisadas </th>
                                                                            <th> Avance </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar4.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Pedro</a>
                                                                        </td>
                                                                        <td> 20 </td>
                                                                        <td> 8 </td>
                                                                        <td> 12 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">40%</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar5.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Juan</a>
                                                                        </td>
                                                                        <td> 17 </td>
                                                                        <td> 3 </td>
                                                                        <td> 14 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">17,65%</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar6.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Julieta</a>
                                                                        </td>
                                                                        <td> 15 </td>
                                                                        <td> 10 </td>
                                                                        <td> 5 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">66,67%</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fit">
                                                                            <img class="user-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar7.jpg"> </td>
                                                                        <td>
                                                                            <a href="javascript:;" class="primary-link">Alonso</a>
                                                                        </td>
                                                                        <td> 10 </td>
                                                                        <td> 2 </td>
                                                                        <td> 8 </td>
                                                                        <td>
                                                                            <span class="bold theme-font">20%</span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">


                                                <div class="col-md-6 col-sm-6">
                                                    <!-- BEGIN PORTLET-->
                                                    <div class="portlet light ">
                                                        <div class="portlet-title tabbable-line">
                                                            <div class="caption">
                                                                <i class="icon-globe font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Eventos</span>
                                                            </div>
                                                            <ul class="nav nav-tabs">
                                                                <li class="active">
                                                                    <a href="#tab_1_1" class="active" data-toggle="tab"> Actividades </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab_1_2" data-toggle="tab"> Sistema </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <!--BEGIN TABS-->
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="tab_1_1">
                                                                    <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                                                        <ul class="feeds">
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-info">
                                                                                                <i class="fa fa-bolt"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Carga masiva de encuestas exitosa </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 24 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Encuesta ingresada por usuario </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 30 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Encuesta ingresada por recopilador </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 40 mins </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-success">
                                                                                                <i class="fa fa-plus"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Recopilador asociado a filial </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 1 hora </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-warning">
                                                                                                <i class="fa fa-plus"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Nuevo recopilador registrado </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 1.5 horas </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-success">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Encuesta procesada por sistema </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 20 horas </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-warning">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Encuesta validada por analista </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 21 horas </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-default">
                                                                                                <i class="fa fa-bullhorn"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Encuesta ingresada por recopilador </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 horas </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-success">
                                                                                                <i class="fa fa-link"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Empresa colaboradora asociada a filial </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 22 horas </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-warning">
                                                                                                <i class="fa fa-plus"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Nueva filial registrada </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 23 horas </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="col1">
                                                                                    <div class="cont">
                                                                                        <div class="cont-col1">
                                                                                            <div class="label label-sm label-success">
                                                                                                <i class="fa fa-heart"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="cont-col2">
                                                                                            <div class="desc"> Beneficio social agregado por analista
                                                                                                <!--<span class="label label-sm label-default "> Overdue </span>-->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col2">
                                                                                    <div class="date"> 23 horas </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="tab_1_2">
                                                                    <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                                                        <ul class="feeds">

                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Respaldo diario generado exitosamente </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 1 hora </div>
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Modificaciones sobre la sección de noticias </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 4 horas </div>
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Procesamiento masivo de encuestas exitoso </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 10 horas </div>
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Respaldo diario generado exitosamente </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 1 día </div>
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-danger">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Error al generar el respaldo diario </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 2 días </div>
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-info">
                                                                                                    <i class="fa fa-heart"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Modificaciones a la sección de beneficios </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 3 días </div>
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-success">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Respaldo diario generado exitosamente </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 3 días </div>
                                                                                    </div>
                                                                            </li>
                                                                            <li>
                                                                                    <div class="col1">
                                                                                        <div class="cont">
                                                                                            <div class="cont-col1">
                                                                                                <div class="label label-sm label-danger">
                                                                                                    <i class="fa fa-bell-o"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="cont-col2">
                                                                                                <div class="desc"> Error al generar respaldo semanal </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col2">
                                                                                        <div class="date"> 4 días </div>
                                                                                    </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--END TABS-->
                                                        </div>
                                                    </div>
                                                    <!-- END PORTLET-->
                                                </div>
                                            
                                            	

                                                
                                                
                                                
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                            <div class="caption caption-md">
                                                                <i class="icon-bar-chart font-dark hide"></i>
                                                                <span class="caption-subject font-green-steel bold uppercase">Noticias</span>
                                                                <!--<span class="caption-helper">45 pending</span>-->
                                                            </div>
                                                            <div class="inputs">
                                                                <div class="portlet-input input-inline input-small ">
                                                                    <div class="input-icon right">
                                                                        <i class="icon-magnifier"></i>
                                                                        <input type="text" class="form-control form-control-solid input-circle" placeholder="buscar ..."> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                                <div class="general-item-list">
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar4.jpg">
                                                                                <a href="" class="item-name primary-link">Pedro Jaramillo</a>
                                                                                <span class="item-label">Hace 3 horas</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-success"></span> Informaciones</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar3.jpg">
                                                                                <a href="" class="item-name primary-link">Marcos Robles</a>
                                                                                <span class="item-label">Hace 5 horas</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-warning"></span> Tareas</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar6.jpg">
                                                                                <a href="" class="item-name primary-link">Julieta Saavedra</a>
                                                                                <span class="item-label">Hace 8 horas</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-primary"></span> Art&iacute;culos</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar7.jpg">
                                                                                <a href="" class="item-name primary-link">Alonso Miranda</a>
                                                                                <span class="item-label">Hace 12 horas</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-danger"></span> Incidentes</span>
                                                                        </div>
                                                                        <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar9.jpg">
                                                                                <a href="" class="item-name primary-link">Ricardo Araya</a>
                                                                                <span class="item-label">Hace 2 d&iacute;as</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-danger"></span> Incidentes</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar8.jpg">
                                                                                <a href="" class="item-name primary-link">Daniela Barroso</a>
                                                                                <span class="item-label">Hace 3 d&iacute;as</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-warning"></span> Tareas</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                    <div class="item">
                                                                        <div class="item-head">
                                                                            <div class="item-details">
                                                                                <img class="item-pic rounded" src="<?php echo base_url(); ?>/assets/pages/media/users/avatar2.jpg">
                                                                                <a href="" class="item-name primary-link">Laura Zapata</a>
                                                                                <span class="item-label">Hace 4 horas</span>
                                                                            </div>
                                                                            <span class="item-status">
                                                                                <span class="badge badge-empty badge-success"></span> Informaciones</span>
                                                                        </div>
                                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        
                        
                        
                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Acerca de</h2>
                                    <p> SIBTRA - Sistema Integrado de Beneficios Laborales y Sociales para los Trabajadores</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Boletín electrónico</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Suscribir</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>S&iacute;guenos en</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacto</h2>
                                    <address class="margin-bottom-40"> Tel&eacute;fono: 800 100 2000
                                        <br> Email:
                                        <a href="mailto:contacto@sibtra.cl">contacto@sibtra.cl</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2018 &copy; Desarrollado Por
                            <a target="_blank" href="http://www.puertoespconsultores.cl">Puerto Esperanza Consultores</a> &nbsp;
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        <!-- BEGIN QUICK NAV -->
        
                
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/global/plugins/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!--<script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>-->
    </body>

</html>