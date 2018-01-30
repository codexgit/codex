
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
                        <span>Mi Perfil</span>
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
                            <div class="col-md-12 ">
                                <div class="portlet light profile-sidebar-portlet ">
                                    <div class="portlet-title">

    <!--<img alt="" class="img-responsive center-block" src="<?php echo base_url(); ?>/assets/layouts/layout3/img/avatar.png">-->
                                        <img alt="" class="img-responsive img-circle center-block" src="<?php echo base_url(); ?>/assets/pages/img/avatars/team1.jpg" width="300px">

                                        <h1 class="text-center"><?php echo element('usrnombre', $sesionusuario) . " " . element('usrapellido', $sesionusuario); ?></h1>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="portlet box green-meadow">
                                            <div class="portlet-title">
                                                <div class="caption"><i class="fa fa-user" aria-hidden="true"></i>
                                                    Datos personales
                                                </div>
                                                <div class="actions">
                                                    <a href="<?php echo site_url('analista/editar_informacion'); ?>" class="btn btn-default btn-sm">
                                                        <i class="fa fa-plus"></i> Editar
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-center">
                                                            <label class="control-label">Nombre </label>
                                                            <span class="help-block"> Juanito </span>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group text-center">
                                                            <label class="control-label">Apellido </label>
                                                            <span class="help-block "> Arcoiris </span>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="portlet light profile-sidebar-portlet ">
                                    <div class="portlet-body">
                                        <!-- IN -->
                                        <div class="portlet box green-meadow">
                                            <div class="portlet-title">
                                                <div class="caption"><i class="fa fa-user" aria-hidden="true"></i>
                                                    Cambiar Contraseña
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <?php
                                                $attributes = array('class' => 'horizontal-form');
                                                echo form_open('analista/cambiar_pass', $attributes);
                                                ?>
                                                <div class="form-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group <?php /*
                                                  if (form_error('pass_last') != "") {
                                                  echo "has-error";
                                                  } */
                                                ?>">
                                                                    <label class="control-label">Contraseña antigua <span class="required" aria-required="true"> * </span></label>
                                                                    <div class="input-group ">
                                                                        <input type="password" name="pass_last" id="pass_last" class="form-control " placeholder="Contraseña antigua" >
                                                                        <span class="input-group-addon input-circle-right">
                                                                            <span class="glyphicon glyphicon-edit"></span>
                                                                        </span> 

                                                                    </div>
                                                                    <?php /* glyphicon glyphicon-edit
                                                                      if (form_error('pass_last') != NULL) {
                                                                      ?>
                                                                      <span class="help-block"> <?php echo form_error('pass_last'); ?> </span>
                                                                      <?php
                                                                      } */
                                                                    ?>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- ROW -->

                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group <?php /*
                                                                      if (form_error('pass_last') != "") {
                                                                      echo "has-error";
                                                                      } */
                                                                    ?>">
                                                                    <label class="control-label">Contraseña Nueva <span class="required" aria-required="true"> * </span></label>
                                                                    <div class="input-group ">
                                                                        <input type="password" name="pass_last" id="pass_last" class="form-control" placeholder="Contraseña nueva">
                                                                        <span class="input-group-addon input-circle-right">
                                                                            <span class="glyphicon glyphicon-edit"></span>
                                                                        </span> 

                                                                    </div>
                                                                    <?php /*
                                                                      if (form_error('pass_last') != NULL) {
                                                                      ?>
                                                                      <span class="help-block"> <?php echo form_error('pass_last'); ?> </span>
                                                                      <?php
                                                                      } */
                                                                    ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- ROW -->

                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group <?php /*
                                                                      if (form_error('pass_last') != "") {
                                                                      echo "has-error";
                                                                      } */
                                                                    ?>">
                                                                    <label class="control-label">Repita contraseña <span class="required" aria-required="true"> * </span></label>
                                                                    <div class="input-group ">
                                                                        <input type="password" name="pass_last" id="pass_last" class="form-control" placeholder="Repita contraseña nueva">
                                                                        <span class="input-group-addon input-circle-right">
                                                                            <span class="glyphicon glyphicon-edit"></span>
                                                                        </span> 

                                                                    </div>
                                                                    <?php /*
                                                                      if (form_error('pass_last') != NULL) {
                                                                      ?>
                                                                      <span class="help-block"> <?php echo form_error('pass_last'); ?> </span>
                                                                      <?php
                                                                      } */
                                                                    ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- ROW -->
                                                    </div>
                                                </div>
                                                <div class="form-actions right">
                                                    <!--<button type="button" class="btn default">Volver</button>-->
                                                    <a href="<?php echo site_url('inicio/index'); ?>" class="btn default" role="button">Volver</a>
                                                    <button type="submit" class="btn red">
                                                        <i class="fa fa-check"></i> Cambiar contraseña</button>
                                                </div>
                                                <input type="hidden" name="hdn_valor" id="hdn_valor" value="1">
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
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
