<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmpresaM extends CI_Controller {

    public function getEmpresas() {

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");

        $this->load->model('empresa_model');

        $user_id = $this->input->post('user_id');

        /*
          $sesionusuario = $this->session->userdata('usrsesion');
          $data['sesionusuario'] = $sesionusuario;
         */
        $this->load->model('usuario_model');
        $data['lstfilusuario'] = $this->usuario_model->get_filial_empresa_by_usuario($user_id);
        $data['mensaje'] = "ALGO GRANDE ESTA NACIENDO";

        echo json_encode($data);
    }

    public function getTrabajadores() {

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");

        $filemp_id = $this->input->post('filemp_id');
        $user_id = $this->input->post('user_id');
        
        $this->load->model('encuesta_model');
        $data['lsttrabajadores'] = $this->encuesta_model->get_encuestas_by_usuario_filialempresa($user_id, $filemp_id);
 
        $data['mensaje'] = "ALGO GRANDE ESTA NACIENDO";

        echo json_encode($data);
    }

}
