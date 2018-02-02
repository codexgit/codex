<?php

    if (validation_errors() == ""){
	
        $cont_menores = 		$salud['sad_cont_menores'];
        $cons_drogas = 			$salud['sad_cons_drogas'];
        $cons_drogas_d = 		$salud['sad_cons_drogas_d'];
        $pat_ges = 				$salud['sad_pat_ges'];
        $usa_prevision = 		$salud['sad_usa_prevision'];
        $cond_permanente = 		$salud['sad_cond_permanente'];

    }
    else{
        $cont_menores = set_value('sel_cont_menores');
        $cons_drogas = set_value('sel_cons_drogas');
        $cons_drogas_d = set_value('txt_cons_drogas_d');
        $pat_ges = set_value('txt_pat_ges');
        $usa_prevision = set_value('sel_usa_prevision');
        $cond_permanente = set_value('txt_cond_permanente');
 
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
                                            <span>Editar Encuesta</span>
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
                                                                <div class="col-md-4 bg-grey mt-step-col active">
                                                                    <div class="mt-step-number bg-white font-grey">1</div>
                                                                    <div class="mt-step-title uppercase font-grey-cascade">Trabajador</div>
                                                                    <div class="mt-step-content font-grey-cascade">Salud</div>
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
                                            </div>



                                                <div class="col-md-12 col-sm-12">

                                                            <div class="portlet box blue">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-globe"></i>Editar Encuesta 
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
                                                                        echo form_open('encuesta/salud/'.$idencuesta, $attributes);
                                                                    ?>
                                                                        <div class="form-body">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">RUN </label>
                                                                                        <span class="help-block"> <?php echo $detencuesta->enc_run.'-'.$detencuesta->enc_dv; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">Nombres </label>
                                                                                        <span class="help-block"> <?php echo $detencuesta->enc_nombres; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">Apellidos </label>
                                                                                        <span class="help-block"> <?php echo $detencuesta->enc_apellido_p.' '.$detencuesta->enc_apellido_m; ?> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <h4 class="form-section">1.3.- Salud</h4>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-4"> <!-- Control Niño sano -->
                                                                                    <div class="form-group <?php if (form_error('sel_cont_menores') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Si existen niños menores de 6 años en tu familia, ¿Los están llevando al control niño sano en el centro de salud?<span class="required" aria-required="true"> * </span></label>

                                                                                        <br/><br/>
                                                                                        <?php
																						echo form_radio(array('name' => 'sel_cont_menores', 'value' => '1', 'checked' => ('1' == $cont_menores) ? TRUE : FALSE, 'id' => 'cont_menores1'))." Si<br/>";
                                                                                        echo form_radio(array('name' => 'sel_cont_menores', 'value' => '2', 'checked' => ('2' == $cont_menores) ? TRUE : FALSE, 'id' => 'cont_menores2'))." No <br/>";
                                                                                        echo form_radio(array('name' => 'sel_cont_menores', 'value' => '3', 'checked' => ('3' == $cont_menores) ? TRUE : FALSE, 'id' => 'cont_menores3'))." No corresponde <br/>";
																						        
                                                                                        ?>
																						

                                                                                        <?php


                                                                                        if (form_error('sel_cont_menores') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_cont_menores'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
                                                                                <div class="col-md-4"> <!-- Problemas de drogas/alcohol -->
                                                                                    <div class="form-group <?php if (form_error('sel_cons_drogas') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Algún integrante de sus grupo familiar tiene problemas en la escuela, el trabajo, con los vecinos o dentro de la familia a causa del consumo de alcohol o drogas? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
																						echo form_radio(array('name' => 'sel_cons_drogas', 'value' => '1', 'checked' => ('1' == $cons_drogas) ? TRUE : FALSE, 'id' => 'cons_drogas1'))." Si<br/>";
                                                                                        echo form_radio(array('name' => 'sel_cons_drogas', 'value' => '2', 'checked' => ('2' == $cons_drogas) ? TRUE : FALSE, 'id' => 'cons_drogas2'))." No <br/>";
																						        
                                                                                        ?>                                                                                        
																						
                                                                                        <?php

                                                                                        if (form_error('sel_cons_drogas') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_cons_drogas'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Edad de dicha persona -->
                                                                                    <div class="form-group <?php if (form_error('txt_cons_drogas_d') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Qué edad tiene?<span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_cons_drogas_d" id="txt_cons_drogas_d" class="form-control" placeholder="" value="<?php echo $cons_drogas_d; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_cons_drogas_d') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_cons_drogas_d'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                        
                                                                                    </div>
                                                                                </div>                                                                                
																				
																				
                                                                                <div class="col-md-4"> <!-- Patologia GES -->
                                                                                    <div class="form-group <?php if (form_error('txt_pat_ges') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Usted posee alguna patología GES? Orientar con anexo<span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_pat_ges" id="txt_pat_ges" class="form-control" placeholder="" value="<?php echo $pat_ges; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_pat_ges') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_pat_ges'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                
                                                                                <div class="col-md-4"> <!-- Previsión -->
                                                                                    <div class="form-group <?php if (form_error('sel_usa_prevision') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Hace uso de las garantías de atención que ofrece su sistema previsional de salud [FONASA/ISAPRE]?<span class="required" aria-required="true"> * </span></label>

                                                                                        <br/><br/>
                                                                                        <?php
																						echo form_radio(array('name' => 'sel_usa_prevision', 'value' => '1', 'checked' => ('1' == $usa_prevision) ? TRUE : FALSE, 'id' => 'usa_prevision1'))." Si<br/>";
                                                                                        echo form_radio(array('name' => 'sel_usa_prevision', 'value' => '2', 'checked' => ('2' == $usa_prevision) ? TRUE : FALSE, 'id' => 'usa_prevision2'))." No <br/>";
																						        
                                                                                        ?>
																						

                                                                                        <?php
                                                                                        if (form_error('sel_usa_prevision') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_usa_prevision'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																																																												
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
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>                                                                        
                                                                                                                                 
                                                                        
                                                                        <div class="form-actions right">
                                                                            <!--<button type="button" class="btn default">Volver</button>-->
                                                                            <a href="<?php echo site_url('encuesta/educacion/'.$idencuesta); ?>" class="btn default" role="button">Volver</a>
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


