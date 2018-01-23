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
} else {

    $nom_categoria = set_value('txt_categoria');
    $nom_subcategoria = set_value('txt_subcategoria');
    $nom_beneficio = set_value('txt_nbeneficio');
    $anio = set_value('txt_anio');
    $f_ini_v = set_value('txt_iniv');
    $f_fin_v = set_value('txt_finv');
    $f_ini_p = set_value('txt_inip');
    $f_fin_p = set_value('txt_finp');
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
                        <span>Detalle Beneficio</span>
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
                                            <i class="fa fa-heart"></i>Datos Generales 
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
                                        <form action="#" class="horizontal-form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Categoría </label>
                                                            <span class="help-block"> <?php echo $nom_categoria; ?> </span>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Subcategoría </label>
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
                                                            <span class="help-block"> <?php echo $f_ini_p = ($f_ini_p != 0) ? mdate('%d-%m-%Y', $f_ini_p) : "-"; ?> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label>Fin postulación</label>
                                                            <span class="help-block"> <?php echo $f_fin_p = ($f_fin_p != 0) ? mdate('%d-%m-%Y', $f_fin_p) : "-"; ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/row-->                                                                         
                                                <div class="row">
                                                    <div class="col-md-12 ">

                                                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                                                        <div class="portlet light ">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="icon-list font-red"></i>
                                                                    <span class="caption-subject font-red sbold uppercase">Restricciones</span>
                                                                </div>
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="table-scrollable">
                                                                    <table class="table table-hover table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th> # </th>
                                                                                <th> Campo </th>
                                                                                <th> Tipo </th>
                                                                                <th> Valor </th>
                                                                                <th> Grupo </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php $count = 0; ?>
                                                                            <?php foreach ($lstrestricciones as $restriccion): ?>
                                                                                <tr>
                                                                                    <td> [#] <?php echo $count; ?> </td>
                                                                                    <td> <?php echo $restriccion['campo_nombre']; ?></td> 
                                                                                    <td> <?php echo $restriccion['restbenef_tipo']; ?> </td>
                                                                                    <td> <?php echo $restriccion['restbenef_valor']; ?> </td>
                                                                                    <td> <?php echo $restriccion['restbenef_grupo_campo']; ?> </td>
                                                                                </tr>
                                                                                <?php $count++; ?>
                                                                            <?php endforeach; ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END SAMPLE TABLE PORTLET-->
                                                    </div>
                                                </div>
                                                <!--/row-->
                                            </div>
                                            <div class="form-actions right">
                                                <!--<button type="button" class="btn default">Volver</button>-->
                                                <a href="<?php echo site_url('beneficio/listado'); ?>" class="btn default" role="button">Volver</a>
                                            </div>
                                        </form>
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
