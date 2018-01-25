
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
                                <div class="portlet box red">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-heart"></i>Listado de Beneficios
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
                                                    <th> Nombre</th>
                                                    <th> Subcategor&iacute;a </th>
                                                    <th> A&ntilde;o </th>
                                                    <th> Inicio Postulación </th>
                                                    <th> Fin Postulación </th>
                                                    <th> Estado </th>
                                                    <th> Acciones </th>                                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- BENEFICIOSS -->
                                                <?php foreach ($lstbeneficios as $beneficio): ?> 
                                                    <tr class="odd gradeX">
                                                        <td> <!--Beca Ind&iacute;gena--> 			<?php echo $beneficio['benef_nombre']; ?> </td>
                                                        <td> <!--Educaci&oacute;n B&aacute;sica-->  <?php echo $beneficio['subcat_benef_nombre']; ?> </td>
                                                        <td> <!--2017-->							<?php echo $beneficio['benef_anio']; ?> </td>
                                                        <td> <!--01-07-2016-->						<?php echo mdate('%d-%m-%Y ', $beneficio['benef_fec_iniciopos']); ?> </td>
                                                        <td> <!--30-11-2016-->						<?php echo mdate('%d-%m-%Y ', $beneficio['benef_fec_finpos']); ?> </td>
                                                        <td>
                                                            <?php
                                                            //CONTROL DEL ESTADO
                                                            if ($beneficio['benef_estado'] == 3) {
                                                                echo '<span class="label label-sm label-danger"> Bloqueado </span>';
                                                            } elseif ($beneficio['benef_estado'] == 2) {
                                                                echo '<span class="label label-sm label-warning"> En procesamiento </span>';
                                                            } else {
                                                                echo '<span class="label label-sm label-success"> Activa </span>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">

                                                                <button class="btn btn-xs default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true"> 
                                                                    Acciones
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-left" role="menu">
                                                                    <?php
                                                                    if ($beneficio['benef_estado'] == 3) { //DESACTIVADO 
                                                                        ?>
                                                                        <li>
                                                                            <a href="<?php echo site_url('beneficio/detalle/' . $beneficio['beneficio_id']); ?>">
                                                                                <i class="icon-book-open"></i> Detalle </a>
                                                                        </li>
                                                                        
                                                                        <li>
                                                                            <a href=" <?php echo site_url('beneficio/activar/' . $beneficio['beneficio_id']); ?> ">

                                                                                <i class="icon-action-redo"></i> Activar </a>
                                                                        </li>

                                                                        <?php
                                                                    } elseif ($beneficio['benef_estado'] == 2) { //EN PROCESAMIENTO
                                                                        ?>

                                                                        <li>
                                                                            <a href=" <?php echo site_url('beneficio/detalle/' . $beneficio['beneficio_id']); ?> ">
                                                                                <i class="icon-book-open"></i> Detalle </a>
                                                                        </li>
                                                                        
                                                                        <?php
                                                                    } else { //ACTIVADO
                                                                        ?>
                                                                        <li>
                                                                            <a href="<?php echo site_url('beneficio/editar/' . $beneficio['beneficio_id']); ?> ">
                                                                                <i class="icon-pencil"></i> Editar datos </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="<?php echo site_url('restriccion/index/' . $beneficio['beneficio_id']); ?>">
                                                                                <i class="icon-list"></i> Editar restricciones </a>
                                                                        </li>
                                                                        <!--<li>
                                                                            <a href="<?php echo site_url('beneficio/en_procesamiento/' . $beneficio['beneficio_id']); ?>">
                                                                                <i class="icon-refresh"></i> En procesamiento </a>
                                                                        </li>-->
                                                                        <li>
                                                                            <a href="<?php echo site_url('beneficio/desactivar/' . $beneficio['beneficio_id']); ?>">
                                                                                <i class="icon-action-undo"></i> Bloquear </a>
                                                                        </li>
                                                                        <?php
                                                                    }
                                                                    ?>

                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
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
