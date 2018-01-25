<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restriccion extends CI_Controller {

    private $idbeneficio = null;
    private $data = null;

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->helper('date');

        if ($this->session->userdata('usrsesion') == NULL) {
            redirect('/inicio/index', 'refresh');
        } else {
            $sesionusuario = $this->session->userdata('usrsesion');
            if (element('usrperfil', $sesionusuario) == 1) {
                redirect('/administrador/index', 'refresh');
            } else if (element('usrperfil', $sesionusuario) == 3) {
                redirect('/recopilador/index', 'refresh');
            }
            $this->data['sesionusuario'] = $this->session->userdata('usrsesion');
            //$this->data['mensaje'] = "";
            $this->data['mensaje'] = $this->session->flashdata('mensaje');
        }
    }

    public function index($idbeneficio) {


        $this->idbeneficio = $idbeneficio;
        //$this->data['sesionusuario'] = $this->session->userdata('usrsesion');
        //$this->data['mensaje'] = "";
        $this->datos_genereales();
        $this->lista_restricciones();
        $this->add_restriccion();
        
    }

    public function datos_genereales() {
        
        $this->load->model('beneficio_model');
        $this->load->library('form_validation');
        $this->data['divtipo'] = "alert alert-success alert-dismissable";
        $this->data['beneficio'] = $this->beneficio_model->get_beneficio_by_id($this->idbeneficio);
    }

    public function lista_restricciones() {
        $this->load->model('beneficio_model');
        $this->load->library('form_validation');
        $this->data['lstrestricciones'] = $this->beneficio_model->get_restricciones($this->idbeneficio);
    }

    public function add_restriccion() {
        $this->load->model('param_model');

        $this->data['lstcampos'] = $this->param_model->get_campos();


        $this->load->view('analista/header', $this->data);
        $this->load->view('beneficio/restricciones', $this->data);
        $this->load->view('analista/footer', $this->data);
    }

    public function eliminar_restriccion($idbeneficio, $idbeneficio_restriccion) {
        $this->load->library('form_validation');
        $this->load->model('beneficio_model');

        $this->idbeneficio = $idbeneficio;


        //$data['sesionusuario'] = $this->session->userdata('usrsesion');

        $this->data['beneficio'] = $this->beneficio_model->get_beneficio_by_id($this->idbeneficio);
        $this->data['lstrestricciones'] = $this->beneficio_model->get_restricciones($idbeneficio);

        if (isset($idbeneficio_restriccion) && $idbeneficio_restriccion > 0) {

            $res = $this->beneficio_model->eliminar_restriccion($this->idbeneficio, $idbeneficio_restriccion);

            $this->data['mensaje'] = "El beneficio fue eliminado exitosamente";
            $this->data['divtipo'] = "alert alert-success alert-dismissable";
        } else {
            $this->data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $this->data['divtipo'] = "alert alert-danger alert-dismissable";
        }

        $this->data['lstbeneficios'] = $this->beneficio_model->get_beneficios();



        $this->session->set_flashdata('mensaje',$this->data['mensaje']);
        redirect('restriccion/index/'.$this->idbeneficio);
        //redirect('/beneficio/listado');
    }

    public function set_restriccion($idbeneficio) {

        $this->idbeneficio=$idbeneficio;
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('param_model');
        $this->load->model('beneficio_model');

        $this->data['mensaje'] = "";
        $this->data['divtipo'] = "alert alert-success alert-dismissable";
        $this->data['beneficio'] = $this->beneficio_model->get_beneficio_by_id($this->idbeneficio);
        $this->data['lstcampos'] = $this->param_model->get_campos();


        if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') == 1 ) {
            //POST
            $rest_tipo = $this->input->post('sel_tipo');
            $rest_campo = $this->input->post('sel_campo');
            //$rest_opcion = $this->input->post('sel_opcion');
            $rest_opcion = trim($this->input->post('sel_opcion')) != "" ? $rest_opcion : NULL;
            //$rest_valor = $this->input->post('txt_valor');
            $rest_valor = trim($this->input->post('txt_valor')) != "" ? $rest_valor : NULL;
            $rest_grupo = $this->input->post('txt_grupo');
            $campo_tipo = $this->input->post('hdn_campo_tipo');
            // FIN POSTS
            // 
            // VALIDACIONES
            $this->form_validation->set_rules('sel_campo', 'Campo', 'required');
            $this->form_validation->set_rules('sel_tipo', 'Tipo', 'required');
            if ($campo_tipo == 1) {
                $this->form_validation->set_rules('txt_valor', 'Valor', 'required|numeric');
            } else if ($campo_tipo == 2) {
                $this->form_validation->set_rules('sel_opcion', 'Campo', 'required');
            }else{
                $this->form_validation->set_rules('txt_valor', 'Valor', 'required|numeric');
                $this->form_validation->set_rules('sel_opcion', 'Campo', 'required');
            }
            // FIN VALIDACIONES
            // 
            // MENSAJES
            $this->form_validation->set_message('required', 'El campo {field} es requerido');
            $this->form_validation->set_message('numeric', 'El campo {field} es numerico');
            // FIN MENSAJES 

            $this->data['lstrestricciones'] = $this->beneficio_model->get_restricciones($this->idbeneficio);
            if ($this->form_validation->run() == FALSE) {

                $this->data['lstopciones'] = $this->param_model->get_opciones_by_campoid($rest_campo);
                $this->data['mensaje'] = "El formulario presenta errores de validación";
                $this->data['divtipo'] = "alert alert-danger alert-dismissable";


                $this->load->view('analista/header', $this->data);
                $this->load->view('beneficio/restricciones', $this->data);
                $this->load->view('analista/footer', $this->data);
            } else {
                $restriccion = array(
                    'restbenef_tipo' => $rest_tipo,
                    'campo_id' => $rest_campo,
                    'campo_valor_id' => $rest_opcion,
                    'restbenef_valor' => $rest_valor,
                    'restbenef_grupo_campo' => $rest_grupo,
                    'beneficio_id' => $this->idbeneficio
                );
                $res = $this->beneficio_model->agregar_restriccion($restriccion);
                if ($res == 1) {
                    $this->data['mensaje'] = "La restriccion ha sido agregado exitosamente";
                    $this->data['divtipo'] = "alert alert-success alert-dismissable";
                } else {
                    $this->data['mensaje'] = "Ocurrió un error al realizar la operación";
                    $this->data['divtipo'] = "alert alert-danger alert-dismissable";
                }
                /*
                $this->load->view('analista/header', $this->data);
                $this->load->view('beneficio/restricciones', $this->data);
                $this->load->view('analista/footer', $this->data);
                */
                //$this->index($this->idbeneficio);
                $this->session->set_flashdata('mensaje',$this->data['mensaje']);
                redirect('restriccion/index/'.$this->idbeneficio);
            }
        }
    }
    

}
