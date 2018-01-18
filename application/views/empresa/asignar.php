<?php

    if (validation_errors() == ""){
        $rsocial = $regempresa->emp_nombre;
        $rut = $regempresa->emp_rut."-".$regempresa->emp_dv;
        $direccion = $regempresa->emp_direccion;
        $idempresa = $regempresa->empresa_id;
 
    }
    else{
        $rsocial = set_value('txt_rsocial');
        $rut = set_value('txt_rut');
        $direccion = set_value('txt_direccion');
        $idempresa = set_value('sel_empresa');

    }
?>

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
                                        <h1>Empresas Colaboradoras
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
                                            <a href="<?php echo site_url('empresa/listado'); ?>">Empresas Colaboradoras</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Información Empresa Colaboradora</span>
                                        </li>
                                    </ul>
                                    <!-- END PAGE BREADCRUMBS -->
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="mt-content-body">


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
                                                                        <i class="fa fa-th-large"></i>Empresa Colaboradora 
                                                                    </div>
                                                                    <div class="tools">
                                                                        <!--<a href="javascript:;" class="collapse"> </a>
                                                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                                        <a href="javascript:;" class="reload"> </a>
                                                                        <a href="javascript:;" class="remove"> </a>-->
                                                                    </div>
                                                                </div>
                                                                <div class="portlet-body form">
                                                                    <?php
                                                                        $attributes = array('class' => 'horizontal-form');
                                                                        echo form_open('empresa/asignar/'.$id_empresa.'', $attributes);
                                                                    ?>                                                                    
                                                                    <!-- BEGIN FORM-->
                                                                    
                                                                        <div class="form-body">
                                                                            <h3 class="form-section">Datos de la empresa</h3>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_rsocial') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Nombre Empresa </label>
                                                                                        <input type="text" name="txt_rsocial" id="txt_rsocial" class="form-control" placeholder="" value="<?php echo $rsocial; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_rsocial') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_rsocial'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_rut') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">RUT Empresa </label>
                                                                                        <input type="text" name="txt_rut" id="txt_rut" class="form-control" placeholder="" value="<?php echo $rut; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_rut') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_rut'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-12 ">
                                                                                    <div class="form-group <?php if (form_error('txt_direccion') != ""){echo "has-error";} ?>">
                                                                                        <label>Direcci&oacute;n</label>
                                                                                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?php echo $direccion; ?>"> 
                                                                                        <?php
                                                                                        if (form_error('txt_direccion') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_direccion'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/row-->   
																			
																			
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
											<div class="col-md-6">	
                                                <div class="portlet box blue">
												
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="fa fa-th-large"></i>Filiales asociadas
                                                    	</div>

                                                    </div>
                                            </div>        
													<div class="portlet-body">
                                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
                                                            <thead>
                                                                <tr>

                                                                    <th> RUT Filial</th>
                                                                    <th> Nombre Filial </th>                                                   
                                                                    
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                                <?php foreach ($lstfiliales as $filial): ?>

                                                                <tr class="odd gradeX">
																	<td> <?php echo $filial['fil_rut'].'-'.$filial['fil_dv']; ?> </td>
                                                                    <td> <?php echo $filial['fil_nombre']; ?> </td>
                                                                    
                                                                    
   

    
                                                                    
                                                        
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                <!--- FIN MOTOR -->
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- END EXAMPLE TABLE PORTLET-->       
																			
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('sel_filial') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Asignar filial <span class="required" aria-required="true"> * </span></label>
                                                                                        <select class="form-control" name="sel_filial" id="sel_filial">
                                                                                            <option value="">Seleccione una opci&oacute;n</option>
                                                                                            <?php 
                                                                                                foreach ($lstnotfiliales as $filial):
                                                                                                    if ($filial['filial_id'] == $idfilial){
                                                                                                        echo "<option value='".$filial['filial_id']."' selected>".$filial['fil_nombre']."</option>";
                                                                                                    }
                                                                                                    else{
                                                                                                        echo "<option value='".$filial['filial_id']."'>".$filial['fil_nombre']."</option>";                             
                                                                                                    }
                                                                                                endforeach;
                                                                                            ?>
                                                                                        </select>
                                                                                        <?php
                                                                                        if (form_error('sel_filial') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_filial'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
																					
																					<div class="actions">
																						<!--<a href="<?php //echo site_url('empresa/asignar_filial/'.$id_empresa.''); ?>" >-->
																							<button type="submit" class="btn blue" >
																							<i class="fa fa-check"></i> Asignar</button>
																							
																						<!--</a>--> 
																					</div>																					
                                                                                </div>
                                                                                <!--/span-->

                                                                            </div>
                                                                            <!--/row-->
                                                                        </div>
                                                                        <div class="form-actions right">
                                                                            <!--<button type="button" class="btn default">Volver</button>-->
                                                                            <a href="<?php echo site_url('empresa/listado'); ?>" class="btn default" role="button">Volver</a>

                                                                        </div>
                                                                        <input type="hidden" name="hdn_valor" id="hdn_valor" value="1">
                                                                    <?php echo form_close(); ?>
                                                                    <!-- END FORM-->
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
