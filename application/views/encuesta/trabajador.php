<?php

    if (validation_errors() == ""){
		
		$fecnacimiento = ($trabajador['trab_fec_nacimiento'] != 0) ? mdate('%d-%m-%Y', $trabajador['trab_fec_nacimiento']) : ""; 
        $direccion = $trabajador['trab_dir_calle'];
		$numero = $trabajador['trab_dir_numero'];
        $sector = $trabajador['trab_dir_sector'];
        $tfijo = $trabajador['trab_tel_fijo'];
        $tmovil = $trabajador['trab_tel_movil'];
       
		
        $genero = $trabajador['trab_genero'];
        $jfamilia = $trabajador['trab_jefe_familia'];
        $antind = $trabajador['trab_ant_indigenas'];
        $estcivil = $trabajador['trab_est_civil'];
        $nacionalidad = $trabajador['trab_nacionalidad'];
        $prevsalud = $trabajador['trab_prev_salud'];
        $tramo = $trabajador['trab_prev_salud_d'];
        $prevsocial = $trabajador['trab_prev_social'];
    }
    else{
        $direccion = set_value('txt_direccion');
        $numero = set_value('txt_numero');
        $sector = set_value('txt_sector');
        $tfijo = set_value('txt_tfijo');
        $tmovil = set_value('txt_tmovil');
        $fecnacimiento = set_value('txt_fecnacimiento');
        $genero = set_value('rbt_genero');
        $jfamilia = set_value('rbt_jefefamilia');
        $antind = set_value('rbt_antind');
        $estcivil = set_value('rbt_estcivil');
        $nacionalidad = set_value('rbt_nacionalidad');
        $prevsalud = set_value('sel_prevsalud');
        $tramo = set_value('txt_tramo');
        $prevsocial = set_value('txt_prevsocial');
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
                                                                        echo form_open('encuesta/trabajador/'.$idencuesta, $attributes);
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
                                                                            <h4 class="form-section">1.1.- Antecedentes Personales</h4>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_direccion') != ""){echo "has-error";} ?>">
																						<!--<span class="help-block"> <?php echo $trabajador->trab_dir_calle; ?> </span>-->
                                                                                        <label class="control-label">Dirección, calle <span class="required" aria-required="true"> * </span></label>
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
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('txt_numero') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Número/Block/Depto. <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_numero" id="txt_numero" class="form-control" placeholder="" value="<?php echo $numero; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_numero') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_numero'); ?> </span>
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
                                                                                    <div class="form-group <?php if (form_error('txt_sector') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Población/Sector </label>
                                                                                        <input type="text" name="txt_sector" id="txt_sector" class="form-control" placeholder="" value="<?php echo $sector; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_sector') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_sector'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group <?php if (form_error('txt_tfijo') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Teléfono fijo </label>
                                                                                        <input type="text" name="txt_tfijo" id="txt_tfijo" class="form-control" placeholder="" value="<?php echo $tfijo; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_tfijo') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_tfijo'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group <?php if (form_error('txt_tmovil') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Teléfono móvil <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_tmovil" id="txt_tmovil" class="form-control" placeholder="" value="<?php echo $tmovil; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_tmovil') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_tmovil'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->

                                                                            </div>
                                                                            <!--/row-->                                                       
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('txt_fecnacimiento') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Fecha de Nacimiento <span class="required" aria-required="true"> * </span></label>
																						<div class='input-group date datepicker' >
																						
																							<input type='text' name="txt_fecnacimiento" id="txt_fecnacimiento" class="form-control" value=" <?php echo $fecnacimiento; ?>" readonly/>
																								<span class="input-group-addon">
																							<span class="glyphicon glyphicon-calendar"></span>
																						</span>
																						</div>
                                                       
                                                                                       <!-- <input type="text" name="txt_fecnacimiento" id="txt_fecnacimiento" class="form-control" placeholder="" value=" -->
                                                                                        <?php
                                                                                        if (form_error('txt_fecnacimiento') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_fecnacimiento'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('rbt_genero') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Género <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_genero', 'value' => '1', 'checked' => ('1' == $genero) ? TRUE : FALSE, 'id' => 'm'));

                                                                                        ?>

                                                                                        Masculino &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_genero', 'value' => '2', 'checked' => ('2' == $genero) ? TRUE : FALSE, 'id' => 'f'));

                                                                                        ?>

                                                                                        Femenino 

                                                                                        <?php


                                                                                        if (form_error('rbt_genero') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_genero'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('rbt_jefefamilia') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Es usted jefe de familia? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_jefefamilia', 'value' => '1', 'checked' => ('1' == $jfamilia) ? TRUE : FALSE, 'id' => 's'));

                                                                                        ?>

                                                                                        Sí  &nbsp;

                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_jefefamilia', 'value' => '2', 'checked' => ('F' == $jfamilia) ? TRUE : FALSE, 'id' => 'n'));

                                                                                        ?>

                                                                                        No 

                                                                                        <?php


                                                                                        if (form_error('rbt_jefefamilia') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_jefefamilia'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->                    
                                                                            <div class="row">
																				<!--/span-->
                                                                                <div class="col-md-4"> <!-- Ascendencia Indígena -->
                                                                                    <div class="form-group <?php if (form_error('rbt_antind') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Usted o sus ascendientes tiene origen indígena? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php
                                                                                        echo form_radio(array('name' => 'rbt_antind', 'value' => '1', 'checked' => ('1' == $antind) ? TRUE : FALSE, 'id' => 'antind1'))." No <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_antind', 'value' => '2', 'checked' => ('2' == $antind) ? TRUE : FALSE, 'id' => 'antind2'))." Sí, yo <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_antind', 'value' => '3', 'checked' => ('3' == $antind) ? TRUE : FALSE, 'id' => 'antind3'))." Sí, uno de mis padres <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_antind', 'value' => '4', 'checked' => ('4' == $antind) ? TRUE : FALSE, 'id' => 'antind4'))." Sí, uno de mis abuelos <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_antind', 'value' => '5', 'checked' => ('5' == $antind) ? TRUE : FALSE, 'id' => 'antind5'))." Sí, uno de mis bisabuelos <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_antind', 'value' => '6', 'checked' => ('6' == $antind) ? TRUE : FALSE, 'id' => 'antind6'))." No se <br/>";


                                                                                        if (form_error('rbt_antind') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_antind'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
																				
                                                                                <div class="col-md-4"> <!-- Estado Civil -->
                                                                                    <div class="form-group <?php if (form_error('rbt_estcivil') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Cuál es su estado civil o conyugal actual? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>
                                                                                        <?php

                                                                                        echo form_radio(array('name' => 'rbt_estcivil', 'value' => '1', 'checked' => ('1' == $estcivil) ? TRUE : FALSE, 'id' => 'estciv1'))." Soltero <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_estcivil', 'value' => '2', 'checked' => ('2' == $estcivil) ? TRUE : FALSE, 'id' => 'estciv2'))." Viudo <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_estcivil', 'value' => '3', 'checked' => ('3' == $estcivil) ? TRUE : FALSE, 'id' => 'estciv3'))." Casado <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_estcivil', 'value' => '4', 'checked' => ('4' == $estcivil) ? TRUE : FALSE, 'id' => 'estciv4'))." Conviviente civil <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_estcivil', 'value' => '5', 'checked' => ('5' == $estcivil) ? TRUE : FALSE, 'id' => 'estciv5'))." Conviviente <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_estcivil', 'value' => '6', 'checked' => ('6' == $estcivil) ? TRUE : FALSE, 'id' => 'estciv6'))." Divorciado <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_estcivil', 'value' => '7', 'checked' => ('7' == $estcivil) ? TRUE : FALSE, 'id' => 'estciv7'))." Separado de hecho <br/>";

                                                                                        if (form_error('rbt_estcivil') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_estcivil'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('rbt_nacionalidad') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">¿Su nacionalidad es chilena? <span class="required" aria-required="true"> * </span></label>
                                                                                        <br/><br/>

                                                                                        <?php

                                                                                        echo form_radio(array('name' => 'rbt_nacionalidad', 'value' => '1', 'checked' => ('1' == $nacionalidad) ? TRUE : FALSE, 'id' => 'nacionalidad1'))." Sí <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_nacionalidad', 'value' => '2', 'checked' => ('2' == $nacionalidad) ? TRUE : FALSE, 'id' => 'nacionalidad2'))." No <br/>";

                                                                                        echo form_radio(array('name' => 'rbt_nacionalidad', 'value' => '3', 'checked' => ('3' == $nacionalidad) ? TRUE : FALSE, 'id' => 'nacionalidad3'))." Casado <br/>";

                                                                                        if (form_error('rbt_nacionalidad') != NULL){

                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('rbt_nacionalidad'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->

                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('sel_prevsalud') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Previsión de salud <span class="required" aria-required="true"> * </span></label>
                                                                                        <select name="sel_prevsalud" id="sel_prevsalud" class="form-control">
                                                                                            <option value="">Seleccione una opción</option>
                                                                                            <option value="1">FONASA</option>
                                                                                            <option value="2">Isapre</option>
                                                                                        </select>
                                                                                        <?php
                                                                                        if (form_error('sel_prevsalud') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('sel_prevsalud'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('txt_tramo') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Tramo / Isapre <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_tramo" id="txt_tramo" class="form-control" placeholder="" value="<?php echo $tramo; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_tramo') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_tramo'); ?> </span>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group <?php if (form_error('txt_prevsocial') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Previsión social <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" name="txt_prevsocial" id="txt_prevsocial" class="form-control" placeholder="" value="<?php echo $prevsocial; ?>">
                                                                                        <?php
                                                                                        if (form_error('txt_prevsocial') != NULL){
                                                                                        ?>
                                                                                        <span class="help-block"> <?php echo form_error('txt_prevsocial'); ?> </span>
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
                                                                            <a href="<?php echo site_url('encuesta/listado/'); ?>" class="btn default" role="button">Volver</a>
                                                                            <div id="cargar_educacion">
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


