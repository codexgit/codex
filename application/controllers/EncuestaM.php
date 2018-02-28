<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EncuestaM extends CI_Controller {

    public function getComunas() {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");
        $this->load->model('param_model');
        $data['lstcomunas'] = $this->param_model->get_comunas();
        echo json_encode($data);
    }

    public function getRegiones() {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");
        $this->load->model('param_model');
        $data['lstregiones'] = $this->param_model->get_regiones();
        echo json_encode($data);
    }

}
