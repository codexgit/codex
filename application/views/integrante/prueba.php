<?php

    if (validation_errors() == ""){
       
		$jefe_familia 			 = "";
		$ant_indigena 			 = "";
		$parentesco 			 = "";
		$padre_profesor 		 = "";	
		$es_carga				 = "";	
	   	
    }
    else{
		$jefe_familia			 = 	set_value('sel_jefe_familia');
		$ant_indigena			 = 	set_value('sel_ant_indigena');
        $parentesco				 = 	set_value('sel_parentesco');
        $padre_profesor			 = 	set_value('sel_padre_profesor');
		$es_carga				 =  set_value('sel_es_carga');
                
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
                                        <h1>Encuestas </h1>
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
                                            <span>Agregar Familiar</span>
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


                                            <div class="col-md-12">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-body">
                                                        <div class="mt-element-step">
                                                            <div class="row step-thin">
                                                                <div class="col-md-4 bg-grey mt-step-col">
                                                                    <div class="mt-step-number bg-white font-grey">1</div>
                                                                    <div class="mt-step-title uppercase font-grey-cascade">Trabajador</div>
                                                                    <div class="mt-step-content font-grey-cascade">Antecedentes personales</div>
                                                                </div>
                                                                <div class="col-md-4 bg-grey mt-step-col">
                                                                    <div class="mt-step-number bg-white font-grey">2</div>
                                                                    <div class="mt-step-title uppercase font-grey-cascade">Vivienda</div>
                                                                    <div class="mt-step-content font-grey-cascade">Servicios y subsidios</div>
                                                                </div>
                                                                <div class="col-md-4 bg-grey mt-step-col active">
                                                                    <div class="mt-step-number bg-white font-grey">3</div>
                                                                    <div class="mt-step-title uppercase font-grey-cascade">Familia</div>
                                                                    <div class="mt-step-content font-grey-cascade">Datos Personales</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                                <div class="col-md-12 col-sm-12">

                                                            <div class="portlet box blue">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-globe"></i>Agregar Datos Familiar 
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
																		
                                                                        echo form_open('integrante/datos/'.$idencuesta.'/'.$idfamilia_datos, $attributes);
                                                                    ?>
                                                                        <div class="form-body">
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
                                                                            <h4 class="form-section">3.1.- Antecedentes Personales</h4>
                                                                            <!--/row-->
                                                                            <div class="row">
																			
																				<!--/span-->
																				
                                                                                <!--/span-->
                                                                                <div class="col-md-4"> <!-- Jefe de Familia -->
                                                                                    <div class="form-group <?php if (form_error('sel_jefe_familia') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Es Jefe(a) de Familia? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_jefe_familia', 'value' => '1', 'checked' => ('1' == $jefe_familia) ? TRUE : FALSE, 'id' => 'jefe_familia1'));

                                                                                        ?>

                                                                                        Sí &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_jefe_familia', 'value' => '2', 'checked' => ('2' == $jefe_familia) ? TRUE : FALSE, 'id' => 'jefe_familia2'));

                                                                                        ?>

                                                                                        No 

                                                                                        <?php


                                                                                        if (form_error('sel_jefe_familia') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_jefe_familia'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
																				 <!--/span-->
                                                                                <div class="col-md-4"> <!-- Es Carga -->
                                                                                    <div class="form-group <?php if (form_error('sel_es_carga') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Es carga familiar del trabajador? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_es_carga', 'value' => '1', 'checked' => ('1' == $es_carga) ? TRUE : FALSE, 'id' => 'es_carga1'));
																						
                                                                                        ?>

                                                                                        Sí &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_es_carga', 'value' => '2', 'checked' => ('2' == $es_carga) ? TRUE : FALSE, 'id' => 'es_carga2'));

                                                                                        ?>

                                                                                        No 

                                                                                        <?php


                                                                                        if (form_error('sel_es_carga') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_es_carga'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->	
																				
																				 
                                                                                <!--/span-->
                                                                                <div class="col-md-4"> <!-- Parentesco -->
                                                                                    <div class="form-group <?php if (form_error('sel_parentesco') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Cuál es el Parentesco con el Trabajador? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_parentesco', 'value' => '1', 'checked' => ('1' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco1'))." No <br/>";
                                                                                        echo form_radio(array('name' => 'sel_parentesco', 'value' => '2', 'checked' => ('2' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco2'))." Sí, yo <br/>";
                                                                                        echo form_radio(array('name' => 'sel_parentesco', 'value' => '3', 'checked' => ('3' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco3'))." Sí, uno de mis padres <br/>";
                                                                                        echo form_radio(array('name' => 'sel_parentesco', 'value' => '4', 'checked' => ('4' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco4'))." Sí, uno de mis abuelos <br/>";
                                                                                        echo form_radio(array('name' => 'sel_parentesco', 'value' => '5', 'checked' => ('5' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco5'))." Sí, uno de mis bisabuelos <br/>";
                                                                                        echo form_radio(array('name' => 'sel_parentesco', 'value' => '6', 'checked' => ('6' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco6'))." No se <br/>";


                                                                                        if (form_error('sel_parentesco') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_parentesco'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Ascendencia índígena --> 
                                                                                    <div class="form-group <?php if (form_error('sel_ant_indigena') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Usted o sus ascendientes tiene origen indígena? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '1', 'checked' => ('1' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena1'))." No <br/>";
                                                                                        echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '2', 'checked' => ('2' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena2'))." Sí, yo <br/>";
                                                                                        echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '3', 'checked' => ('3' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena3'))." Sí, uno de mis padres <br/>";
                                                                                        echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '4', 'checked' => ('4' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena4'))." Sí, uno de mis abuelos <br/>";
                                                                                        echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '5', 'checked' => ('5' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena5'))." Sí, uno de mis bisabuelos <br/>";
                                                                                        echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '6', 'checked' => ('6' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena6'))." No se <br/>";


                                                                                        if (form_error('sel_ant_indigena') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_ant_indigena'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
																				 <!--/span-->
                                                                                <div class="col-md-4"> <!-- Padre/Madre trabaja en establecimientos educacionales -->
                                                                                    <div class="form-group <?php if (form_error('sel_padre_profesor') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Su madre o padre trabaja en algún establecimiento educacional, municipal, particular subvencionado o de aadministración delegada? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_padre_profesor', 'value' => '1', 'checked' => ('1' == $padre_profesor) ? TRUE : FALSE, 'id' => 'padre_profesor1'));

                                                                                        ?>

                                                                                        Sí &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_padre_profesor', 'value' => '2', 'checked' => ('2' == $padre_profesor) ? TRUE : FALSE, 'id' => 'padre_profesor2'));

                                                                                        ?>

                                                                                        No 

                                                                                        <?php


                                                                                        if (form_error('sel_padre_profesor') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_padre_profesor'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->	
																				
                                                                               
																		
																		<!-- END FORM -->
																		
                                                                        <div class="form-actions right">
                                                                            <!--<button type="button" class="btn default">Volver</button>-->
                                                                            <a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
                                                                            <button type="submit" class="btn blue">
                                                                                <i class="fa fa-check"></i> Siguiente</button>
                                                                        </div>
                                                                        <input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
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



