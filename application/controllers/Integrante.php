<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Integrante extends CI_Controller {

    private $idencuesta = null;
    private $data = null;
    private $idfamilia_datos = null;
    private $familia_datos = array();

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

    /*
      public function index($idencuesta) {


      $this->idencuesta = $idencuesta;
      //$this->data['sesionusuario'] = $this->session->userdata('usrsesion');
      //$this->data['mensaje'] = "";
      $this->datos_genereales();
      $this->lista_restricciones();
      $this->add_restriccion();

      }
     */

    public function listado($idencuesta = NULL) {

        $sesionusuario = $this->session->userdata('usrsesion');
        $data['sesionusuario'] = $sesionusuario;

        if (isset($idencuesta) && $idencuesta > 0) {



            $data['idencuesta'] = $idencuesta;
            $this->load->model('encuesta_model');
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
            //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idfilempresa);

            $this->load->model('integrante_model');
            $data['lstintegrantes'] = $this->integrante_model->get_familia_by_id($idencuesta);

            $id_fam = $this->integrante_model->get_idfamilia_datos_by_id($idencuesta);
            $idfamilia_datos = $id_fam['encuesta_familia_id'];

            $data['idfamilia_datos'] = $idfamilia_datos;
            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('integrante/listado', $data);
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

    public function nueva($idencuesta) {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');
        $this->load->model('integrante_model');
        $this->load->helper('date');


        $sesionusuario = $this->session->userdata('usrsesion');
        $id_fam = $this->integrante_model->get_idfamilia_datos_by_id($idencuesta);

        $data['idfamilia_datos'] = "";
        //echo $idfamilia_datos['encuesta_familia_id']."acaaaaaaaaaaaaaaaaa";

        $data['sesionusuario'] = $sesionusuario;
        $data['lstregiones'] = $this->param_model->get_regiones();


        if (isset($idencuesta) && $idencuesta > 0) {

            $data['idencuesta'] = $idencuesta;
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);


            $verificador = $this->integrante_model->verificar_registro_familia($idencuesta);

            if ($verificador > 0) {

                $familiar = $this->integrante_model->get_familia_by_id($idencuesta);
            } else {

                $familiar = array(
                    'fam_run' => "",
                    'fam_dv' => "",
                    'fam_nombres' => "",
                    'fam_apellido_p' => "",
                    'fam_apellido_m' => "",
                    'fam_fec_nacimiento' => "",
                    'fam_genero' => "",
                    'fam_nac_chilena' => ""
                );
            }

            $data['familiar'] = $familiar;
            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";


            if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0) {

                $run = $this->input->post('txt_run');
                $dv = $this->input->post('txt_dv');
                $nombres = $this->input->post('txt_nombres');
                $apellido_p = $this->input->post('txt_apellido_p');
                $apellido_m = $this->input->post('txt_apellido_m');
                $fec_nacimiento = $this->input->post('txt_fec_nacimiento');
                $genero = $this->input->post('sel_genero');
                $nac_chilena = $this->input->post('sel_nac_chilena');




                $this->form_validation->set_rules('txt_run', 'RUN', 'required|callback_validar_run');
                //$this->form_validation->set_rules('txt_dv', 'Dirección', 'min_length[5]|max_length[255]|required');
                $this->form_validation->set_rules('txt_nombres', 'Nombres', 'required');
                $this->form_validation->set_rules('txt_apellido_p', 'Apellido Paterrno', 'required');
                $this->form_validation->set_rules('txt_apellido_m', 'Apellido Materno', 'required');
                $this->form_validation->set_rules('txt_fec_nacimiento', 'Fecha de nacimiento', 'required');
                $this->form_validation->set_rules('sel_genero', 'Genero', 'required');
                $this->form_validation->set_rules('sel_nac_chilena', 'Nacionalidad', 'required');



                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                $this->form_validation->set_message('min_length', 'El campo {field} debe tener al menos {param} caracteres');
                $this->form_validation->set_message('max_length', 'El campo {field} debe tener a lo más {param} caracteres');
                //$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');


                if ($this->form_validation->run() == FALSE) {


                    $data['mensaje'] = "El formulario presenta errores de validación ";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('integrante/nueva', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $encuesta_familia = array(
                        'encuesta_id' => $idencuesta,
                        'fam_run' => $run[0],
                        'fam_dv' => $run[1],
                        'fam_nombres' => $nombres,
                        'fam_apellido_p' => $apellido_p,
                        'fam_apellido_m' => $apellido_m,
                        'fam_fec_nacimiento' => $this->fecha_a_unix($fec_nacimiento),
                        'fam_genero' => $genero,
                        'fam_nac_chilena' => $nac_chilena
                    );

                    if ($verificador != 0) {
                        $this->integrante_model->actualizar_encuesta_familia($encuesta_familia);
                        //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

                        $data['mensaje'] = "El integrante ha sido modificada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";
                        $idfamilia_datos = $id_fam['encuesta_familia_id'];
                        $data['idfamilia_datos'] = $idfamilia_datos;
                        redirect('integrante/datos/' . $idencuesta . '/' . $idfamilia_datos, 'refresh');
                    } else {
                        $this->integrante_model->crear_encuesta_familia($encuesta_familia);
                        //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);
                        $idfamilia_datos = $id_fam['encuesta_familia_id'];
                        $data['idfamilia_datos'] = $idfamilia_datos;
                        $data['mensaje'] = "El integrante ha sido creado exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('integrante/datos/' . $idencuesta . '/' . $idfamilia_datos, 'refresh');
                    }
                }
            } else {
                $data['mensaje'] = "";
                $data['divtipo'] = "alert alert-success alert-dismissable";

                $this->load->view('recopilador/header', $data);
                $this->load->view('integrante/nueva', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {

            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";
            $data['familiar'] = "";
            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function datos($idencuesta, $idfamilia_datos) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');
        $this->load->model('integrante_model');
        $this->load->helper('date');

        $sesionusuario = $this->session->userdata('usrsesion');

        $data['sesionusuario'] = $sesionusuario;
        $data['lstregiones'] = $this->param_model->get_regiones();


        if (isset($idfamilia_datos) && $idfamilia_datos > 0) {

            $data['idfamilia_datos'] = $idfamilia_datos;
            $data['idencuesta'] = $idencuesta;
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idfamilia_datos);

            $verificador = $this->integrante_model->verificar_registro_familia_datos($idfamilia_datos);

            if ($verificador > 0) {

                $familiar = $this->integrante_model->get_familia_datos_by_id($idfamilia_datos);
            } else {

                $familiar = array(
                    'encuesta_familia_id' => "",
                    'fam_jefe_familia' => "",
                    'fam_ant_indigena' => "",
                    'fam_parentesco' => "",
                    'fam_es_carga' => "",
                    'fam_padre_profesor' => "",
                    'fam_cond_perm' => "",
                    'fam_ges' => "",
                    'fam_usa_prevsalud' => "",
                    'fam_trabajando' => "",
                    'fam_sit_contrato' => "",
                    'fam_sit_nolaboral' => "",
                    'fam_det_pension' => "",
                    'fam_meses_cesante' => "",
                    'fam_inicio_activ' => "",
                    'fam_matriculado' => "",
                    'fam_nivel_educ' => "",
                    'fam_tipo_est' => "",
                    'fam_ult_curso' => "",
                    'fam_fin_estudios' => "",
                    'fam_rindio_psu' => "",
                    'fam_anio_psu' => "",
                    'fam_puntaje_psu' => "",
                    'fam_ult_promedio' => "",
                    'fam_fin_educsup' => "",
                    'fam_ibruto_mes1' => "",
                    'fam_ibruto_mes2' => "",
                    'fam_ibruto_mes3' => "",
                    'fam_iliquido_mes1' => "",
                    'fam_iliquido_mes2' => "",
                    'fam_iliquido_mes3' => "",
                    'fam_rec_pension' => "",
                    'fam_pension_mes1' => "",
                    'fam_pension_mes2' => "",
                    'fam_pension_mes3' => "",
                    'fam_rec_otros' => "",
                    'fam_otros_mes1' => "",
                    'fam_otros_mes2' => "",
                    'fam_otros_mes3' => ""
                );
            }

            $data['familiar'] = $familiar;
            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";


            if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0) {

                $jefe_familia = $this->input->post('sel_jefe_familia');
                $ant_indigena = $this->input->post('sel_ant_indigena');
                $padre_profesor = $this->input->post('sel_padre_profesor');
                $parentesco = $this->input->post('sel_parentesco');
                $es_carga = $this->input->post('sel_es_carga');

                $cond_permanente = $this->input->post('txt_cond_permanente');
                $ges = $this->input->post('txt_ges');
                $usa_prevsalud = $this->input->post('sel_usa_prevsalud');

                $trabajando = $this->input->post('sel_trabajando');
                $sit_contrato = $this->input->post('sel_sit_contrato');
                $sit_nolaboral = $this->input->post('sel_sit_nolaboral');
                $sel_pension = $this->input->post("sel_pension");
                $count = count($sel_pension);
                $det_pension = "";
                echo $count;
                for ($i = 0; $i < $count; $i++) {
                    $det_pension = $det_pension . $sel_pension[$i] . "/";
                }


                $meses_cesante = $this->input->post('txt_meses_cesante');
                $inicio_activ = $this->input->post('sel_inicio_activ');

                $matriculado = $this->input->post('sel_matriculado');
                $nivel_educ = $this->input->post('sel_nivel_educ');
                $fam_tipo_est = $this->input->post('sel_fam_tipo_est');
                $fam_ult_curso = $this->input->post('sel_fam_ult_curso');
                $fin_estudios = $this->input->post('txt_fin_estudios');
                $rindio_psu = $this->input->post('txt_rindio_psu');
                $anio_psu = $this->input->post('txt_anio_psu');
                $puntaje_psu = $this->input->post('txt_puntaje_psu');
                $ult_promedio = $this->input->post('txt_ult_promedio');

                $sel_fin_educsup = $this->input->post("sel_fin_educsup");
                $count = count($sel_fin_educsup);
                $fin_educsup = "";
                echo $count;
                for ($i = 0; $i < $count; $i++) {
                    $fin_educsup = $fin_educsup . $sel_fin_educsup[$i] . "/";
                }



                $ibruto_mes1 = $this->input->post('txt_ibruto_mes1');
                $ibruto_mes2 = $this->input->post('txt_ibruto_mes2');
                $ibruto_mes3 = $this->input->post('txt_ibruto_mes3');
                $iliquido_mes1 = $this->input->post('txt_iliquido_mes1');
                $iliquido_mes2 = $this->input->post('txt_iliquido_mes2');
                $iliquido_mes3 = $this->input->post('txt_iliquido_mes3');
                $rec_pension = $this->input->post('sel_rec_pension');
                $pension_mes1 = $this->input->post('txt_pension_mes1');
                $pension_mes2 = $this->input->post('txt_pension_mes2');
                $pension_mes3 = $this->input->post('txt_pension_mes3');
                $rec_otros = $this->input->post('sel_rec_otros');
                $otros_mes1 = $this->input->post('txt_otros_mes1');
                $otros_mes2 = $this->input->post('txt_otros_mes2');
                $otros_mes3 = $this->input->post('txt_otros_mes3');




                $this->form_validation->set_rules('sel_jefe_familia', 'Jefe de Familia', 'required');
                $this->form_validation->set_rules('sel_ant_indigena', 'Ascendecia Indígena', 'required');
                $this->form_validation->set_rules('sel_padre_profesor', 'Padre Profesor', 'required');
                $this->form_validation->set_rules('sel_parentesco', 'Parentesco', 'required');
                $this->form_validation->set_rules('sel_es_carga', 'Es Carga', 'required');



                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                $this->form_validation->set_message('min_length', 'El campo {field} debe tener al menos {param} caracteres');
                $this->form_validation->set_message('max_length', 'El campo {field} debe tener a lo más {param} caracteres');
                //$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');


                if ($this->form_validation->run() == FALSE) {


                    $data['mensaje'] = "El formulario presenta errores de validación ";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('integrante/datos', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $familia_datos = array(
                        'encuesta_familia_id' => $idfamilia_datos,
                        'fam_jefe_familia' => $jefe_familia,
                        'fam_ant_indigena' => $ant_indigena,
                        'fam_parentesco' => $parentesco,
                        'fam_es_carga' => $es_carga,
                        'fam_padre_profesor' => $padre_profesor,
                        'fam_cond_perm' => $cond_permanente,
                        'fam_ges' => $ges,
                        'fam_usa_prevsalud' => $usa_prevsalud,
                        'fam_trabajando' => $trabajando,
                        'fam_sit_contrato' => $sit_contrato,
                        'fam_sit_nolaboral' => $sit_nolaboral,
                        'fam_det_pension' => $det_pension,
                        'fam_meses_cesante' => $meses_cesante,
                        'fam_inicio_activ' => $inicio_activ,
                        'fam_matriculado' => $matriculado,
                        'fam_nivel_educ' => $nivel_educ,
                        'fam_tipo_est' => $fam_tipo_est,
                        'fam_ult_curso' => $fam_ult_curso,
                        'fam_fin_estudios' => $fin_estudios,
                        'fam_rindio_psu' => $rindio_psu,
                        'fam_anio_psu' => $anio_psu,
                        'fam_puntaje_psu' => $puntaje_psu,
                        'fam_ult_promedio' => $ult_promedio,
                        'fam_fin_educsup' => $fin_educsup,
                        'fam_ibruto_mes1' => $ibruto_mes1,
                        'fam_ibruto_mes2' => $ibruto_mes2,
                        'fam_ibruto_mes3' => $ibruto_mes3,
                        'fam_iliquido_mes1' => $iliquido_mes1,
                        'fam_iliquido_mes2' => $iliquido_mes2,
                        'fam_iliquido_mes3' => $iliquido_mes3,
                        'fam_rec_pension' => $rec_pension,
                        'fam_pension_mes1' => $pension_mes1,
                        'fam_pension_mes2' => $pension_mes2,
                        'fam_pension_mes3' => $pension_mes3,
                        'fam_rec_otros' => $rec_otros,
                        'fam_otros_mes1' => $otros_mes1,
                        'fam_otros_mes2' => $otros_mes2,
                        'fam_otros_mes3' => $otros_mes3
                    );



                    if ($verificador != 0) {
                        $this->integrante_model->actualizar_familia_datos($familia_datos);
                        //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

                        $data['mensaje'] = "El integrante familiar ha sido modificada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('integrante/listado/' . $idencuesta, 'refresh');
                    } else {
                        $this->integrante_model->crear_familia_datos($familia_datos);
                        //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

                        $data['mensaje'] = "El integrante ha sido agregado con exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('integrante/listado/' . $idencuesta, 'refresh');
                    }
                }
            } else {
                $data['mensaje'] = "";
                $data['divtipo'] = "alert alert-success alert-dismissable";

                $this->load->view('recopilador/header', $data);
                $this->load->view('integrante/datos', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {

            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";
            $data['familiar'] = "";
            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function editar($idencuesta, $idfamilia_datos) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');
        $this->load->model('encuesta_model');
        $this->load->model('integrante_model');
        $this->load->helper('date');

        $sesionusuario = $this->session->userdata('usrsesion');

        $data['sesionusuario'] = $sesionusuario;
        $data['lstregiones'] = $this->param_model->get_regiones();


        if (isset($idfamilia_datos) && $idfamilia_datos > 0) {

            $data['idfamilia_datos'] = $idfamilia_datos;
            $data['idencuesta'] = $idencuesta;
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idfamilia_datos);

            $verificador = $this->integrante_model->verificar_registro_familia_datos($idfamilia_datos);

            if ($verificador > 0) {

                $familiar = $this->integrante_model->get_familia_datos_by_id($idfamilia_datos);
            } else {

                $familiar = array(
                    'encuesta_familia_id' => "",
                    'fam_jefe_familia' => "",
                    'fam_ant_indigena' => "",
                    'fam_parentesco' => "",
                    'fam_es_carga' => "",
                    'fam_padre_profesor' => "",
                    'fam_cond_perm' => "",
                    'fam_ges' => "",
                    'fam_usa_prevsalud' => "",
                    'fam_trabajando' => "",
                    'fam_sit_contrato' => "",
                    'fam_sit_nolaboral' => "",
                    'fam_det_pension' => "",
                    'fam_meses_cesante' => "",
                    'fam_inicio_activ' => "",
                    'fam_matriculado' => "",
                    'fam_nivel_educ' => "",
                    'fam_tipo_est' => "",
                    'fam_ult_curso' => "",
                    'fam_fin_estudios' => "",
                    'fam_rindio_psu' => "",
                    'fam_anio_psu' => "",
                    'fam_puntaje_psu' => "",
                    'fam_ult_promedio' => "",
                    'fam_fin_educsup' => "",
                    'fam_ibruto_mes1' => "",
                    'fam_ibruto_mes2' => "",
                    'fam_ibruto_mes3' => "",
                    'fam_iliquido_mes1' => "",
                    'fam_iliquido_mes2' => "",
                    'fam_iliquido_mes3' => "",
                    'fam_rec_pension' => "",
                    'fam_pension_mes1' => "",
                    'fam_pension_mes2' => "",
                    'fam_pension_mes3' => "",
                    'fam_rec_otros' => "",
                    'fam_otros_mes1' => "",
                    'fam_otros_mes2' => "",
                    'fam_otros_mes3' => ""
                );
            }

            $data['familiar'] = $familiar;
            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";


            if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0) {

                $jefe_familia = $this->input->post('sel_jefe_familia');
                $ant_indigena = $this->input->post('sel_ant_indigena');
                $padre_profesor = $this->input->post('sel_padre_profesor');
                $parentesco = $this->input->post('sel_parentesco');
                $es_carga = $this->input->post('sel_es_carga');

                $cond_permanente = $this->input->post('txt_cond_permanente');
                $ges = $this->input->post('txt_ges');
                $usa_prevsalud = $this->input->post('sel_usa_prevsalud');

                $trabajando = $this->input->post('sel_trabajando');
                $sit_contrato = $this->input->post('sel_sit_contrato');
                $sit_nolaboral = $this->input->post('sel_sit_nolaboral');
                $sel_pension = $this->input->post("sel_pension");
                $count = count($sel_pension);
                $det_pension = "";
                echo $count;
                for ($i = 0; $i < $count; $i++) {
                    $det_pension = $det_pension . $sel_pension[$i] . "/";
                }


                $meses_cesante = $this->input->post('txt_meses_cesante');
                $inicio_activ = $this->input->post('sel_inicio_activ');

                $matriculado = $this->input->post('sel_matriculado');
                $nivel_educ = $this->input->post('sel_nivel_educ');
                $fam_tipo_est = $this->input->post('sel_fam_tipo_est');
                $fam_ult_curso = $this->input->post('sel_fam_ult_curso');
                $fin_estudios = $this->input->post('txt_fin_estudios');
                $rindio_psu = $this->input->post('txt_rindio_psu');
                $anio_psu = $this->input->post('txt_anio_psu');
                $puntaje_psu = $this->input->post('txt_puntaje_psu');
                $ult_promedio = $this->input->post('txt_ult_promedio');

                $sel_fin_educsup = $this->input->post("sel_fin_educsup");
                $count = count($sel_fin_educsup);
                $fin_educsup = "";
                echo $count;
                for ($i = 0; $i < $count; $i++) {
                    $fin_educsup = $fin_educsup . $sel_fin_educsup[$i] . "/";
                }



                $ibruto_mes1 = $this->input->post('txt_ibruto_mes1');
                $ibruto_mes2 = $this->input->post('txt_ibruto_mes2');
                $ibruto_mes3 = $this->input->post('txt_ibruto_mes3');
                $iliquido_mes1 = $this->input->post('txt_iliquido_mes1');
                $iliquido_mes2 = $this->input->post('txt_iliquido_mes2');
                $iliquido_mes3 = $this->input->post('txt_iliquido_mes3');
                $rec_pension = $this->input->post('sel_rec_pension');
                $pension_mes1 = $this->input->post('txt_pension_mes1');
                $pension_mes2 = $this->input->post('txt_pension_mes2');
                $pension_mes3 = $this->input->post('txt_pension_mes3');
                $rec_otros = $this->input->post('sel_rec_otros');
                $otros_mes1 = $this->input->post('txt_otros_mes1');
                $otros_mes2 = $this->input->post('txt_otros_mes2');
                $otros_mes3 = $this->input->post('txt_otros_mes3');




                $this->form_validation->set_rules('sel_jefe_familia', 'Jefe de Familia', 'required');
                $this->form_validation->set_rules('sel_ant_indigena', 'Ascendecia Indígena', 'required');
                $this->form_validation->set_rules('sel_padre_profesor', 'Padre Profesor', 'required');
                $this->form_validation->set_rules('sel_parentesco', 'Parentesco', 'required');
                $this->form_validation->set_rules('sel_es_carga', 'Es Carga', 'required');



                $this->form_validation->set_message('required', 'El campo {field} es requerido');
                $this->form_validation->set_message('min_length', 'El campo {field} debe tener al menos {param} caracteres');
                $this->form_validation->set_message('max_length', 'El campo {field} debe tener a lo más {param} caracteres');
                //$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');


                if ($this->form_validation->run() == FALSE) {


                    $data['mensaje'] = "El formulario presenta errores de validación ";
                    $data['divtipo'] = "alert alert-danger alert-dismissable";
                    $this->load->view('recopilador/header', $data);
                    $this->load->view('integrante/datos', $data);
                    $this->load->view('recopilador/footer', $data);
                } else {

                    $familia_datos = array(
                        'encuesta_familia_id' => $idfamilia_datos,
                        'fam_jefe_familia' => $jefe_familia,
                        'fam_ant_indigena' => $ant_indigena,
                        'fam_parentesco' => $parentesco,
                        'fam_es_carga' => $es_carga,
                        'fam_padre_profesor' => $padre_profesor,
                        'fam_cond_perm' => $cond_permanente,
                        'fam_ges' => $ges,
                        'fam_usa_prevsalud' => $usa_prevsalud,
                        'fam_trabajando' => $trabajando,
                        'fam_sit_contrato' => $sit_contrato,
                        'fam_sit_nolaboral' => $sit_nolaboral,
                        'fam_det_pension' => $det_pension,
                        'fam_meses_cesante' => $meses_cesante,
                        'fam_inicio_activ' => $inicio_activ,
                        'fam_matriculado' => $matriculado,
                        'fam_nivel_educ' => $nivel_educ,
                        'fam_tipo_est' => $fam_tipo_est,
                        'fam_ult_curso' => $fam_ult_curso,
                        'fam_fin_estudios' => $fin_estudios,
                        'fam_rindio_psu' => $rindio_psu,
                        'fam_anio_psu' => $anio_psu,
                        'fam_puntaje_psu' => $puntaje_psu,
                        'fam_ult_promedio' => $ult_promedio,
                        'fam_fin_educsup' => $fin_educsup,
                        'fam_ibruto_mes1' => $ibruto_mes1,
                        'fam_ibruto_mes2' => $ibruto_mes2,
                        'fam_ibruto_mes3' => $ibruto_mes3,
                        'fam_iliquido_mes1' => $iliquido_mes1,
                        'fam_iliquido_mes2' => $iliquido_mes2,
                        'fam_iliquido_mes3' => $iliquido_mes3,
                        'fam_rec_pension' => $rec_pension,
                        'fam_pension_mes1' => $pension_mes1,
                        'fam_pension_mes2' => $pension_mes2,
                        'fam_pension_mes3' => $pension_mes3,
                        'fam_rec_otros' => $rec_otros,
                        'fam_otros_mes1' => $otros_mes1,
                        'fam_otros_mes2' => $otros_mes2,
                        'fam_otros_mes3' => $otros_mes3
                    );
                    
                    echo $familia_datos['fam_jefe_familia'];


                    if ($verificador != 0) {
                        $this->integrante_model->actualizar_familia_datos($familia_datos);
                        //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

                        $data['mensaje'] = "El integrante familiar ha sido modificada exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('integrante/listado/' . $idencuesta, 'refresh');
                    } else {
                        $this->integrante_model->crear_familia_datos($familia_datos);
                        //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

                        $data['mensaje'] = "El integrante ha sido agregado con exitosamente";
                        $data['divtipo'] = "alert alert-success alert-dismissable";

                        redirect('integrante/listado/' . $idencuesta, 'refresh');
                    }
                }
            } else {
                $data['mensaje'] = "";
                $data['divtipo'] = "alert alert-success alert-dismissable";

                $this->load->view('recopilador/header', $data);
                $this->load->view('integrante/datos', $data);
                $this->load->view('recopilador/footer', $data);
            }
        } else {

            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

            $data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $data['divtipo'] = "alert alert-danger alert-dismissable";
            $data['familiar'] = "";
            $this->load->view('recopilador/header', $data);
            $this->load->view('encuesta/empresas', $data);
            $this->load->view('recopilador/footer', $data);
        }
    }

    public function lista_integrantes() {
        $this->load->model('encuesta_model');
        $this->load->library('form_validation');
        $this->data['lstintegrantes'] = $this->encuesta_model->get_familia($this->idencuesta);
    }

    public function detalle($idencuesta) {
        $sesionusuario = $this->session->userdata('usrsesion');
        $data['sesionusuario'] = $sesionusuario;
        $this->load->model('integrante_model');

        if (isset($idencuesta) && $idencuesta > 0) {
            $this->load->model('usuario_model');
            $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);



            $data['datos'] = $this->integrante_model->get_encuesta_trabajador_by_id($encuesta_familia_id);

            $data['idencuesta'] = $idencuesta;
            $this->load->model('encuesta_model');
            $data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
            //$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idfilempresa);
            $this->load->model('integrante_model');

            $data['lstintegrantes'] = $this->integrante_model->get_familia_by_id($idencuesta);

            $data['mensaje'] = "";
            $data['divtipo'] = "alert alert-success alert-dismissable";

            $this->load->view('recopilador/header', $data);
            $this->load->view('integrante/detalle', $data);
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
