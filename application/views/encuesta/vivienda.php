<?php
if (validation_errors() == "") {
    $tenencia = $vivienda['viv_tenencia'];
    $sitio = $vivienda['viv_sitio'];
    $post_subsidio = $vivienda['viv_post_subsidio'];
    $libreta = $vivienda['viv_libreta'];
    $libreta_anio = $vivienda['viv_libreta_anio'];
    $monto_ahorro = $vivienda['viv_monto_ahorro'];
    $fam_ocupante = $vivienda['viv_fam_ocupante'];
    $num_personas = $vivienda['viv_num_personas'];
    $num_dormitorios = $vivienda['viv_num_dormitorios'];
    $prov_agua = $vivienda['viv_prov_agua'];
    $sub_agua = $vivienda['viv_sub_agua'];
    $ener_electrica = $vivienda['viv_ener_electrica'];
    $elim_excretas = $vivienda['viv_elim_excretas'];
    $reg_hogares = $vivienda['viv_reg_hogares'];
    $tramo_grupo = $vivienda['viv_tramo_grupo'];
    $ben_subsidio = $vivienda['viv_ben_subsidio'];
    $otro_subsidio = $vivienda['viv_otro_subsidio'];
} else {
    $tenencia = set_value('sel_tenencia');
    $sitio = set_value('sel_sitio');
    $post_subsidio = set_value('sel_post_subsidio');
    $libreta = set_value('sel_libreta');
    $libreta_anio = set_value('txt_libreta_anio');
    $monto_ahorro = set_value('txt_monto_ahorro');
    $fam_ocupante = set_value('sel_fam_ocupante');
    $num_personas = set_value('txt_num_personas');
    $num_dormitorios = set_value('txt_dormitorios');
    $prov_agua = set_value('sel_prov_agua');
    $sub_agua = set_value('sel_sub_agua');
    $ener_electrica = set_value('sel_ener_electrica');
    $elim_excretas = set_value('sel_elim_excretas');
    $reg_hogares = set_value('sel_reg_hogares');
    $tramo_grupo = set_value('sel_tramo_grupo');
    $ben_subsidio = set_value('sel_ben_subsidio');
    $otro_subsidio = set_value('sel_otro_subsidio');
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
                            if ($mensaje != NULL && $mensaje != "") {
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
                                                    <div class="mt-step-content font-grey-cascade">Listo</div>
                                                </div>
                                                <div class="col-md-4 bg-grey mt-step-col active">
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
                                        echo form_open('encuesta/vivienda/' . $idencuesta, $attributes);
                                        ?>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                        <label class="control-label">RUN </label>
                                                        <span class="help-block"> <?php echo $detencuesta->enc_run . '-' . $detencuesta->enc_dv; ?> </span>
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
                                                        <span class="help-block"> <?php echo $detencuesta->enc_apellido_p . ' ' . $detencuesta->enc_apellido_m; ?> </span>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <h4 class="form-section">2.1.- De la Vivienda</h4>
                                            <!--/row-->

                                            <div class="row">
                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Tenencia de la Vivienda -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_tenencia') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Tenencia de Vivienda <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '1', 'checked' => ('1' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia1')) . " Propietario <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '2', 'checked' => ('2' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia2')) . " Propietario Pagando Dividendo <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '3', 'checked' => ('3' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia3')) . " Arrandatario <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '4', 'checked' => ('4' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia4')) . " Usufructuario <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '5', 'checked' => ('5' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia5')) . " Allegado <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '6', 'checked' => ('6' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia6')) . " Toma <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '7', 'checked' => ('7' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia7')) . " Cuidador <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '8', 'checked' => ('8' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia8')) . " Sucesión <br/>";
                                                        echo form_radio(array('name' => 'sel_tenencia', 'value' => '9', 'checked' => ('9' == $tenencia) ? TRUE : FALSE, 'id' => 'tenencia9')) . " Situación de Calle <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_tenencia') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_tenencia'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Tenencia del Sitio -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_sitio') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Tenencia del Sitio <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '1', 'checked' => ('1' == $sitio) ? TRUE : FALSE, 'id' => 'sitio1')) . " Propietario <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '2', 'checked' => ('2' == $sitio) ? TRUE : FALSE, 'id' => 'sitio2')) . " Propietario Pagando Dividendo <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '3', 'checked' => ('3' == $sitio) ? TRUE : FALSE, 'id' => 'sitio3')) . " Arrandatario <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '4', 'checked' => ('4' == $sitio) ? TRUE : FALSE, 'id' => 'sitio4')) . " Usufructuario <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '5', 'checked' => ('5' == $sitio) ? TRUE : FALSE, 'id' => 'sitio5')) . " Allegado <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '6', 'checked' => ('6' == $sitio) ? TRUE : FALSE, 'id' => 'sitio6')) . " Toma <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '7', 'checked' => ('7' == $sitio) ? TRUE : FALSE, 'id' => 'sitio7')) . " Cuidador <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '8', 'checked' => ('8' == $sitio) ? TRUE : FALSE, 'id' => 'sitio8')) . " Sucesión <br/>";
                                                        echo form_radio(array('name' => 'sel_sitio', 'value' => '9', 'checked' => ('9' == $sitio) ? TRUE : FALSE, 'id' => 'sitio9')) . " Situación de Calle <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_sitio') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_sitio'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Subsidio Habitacional -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_post_subsidio') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿Está Postulando a Subsidio Habitacional? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_post_subsidio', 'value' => '1', 'checked' => ('1' == $post_subsidio) ? TRUE : FALSE, 'id' => 'post_subsidio1')) . " Sí, Vivienda Nueva o Usada <br/>";
                                                        echo form_radio(array('name' => 'sel_post_subsidio', 'value' => '2', 'checked' => ('2' == $post_subsidio) ? TRUE : FALSE, 'id' => 'post_subsidio2')) . " Sí, Construcción en Sitio Propio <br/>";
                                                        echo form_radio(array('name' => 'sel_post_subsidio', 'value' => '3', 'checked' => ('3' == $post_subsidio) ? TRUE : FALSE, 'id' => 'post_subsidio3')) . " Sí, Mejorando de la Vivienda <br/>";
                                                        echo form_radio(array('name' => 'sel_post_subsidio', 'value' => '4', 'checked' => ('4' == $post_subsidio) ? TRUE : FALSE, 'id' => 'post_subsidio4')) . " Sí, Ampliación de la vivienda <br/>";
                                                        echo form_radio(array('name' => 'sel_post_subsidio', 'value' => '5', 'checked' => ('5' == $post_subsidio) ? TRUE : FALSE, 'id' => 'post_subsidio5')) . " Sí, Mejoramiento de Entorno <br/>";
                                                        echo form_radio(array('name' => 'sel_post_subsidio', 'value' => '6', 'checked' => ('6' == $post_subsidio) ? TRUE : FALSE, 'id' => 'post_subsidio6')) . " Sí, Subsidio de Arriendo <br/>";
                                                        echo form_radio(array('name' => 'sel_post_subsidio', 'value' => '7', 'checked' => ('7' == $post_subsidio) ? TRUE : FALSE, 'id' => 'post_subsidio7')) . " No <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_post_subsidio') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_post_subsidio'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Libreta de Ahorros -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_libreta') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿Tiene Libreta de ahorro para la vivienda? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_libreta', 'value' => '1', 'checked' => ('1' == $libreta) ? TRUE : FALSE, 'id' => 'libreta1')) . " Sí <br/>";
                                                        echo form_radio(array('name' => 'sel_libreta', 'value' => '2', 'checked' => ('2' == $libreta) ? TRUE : FALSE, 'id' => 'libreta2')) . " No <br/>"
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_libreta') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_libreta'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-3"> <!-- Año (opcional)-->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_libreta_anio') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <div id="libreta_anio">
                                                            <label class="control-label">Señale año de apertura <span class="required" aria-required="true"> * </span></label>
                                                            <input type="text" name="txt_libreta_anio" id="txt_libreta_anio" class="form-control" placeholder="" value="<?php echo $libreta_anio; ?>">
                                                        </div>   

                                                        <?php
                                                        if (form_error('txt_libreta_anio') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_libreta_anio'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-3"> <!-- Monto ahorro (opcional) -->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_monto_ahorro') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <div id="monto_ahorro">
                                                            <label class="control-label">Monto Ahorro <span class="required" aria-required="true"> * </span> </label>
                                                            <input type="text" name="txt_monto_ahorro" id="txt_monto_ahorro" class="form-control" placeholder="" value="<?php echo $monto_ahorro; ?>">
                                                        </div>
                                                        <?php
                                                        if (form_error('txt_monto_ahorro') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_monto_ahorro'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Principal ocupante -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_fam_ocupante') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">En su familia, ¿Es la principal ocupante de la vivienda? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_fam_ocupante', 'value' => '1', 'checked' => ('1' == $fam_ocupante) ? TRUE : FALSE, 'id' => 'fam_ocupante1')) . " Sí <br/>";
                                                        echo form_radio(array('name' => 'sel_fam_ocupante', 'value' => '2', 'checked' => ('2' == $fam_ocupante) ? TRUE : FALSE, 'id' => 'fam_ocupante2')) . " No <br/>"
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_fam_ocupante') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_fam_ocupante'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-3"> <!-- Número de personas -->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_num_personas') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Número de personas que habitan la vivienda <span class="required" aria-required="true"> * </span> </label>
                                                        <input type="text" name="txt_num_personas" id="txt_num_personas" class="form-control" placeholder="" value="<?php echo $num_personas; ?>">
                                                        <?php
                                                        if (form_error('txt_num_personas') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_num_personas'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-3"> <!-- Número de dormitorios -->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_dormitorios') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Número de piezas que usan como dormitorio <span class="required" aria-required="true"> * </span> </label>
                                                        <input type="text" name="txt_dormitorios" id="txt_dormitorios" class="form-control" placeholder="" value="<?php echo $num_dormitorios; ?>">
                                                        <?php
                                                        if (form_error('txt_dormitorios') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_dormitorios'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <!-- DE LOS SERVICIOS BASICOS -->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Agua -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_prov_agua') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿De dónde proviene el agua de la vivienda? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_prov_agua', 'value' => '1', 'checked' => ('1' == $prov_agua) ? TRUE : FALSE, 'id' => 'prov_agua1')) . " Red Pública Con Medidor <br/>";
                                                        echo form_radio(array('name' => 'sel_prov_agua', 'value' => '2', 'checked' => ('2' == $prov_agua) ? TRUE : FALSE, 'id' => 'prov_agua2')) . " Red Pública Sin Medidor <br/>";
                                                        echo form_radio(array('name' => 'sel_prov_agua', 'value' => '3', 'checked' => ('3' == $prov_agua) ? TRUE : FALSE, 'id' => 'prov_agua3')) . " Red Pública con Medidor Comaprtido <br/>";
                                                        echo form_radio(array('name' => 'sel_prov_agua', 'value' => '4', 'checked' => ('4' == $prov_agua) ? TRUE : FALSE, 'id' => 'prov_agua4')) . " Agua de Pozo, vertiente o Noria <br/>";
                                                        echo form_radio(array('name' => 'sel_prov_agua', 'value' => '5', 'checked' => ('5' == $prov_agua) ? TRUE : FALSE, 'id' => 'prov_agua5')) . " Sin Información <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_prov_agua') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_prov_agua'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Subsidio Agua -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_sub_agua') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿Tiene Subsidio de Agua Potable? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_sub_agua', 'value' => '1', 'checked' => ('1' == $sub_agua) ? TRUE : FALSE, 'id' => 'sub_agua1')) . " Sí <br/>";
                                                        echo form_radio(array('name' => 'sel_sub_agua', 'value' => '2', 'checked' => ('2' == $sub_agua) ? TRUE : FALSE, 'id' => 'sub_agua2')) . " No <br/>"
                                                        ?>                                                             

                                                        <?php
                                                        if (form_error('sel_sub_agua') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_sub_agua'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Energía eléctrica -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_ener_electrica') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿Cuál es el Sistema de Energía eléctrica de la vivienda? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_ener_electrica', 'value' => '1', 'checked' => ('1' == $ener_electrica) ? TRUE : FALSE, 'id' => 'ener_electrica1')) . " Red Pública Con Medidor Propio <br/>";
                                                        echo form_radio(array('name' => 'sel_ener_electrica', 'value' => '2', 'checked' => ('2' == $ener_electrica) ? TRUE : FALSE, 'id' => 'ener_electrica2')) . " Red Pública con Medidor Compartido <br/>";
                                                        echo form_radio(array('name' => 'sel_ener_electrica', 'value' => '3', 'checked' => ('3' == $ener_electrica) ? TRUE : FALSE, 'id' => 'ener_electrica3')) . " Red Pública sin Medidor Compartido (conexión irregular) <br/>";
                                                        echo form_radio(array('name' => 'sel_ener_electrica', 'value' => '4', 'checked' => ('4' == $ener_electrica) ? TRUE : FALSE, 'id' => 'ener_electrica4')) . " Placa Solar <br/>";
                                                        echo form_radio(array('name' => 'sel_ener_electrica', 'value' => '5', 'checked' => ('5' == $ener_electrica) ? TRUE : FALSE, 'id' => 'ener_electrica5')) . " Generador Propio <br/>";
                                                        echo form_radio(array('name' => 'sel_ener_electrica', 'value' => '6', 'checked' => ('6' == $ener_electrica) ? TRUE : FALSE, 'id' => 'ener_electrica6')) . " No dispone <br/>";
                                                        echo form_radio(array('name' => 'sel_ener_electrica', 'value' => '7', 'checked' => ('7' == $ener_electrica) ? TRUE : FALSE, 'id' => 'ener_electrica7')) . " Sin Información <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_ener_electrica') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_ener_electrica'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Eliminación de excretas -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_elim_excretas') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿Cuál es el Sistema de Eliminación de excretas de la vivienda? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_elim_excretas', 'value' => '1', 'checked' => ('1' == $elim_excretas) ? TRUE : FALSE, 'id' => 'elim_excretas1')) . " Alcantarillado <br/>";
                                                        echo form_radio(array('name' => 'sel_elim_excretas', 'value' => '2', 'checked' => ('2' == $elim_excretas) ? TRUE : FALSE, 'id' => 'elim_excretas2')) . " Fosa Séptica <br/>";
                                                        echo form_radio(array('name' => 'sel_elim_excretas', 'value' => '3', 'checked' => ('3' == $elim_excretas) ? TRUE : FALSE, 'id' => 'elim_excretas3')) . " Letrina Sanitaria <br/>";
                                                        echo form_radio(array('name' => 'sel_elim_excretas', 'value' => '4', 'checked' => ('4' == $elim_excretas) ? TRUE : FALSE, 'id' => 'elim_excretas4')) . " Pozo Negro <br/>";
                                                        echo form_radio(array('name' => 'sel_elim_excretas', 'value' => '5', 'checked' => ('5' == $elim_excretas) ? TRUE : FALSE, 'id' => 'elim_excretas5')) . " No dispone <br/>";
                                                        echo form_radio(array('name' => 'sel_elim_excretas', 'value' => '6', 'checked' => ('6' == $elim_excretas) ? TRUE : FALSE, 'id' => 'elim_excretas6')) . " Sin Información <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_elim_excretas') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_elim_excretas'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Registro Social de hogares -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_reg_hogares') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿Se encuentra incorporado en el Registro Social de Hogares? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_reg_hogares', 'value' => '1', 'checked' => ('1' == $reg_hogares) ? TRUE : FALSE, 'id' => 'reg_hogares1')) . " Sí <br/>";
                                                        echo form_radio(array('name' => 'sel_reg_hogares', 'value' => '2', 'checked' => ('2' == $reg_hogares) ? TRUE : FALSE, 'id' => 'reg_hogares2')) . " No <br/>";
                                                        echo form_radio(array('name' => 'sel_reg_hogares', 'value' => '3', 'checked' => ('3' == $reg_hogares) ? TRUE : FALSE, 'id' => 'reg_hogares3')) . " No sabe <br/>"
                                                        ?>                                                             

                                                        <?php
                                                        if (form_error('sel_reg_hogares') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_reg_hogares'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Tramo grupo familiar -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_tramo_grupo') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">¿Cuál es el tramo en el que se encuentra su grupo familiar? <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '1', 'checked' => ('1' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo1')) . " Tramo del 40	0%-40%  <Ingresos o> vulnerabilidad  <br/>";
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '2', 'checked' => ('2' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo2')) . " Tramo del 50	41%-50%  <Ingresos o> vulnerabilidad  <br/>";
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '3', 'checked' => ('3' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo3')) . " Tramo del 60	51%-60%  <Ingresos o> vulnerabilidad  <br/>";
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '4', 'checked' => ('4' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo4')) . " Tramo del 70	61%-70%  <Ingresos o> vulnerabilidad  <br/>";
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '5', 'checked' => ('5' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo5')) . " Tramo del 80	71%-80%  <Ingresos o> vulnerabilidad  <br/>";
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '6', 'checked' => ('6' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo6')) . " Tramo del 90	81%-90%  <Ingresos o> vulnerabilidad  <br/>";
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '7', 'checked' => ('7' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo7')) . " Tramo del 100	91%-100%  <Ingresos o> vulnerabilidad  <br/>";
                                                        echo form_radio(array('name' => 'sel_tramo_grupo', 'value' => '8', 'checked' => ('8' == $tramo_grupo) ? TRUE : FALSE, 'id' => 'tramo_grupo8')) . " No conoce el tramo <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_tramo_grupo') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_tramo_grupo'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Subsidio Vivienda -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_ben_subsidio') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Subsidio Vivienda <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '1', 'checked' => ('1' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio1')) . " Subisidio Protección al Patrimonio Familiar título I (entorno) <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '2', 'checked' => ('2' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio2')) . " Subisidio Protección al Patrimonio Familiar título II (mejoramiento) <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '3', 'checked' => ('3' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio3')) . " Subisidio Protección al Patrimonio Familiar título III (ampliación) <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '4', 'checked' => ('4' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio4')) . " Nuevo Fondo Solidario de Vivienda <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '5', 'checked' => ('5' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio5')) . " Subsidio habitacional sectores emergentes <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '6', 'checked' => ('6' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio6')) . " Subsidio habitacional sectores medios <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '7', 'checked' => ('7' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio7')) . " Subsidio de Arriendo <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '8', 'checked' => ('8' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio8')) . " Movilidad habitacional <br/>";
                                                        echo form_radio(array('name' => 'sel_ben_subsidio', 'value' => '9', 'checked' => ('9' == $ben_subsidio) ? TRUE : FALSE, 'id' => 'ben_subsidio9')) . " No <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_ben_subsidio') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_ben_subsidio'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Otros subsidio -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_otro_subsidio') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Otro Subsidio <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '1', 'checked' => ('1' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio1')) . " Subsidio consumo agua potable <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '2', 'checked' => ('2' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio2')) . " Subsidio al empleo joven <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '3', 'checked' => ('3' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio3')) . " Subsidio familiar <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '4', 'checked' => ('4' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio4')) . " Subsidio familiar duplo <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '5', 'checked' => ('5' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio5')) . " Subsidio a la discapacidad mental <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '6', 'checked' => ('6' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio6')) . " Bono trabajo mujer <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '7', 'checked' => ('7' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio7')) . " Bono por hijo <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '8', 'checked' => ('8' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio8')) . " Pensión básica solidaria de vejez <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '9', 'checked' => ('9' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio9')) . " Aporte previsional solidario de vejez <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '10', 'checked' => ('10' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio10')) . " Pensión básica solidaria de invalidez <br/>";
                                                        echo form_radio(array('name' => 'sel_otro_subsidio', 'value' => '11', 'checked' => ('11' == $otro_subsidio) ? TRUE : FALSE, 'id' => 'otro_subsidio11')) . " Aporte previsional solidario de invalidez <br/>";
                                                        ?>                                                                 


                                                        <?php
                                                        if (form_error('sel_otro_subsidio') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_otro_subsidio'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->



                                            </div>
                                            <div class="form-actions right">
                                                <!--<button type="button" class="btn default">Volver</button>-->
                                                <a href="<?php echo site_url('encuesta/salud/'); ?>" class="btn default" role="button">Volver</a>
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


