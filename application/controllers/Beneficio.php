<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beneficio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('array');
		$this->load->helper('date');
		
		
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
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('beneficio_model');
		
		$data['lstcategorias'] = $this->param_model->get_categorias();
		$data['lstsubcategorias'] = $this->param_model->get_subcategorias();
		
		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		
		
		if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') == 1){
			$ben_nom 	  = $this->input->post('txt_nbeneficio');
			$ben_anio	  = $this->input->post('txt_anio');
			$ben_fec_ini  = $this->input->post('txt_iniciov');
			$ben_fec_fin  = $this->input->post('txt_finv');
			$ben_fec_inip = $this->input->post('txt_inip');
			$ben_fec_finp = $this->input->post('txt_finp');
			
			//INICIO VALIDACIONES
			$this->form_validation->set_rules('txt_nbeneficio','Nombre Beneficio','required|alpha');
			$this->form_validation->set_rules('txt_anio','Año','required');
			//MENSAJES	
			$this->form_validation->set_message('required','El campo {field} es requerido');
			$this->form_validation->set_message('alpha','El campo {field} tiene numeros');
			$this->form_validation->set_message('alpha-numeric','El campo {field} tiene caracteres');

			if ($this->form_validation->run() == FALSE){
				$data['lstcategorias'] = $this->param_model->get_categorias();
				$data['lstsubcategorias'] = $this->param_model->get_subcategorias();
				$data['mensaje'] = "El formulario presenta errores de validación";
				$data['divtipo'] = "alert alert-danger alert-dismissable";
			}
			else{
				
			
				$beneficio = array(
					'benef_nombre' 			=> $ben_nom,
					'benef_anio' 			=> $ben_anio,
					'benef_fec_inicio' 		=> $ben_fec_ini,
					'benef_fec_fin' 		=> $ben_fec_fin,
					'benef_fec_iniciopos' 	=> $ben_fec_inip,
					'benef_fec_finpos' 		=> $ben_fec_finp
				);
				$res = $this->beneficio_model->agregar_beneficio($beneficio);
				if ($res == 1){
					$data['mensaje'] = "El beneficio ha sido agregado exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";
				}
				else{
					$data['mensaje'] = "Ocurrió un error al realizar la operación";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
				}
				
			}
		}
		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/crear',$data);
		$this->load->view('analista/footer',$data);

	}

	
	public function getSubcategorias(){
		$postData = $this->input->post();
		$this->load->model('param_model');
		$result = $this->param_model->get_subcategorias_by_categoria($postData);
		echo json_encode($result);
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