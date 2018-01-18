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
                                        <h1>Filiales
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
                                            <a href="<?php echo site_url('empresa/listado'); ?>">Filiales</a>
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
                                                            <i class="fa fa-th-large"></i>Listado de Empresas colaboradoras
                                                    	</div>
                                                        <div class="actions">
                                                            <a href="<?php echo site_url('empresa/crear'); ?>" class="btn btn-default btn-sm">
                                                                <i class="fa fa-plus"></i> Agregar 
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                                                            <thead>
                                                                <tr>
                                                                    <th> RUT Empresa </th>
                                                                    <th> Nombre Empresa </th>
                                                                    <th> Sucursal Empresa </th>
																	<th> Cantidad de filiales </th>

                                                                    
                                                                    
                                                                    <th> Estado </th>
                                                                    <th> Acciones </th>                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                                <?php foreach ($lstempresas as $empresa): ?>

                                                                <tr class="odd gradeX">
                                                                    <td> <?php echo $empresa['emp_rut'].'-'.$empresa['emp_dv'];?> </td>
                                                                    <td> <?php echo $empresa['emp_nombre']; ?></td>
                                                                    <td> <?php echo $empresa['nombre_comuna']; ?> </td> 
																	<td> <?php echo $empresa['filiales']; ?> </td>
                                                                    <td>
                                                                        <?php 

                                                                            if ($empresa['emp_estado'] == 0){
                                                                                echo '<span class="label label-sm label-warning"> Desactivada </span>';
                                                                            }
                                                                            else{
                                                                                echo '<span class="label label-sm label-success"> Activa </span>';                                          
                                                                            }
                                                                        ?>
                                                                    </td>       
                                                                    <td>
                                                                        <!--##################### FALTA AQUI######################## -->
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> 
                                                                                Acciones
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                                <?php 
                                                                                    if ($empresa['emp_estado'] == 1){
                                                                                ?>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('empresa/editar/'.$empresa['empresa_id']); ?>">
                                                                                        <i class="icon-pencil"></i> Editar </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('empresa/desactivar/'.$empresa['empresa_id']); ?>">
                                                                                        <i class="icon-action-undo"></i> Desactivar </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('empresa/asignar/'.$empresa['empresa_id']); ?>">
                                                                                        <i class="glyphicon glyphicon-hand-right"></i> Asignar </a>
                                                                                </li>

                                                                                <?php
                                                                                    }
                                                                                    else{
                                                                                ?>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('empresa/activar/'.$empresa['empresa_id']); ?>">
                                                                                        <i class="icon-action-redo"></i> Activar </a>
                                                                                </li>
                                                                                <?php
                                                                                    }
                                                                                ?>
                                                                            </ul>
                                                                        </div>
                                                                    </td>     <!--##################### hasta aca ######################## -->                                                               
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <!--- FIN MOTOR -->
                                                                
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
