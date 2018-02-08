<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Integrante extends CI_Controller {
	
	private $idencuesta = null;
    private $data = null;
	private $idfamilia_datos = null;
	private $familia_datos = array();

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

	
	/*
	public function index($idencuesta) {


        $this->idencuesta = $idencuesta;
        //$this->data['sesionusuario'] = $this->session->userdata('usrsesion');
        //$this->data['mensaje'] = "";
        $this->datos_genereales();
        $this->lista_restricciones();
        $this->add_restriccion();
        
    }
	*/
	
	public function listado($idencuesta = NULL){		

		$sesionusuario = $this->session->userdata('usrsesion');
		$data['sesionusuario'] = $sesionusuario;
		
		if (isset($idencuesta) && $idencuesta > 0){

			$data['idencuesta'] = $idencuesta;			
			$this->load->model('encuesta_model');
			$data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
			//$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idfilempresa);
			$this->load->model('integrante_model');
			
			$data['lstintegrantes'] = $this->integrante_model->get_familia_by_id($idencuesta);
			
			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('integrante/listado',$data);
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

	public function nueva($idencuesta){
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('param_model');
		$this->load->model('usuario_model');
		$this->load->model('encuesta_model');
		$this->load->model('integrante_model');
		$this->load->helper('date');

		$sesionusuario = $this->session->userdata('usrsesion');		

		$data['sesionusuario'] = $sesionusuario;
		$data['lstregiones'] = $this->param_model->get_regiones();
	
		
		if (isset($idencuesta) && $idencuesta > 0){
			
			$data['idencuesta'] = $idencuesta;
			$data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
			
			$verificador = $this->integrante_model->verificar_registro_familia($idencuesta);
			
			if ($verificador > 0){
				
				$familiar = $this->integrante_model->get_familia_by_id($idencuesta);		
				
			}
			
			else{
				
				$encuesta_familia = array(				
				
				'fam_run'  => "",
				'fam_dv' => "",
				'fam_nombres' => "",
				'fam_apellido_p' => "",
				'fam_apellido_m' => "",
				'fam_fec_nacimiento' => "",
				'fam_genero' => "",
				'fam_nac_chilena' => ""								
				);							
			}
			
			$data['encuesta_familia']= $encuesta_familia;			
			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		

			if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0){
				
				$run = $this->input->post('txt_run');					
				$dv = $this->input->post('txt_dv');
				$nombres = $this->input->post('txt_nombres');
				$apellido_p = $this->input->post('txt_apellido_p');
				$apellido_m = $this->input->post('txt_apellido_m');				
				$fec_nacimiento = $this->input->post('txt_fec_nacimiento');
				$genero = $this->input->post('sel_genero');				
				$nac_chilena = $this->input->post('sel_nac_chilena');
					 
							
					
				
				$this->form_validation->set_rules('txt_run','RUN','required|callback_validar_run');
				//$this->form_validation->set_rules('txt_dv', 'Dirección', 'min_length[5]|max_length[255]|required');
				$this->form_validation->set_rules('txt_nombres','Nombres','required');
				$this->form_validation->set_rules('txt_apellido_p','Apellido Paterrno','required');				
				$this->form_validation->set_rules('txt_apellido_m','Apellido Materno','required');					
				$this->form_validation->set_rules('txt_fec_nacimiento','Fecha de nacimiento','required');		
				$this->form_validation->set_rules('sel_genero','Genero','required');				
				$this->form_validation->set_rules('sel_nac_chilena','Nacionalidad','required');
				
				
				
				$this->form_validation->set_message('required','El campo {field} es requerido');
				$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
				$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
				//$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');
		

				if ($this->form_validation->run() == FALSE){
					
					
					$data['mensaje'] = "El formulario presenta errores de validación ";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
					$this->load->view('recopilador/header',$data);
					$this->load->view('integrante/nueva',$data);
					$this->load->view('recopilador/footer',$data);
				}
				else{

					$encuesta_familia = array(
					
						'encuesta_id' => $idencuesta,
						
						'fam_run' => $run[0],
						'fam_dv' => $run[1],
						
						'fam_nombres' => $nombres,
						'fam_apellido_p' => $apellido_p,
						'fam_apellido_m' => $apellido_m,						
						'fam_fec_nacimiento' => $fec_nacimiento,
						'fam_genero' => $genero,
						'fam_nac_chilena' => $nac_chilena
						
						);
					
					if($verificador!=0){
						$this->integrante_model->actualizar_encuesta_familia($encuesta_familia);
						//$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

						$data['mensaje'] = "La encuesta ha sido modificada exitosamente";
						$data['divtipo'] = "alert alert-success alert-dismissable";						
						
						redirect('integrante/datos/'.$idfamilia_datos,'refresh');
					}
					else{
						$this->integrante_model->crear_encuesta_familia($encuesta_familia);
						//$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

						$data['mensaje'] = "La encuesta ha sido creada exitosamente";
						$data['divtipo'] = "alert alert-success alert-dismissable";			
						
						redirect('integrante/datos/'.$idfamilia_datos,'refresh');
					}
					
				}
			}
			else{
				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";	
					
				$this->load->view('recopilador/header',$data);
				$this->load->view('integrante/nueva',$data);
				$this->load->view('recopilador/footer',$data);
			}
		}
		else{
			
			$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
			$data['familiar'] = "";
			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/empresas',$data);
			$this->load->view('recopilador/footer',$data);
			
			
		}	
	}				
	
	public function datos($idfamilia_datos){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('param_model');
		$this->load->model('usuario_model');
		$this->load->model('encuesta_model');
		$this->load->model('integrante_model');
		$this->load->helper('date');

		$sesionusuario = $this->session->userdata('usrsesion');		

		$data['sesionusuario'] = $sesionusuario;
		$data['lstregiones'] = $this->param_model->get_regiones();
	
		
		if (isset($idfamilia_datos) && $idfamilia_datos > 0){
			
			$data['idfamilia_datos'] = $idfamilia_datos;
			$data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idfamilia_datos);
			
			$verificador = $this->integrante_model->verificar_registro_familia_datos($idfamilia_datos);
			
			if ($verificador > 0){
				
				$familiar = $this->integrante_model->get_familia_datos_by_id($idfamilia_datos);		
				
			}
			
			else{
				
				$familiar = array(				
				'encuesta_familia_id' => "",
				'fam_jefe_familia'  => "",
				'fam_ant_indigena' => "",
				'fam_parentesco' => "",
				'fam_es_carga' => "",
				'fam_padre_profesor' => ""	
					
				);							
			}
			
			$data['familiar']= $familiar;			
			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		

			if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0){
				
				$jefe_familia = $this->input->post('sel_jefe_familia');					
				$ant_indigena = $this->input->post('sel_ant_indigena');
				$padre_profesor = $this->input->post('sel_padre_profesor');	
				$parentesco = $this->input->post('sel_parentesco');
				$es_carga = $this->input->post('sel_es_carga');
					 
							
					
				
				$this->form_validation->set_rules('sel_jefe_familia','Jefe de Familia','required');
				$this->form_validation->set_rules('sel_ant_indigena','Ascendecia Indígena','required');
				$this->form_validation->set_rules('sel_padre_profesor','Padre Profesor','required');				
				$this->form_validation->set_rules('sel_parentesco','Parentesco','required');					
				$this->form_validation->set_rules('sel_es_carga','Es Carga','required');	
				
				
				
				$this->form_validation->set_message('required','El campo {field} es requerido');
				$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
				$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
				//$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');
		

				if ($this->form_validation->run() == FALSE){
					
					
					$data['mensaje'] = "El formulario presenta errores de validación ";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
					$this->load->view('recopilador/header',$data);
					$this->load->view('integrante/datos',$data);
					$this->load->view('recopilador/footer',$data);
				}
				else{
					
					$familia_datos = array(				
						'encuesta_familia_id' => $idfamilia_datos,
						'fam_jefe_familia'  => $jefe_familia,
						'fam_ant_indigena' => $ant_indigena,
						'fam_parentesco' => $parentesco,
						'fam_es_carga' => $es_carga,
						'fam_padre_profesor' => $padre_profesor								
						);	
					
					
					if($verificador!=0){
						$this->integrante_model->actualizar_familia_datos($familia_datos);
						//$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

						$data['mensaje'] = "La encuesta ha sido modificada exitosamente";
						$data['divtipo'] = "alert alert-success alert-dismissable";						
						
						redirect('integrante/salud/'.$idfamilia_datos,'refresh');
					}
					else{
						$this->integrante_model->crear_familia_datos($familia_datos);
						//$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

						$data['mensaje'] = "La encuesta ha sido creada exitosamente";
						$data['divtipo'] = "alert alert-success alert-dismissable";			
						
						redirect('integrante/salud/'.$idfamilia_datos,'refresh');
					}
					
				}
			}
			else{
				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";	
					
				$this->load->view('recopilador/header',$data);
				$this->load->view('integrante/nueva',$data);
				$this->load->view('recopilador/footer',$data);
			}
		}
		else{
			
			$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
			$data['familiar'] = "";
			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/empresas',$data);
			$this->load->view('recopilador/footer',$data);		
			
		}	
	}
	
	
	public function lista_integrantes() {
        $this->load->model('encuesta_model');
        $this->load->library('form_validation');
        $this->data['lstintegrantes'] = $this->encuesta_model->get_familia($this->idencuesta);
    }  	
	
	function validar_run($rut){
		
		if (preg_match("/^[0-9]+-[0-9kK]{1}|\s/", $rut)){

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
		else{
			return false;
		}


	}	
	
	//FECHAS
    public function fecha_a_unix($fecha) {
        if ($fecha != 0) {
            $fecha_convertida = DateTime::createFromFormat('d-m-Y', $fecha);
            return $fecha_convertida->format('U');
        } else {
            return 0;
        }
    }

}
