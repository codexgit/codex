<?php

    if (validation_errors() == ""){
        $run = "";
        $nombres = "";
        $apellidop = "";
        $apellidom = "";
        $idregion = "";
        $idcomuna = "";
    }
    else{
        $run = set_value('txt_run');
        $nombres = set_value('txt_nombres');
        $apellidop = set_value('txt_apellidop');
        $apellidom = set_value('txt_apellidom');
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
                                            <a href="<?php echo site_url('filial/listado'); ?>">Encuestas</a>
                                            <i class="fa fa-circle"></i>
                                        </li>
                                        <li>
                                            <span>Nueva Encuesta</span>
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


                                            <!--<div class="col-md-12">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-body">
                                                        <div class="mt-element-step">
                                                            <div class="row step-thin">
                                                                <div class="col-md-4 bg-grey mt-step-col active">
                                                                    <div class="mt-step-number bg-white font-grey">1</div>
                                                                    <div class="mt-step-title uppercase font-grey-cascade">Trabajador</div>
                                                                    <div class="mt-step-content font-grey-cascade">Antecedentes personales</div>
                                                                </div>
                                                                <div class="col-md-4 bg-grey mt-step-col">
                                                                    <div class="mt-step-number bg-white font-grey">2</div>
                                                                    <div class="mt-step-title uppercase font-grey-cascade">Vivienda</div>
                                                                    <div class="mt-step-content font-grey-cascade">Servicios y subsidios</div>
                                                                </div>
                                                                <div class="col-md-4 bg-grey mt-step-col">
                                                                    <div class="mt-step-number bg-white font-grey">3</div>
                                                                    <div class="mt-step-title uppercase font-grey-cascade">Familia</div>
                                                                    <div class="mt-step-content font-grey-cascade">Salud y educación</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->



                                                <div class="col-md-12 col-sm-12">

                                                            <div class="portlet box blue">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-globe"></i>Nueva Encuesta 
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
                                                                        echo form_open('encuesta/nueva/'.$idfilempresa, $attributes);
                                                                    ?>
                                                                        <div class="form-body">
                                                                            <h3 class="form-section">Datos de la empresa</h3>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">Filial </label>
                                                                                        <span class="help-block"> <?php echo $detfilempresa->fil_nombre; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">RUT Filial </label>
                                                                                        <span class="help-block"> <?php echo $detfilempresa->fil_rut.'-'.$detfilempresa->fil_dv; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">Empresa colaboradora </label>
                                                                                        <span class="help-block"> <?php echo $detfilempresa->emp_nombre; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">RUT Empresa </label>
                                                                                        <span class="help-block"> <?php echo $detfilempresa->emp_rut.'-'.$detfilempresa->emp_dv; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_run') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">RUN Trabajador <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_run" id="txt_run" class="form-control" placeholder="Ej: 12345678-9" value="<?php echo $run; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_run') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_run'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_nombres') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Nombres <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="" value="<?php echo $nombres; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_nombres') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_nombres'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_apellidop') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Apellido Paterno <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_apellidop" id="txt_apellidop" class="form-control" placeholder="" value="<?php echo $apellidop; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_apellidop') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_apellidop'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_apellidom') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Apellido Materno </label>
                                                                                        <input type="text" name="txt_apellidom" id="txt_apellidom" class="form-control" placeholder="" value="<?php echo $apellidom; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_apellidom') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_apellidom'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->

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
                                                                                                foreach ($lstcomunas as $comuna):
                                                                                                    if ($comuna['comuna_id'] == $idcomuna){
                                                                                                        echo "<option value='".$comuna['comuna_id']."' selected>".$comuna['nombre_comuna']."</option>";
                                                                                                    }
                                                                                                    else{
                                                                                                        echo "<option value='".$comuna['comuna_id']."'>".$comuna['nombre_comuna']."</option>";                             
                                                                                                    }
                                                                                                endforeach;
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
                                                                            <a href="<?php echo site_url('encuesta/listado/'.$idfilempresa); ?>" class="btn default" role="button">Volver</a>
                                                                            <button type="submit" class="btn blue">
                                                                                <i class="fa fa-check"></i> Guardar</button>
                                                                        </div>
                                                                        <input type="hidden" name="hdn_filempresaid" id="hdn_filempresaid" value="<?php echo $idfilempresa; ?>">
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


