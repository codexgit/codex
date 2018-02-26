<?php
if (validation_errors() == "") {

    $run = "";
    $dv = "";
    $nombres = "";
    $apellido_p = "";
    $apellido_m = "";
    $fec_nacimiento = "";
    $genero = "";
    $nac_chilena = "";
} else {
    $run = set_value('txt_run');
    $dv = set_value('txt_dv');
    $nombres = set_value('txt_nombres');
    $apellido_p = set_value('txt_apellido_p');
    $apellido_m = set_value('txt_apellido_m');
    $fec_nacimiento = set_value('txt_fec_nacimiento');
    $genero = set_value('sel_genero');
    $nac_chilena = set_value('sel_nac_chilena');
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

                                        echo form_open('integrante/nueva/' . $idencuesta, $attributes);
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
                                            <h4 class="form-section">3.1.- Antecedentes Personales</h4>
                                            <!--/row-->
                                            <div class="row">

                                                <!--/span-->

                                                <div class="col-md-4"> <!-- Nombres -->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_nombres') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Nombres  <span class="required" aria-required="true"> * </span> </label>
                                                        <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="" value="<?php echo $nombres; ?>">

                                                        <?php
                                                        if (form_error('txt_nombres') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_nombres'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6"> <!-- Apellido Paterno -->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_apellido_p') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Apellido Paterno <span class="required" aria-required="true"> * </span></label>
                                                        <input type="text" name="txt_apellido_p" id="txt_apellido_p" class="form-control" placeholder="" value="<?php echo $apellido_p; ?>">
                                                        <?php
                                                        if (form_error('txt_apellido_p') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_apellido_p'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6"> <!-- Apellido Materno -->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_apellido_m') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Apellido Materno </label>
                                                        <input type="text" name="txt_apellido_m" id="txt_apellido_m" class="form-control" placeholder="" value="<?php echo $apellido_m; ?>">
                                                        <?php
                                                        if (form_error('txt_apellido_m') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_apellido_m'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->	
                                                <div class="col-md-6"> <!-- RUN --> 
                                                    <div class="form-group <?php
                                                    if (form_error('txt_run') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">RUN <span class="required" aria-required="true"> * </span></label>
                                                        <input type="text" name="txt_run" id="txt_run" class="form-control" placeholder="Ej: 12345678-9" value="<?php echo $run; ?>">
                                                        <?php
                                                        if (form_error('txt_run') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_run'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                                <!--/span-->												

                                            </div>
                                            <!--/row-->                                                                                                                                 
                                            <div class="row">
                                                <div class="col-md-4"> <!-- Fecha Nacimiento -->
                                                    <div class="form-group <?php
                                                    if (form_error('txt_fec_nacimiento') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Fecha de Nacimiento <span class="required" aria-required="true"> * </span></label>

                                                        <!-- INICIO DEL CALENDARIO -->
                                                        <div class='input-group date datepicker' >

                                                            <input type='text' name="txt_fec_nacimiento" id="txt_fec_nacimiento" class="form-control" value="<?php echo $fec_nacimiento; ?>" readonly/>

                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                        <!-- FIN DEL CALENDARIO -->


                                                        <?php
                                                        if (form_error('txt_fec_nacimiento') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_fec_nacimiento'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->


                                                <div class="col-md-4"> <!-- Género -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_genero') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Género <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_genero', 'value' => '1', 'checked' => ('1' == $genero) ? TRUE : FALSE, 'id' => 'm'));
                                                        ?>

                                                        Masculino &nbsp;

                                                        <?php
                                                        echo form_radio(array('name' => 'sel_genero', 'value' => '2', 'checked' => ('2' == $genero) ? TRUE : FALSE, 'id' => 'f'));
                                                        ?>

                                                        Femenino 

                                                        <?php
                                                        if (form_error('sel_genero') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_genero'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                                <div class="col-md-4"> <!-- Nacionalidad -->
                                                    <div class="form-group <?php
                                                    if (form_error('sel_nac_chilena') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Nacionalidad Chilena <span class="required" aria-required="true"> * </span></label>
                                                        <br/><br/>
                                                        <?php
                                                        echo form_radio(array('name' => 'sel_nac_chilena', 'value' => '1', 'checked' => ('1' == $nac_chilena) ? TRUE : FALSE, 'id' => 'nac_chilena1'));
                                                        ?>

                                                        Sí &nbsp;

                                                        <?php
                                                        echo form_radio(array('name' => 'sel_nac_chilena', 'value' => '2', 'checked' => ('2' == $nac_chilena) ? TRUE : FALSE, 'id' => 'nac_chilena2'));
                                                        ?>

                                                        No

                                                        <?php
                                                        if (form_error('sel_nac_chilena') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_nac_chilena'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->	         
                                            </div>

                                            <!-- END FORM -->

                                            <div class="form-actions right">
                                                <!--<button type="button" class="btn default">Volver</button>-->
                                                <a href="<?php echo site_url('integrante/listado/' . $idencuesta); ?>" class="btn default" role="button">Volver</a>
                                                <button type="submit" class="btn blue">
                                                    <i class="fa fa-check"></i> Siguiente</button>
                                            </div>
                                            <input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
                                                                                                                    <!--<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idfamilia_datos; ?>"> -->
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



