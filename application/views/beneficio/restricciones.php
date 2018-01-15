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
                                                <div class="col-md-12 col-sm-12">

                                                            <div class="portlet box red">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-list"></i>Editar Restricciones 
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
                                                                        <div class="form-body">
                                                                            <h3 class="form-section">Datos Generales</h3>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Categoría</label>
                                                                                        <span class="help-block"> Educación </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Subcategoría</label>
                                                                                        <span class="help-block"> Educación Básica </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Nombre</label>
                                                                                        <span class="help-block"> Beca Indígena </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">A&ntilde;o</label>
                                                                                        <span class="help-block"> 2017 </span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--/span-->
                                                                            </div>
                                                                            <!--/row-->
                                                                            <div class="row">
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Inicio vigencia</label>
                                                                                        <span class="help-block"> 01-06-2016 </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Fin vigencia</label>
                                                                                        <span class="help-block"> 31-01-2017 </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/row-->                                                                            
                                                                            <div class="row">
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Inicio postulación</label>
                                                                                        <span class="help-block"> 01-07-2016 </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <div class="form-group">
                                                                                        <label>Fin postulación</label>
                                                                                        <span class="help-block"> 30-11-2016 </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/row-->                                                                            
                                                                            <h3 class="form-section">Restricciones</h3>
                                                                            <div class="row">
                                                                                <div class="col-md-12 ">
                                                                                    <div class="form-group">
                                                                                    
								                                                        <form action="#" class="mt-repeater form-horizontal">
                                                                                    	
																						<div data-repeater-list="group-a">
																							<div data-repeater-item class="mt-repeater-item">
																								<!-- jQuery Repeater Container -->
																								<div class="mt-repeater-input">
																									<label class="control-label">Tipo <span class="required" aria-required="true"> * </span></label>
																									<br/>
																									<select name="select-input" class="form-control">
																										<option value="A">Igual a</option>
																										<option value="B">Mayor a</option>
																										<option value="C">Mayor o igual a</option>
																										<option value="D">Menor a</option>
																										<option value="E">Menor o igual a</option>
																										<option value="F">Seleccionable</option>
																									</select>
																								</div>
																								<div class="mt-repeater-input">
																									<label class="control-label">Campo <span class="required" aria-required="true"> * </span></label>
																									<br/>
																									<select name="select-input" class="form-control">
																										<option value="A">Estudiante</option>
																										<option value="B">Último año aprobado</option>
																										<option value="C">Ingreso per cápita</option>
																										<option value="D">Cantidad integrantes</option>
																										<option value="E">Tipo educación</option>
																										<option value="F">Promedio</option>
																										<option value="G">Hijo prof. de educ.</option>
																										<option value="H">Jefe de hogar</option>
																										<option value="H">Edad</option>
																									</select>
																								</div>
																								<div class="mt-repeater-input">
																									<label class="control-label">Valor</label>
																									<br/>
																									<input type="text" placeholder="" class="form-control" />
																								</div>
																								<div class="mt-repeater-input">
																									<label class="control-label">Opciones</label>
																									<br/>
																									<select name="select-input" class="form-control">
																										<option value="A">Municipal</option>
																										<option value="B">Subvencionada</option>
																										<option value="C">Particular</option>
																									</select>
																								</div>
																								<div class="mt-repeater-input">
																									<label class="control-label">Grupo</label>
																									<br/>
																									<input type="text" placeholder="" class="form-control" />
																								</div>
																								<div class="mt-repeater-input">
																									<a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete">
																										<i class="fa fa-close"></i> Borrar</a>
																								</div>
																							</div>
																						</div>
																						<a href="javascript:;" data-repeater-create class="btn btn-success mt-repeater-add">
																							<i class="fa fa-plus"></i> Agregar</a>
																							
																						</form>	
																							
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/row-->                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        <div class="form-actions right">
		                                                                    <form action="#">
                                                                        
	                                                                            <!--<button type="button" class="btn default">Volver</button>-->
	                                                                            <a href="<?php echo site_url('beneficio/listado'); ?>" class="btn default" role="button">Volver</a>
	                                                                            <button type="submit" class="btn red">
    	                                                                            <i class="fa fa-check"></i> Guardar</button>
	                                                                		</form>
                                                                        </div>
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
