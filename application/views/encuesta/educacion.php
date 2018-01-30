<?php

    if (validation_errors() == ""){
	
        $nivel_esc = "";
        $tipo_est = "";
        $ult_curso = "";
        $anio_egreso = "";
        $estudiando = "";
        $becas = "";

		
    }
    else{
        $nivel_esc = set_value('sel_nivel_esc');
        $tipo_est = set_value('sel_tipo_est');
        $ult_curso = set_value('sel_ult_curso');
        $anio_egreso = set_value('txt_anio_egreso');
        $estudiando = set_value('sel_estudiando');
        $becas = set_value('sel_becas');
 
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
                                                                    <div class="mt-step-content font-grey-cascade">Educacion</div>
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
                                                                        echo form_open('encuesta/educacion/'.$idencuesta, $attributes);
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
                                                                            <h4 class="form-section">1.2.- Educacion</h4>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-4"> <!-- Nivel -->
                                                                                    <div class="form-group <?php if (form_error('sel_nivel_esc') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Nivel <span class="required" aria-required="true"> * </span></label>

                                                                                        <br/><br/>
                                                                                        <?php
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '1', 'checked' => ('1' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc1'))." Analfabeto <br/>";
                                                                                        echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '2', 'checked' => ('2' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc2'))." Alfabetismo informal <br/>";
                                                                                        echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '3', 'checked' => ('3' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc3'))." Básica Incompleta <br/>";
                                                                                        echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '4', 'checked' => ('4' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc4'))." Básica Completa <br/>";
                                                                                        echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '5', 'checked' => ('5' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc5'))." Media Incompleta (Científico Humanista) <br/>";
                                                                                        echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '6', 'checked' => ('6' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc6'))." Media Completa (Científico Humanista) <br/>";																						
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '7', 'checked' => ('7' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc7'))." Liceo Técnico Incompleto <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '8', 'checked' => ('8' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc8'))." Liceo Técnico Completo <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '9', 'checked' => ('9' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc9'))." Centro de formación Técnica Incompleto <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '10', 'checked' => ('10' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc10'))." Centro de formación Técnica Completo <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '11', 'checked' => ('11' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc11'))." Instituto Profesional Incompleto <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '12', 'checked' => ('12' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc12'))." Instituto Profesional Completo <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '13', 'checked' => ('13' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc13'))." Universidad Incompleta <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '14', 'checked' => ('14' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc14'))." Universidad Completa <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '15', 'checked' => ('15' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc15'))." Post Grado Incompleto <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '16', 'checked' => ('16' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc16'))." Post Grado Completo <br/>";
																						echo form_radio(array('name' => 'sel_nivel_esc', 'value' => '17', 'checked' => ('17' == $nivel_esc) ? TRUE : FALSE, 'id' => 'nivel_esc17'))." Especialidades Fuerzas Armadas <br/>";
																						        
                                                                                        ?>
																						

                                                                                        <?php


                                                                                        if (form_error('sel_nivel_esc') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_nivel_esc'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
                                                                                <div class="col-md-4"> <!-- Tipo de Establecimiento -->
                                                                                    <div class="form-group <?php if (form_error('sel_tipo_est') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Tipo de Establecimiento <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_tipo_est', 'value' => '1', 'checked' => ('1' == $tipo_est) ? TRUE : FALSE, 'id' => 'tipo_est1'));

                                                                                        ?>

                                                                                        Público &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_tipo_est', 'value' => '2', 'checked' => ('2' == $tipo_est) ? TRUE : FALSE, 'id' => 'tipo_est2'));

                                                                                        ?>

                                                                                        Particular &nbsp; 
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'sel_tipo_est', 'value' => '3', 'checked' => ('3' == $tipo_est) ? TRUE : FALSE, 'id' => 'tipo_est3'));

                                                                                        ?>

                                                                                        Subvencionado &nbsp;

                                                                                        <?php


                                                                                        if (form_error('sel_tipo_est') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_tipo_est'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Ultimo curso aprobado -->
                                                                                    <div class="form-group <?php if (form_error('sel_ult_curso') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_ult_curso', 'value' => '1', 'checked' => ('1' == $ult_curso) ? TRUE : FALSE, 'id' => 'ult_curso1'));

                                                                                        ?>

                                                                                        1 &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_ult_curso', 'value' => '2', 'checked' => ('2' == $ult_curso) ? TRUE : FALSE, 'id' => 'ult_curso2'));

                                                                                        ?>

                                                                                        2 &nbsp; 
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'sel_ult_curso', 'value' => '3', 'checked' => ('3' == $ult_curso) ? TRUE : FALSE, 'id' => 'ult_curso3'));

                                                                                        ?>

                                                                                        3 &nbsp;
																						<?php
                                                                                        echo form_radio(array('name' => 'sel_ult_curso', 'value' => '4', 'checked' => ('4' == $ult_curso) ? TRUE : FALSE, 'id' => 'ult_curso4'));

                                                                                        ?>

                                                                                        4 &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_ult_curso', 'value' => '5', 'checked' => ('5' == $ult_curso) ? TRUE : FALSE, 'id' => 'ult_curso5'));

                                                                                        ?>

                                                                                        5 &nbsp; 
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'sel_ult_curso', 'value' => '6', 'checked' => ('6' == $ult_curso) ? TRUE : FALSE, 'id' => 'ult_curso6'));

                                                                                        ?>

                                                                                        6 &nbsp;
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'sel_ult_curso', 'value' => '7', 'checked' => ('7' == $ult_curso) ? TRUE : FALSE, 'id' => 'ult_curso7'));

                                                                                        ?>

                                                                                        7 &nbsp;

                                                                                        <?php


                                                                                        if (form_error('sel_ult_curso') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_ult_curso'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				<div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('txt_anio_egreso') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Año de egreso <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_anio_egreso" id="txt_anio_egreso" class="form-control" placeholder="" value="<?php echo $anio_egreso; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_anio_egreso') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_anio_egreso'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
																				
                                                                                <div class="col-md-4"> <!-- Estudiando -->
                                                                                    <div class="form-group <?php if (form_error('sel_estudiando') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Actualmente está estudiando? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_estudiando', 'value' => '1', 'checked' => ('1' == $estudiando) ? TRUE : FALSE, 'id' => 's'));

                                                                                        ?>

                                                                                        Sí &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'sel_estudiando', 'value' => '2', 'checked' => ('2' == $estudiando) ? TRUE : FALSE, 'id' => 'n'));

                                                                                        ?>

                                                                                        NO &nbsp; 
																						
																						

                                                                                        <?php


                                                                                        if (form_error('sel_estudiando') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_estudiando'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																																																												
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Becas -->
                                                                                    <div class="form-group <?php if (form_error('sel_becas') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">De estar estudiando, ¿tiene alguna de estas becas? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
																						echo form_radio(array('name' => 'sel_becas', 'value' => '1', 'checked' => ('1' == $becas) ? TRUE : FALSE, 'id' => 'becas1'))." Beca indígena <br/>";
                                                                                        echo form_radio(array('name' => 'sel_becas', 'value' => '2', 'checked' => ('2' == $becas) ? TRUE : FALSE, 'id' => 'becas2'))." Programa de Residencia Familiar <br/>";
                                                                                        echo form_radio(array('name' => 'sel_becas', 'value' => '3', 'checked' => ('3' == $becas) ? TRUE : FALSE, 'id' => 'becas3'))." Beca Mejores Puntajes PSU <br/>";
                                                                                        echo form_radio(array('name' => 'sel_becas', 'value' => '4', 'checked' => ('4' == $becas) ? TRUE : FALSE, 'id' => 'becas4'))." Beca excelencia académica <br/>";
                                                                                        echo form_radio(array('name' => 'sel_becas', 'value' => '5', 'checked' => ('5' == $becas) ? TRUE : FALSE, 'id' => 'becas5'))." Beca Nuevo Milenio <br/>";
                                                                                        echo form_radio(array('name' => 'sel_becas', 'value' => '6', 'checked' => ('6' == $becas) ? TRUE : FALSE, 'id' => 'becas6'))." Beca Nuevo Milenio cursos superiores <br/>";																						
																						echo form_radio(array('name' => 'sel_becas', 'value' => '7', 'checked' => ('7' == $becas) ? TRUE : FALSE, 'id' => 'becas7'))." Beca Juan Gómez Millas <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '8', 'checked' => ('8' == $becas) ? TRUE : FALSE, 'id' => 'becas8'))." Beca Juan Gómez Millas cursos superiores <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '9', 'checked' => ('9' == $becas) ? TRUE : FALSE, 'id' => 'becas9'))." Beca para Hijos Profesionales de la Educación <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '10', 'checked' => ('10' == $becas) ? TRUE : FALSE, 'id' => 'becas10'))." Beca de excelencia técnica <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '11', 'checked' => ('11' == $becas) ? TRUE : FALSE, 'id' => 'becas11'))." Beca de Articulación <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '12', 'checked' => ('12' == $becas) ? TRUE : FALSE, 'id' => 'becas12'))." Crédito con garantía estatal <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '13', 'checked' => ('13' == $becas) ? TRUE : FALSE, 'id' => 'becas13'))." Beca Mantención Educación Superior <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '14', 'checked' => ('14' == $becas) ? TRUE : FALSE, 'id' => 'becas14'))." Beca Indígena Educación Superior <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '15', 'checked' => ('15' == $becas) ? TRUE : FALSE, 'id' => 'becas15'))." Beca de Residencia Familiar Estudiantil <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '16', 'checked' => ('16' == $becas) ? TRUE : FALSE, 'id' => 'becas16'))." Beca Bicentenario <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '17', 'checked' => ('17' == $becas) ? TRUE : FALSE, 'id' => 'becas17'))." Beca Bicentenario cursos superiores <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '18', 'checked' => ('18' == $becas) ? TRUE : FALSE, 'id' => 'becas18'))." Fondo Solidario de Crédito Universitario <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '19', 'checked' => ('19' == $becas) ? TRUE : FALSE, 'id' => 'becas19'))." Beca Interna de la Institución <br/>";
																						echo form_radio(array('name' => 'sel_becas', 'value' => '20', 'checked' => ('20' == $becas) ? TRUE : FALSE, 'id' => 'becas20'))." Gratuidad en la Educación <br/>";																

                                                                                        ?>                                                                 
                                                 

                                                                                        <?php


                                                                                        if (form_error('sel_becas') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_becas'); ?> </span>
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
                                                                            <a href="<?php echo site_url('encuesta/trabajador/'.$idencuesta); ?>" class="btn default" role="button">Volver</a>
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


