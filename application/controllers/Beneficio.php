<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beneficio extends CI_Controller {

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

	public function listado(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$this->load->model('beneficio_model');
		$data['lstbeneficios'] = $this->beneficio_model->get_beneficios();

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/listado',$data);
		$this->load->view('analista/footer',$data);

	}

	public function crear(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/crear',$data);
		$this->load->view('analista/footer',$data);

	}

	public function detalle(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/detalle',$data);
		$this->load->view('analista/footer',$data);

	}

	public function editar(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/editar',$data);
		$this->load->view('analista/footer',$data);

	}

	public function restricciones(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/restricciones',$data);
		$this->load->view('analista/footer',$data);

	}

}