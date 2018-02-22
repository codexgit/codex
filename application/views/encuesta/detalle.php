<div class="col-md-12">
    <div class="portlet light portlet-fit ">
        <div class="portlet-body">
            <div class="mt-element-step">
                <div class="row step-thin">
                    <div class="col-md-4 bg-grey mt-step-col">
                        <div class="mt-step-number bg-white font-grey">1</div>
                        <div class="mt-step-title uppercase font-grey-cascade">Trabajador</div>
                        <div class="mt-step-content font-grey-cascade">Antecedentes personales</div>
                    </div>
                    <div class="col-md-4 bg-grey mt-step-col">
                        <div class="mt-step-number bg-white font-grey">2</div>
                        <div class="mt-step-title uppercase font-grey-cascade">Vivienda</div>
                        <div class="mt-step-content font-grey-cascade">Servicios y subsidios</div>
                    </div>
                    <div class="col-md-4 bg-grey mt-step-col active">
                        <div class="mt-step-number bg-white font-grey">3</div>
                        <div class="mt-step-title uppercase font-grey-cascade">Familia</div>
                        <div class="mt-step-content font-grey-cascade">Datos Personales</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- BEGIN TAB PORTLET-->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-anchor font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Encuestas</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;"> Option 1</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="javascript:;">Option 2</a>
                    </li>
                    <li>
                        <a href="javascript:;">Option 3</a>
                    </li>
                    <li>
                        <a href="javascript:;">Option 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <!-- BEGIN FORM-->
        <?php
        $attributes = array('class' => 'horizontal-form');
        echo form_open('integrante/datos/' . $idencuesta . '/' . $idfamilia_datos, $attributes);
        ?>
        <div class="form-body">   

            <div class="row"> <!-- TRABAJADOR DATOS-->


                <div class="col-md-4"> <!-- RUN Trabajador -->
                    <div class="form-group ">
                        <label class="control-label">RUN </label>
                        <span class="help-block"> <?php echo $detencuesta->enc_run . '-' . $detencuesta->enc_dv; ?> </span>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-4"> <!-- Nombres Trabajador -->
                    <div class="form-group ">
                        <label class="control-label">Nombres </label>
                        <span class="help-block"> <?php echo $detencuesta->enc_nombres; ?> </span>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-4"> <!-- Apellidos Trabajador -->
                    <div class="form-group ">
                        <label class="control-label">Apellidos </label>
                        <span class="help-block"> <?php echo $detencuesta->enc_apellido_p . ' ' . $detencuesta->enc_apellido_m; ?> </span>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/span-->


            <p> Favor ir rellenando los campos pestaña por pestaña </p>

            <div class="tabbable tabbable-tabdrop">

                <ul class="nav nav-tabs">
                    <li class="active">												
                        <a href="#tab1" data-toggle="tab">Datos Personales</a>													 
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">Salud</a>													
                    </li>
                    <li>
                        <a href="#tab3" data-toggle="tab">Trabajo</a>
                    </li>
                    <li>
                        <a href="#tab4" data-toggle="tab">Educación</a>
                    </li>

                    <li>
                        <a href="#tab5" data-toggle="tab">Ingresos</a>
                    </li>

                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="tab1"> <!-- DATOS PERSONALES -->

                        <h4 class="form-section">1.1.- Antecedentes Personales</h4>

                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6"> <!-- Dirección -->
                                <div class="form-group">                                                                                    
                                    <label class="control-label">Dirección, calle </label>

                                    <span class="help-block"> <?php echo $trabajador->trab_dir_calle; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6"> <!-- Numero Domicilio -->
                                <div class="form-group">
                                    <label class="control-label">Número/Block/Depto.</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_dir_numero; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6"> <!-- Sector -->
                                <div class="form-group">
                                    <label class="control-label">Población/Sector </label>

                                    <span class="help-block"> <?php echo $trabajador->trab_dir_sector; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3"> <!-- Teléfono fijo -->
                                <div class="form-group">
                                    <label class="control-label">Teléfono fijo </label>

                                    <span class="help-block"> <?php echo $trabajador->trab_tel_fijo; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3"> <!-- Celular -->
                                <div class="form-group">
                                    <label class="control-label">Teléfono móvil</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_tel_movil; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                        </div>
                        <!--/row-->                                                       
                        <div class="row">
                            <!--span-->
                            <div class="col-md-4"> <!-- Fecha de Nacimiento -->
                                <div class="form-group">
                                    <label class="control-label">Fecha de Nacimiento</label>



                                    <span class="help-block"> <?php echo $trabajador->trab_fec_nacimiento; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4"> <!-- Género -->
                                <div class="form-group">
                                    <label class="control-label">Género</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_genero; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4"> <!-- Jefe Familia -->
                                <div class="form-group">
                                    <label class="control-label">¿Es usted jefe de familia? </label>

                                    <span class="help-block"> <?php echo $trabajador->trab_jefe_familia; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->                    
                        <div class="row">
                            <!--/span-->
                            <div class="col-md-4"> <!-- Ascendencia Indígena -->
                                <div class="form-group">
                                    <label class="control-label">¿Usted o sus ascendientes tiene origen indígena?</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_ant_indigenas; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <div class="col-md-4"> <!-- Estado Civil -->
                                <div class="form-group">
                                    <label class="control-label">¿Cuál es su estado civil o conyugal actual?</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_est_civil; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4"> <!-- Nacionalidad -->
                                <div class="form-group">
                                    <label class="control-label">¿Su nacionalidad es chilena?</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_nacionalidad; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->

                        <div class="row">
                            <!--span-->
                            <div class="col-md-4"> <!-- Previsión Salud -->
                                <div class="form-group">
                                    <label class="control-label">Previsión de salud</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_prev_salud; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4"> <!-- Tramo -->
                                <div class="form-group">
                                    <label class="control-label">Tramo / Isapre</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_prev_salud_d; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4"> <!-- Previsión Social -->
                                <div class="form-group">
                                    <label class="control-label">Previsión social</label>

                                    <span class="help-block"> <?php echo $trabajador->trab_prev_social; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                        </div>
                        <!--/row-->       
                        <!-- END ROW -->      
                    </div> <!-- termina el nav-->
                    <div class="tab-pane" id="tab2"> <!-- EDUCACIÓN -->


                        <h4 class="form-section">1.2.- Educacion </h4>
                        <!--/row-->
                        <div class="row">


                            <!--span-->
                            <div class="col-md-4"> <!-- Nivel Educacional Actual -->
                                <div class="form-group">
                                    <label class="control-label">Nivel Educacional Actual</label>

                                    <span class="help-block"> <?php echo $educacion->edu_nivel_esc; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <div class="col-md-4"> <!-- Tipo de Establecimiento -->
                                <div class="form-group">
                                    <label class="control-label">Tipo de Establecimiento</label>


                                    <span class="help-block"> <?php echo $educacion->edu_tipo_est; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Ultimo curso aprobado -->
                                <div class="form-group">
                                    <label class="control-label">Último Curso Aprobado </label>



                                    <span class="help-block"> <?php echo $educacion->edu_ult_curso; ?> </span>

                                </div>
                            </div>	
                            <!--span ultimo curso -->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Año egreso -->
                                <div class="form-group">
                                    <label class="control-label">¿El último año calendario que estudió fué?</label>

                                    <span class="help-block"> <?php echo $educacion->edu_anio_egreso; ?> </span>


                                </div>
                            </div>

                            <!-- span-->

                            <div class="col-md-4"> <!-- Estudiando -->
                                <div class="form-group">
                                    <label class="control-label">Rindió PSU</label>

                                    <span class="help-block"> <?php echo $educacion->edu_estudiando; ?> </span>


                                </div>
                            </div>

                            <!-- span-->

                            <!-- span-->

                            <div class="col-md-4"> <!-- Becas -->
                                <div id="anio_psu">
                                    <div class="form-group">
                                        <label class="control-label">¿En qué año?<span class="required" aria-required="true"> * </span></label>

                                        <span class="help-block"> <?php echo $educacion->edu_becas; ?> </span>


                                    </div>
                                </div>
                            </div>

                            <!-- span-->                        

                        </div>
                    </div>

                    <div class="tab-pane" id="tab3"> <!-- SALUD -->
                        <h4 class="form-section">1.3.- Salud</h4>
                        <!--/row-->
                        <div class="row">
                            <!--/span-->
                            <div class="col-md-4"> <!-- Cont Menores -->
                                <div class="form-group">
                                    <label class="control-label">¿Llevan al menor a control? </label>

                                    <span class="help-block"> <?php echo $salud->sad_cont_menores; ?> </span>

                                </div>
                            </div>
                            <!--/span-->



                            <!--/span-->
                            <div class="col-md-4"> <!-- Problemas con drogas -->
                                <div class="form-group">
                                    <label class="control-label">¿Algún integrante de la familia tiene problemas con drogas, trabajo, vecinos o dentro de la familia? </label>

                                    <span class="help-block"> <?php echo $salud->sad_cons_drogas; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Edad dicha persona -->
                                <div class="form-group">
                                    <label class="control-label">¿Edad de dicha persona? </label>

                                    <span class="help-block"> <?php echo $salud->sad_cons_drogas_d; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Patologia GES -->
                                <div class="form-group">
                                    <label class="control-label">¿Esta persona posee alguna patología GES? Orientar con anexo</label>

                                    <span class="help-block"> <?php echo $salud->sad_pat_ges; ?> </span>


                                </div>
                            </div>

                            <!-- span-->

                            <div class="col-md-4"> <!-- Previsión -->
                                <div class="form-group">

                                    <span class="help-block"> <?php echo $salud->sad_usa_prevision; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Condición permanente -->
                                <div class="form-group">
                                    <label class="control-label">¿Posee usted alguna de estas condiciones en forma permanente? </label>

                                    <span class="help-block"> <?php echo $salud->sad_cond_permanente; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                        </div>	
                        <!-- END ROW -->

                    </div>
                    <div class="tab-pane" id="tab4"> <!--VIVIENDA -->


                        <h4 class="form-section">2.1.- De la Vivienda</h4>
                        <!--/row-->

                        <div class="row">
                            <!--/span-->
                            <div class="col-md-4"> <!-- Tenencia de la Vivienda -->
                                <div class="form-group">
                                    <label class="control-label">Tenencia de Vivienda</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_tenencia; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Tenencia del Sitio -->
                                <div class="form-group">
                                    <label class="control-label">Tenencia del Sitio</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_sitio; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Subsidio Habitacional -->
                                <div class="form-group">
                                    <label class="control-label">¿Está Postulando a Subsidio Habitacional?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_post_subsidio; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Libreta de Ahorros -->
                                <div class="form-group">
                                    <label class="control-label">¿Tiene Libreta de ahorro para la vivienda?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_libreta; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-3"> <!-- Año (opcional)-->
                                <div class="form-group">
                                    <label class="control-label">Señale año de apertura</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_libreta_anio; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-3"> <!-- Monto ahorro (opcional) -->
                                <div class="form-group">
                                    <label class="control-label">Monto Ahorro</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_monto_ahorro; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Principal ocupante -->
                                <div class="form-group">
                                    <label class="control-label">En su familia, ¿Es la principal ocupante de la vivienda? </label>

                                    <span class="help-block"> <?php echo $vivienda->viv_fam_ocupante; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-3"> <!-- Número de personas -->
                                <div class="form-group">
                                    <label class="control-label">Número de personas que habitan la vivienda</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_num_personas; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-3"> <!-- Número de dormitorios -->
                                <div class="form-group">
                                    <label class="control-label">Número de piezas que usan como dormitorio</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_dormitorios; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <!-- DE LOS SERVICIOS BASICOS -->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Agua -->
                                <div class="form-group">
                                    <label class="control-label">¿De dónde proviene el agua de la vivienda?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_prov_agua; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Subsidio Agua -->
                                <div class="form-group">
                                    <label class="control-label">¿Tiene Subsidio de Agua Potable?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_sub_agua; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Energía eléctrica -->
                                <div class="form-group">
                                    <label class="control-label">¿Cuál es el Sistema de Energía eléctrica de la vivienda?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_ener_electrica; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Eliminación de excretas -->
                                <div class="form-group">
                                    <label class="control-label">¿Cuál es el Sistema de Eliminación de excretas de la vivienda?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_elim_excretas; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Registro Social de hogares -->
                                <div class="form-group">
                                    <label class="control-label">¿Se encuentra incorporado en el Registro Social de Hogares?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_reg_hogares; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Tramo grupo familiar -->
                                <div class="form-group">
                                    <label class="control-label">¿Cuál es el tramo en el que se encuentra su grupo familiar?</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_tramo_grupo; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Subsidio Vivienda -->
                                <div class="form-group">
                                    <label class="control-label">Subsidio Vivienda</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_ben_subsidio; ?> </span>

                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Otros subsidio -->
                                <div class="form-group">
                                    <label class="control-label">Otro Subsidio</label>

                                    <span class="help-block"> <?php echo $vivienda->viv_otro_subsidio; ?> </span>

                                </div>
                            </div>
                
                        </div>
                        <!-- END ROW -->
                    </div> <!-- fin nav-->     
                </div>
            </div>

            <div class="form-actions right">
                <!--<button type="button" class="btn default">Volver</button>-->
                <a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
                <button type="submit" class="btn blue">
                    <i class="fa fa-check"></i> Siguiente</button>
            </div>
            <input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
            <!--<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idfamilia_datos; ?>"> -->
            <?php echo form_close(); ?>
        </div>	
    </div>
</div>	
<p> &nbsp; </p>
<p> &nbsp; </p>										












