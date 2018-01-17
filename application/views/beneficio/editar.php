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
                                            if ($mensaje != NULL && $mensaje != ""){
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
                                                                        echo form_open('beneficio/editar', $attributes);
                                                                    ?>
                                                                        <div class="form-body">
                                                                            <h3 class="form-section">Datos Generales</h3>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group <?php if (form_error('sel_categoria') != ""){echo "has-error";} ?>">
                                                                                        <label class="control-label">Categoría <span class="required" aria-required="true"> * </span></label>
                                                                                        <select class="form-control" name="sel_categoria" id="sel_categoria">
                                                                                            <option value="">Seleccione una opción</option>
																							
																							<?php 
                                                                                                foreach ($lstcategorias as $categoria):
                                                                                                    if ($categoria['cat_beneficio_id'] == $idcategoria){
                                                                                                        echo "<option value='".$categoria['cat_beneficio_id']."' selected>".$categoria['cat_benef_nombre']."</option>";
                                                                                                    }
                                                                                                    else{
                                                                                                        echo "<option value='".$categoria['cat_beneficio_id']."'>".$categoria['cat_benef_nombre']."</option>";                             
                                                                                                    }
                                                                                                endforeach;
                                                                                            ?>  
																							
																							
                                                                                        </select>
																						<?php
                                                                                        if (form_error('sel_categoria') != NULL){
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
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Subcategoría </label>
                                                                                        <span class="help-block"> Educación Básica </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-9">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Nombre <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" id="firstName" class="form-control" placeholder="" value="Beca Indígena">
                                                                                        <!--<span class="help-block"> This is inline help </span>-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">A&ntilde;o <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" id="lastName" class="form-control" placeholder="" value="2017">
                                                                                        <!--<span class="help-block"> This field has error. </span>-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Inicio vigencia <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" id="lastName" class="form-control" placeholder="" value="01/06/2016">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Fin vigencia <span class="required" aria-required="true"> * </span></label>
                                                                                        <input type="text" id="lastName" class="form-control" placeholder="" value="31/01/2017">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/row-->                                                                            
                                                                            <div class="row">
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Inicio postulación</label>
                                                                                        <input type="text" id="lastName" class="form-control" placeholder="" value="01/07/2016">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Fin postulación</label>
                                                                                        <input type="text" id="lastName" class="form-control" placeholder="" value="30/11/2016">
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
