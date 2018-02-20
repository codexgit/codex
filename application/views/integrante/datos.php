<?php
if (validation_errors() == "") {

    $jefe_familia = "";
    $es_carga = "";
    $ant_indigena = "";
    $parentesco = "";
    $padre_profesor = "";

    $cond_permanente = "";
    $ges = "";
    $usa_prevsalud = "";

    $trabajando = "";
    $sit_contrato = "";
    $sit_nolaboral = "";
    $det_pension = "";
    $meses_cesante = "";
    $inicio_activ = "";

    $matriculado = "";
    $nivel_educ = "";
    $fam_tipo_est = "";
    $fam_ult_curso = "";
    $fin_estudios = "";

    $rindio_psu = "";
    $anio_psu = "";
    $puntaje_psu = "";
    $ult_promedio = "";
    $fin_educsup = "";

    $ibruto_mes1 = "";
    $ibruto_mes2 = "";
    $ibruto_mes3 = "";
    $iliquido_mes1 = "";
    $iliquido_mes2 = "";
    $iliquido_mes3 = "";
    $rec_pension = "";
    $pension_mes1 = "";
    $pension_mes2 = "";
    $pension_mes3 = "";
    $rec_otros = "";
    $otros_mes1 = "";
    $otros_mes2 = "";
    $otros_mes3 = "";
} else {
    $jefe_familia = set_value('sel_jefe_familia');
    $ant_indigena = set_value('sel_ant_indigena');
    $parentesco = set_value('sel_parentesco');
    $padre_profesor = set_value('sel_padre_profesor');
    $es_carga = set_value('sel_es_carga');

    $cond_permanente = set_value('txt_cond_permanente');
    $ges = set_value('txt_ges');
    $usa_prevsalud = set_value('sel_usa_prevsalud');

    $trabajando = set_value('sel_trabajando');
    $sit_contrato = set_value('sel_sit_contrato');
    $sit_nolaboral = set_value('sel_sit_nolaboral');
    $det_pension = set_value('sel_pension');
    $meses_cesante = set_value('txt_meses_cesante');
    $inicio_activ = set_value('sel_inicio_activ');

    $matriculado = set_value('sel_matriculado');
    $nivel_educ = set_value('sel_nivel_educ');
    $fam_tipo_est = set_value('sel_tipo_est');
    $fam_ult_curso = set_value('sel_fam_ult_curso');
    $fin_estudios = set_value('txt_fin_estudios');
    $rindio_psu = set_value('txt_rindio_psu');
    $anio_psu = set_value('txt_anio_psu');
    $puntaje_psu = set_value('txt_puntaje_psu');
    $ult_promedio = set_value('txt_ult_promedio');
    $fin_educsup = set_value('sel_fin_educsup');


    $ibruto_mes1 = set_value('txt_ibruto_mes1');
    $ibruto_mes2 = set_value('txt_ibruto_mes2');
    $ibruto_mes3 = set_value('txt_ibruto_mes3');
    $iliquido_mes1 = set_value('txt_iliquido_mes1');
    $iliquido_mes2 = set_value('txt_iliquido_mes2');
    $iliquido_mes3 = set_value('txt_iliquido_mes3');
    $rec_pension = set_value('sel_rec_pension');
    $pension_mes1 = set_value('txt_pension_mes1');
    $pension_mes2 = set_value('txt_pension_mes2');
    $pension_mes3 = set_value('txt_pension_mes3');
    $rec_otros = set_value('sel_rec_otros');
    $otros_mes1 = set_value('txt_otros_mes1');
    $otros_mes2 = set_value('txt_otros_mes2');
    $otros_mes3 = set_value('txt_otros_mes3');
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
        <!-- BEGIN FORM-->
        <?php
        $attributes = array('class' => 'horizontal-form');
        echo form_open('integrante/datos/' . $idencuesta . '/' . $idfamilia_datos, $attributes);
        ?>
        <div class="form-body">
            <div class="row">


                <div class="col-md-4"> <!-- RUN Trabajador -->
                    <div class="form-group ">
                        <label class="control-label">RUN </label>
                        <span class="help-block"> <?php echo $detencuesta->enc_run . '-' . $detencuesta->enc_dv; ?> </span>
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
                        <span class="help-block"> <?php echo $detencuesta->enc_apellido_p . ' ' . $detencuesta->enc_apellido_m; ?> </span>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/span-->

            <!--/row-->

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

                <h4 class="form-section">3.1.- Antecedentes Personales</h4>
                        <!--/row-->
                        <div class="row">

                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Jefe de Familia -->
                                <div class="form-group <?php
                                if (form_error('sel_jefe_familia') != "") {
                                    echo "has-error";
                                }
                                ?>">
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
                                    if (form_error('sel_jefe_familia') != NULL) {
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
                                <div class="form-group <?php
                                if (form_error('sel_es_carga') != "") {
                                    echo "has-error";
                                }
                                ?>">
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
                                    if (form_error('sel_es_carga') != NULL) {
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
                                <div class="form-group <?php
                                if (form_error('sel_parentesco') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿Cuál es el Parentesco con el Trabajador? <span class="required" aria-required="true"> * </span></label>
                                    <br/><br/>
                                    <?php
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '1', 'checked' => ('1' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco1')) . " Hijo(a) sólo del trabajador <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '2', 'checked' => ('2' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco2')) . " Hijo(a) sólo del cónyuge <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '3', 'checked' => ('3' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco3')) . " Cónyuge <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '4', 'checked' => ('4' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco4')) . " Conviviente <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '5', 'checked' => ('5' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco5')) . " Hijo(a) <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '6', 'checked' => ('6' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco6')) . " Padre <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '7', 'checked' => ('7' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco7')) . " Madre <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '8', 'checked' => ('8' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco8')) . " Suegro(a) <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '9', 'checked' => ('9' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco9')) . " Yerno <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '10', 'checked' => ('10' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco10')) . " Nieto(a) <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '11', 'checked' => ('11' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco11')) . " Hermano(a) <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '12', 'checked' => ('12' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco12')) . " Cuñado(a) <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '13', 'checked' => ('13' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco13')) . " Nuera <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '14', 'checked' => ('14' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco14')) . " Sobrino(a) <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '15', 'checked' => ('15' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco15')) . " Otro Familiar <br/>";
                                    echo form_radio(array('name' => 'sel_parentesco', 'value' => '16', 'checked' => ('16' == $parentesco) ? TRUE : FALSE, 'id' => 'parentesco16')) . " No Familiar <br/>";

                                    if (form_error('sel_parentesco') != NULL) {
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
                                <div class="form-group <?php
                                if (form_error('sel_ant_indigena') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿Usted o sus ascendientes tiene origen indígena? <span class="required" aria-required="true"> * </span></label>
                                    <br/><br/>
                                    <?php
                                    echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '1', 'checked' => ('1' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena1')) . " No <br/>";
                                    echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '2', 'checked' => ('2' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena2')) . " Sí, yo <br/>";
                                    echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '3', 'checked' => ('3' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena3')) . " Sí, uno de mis padres <br/>";
                                    echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '4', 'checked' => ('4' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena4')) . " Sí, uno de mis abuelos <br/>";
                                    echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '5', 'checked' => ('5' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena5')) . " Sí, uno de mis bisabuelos <br/>";
                                    echo form_radio(array('name' => 'sel_ant_indigena', 'value' => '6', 'checked' => ('6' == $ant_indigena) ? TRUE : FALSE, 'id' => 'ant_indigena6')) . " No se <br/>";


                                    if (form_error('sel_ant_indigena') != NULL) {
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
                                <div class="form-group <?php
                                if (form_error('sel_padre_profesor') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿Su madre o padre trabaja en algún establecimiento educacional, municipal, particular subvencionado o de administración delegada? <span class="required" aria-required="true"> * </span></label>
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
                                    if (form_error('sel_padre_profesor') != NULL) {
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



                    </div>

                    <div class="tab-pane" id="tab2"> <!-- SALUD -->




                        <h4 class="form-section">3.2.- Salud Familiar</h4>
                        <!--/row-->
                        <div class="row">

                            <!--/span-->
                            <div class="col-md-4"> <!-- Condición permanente -->
                                <div class="form-group <?php
                                if (form_error('txt_cond_permanente') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿Posee usted alguna de estas condiciones en forma permanente? <span class="required" aria-required="true"> * </span></label>
                                    <br/><br/>
                                    <?php
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '1', 'checked' => ('1' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente1')) . " Ceguera <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '2', 'checked' => ('2' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente2')) . " Dificultad Visual <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '3', 'checked' => ('3' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente3')) . " Mudez <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '4', 'checked' => ('4' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente4')) . " Sordera <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '5', 'checked' => ('5' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente5')) . " Dificultad Auditiva <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '6', 'checked' => ('6' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente6')) . " Dificultad en  el habla <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '7', 'checked' => ('7' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente7')) . " Enfermedades psiquiátricas <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '8', 'checked' => ('8' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente8')) . " Dificultad física (requiere ayuda para su desplazamiento) <br/>";
                                    echo form_radio(array('name' => 'txt_cond_permanente', 'value' => '9', 'checked' => ('9' == $cond_permanente) ? TRUE : FALSE, 'id' => 'cond_permanente9')) . " No tiene <br/>";
                                    ?>                                                                 


                                    <?php
                                    if (form_error('txt_cond_permanente') != NULL) {
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
                                <div class="form-group <?php
                                if (form_error('txt_ges') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿Esta persona posee alguna patología GES? Orientar con anexo<span class="required" aria-required="true"> * </span></label>
                                    <input type="text" name="txt_ges" id="txt_ges" class="form-control" placeholder="" value="<?php echo $ges; ?>">
                                    <?php
                                    if (form_error('txt_ges') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('txt_ges'); ?> </span>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>

                            <!-- span-->

                            <div class="col-md-4"> <!-- Previsión -->
                                <div class="form-group <?php
                                if (form_error('sel_usa_prevsalud') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">Hace uso de las garantías de atención que ofrece su sistema previsional de salud [FONASA/ISAPRE]?<span class="required" aria-required="true"> * </span></label>

                                    <br/><br/>
                                    <?php
                                    echo form_radio(array('name' => 'sel_usa_prevsalud', 'value' => '1', 'checked' => ('1' == $usa_prevsalud) ? TRUE : FALSE, 'id' => 'usa_prevsalud1')) . " Sí<br/>";
                                    echo form_radio(array('name' => 'sel_usa_prevsalud', 'value' => '2', 'checked' => ('2' == $usa_prevsalud) ? TRUE : FALSE, 'id' => 'usa_prevsalud2')) . " No <br/>";
                                    ?>


                                    <?php
                                    if (form_error('sel_usa_prevsalud') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('sel_usa_prevsalud'); ?> </span>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--/span-->

                        </div>	
                        <!-- END ROW -->







                    </div>
                    <div class="tab-pane" id="tab3"> <!--TRABAJO -->



                        <h4 class="form-section">3.3.- Trabajo Familiar</h4>
                        <!--/row-->
                        <div class="row">

                            <!--/span-->
                            <div class="col-md-4"> <!-- Trabajando -->
                                <div class="form-group <?php
                                if (form_error('sel_trabajando') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">Si es mayor a 18 años, Actualmente, ¿está trabajando? <span class="required" aria-required="true"> * </span></label>
                                    <br/><br/>
                                    <?php
                                    echo form_radio(array('name' => 'sel_trabajando', 'value' => '1', 'checked' => ('1' == $trabajando) ? TRUE : FALSE, 'id' => 'trabajando1')) . " Sí <br/>";
                                    echo form_radio(array('name' => 'sel_trabajando', 'value' => '2', 'checked' => ('2' == $trabajando) ? TRUE : FALSE, 'id' => 'trabajando2')) . " No <br/>";
                                    ?>                                                                 


                                    <?php
                                    if (form_error('sel_trabajando') != NULL) {
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
                                <div id="fam_sit_contrato">

                                    <div class="form-group <?php
                                    if (form_error('sel_sit_contrato') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Si está trabajando, ¿Cuál es su relación Contractual?<span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '1', 'checked' => ('1' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato1')) . " Contrato Indefinido <br/>";
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '2', 'checked' => ('2' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato2')) . " Contrato a Plazo Fijo <br/>";
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '3', 'checked' => ('3' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato3')) . " Contrato por obra o faena<br/>";
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '4', 'checked' => ('4' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato4')) . " Contrato de aprendizaje <br/>";
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '5', 'checked' => ('5' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato5')) . " Prestación de servicios a honorarios <br/>";
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '6', 'checked' => ('6' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato6')) . " Sin Contrato <br/>";
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '7', 'checked' => ('7' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato7')) . " Trabajo Independiente <br/>";
                                        echo form_radio(array('name' => 'sel_sit_contrato', 'value' => '8', 'checked' => ('8' == $sit_contrato) ? TRUE : FALSE, 'id' => 'sit_contrato8')) . " Sin información <br/>";
                                        ?>   
                                        <?php
                                        if (form_error('sel_sit_contrato') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('sel_sit_contrato'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>	
                            </div>
                            <!-- span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Situación no laboral -->
                                <div id="fam_sit_nolaboral">
                                    <div class="form-group <?php
                                    if (form_error('sel_sit_nolaboral') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Si no está trabajando, ¿Cuál es su situación actual?<span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>



                                        <?php
                                        echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '1', 'checked' => ('1' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral1')) . " Dueña de Casa<br/>";
                                        echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '2', 'checked' => ('2' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral2')) . " Estudiante<br/>";
                                        echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '3', 'checked' => ('3' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral3')) . " Jubilado o Pensionado<br/>";
                                        echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '4', 'checked' => ('4' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral4')) . " Cesante <br/>";
                                        echo form_radio(array('name' => 'sel_sit_nolaboral', 'value' => '5', 'checked' => ('5' == $sit_nolaboral) ? TRUE : FALSE, 'id' => 'sit_nolaboral5')) . " Otro <br/>";
                                        ?>   
                                        <?php
                                        if (form_error('sel_sit_nolaboral') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('sel_sit_nolaboral'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>	
                            </div>
                            <!-- span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- PENSIÓN -->
                                <div id="fam_grupo_pension">
                                    <div class="form-group <?php
                                    if (form_error('sel_pension') != "") {
                                        echo "has-error";
                                    }
                                    ?>">

                                        <div id="fam_grupo_pension1"> <!-- Dueña de Casa -->
                                            <label class="control-label">Dueña de Casa <span class="required" aria-required="true"> * </span></label>
                                            <br/><br/>
                                            <?php
                                            $pension1 = array(
                                                "Actividad Económica Independiente",
                                                "Pensión Básica Solidaria de Vejez",
                                                "Pensión Básica Solidaria de Invalidez",
                                                "Pensión con aporte previsional solidario de Vejez",
                                            );

                                            for ($i = 0; $i < count($pension1); $i++) {
                                                echo "<input type='checkbox' name='sel_pension[]' value='" . $pension1[$i] . "' />" . $pension1[$i] . "<br>";
                                            }
                                            ?>	
                                        </div>





                                        <div id="fam_grupo_pension2"> <!-- Jubilado o Pensionado-->

                                            <label class="control-label">Jubilado o Pensionado <span class="required" aria-required="true"> * </span></label>
                                            <br/><br/>


                                            <?php
                                            $pension2 = array(
                                                "Pensión con aporte previsional solidario de Invalidez",
                                                "Pensión de Vejez",
                                                "Pensión de Invalidez Renta Vitalicia",
                                                "Pensión de Invalidez Retiro Programado",
                                                "Pensión de Gracia",
                                                "Pensión de Orfandad",
                                                "Pensión de Viudez",
                                                "Subsidio a la Discapacidad Mental",
                                                "PRAIS",
                                                "Otras",
                                            );

                                            for ($i = 0; $i < count($pension2); $i++) {
                                                echo "<input type='checkbox' name='sel_pension[]' value='" . $pension2[$i] . "' />" . $pension2[$i] . "<br>";
                                            }
                                            ?>		

                                        </div>	

                                        <div id="fam_grupo_pension3"> <!-- Cesante -->
                                            <label class="control-label">Cesante <span class="required" aria-required="true"> * </span></label>
                                            <br/><br/>
                                            <?php
                                            $pension3 = array(
                                                "Inscrito en la OML (Oficina de intermediación laboral del Municipio",
                                            );

                                            for ($i = 0; $i < count($pension3); $i++) {
                                                echo "<input type='checkbox' name='sel_pension[]' value='" . $pension3[$i] . "' />" . $pension3[$i] . "<br>";
                                            }
                                            ?>	

                                        </div>	




                                        <?php
                                        if (form_error('sel_pension') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('sel_pension'); ?> </span>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>	
                            </div>
                            <!--/span-->

                            <!--span-->
                            <div class="col-md-4"> <!-- Tiempo Cesantía en meses -->
                                <div id="meses_cesante">
                                    <div class="form-group <?php
                                    if (form_error('txt_meses_cesante') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Tiempo cesantía en meses <span class="required" aria-required="true"> * </span></label>


                                        <input type='text' name="txt_meses_cesante" id="txt_meses_cesante" class="form-control" value=" <?php echo $meses_cesante; ?>" />


                                        </span>



                                        <?php
                                        if (form_error('txt_meses_cesante') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_meses_cesante'); ?> </span>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Tiene Iniciación de Actividades en el SII -->
                                <div id="fam_inicio_activ">
                                    <div class="form-group <?php
                                    if (form_error('sel_inicio_activ') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Tiene Iniciación de Actividades en el SII<span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>



                                        <?php
                                        echo form_radio(array('name' => 'sel_inicio_activ', 'value' => '1', 'checked' => ('1' == $inicio_activ) ? TRUE : FALSE, 'id' => 'inicio_activ1')) . " Sí<br/>";
                                        echo form_radio(array('name' => 'sel_inicio_activ', 'value' => '2', 'checked' => ('2' == $inicio_activ) ? TRUE : FALSE, 'id' => 'inicio_activ2')) . " No<br/>";
                                        ?>   
                                        <?php
                                        if (form_error('sel_inicio_activ') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('sel_inicio_activ'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>	
                            </div>
                            <!-- span-->


                        </div>	
                        <!-- END ROW -->




                    </div>
                    <div class="tab-pane" id="tab4"> <!-- EDUCACIÓN -->


                        <h4 class="form-section">3.4.- Educacion Familiar</h4>
                        <!--/row-->
                        <div class="row">
                            <!--span-->
                            <div class="col-md-4"> <!-- Asiste o está matriculado -->
                                <div class="form-group <?php
                                if (form_error('sel_matriculado') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿Asiste actualmente o está matriculado en algún establecimiento educacional o pre escolar? <span class="required" aria-required="true"> * </span></label>

                                    <br/><br/>
                                    <?php
                                    echo form_radio(array('name' => 'sel_matriculado', 'value' => '1', 'checked' => ('1' == $matriculado) ? TRUE : FALSE, 'id' => 'matriculado1')) . " Sí <br/>";
                                    echo form_radio(array('name' => 'sel_matriculado', 'value' => '2', 'checked' => ('2' == $matriculado) ? TRUE : FALSE, 'id' => 'matriculado2')) . " No <br/>";
                                    ?>


                                    <?php
                                    if (form_error('sel_matriculado') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('sel_matriculado'); ?> </span>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--/span-->

                            <!--span-->
                            <div class="col-md-4"> <!-- Nivel Educacional Actual -->
                                <div class="form-group <?php
                                if (form_error('sel_nivel_educ') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">Nivel Educacional Actual <span class="required" aria-required="true"> * </span></label>

                                    <br/><br/>
                                    <?php
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '1', 'checked' => ('1' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ1')) . " Educación Parvularia <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '4', 'checked' => ('4' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ2')) . " Educación Básica <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '5', 'checked' => ('5' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ3')) . " Educación Media(Científico Humanista) <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '6', 'checked' => ('6' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ4')) . " Educación Media Técnico Profesional <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '7', 'checked' => ('7' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ5')) . " Educación Especial - Diferencial <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '8', 'checked' => ('8' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ6')) . " Centro de formación Técnica <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '9', 'checked' => ('9' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ7')) . " Instituto Profesional <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '10', 'checked' => ('10' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ8')) . " Universitaria <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '11', 'checked' => ('11' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ9')) . " Post Grado <br/>";
                                    echo form_radio(array('name' => 'sel_nivel_educ', 'value' => '12', 'checked' => ('12' == $nivel_educ) ? TRUE : FALSE, 'id' => 'nivel_educ10')) . " Especialidades Fuerzas Armadas <br/>";
                                    ?>


                                    <?php
                                    if (form_error('sel_nivel_educ') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('sel_nivel_educ'); ?> </span>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--/span-->

                            <div class="col-md-4"> <!-- Tipo de Establecimiento -->
                                <div class="form-group <?php
                                if (form_error('sel_fam_tipo_est') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <div id="grupo_fam_tipo_est1">
                                        <label class="control-label">Tipo de Establecimiento <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_tipo_est', 'value' => '1', 'checked' => ('1' == $fam_tipo_est) ? TRUE : FALSE, 'id' => 'fam_tipo_est1'));
                                        ?>

                                        Público &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_tipo_est', 'value' => '2', 'checked' => ('2' == $fam_tipo_est) ? TRUE : FALSE, 'id' => 'fam_tipo_est2'));
                                        ?>

                                        Particular &nbsp; 

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_tipo_est', 'value' => '3', 'checked' => ('3' == $fam_tipo_est) ? TRUE : FALSE, 'id' => 'fam_tipo_est3'));
                                        ?>

                                        Subvencionado &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_tipo_est', 'value' => '4', 'checked' => ('4' == $fam_tipo_est) ? TRUE : FALSE, 'id' => 'fam_tipo_est4'));
                                        ?>

                                        Educación de Adultos &nbsp;
                                    </div>

                                    <div id="grupo_fam_tipo_est2">
                                        <label class="control-label">Tipo de Establecimiento <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_tipo_est', 'value' => '1', 'checked' => ('1' == $fam_tipo_est) ? TRUE : FALSE, 'id' => 'fam_tipo_est1'));
                                        ?>

                                        Educación de Adultos &nbsp;                                        

                                    </div>

                                    <div id="grupo_fam_tipo_est3">
                                        <label class="control-label">Tipo de Establecimiento <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_tipo_est', 'value' => '1', 'checked' => ('1' == $fam_tipo_est) ? TRUE : FALSE, 'id' => 'fam_tipo_est1'));
                                        ?>

                                        Privada &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_tipo_est', 'value' => '2', 'checked' => ('2' == $fam_tipo_est) ? TRUE : FALSE, 'id' => 'fam_tipo_est2'));
                                        ?>

                                        Crunch &nbsp; 	
                                    </div>


                                    <?php
                                    if (form_error('sel_fam_tipo_est') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('sel_fam_tipo_est'); ?> </span>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Ultimo curso aprobado -->
                                <div class="form-group <?php
                                if (form_error('sel_fam_ult_curso') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <div id="grupo_fam_ult_curso1"> <!-- 1 - 8 -->
                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '1', 'checked' => ('1' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso1'));
                                        ?>

                                        1 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '2', 'checked' => ('2' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso2'));
                                        ?>

                                        2 &nbsp; 

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '3', 'checked' => ('3' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso3'));
                                        ?>

                                        3 &nbsp;
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '4', 'checked' => ('4' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso4'));
                                        ?>

                                        4 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '5', 'checked' => ('5' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso5'));
                                        ?>

                                        5 &nbsp; 

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '6', 'checked' => ('6' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso6'));
                                        ?>

                                        6 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '7', 'checked' => ('7' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso7'));
                                        ?>

                                        7 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '8', 'checked' => ('8' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso8'));
                                        ?>

                                        8 &nbsp;

                                    </div>
                                    <div id="grupo_fam_ult_curso2"> <!-- 1 - 7 -->
                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '1', 'checked' => ('1' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso1'));
                                        ?>

                                        1 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '2', 'checked' => ('2' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso2'));
                                        ?>

                                        2 &nbsp; 

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '3', 'checked' => ('3' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso3'));
                                        ?>

                                        3 &nbsp;
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '4', 'checked' => ('4' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso4'));
                                        ?>

                                        4 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '5', 'checked' => ('5' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso5'));
                                        ?>

                                        5 &nbsp; 

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '6', 'checked' => ('6' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso6'));
                                        ?>

                                        6 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '7', 'checked' => ('7' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso7'));
                                        ?>

                                        7 &nbsp;

                                    </div>	


                                    <div id="grupo_fam_ult_curso3"> <!-- 1 - 4 -->

                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '1', 'checked' => ('1' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso1'));
                                        ?>

                                        1 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '2', 'checked' => ('2' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso2'));
                                        ?>

                                        2 &nbsp; 

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '3', 'checked' => ('3' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso3'));
                                        ?>

                                        3 &nbsp;
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '4', 'checked' => ('4' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso4'));
                                        ?>

                                        4 &nbsp;	

                                    </div>	

                                    <div id="grupo_fam_ult_curso4"> <!-- 1 - 3 -->
                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '1', 'checked' => ('1' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso1'));
                                        ?>

                                        1 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '2', 'checked' => ('2' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso2'));
                                        ?>

                                        2 &nbsp; 

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '3', 'checked' => ('3' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso3'));
                                        ?>

                                        3 &nbsp;




                                    </div>	

                                    <div id="grupo_fam_ult_curso5"> <!-- 1 - 2 -->
                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '1', 'checked' => ('1' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso1'));
                                        ?>

                                        1 &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '2', 'checked' => ('2' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso2'));
                                        ?>

                                        2 &nbsp; 


                                    </div>	

                                    <div id="grupo_fam_ult_curso6"> <!-- 1  -->
                                        <label class="control-label">Último Curso Aprobado <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_fam_ult_curso', 'value' => '1', 'checked' => ('1' == $fam_ult_curso) ? TRUE : FALSE, 'id' => 'fam_ult_curso1'));
                                        ?>

                                        1 &nbsp;


                                    </div>	

                                    <?php
                                    if (form_error('sel_fam_ult_curso') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('sel_fam_ult_curso'); ?> </span>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>	
                            <!--span ultimo curso -->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Último año calendario -->
                                <div class="form-group <?php
                                if (form_error('txt_fin_estudios') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿El último año calendario que estudió fué?<span class="required" aria-required="true"> * </span></label>
                                    <input type="text" name="txt_fin_estudios" id="txt_fin_estudios" class="form-control" placeholder="" value="<?php echo $fin_estudios; ?>">
                                    <?php
                                    if (form_error('txt_fin_estudios') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('txt_fin_estudios'); ?> </span>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>

                            <!-- span-->

                            <div class="col-md-4"> <!-- Rindió PSU -->
                                <div class="form-group <?php
                                if (form_error('txt_rindio_psu') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">Rindió PSU<span class="required" aria-required="true"> * </span></label>
                                    <input type="text" name="txt_rindio_psu" id="txt_rindio_psu" class="form-control" placeholder="" value="<?php echo $rindio_psu; ?>">
                                    <?php
                                    if (form_error('txt_rindio_psu') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('txt_rindio_psu'); ?> </span>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>

                            <!-- span-->

                            <!-- span-->

                            <div class="col-md-4"> <!-- Año PSU -->
                                <div id="anio_psu">
                                    <div class="form-group <?php
                                    if (form_error('txt_anio_psu') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">¿En qué año?<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_anio_psu" id="txt_anio_psu" class="form-control" placeholder="" value="<?php echo $anio_psu; ?>">
                                        <?php
                                        if (form_error('txt_anio_psu') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_anio_psu'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <!-- span-->

                            <!-- span-->

                            <div class="col-md-4"> <!-- Puntaje PSU -->
                                <div id="puntaje_psu">
                                    <div class="form-group <?php
                                    if (form_error('txt_puntaje_psu') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">¿Qué Puntaje obtuvo?<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_puntaje_psu" id="txt_puntaje_psu" class="form-control" placeholder="" value="<?php echo $puntaje_psu; ?>">
                                        <?php
                                        if (form_error('txt_puntaje_psu') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_puntaje_psu'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>

                            <!-- span-->

                            <!-- span-->

                            <div class="col-md-4"> <!-- Promedio Notas Último año -->
                                <div class="form-group <?php
                                if (form_error('txt_ult_promedio') != "") {
                                    echo "has-error";
                                }
                                ?>">
                                    <label class="control-label">¿Cuál fué su promedio de Notas último año cursado?<span class="required" aria-required="true"> * </span></label>
                                    <input type="text" name="txt_ult_promedio" id="txt_ult_promedio" class="form-control" placeholder="" value="<?php echo $ult_promedio; ?>">
                                    <?php
                                    if (form_error('txt_ult_promedio') != NULL) {
                                        ?>
                                        <span class="help-block"> <?php echo form_error('txt_ult_promedio'); ?> </span>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>

                            <!-- span-->


                            <!--/span-->
                            <div class="col-md-4"> <!-- Financiamiento -->
                                <div class="form-multi-select <?php
                                if (form_error('sel_fin_educsup') != "") {
                                    echo "has-error";
                                }
                                ?>">


                                    <div id= "grupo_financiamiento">
                                        <label class="control-label">Si actualmente está estudiando Educación Superior, ¿Cómo financia su carrera? <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <!-->
                                                                                                                                                                                                        
                                        <?php
                                        $financiamiento = array(
                                            "Becas",
                                            "Fondo Solidario de Crédito Universitario",
                                            "Crédito con garantía estatal",
                                            "Recursos Propios",
                                            "Gratuidad en la Educación",
                                            "Otros"
                                        );

                                        for ($i = 0; $i < count($financiamiento); $i++) {
                                            echo "<input type='checkbox' name='sel_fin_educsup[]' value='" . $financiamiento[$i] . "' />" . $financiamiento[$i] . "<br>";
                                        }
                                        ?>	
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                        <?php
                                        if (form_error('sel_fin_educsup') != NULL) {
                                            ?>
                                                                                                                                                                                                                                                    <span class="help-block"> <?php echo form_error('sel_fin_educsup'); ?> </span>
                                            <?php
                                        }
                                        ?>
                                                                                                                                                                                                        
                                        <!--/span-->


                                        <!-- row-->

                                    </div>   




                                    <!-- row becas -->


                                </div>
                            </div>	
                            <!--span-->



                        </div>



                    </div>	
                    <div class="tab-pane" id="tab5"> <!-- INGRESOS -->                    	   





                        <h4 class="form-section">3.5.- Ingresos Familiar</h4>
                        <!--/row-->
                        <div class="row">



                            <!--span container-->
                            <div class ="container-fluid">  <!-- Ingreso Bruto-->
                                <h3> Detalle su Ingreso Bruto en los últimos 3 Meses (Mes 3 = Ingreso mes anterior a la encuesta) </h3>
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Bruto Mes 3 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_ibruto_mes3') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 3<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_ibruto_mes3" id="txt_ibruto_mes3" class="form-control" placeholder="" value="<?php echo $ibruto_mes3; ?>">
                                        <?php
                                        if (form_error('txt_ibruto_mes3') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_ibruto_mes3'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Bruto Mes 2 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_ibruto_mes2') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 2<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_ibruto_mes2" id="txt_ibruto_mes2" class="form-control" placeholder="" value="<?php echo $ibruto_mes2; ?>">
                                        <?php
                                        if (form_error('txt_ibruto_mes2') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_ibruto_mes2'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Bruto Mes 1 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_ibruto_mes1') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 1<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_ibruto_mes1" id="txt_ibruto_mes1" class="form-control" placeholder="" value="<?php echo $ibruto_mes1; ?>">
                                        <?php
                                        if (form_error('txt_ibruto_mes1') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_ibruto_mes1'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->

                            </div>	
                            <!--span container-->

                            <!--span container-->
                            <div class ="container-fluid"> <!-- Ingreso Líquido -->
                                <h3> Detalle su Ingreso Líquido en los últimos 3 Meses (Mes 3 = Ingreso mes anterior a la encuesta) </h3>
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Líquido Mes 3 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_iliquido_mes3') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 3<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_iliquido_mes3" id="txt_iliquido_mes3" class="form-control" placeholder="" value="<?php echo $iliquido_mes3; ?>">
                                        <?php
                                        if (form_error('txt_iliquido_mes3') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_iliquido_mes3'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Líquido Mes 2 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_iliquido_mes2') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 2<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_iliquido_mes2" id="txt_iliquido_mes2" class="form-control" placeholder="" value="<?php echo $iliquido_mes2; ?>">
                                        <?php
                                        if (form_error('txt_iliquido_mes2') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_iliquido_mes2'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Líquido Mes 1 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_iliquido_mes1') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 1<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_iliquido_mes1" id="txt_iliquido_mes1" class="form-control" placeholder="" value="<?php echo $iliquido_mes1; ?>">
                                        <?php
                                        if (form_error('txt_iliquido_mes1') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_iliquido_mes1'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->

                            </div>	
                            <!--span container-->

                            <!--span container-->
                            <div class ="container-fluid"> <!-- Pensiones -->

                                <!--/span-->
                                <div class="col-md-4"> <!-- Booleano Pensiones -->
                                    <div class="form-group <?php
                                    if (form_error('sel_rec_pension') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">¿Recibe usted Pensiones o Jubilaciones? <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_rec_pension', 'value' => '1', 'checked' => ('1' == $rec_pension) ? TRUE : FALSE, 'id' => 'rec_pension1'));
                                        ?>

                                        Sí &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_rec_pension', 'value' => '2', 'checked' => ('2' == $rec_pension) ? TRUE : FALSE, 'id' => 'rec_pension2'));
                                        ?>

                                        NO &nbsp; 

                                        <?php
                                        if (form_error('sel_rec_pension') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('sel_rec_pension'); ?> </span>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!--/span-->

                                <h3> Si la respuesta es sí, ¿A cuánto asciende al mes? </h3>
                                <!--span-->
                                <div class="col-md-4"> <!-- Pensión Mes 3 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_pension_mes3') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 3<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_pension_mes3" id="txt_pension_mes3" class="form-control" placeholder="" value="<?php echo $pension_mes3; ?>">
                                        <?php
                                        if (form_error('txt_pension_mes3') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_pension_mes3'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Pensión Mes 2 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_pension_mes2') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 2<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_pension_mes2" id="txt_pension_mes2" class="form-control" placeholder="" value="<?php echo $pension_mes2; ?>">
                                        <?php
                                        if (form_error('txt_pension_mes2') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_pension_mes2'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Pensión Mes 1 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_ibruto_mes1') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 1<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_pension_mes1" id="txt_pension_mes1" class="form-control" placeholder="" value="<?php echo $pension_mes1; ?>">
                                        <?php
                                        if (form_error('txt_pension_mes1') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_pension_mes1'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->

                            </div>	
                            <!--span container-->

                            <!--span container-->
                            <div class ="container-fluid"> <!-- Otros (Pensión de Alimentos) -->
                                <!--/span-->
                                <div class="col-md-4"> <!-- Booleano Pensiones -->
                                    <div class="form-group <?php
                                    if (form_error('sel_rec_otros') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">¿Tiene algún otro ingreso económico por concepto de SUF, Pensión de Alimentos o por trabajo independiente? <span class="required" aria-required="true"> * </span></label>
                                        <br/><br/>
                                        <?php
                                        echo form_radio(array('name' => 'sel_rec_otros', 'value' => '1', 'checked' => ('1' == $rec_otros) ? TRUE : FALSE, 'id' => 'rec_otros1'));
                                        ?>

                                        Sí &nbsp;

                                        <?php
                                        echo form_radio(array('name' => 'sel_rec_otros', 'value' => '2', 'checked' => ('2' == $rec_otros) ? TRUE : FALSE, 'id' => 'rec_otros2'));
                                        ?>

                                        NO &nbsp; 


                                        <?php
                                        if (form_error('sel_rec_otros') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('sel_rec_otros'); ?> </span>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!--/span-->
                                <h3> Si la respuesta es sí, ¿A cuánto asciende al mes? </h3>
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Otro Mes 3 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_otros_mes3') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 3<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_otros_mes3" id="txt_otros_mes3" class="form-control" placeholder="" value="<?php echo $otros_mes3; ?>">
                                        <?php
                                        if (form_error('txt_otros_mes3') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_otros_mes3'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Otro Mes 2 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_otros_mes2') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 2<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_otros_mes2" id="txt_otros_mes2" class="form-control" placeholder="" value="<?php echo $otros_mes2; ?>">
                                        <?php
                                        if (form_error('txt_otros_mes2') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_otros_mes2'); ?> </span>
                                            <?php
                                        }
                                        ?>


                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Otro Mes 1 -->
                                    <div class="form-group <?php
                                    if (form_error('txt_otros_mes1') != "") {
                                        echo "has-error";
                                    }
                                    ?>">
                                        <label class="control-label">Mes 1<span class="required" aria-required="true"> * </span></label>
                                        <input type="text" name="txt_otros_mes1" id="txt_otros_mes1" class="form-control" placeholder="" value="<?php echo $otros_mes1; ?>">
                                        <?php
                                        if (form_error('txt_otros_mes1') != NULL) {
                                            ?>
                                            <span class="help-block"> <?php echo form_error('txt_otros_mes1'); ?> </span>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <!--span-->

                            </div>	
                            <!--span container-->

                        </div>	
                        <!-- END ROW -->                            





                    </div>





                </div>
            </div>

            <div class="form-actions right">
                <!--<button type="button" class="btn default">Volver</button>-->
                <a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
                <button type="submit" class="btn blue">
                    <i class="fa fa-check"></i> Siguiente</button>
            </div>
            <input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
            <!--<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idfamilia_datos; ?>"> -->
            <?php echo form_close(); ?>
        </div>	
    </div>
</div>	
<p> &nbsp; </p>
<p> &nbsp; </p>										












