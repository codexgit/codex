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
		
		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		
		
		if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') == 1){
			$ben_nom 	  = $this->input->post('txt_nbeneficio');
			$ben_anio	  = $this->input->post('txt_anio');
			$ben_fec_ini  = $this->input->post('txt_iniciov');
			$ben_fec_fin  = $this->input->post('txt_finv');
			$ben_fec_inip = $this->input->post('txt_inip');
			$ben_fec_finp = $this->input->post('txt_finp');
			
			$categoria	  = $this->input->post('sel_categoria');
			$subcategoria = $this->input->post('sel_subcategoria');
			
			//INICIO VALIDACIONES
			$this->form_validation->set_rules('txt_nbeneficio','Nombre Beneficio','required');
			$this->form_validation->set_rules('txt_anio','Año','required');
			$this->form_validation->set_rules('sel_categoria','Categoria','required');
			$this->form_validation->set_rules('sel_subcategoria','Subcategoria','required');
			
			$this->form_validation->set_rules('txt_inip','Inicio de postulación','required');
			$this->form_validation->set_rules('txt_finp','Fin de postulación','required');
			//MENSAJES	
			$this->form_validation->set_message('required','El campo {field} es requerido');
			$this->form_validation->set_message('alpha','El campo {field} tiene numeros');
			$this->form_validation->set_message('alpha-numeric','El campo {field} tiene caracteres');

			if ($this->form_validation->run() == FALSE){
				
				$data['lstsubcategorias'] = $this->param_model->get_subcategorias_by_categoriaid($categoria);
				$data['mensaje'] = "El formulario presenta errores de validación";
				$data['divtipo'] = "alert alert-danger alert-dismissable";
			}
			else{
				
				$beneficio = array(
					'benef_nombre' 			=> $ben_nom,
					'benef_anio' 			=> $ben_anio,
					'benef_fec_inicio' 		=> $ben_fec_ini,
					'benef_fec_fin' 		=> $ben_fec_fin,
					'benef_fec_iniciopos' 	=> $this->fecha_a_unix($ben_fec_inip),
					'benef_fec_finpos' 		=> $this->fecha_a_unix($ben_fec_finp),
					'subcat_beneficio_id'	=> $subcategoria,
					'benef_estado'			=> '3'
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

	public function activar($idbeneficio){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->model('beneficio_model');

		if (isset($idbeneficio) && $idbeneficio > 0){

			$res = $this->beneficio_model->activar_beneficio($idbeneficio);

			$data['mensaje'] = "El beneficio fue activado exitosamente";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
		}

		$data['lstbeneficios'] = $this->beneficio_model->get_beneficios();

	
		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/listado',$data);
		$this->load->view('analista/footer',$data);

	}
	
	public function desactivar($idbeneficio){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->model('beneficio_model');

		if (isset($idbeneficio) && $idbeneficio > 0){

			$res = $this->beneficio_model->desactivar_beneficio($idbeneficio);

			$data['mensaje'] = "El beneficio fue desactivado exitosamente";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
		}

		$data['lstbeneficios'] = $this->beneficio_model->get_beneficios();
		
		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/listado',$data);
		$this->load->view('analista/footer',$data);
		//redirect('/beneficio/listado');

	}
	
	public function en_procesamiento($idbeneficio){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->model('beneficio_model');

		if (isset($idbeneficio) && $idbeneficio > 0){

			$res = $this->beneficio_model->en_procesamiento($idbeneficio);

			$data['mensaje'] = "El beneficio fue puesto en procesamiento";
			$data['divtipo'] = "alert alert-success alert-dismissable";
		}
		else{
			$data['mensaje'] = "Ocurrió un error al procesar la solicitud";
			$data['divtipo'] = "alert alert-danger alert-dismissable";
		}

		$data['lstbeneficios'] = $this->beneficio_model->get_beneficios();
		
		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/listado',$data);
		$this->load->view('analista/footer',$data);

	}
	
	public function getSubcategorias(){
		$postData = $this->input->post();
		$this->load->model('param_model');
		$result = $this->param_model->get_subcategorias_by_categoria($postData);
		echo json_encode($result);
	}
	
	public function getOpciones(){
		$postData = $this->input->post();
		$this->load->model('param_model');
		$result = $this->param_model->get_opciones_by_campo($postData);
		echo json_encode($result);
	}
	
	
	public function detalle($idbeneficio){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');

		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('beneficio_model');
		
		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$data['beneficio']	= $this->beneficio_model->get_beneficio_by_id($idbeneficio);

		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/detalle',$data);
		$this->load->view('analista/footer',$data);

	}

	public function editar($idbeneficio){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('beneficio_model');
		
		$data['lstcategorias'] = $this->param_model->get_categorias();

		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";
		$data['beneficio']	= $this->beneficio_model->get_beneficio_by_id($idbeneficio);

		if($data['beneficio']!=FALSE){
			if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') == 1){
				$ben_nom 	  = $this->input->post('txt_nbeneficio');
				$ben_anio	  = $this->input->post('txt_anio');
				$ben_fec_ini  = $this->input->post('txt_iniciov');
				$ben_fec_fin  = $this->input->post('txt_finv');
				$ben_fec_inip = $this->input->post('txt_inip');
				$ben_fec_finp = $this->input->post('txt_finp');
				
				$categoria	  = $this->input->post('sel_categoria');
				$subcategoria = $this->input->post('sel_subcategoria');
				
				//INICIO VALIDACIONES
				$this->form_validation->set_rules('txt_nbeneficio','Nombre Beneficio','required');
				$this->form_validation->set_rules('txt_anio','Año','required');
				$this->form_validation->set_rules('sel_categoria','Categoria','required');
				$this->form_validation->set_rules('sel_subcategoria','Subcategoria','required');
				
				$this->form_validation->set_rules('txt_inip','Inicio de postulación','required');
				$this->form_validation->set_rules('txt_finp','Fin de postulación','required');
				//MENSAJES	
				$this->form_validation->set_message('required','El campo {field} es requerido');
				$this->form_validation->set_message('alpha','El campo {field} tiene numeros');
				$this->form_validation->set_message('alpha-numeric','El campo {field} tiene caracteres');

				if ($this->form_validation->run() == FALSE){
					
					$data['lstsubcategorias'] = $this->param_model->get_subcategorias_by_categoriaid($categoria);
					$data['mensaje'] = "El formulario presenta errores de validación";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
				}
				else{
					
					$beneficio = array(
						'benef_nombre' 			=> $ben_nom,
						'benef_anio' 			=> $ben_anio,
						'benef_fec_inicio' 		=> $ben_fec_ini,
						'benef_fec_fin' 		=> $ben_fec_fin,
						'benef_fec_iniciopos' 	=> $this->fecha_a_unix($ben_fec_inip),
						'benef_fec_finpos' 		=> $this->fecha_a_unix($ben_fec_finp),
						'subcat_beneficio_id'	=> $subcategoria,
						'benef_estado'			=> $data['beneficio']->benef_estado
					);
					$res = $this->beneficio_model->actualizar_beneficio($beneficio,$idbeneficio);
					if ($res == 1){
						$data['mensaje'] = "El beneficio ha sido actualizado exitosamente";
						$data['divtipo'] = "alert alert-success alert-dismissable";
					}
					else{
						$data['mensaje'] = "Ocurrió un error al realizar la operación";
						$data['divtipo'] = "alert alert-danger alert-dismissable";
					}
					
					$data['lstbeneficios'] = $this->beneficio_model->get_beneficios();

					$this->load->view('analista/header',$data);
					$this->load->view('beneficio/listado',$data);
					$this->load->view('analista/footer',$data);
					
				}
			

			}else{

				$data['lstsubcategorias'] = $this->param_model->get_subcategorias_by_categoriaid($data['beneficio']->cat_beneficio_id);

				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";
				
				
				$this->load->view('analista/header',$data);
				$this->load->view('beneficio/editar',$data);
				$this->load->view('analista/footer',$data);
			}
		}else{
			redirect('beneficio/listado');
		}
		

	}

	public function restricciones($idbeneficio){

		$data['sesionusuario'] = $this->session->userdata('usrsesion');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('param_model');
		$this->load->model('beneficio_model');
		
		$data['mensaje'] = "";
		$data['divtipo'] = "alert alert-success alert-dismissable";

		$data['beneficio']	= $this->beneficio_model->get_beneficio_by_id($idbeneficio);

		$data['lstcampos']	= $this->param_model->get_campos();


		if($data['beneficio']!=FALSE){
			
			if ($this->input->post('hdn_valor') != "" && $this->input->post('hdn_valor') == 1){
				//POST
				$campo = $this->input->post('sel_campo');
				//$opcion = $this->input->post('sel_opcion');
				//$rest_tipo = $this->input->post('sel_tipo');
				$rest_campo= $this->input->post('sel_campo');
				//$rest_opcion= $this->input->post('sel_opcion');
				//$rest_valor= $this->input->post('txt_valor');
				//$rest_grupo= "";
				// VALIDACIONES
				$this->form_validation->set_rules('sel_campo','Campo','required');
				//$this->form_validation->set_rules('sel_opcion','Opcion','required');
				//$this->form_validation->set_rules('sel_tipo','Tipo','required');
				//$this->form_validation->set_rules('sel_campo','Campo','required');
				//$this->form_validation->set_rules('sel_opcion','Opcion','required');
				//$this->form_validation->set_rules('txt_valor','Valor','required');
				
				// /VALIDACIONES
				
				// MENSAJES
				$this->form_validation->set_message('required','El campo {field} es requerido');
				// /MENSAJES 
				
				
				if ($this->form_validation->run() == FALSE){
					$data['lstopciones'] = $this->param_model->get_opciones_by_campoid($campo);
					$data['mensaje'] = "El formulario presenta errores de validación";
					$data['divtipo'] = "alert alert-danger alert-dismissable";
				}
				else{
					echo "CTM";
					$restriccion = array(
						//'restbenef_tipo' 			=> $rest_tipo,
						'campo_id' 			=> $rest_campo,
						/*'campo_valor_id' 			=> $rest_opcion,
						'restbenef_valor' 			=> $rest_valor,
						'restbenef_grupo_campo' 			=> $rest_grupo,*/
						'beneficio_id' => $idbeneficio
					);
					$res = $this->beneficio_model->agregar_restriccion($restriccion);
					if ($res == 1){
						$data['mensaje'] = "La restriccion ha sido agregado exitosamente";
						$data['divtipo'] = "alert alert-success alert-dismissable";
					}
					else{
						$data['mensaje'] = "Ocurrió un error al realizar la operación";
						$data['divtipo'] = "alert alert-danger alert-dismissable";
					}
					
					
					$data['lstbeneficios'] = $this->beneficio_model->get_beneficios();

					$this->load->view('analista/header',$data);
					$this->load->view('beneficio/listado',$data);
					$this->load->view('analista/footer',$data);
					
				}
			
			
			}else{

				

				$data['mensaje'] = "";
				$data['divtipo'] = "alert alert-success alert-dismissable";
				
				
				$this->load->view('analista/header',$data);
				$this->load->view('beneficio/restricciones',$data);
				$this->load->view('analista/footer',$data);
			}
		
		}else{
			redirect('beneficio/listado');
		}
		/*
		$this->load->view('analista/header',$data);
		$this->load->view('beneficio/restricciones',$data);
		$this->load->view('analista/footer',$data);
		*/
	}
	
	
	//FECHAS
	public function fecha_a_unix($fecha){
		$fecha_convertida= DateTime::createFromFormat('d-m-Y',$fecha);
		return $fecha_convertida->format('U');
		
	}
	

}