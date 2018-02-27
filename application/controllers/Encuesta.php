<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Encuesta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('array');

        if ($this->session->userdata('usrsesion') == NULL) {
            redirect('/inicio/index', 'refresh');
        } else {
            $sesionusuario = $this->session->userdata('usrsesion');
            if (element('usrperfil', $sesionusuario) == 1) {
                redirect('/administrador/index', 'refresh');
            } else if (element('usrperfil', $sesionusuario) == 2) {
                redirect('/analista/index', 'refresh');
            }
        }
    }

    public function empresas() {

        $sesionusuario = $this->session->userdata('usrsesion');
        $data['sesionusuario'] = $sesionusuario;

        $this->load->model('usuario_model');
        $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

        $data['mensaje'] = "";
        $data['divtipo'] = "alert alert-success alert-dismissable";

        $this->load->view('recopilador/header', $data);
        $this->load->view('encuesta/empresas', $data);
        $this->load->view('recopilador/footer', $data);
    }

    public function listado($idfilempresa = NULL) {


        $sesionusuario = $this->session->userdata('usrsesion');
        $data['sesionusuario'] = $sesionusuario;


        if (isset($idfilempresa) && $idfilempresa > 0) {

            $data['idfilempresa'] = $idfilempresa;
            $this->load->model('filialempresa_model');
            //$idencuesta = $this->filialempresa_model->get_id_encuesta_by_filialempresa_id($idfilempresa);			
            $data['detfilempresa'] = $this->filialempresa_model->get_filialempresa_by_id($idfilempresa);

            $this->load->model('encuesta_model');
            $data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'], $idfilempresa);


            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/listado', $data);
            $this->load->view('recopilador/footer', $data);
        } else {

            $this->load->model('usuario_model');
            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

            $data['mensaje'] = "Ocurrió un error al procesar la solicitud listado";
            $data['divtipo'] = "alert alert-danger alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function detalle($idencuesta) {
        $sesionusuario = $this->session->userdata('usrsesion');
        $data['sesionusuario'] = $sesionusuario;
        $this->load->model('encuesta_model');

        if (isset($idencuesta) && $idencuesta > 0) {
            $this->load->model('usuario_model');
            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);


            //$data['trabajador']=$this->encuesta_model->get_trabajador_by_id($idencuesta);
            $data['trabajador'] = $this->encuesta_model->get_encuesta_trabajador_by_id($idencuesta);
            $data['educacion'] = $this->encuesta_model->get_encuesta_educacion_by_id($idencuesta);
            $data['salud'] = $this->encuesta_model->get_encuesta_salud_by_id($idencuesta);
            $data['vivienda'] = $this->encuesta_model->get_encuesta_vivienda_by_id($idencuesta);
            /* $data['educacion'] = $this->encuesta_model->get_educacion_by_id($idencuesta);
              $data['salud'] = $this->encuesta_model->get_salud_by_id($idencuesta);
              $data['vivienda'] = $this->encuesta_model->get_vivienda_by_id($idencuesta);
             */
            $data['idencuesta'] = $idencuesta;
            $this->load->model('encuesta_model');
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
            //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idfilempresa);
            $this->load->model('integrante_model');

            $data['lstintegrantes'] = $this->integrante_model->get_familia_by_id($idencuesta);

            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/detalle', $data);
            $this->load->view('recopilador/footer', $data);
        } else {

            $this->load->model('usuario_model');
            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function nueva($idfilempresa) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');
        $this->load->helper('date');

        $sesionusuario = $this->session->userdata('usrsesion');
        $data['sesionusuario'] = $sesionusuario;
        $data['lstregiones'] = $this->param_model->get_regiones();

        if (isset($idfilempresa) && $idfilempresa > 0) {

            $data['idfilempresa'] = $idfilempresa;

            $this->load->model('filialempresa_model');
            $data['detfilempresa'] = $this->filialempresa_model->get_filialempresa_by_id($idfilempresa);


            if ($this->input->post('hdn_filempresaid') != "" && $this->input->post('hdn_filempresaid') > 0) {
                $run_dv = explode("-", $this->input->post('txt_run'));
                $nombres = $this->input->post('txt_nombres');
                $apellidop = $this->input->post('txt_apellidop');
                $apellidom = $this->input->post('txt_apellidom');
                $apellidom = trim($apellidom) != "" ? $apellidom : NULL;
                $region = $this->input->post('sel_region');
                $comuna = $this->input->post('sel_comuna');

                $this->form_validation->set_rules('txt_run', 'RUN', 'required|callback_validar_run');
                $this->form_validation->set_rules('txt_nombres', 'Nombres', 'required');
                $this->form_validation->set_rules('txt_apellidop', 'Apellido Paterno', 'required|min_length[2]|max_length[50]');
                $this->form_validation->set_rules('txt_apellidom', 'Apellido Materno', 'min_length[2]|max_length[50]');
                $this->form_validation->set_rules('sel_region', 'Región', 'required');
                $this->form_validation->set_rules('sel_comuna', 'Comuna', 'required');

                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                $this->form_validation->set_message('min_length', 'El campo {field} debe tener al menos {param} caracteres');
                $this->form_validation->set_message('max_length', 'El campo {field} debe tener a lo más {param} caracteres');
                $this->form_validation->set_message('regex_match', 'El campo {field} no tiene el formato solicitado');
                $this->form_validation->set_message('validar_run', 'El campo {field} no presenta un valor correcto');

                if ($this->form_validation->run() == FALSE) {
                    $data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
                    $data['mensaje'] = "El formulario presenta errores de validación";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('encuesta/editar', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $encuesta = array(
                        'filial_empresa_id' => $idfilempresa,
                        'enc_run' => $run_dv[0],
                        'enc_dv' => $run_dv[1],
                        'enc_nombres' => $nombres,
                        'enc_apellido_p' => $apellidop,
                        'enc_apellido_m' => $apellidom,
                        'comuna_id' => $comuna,
                        'usuario_id' => $sesionusuario['usrid'],
                        'enc_fecha' => now(),
                        'enc_estado' => 1
                    );

                    $this->encuesta_model->agregar_encuesta($encuesta);
                    $data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'], $idfilempresa);

                    $data['mensaje'] = "La encuesta ha sido creada exitosamente";
                    $data['divtipo'] = "alert alert-success alert-dismissable";

                    $this->load->view('recopilador/header', $data);
                    $this->load->view('encuesta/listado', $data);
                    $this->load->view('recopilador/footer', $data);
                }
            } else {
                $data['mensaje'] = "";
                $data['divtipo'] = "alert alert-success alert-dismissable";
                $this->load->view('recopilador/header', $data);
                $this->load->view('encuesta/nueva', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {

            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/nueva', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function getComunas() {
        $postData = $this->input->post();
        $this->load->model('param_model');
        $result = $this->param_model->get_comunas_by_region($postData);
        echo json_encode($result);
    }

    public function trabajador($idencuesta) {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');
        $this->load->helper('date');

        $filialempresa_id = $this->uri->segment(3);
        $sesionusuario = $this->session->userdata('usrsesion');

        $data['sesionusuario'] = $sesionusuario;
        $data['lstregiones'] = $this->param_model->get_regiones();
        $this->load->model('filialempresa_model');
        //$filialempresa_id = $this->filialempresa_model->get_filialempresa_id_encuesta_by_id($idencuesta);
        $data['filialempresa_id'] = $filialempresa_id;

        if (isset($idencuesta) && $idencuesta > 0) {

            $data['idencuesta'] = $idencuesta;
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);

            $verificador = $this->encuesta_model->verificar_registro_trabajador($idencuesta);

            if ($verificador > 0) {

                $trabajador = $this->encuesta_model->get_trabajador_by_id($idencuesta);
            } else {

                $trabajador = array(
                    'trab_dir_calle' => "",
                    'trab_dir_numero' => "",
                    'trab_dir_sector' => "",
                    'trab_tel_fijo' => "",
                    'trab_tel_movil' => "",
                    'trab_fec_nacimiento' => "",
                    'trab_genero' => "",
                    'trab_jefe_familia' => "",
                    'trab_ant_indigenas' => "",
                    'trab_est_civil' => "",
                    'trab_nacionalidad' => "",
                    'trab_prev_salud' => "",
                    'trab_prev_salud_d' => "",
                    'trab_prev_social' => ""
                );
            }
            $data['trabajador'] = $trabajador;

            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";



            if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0) {

                $dir_trab = $this->input->post('txt_direccion');
                $num = $this->input->post('txt_numero');
                $poblacion = $this->input->post('txt_sector');
                $telef = $this->input->post('txt_tfijo');
                $celular = $this->input->post('txt_tmovil');
                $region = $this->input->post('sel_region');
                $f_nac = $this->input->post('txt_fecnacimiento');
                $genero = $this->input->post('rbt_genero');
                $jefe_fam = $this->input->post('rbt_jefefamilia');
                $f_indigena = $this->input->post('rbt_antind');
                $est_civil = $this->input->post('rbt_estcivil');
                $nacionalidad = $this->input->post('rbt_nacionalidad');
                $prev_salud = $this->input->post('sel_prev_salud');
                $tramo_salud = $this->input->post('txt_tramo');
                $prev_soc = $this->input->post('txt_prevsocial');


                $this->form_validation->set_rules('txt_direccion', 'Dirección', 'min_length[5]|max_length[255]|required');
                $this->form_validation->set_rules('txt_sector', 'Dirección', 'min_length[5]|max_length[255]|required');
                $this->form_validation->set_rules('txt_numero', 'Numero Domicilio', 'required|numeric');
                $this->form_validation->set_rules('txt_tmovil', 'Celular', 'required|numeric');
                $this->form_validation->set_rules('txt_tfijo', 'Número de Teléfono', 'numeric');
                $this->form_validation->set_rules('txt_fecnacimiento', 'Fecha de nacimiento', 'required');
                $this->form_validation->set_rules('rbt_genero', 'Genero', 'required');
                $this->form_validation->set_rules('rbt_jefefamilia', 'Jefe familiar', 'required');
                $this->form_validation->set_rules('rbt_antind', 'Ascendencia indigena', 'required');
                $this->form_validation->set_rules('rbt_estcivil', 'Estado civil', 'required');
                $this->form_validation->set_rules('rbt_nacionalidad', 'Nacionalidad', 'required');
                $this->form_validation->set_rules('sel_prev_salud', 'Prevision de salud', 'required');
                $this->form_validation->set_rules('txt_tramo', 'Isapre/Tramo', 'required');
                $this->form_validation->set_rules('txt_prevsocial', 'Prevision social', 'required');


                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                $this->form_validation->set_message('min_length', 'El campo {field} debe tener al menos {param} caracteres');
                $this->form_validation->set_message('max_length', 'El campo {field} debe tener a lo más {param} caracteres');
                //$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');


                if ($this->form_validation->run() == FALSE) {
                    $data['lst_prev_salud'] = $this->param_model->get_opciones_prevision();
                    $data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
                    $data['mensaje'] = "El formulario presenta errores de validación ";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('encuesta/trabajador', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $encuesta_trabajador = array(
                        'encuesta_id' => $idencuesta,
                        'trab_dir_calle' => $dir_trab,
                        'trab_dir_numero' => $num,
                        'trab_dir_sector' => $poblacion,
                        'trab_tel_fijo' => $telef,
                        'trab_tel_movil' => $celular,
                        'trab_fec_nacimiento' => $this->fecha_a_unix($f_nac),
                        'trab_genero' => $genero,
                        'trab_jefe_familia' => $jefe_fam,
                        'trab_ant_indigenas' => $f_indigena,
                        'trab_est_civil' => $est_civil,
                        'trab_nacionalidad' => $nacionalidad,
                        'trab_prev_salud' => $prev_salud,
                        'trab_prev_salud_d' => $tramo_salud,
                        'trab_prev_social' => $prev_soc
                    );

                    if ($verificador != 0) {
                        $this->encuesta_model->actualizar_encuesta_trabajador($encuesta_trabajador);

                        $data['mensaje'] = "La encuesta ha sido modificada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('encuesta/educacion/' . $idencuesta, 'refresh');
                    } else {
                        $this->encuesta_model->crear_encuesta_trabajador($encuesta_trabajador);

                        $data['mensaje'] = "La encuesta ha sido creada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('encuesta/educacion/' . $idencuesta, 'refresh');
                    }
                }
            } else {
                $data['mensaje'] = "";
                $data['divtipo'] = "alert alert-success alert-dismissable";

                $this->load->view('recopilador/header', $data);
                $this->load->view('encuesta/trabajador', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {
            $data['lst_prev_salud'] = $this->param_model->get_opciones_prevision();
            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";
            $data['trabajador'] = "";
            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function educacion($idencuesta) {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');
        $this->load->helper('date');

        $sesionusuario = $this->session->userdata('usrsesion');

        $data['sesionusuario'] = $sesionusuario;
        $data['lstregiones'] = $this->param_model->get_regiones();

        if (isset($idencuesta) && $idencuesta > 0) {

            $data['idencuesta'] = $idencuesta;
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);

            $verificador = $this->encuesta_model->verificar_registro_educacion($idencuesta);

            if ($verificador > 0) {

                $educacion = $this->encuesta_model->get_educacion_by_id($idencuesta);
            } else {

                $educacion = array(
                    'edu_nivel_esc' => "",
                    'edu_tipo_est' => "",
                    'edu_ult_curso' => "",
                    'edu_anio_egreso' => "",
                    'edu_estudiando' => "",
                    'edu_becas' => ""
                );
            }

            $data['educacion'] = $educacion;
            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";



            if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0) {

                $nivel_esc = $this->input->post('sel_nivel_esc');
                $tipo_est = $this->input->post('sel_tipo_est');
                $ult_curso = $this->input->post('sel_ult_curso');
                $anio_egreso = $this->input->post('txt_anio_egreso');
                $estudiando = $this->input->post('sel_estudiando');

                $sel_becas = $this->input->post("sel_becas");
                $count = count($sel_becas);
                $becas = "";
                for ($i = 0; $i < $count; $i++) {
                    $becas = $becas . $sel_becas[$i][0] . "|";
                }






                $this->form_validation->set_rules('sel_nivel_esc', 'Nivel de Educación', 'required');
                //	$this->form_validation->set_rules('txt_anio_egreso', 'Año de egreso|numeric', 'required');
                //	$this->form_validation->set_rules('sel_tipo_est','Tipo de estudios','required');				
                //	$this->form_validation->set_rules('sel_ult_curso','Último curso','required');						
                $this->form_validation->set_rules('sel_estudiando', 'Estudiando', 'required');
                //	$this->form_validation->set_rules('sel_becas','Becas','required');				


                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                //$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
                //$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
                //$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');


                if ($this->form_validation->run() == FALSE) {


                    //$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
                    $data['mensaje'] = "El formulario presenta errores de validación ";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('encuesta/educacion', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $encuesta_educacion = array(
                        'encuesta_id' => $idencuesta,
                        'edu_nivel_esc' => $nivel_esc,
                        'edu_tipo_est' => $tipo_est,
                        'edu_ult_curso' => $ult_curso,
                        'edu_anio_egreso' => $anio_egreso,
                        'edu_estudiando' => $estudiando,
                        'edu_becas' => $becas
                    );

                    if ($verificador != 0) {
                        $this->encuesta_model->actualizar_encuesta_educacion($encuesta_educacion);

                        $data['mensaje'] = "La encuesta ha sido modificada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('encuesta/salud/' . $idencuesta, 'refresh');
                    } else {
                        $this->encuesta_model->crear_encuesta_educacion($encuesta_educacion);


                        $data['mensaje'] = "La encuesta ha sido creada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('encuesta/salud/' . $idencuesta, 'refresh');
                    }
                }
            } else {
                $data['mensaje'] = "";

                $data['divtipo'] = "alert alert-success alert-dismissable";
                $this->load->view('recopilador/header', $data);
                $this->load->view('encuesta/educacion', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {

            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);
            $data['educacion'] = "";
            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function salud($idencuesta) {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');
        $this->load->helper('date');

        $sesionusuario = $this->session->userdata('usrsesion');

        $data['sesionusuario'] = $sesionusuario;
        $data['lstregiones'] = $this->param_model->get_regiones();

        if (isset($idencuesta) && $idencuesta > 0) {

            $data['idencuesta'] = $idencuesta;
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
            //$data['salud'] = $this->encuesta_model->get_salud_by_id($idencuesta);
            $verificador = $this->encuesta_model->verificar_registro_salud($idencuesta);

            if ($verificador > 0) {

                $salud = $this->encuesta_model->get_salud_by_id($idencuesta);
            } else {
                $salud = array(
                    'sad_cont_menores' => "",
                    'sad_cons_drogas' => "",
                    'sad_cons_drogas_d' => "",
                    'sad_pat_ges' => "",
                    'sad_usa_prevision' => "",
                    'sad_cond_permanente' => ""
                );
            }

            $data['salud'] = $salud;
            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";



            if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0) {

                $cont_menores = $this->input->post('sel_cont_menores');
                $cons_drogas = $this->input->post('sel_cons_drogas');
                $cons_drogas_d = $this->input->post('txt_cons_drogas_d');
                $pat_ges = $this->input->post('txt_pat_ges');
                $usa_prevision = $this->input->post('sel_usa_prevision');
                $cond_permanente = $this->input->post('txt_cond_permanente');



                $this->form_validation->set_rules('sel_cont_menores', 'Cantidad de Menores', 'required|numeric');
                $this->form_validation->set_rules('sel_cons_drogas', 'Problemas de Alcohol/Drogas', 'required');
                // $this->form_validation->set_rules('txt_cons_drogas_d', 'Edad', 'numeric');
                $this->form_validation->set_rules('txt_pat_ges', 'Patologia GES', 'required');
                $this->form_validation->set_rules('sel_usa_prevision', 'Previsión', 'required');
                $this->form_validation->set_rules('txt_cond_permanente', 'Condicion Permanente', 'required');


                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                //$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
                //$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
                //$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');


                if ($this->form_validation->run() == FALSE) {


                    //$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
                    $data['mensaje'] = "El formulario presenta errores de validación ";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('encuesta/salud', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $encuesta_salud = array(
                        'encuesta_id' => $idencuesta,
                        'sad_cont_menores' => $cont_menores,
                        'sad_cons_drogas' => $cons_drogas,
                        'sad_cons_drogas_d' => $cons_drogas_d,
                        'sad_pat_ges' => $pat_ges,
                        'sad_usa_prevision' => $usa_prevision,
                        'sad_cond_permanente' => $cond_permanente
                    );

                    if ($verificador != 0) {
                        $this->encuesta_model->actualizar_encuesta_salud($encuesta_salud);

                        $data['mensaje'] = "La encuesta ha sido modificada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('encuesta/vivienda/' . $idencuesta, 'refresh');
                    } else {
                        $this->encuesta_model->crear_encuesta_salud($encuesta_salud);


                        $data['mensaje'] = "La encuesta ha sido creada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('encuesta/vivienda/' . $idencuesta, 'refresh');
                    }
                }
            } else {
                $data['mensaje'] = "";
                $data['divtipo'] = "alert alert-success alert-dismissable";

                $this->load->view('recopilador/header', $data);
                $this->load->view('encuesta/salud', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {

            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);
            $data['salud'] = "";
            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function vivienda($idencuesta) {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');

        $this->load->helper('date');

        $sesionusuario = $this->session->userdata('usrsesion');
        $data['sesionusuario'] = $sesionusuario;

        $data['lstregiones'] = $this->param_model->get_regiones();
        if (isset($idencuesta) && $idencuesta > 0) {

            $data['idencuesta'] = $idencuesta;
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
            $verificador = $this->encuesta_model->verificar_registro_vivienda($idencuesta);

            if ($verificador > 0) {

                $vivienda = $this->encuesta_model->get_vivienda_by_id($idencuesta);
            } else {
                $vivienda = array(
                    'viv_tenencia' => "",
                    'viv_sitio' => "",
                    'viv_post_subsidio' => "",
                    'viv_libreta' => "",
                    'viv_libreta_anio' => "",
                    'viv_monto_ahorro' => "",
                    'viv_fam_ocupante' => "",
                    'viv_num_personas' => "",
                    'viv_num_dormitorios' => "",
                    'viv_prov_agua' => "",
                    'viv_sub_agua' => "",
                    'viv_ener_electrica' => "",
                    'viv_elim_excretas' => "",
                    'viv_reg_hogares' => "",
                    'viv_tramo_grupo' => "",
                    'viv_ben_subsidio' => "",
                    'viv_otro_subsidio' => ""
                );
            }

            $data['vivienda'] = $vivienda;
            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";



            if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0) {

                $tenencia = $this->input->post('sel_tenencia');
                $sitio = $this->input->post('sel_sitio');
                $post_subsidio = $this->input->post('sel_post_subsidio');
                $libreta = $this->input->post('sel_libreta');
                $libreta_anio = $this->input->post('txt_libreta_anio');
                $monto_ahorro = $this->input->post('txt_monto_ahorro');
                $fam_ocupante = $this->input->post('sel_fam_ocupante');
                $num_personas = $this->input->post('txt_num_personas');
                $num_dormitorios = $this->input->post('txt_dormitorios');
                $prov_agua = $this->input->post('sel_prov_agua');
                $sub_agua = $this->input->post('sel_sub_agua');
                $ener_electrica = $this->input->post('sel_ener_electrica');
                $elim_excretas = $this->input->post('sel_elim_excretas');
                $reg_hogares = $this->input->post('sel_reg_hogares');
                $tramo_grupo = $this->input->post('sel_tramo_grupo');
                $ben_subsidio = $this->input->post('sel_ben_subsidio');
                $otro_subsidio = $this->input->post('sel_otro_subsidio');


                $this->form_validation->set_rules('sel_tenencia', 'Tenencia de Vivienda', 'required');
                $this->form_validation->set_rules('sel_sitio', 'Tenencia de Sitio', 'required');
                $this->form_validation->set_rules('sel_post_subsidio', 'Postulación Subsidio', 'required');
                $this->form_validation->set_rules('txt_monto_ahorro', 'Monto ahorro', 'numeric');
                $this->form_validation->set_rules('sel_fam_ocupante', 'Principal Ocupante', 'required');
                $this->form_validation->set_rules('txt_num_personas', 'Numero de personas', 'required|numeric');
                $this->form_validation->set_rules('txt_dormitorios', 'Cantidad de dormitorios', 'required|numeric');
                $this->form_validation->set_rules('sel_prov_agua', 'Procedencia del agua', 'required');
                $this->form_validation->set_rules('sel_sub_agua', 'Subsidio agua', 'required');
                $this->form_validation->set_rules('sel_ener_electrica', 'Sistema de energía eléctrica', 'required');
                $this->form_validation->set_rules('sel_elim_excretas', 'Eliminación de excretas', 'required');
                $this->form_validation->set_rules('sel_reg_hogares', 'Registro social de hogares', 'required');
                $this->form_validation->set_rules('sel_tramo_grupo', 'Tramo grupo familiar', 'required');
                $this->form_validation->set_rules('sel_ben_subsidio', 'Subsidio familiar', 'required');
                $this->form_validation->set_rules('sel_otro_subsidio', 'Otro subsidio', 'required');

                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                $this->form_validation->set_message('min_length', 'El campo {field} debe tener al menos {param} caracteres');
                $this->form_validation->set_message('max_length', 'El campo {field} debe tener a lo más {param} caracteres');
                //$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');


                if ($this->form_validation->run() == FALSE) {
                    $data['mensaje'] = "El formulario presenta errores de validación";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('encuesta/vivienda', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $encuesta_vivienda = array(
                        'encuesta_id' => $idencuesta,
                        'viv_tenencia' => $tenencia,
                        'viv_sitio' => $sitio,
                        'viv_post_subsidio' => $post_subsidio,
                        'viv_libreta' => $libreta,
                        'viv_libreta_anio' => $libreta_anio,
                        'viv_monto_ahorro' => $monto_ahorro,
                        'viv_fam_ocupante' => $fam_ocupante,
                        'viv_num_personas' => $num_personas,
                        'viv_num_dormitorios' => $num_dormitorios,
                        'viv_prov_agua' => $prov_agua,
                        'viv_sub_agua' => $sub_agua,
                        'viv_ener_electrica' => $ener_electrica,
                        'viv_elim_excretas' => $elim_excretas,
                        'viv_reg_hogares' => $reg_hogares,
                        'viv_tramo_grupo' => $tramo_grupo,
                        'viv_ben_subsidio' => $ben_subsidio,
                        'viv_otro_subsidio' => $otro_subsidio
                    );

                    if ($verificador != 0) {

                        $this->encuesta_model->actualizar_encuesta_vivienda($encuesta_vivienda);
                        $data['mensaje'] = "La encuesta ha sido modificada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";
                        //redirect('encuesta/listado/'.$lstfilusuario['filial_empresa_id']);
                        redirect('encuesta/listado/' . $idencuesta);

                        //redirect('encuesta/familia/'.$idencuesta.'/'.$integrante','refresh');
                    } else {
                        $this->encuesta_model->crear_encuesta_vivienda($encuesta_vivienda);

                        $data['mensaje'] = "La encuesta ha sido creada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";
                        redirect('encuesta/listado/' . $idencuesta);
                        //redirect('encuesta/familia/'.$idencuesta.'/'.$integrante,'refresh');
                    }
                }
            } else {

                $data['mensaje'] = "";
                $data['divtipo'] = "alert alert-success alert-dismissable";
                $this->load->view('recopilador/header', $data);

                $this->load->view('encuesta/vivienda', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {

            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);
            $data['vivienda'] = "";
            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    function validar_run($rut) {

        if (preg_match("/^[0-9]+-[0-9kK]{1}|\s/", $rut)) {

            if (strpos($rut, "-") == false) {
                $RUT[0] = substr($rut, 0, -1);
                $RUT[1] = substr($rut, -1);
            } else {
                $RUT = explode("-", trim($rut));
            }
            $elRut = str_replace(".", "", trim($RUT[0]));
            $factor = 2;
            $suma = 0;
            for ($i = strlen($elRut) - 1; $i >= 0; $i--):
                $factor = $factor > 7 ? 2 : $factor;
                $suma += $elRut{$i} * $factor++;
            endfor;
            $resto = $suma % 11;
            $dv = 11 - $resto;
            if ($dv == 11) {
                $dv = 0;
            } else if ($dv == 10) {
                $dv = "k";
            } else {
                $dv = $dv;
            }
            if ($dv == trim(strtolower($RUT[1]))) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //FECHAS
    public function fecha_a_unix($fecha) {
        if ($fecha != 0) {
            $fecha_convertida = DateTime::createFromFormat('d-m-Y', $fecha);
            return $fecha_convertida->format('U');
        } else {
            return 0;
        }
    }

}
