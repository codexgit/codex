<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encuesta extends CI_Controller {

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

	public function empresas(){

		$sesionusuario = $this->session->userdata('usrsesion');
		$data['sesionusuario'] = $sesionusuario;

		$this->load->model('usuario_model');
		$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$this->load->view('recopilador/header',$data);
		$this->load->view('encuesta/empresas',$data);
		$this->load->view('recopilador/footer',$data);

	}


	public function listado($idfilempresa = NULL){

		$sesionusuario = $this->session->userdata('usrsesion');
		$data['sesionusuario'] = $sesionusuario;


		if (isset($idfilempresa) && $idfilempresa > 0){

			$data['idfilempresa'] = $idfilempresa;

			$this->load->model('encuesta_model');
			$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idfilempresa);
			$this->load->model('filialempresa_model');
			$data['detfilempresa'] = $this->filialempresa_model->get_filialempresa_by_id($idfilempresa);

			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/listado',$data);
			$this->load->view('recopilador/footer',$data);

		}
		else{

			$this->load->model('usuario_model');
			$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/empresas',$data);
			$this->load->view('recopilador/footer',$data);

		}

	}

}