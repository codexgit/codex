<?php

    if (validation_errors() == ""){
        $idfilial = $regfilial->filial_id;
        $rsocial = $regfilial->fil_nombre;
        $rut = $regfilial->fil_rut."-".$regfilial->fil_dv;
        $direccion = $regfilial->fil_direccion;
        $idregion = $regcomuna->region_id;
        $idcomuna = $regfilial->comuna_id;
    }
    else{
        $idfilial = set_value('hdn_idfilial');
        $rsocial = set_value('txt_rsocial');
        $rut = set_value('txt_rut');
        $direccion = set_value('txt_direccion');
        $idregion = set_value('sel_region');
        $idcomuna = set_value('sel_comuna');
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
                                            <span>Editar Filial</span>
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
                                                                        <i class="fa fa-globe"></i>Nueva Filial 
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
                                                                    <?php
                                                                        $attributes = array('class' => 'horizontal-form');
                                                                        echo form_open('filial/editar', $attributes);
                                                                    ?>
                                                                        <div class="form-body">
                                                                            <h3 class="form-section">Datos de la empresa</h3>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_rsocial') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Razón Social <span class="required" aria-required="true"> * </span></label>
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
                                                                                        <label class="control-label">RUT Filial <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_rut" id="txt_rut" class="form-control" placeholder="Ej: 12345678-9" value="<?php echo $rut; ?>">
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
                                                                                        <label class="control-label">Direcci&oacute;n</label>
                                                                                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="" value="<?php echo $direccion; ?>"> 
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
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('sel_region') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Regi&oacute;n <span class="required" aria-required="true"> * </span></label>
                                                                                        <select class="form-control" name="sel_region" id="sel_region">
                                                                                            <option value="">Seleccione una opci&oacute;n</option>
                                                                                            <?php 
                                                                                                foreach ($lstregiones as $region):
                                                                                                    if ($region['region_id'] == $idregion){
                                                                                                        echo "<option value='".$region['region_id']."' selected>".$region['codigo_region']." - ".$region['nombre_region']."</option>";
                                                                                                    }
                                                                                                    else{
                                                                                                        echo "<option value='".$region['region_id']."'>".$region['codigo_region']." - ".$region['nombre_region']."</option>";                             
                                                                                                    }
                                                                                                endforeach;
                                                                                            ?>
                                                                                        </select>
                                                                                        <?php
                                                                                        if (form_error('sel_region') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_region'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('sel_comuna') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Comuna <span class="required" aria-required="true"> * </span></label>
                                                                                        <select class="form-control" name="sel_comuna" id="sel_comuna">
                                                                                            <option value="">Seleccione una opci&oacute;n</option>
                                                                                            <?php 
																								if(isset($lstcomunas) ){
																									foreach ($lstcomunas as $comuna):
																										if ($comuna['comuna_id'] == $idcomuna){
																											echo "<option value='".$comuna['comuna_id']."' selected>".$comuna['nombre_comuna']."</option>";
																										}
																										else{
																											echo "<option value='".$comuna['comuna_id']."'>".$comuna['nombre_comuna']."</option>";                             
																										}
																									endforeach;
																								}
                                                                                            ?>                                    
                                                                                        </select>
                                                                                        <?php
                                                                                        if (form_error('sel_comuna') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_comuna'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                        </div>
                                                                        <div class="form-actions right">
                                                                            <!--<button type="button" class="btn default">Volver</button>-->
                                                                            <a href="<?php echo site_url('filial/listado'); ?>" class="btn default" role="button">Volver</a>
                                                                            <button type="submit" class="btn blue">
                                                                                <i class="fa fa-check"></i> Guardar</button>
                                                                        </div>
                                                                        <input type="hidden" name="hdn_idfilial" id="hdn_idfilial" value="<?php echo $idfilial; ?>">
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
