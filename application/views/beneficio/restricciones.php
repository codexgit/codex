<?php
if (validation_errors() == "") {

    $idbeneficio = $beneficio->beneficio_id;
    $nom_categoria = $beneficio->cat_benef_nombre;
    $nom_subcategoria = $beneficio->subcat_benef_nombre;
    $nom_beneficio = $beneficio->benef_nombre;
    $anio = $beneficio->benef_anio;
    $f_ini_v = $beneficio->benef_fec_inicio;
    $f_fin_v = $beneficio->benef_fec_fin;
    $f_ini_p = $beneficio->benef_fec_iniciopos;
    $f_fin_p = $beneficio->benef_fec_finpos;

    $idcampo = "";
    $idopcion = "";
    $sel_tipo = "";
    $txt_valor = "";
} else {

    $nom_categoria = set_value('txt_categoria');
    $nom_subcategoria = set_value('txt_subcategoria');
    $nom_beneficio = set_value('txt_nbeneficio');
    $anio = set_value('txt_anio');
    $f_ini_v = set_value('txt_iniv');
    $f_fin_v = set_value('txt_finv');
    $f_ini_p = set_value('txt_inip');
    $f_fin_p = set_value('txt_finp');

    $idcampo = set_value('sel_campo');
    $idopcion = set_value('sel_opcion');
    $sel_tipo = set_value('sel_tipo');
    $txt_valor = set_value('txt_valor');
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
                        <span>Editar Restricciones</span>
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
                                            <i class="fa fa-list"></i>Editar Restricciones
                                        </div>

                                    </div>
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <div class="form-body">
                                            <h3 class="form-section">Datos Generales</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Categoría</label>
                                                        <span class="help-block"> <?php echo $nom_categoria; ?> </span>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Subcategoría</label>
                                                        <span class="help-block"> <?php echo $nom_subcategoria; ?> </span>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label>
                                                        <span class="help-block"> <?php echo $nom_beneficio; ?> </span>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">A&ntilde;o</label>
                                                        <span class="help-block"> <?php echo $anio; ?> </span>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label>Inicio vigencia</label>
                                                        <span class="help-block"> <?php echo mdate('%d-%m-%Y ', $f_ini_v); ?> </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label>Fin vigencia</label>
                                                        <span class="help-block"> <?php echo mdate('%d-%m-%Y ', $f_fin_v); ?> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->                                                                            
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label>Inicio postulación</label>
                                                        <span class="help-block"> <?php echo mdate('%d-%m-%Y ', $f_ini_p); ?> </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label>Fin postulación</label>
                                                        <span class="help-block"> <?php echo mdate('%d-%m-%Y ', $f_fin_p); ?> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->

                                            <!-- RESTRICCIONES -->
                                            <?php
                                            $attributes = array('class' => 'horizontal');
                                            echo form_open('beneficio/restricciones/' . $idbeneficio, $attributes);
                                            ?>

                                            <h3 class="form-section">Restricciones</h3>
                                            <!-- EDITAR RESTRICCIONES -->
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3_2">
                                                    <thead>
                                                        <tr>
                                                            <th> # </th>
                                                            <th> Campo </th>
                                                            <th> Tipo </th>
                                                            <th> Valor </th>
                                                            <th> Grupo </th>
                                                            <th> Accion </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <?php $count = 0; ?>
                                                        <?php foreach ($lstrestricciones as $restriccion): ?> 

                                                            <tr>
                                                                <th> <?php echo $count; ?> </th>
                                                                <th> <?php echo $restriccion['campo_nombre']; ?> </th>
                                                                <th> <?php echo $restriccion['campo_tipo']; ?> </th>
                                                                <th> <?php echo $restriccion['restbenef_valor']; ?> </th>
                                                                <th> <?php echo $restriccion['restbenef_grupo_campo']; ?> </th>

                                                                <th>
                                                                    <div class="btn-group">

                                                                        <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true"> 
                                                                            Acciones
                                                                            <i class="fa fa-angle-down"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu pull-left" role="menu">

                                                                            <li>
                                                                                <a href="<?php echo site_url('#'); ?>">
                                                                                    <i class="icon-close"></i> Eliminar </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                            <?php $count++; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>

                                                <!-- AGREGAR RESTRICCION -->
                                                <h4 class="form-section">Agregar Restricción</h4>
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <div class="form-group <?php
                                                        if (form_error('sel_tipo') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label class="control-label">Tipo <span class="required" aria-required="true"> * </span></label>
                                                            <br/>
                                                            <select name="sel_tipo" id="sel_tipo" class="form-control">
                                                                <option value="1">Igual a</option>
                                                                <option value="2">Mayor a</option>
                                                                <option value="3">Mayor o igual a</option>
                                                                <option value="4">Menor a</option>
                                                                <option value="5">Menor o igual a</option>
                                                                <option value="6">Seleccionable</option>
                                                            </select>

                                                            <?php
                                                            if (form_error('sel_tipo') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('sel_tipo'); ?> </span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group <?php
                                                        if (form_error('sel_campo') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label class="control-label">Campo <span class="required" aria-required="true"> * </span></label>
                                                            <br/>
                                                            <select name="sel_campo" class="form-control" id="sel_campo">

                                                                <?php
                                                                foreach ($lstcampos as $campo):
                                                                    if ($campo['campo_id'] == $idcampo) {
                                                                        echo "<option value='" . $campo['campo_id'] . "' selected>" . $campo['campo_nombre'] . "</option>";
                                                                    } else {
                                                                        echo "<option value='" . $campo['campo_id'] . "'>" . $campo['campo_nombre'] . "</option>";
                                                                    }
                                                                endforeach;
                                                                ?>
                                                                <option value="A">#Estudiante</option>
                                                                <option value="B">#Último año aprobado</option>
                                                                <option value="C">#Ingreso per cápita</option>
                                                                <option value="H">#Jefe de hogar</option>
                                                                <option value="D">#Cantidad integrantes</option>
                                                                <option value="E">#Tipo educación</option>
                                                                <option value="F">#Prom	edio</option>
                                                                <option value="G">#Hijo prof. de educ.</option>
                                                                <option value="H">#Edad</option>
                                                            </select>

                                                            <?php
                                                            if (form_error('sel_campo') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('sel_campo'); ?> </span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group <?php
                                                        if (form_error('txt_valor') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label class="control-label">Valor</label>
                                                            <br/>
                                                            <input type="text" name="txt_valor" id="txt_valor" placeholder="" class="form-control" />
                                                            <?php
                                                            if (form_error('txt_valor') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('txt_valor'); ?> </span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group <?php
                                                        if (form_error('sel_opcion') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label class="control-label">Opciones</label>
                                                            <br/>
                                                            <select name="sel_opcion" class="form-control" id="sel_opcion">
                                                                <option value="">Seleccione una opción</option>
                                                                <?php
                                                                //if(isset($lstopciones)){
                                                                foreach ($lstopciones as $opcion):
                                                                    if ($opcion['campo_valor_id'] == $idopcion) {
                                                                        echo "<option value='" . $opcion['campo_valor_id'] . "' selected>" . $opcion['camvalor_valor'] . "</option>";
                                                                    } else {
                                                                        echo "<option value='" . $opcion['campo_valor_id'] . "'>" . $opcion['camvalor_valor'] . "</option>";
                                                                    }
                                                                endforeach;
                                                                //	}
                                                                ?>
                                                            </select>
                                                            <?php
                                                            if (form_error('sel_opcion') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('sel_opcion'); ?> </span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group <?php
                                                        if (form_error('txt_grupo') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label class="control-label">Grupo</label>
                                                            <br/>
                                                            <input type="text" name="txt_grupo" id="txt_grupo" placeholder="" class="form-control" />
                                                            <?php
                                                            if (form_error('txt_grupo') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('txt_grupo'); ?> </span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions right">
                                                        <a href="<?php echo site_url('beneficio/listado'); ?>" class="btn default" role="button">Volver</a>
                                                        <button type="submit" class="btn red">
                                                            <i class="fa fa-check"></i> Guardar</button>
                                                    </div>
                                                    <input type="hidden" name="hdn_valor" id="hdn_valor" value="1">
                                                    <?php echo form_close(); ?>

                                                </div>
                                            </div>
                                        </div><!--/row-->                                                                            
                                    </div><!-- END FORM-->
                                </div>
                            </div>													
                        </div>
                    </div> 
                </div>
            </div><!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->


