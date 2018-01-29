<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

    private $perfil;
    
    
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
        }
        
        
    }
    
    public function index(){
        
        
        $this->listado();
    }
    
    
    public function listado(){
        $sesionusuario = $this->session->userdata('usrsesion');
        
        $this->load->model('noticia_model');
        $this->load->library('form_validation');
        
        $data['sesionusuario'] = $this->session->userdata('usrsesion');
        $data['mensaje'] = "";
        $data['divtipo'] = "alert alert-success alert-dismissable";
        
        $data['lstnoticias'] = $this->noticia_model->get_noticias_by_perfilid(element('usrid', $sesionusuario));
        $this->load->view('analista/header', $data);
        $this->load->view('noticia/listado', $data);
        $this->load->view('analista/footer', $data);
    }
    
    
}