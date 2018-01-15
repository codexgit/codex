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
                                            <a href="<?php echo site_url('filial/listado'); ?>">Filiales</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Listado</span>
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
                                                            <i class="fa fa-globe"></i>Listado de Filiales
                                                    	</div>
                                                        <div class="actions">
                                                            <a href="<?php echo site_url('filial/crear'); ?>" class="btn btn-default btn-sm">
                                                                <i class="fa fa-plus"></i> Agregar 
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3_2">
                                                            <thead>
                                                                <tr>
                                                                    <th> RUT Filial</th>
                                                                    <th> Nombre Filial </th>
                                                                    <th> Comuna </th>
                                                                    <th> Estado </th>
                                                                    <th> Acciones </th>                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php foreach ($lstfiliales as $filial): ?> 

                                                                <tr class="odd gradeX">
                                                                    <td> <?php echo $filial['fil_rut'].'-'.$filial['fil_dv'];?> </td>
                                                                    <td> <?php echo $filial['fil_nombre']; ?> </td>
                                                                    <td> <?php echo $filial['nombre_comuna']; ?> </td>
                                                                    <td>
                                                                        <?php 

                                                                            if ($filial['fil_estado'] == 0){
                                                                                echo '<span class="label label-sm label-warning"> Desactivada </span>';
                                                                            }
                                                                            else{
                                                                                echo '<span class="label label-sm label-success"> Activa </span>';                                          
                                                                            }
                                                                        ?>
                                                                        <!--<span class="label label-sm label-warning"> Desactivada </span>-->
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> 
                                                                            	Acciones
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                                <?php 
                                                                                    if ($filial['fil_estado'] == 1){
                                                                                ?>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('filial/editar/'.$filial['filial_id']); ?>">
                                                                                        <i class="icon-pencil"></i> Editar </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('filial/desactivar/'.$filial['filial_id']); ?>">
                                                                                        <i class="icon-action-undo"></i> Desactivar </a>
                                                                                </li>
                                                                                <?php
                                                                                    }
                                                                                    else{
                                                                                ?>
                                                                                <li>
                                                                                    <a href="<?php echo site_url('filial/activar/'.$filial['filial_id']); ?>">
                                                                                        <i class="icon-action-redo"></i> Activar </a>
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
