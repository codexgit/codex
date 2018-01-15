<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analista extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('array');

		if ($this->session->userdata('usrsesion') == NULL){
			redirect('/inicio/index','refresh');
		}
		else{
			$sesionusuario = $this->session->userdata('usrsesion');
			if (element('usrperfil',$sesionusuario) == 1){
				redirect('/administrador/index','refresh');
			}
			else if(element('usrperfil',$sesionusuario) == 3){
				redirect('/recopilador/index','refresh');
			}
		}
	}

	public function index(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$this->load->view('analista/header',$data);
		$this->load->view('analista/inicio',$data);
		$this->load->view('analista/footer',$data);

	}

}