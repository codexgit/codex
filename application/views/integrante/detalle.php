<!-- BEGIN TAB PORTLET-->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-anchor font-green-sharp"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Encuestas</span>
        </div>

    </div>
    <div class="portlet-body">       



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

                    <h4 class="form-section">3.1.- Antecedentes Personales</h4>
                    <!--/row-->
                    <div class="row">

                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Jefe de Familia -->
                            <div class="form-group">
                                <label class="control-label">¿Es Jefe(a) de Familia? </label>

                                <span class="help-block"> <?php echo $datos->fam_jefe_familia; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Es Carga -->
                            <div class="form-group">
                                <label class="control-label">¿Es carga familiar del trabajador? </label>

                                <span class="help-block"> <?php echo $datos->fam_es_carga; ?> </span>

                            </div>
                        </div>
                        <!--/span-->	


                        <!--/span-->
                        <div class="col-md-4"> <!-- Parentesco -->
                            <div class="form-group">
                                <label class="control-label">¿Cuál es el Parentesco con el Trabajador? </label>

                                <span class="help-block"> <?php echo $datos->fam_parentesco; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Ascendencia índígena --> 
                            <div class="form-group">
                                <label class="control-label">¿Usted o sus ascendientes tiene origen indígena? </label>

                                <span class="help-block"> <?php echo $datos->fam_ant_indigena; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Padre/Madre trabaja en establecimientos educacionales -->
                            <div class="form-group">
                                <label class="control-label">¿Su madre o padre trabaja en algún establecimiento educacional, municipal, particular subvencionado o de administración delegada? </label>

                                <span class="help-block"> <?php echo $datos->fam_padre_profesor; ?> </span>

                            </div>
                        </div>
                        <!--/span-->	
                    </div>	
                    <!-- END ROW -->



                </div>

                <div class="tab-pane" id="tab2"> <!-- SALUD -->
                    <h4 class="form-section">3.2.- Salud Familiar</h4>
                    <!--/row-->
                    <div class="row">

                        <!--/span-->
                        <div class="col-md-4"> <!-- Condición permanente -->
                            <div class="form-group">
                                <label class="control-label">¿Posee usted alguna de estas condiciones en forma permanente? </label>

                                <span class="help-block"> <?php echo $datos->fam_cond_perm; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Patologia GES -->
                            <div class="form-group">
                                <label class="control-label">¿Esta persona posee alguna patología GES? Orientar con anexo</label>

                                <span class="help-block"> <?php echo $datos->fam_ges; ?> </span>


                            </div>
                        </div>

                        <!-- span-->

                        <div class="col-md-4"> <!-- Previsión -->
                            <div class="form-group">
                                <label class="control-label">Hace uso de las garantías de atención que ofrece su sistema previsional de salud [FONASA/ISAPRE]?</label>

                                <span class="help-block"> <?php echo $datos->fam_usa_prevsalud; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                    </div>	
                    <!-- END ROW -->

                </div>
                <div class="tab-pane" id="tab3"> <!--TRABAJO -->

                    <h4 class="form-section">3.3.- Trabajo Familiar</h4>
                    <!--/row-->
                    <div class="row">

                        <!--/span-->
                        <div class="col-md-4"> <!-- Trabajando -->
                            <div class="form-group">
                                <label class="control-label">Si es mayor a 18 años, Actualmente, ¿está trabajando? </label>

                                <span class="help-block"> <?php echo $datos->fam_trabajando; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Relación Contractual -->


                            <div class="form-group">
                                <label class="control-label">Si está trabajando, ¿Cuál es su relación Contractual?</label>

                                <span class="help-block"> <?php echo $datos->fam_sit_contrato; ?> </span>


                            </div>

                        </div>
                        <!-- span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Situación no laboral -->

                            <div class="form-group">
                                <label class="control-label">Si no está trabajando, ¿Cuál es su situación actual?</label>

                                <span class="help-block"> <?php echo $datos->fam_sit_nolaboral; ?> </span>


                            </div>

                        </div>
                        <!-- span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- PENSIÓN -->

                            <div class="form-group">
                                <label class="control-label">Cesante </label>

                                <span class="help-block"> <?php echo $datos->fam_det_pension; ?> </span>


                            </div>	
                        </div>
                        <!--/span-->

                        <!--span-->
                        <div class="col-md-4"> <!-- Tiempo Cesantía en meses -->
                            <div id="meses_cesante">
                                <div class="form-group">
                                    <label class="control-label">Tiempo cesantía en meses </label>

                                    <span class="help-block"> <?php echo $datos->fam_meses_cesante; ?> </span>

                                </div>
                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Tiene Iniciación de Actividades en el SII -->

                            <div class="form-group">
                                <label class="control-label">Tiene Iniciación de Actividades en el SII</label>

                                <span class="help-block"> <?php echo $datos->fam_inicio_activ; ?> </span>


                            </div>

                        </div>
                        <!-- span-->


                    </div>	
                    <!-- END ROW -->




                </div>
                <div class="tab-pane" id="tab4"> <!-- EDUCACIÓN -->


                    <h4 class="form-section">3.4.- Educacion Familiar</h4>
                    <!--/row-->
                    <div class="row">
                        <!--span-->
                        <div class="col-md-4"> <!-- Asiste o está matriculado -->
                            <div class="form-group">
                                <label class="control-label">¿Asiste actualmente o está matriculado en algún establecimiento educacional o pre escolar? </label>

                                <span class="help-block"> <?php echo $datos->fam_matriculado; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <!--span-->
                        <div class="col-md-4"> <!-- Nivel Educacional Actual -->
                            <div class="form-group">
                                <label class="control-label">Nivel Educacional Actual </label>

                                <span class="help-block"> <?php echo $datos->fam_nivel_educ; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <div class="col-md-4"> <!-- Tipo de Establecimiento -->
                            <div class="form-group">
                                <label class="control-label">Tipo de Establecimiento </label>

                                <span class="help-block"> <?php echo $datos->fam_tipo_est; ?> </span>

                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Ultimo curso aprobado -->
                            <div class="form-group">
                                <label class="control-label">Último Curso Aprobado </label>

                                <span class="help-block"> <?php echo $datos->fam_ult_curso; ?> </span>


                            </div>
                        </div>	
                        <!--span ultimo curso -->

                        <!--/span-->
                        <div class="col-md-4"> <!-- Último año calendario -->
                            <div class="form-group">
                                <label class="control-label">¿El último año calendario que estudió fué?</label>

                                <span class="help-block"> <?php echo $datos->fam_fin_estudios; ?> </span>


                            </div>
                        </div>

                        <!-- span-->

                        <div class="col-md-4"> <!-- Rindió PSU -->
                            <div class="form-group">
                                <label class="control-label">Rindió PSU</label>

                                <span class="help-block"> <?php echo $datos->fam_rindio_psu; ?> </span>


                            </div>
                        </div>

                        <!-- span-->

                        <!-- span-->

                        <div class="col-md-4"> <!-- Año PSU -->
                            <div id="anio_psu">
                                <div class="form-group">
                                    <label class="control-label">¿En qué año?</label>

                                    <span class="help-block"> <?php echo $datos->fam_anio_psu; ?> </span>


                                </div>
                            </div>
                        </div>

                        <!-- span-->

                        <!-- span-->

                        <div class="col-md-4"> <!-- Puntaje PSU -->
                            <div id="puntaje_psu">
                                <div class="form-group">
                                    <label class="control-label">¿Qué Puntaje obtuvo?</label>

                                    <span class="help-block"> <?php echo $datos->fam_puntaje_psu; ?> </span>


                                </div>
                            </div>
                        </div>

                        <!-- span-->

                        <!-- span-->

                        <div class="col-md-4"> <!-- Promedio Notas Último año -->

                            <div class="form-group">
                                <label class="control-label">¿Cuál fué su promedio de Notas último año cursado?</label>

                                <span class="help-block"> <?php echo $datos->fam_ult_promedio; ?> </span>

                            </div>

                        </div>

                        <!-- span-->


                        <!--/span-->
                        <div class="col-md-4"> <!-- Financiamiento -->

                            <div class="form-group"> 

                                <label class="control-label">Si actualmente está estudiando Educación Superior, ¿Cómo financia su carrera? </label>

                                <span class="help-block"> <?php echo $datos->fam_fin_educsup; ?> </span>

                                <!--/span-->




                            </div>   
                            <!-- row--> 
                        </div>	
                        <!--span-->
                    </div>
                </div>	
                <div class="tab-pane" id="tab5"> <!-- INGRESOS -->                    	   

                    <h4 class="form-section">3.5.- Ingresos Familiar</h4>
                    <!--/row-->
                    <div class="row">

                        <!--span container-->
                        <div class ="container-fluid">  <!-- Ingreso Bruto-->
                            <h3> Detalle su Ingreso Bruto en los últimos 3 Meses (Mes 3 = Ingreso mes anterior a la encuesta) </h3>
                            <!--span-->
                            <div class="col-md-4"> <!-- Ingreso Bruto Mes 3 -->
                                <div class="form-group">
                                    <label class="control-label">Mes 3</label>

                                    <span class="help-block"> <?php echo $datos->fam_ibruto_mes3; ?> </span>


                                </div>
                            </div>
                            <!--span-->

                            <!--span-->
                            <div class="col-md-4"> <!-- Ingreso Bruto Mes 2 -->
                                <div class="form-group">
                                    <label class="control-label">Mes 2</label>

                                    <span class="help-block"> <?php echo $datos->fam_ibruto_mes2; ?> </span>


                                </div>
                            </div>
                            <!--span-->
                            <!--span-->
                            <div class="col-md-4"> <!-- Ingreso Bruto Mes 1 -->
                                <div class="form-group">
                                    <label class="control-label">Mes 1</label>

                                    <span class="help-block"> <?php echo $datos->fam_ibruto_mes1; ?> </span>


                                </div>
                            </div>
                            <!--span-->

                        </div>	
                        <!--span container-->

                        <!--span container-->
                        <div class ="container-fluid"> <!-- Ingreso Líquido -->
                            <h3> Detalle su Ingreso Líquido en los últimos 3 Meses (Mes 3 = Ingreso mes anterior a la encuesta) </h3>
                            <!--span-->
                            <div class="col-md-4"> <!-- Ingreso Líquido Mes 3 -->
                                <div class="form-group">
                                    <label class="control-label">Mes 3</label>

                                    <span class="help-block"> <?php echo $datos->fam_iliquido_mes3; ?> </span>


                                </div>
                            </div>
                            <!--span-->

                            <!--span-->
                            <div class="col-md-4"> <!-- Ingreso Líquido Mes 2 -->
                                <div class="form-group">
                                    <label class="control-label">Mes 2</label>

                                    <span class="help-block"> <?php echo $datos->fam_iliquido_mes2; ?> </span>


                                </div>
                            </div>
                            <!--span-->

                            <!--span-->
                            <div class="col-md-4"> <!-- Ingreso Líquido Mes 1 -->
                                <div class="form-group">
                                    <label class="control-label">Mes 1</label>

                                    <span class="help-block"> <?php echo $datos->fam_iliquido_mes1; ?> </span>


                                </div>
                            </div>
                            <!--span-->

                        </div>	
                        <!--span container-->

                        <!--span container-->
                        <div class ="container-fluid"> <!-- Pensiones -->

                            <!--/span-->
                            <div class="col-md-4"> <!-- Booleano Pensiones -->
                                <div class="form-group">
                                    <label class="control-label">¿Recibe usted Pensiones o Jubilaciones? </label>

                                    <span class="help-block"> <?php echo $datos->fam_rec_pension; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div id="grupo_ingresos_pension">

                                <!--span-->
                                <div class="col-md-4"> <!-- Pensión Mes 3 -->
                                    <div id="ingresos_pension3">
                                        <h3> ¿A cuánto asciende al mes? </h3>
                                        <div class="form-group">
                                            <label class="control-label">Mes 3</label>

                                            <span class="help-block"> <?php echo $datos->fam_pension_mes3; ?> </span>


                                        </div>
                                    </div>
                                </div>
                                <!--span-->

                                <!--span-->
                                <div class="col-md-4"> <!-- Pensión Mes 2 -->
                                    <div id="ingresos_pension2">
                                        <h3> ¿A cuánto asciende al mes? </h3>
                                        <div class="form-group">
                                            <label class="control-label">Mes 2</label>

                                            <span class="help-block"> <?php echo $datos->fam_pension_mes2; ?> </span>

                                        </div>
                                    </div>
                                </div>
                                <!--span-->

                                <!--span-->
                                <div class="col-md-4"> <!-- Pensión Mes 1 -->
                                    <div id="ingresos_pension1">
                                        <h3> ¿A cuánto asciende al mes? </h3>
                                        <div class="form-group">
                                            <label class="control-label">Mes 1</label>

                                            <span class="help-block"> <?php echo $datos->fam_pension_mes1; ?> </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--span-->

                        </div>	
                        <!--span container-->

                        <!--span container-->
                        <div class ="container-fluid"> <!-- Otros (Pensión de Alimentos) -->
                            <!--/span-->
                            <div class="col-md-4"> <!-- Booleano Pensiones -->
                                <div class="form-group">
                                    <label class="control-label">¿Tiene algún otro ingreso económico por concepto de SUF, Pensión de Alimentos o por trabajo independiente? </label>

                                    <span class="help-block"> <?php echo $datos->fam_rec_otros; ?> </span>

                                </div>
                            </div>
                            <!--/span-->
                            <div id="grupo_ingresos_otros">

                                <!--span-->
                                <div id="ingresos_otros3">
                                    <h3> ¿A cuánto asciende al mes? </h3>
                                    <div class="col-md-4"> <!-- Ingreso Otro Mes 3 -->
                                        <div class="form-group">
                                            <label class="control-label">Mes 3</label>

                                            <span class="help-block"> <?php echo $datos->fam_otros_mes3; ?> </span>

                                        </div>
                                    </div>
                                </div>
                                <!--span-->

                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Otro Mes 2 -->
                                    <div id="ingresos_otros2">
                                        <h3> ¿A cuánto asciende al mes? </h3>
                                        <div class="form-group">
                                            <label class="control-label">Mes 2</label>

                                            <span class="help-block"> <?php echo $datos->fam_otros_mes2; ?> </span>


                                        </div>
                                    </div>
                                </div>
                                <!--span-->
                                <!--span-->
                                <div class="col-md-4"> <!-- Ingreso Otro Mes 1 -->
                                    <div id="ingresos_otros1">
                                        <h3> ¿A cuánto asciende al mes? </h3>
                                        <div class="form-group">
                                            <label class="control-label">Mes 1</label>

                                            <span class="help-block"> <?php echo $datos->fam_otros_mes1; ?> </span>


                                        </div>
                                    </div>
                                    <!--span-->
                                </div>
                            </div>	
                        </div>
                        <!--span container-->

                    </div>	
                    <!-- END ROW -->      
                </div>


            </div>
        </div>

        <div class="form-actions right">
            <!--<button type="button" class="btn default">Volver</button>-->
            <a href="<?php echo site_url('integrante/listado/'); ?>" class="btn default" role="button">Volver</a>
            
        </div>
        <input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idencuesta; ?>">
        <!--<input type="hidden" name="hdn_encuestaid" id="hdn_encuestaid" value="<?php echo $idfamilia_datos; ?>"> -->

    </div>
</div>	
<p> &nbsp; </p>
<p> &nbsp; </p>										












