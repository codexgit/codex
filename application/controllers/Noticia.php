<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

    private $perfil;
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
            $this->data['mensaje'] = $this->session->flashdata('mensaje');
        }
        
    }

    public function index() {

        $this->listado();
    }

    public function listado() {
        $sesionusuario = $this->session->userdata('usrsesion');

        $this->load->model('noticia_model');
        $this->load->library('form_validation');

        $this->data['sesionusuario'] = $this->session->userdata('usrsesion');
        
        $this->data['divtipo'] = "alert alert-success alert-dismissable";

        $this->data['lstnoticias'] = $this->noticia_model->get_noticias_by_perfilid(element('usrid', $sesionusuario));
        $this->load->view('analista/header', $this->data);
        $this->load->view('noticia/listado', $this->data);
        $this->load->view('analista/footer', $this->data);
    }

    public function crear() {
        $this->data['sesionusuario'] = $this->session->userdata('usrsesion');
        $sesionusuario = $this->session->userdata('usrsesion');
        $this->load->library('form_validation');
        $this->load->model('noticia_model');
        $this->data['mensaje'] = "";
        $this->data['divtipo'] = "alert alert-success alert-dismissable";

        if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') == 1) {

            $txt_not_tit = $this->input->post('txt_not_til');
            $txt_not_enc = $this->input->post('txt_not_enc');
            $txt_not_cuerpo = $this->input->post('txt_not_cuerpo');

            /* INICIO DE VALIDACIONES */
            $this->form_validation->set_rules('txt_not_til', 'Título de la noticia', 'required|max_length[100]');
            $this->form_validation->set_rules('txt_not_enc', 'Encabezado de la noticia', 'required|max_length[250]');
            $this->form_validation->set_rules('txt_not_cuerpo', 'Cuerpo de la noticia', 'required|max_length[1000]');
            /* FIN DE VALIDACIONES */
            /* MENSAJES */
            $this->form_validation->set_message('required', 'El campo {field} es requerido');
            $this->form_validation->set_message('max_length', 'El campo %s ha superado el limite de caracteres permitidos (%s)');
            /* FIN MENSAJES */

            if ($this->form_validation->run() == FALSE) {
                $data['mensaje'] = "El formulario presenta errores de validación";
                $data['divtipo'] = "alert alert-danger alert-dismissable";
            } else {

                $noticia = array(
                    'usuario_id' => element('usrid', $sesionusuario),
                    'not_titulo' => $txt_not_tit,
                    'not_encabezado' => $txt_not_enc,
                    'not_cuerpo' => $txt_not_cuerpo,
                    'not_fec_publicacion' => time(),
                    'not_fec_modificacion' => 0,
                    'not_estado' => '1'
                        //'benef_estado' => '3'
                );
                $res = $this->noticia_model->set_noticia($noticia);
                if ($res == 1) {
                    $this->data['mensaje'] = "La noticia ha sido agregado exitosamente";
                    $this->data['divtipo'] = "alert alert-success alert-dismissable";
                } else {
                    $this->data['mensaje'] = "Ocurrió un error al realizar la operación";
                    $this->data['divtipo'] = "alert alert-danger alert-dismissable";
                }
            }
        }
        $this->load->view('analista/header', $this->data);
        $this->load->view('noticia/crear', $this->data);
        $this->load->view('analista/footer', $this->data);
    }
    
    
    public function desactivar($idnoticia) {

        $this->data['sesionusuario'] = $this->session->userdata('usrsesion');
        $this->load->model('noticia_model');

        if (isset($idnoticia) && $idnoticia > 0) {

            $res = $this->noticia_model->bloquear_noticia($idnoticia);

            $this->data['mensaje'] = "La noticia fue desactivada exitosamente";
            $this->data['divtipo'] = "alert alert-success alert-dismissable";
        } else {
            $this->data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $this->data['divtipo'] = "alert alert-danger alert-dismissable";
        }

        $this->session->set_flashdata('mensaje',$this->data['mensaje']);
        redirect('noticia/listado/');
        //redirect('/beneficio/listado');
    }
    
    public function activar($idnoticia) {

        $this->data['sesionusuario'] = $this->session->userdata('usrsesion');
        $this->load->model('noticia_model');

        if (isset($idnoticia) && $idnoticia > 0) {

            $res = $this->noticia_model->activar_noticia($idnoticia);

            $this->data['mensaje'] = "La noticia fue activada exitosamente";
            $this->data['divtipo'] = "alert alert-success alert-dismissable";
        } else {
            $this->data['mensaje'] = "Ocurrió un error al procesar la solicitud";
            $this->data['divtipo'] = "alert alert-danger alert-dismissable";
        }

        $this->session->set_flashdata('mensaje',$this->data['mensaje']);
        redirect('noticia/listado/');
        //redirect('/beneficio/listado');
    }
    
    

}
