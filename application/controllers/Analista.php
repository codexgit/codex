<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Analista extends CI_Controller {

    private $data;

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
            $this->data['mensaje'] = $this->session->flashdata('mensaje');
        }
    }

    public function index() {

        $data['sesionusuario'] = $this->session->userdata('usrsesion');
        $this->load->model('noticia_model');
        $data['lstnoticias'] = $this->noticia_model->get_noticias();

        $this->load->view('analista/header', $data);
        $this->load->view('analista/inicio', $data);
        $this->load->view('analista/footer', $data);
    }

    public function perfil() {
//        $data['sesionusuario'] = $this->session->userdata('usrsesion');
        $sesionusuario = $this->session->userdata('usrsesion');

        $this->load->helper('form');

        $this->load->model('param_model');
        $this->data['divtipo'] = "alert alert-success alert-dismissable";
        $this->data['comuna'] = $this->param_model->get_comuna_by_comunaid(element('usrcomuna', $sesionusuario));


        $this->load->view('analista/header', $this->data);
        $this->load->view('analista/perfil', $this->data);
        $this->load->view('analista/footer', $this->data);
    }

    public function editar_informacion() {
        //$data['sesionusuario'] = $this->session->userdata('usrsesion');
        $sesionusuario = $this->session->userdata('usrsesion');
        //$data['mensaje'] = "";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('param_model');
        $this->load->model('usuario_model');

        $this->data['usuario'] = $this->usuario_model->get_usuario_by_login(element('usrlogin', $sesionusuario));
        $this->data['region_id'] = $this->param_model->get_region_comuna_by_comunaid(element('usrcomuna', $sesionusuario));

        if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') > 0) {

            /*  POSTS  */
            $usr_nombre = $this->input->post('usr_nombre');
            $usr_apellido = $this->input->post('usr_apellido');
            $usr_comuna = $this->input->post('sel_comuna');
            $usr_region = $this->input->post('sel_region');

            /* FORM VALIDATION */
            $this->form_validation->set_rules('usr_nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('usr_apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('sel_comuna', 'Comuna', 'required');
            $this->form_validation->set_rules('sel_region', 'Region', 'required');
            /* FORM MENSAJES */
            $this->form_validation->set_message('required', 'El campo {field} es requerido');

            if ($this->form_validation->run() == FALSE) {
                $this->data['mensaje'] = "El formulario presenta errores de validación";
                $this->data['divtipo'] = "alert alert-danger alert-dismissable";

                $this->data['lstregiones'] = $this->param_model->get_regiones();
                $this->data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($this->data['region_id']->region_id);
                $this->load->view('analista/header', $this->data);
                $this->load->view('analista/editar', $this->data);
                $this->load->view('analista/footer', $this->data);
            } else {

                $usuario = array(
                    'usr_nombre' => $usr_nombre,
                    'usr_apellido' => $usr_apellido,
                    'comuna_id' => $usr_comuna
                );
                $res = $this->usuario_model->update_usuario($this->data['usuario']->usuario_id, $usuario);
                if ($res == 1) {
                    $this->data['mensaje'] = "Sus datos han sido actualizado exitosamente";
                    $this->data['divtipo'] = "alert alert-success alert-dismissable";
                } else {
                    $this->data['mensaje'] = "Ocurrió un error al realizar la operación";
                    $this->data['divtipo'] = "alert alert-danger alert-dismissable";
                }

                $sesionusuario = array('usrlogin' => element('usrlogin', $sesionusuario), 'usrnombre' => $usr_nombre, 'usrapellido' => $usr_apellido, 'usrperfil' => element('usrperfil', $sesionusuario), 'usrid' => element('usruid', $sesionusuario), 'usrcomuna' => $usr_comuna);

                if ($this->session->userdata('usrsesion') != NULL) {
                    $this->session->unset_userdata('usrsesion');
                }

                $this->session->set_userdata('usrsesion', $sesionusuario);


                $this->session->set_flashdata('mensaje', $this->data['mensaje']);

                redirect('analista/perfil');
            }
        } else {

            $this->data['lstregiones'] = $this->param_model->get_regiones();
            $this->data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($this->data['region_id']->region_id);
            $this->load->view('analista/header', $this->data);
            $this->load->view('analista/editar', $this->data);
            $this->load->view('analista/footer', $this->data);
        }
    }

    public function cambiar_password() {
        $sesionusuario = $this->session->userdata('usrsesion');
        //$data['mensaje'] = "";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('usuario_model');
        $this->load->model('param_model');
        if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') > 0) {
            /*  POSTS  */
            $pass_last = $this->input->post('pass_last');
            $pass_new = $this->input->post('pass_new');
            $pass_new_repeat = $this->input->post('pass_new_repeat');

            /* FORM VALIDATION */
            $this->form_validation->set_rules('pass_last', 'Contraseña Antigua', 'callback_check_pass|required');
            $this->form_validation->set_rules('pass_new', 'Contraseña Nueva','required');
            $this->form_validation->set_rules('pass_new_repeat', 'Repetir Contraseña','required|callback_check_new_pass['.$pass_new.']');

            /* FORM MENSAJES */
            $this->form_validation->set_message('required', 'El campo {field} es requerido');
            $this->form_validation->set_message('check_pass', ' {field} no corresponde');
            $this->form_validation->set_message('check_new_pass', ' {field} no es igual');


            if ($this->form_validation->run() == FALSE) {
                $this->data['mensaje'] = "El formulario presenta errores de validación";
                $this->data['divtipo'] = "alert alert-danger alert-dismissable";

                $this->data['comuna'] = $this->param_model->get_comuna_by_comunaid(element('usrcomuna', $sesionusuario));

                $this->load->view('analista/header', $this->data);
                $this->load->view('analista/perfil', $this->data);
                $this->load->view('analista/footer', $this->data);
            } else {
                $pass_combo = array(
                    'usr_clave' => md5($pass_new_repeat)
                );
                $res = $this->usuario_model->set_pass(element('usrid', $sesionusuario), $pass_combo);
                if ($res == 1) {
                    $this->data['mensaje'] = "La contraseña han sido actualizado exitosamente";
                    $this->data['divtipo'] = "alert alert-success alert-dismissable";
                } else {
                    $this->data['mensaje'] = "Ocurrió un error al realizar la operación";
                    $this->data['divtipo'] = "alert alert-danger alert-dismissable";
                }

                $this->session->set_flashdata('mensaje', $this->data['mensaje']);
                redirect('analista/perfil');
            }
        }
    }

    
    /* CALLBACKS */
    public function check_pass($pass) {
        if (!empty($pass)) {
            $this->load->model('usuario_model');
            $current_pass = $this->usuario_model->get_pass(element('usrid', $this->session->userdata('usrsesion')));
            if ($current_pass->usr_clave === md5($pass)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return TRUE;
        }
    }
    
    public function check_new_pass($pass,$pass_repeat) {
        if (!empty($pass) && !empty($pass_repeat)) {
            if (strcmp($pass,$pass_repeat=== '0')) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return TRUE;
        }
    }

}
