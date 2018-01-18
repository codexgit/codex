<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

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


		$this->load->model('empresa_model');
		$data['lstempresas'] = $this->empresa_model->get_empresas();

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";



		$this->load->view('analista/header',$data);
		$this->load->view('empresa/listado',$data);
		$this->load->view('analista/footer',$data);

	}

	
	public function crear(){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('empresa_model');

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
				$empresa = array(
					'emp_nombrenombre' => $razonsocial,
					'emp_rut' => $rut_dv[0],
					'emp_dv' => $rut_dv[1],
					'emp_direccion' => $direccion,
					'comuna_id' => $comuna,
					'emp_estado' => 1 
				);

				$res = $this->empresa_model->agregar_empresa($empresa);

				if ($res == 1){
					$data['mensaje'] = "La empresa ha sido agregada exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";
				}
				else{
					$data['mensaje'] = "Ocurrió un error al realizar la operación";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
				}

			}

		}

		$this->load->view('analista/header',$data);
		$this->load->view('empresa/crear',$data);
		$this->load->view('analista/footer',$data);


	}

	public function activar($idempresa){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->model('empresa_model');

		if (isset($idempresa) && $idempresa > 0){

			$res = $this->empresa_model->activar_empresa($idempresa);

			$data['mensaje'] = "La empresa fue activada exitosamente";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
		}

		$data['lstempresas'] = $this->empresa_model->get_empresas_filial();

		$this->load->view('analista/header',$data);
		$this->load->view('empresa/listado',$data);
		$this->load->view('analista/footer',$data);

	}


	public function desactivar($idempresa){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->model('empresa_model');

		if (isset($idempresa) && $idempresa > 0){

			$res = $this->empresa_model->desactivar_empresa($idempresa);

			$data['mensaje'] = "La empresa fue desactivada exitosamente";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
		}

		$data['lstempresas'] = $this->empresa_model->get_empresas_filial();

		$this->load->view('analista/header',$data);
		$this->load->view('empresa/listado',$data);
		$this->load->view('analista/footer',$data);

	}

	public function editar($idempresa = NULL){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('filial_model');
		$this->load->model('empresa_model');


		if ($this->input->post('hdn_idempresa') != "" && $this->input->post('hdn_idempresa') > 0){
			$idempresa = $this->input->post('hdn_idempresa');
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
				$data['lstempresas'] = $this->empresa_model->get_cant_filiales();
				$data['mensaje'] = "El formulario presenta errores de validación";
				$data['divtipo'] = "alert alert-danger alert-dismissable";

				$this->load->view('analista/header',$data);
				$this->load->view('empresa/editar',$data);
				$this->load->view('analista/footer',$data);

			}
			else{
				$empresa = array(
					'emp_nombre' => $razonsocial,
					'emp_rut' => $rut_dv[0],
					'emp_dv' => $rut_dv[1],
					'emp_direccion' => $direccion,
					'comuna_id' => $comuna,
					'emp_estado' => 1 
					
				);

				$res = $this->empresa_model->actualizar_empresa($empresa,$idempresa);

				if ($res == 1){
					$data['mensaje'] = "La empresa ha sido editada exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";
				}
				else{
					$data['mensaje'] = "Ocurrió un error al editar el registro";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
				}
				
				
				$data['lstempresas'] = $this->empresa_model->get_empresas();

				$this->load->view('analista/header',$data);
				$this->load->view('empresa/listado',$data);
				$this->load->view('analista/footer',$data);

			}

		}
		else{

			$cantempresas = $this->empresa_model->get_cant_empresa_by_id($idempresa);

			if ($idempresa != NULL && $idempresa > 0 && $cantempresas == 1){

				$data['lstregiones'] = $this->param_model->get_regiones();
				$regempresa = $this->empresa_model->get_empresa_by_id($idempresa);
				$data['regempresa'] = $regempresa;
				$regcomuna = $this->param_model->get_comuna_by_comunaid($regempresa->comuna_id);
				$data['regcomuna'] = $regcomuna;
				$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($regcomuna->region_id);

				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";

				$this->load->view('analista/header',$data);
				$this->load->view('empresa/editar',$data);
				$this->load->view('analista/footer',$data);

			}
			else{

				$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
				$data['divtipo'] = "alert alert-danger alert-dismissable";
				
				$data['lstempresas'] = $this->empresa_model->get_empresas();

				$this->load->view('analista/header',$data);
				$this->load->view('empresa/listado',$data);
				$this->load->view('analista/footer',$data);

			}
			

		}
		

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

	public function asignar($idempresa){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('filial_model');
		$this->load->model('empresa_filial_model');
		$this->load->model('empresa_model');
		
		$regempresa = $this->empresa_model->get_empresa_by_id($idempresa);
		$data['regempresa'] = $regempresa;
		$regcomuna = $this->param_model->get_comuna_by_comunaid($regempresa->comuna_id);
		
		if (isset($_POST) != "" && $this->input->post('sel_filial') > 0){
			$query=$this->input->post('sel_filial');
			$data['datos_asignar'] = $this->empresa_filial_model->asignar_filial($idempresa,$query);
			$data['mensaje'] = "La empresa se ha asignado existosamente a la filial";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
			
		
		$data['id_empresa'] = $idempresa;
		$data['lstfiliales'] = $this->filial_model->get_filiales_empresa($idempresa);
		$data['lstnotfiliales'] = $this->filial_model->not_get_filiales_empresa($idempresa);

		$this->load->view('analista/header',$data);
		$this->load->view('empresa/asignar',$data);
		$this->load->view('analista/footer',$data);


	}
}
	
	




