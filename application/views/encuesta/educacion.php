<?php

    if (validation_errors() == ""){
	
        $niv_escuela = "";
        $tipo_est = "";
        $ult_curso = "";
        $anio_egreso = "";
        $estudiando = "";
        $becas = "";

		
    }
    else{
        $niv_escuela = set_value('rbt_niv_educacion');
        $tipo_est = set_value('rbt_tipo_est');
        $ult_curso = set_value('rbt_ult_curso');
        $anio_egreso = set_value('rbt_anio_egreso');
        $estudiando = set_value('rbt_estudiando');
        $becas = set_value('rbt_becas');
 
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
                                                                                    <div class="form-group <?php if (form_error('rbt_niv_educacion') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Nivel <span class="required" aria-required="true"> * </span></label>

                                                                                        <br/><br/>
                                                                                        <?php
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '1', 'checked' => ('1' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne1'))." Analfabeto <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '2', 'checked' => ('2' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne2'))." Alfabetismo informal <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '3', 'checked' => ('3' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne3'))." Básica Incompleta <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '4', 'checked' => ('4' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne4'))." Básica Completa <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '5', 'checked' => ('5' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne5'))." Media Incompleta (Científico Humanista) <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '6', 'checked' => ('6' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne6'))." Media Completa (Científico Humanista) <br/>";																						
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '7', 'checked' => ('7' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne7'))." Liceo Técnico Incompleto <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '8', 'checked' => ('8' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne8'))." Liceo Técnico Completo <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '9', 'checked' => ('9' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne9'))." Centro de formación Técnica Incompleto <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '10', 'checked' => ('10' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne10'))." Centro de formación Técnica Completo <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '11', 'checked' => ('11' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne11'))." Instituto Profesional Incompleto <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '12', 'checked' => ('12' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne12'))." Instituto Profesional Completo <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '13', 'checked' => ('13' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne13'))." Universidad Incompleta <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '14', 'checked' => ('14' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne14'))." Universidad Completa <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '15', 'checked' => ('15' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne15'))." Post Grado Incompleto <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '16', 'checked' => ('16' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne16'))." Post Grado Completo <br/>";
																						echo form_radio(array('name' => 'rbt_niv_educacion', 'value' => '17', 'checked' => ('17' == $niv_escuela) ? TRUE : FALSE, 'id' => 'ne17'))." Especialidades Fuerzas Armadas <br/>";
																						        
                                                                                        ?>
																						

                                                                                        <?php


                                                                                        if (form_error('rbt_niv_educacion') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_niv_educacion'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
                                                                                <div class="col-md-4"> <!-- Tipo de Establecimiento -->
                                                                                    <div class="form-group <?php if (form_error('rbt_tipo_est') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Tipo de Establecimiento <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_tipo_est', 'value' => '1', 'checked' => ('1' == $tipo_est) ? TRUE : FALSE, 'id' => 'pu'));

                                                                                        ?>

                                                                                        Público &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_tipo_est', 'value' => '2', 'checked' => ('2' == $tipo_est) ? TRUE : FALSE, 'id' => 'pa'));

                                                                                        ?>

                                                                                        Particular &nbsp; 
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'rbt_tipo_est', 'value' => '3', 'checked' => ('3' == $tipo_est) ? TRUE : FALSE, 'id' => 'sub'));

                                                                                        ?>

                                                                                        Subvencionado &nbsp;

                                                                                        <?php


                                                                                        if (form_error('rbt_tipo_est') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_tipo_est'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Ultimo curso aprobado -->
                                                                                    <div class="form-group <?php if (form_error('rbt_ult_curso') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_ult_curso', 'value' => '1', 'checked' => ('1' == $ult_curso) ? TRUE : FALSE, 'id' => 'n1'));

                                                                                        ?>

                                                                                        1 &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_ult_curso', 'value' => '2', 'checked' => ('2' == $ult_curso) ? TRUE : FALSE, 'id' => 'n2'));

                                                                                        ?>

                                                                                        2 &nbsp; 
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'rbt_ult_curso', 'value' => '3', 'checked' => ('3' == $ult_curso) ? TRUE : FALSE, 'id' => 'n3'));

                                                                                        ?>

                                                                                        3 &nbsp;
																						<?php
                                                                                        echo form_radio(array('name' => 'rbt_ult_curso', 'value' => '4', 'checked' => ('4' == $ult_curso) ? TRUE : FALSE, 'id' => 'n4'));

                                                                                        ?>

                                                                                        4 &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_ult_curso', 'value' => '5', 'checked' => ('5' == $ult_curso) ? TRUE : FALSE, 'id' => 'n5'));

                                                                                        ?>

                                                                                        5 &nbsp; 
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'rbt_ult_curso', 'value' => '6', 'checked' => ('6' == $ult_curso) ? TRUE : FALSE, 'id' => 'n6'));

                                                                                        ?>

                                                                                        6 &nbsp;
																						
																						<?php
                                                                                        echo form_radio(array('name' => 'rbt_ult_curso', 'value' => '7', 'checked' => ('7' == $ult_curso) ? TRUE : FALSE, 'id' => 'n7'));

                                                                                        ?>

                                                                                        7 &nbsp;

                                                                                        <?php


                                                                                        if (form_error('rbt_ult_curso') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_ult_curso'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Estudiando -->
                                                                                    <div class="form-group <?php if (form_error('rbt_estudiando') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Actualmente está estudiando? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_estudiando', 'value' => '1', 'checked' => ('1' == $estudiando) ? TRUE : FALSE, 'id' => 's'));

                                                                                        ?>

                                                                                        Sí &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_estudiando', 'value' => '2', 'checked' => ('2' == $estudiando) ? TRUE : FALSE, 'id' => 'n'));

                                                                                        ?>

                                                                                        NO &nbsp; 
																						
																						

                                                                                        <?php


                                                                                        if (form_error('rbt_estudiando') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_estudiando'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																																																												
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Becas -->
                                                                                    <div class="form-group <?php if (form_error('rbt_tipo_est') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">De estar estudiando, ¿tiene alguna de estas becas? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '1', 'checked' => ('1' == $tipo_est) ? TRUE : FALSE, 'id' => 'b1'))." Beca indígena <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_becas', 'value' => '2', 'checked' => ('2' == $tipo_est) ? TRUE : FALSE, 'id' => 'b2'))." Programa de Residencia Familiar <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_becas', 'value' => '3', 'checked' => ('3' == $tipo_est) ? TRUE : FALSE, 'id' => 'b3'))." Beca Mejores Puntajes PSU <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_becas', 'value' => '4', 'checked' => ('4' == $tipo_est) ? TRUE : FALSE, 'id' => 'b4'))." Beca excelencia académica <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_becas', 'value' => '5', 'checked' => ('5' == $tipo_est) ? TRUE : FALSE, 'id' => 'b5'))." Beca Nuevo Milenio <br/>";
                                                                                        echo form_radio(array('name' => 'rbt_becas', 'value' => '6', 'checked' => ('6' == $tipo_est) ? TRUE : FALSE, 'id' => 'b6'))." Beca Nuevo Milenio cursos superiores <br/>";																						
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '7', 'checked' => ('7' == $tipo_est) ? TRUE : FALSE, 'id' => 'b7'))." Beca Juan Gómez Millas <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '8', 'checked' => ('8' == $tipo_est) ? TRUE : FALSE, 'id' => 'b8'))." Beca Juan Gómez Millas cursos superiores <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '9', 'checked' => ('9' == $tipo_est) ? TRUE : FALSE, 'id' => 'b9'))." Beca para Hijos Profesionales de la Educación <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '10', 'checked' => ('10' == $tipo_est) ? TRUE : FALSE, 'id' => 'b10'))." Beca de excelencia técnica <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '11', 'checked' => ('11' == $tipo_est) ? TRUE : FALSE, 'id' => 'b11'))." Beca de Articulación <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '12', 'checked' => ('12' == $tipo_est) ? TRUE : FALSE, 'id' => 'b12'))." Crédito con garantía estatal <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '13', 'checked' => ('13' == $tipo_est) ? TRUE : FALSE, 'id' => 'b13'))." Beca Mantención Educación Superior <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '14', 'checked' => ('14' == $tipo_est) ? TRUE : FALSE, 'id' => 'b14'))." Beca Indígena Educación Superior <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '15', 'checked' => ('15' == $tipo_est) ? TRUE : FALSE, 'id' => 'b15'))." Beca de Residencia Familiar Estudiantil <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '16', 'checked' => ('16' == $tipo_est) ? TRUE : FALSE, 'id' => 'b16'))." Beca Bicentenario <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '17', 'checked' => ('17' == $tipo_est) ? TRUE : FALSE, 'id' => 'b17'))." Beca Bicentenario cursos superiores <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '18', 'checked' => ('18' == $tipo_est) ? TRUE : FALSE, 'id' => 'b18'))." Fondo Solidario de Crédito Universitario <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '19', 'checked' => ('19' == $tipo_est) ? TRUE : FALSE, 'id' => 'b19'))." Beca Interna de la Institución <br/>";
																						echo form_radio(array('name' => 'rbt_becas', 'value' => '20', 'checked' => ('20' == $tipo_est) ? TRUE : FALSE, 'id' => 'b20'))." Gratuidad en la Educación <br/>";
																	

                                                                                        ?>                                                                 
                                                 

                                                                                        <?php


                                                                                        if (form_error('rbt_tipo_est') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_tipo_est'); ?> </span>
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


