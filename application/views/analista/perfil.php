
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

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light profile-sidebar-portlet ">
                                    <div class="portlet-title">

                                        <!--<img alt="" class="img-responsive center-block" src="<?php echo base_url(); ?>/assets/layouts/layout3/img/avatar.png">-->

                                        <img alt="" class="img-responsive hoverable img-thumbnail img-circle center-block" src="<?php echo base_url(); ?>/assets/sibtra/users/<?php echo element('usrlogin', $sesionusuario); ?>/avatar.png"  width="300px">
                                        
                                        <h1 class="text-center"><span class="glyphicon glyphicon-user"></span></h1>
                                        <p class="h1 text-center"><strong><?php echo element('usrnombre', $sesionusuario) . " " . element('usrapellido', $sesionusuario); ?></strong></p>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="portlet box green-meadow">
                                            <div class="portlet-title">
                                                <div class="caption"><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
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
                                                    <div class="col-md-12  ">

                                                        <table class="table table-hover ">
                                                            <tr>
                                                                <td class="text-right">
                                                                    <p class="h4"><strong>Nombre</strong>
                                                                    <span class="glyphicon glyphicon-chevron-right"></span></p>
                                                                </td>
                                                                <td>
                                                                    <?php echo element('usrnombre', $sesionusuario); ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right">
                                                                    <p class="h4"><strong>Apellido</strong>
                                                                        <span class="glyphicon glyphicon-chevron-right"></span></p>
                                                                </td>
                                                                <td>
                                                                    <?php echo element('usrapellido', $sesionusuario); ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right">
                                                                    <p class="h4"><strong>Comuna</strong>
                                                                        <span class="glyphicon glyphicon-chevron-right"></span></p>
                                                                </td>
                                                                <td>
                                                                    <?php echo $comuna->nombre_comuna; ?>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <!-- CAMBIAR CONTRASEÑA -->
                            <div class="col-md-12   ">
                                <div class="portlet box ">

                                    <div class="portlet-body">
                                        <!-- IN -->


                                        <div class="portlet box green-meadow">
                                            <div class="portlet-title">
                                                <div class="caption"><i class="fa fa-lock" aria-hidden="true"></i>
                                                    Cambiar Contraseña
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <?php
                                                $attributes = array('class' => 'horizontal-form');
                                                echo form_open('analista/cambiar_password', $attributes);
                                                ?>
                                                <div class="form-body">
                                                    <!--<div class="container">-->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group <?php
                                                            if (form_error('pass_last') != "") {
                                                                echo "has-error";
                                                            }
                                                            ?>">
                                                                <label class="control-label">Contraseña antigua <span class="required" aria-required="true"> * </span></label>
                                                                <div class="input-group ">
                                                                    <input type="password" name="pass_last" id="pass_last" class="form-control " placeholder="Contraseña antigua" >
                                                                    <span class="input-group-addon input-circle-right">
                                                                        <span class="glyphicon glyphicon-lock"></span>
                                                                    </span> 

                                                                </div>
                                                                <?php
                                                                if (form_error('pass_last') != NULL) {
                                                                    ?>
                                                                    <span class="help-block"> <?php echo form_error('pass_last'); ?> </span>
                                                                    <?php
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- ROW -->

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group <?php
                                                            if (form_error('pass_new') != "") {
                                                                echo "has-error";
                                                            }
                                                            ?>">
                                                                <label class="control-label">Contraseña Nueva <span class="required" aria-required="true"> * </span></label>
                                                                <div class="input-group ">
                                                                    <input type="password" name="pass_new" id="pass_new" class="form-control" placeholder="Contraseña nueva">
                                                                    <span class="input-group-addon input-circle-right">
                                                                        <span class="glyphicon glyphicon-lock"></span>
                                                                    </span> 

                                                                </div>
                                                                <?php
                                                                if (form_error('pass_new') != NULL) {
                                                                    ?>
                                                                    <span class="help-block"> <?php echo form_error('pass_new'); ?> </span>
                                                                    <?php
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ROW -->

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group <?php
                                                            if (form_error('pass_new_repeat') != "") {
                                                                echo "has-error";
                                                            }
                                                            ?>">
                                                                <label class="control-label">Repita contraseña <span class="required" aria-required="true"> * </span></label>
                                                                <div class="input-group ">
                                                                    <input type="password" name="pass_new_repeat" id="pass_new_repeat" class="form-control" placeholder="Repita contraseña nueva">
                                                                    <span class="input-group-addon input-circle-right">
                                                                        <span class="glyphicon glyphicon-lock"></span>
                                                                    </span> 

                                                                </div>
                                                                <?php
                                                                if (form_error('pass_new_repeat') != NULL) {
                                                                    ?>
                                                                    <span class="help-block"> <?php echo form_error('pass_new_repeat'); ?> </span>
                                                                    <?php
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ROW -->
                                                    <!--</div>--> 
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



                                        <!-- FIN IN -->
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
