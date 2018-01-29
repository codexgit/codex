
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
                        <span>Listado</span>
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
                            <div class="col-md-12">


                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-heart"></i>Listado de Noticias
                                        </div>
                                        <div class="actions">
                                            <a href="<?php echo site_url('beneficio/crear'); ?>" class="btn btn-default btn-sm">
                                                <i class="fa fa-plus"></i> Agregar 
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3_3">
                                            <thead>
                                                <tr>
                                                    <th> #</th>
                                                    <th> Título </th>
                                                    <th> Fecha de publicación </th>
                                                    <th> Última modificación </th>
                                                    <th> Estado </th>
                                                    <th> Acciones </th>                                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- BENEFICIOSS -->
                                                <?php if (isset($lstnoticias)) { ?>
                                                    <?php foreach ($lstnoticias as $noticia): ?> 
                                                        <tr class="odd gradeX">
                                                            <td> <!--Nombre--> # </td>
                                                            <td> <!--Título-->  <?php echo $noticia['not_titulo']; ?> </td>
                                                            <td> <!--Fecha de publicacion-->                            <?php echo ($noticia['not_fec_publicacion'] != 0) ? mdate('%d-%m-%Y', $noticia['not_fec_publicacion']) : "-"; ?> </td>
                                                            <td> <!--Ultima modificacion-->                      <?php echo ($noticia['not_fec_modificacion'] != 0) ? mdate('%d-%m-%Y', $noticia['not_fec_modificacion']) : "-"; ?> </td>
                                                            <td>
                                                                <?php
                                                                //CONTROL DEL ESTADO
                                                                if ($noticia['not_estado'] == 3) {
                                                                    echo '<span class="label label-sm label-danger"> Bloqueado </span>';
                                                                } elseif ($noticia['not_estado'] == 2) {
                                                                    echo '<span class="label label-sm label-warning"> Guardada </span>';
                                                                } else {
                                                                    echo '<span class="label label-sm label-success"> Publicada </span>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <div class="btn-group-vertical">

                                                                    <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true"> 
                                                                        Acciones
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu pull-left" role="menu">
                                                                        <?php
                                                                        if ($noticia['not_estado'] == 3) { //BLOQUEADO 
                                                                            ?>
                                                                            <li>
                                                                                <a href=" <?php echo site_url('beneficio/activar/'); ?> ">

                                                                                    <i class="glyphicon glyphicon-ok"></i> Publicar </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href=" <?php echo site_url('beneficio/activar/'); ?> ">

                                                                                    <i class="glyphicon glyphicon-folder-open"></i> Guardar </a>
                                                                            </li>

                                                                            <?php
                                                                        } elseif ($noticia['not_estado'] == 2) { // GUARDADA
                                                                            ?>

                                                                            <li>
                                                                                <a href=" <?php echo site_url('beneficio/detalle/'); ?> ">
                                                                                    <i class="glyphicon glyphicon-ok"></i> Publicar </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href=" <?php echo site_url('beneficio/detalle/'); ?> ">
                                                                                    <i class="glyphicon glyphicon-ban-circle"></i> Bloquear </a>
                                                                            </li>

                                                                            <?php
                                                                        } else { // PUBLICADA
                                                                            ?>
                                                                            <li>
                                                                                <a href="<?php echo site_url('beneficio/editar/'); ?> ">
                                                                                    <i class="glyphicon glyphicon-folder-open"></i> Guardar </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?php echo site_url('restriccion/index/'); ?>">
                                                                                    <i class="glyphicon glyphicon-ban-circle"></i> Bloquear </a>
                                                                            </li>
                                                                            <?php
                                                                        }
                                                                        ?>

                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php } else { ?>
                                                    <tr class="odd gradeX">
                                                        <td> No tiene noticia</td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->                                                


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
