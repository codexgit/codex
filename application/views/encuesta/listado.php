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
                                        <h1>Encuestas
                                            <!--<small>Indicadores & estadísticas</small>-->
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
                                            <a href="<?php echo site_url('encuesta/empresas'); ?>">Encuestas</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Listado de encuestas</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">



                                        <div class="row">


                                            <?php 
                                            if ($mensaje != NULL && $mensaje != ""){
                                            ?>
                                            <div class="col-md-12">
                                                <div class="<?php echo $divtipo; ?>">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                    <?php echo $mensaje; ?>
                                                </div>                                                
                                            </div>

                                            <?php
                                            }
                                            ?>
                                            
                                            <div class="col-md-12 col-sm-12">

                                                        <div class="portlet box blue">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="fa fa-th-large"></i>Datos generales 
                                                                </div>
                                                                <div class="tools">
                                                                    <!--<a href="javascript:;" class="collapse"> </a>
                                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                    <a href="javascript:;" class="reload"> </a>
                                                                    <a href="javascript:;" class="remove"> </a>-->
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body form">
                                                                <!-- BEGIN FORM-->
                                                                <form action="#" class="horizontal-form">
                                                                    <div class="form-body">

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">RUT Filial </label>
                                                                                    <span class="help-block"> <?php echo $detfilempresa->fil_rut.'-'.$detfilempresa->fil_dv; ?> </span>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Nombre Filial </label>
                                                                                    <span class="help-block"> <?php echo $detfilempresa->fil_nombre; ?> </span>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                 
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">RUT Empresa Colaboradora  </label>
                                                                                    <span class="help-block"> <?php echo $detfilempresa->emp_rut.'-'.$detfilempresa->emp_dv; ?> </span>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Nombre Empresa Colaboradora </label>
                                                                                    <span class="help-block"> <?php echo $detfilempresa->emp_nombre; ?> </span>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                 

                                                                     
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                </form>
                                                                <!-- END FORM-->
                                                            </div>
                                                        </div>                                                  
                                                
                                                
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-th-large"></i>Listado de encuestas
                                                        </div>
                                                        <div class="actions">
                                                            <a href="<?php echo site_url('encuesta/nueva/'.$idfilempresa); ?>" class="btn btn-default btn-sm">
                                                                <i class="fa fa-plus"></i> Nueva 
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_6">
                                                            <thead>
                                                                <tr>
                                                                    <th> RUN Trabajador</th>
                                                                    <th> Apellidos </th>
                                                                    <th> Nombres </th>
                                                                    <th> Comuna </th>
                                                                    <th> Estado </th>
                                                                    <th> Acciones </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php foreach ($lstencuestas as $encuesta): ?>


                                                                <tr class="odd gradeX">
                                                                    <td> <?php echo $encuesta['enc_run'].'-'.$encuesta['enc_dv']; ?> </td>
                                                                    <td> <?php echo $encuesta['enc_apellido_p'].' '.$encuesta['enc_apellido_m']; ?> </td>
                                                                    <td> <?php echo $encuesta['enc_nombres']; ?> </td>
                                                                    <td> <?php echo $encuesta['nombre_comuna']; ?> </td>
                                                                    <td> 
                                                                        <?php 

                                                                            if ($encuesta['enc_estado'] == 1){
                                                                                echo '<span class="label label-sm label-warning"> Almacenada </span>';
                                                                            }
                                                                            else if ($encuesta['enc_estado'] == 2){
                                                                                echo '<span class="label label-sm label-success"> Enviada </span>';                                          
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> 
                                                                                Acciones
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                                <?php 
                                                                                    if ($encuesta['enc_estado'] == 1){
                                                                                ?>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('encuesta/editar/'.$encuesta['encuesta_id']); ?>">
                                                                                        <i class="icon-note"></i> Continuar </a>
                                                                                </li>
                                                                                <?php 
                                                                                    }
                                                                                    else{
                                                                                ?>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('encuesta/detalle/'.$encuesta['encuesta_id']); ?>">
                                                                                        <i class="icon-note"></i> Continuar </a>
                                                                                </li>
                                                                                <?php        
                                                                                    }
                                                                                ?>
                                                                            </ul>
                                                                        </div>
                                                                    </td>                                                                    
                                                                </tr>


                                                                <?php endforeach; ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->                                                
                                                
                                                
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
