<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filial extends CI_Controller {

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

		$this->load->model('filial_model');
		$data['lstfiliales'] = $this->filial_model->get_filiales();

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$this->load->view('analista/header',$data);
		$this->load->view('filial/listado',$data);
		$this->load->view('analista/footer',$data);

	}

	public function crear(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('filial_model');

		$data['lstregiones'] = $this->param_model->get_regiones();

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') == 1){
			$razonsocial = $this->input->post('txt_rsocial');
			$rut_dv = explode("-",$this->input->post('txt_rut'));

			$direccion = $this->input->post('txt_direccion');
			$direccion = trim($direccion) != "" ? $direccion : NULL;

			$region = $this->input->post('sel_region');
			$comuna = $this->input->post('sel_comuna');

			$this->form_validation->set_rules('txt_rsocial','Razón social','required');
//			$this->form_validation->set_rules('txt_rut','RUT','required|regex_match[/^[0-9]+-[0-9kK]{1}|\s/]');
			$this->form_validation->set_rules('txt_rut','RUT','required|callback_validar_rut');
			$this->form_validation->set_rules('txt_direccion','Dirección','min_length[5]|max_length[255]');
			$this->form_validation->set_rules('sel_region','Región','required');
			$this->form_validation->set_rules('sel_comuna','Comuna','required');

			$this->form_validation->set_message('required','El campo {field} es requerido');
			$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
			$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
			$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');
			$this->form_validation->set_message('validar_rut','El campo {field} no presenta un valor correcto');

			if ($this->form_validation->run() == FALSE){
				$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
				$data['mensaje'] = "El formulario presenta errores de validación";
				$data['divtipo'] = "alert alert-danger alert-dismissable";
			}
			else{
				$filial = array(
					'fil_nombre' => $razonsocial,
					'fil_rut' => $rut_dv[0],
					'fil_dv' => $rut_dv[1],
					'fil_direccion' => $direccion,
					'comuna_id' => $comuna,
					'fil_estado' => 1 
				);

				$res = $this->filial_model->agregar_filial($filial);

				if ($res == 1){
					$data['mensaje'] = "La filial ha sido agregada exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";
				}
				else{
					$data['mensaje'] = "Ocurrió un error al realizar la operación";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
				}

			}

		}

		$this->load->view('analista/header',$data);
		$this->load->view('filial/crear',$data);
		$this->load->view('analista/footer',$data);

	}


	public function editar($idfilial = NULL){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('filial_model');


		if ($this->input->post('hdn_idfilial') != "" && $this->input->post('hdn_idfilial') > 0){
			$idfilial = $this->input->post('hdn_idfilial');
			$razonsocial = $this->input->post('txt_rsocial');
			$rut_dv = explode("-",$this->input->post('txt_rut'));

			$direccion = $this->input->post('txt_direccion');
			$direccion = trim($direccion) != "" ? $direccion : NULL;

			$region = $this->input->post('sel_region');
			$comuna = $this->input->post('sel_comuna');

			$this->form_validation->set_rules('txt_rsocial','Razón social','required');
//			$this->form_validation->set_rules('txt_rut','RUT','required|regex_match[/^[0-9]+-[0-9kK]{1}|\s/]');
			$this->form_validation->set_rules('txt_rut','RUT','required|callback_validar_rut');
			$this->form_validation->set_rules('txt_direccion','Dirección','min_length[5]|max_length[255]');
			$this->form_validation->set_rules('sel_region','Región','required');
			$this->form_validation->set_rules('sel_comuna','Comuna','required');

			$this->form_validation->set_message('required','El campo {field} es requerido');
			$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
			$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
			$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');
			$this->form_validation->set_message('validar_rut','El campo {field} no presenta un valor correcto');

			if ($this->form_validation->run() == FALSE){
				$data['lstregiones'] = $this->param_model->get_regiones();
				$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
				$data['lstfiliales'] = $this->filial_model->get_filiales();
				$data['mensaje'] = "El formulario presenta errores de validación";
				$data['divtipo'] = "alert alert-danger alert-dismissable";

				$this->load->view('analista/header',$data);
				$this->load->view('filial/editar',$data);
				$this->load->view('analista/footer',$data);

			}
			else{
				$filial = array(
					'fil_nombre' => $razonsocial,
					'fil_rut' => $rut_dv[0],
					'fil_dv' => $rut_dv[1],
					'fil_direccion' => $direccion,
					'comuna_id' => $comuna,
					'fil_estado' => 1 
				);

				$res = $this->filial_model->actualizar_filial($filial,$idfilial);

				if ($res == 1){
					$data['mensaje'] = "La filial ha sido editada exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";
				}
				else{
					$data['mensaje'] = "Ocurrió un error al editar el registro";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
				}

				$data['lstfiliales'] = $this->filial_model->get_filiales();

				$this->load->view('analista/header',$data);
				$this->load->view('filial/listado',$data);
				$this->load->view('analista/footer',$data);

			}

		}
		else{

			$cantfilial = $this->filial_model->get_cant_filial_by_id($idfilial);

			if ($idfilial != NULL && $idfilial > 0 && $cantfilial == 1){

				$data['lstregiones'] = $this->param_model->get_regiones();
				$regfilial = $this->filial_model->get_filial_by_id($idfilial);
				$data['regfilial'] = $regfilial;
				$regcomuna = $this->param_model->get_comuna_by_comunaid($regfilial->comuna_id);
				$data['regcomuna'] = $regcomuna;
				$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($regcomuna->region_id);

				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";

				$this->load->view('analista/header',$data);
				$this->load->view('filial/editar',$data);
				$this->load->view('analista/footer',$data);

			}
			else{

				$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
				$data['divtipo'] = "alert alert-danger alert-dismissable";

				$data['lstfiliales'] = $this->filial_model->get_filiales();

				$this->load->view('analista/header',$data);
				$this->load->view('filial/listado',$data);
				$this->load->view('analista/footer',$data);

			}

		}

	}

	public function getComunas(){
		$postData = $this->input->post();
		$this->load->model('param_model');
		$result = $this->param_model->get_comunas_by_region($postData);
		echo json_encode($result);
	}

	public function activar($idfilial){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->model('filial_model');

		if (isset($idfilial) && $idfilial > 0){

			$res = $this->filial_model->activar_filial($idfilial);

			$data['mensaje'] = "La filial fue activada exitosamente";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
		}

		$data['lstfiliales'] = $this->filial_model->get_filiales();

		$this->load->view('analista/header',$data);
		$this->load->view('filial/listado',$data);
		$this->load->view('analista/footer',$data);

	}

	public function desactivar($idfilial){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->model('filial_model');

		if (isset($idfilial) && $idfilial > 0){

			$res = $this->filial_model->desactivar_filial($idfilial);

			$data['mensaje'] = "La filial fue desactivada exitosamente";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
		}

		$data['lstfiliales'] = $this->filial_model->get_filiales();

		$this->load->view('analista/header',$data);
		$this->load->view('filial/listado',$data);
		$this->load->view('analista/footer',$data);

	}

	function validar_rut($rut){

	    if(strpos($rut,"-")==false){
	        $RUT[0] = substr($rut, 0, -1);
	        $RUT[1] = substr($rut, -1);
	    }else{
	        $RUT = explode("-", trim($rut));
	    }
	    $elRut = str_replace(".", "", trim($RUT[0]));
	    $factor = 2;
	    $suma = 0;
	    for($i = strlen($elRut)-1; $i >= 0; $i--):
	        $factor = $factor > 7 ? 2 : $factor;
	        $suma += $elRut{$i}*$factor++;
	    endfor;
	    $resto = $suma % 11;
	    $dv = 11 - $resto;
	    if($dv == 11){
	        $dv=0;
	    }else if($dv == 10){
	        $dv="k";
	    }else{
	        $dv=$dv;
	    }
	    if($dv == trim(strtolower($RUT[1]))){
	       return true;
	    }else{
	       return false;
	    }

	}


}