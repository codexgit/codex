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

	public function nueva($idfilempresa){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('param_model');
		$this->load->model('usuario_model');
		$this->load->model('encuesta_model');
		$this->load->helper('date');

		$sesionusuario = $this->session->userdata('usrsesion');
		$data['sesionusuario'] = $sesionusuario;
		$data['lstregiones'] = $this->param_model->get_regiones();

		if (isset($idfilempresa) && $idfilempresa > 0){

			$data['idfilempresa'] = $idfilempresa;

			$this->load->model('filialempresa_model');
			$data['detfilempresa'] = $this->filialempresa_model->get_filialempresa_by_id($idfilempresa);


			if ($this->input->post('hdn_filempresaid') != "" && $this->input->post('hdn_filempresaid') > 0){
				$run_dv = explode("-",$this->input->post('txt_run'));
				$nombres = $this->input->post('txt_nombres');
				$apellidop = $this->input->post('txt_apellidop');
				$apellidom = $this->input->post('txt_apellidom');
				$apellidom = trim($apellidom) != "" ? $apellidom : NULL;
				$region = $this->input->post('sel_region');
				$comuna = $this->input->post('sel_comuna');

				$this->form_validation->set_rules('txt_run','RUN','required|callback_validar_run');
				$this->form_validation->set_rules('txt_nombres','Nombres','required');
				$this->form_validation->set_rules('txt_apellidop','Apellido Paterno','required|min_length[2]|max_length[50]');
				$this->form_validation->set_rules('txt_apellidom','Apellido Materno','min_length[2]|max_length[50]');
				$this->form_validation->set_rules('sel_region','Región','required');
				$this->form_validation->set_rules('sel_comuna','Comuna','required');

				$this->form_validation->set_message('required','El campo {field} es requerido');
				$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
				$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
				$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');
				$this->form_validation->set_message('validar_run','El campo {field} no presenta un valor correcto');

				if ($this->form_validation->run() == FALSE){
					$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
					$data['mensaje'] = "El formulario presenta errores de validación";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
					$this->load->view('recopilador/header',$data);
					$this->load->view('encuesta/editar',$data);
					$this->load->view('recopilador/footer',$data);
				}
				else{

					$encuesta = array(
						'filial_empresa_id' => $idfilempresa,
						'enc_run' => $run_dv[0],
						'enc_dv' => $run_dv[1],
						'enc_nombres' => $nombres,
						'enc_apellido_p' => $apellidop,
						'enc_apellido_m' => $apellidom,
						'comuna_id' => $comuna,
						'usuario_id' => $sesionusuario['usrid'],
						'enc_fecha' => now(),
						'enc_estado' => 1 
					);

					$this->encuesta_model->agregar_encuesta($encuesta);
					$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idfilempresa);

					$data['mensaje'] = "La encuesta ha sido creada exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";

					$this->load->view('recopilador/header',$data);
					$this->load->view('encuesta/listado',$data);
					$this->load->view('recopilador/footer',$data);
				}
			}
			else{
				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";				
				$this->load->view('recopilador/header',$data);
				$this->load->view('encuesta/nueva',$data);
				$this->load->view('recopilador/footer',$data);
			}
		}
		else{

			$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/nueva',$data);
			$this->load->view('recopilador/footer',$data);

		}

	}

	
	public function editar($idencuesta){

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('param_model');
		$this->load->model('usuario_model');
		$this->load->model('encuesta_model');
		$this->load->helper('date');

		$sesionusuario = $this->session->userdata('usrsesion');
		$data['sesionusuario'] = $sesionusuario;
		//$data['lstregiones'] = $this->param_model->get_regiones();

		if (isset($idencuesta) && $idencuesta > 0){
			$data['idencuesta'] = $idencuesta;
			$data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/editar',$data);
			$this->load->view('recopilador/footer',$data);

		}
		else{

			$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/empresas',$data);
			$this->load->view('recopilador/footer',$data);

		}

	}	

	
	public function getComunas(){
		$postData = $this->input->post();
		$this->load->model('param_model');
		$result = $this->param_model->get_comunas_by_region($postData);
		echo json_encode($result);
	}

	public function trabajador($idencuesta){
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('param_model');
		$this->load->model('usuario_model');
		$this->load->model('encuesta_model');
		$this->load->helper('date');

		$sesionusuario = $this->session->userdata('usrsesion');		

		$data['sesionusuario'] = $sesionusuario;
		$data['lstregiones'] = $this->param_model->get_regiones();

		if (isset($idencuesta) && $idencuesta > 0){
			
			$data['idencuesta'] = $idencuesta;
			$data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		


			if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0){
				
				$dir_trab = $this->input->post('txt_direccion');					
				$num = $this->input->post('txt_numero');
				$poblacion = $this->input->post('txt_sector');
				$telef = $this->input->post('txt_tfijo');
				$celular = $this->input->post('txt_tmovil');
				$region = $this->input->post('sel_region');
				$f_nac = $this->input->post('txt_fecnacimiento');
				$genero = $this->input->post('rbt_genero');
				$jefe_fam = $this->input->post('rbt_jefefamilia');
				$f_indigena = $this->input->post('rbt_antind');
				$est_civil = $this->input->post('rbt_estcivil');
				$nacionalidad = $this->input->post('rbt_nacionalidad');
				$prev_salud = $this->input->post('sel_prevsalud');
				$tramo_salud = $this->input->post('txt_tramo');
				$prev_soc = $this->input->post('txt_prevsocial');
				
				
				//$this->form_validation->set_rules('txt_tmovil','Celular');				
				
				$this->form_validation->set_rules('txt_direccion', 'Dirección', 'min_length[5]|max_length[255]|required');
				$this->form_validation->set_rules('txt_numero','Numero Domicilio','required');				
				$this->form_validation->set_rules('txt_tmovil','Celular','required');	
				$this->form_validation->set_rules('txt_fecnacimiento','Fecha de nacimiento','required');		
				$this->form_validation->set_rules('rbt_genero','Genero','required');
				$this->form_validation->set_rules('rbt_jefefamilia','Jefe familiar','required');
				$this->form_validation->set_rules('rbt_antind','Ascendencia indigena','required');
				$this->form_validation->set_rules('rbt_estcivil','Estado civil','required');
				$this->form_validation->set_rules('rbt_nacionalidad','Nacionalidad','required');
				$this->form_validation->set_rules('sel_prevsalud','Prevision de salud','required');
				$this->form_validation->set_rules('txt_tramo','Isapre/Tramo','required');
				$this->form_validation->set_rules('txt_prevsocial','Prevision social','required');
				
				
				$this->form_validation->set_message('required','El campo {field} es requerido');
				$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
				$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
				//$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');
		

				if ($this->form_validation->run() == FALSE){
					
					$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
					$data['mensaje'] = "El formulario presenta errores de validación ";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
					$this->load->view('recopilador/header',$data);
					$this->load->view('encuesta/editar',$data);
					$this->load->view('recopilador/footer',$data);
				}
				else{

					$encuesta_trabajador = array(
					
						'encuesta_id' => $idencuesta,
						
						'trab_dir_calle' => $dir_trab,
						'trab_dir_numero' => $num,
						'trab_dir_sector' => $poblacion,
						'trab_tel_fijo' => $telef,
						'trab_tel_movil' => $celular,						
						'trab_fec_nacimiento' => $f_nac,
						'trab_genero' => $genero,
						'trab_jefe_familia' => $jefe_fam,
						'trab_ant_indigenas' => $f_indigena,
						'trab_est_civil' => $est_civil,
						'trab_nacionalidad' => $nacionalidad,
						'trab_prev_salud' => $prev_salud,
						'trab_prev_salud_d' => $tramo_salud,
						'trab_prev_social' => $prev_soc			

					);

					$this->encuesta_model->actualizar_encuesta_trabajador($encuesta_trabajador,$idencuesta);
					//$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

					$data['mensaje'] = "La encuesta ha sido modificada exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";

					$this->load->view('recopilador/header',$data);
					$this->load->view('encuesta/educacion',$data);
					$this->load->view('recopilador/footer',$data);
				}
			}
			else{
				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";				
				$this->load->view('recopilador/header',$data);
				$this->load->view('encuesta/empresas',$data);
				$this->load->view('recopilador/footer',$data);
			}
		}
		else{

			$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/editar',$data);
			$this->load->view('recopilador/footer',$data);
			
			
		}	
	}
	
	public function educacion($idencuesta){
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('param_model');
		$this->load->model('usuario_model');
		$this->load->model('encuesta_model');
		$this->load->helper('date');

		$sesionusuario = $this->session->userdata('usrsesion');		

		$data['sesionusuario'] = $sesionusuario;
		$data['lstregiones'] = $this->param_model->get_regiones();

		if (isset($idencuesta) && $idencuesta > 0){
			
			$data['idencuesta'] = $idencuesta;
			$data['detencuesta'] = $this->encuesta_model->get_encuesta_by_id($idencuesta);
			$data['mensaje'] = "";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		


			if ($this->input->post('hdn_encuestaid') != "" && $this->input->post('hdn_encuestaid') > 0){
				
				$niv_escuela = $this->input->post('rbt_niv_educacion');					
				$tipo_est = $this->input->post('rbt_tipo_est');
				$ult_curso = $this->input->post('rbt_ult_curso');
				$anio_egreso = $this->input->post('rbt_anio_egreso');
				$estudiando = $this->input->post('rbt_estudiando');
				$becas = $this->input->post('rbt_becas');
			
				
				
				//$this->form_validation->set_rules('txt_tmovil','Celular');				
				
				$this->form_validation->set_rules('rbt_niv_educacion', 'Nivel de Educación', 'required');
				$this->form_validation->set_rules('rbt_tipo_est','Tipo de estudios','required');				
				$this->form_validation->set_rules('rbt_ult_curso','Último curso','required');	
				$this->form_validation->set_rules('rbt_anio_egreso','Año de egreso','required');		
				$this->form_validation->set_rules('rbt_estudiando','Estudiando','required');
				$this->form_validation->set_rules('rbt_becas','Becas','required');
				
				
				
				$this->form_validation->set_message('required','El campo {field} es requerido');
				//$this->form_validation->set_message('min_length','El campo {field} debe tener al menos {param} caracteres');
				//$this->form_validation->set_message('max_length','El campo {field} debe tener a lo más {param} caracteres');
				//$this->form_validation->set_message('regex_match','El campo {field} no tiene el formato solicitado');
		

				if ($this->form_validation->run() == FALSE){
					
					$data['lstcomunas'] = $this->param_model->get_comunas_by_regionid($region);
					$data['mensaje'] = "El formulario presenta errores de validación oli ";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
					$this->load->view('recopilador/header',$data);
					$this->load->view('encuesta/educacion',$data);
					$this->load->view('recopilador/footer',$data);
				}
				else{

					$encuesta_educacion = array(
					
						'encuesta_id' => $idencuesta,
						
						'edu_nivel_esc' => $niv_escuela,
						'edu_tipo_est' => $tipo_est,
						'edu_ult_curso' => $ult_curso,
						'edu_anio_egreso' => $anio_egreso,
						'edu_estudiando' => $estudiando,						
						'edu_becas' => $becas								

					);

					$this->encuesta_model->actualizar_encuesta_educacion($encuesta_educacion,$idencuesta);
					//$data['lstencuestas'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($sesionusuario['usrid'],$idencuesta);

					$data['mensaje'] = "La encuesta ha sido modificada exitosamente";
					$data['divtipo'] = "alert alert-success alert-dismissable";

					$this->load->view('recopilador/header',$data);
					$this->load->view('encuesta/salud',$data);
					$this->load->view('recopilador/footer',$data);
				}
			}
			else{
				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";				
				$this->load->view('recopilador/header',$data);
				$this->load->view('encuesta/empresas',$data);
				$this->load->view('recopilador/footer',$data);
			}
		}
		else{

			$data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($sesionusuario['usrid']);

			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";

			$this->load->view('recopilador/header',$data);
			$this->load->view('encuesta/educacion',$data);
			$this->load->view('recopilador/footer',$data);
			
			
		}	
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
	

}