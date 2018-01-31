<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->helper('url');
        $this->load->helper('form');
        $data['mensaje'] = "Debe ingresar un usuario y clave";
        $data['divmensaje'] = "alert-danger display-hide";
        $data['idusuario'] = "";
        $this->load->view('inicio/ingreso', $data);
    }

    public function validar() {
        $this->load->library('session');
        $this->load->model('usuario_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $usr = $this->input->post('txt_usuario');
        $pas = $this->input->post('txt_clave');
        $chk = $this->input->post('chk_recordar');
        $data['idusuario'] = $usr;

        if (!isset($usr) || !isset($pas) || $usr == "" || $pas == "") {
            $data['mensaje'] = "Debe ingresar un usuario y clave";
        } else {
            $cantusr = $this->usuario_model->get_cant_usuario_by_login($usr);
            if ($cantusr == 1) {
                $row = $this->usuario_model->get_usuario_by_login($usr);
                if ($row->usr_clave != md5($pas)) {
                    $data['mensaje'] = "La clave ingresada es incorrecta";
                } else {

                    $sesionusuario = array('usrlogin' => $row->usr_login, 'usrnombre' => $row->usr_nombre, 'usrapellido' => $row->usr_apellido, 'usrperfil' => $row->perfil_id, 'usrid' => $row->usuario_id, 'usrcomuna' => $row->comuna_id);

                    if ($this->session->userdata('usrsesion') != NULL) {
                        $this->session->unset_userdata('usrsesion');
                    }

                    $this->session->set_userdata('usrsesion', $sesionusuario);

                    $data['mensaje'] = $row->usr_nombre . ", perfil: " . $row->perfil_id;

                    if (element('usrperfil', $sesionusuario) == 1) {
                        redirect('/administrador/index', 'refresh');
                    } else if (element('usrperfil', $sesionusuario) == 2) {
                        redirect('/analista/index', 'refresh');
                    } else {
                        redirect('/recopilador/index', 'refresh');
                    }
                }
            } else if ($cantusr == 0) {
                $data['mensaje'] = "Usuario no encontrado";
            } else {
                $data['mensaje'] = "Ocurrió un error al validar los datos; contacte al administrador";
            }
        }

        $data['divmensaje'] = "alert-danger display";
        $this->load->view('inicio/ingreso', $data);
    }

    public function salir() {
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $data['mensaje'] = "La sesión se ha cerrado exitosamente";
        $data['divmensaje'] = "alert-success display";
        $data['idusuario'] = "";

        if ($this->session->userdata('usrsesion') != NULL) {
            $this->session->unset_userdata('usrsesion');
        }

        $this->load->view('inicio/ingreso', $data);
    }

}
