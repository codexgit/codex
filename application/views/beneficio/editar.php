<?php
if (validation_errors() == "") {

    $idbeneficio = $beneficio->beneficio_id;
    $idcategoria = $beneficio->cat_beneficio_id;
    $idsubcategoria = $beneficio->subcat_beneficio_id;
    $nbeneficio = $beneficio->benef_nombre;
    $anio = $beneficio->benef_anio;
    $f_ini_v = $beneficio->benef_fec_inicio;
    $f_fin_v = $beneficio->benef_fec_fin;
    $f_ini_p = $beneficio->benef_fec_iniciopos;
    $f_fin_p = $beneficio->benef_fec_finpos;

} else {

    $idcategoria = set_value('sel_categoria');
    $idsubcategoria = set_value('sel_subcategoria');
    $nbeneficio = set_value('txt_nbeneficio');
    $anio = set_value('txt_anio');
    $f_ini_v = set_value('txt_f_ini_v');
    $f_fin_v = set_value('txt_f_fin_v');
    $f_ini_p = set_value('txt_f_ini_p');
    $f_fin_p = set_value('txt_f_fin_p');
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
                    <h1>Beneficios
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
                        <a href="<?php echo site_url('beneficio/listado'); ?>">Beneficios</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Editar Beneficio</span>
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
                            <div class="col-md-12 col-sm-12">

                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-heart"></i>Editar Beneficio 
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
                                        echo form_open('beneficio/editar/' . $idbeneficio, $attributes);
                                        ?>
                                        <div class="form-body">
                                            <h3 class="form-section">Datos Generales</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group <?php
                                                    if (form_error('sel_categoria') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Categoría <span class="required" aria-required="true"> * </span></label>
                                                        <select class="form-control" name="sel_categoria" id="sel_categoria">
                                                            <option value="">Seleccione una opción</option>

                                                            <?php
                                                            foreach ($lstcategorias as $categoria):
                                                                if ($categoria['cat_beneficio_id'] == $idcategoria) {
                                                                    echo "<option value='" . $categoria['cat_beneficio_id'] . "' selected>" . $categoria['cat_benef_nombre'] . "</option>";
                                                                } else {
                                                                    echo "<option value='" . $categoria['cat_beneficio_id'] . "'>" . $categoria['cat_benef_nombre'] . "</option>";
                                                                }
                                                            endforeach;
                                                            ?>  


                                                        </select>
                                                        <?php
                                                        if (form_error('sel_categoria') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_categoria'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                <!--<span class="help-block"> Select your gender </span>-->
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group <?php
                                                    if (form_error('sel_subcategoria') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Subcategoría <span class="required" aria-required="true"> * </span></label>
                                                        <select class="form-control" name="sel_subcategoria" id="sel_subcategoria">
                                                            <option value="">Seleccione una opción</option>
                                                            <?php
                                                            if (isset($lstsubcategorias)) {
                                                                foreach ($lstsubcategorias as $subcategoria):
                                                                    if ($subcategoria['subcat_beneficio_id'] == $idsubcategoria) {
                                                                        echo "<option value='" . $subcategoria['subcat_beneficio_id'] . "' selected>" . $subcategoria['subcat_benef_nombre'] . "</option>";
                                                                    } else {
                                                                        echo "<option value='" . $subcategoria['subcat_beneficio_id'] . "'>" . $subcategoria['subcat_benef_nombre'] . "</option>";
                                                                    }
                                                                endforeach;
                                                            }
                                                            ?>  


                                                        </select>
                                                        <?php
                                                        if (form_error('sel_subcategoria') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('sel_subcategoria'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group <?php
                                                    if (form_error('txt_nbeneficio') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">Nombre <span class="required" aria-required="true"> * </span></label>
                                                        <input type="text" name="txt_nbeneficio"  id="txt_nbeneficio" class="form-control" placeholder="" value="<?php echo $nbeneficio; ?>">

                                                                                        <!--<span class="help-block"> This is inline help </span>-->
                                                        <?php
                                                        if (form_error('txt_nbeneficio') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_nbeneficio'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group <?php
                                                    if (form_error('txt_anio') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label class="control-label">A&ntilde;o <span class="required" aria-required="true"> * </span></label>
                                                        <input type="text" name="txt_anio" id="txt_anio" class="form-control" placeholder=" " value="<?php echo $anio; ?>">
                                                        <!--<span class="help-block"> This field has error. </span>-->
                                                        <?php
                                                        if (form_error('txt_anio') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_anio'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group  <?php
                                                    if (form_error('txt_f_ini_v') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label>Inicio vigencia <span class="required" aria-required="true"> * </span></label>
                                                        <!--<input type="text" name="txt_iniciov" id="txt_iniciov" class="form-control" placeholder="dd-mm-aaaa" value="<?php echo mdate('%d-%m-%Y', $f_ini_v); ?>">-->
                                                        <!--<input  type="text" class="form-control" id="datetime" readonly>-->

                                                        <!-- INICIO DEL CALENDARIO -->
                                                        <div class='input-group date datepicker' >
                                                            <input type='text' name="txt_f_ini_v" id="txt_f_ini_v" class="form-control" value="<?php echo mdate('%d-%m-%Y', $f_ini_v); ?>" readonly/>
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                        <!-- FIN DEL CALENDARIO -->


                                                        <?php
                                                        if (form_error('txt_f_ini_v') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_f_ini_v'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group <?php
                                                    if (form_error('txt_f_fin_v') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label>Fin vigencia <span class="required" aria-required="true"> * </span></label>
                                                        <!--<input type="text" name="txt_finv" id="txt_finv" class="form-control" placeholder="dd-mm-aaaa" value="<?php echo mdate('%d-%m-%Y', $f_fin_v); ?>">-->
                                                        <!-- INICIO DEL CALENDARIO -->
                                                        <div class='input-group date datepicker' >
                                                            <input type='text' name="txt_f_fin_v" id="txt_f_fin_v" class="form-control" value="<?php echo mdate('%d-%m-%Y', $f_fin_v); ?>" readonly/>
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                        <!-- FIN DEL CALENDARIO -->

                                                        <?php
                                                        if (form_error('txt_f_fin_v') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_f_fin_v'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->                                                                            
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group <?php
                                                    if (form_error('txt_f_ini_p') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label>Inicio postulación</label>
                                                        <!--<input type="text" name="txt_inip" id="txt_inip" class="form-control" placeholder="dd-mm-aaaa" value="<?php echo mdate('%d-%m-%Y', $f_inicio_p); ?>">-->
                                                        <!-- INICIO DEL CALENDARIO -->
                                                        <div class='input-group date datepicker' >
                                                            <input type='text' name="txt_f_ini_p" id="txt_f_ini_p" class="form-control" value="<?php echo $f_ini_p = ($f_ini_p != 0) ? mdate('%d-%m-%Y', $f_ini_p) : ""; ?>" readonly/>
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                        <!-- FIN DEL CALENDARIO -->

                                                        <?php
                                                        if (form_error('txt_f_ini_p') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_f_ini_p'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group <?php
                                                    if (form_error('txt_f_fin_p') != "") {
                                                        echo "has-error";
                                                    }
                                                    ?>">
                                                        <label>Fin postulación</label>
                                                        <!--<input type="text" name="txt_finp" id="txt_finp" class="form-control" placeholder="dd-mm-aaaa" value="<?php echo mdate('%d-%m-%Y', $f_fin_p); ?>">-->
                                                        <!-- INICIO DEL CALENDARIO -->
                                                        <div class='input-group date datepicker' >
                                                            <input type='text' name="txt_f_fin_p" id="txt_f_fin_p" class="form-control" value="<?php echo $f_fin_p = ($f_fin_p != 0) ? mdate('%d-%m-%Y', $f_fin_p) : ""; ?>" readonly/>
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                        <!-- FIN DEL CALENDARIO -->

                                                        <?php
                                                        if (form_error('txt_f_fin_p') != NULL) {
                                                            ?>
                                                            <span class="help-block"> <?php echo form_error('txt_f_fin_p'); ?> </span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->                                                                            

                                        </div>



                                        <div class="form-actions right">
                                            <!--<button type="button" class="btn default">Volver</button>-->
                                            <a href="<?php echo site_url('beneficio/listado'); ?>" class="btn default" role="button">Volver</a>
                                            <button type="submit" class="btn red">
                                                <i class="fa fa-check"></i> Guardar</button>
                                        </div>
                                        <input type="hidden" name="hdn_valor" id="hdn_valor" value="1">
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
