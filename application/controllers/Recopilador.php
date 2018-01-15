<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recopilador extends CI_Controller {

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
			else if(element('usrperfil',$sesionusuario) == 2){
				redirect('/analista/index','refresh');
			}
		}
	}

	public function index(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$this->load->view('recopilador/header',$data);
		$this->load->view('recopilador/inicio',$data);
		$this->load->view('recopilador/footer',$data);

	}

}