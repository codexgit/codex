<?php
if (validation_errors() == "") {

    $txt_not_til = "";
    $txt_not_enc = "";
    $txt_not_cuerpo = "";

} else {

    $txt_not_til = set_value('txt_not_til');
    $txt_not_enc = set_value('txt_not_enc');
    $txt_not_cuerpo = set_value('txt_not_cuerpo');

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
                        <a href="<?php echo site_url('noticia/listado'); ?>">Noticias</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Crear Beneficio</span>
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

                                <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-heart"></i>Nueva Noticia 
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
                                        echo form_open('noticia/crear', $attributes);
                                        ?>
                                        <div class="form-body">
                                            <h3 class="form-section">Datos Generales</h3>
                                            <div class="container">
                                                <!--/row-->
                                                <div class="row ">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group <?php
                                                        if (form_error('txt_not_til') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label for="txt_not_til" class="control-label">Título de la noticia <span class="required" aria-required="true"> * </span></label>
                                                            <input type="text" name="txt_not_til"  id="txt_not_til" class="form-control input-circle" placeholder="Titulo de la noticia" maxlength="100" value="<?php echo $txt_not_til; ?>">
                                                            <button type="button" class="btn purple btn-info btn-xs">Caracteres <span class="badge" id="cont_tit"></span></button>
                                                                                        <!--<span class="help-block"> This is inline help </span>-->
                                                            <?php
                                                            if (form_error('txt_not_til') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('txt_not_til'); ?> </span>
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
                                                        if (form_error('txt_not_enc') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label for="txt_not_enc" class="control-label">Encabezado de la noticia <span class="required" aria-required="true"> * </span></label>
                                                            <textarea class="form-control input-circle" rows="2" id="txt_not_enc" name="txt_not_enc" value="" maxlength="250"><?php echo $txt_not_enc; ?></textarea>
                                                            <button type="button" class="btn purple btn-info btn-xs">Caracteres <span class="badge" id="cont_enc"></span></button>
                                                                                        <!--<span class="help-block"> This is inline help </span>-->
                                                            <?php
                                                            if (form_error('txt_not_enc') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('txt_not_enc'); ?> </span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group <?php
                                                        if (form_error('txt_not_cuerpo') != "") {
                                                            echo "has-error";
                                                        }
                                                        ?>">
                                                            <label for="txt_not_cuerpo" class="control-label">Cuerpo de la noticia <span class="required" aria-required="true"> * </span></label>
                                                            <textarea class="form-control" rows="5" id="txt_not_cuerpo" name="txt_not_cuerpo" value="" maxlength="1000"><?php echo $txt_not_cuerpo; ?></textarea>
                                                            <button type="button" class="btn purple btn-info btn-xs">Caracteres <span class="badge" id="cont_cuerpo"></span></button>
                                                                                        <!--<span class="help-block"> This is inline help </span>-->
                                                            <?php
                                                            if (form_error('txt_not_cuerpo') != NULL) {
                                                                ?>
                                                                <span class="help-block"> <?php echo form_error('txt_not_cuerpo'); ?> </span>
                                                                <?php
                                                            }
                                                            ?>




                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/row-->
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <!--<button type="button" class="btn default">Volver</button>-->
                                            <a href="<?php echo site_url('noticia/listado'); ?>" class="btn default" role="button">Volver</a>
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
