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
                                            <span>Empresas Colaboradoras</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">


                                    	<div class="row">

                                            <?php 
                                            if ($mensaje != null && $mensaje != ""){
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
                                        	<div class="col-md-12">
                                                
                                                
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-th-large"></i>Empresas colaboradoras asignadas
                                                        </div>
                                                        <div class="actions">
                                                            <!--<a href="#" class="btn btn-default btn-sm">
                                                                <i class="fa fa-plus"></i> Agregar 
                                                            </a>-->
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_6">
                                                            <thead>
                                                                <tr>
                                                                    <th> RUT Filial</th>
                                                                    <th> Nombre Filial </th>
                                                                    <th> RUT Empresa </th>
                                                                    <th> Nombre Empresa </th>
                                                                    <th> Sucursal Empresa </th>
                                                                    <th> Acciones </th>                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php foreach ($lstfilusuario as $filusuario): ?>


                                                                <tr class="odd gradeX">
                                                                    <td> <?php echo $filusuario['fil_rut'].'-'.$filusuario['fil_dv']; ?> </td>
                                                                    <td> <?php echo $filusuario['fil_nombre']; ?> </td>
                                                                    <td> <?php echo $filusuario['emp_rut'].'-'.$filusuario['emp_dv']; ?> </td>
                                                                    <td> <?php echo $filusuario['emp_nombre']; ?> </td>
                                                                    <td> <?php echo $filusuario['nombre_comuna']; ?> </td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> 
                                                                                Acciones
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                                <li>
                                                                                    <a href="<?php echo site_url('encuesta/listado/'.$filusuario['filial_empresa_id']); ?>">
                                                                                        <i class="icon-note"></i> Ver encuestas </a>
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
