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
                                            <span>Integrantes Familiares</span>
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
																   
                                                                   
                                                                        
                                                                            <div class="row">
																			
																				
                                                                                <div class="col-md-4"> <!-- RUN Trabajador -->
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">RUN </label>
                                                                                        <span class="help-block"> <?php echo $detencuesta->enc_run.'-'.$detencuesta->enc_dv; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4"> <!-- Nombres Trabajador -->
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">Nombres </label>
                                                                                        <span class="help-block"> <?php echo $detencuesta->enc_nombres; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4"> <!-- Apellidos Trabajador -->
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">Apellidos </label>
                                                                                        <span class="help-block"> <?php echo $detencuesta->enc_apellido_p.' '.$detencuesta->enc_apellido_m; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
																			<!--/span-->
                                                                        <!--/row-->
                 

                                                                 
                                                                    
                                                                    
                                                                    
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
                                                            <i class="fa fa-th-large"></i> Listado de Familiares
                                                        </div>
                                                        <div class="actions">
                                                            <a href="<?php echo site_url('integrante/nueva/'.$idencuesta); ?>" class="btn btn-default btn-sm">
                                                                <i class="fa fa-plus"></i> Agregar 
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_6">
                                                            <thead>
                                                                <tr>
                                                                    <th> RUN </th>
                                                                    <th> Apellidos </th>
                                                                    <th> Nombres </th>                                                                    
                                                                    <th> Acciones </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php foreach ($lstintegrantes as $familia): ?>


                                                                <tr class="odd gradeX">
                                                                    <td> <?php echo $familia['fam_run'].'-'.$familia['fam_dv']; ?> </td>
                                                                    <td> <?php echo $familia['fam_apellido_p'].' '.$familia['fam_apellido_m']; ?> </td>
                                                                    <td> <?php echo $familia['fam_nombres']; ?> </td>
                                                                    
                                                                    
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> 
                                                                                Acciones
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                                
                                                                               <!-- <li>
                                                                                    <a href="<?php echo site_url('encuesta/trabajador/'); ?>">
                                                                                        <i class="icon-note"></i> Continuar </a>
                                                                                </li>
																				-->
																				<li>
                                                                                    <a href="<?php echo site_url('integrante/nueva/'); ?>">
                                                                                       <i class="icon-user"></i> Editar </a>
                                                                                </li>
                                                                                
                                                                                <li>
                                                                                    <a href="<?php echo site_url('encuesta/detalle/'); ?>">
                                                                                        <i class="icon-note"></i> Continuar </a>
                                                                                </li>
                                                                                
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
