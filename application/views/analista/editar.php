<?php
if (validation_errors() == "") {


    $idregion = $region_id->region_id;
    $idcomuna = $usuario->comuna_id;
} else {

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
                    <h1>Mi Perfil
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
                        <a href="<?php echo site_url('analista/index'); ?>">Inicio</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="<?php echo site_url('analista/perfil'); ?>">Mi Perfil</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Cambiar Información</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMBS -->
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <div class="mt-content-body">


                        <div class="row">
                            <?php
                            if ($mensaje != null && $mensaje != "") {
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

                            <!-- CA -->
                            <div class="col-md-12 col-sm-12">
                                <!-- IN -->
                                <div class="portlet box green-meadow">
                                    <div class="portlet-title">
                                        <div class="caption"><i class="fa fa-user" aria-hidden="true"></i>
                                            Información Personal
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <?php
                                        $attributes = array('class' => 'horizontal-form');
                                        echo form_open('analista/editar_informacion', $attributes);
                                        ?>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group <?php
                                                    if (form_error('usr_nombre') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Nombre <span class="required" aria-required="true"> * </span></label>

                                                        <input type="text" name="usr_nombre" id="usr_nombre" class="form-control" value="<?php echo element('usrnombre', $sesionusuario); ?>" >

                                                        <?php
                                                        if (form_error('usr_nombre') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('usr_nombre'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>


                                                <!-- ROW -->


                                                <div class="col-md-6">
                                                    <div class="form-group <?php
                                                    if (form_error('usr_apellido') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Apellido <span class="required" aria-required="true"> * </span></label>
                                                        <input type="text" name="usr_apellido" id="pass_last" class="form-control" value="<?php echo element('usrapellido', $sesionusuario); ?>">
                                                        <?php
                                                        if (form_error('usr_apellido') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('usr_apellido'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ROW -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group <?php
                                                    if (form_error('sel_region') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Regi&oacute;n <span class="required" aria-required="true"> * </span></label>
                                                        <select class="form-control" name="sel_region" id="sel_region">
                                                            <option value="">Seleccione una opci&oacute;n</option>
                                                            <?php
                                                            foreach ($lstregiones as $region):
                                                                if ($region['region_id'] == $idregion) {
                                                                    echo "<option value='" . $region['region_id'] . "' selected>" . $region['codigo_region'] . " - " . $region['nombre_region'] . "</option>";
                                                                } else {
                                                                    echo "<option value='" . $region['region_id'] . "'>" . $region['codigo_region'] . " - " . $region['nombre_region'] . "</option>";
                                                                }
                                                            endforeach;
                                                            ?>
                                                        </select>

                                                        <?php
                                                        if (form_error('sel_region') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_region'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group <?php
                                                    if (form_error('sel_comuna') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Comuna <span class="required" aria-required="true"> * </span></label>
                                                        <select class="form-control" name="sel_comuna" id="sel_comuna">
                                                            <option value="">Seleccione una opci&oacute;n</option>
                                                            <?php
                                                            if (isset($lstcomunas)) {
                                                                foreach ($lstcomunas as $comuna):
                                                                    if ($comuna['comuna_id'] == $idcomuna) {
                                                                        echo "<option value='" . $comuna['comuna_id'] . "' selected>" . $comuna['nombre_comuna'] . "</option>";
                                                                    } else {
                                                                        echo "<option value='" . $comuna['comuna_id'] . "'>" . $comuna['nombre_comuna'] . "</option>";
                                                                    }
                                                                endforeach;
                                                            }
                                                            ?>                                    
                                                        </select>
                                                        <?php
                                                        if (form_error('sel_comuna') != NULL) {
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
                                            <a href="<?php echo site_url('analista/perfil'); ?>" class="btn default" role="button">Volver</a>
                                            <button type="submit" class="btn red">
                                                <i class="fa fa-check"></i> Modificar</button>
                                        </div>
                                        <input type="hidden" name="hdn_valor" id="hdn_valor" value="1">
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>



                                <!-- FIN IN -->

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
