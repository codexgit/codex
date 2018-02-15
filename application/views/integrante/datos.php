<?php

    if (validation_errors() == ""){
       
		$jefe_familia 			 = "";
		$ant_indigena 			 = "";
		$parentesco 			 = "";
		$padre_profesor 		 = "";	
		$es_carga				 = "";	
		
		$cond_permanente		= "";
		$ges					= "";

		$usa_prevsalud 			= "";
		$trabajando				= "";
		$sit_contrato           = "";
		$sit_nolaboral          = "";
		$det_pension            = "";
		$meses_cesante          = "";
		$inicio_activ           = "";
		$matriculado            = "";
		$nivel_educ             = "";
		$tipo_est               = "";
		$ult_curso              = "";
		$fin_estudios           = "";
		$rindio_psu             = "";
		$anio_psu               = "";
		$puntaje_psu            = "";
		$ult_promedio           = "";
		$fin_educsup            = "";
		$ibruto_mes1            = "";
		$ibruto_mes2            = "";
		$ibruto_mes3            = "";
		$iliquido_mes1          = "";
		$iliquido_mes2          = "";
		$iliquido_mes3          = "";
		$rec_pension            = "";
		$pension_mes1           = "";
		$pension_mes2           = "";
		$pension_mes3           = "";
		$rec_otros              = "";
		$otros_mes1             = "";
		$otros_mes2             = "";
		$otros_mes3             = "";
	   	
    }
    else{
		$jefe_familia			 = 	set_value('sel_jefe_familia');
		$ant_indigena			 = 	set_value('sel_ant_indigena');
        $parentesco				 = 	set_value('sel_parentesco');
        $padre_profesor			 = 	set_value('sel_padre_profesor');
		$es_carga				 =  set_value('sel_es_carga');
                
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

<!-- BEGIN TAB PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-anchor font-green-sharp"></i>
                                            <span class="caption-subject font-green-sharp bold uppercase">Encuestas</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;"> Option 1</a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;">Option 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">Option 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">Option 4</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <p> Favor ir rellenando los campos pestaña por pestaña </p>
										
                                        <div class="tabbable tabbable-tabdrop">
										
                                            <ul class="nav nav-tabs">
                                                <li class="active">												
                                                    <a href="#tab1" data-toggle="tab">Datos Personales</a>													 
                                                </li>
                                                <li>
                                                    <a href="#tab2" data-toggle="tab">Salud</a>													
                                                </li>
                                                <li>
                                                    <a href="#tab3" data-toggle="tab">Trabajo</a>
                                                </li>
                                                <li>
                                                    <a href="#tab4" data-toggle="tab">Educación</a>
                                                </li>
												
												<li>
                                                    <a href="#tab5" data-toggle="tab">Ingresos</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab1"> <!-- DATOS PERSONALES -- >
												<!-- BEGIN FORM-->
													<div class="portlet-body form">			   
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
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '1', 'checked' => ('1' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco1'))." Hijo(a) sólo del trabajador <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '2', 'checked' => ('2' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco2'))." Hijo(a) sólo del cónyuge <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '3', 'checked' => ('3' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco3'))." Cónyuge <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '4', 'checked' => ('4' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco4'))." Conviviente <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '5', 'checked' => ('5' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco5'))." Hijo(a) <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '6', 'checked' => ('6' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco6'))." Padre <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '7', 'checked' => ('7' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco7'))." Madre <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '8', 'checked' => ('8' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco8'))." Suegro(a) <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '9', 'checked' => ('9' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco9'))." Yerno <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '10', 'checked' => ('10' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco10'))." Nieto(a) <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '11', 'checked' => ('11' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco11'))." Hermano(a) <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '12', 'checked' => ('12' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco12'))." Cuñado(a) <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '13', 'checked' => ('13' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco13'))." Nuera <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '14', 'checked' => ('14' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco14'))." Sobrino(a) <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '15', 'checked' => ('15' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco15'))." Otro Familiar <br/>";
																			echo form_radio(array('name' => 'sel_parentesco', 'value' => '16', 'checked' => ('16' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco16'))." No Familiar <br/>";
																			
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
																</div>	
																<!-- END ROW -->
															
															<!-- END FORM -->
															
																<div class="form-actions right">
																	<!--<button type="button" class="btn default">Volver</button>-->
																	<a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
																	<button type="submit" class="btn blue">
																		<i class="fa fa-check"></i> Siguiente</button>
																</div>
																	<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
																	<?php echo form_close(); ?>
															</div>	
													</div>
													
														<!-- END FORM-->                                                    
												</div>
											
											
                                                <div class="tab-pane" id="tab2"> <!-- SALUD -->
													<!-- BEGIN FORM-->
													<div class="portlet-body form">			   
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
																<h4 class="form-section">3.2.- Salud Familiar</h4>
																<!--/row-->
																<div class="row">
														
																	<!--/span-->
																	<div class="col-md-4"> <!-- Condición permanente -->
																		<div class="form-group <?php if (form_error('txt_cond_permanente') != ""){echo "has-error";} ?>">
																			<label class="control-label">¿Posee usted alguna de estas condiciones en forma permanente? <span class="required" aria-required="true"> * </span></label>
																			<br/><br/>
																			<?php
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '1', 'checked' => ('1' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente1'))." Ceguera <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '2', 'checked' => ('2' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente2'))." Dificultad Visual <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '3', 'checked' => ('3' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente3'))." Mudez <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '4', 'checked' => ('4' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente4'))." Sordera <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '5', 'checked' => ('5' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente5'))." Dificultad Auditiva <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '6', 'checked' => ('6' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente6'))." Dificultad en  el habla <br/>";																						
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '7', 'checked' => ('7' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente7'))." Enfermedades psiquiátricas <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '8', 'checked' => ('8' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente8'))." Dificultad física (requiere ayuda para su desplazamiento) <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '9', 'checked' => ('9' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente9'))." No tiene <br/>";														

																			?>                                                                 
									 

																			<?php


																			if (form_error('txt_cond_permanente') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('txt_cond_permanente'); ?> </span>
																			<?php
																			}
																			?>
																		</div>
																	</div>
                                                                    <!--/span-->
																	
																	<!--/span-->
																	<div class="col-md-4"> <!-- Patologia GES -->
																		<div class="form-group <?php if (form_error('txt_ges') != ""){echo "has-error";} ?>">
																			<label class="control-label">¿Usted posee alguna patología GES? Orientar con anexo<span class="required" aria-required="true"> * </span></label>
																			<input type="text" name="txt_ges" id="txt_ges" class="form-control" placeholder="" value="<?php echo $ges; ?>">
																			<?php
																			if (form_error('txt_ges') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('txt_ges'); ?> </span>
																			<?php
																			}
																			?>
																			
                                                                        </div>
                                                                    </div>
																</div>	
																<!-- END ROW -->
															
															<!-- END FORM -->
															
																<div class="form-actions right">
																	<!--<button type="button" class="btn default">Volver</button>-->
																	<a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
																	<button type="submit" class="btn blue">
																		<i class="fa fa-check"></i> Siguiente</button>
																</div>
																	<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
																	<?php echo form_close(); ?>
															</div>	
													</div>
													
														<!-- END FORM-->								
                                                </div>
												
                                                <div class="tab-pane" id="tab3"> <!--TRABAJO -->
													<!-- BEGIN FORM-->
													<div class="portlet-body form">			   
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
																<h4 class="form-section">3.3.- Trabajo Familiar</h4>
																<!--/row-->
																<div class="row">
														
																	<!--/span-->
																	<div class="col-md-4"> <!-- Trabajando -->
																		<div class="form-group <?php if (form_error('sel_trabajando') != ""){echo "has-error";} ?>">
																			<label class="control-label">Si es mayor a 18 años, Actualmente, ¿está trabajando? <span class="required" aria-required="true"> * </span></label>
																			<br/><br/>
																			<?php
																			echo form_radio(array('name' => 'sel_trabajando', 'value' => '1', 'checked' => ('1' == $trabajando) ? TRUE : FALSE, 'id' => 'trabajando1'))." Sí <br/>";
																			echo form_radio(array('name' => 'sel_trabajando', 'value' => '2', 'checked' => ('2' == $trabajando) ? TRUE : FALSE, 'id' => 'trabajando2'))." No <br/>";
																			
																			?>                                                                 
									 

																			<?php


																			if (form_error('sel_trabajando') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('sel_trabajando'); ?> </span>
																			<?php
																			}
																			?>
																		</div>
																	</div>
                                                                    <!--/span-->
																	
																	<!--/span-->
																	<div class="col-md-4"> <!-- Relación Contractual -->
																		<div class="form-group <?php if (form_error('sel_sit_contrato') != ""){echo "has-error";} ?>">
																			<label class="control-label">Si está trabajando, ¿Cuál es su relación Contractual?<span class="required" aria-required="true"> * </span></label>
																			<br/><br/>
																			<?php
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '1', 'checked' => ('1' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato1'))." Contrato Indefinido <br/>";
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '2', 'checked' => ('2' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato2'))." Contrato a Plazo Fijo <br/>";
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '3', 'checked' => ('3' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato3'))." Contrato por obra o faena<br/>";
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '4', 'checked' => ('4' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato4'))." Contrato de aprendizaje <br/>";
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '5', 'checked' => ('5' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato5'))." Prestación de servicios a honorarios <br/>";
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '6', 'checked' => ('6' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato6'))." Sin Contrato <br/>";
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '7', 'checked' => ('7' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato7'))." Trabajo Independiente <br/>";
																			echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '8', 'checked' => ('8' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato8'))." Sin información <br/>";
																			
																			?>   
																			<?php
																			if (form_error('sel_sit_contrato') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('sel_sit_contrato'); ?> </span>
																			<?php
																			}
																			?>
																			
                                                                        </div>
                                                                    </div>
																	<!-- span-->
																	
																	<!--/span-->
																	<div class="col-md-4"> <!-- Situación no laboral -->
																		<div class="form-group <?php if (form_error('sel_sit_nolaboral') != ""){echo "has-error";} ?>">
																			<label class="control-label">Si no está trabajando, ¿Cuál es su situación actual?<span class="required" aria-required="true"> * </span></label>
																			<br/><br/>
																			<?php
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '1', 'checked' => ('1' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral1'))." Dueña de Casa<br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '2', 'checked' => ('2' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral2'))." Estudiante<br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '3', 'checked' => ('3' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral3'))." Jubilado o Pensionado<br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '4', 'checked' => ('4' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral4'))." Cesante <br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '5', 'checked' => ('5' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral5'))." Otro <br/>";
																			
																			?>   
																			<?php
																			if (form_error('sel_sit_nolaboral') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('sel_sit_nolaboral'); ?> </span>
																			<?php
																			}
																			?>
																			
                                                                        </div>
                                                                    </div>
																	<!-- span-->
																	
																	<!--/span-->
																	<div class="col-md-4"> <!-- Situación no laboral -->
																		<div class="form-group <?php if (form_error('sel_sit_nolaboral') != ""){echo "has-error";} ?>">
																			<label class="control-label">Si no está trabajando, ¿Cuál es su situación actual?<span class="required" aria-required="true"> * </span></label>
																			<br/><br/>
																			<?php
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '1', 'checked' => ('1' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral1'))." Dueña de Casa<br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '2', 'checked' => ('2' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral2'))." Estudiante<br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '3', 'checked' => ('3' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral3'))." Jubilado o Pensionado<br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '4', 'checked' => ('4' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral4'))." Cesante <br/>";
																			echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '5', 'checked' => ('5' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral5'))." Otro <br/>";
																			
																			?>   
																			<?php
																			if (form_error('sel_sit_nolaboral') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('sel_sit_nolaboral'); ?> </span>
																			<?php
																			}
																			?>
																			
                                                                        </div>
                                                                    </div>
																	<!-- span-->
																	
																	
																</div>	
																<!-- END ROW -->
															
															<!-- END FORM -->
															
																<div class="form-actions right">
																	<!--<button type="button" class="btn default">Volver</button>-->
																	<a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
																	<button type="submit" class="btn blue">
																		<i class="fa fa-check"></i> Siguiente</button>
																</div>
																	<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
																	<?php echo form_close(); ?>
															</div>	
													</div>
													
														<!-- END FORM-->	
                                                    <p> Howdy, I'm in Section 3. </p>
                                                </div>
                                                <div class="tab-pane" id="tab4"> <!-- EDUCACIÓN -->
													<!-- BEGIN FORM-->
													<div class="portlet-body form">			   
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
																<h4 class="form-section">3.4.- Educación Familiar</h4>
																<!--/row-->
																<div class="row">
														
																	<!--/span-->
																	<div class="col-md-4"> <!-- Condición permanente -->
																		<div class="form-group <?php if (form_error('txt_cond_permanente') != ""){echo "has-error";} ?>">
																			<label class="control-label">¿Posee usted alguna de estas condiciones en forma permanente? <span class="required" aria-required="true"> * </span></label>
																			<br/><br/>
																			<?php
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '1', 'checked' => ('1' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente1'))." Ceguera <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '2', 'checked' => ('2' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente2'))." Dificultad Visual <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '3', 'checked' => ('3' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente3'))." Mudez <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '4', 'checked' => ('4' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente4'))." Sordera <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '5', 'checked' => ('5' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente5'))." Dificultad Auditiva <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '6', 'checked' => ('6' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente6'))." Dificultad en  el habla <br/>";																						
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '7', 'checked' => ('7' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente7'))." Enfermedades psiquiátricas <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '8', 'checked' => ('8' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente8'))." Dificultad física (requiere ayuda para su desplazamiento) <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '9', 'checked' => ('9' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente9'))." No tiene <br/>";														

																			?>                                                                 
									 

																			<?php


																			if (form_error('txt_cond_permanente') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('txt_cond_permanente'); ?> </span>
																			<?php
																			}
																			?>
																		</div>
																	</div>
                                                                    <!--/span-->
																	
																	<!--/span-->
																	<div class="col-md-4"> <!-- Patologia GES -->
																		<div class="form-group <?php if (form_error('txt_ges') != ""){echo "has-error";} ?>">
																			<label class="control-label">¿Usted posee alguna patología GES? Orientar con anexo<span class="required" aria-required="true"> * </span></label>
																			<input type="text" name="txt_ges" id="txt_ges" class="form-control" placeholder="" value="<?php echo $ges; ?>">
																			<?php
																			if (form_error('txt_ges') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('txt_ges'); ?> </span>
																			<?php
																			}
																			?>
																			
                                                                        </div>
                                                                    </div>
																</div>	
																<!-- END ROW -->
															
															<!-- END FORM -->
															
																<div class="form-actions right">
																	<!--<button type="button" class="btn default">Volver</button>-->
																	<a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
																	<button type="submit" class="btn blue">
																		<i class="fa fa-check"></i> Siguiente</button>
																</div>
																	<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
																	<?php echo form_close(); ?>
															</div>	
													</div>
													
														<!-- END FORM-->	
                                                    <p> Howdy, I'm in Section 4. </p>
                                                </div>
                                                <div class="tab-pane" id="tab5"> <!-- INGRESOS -->
													<!-- BEGIN FORM-->
													<div class="portlet-body form">			   
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
																<h4 class="form-section">3.4.- Educación Familiar</h4>
																<!--/row-->
																<div class="row">
														
																	<!--/span-->
																	<div class="col-md-4"> <!-- Condición permanente -->
																		<div class="form-group <?php if (form_error('txt_cond_permanente') != ""){echo "has-error";} ?>">
																			<label class="control-label">¿Posee usted alguna de estas condiciones en forma permanente? <span class="required" aria-required="true"> * </span></label>
																			<br/><br/>
																			<?php
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '1', 'checked' => ('1' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente1'))." Ceguera <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '2', 'checked' => ('2' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente2'))." Dificultad Visual <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '3', 'checked' => ('3' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente3'))." Mudez <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '4', 'checked' => ('4' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente4'))." Sordera <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '5', 'checked' => ('5' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente5'))." Dificultad Auditiva <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '6', 'checked' => ('6' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente6'))." Dificultad en  el habla <br/>";																						
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '7', 'checked' => ('7' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente7'))." Enfermedades psiquiátricas <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '8', 'checked' => ('8' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente8'))." Dificultad física (requiere ayuda para su desplazamiento) <br/>";
																			echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '9', 'checked' => ('9' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente9'))." No tiene <br/>";														

																			?>                                                                 
									 

																			<?php


																			if (form_error('txt_cond_permanente') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('txt_cond_permanente'); ?> </span>
																			<?php
																			}
																			?>
																		</div>
																	</div>
                                                                    <!--/span-->
																	
																	<!--/span-->
																	<div class="col-md-4"> <!-- Patologia GES -->
																		<div class="form-group <?php if (form_error('txt_ges') != ""){echo "has-error";} ?>">
																			<label class="control-label">¿Usted posee alguna patología GES? Orientar con anexo<span class="required" aria-required="true"> * </span></label>
																			<input type="text" name="txt_ges" id="txt_ges" class="form-control" placeholder="" value="<?php echo $ges; ?>">
																			<?php
																			if (form_error('txt_ges') != NULL){
																			?>
																			<span class="help-block"> <?php echo form_error('txt_ges'); ?> </span>
																			<?php
																			}
																			?>
																			
                                                                        </div>
                                                                    </div>
																</div>	
																<!-- END ROW -->
															
															<!-- END FORM -->
															
																<div class="form-actions right">
																	<!--<button type="button" class="btn default">Volver</button>-->
																	<a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
																	<button type="submit" class="btn blue">
																		<i class="fa fa-check"></i> Siguiente</button>
																</div>
																	<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
																	<?php echo form_close(); ?>
															</div>	
													</div>
													
														<!-- END FORM-->	
                                                    <p> Howdy, I'm in Section 4. </p>
                                                </div>
                                            </div>
											
                                        </div>
                                        <p> &nbsp; </p>
                                        <p> &nbsp; </p>										
										
						
                               
                            


                  



