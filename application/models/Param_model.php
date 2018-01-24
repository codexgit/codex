<?php

class Param_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_regiones() {
        $query = $this->db->get('region');
        return $query->result_array();
    }

    public function get_categorias() {
        $query = $this->db->get('cat_beneficio');
        return $query->result_array();
    }

    public function get_subcategorias() {
        $query = $this->db->get('subcat_beneficio');
        return $query->result_array();
    }

    public function get_campos() {
        $query = $this->db->get('campo');
        return $query->result_array();
    }

    public function get_comuna_by_comunaid($idcomuna) {
        $query = $this->db->get_where('comuna', array('comuna_id' => $idcomuna));
        return $query->first_row();
    }

    public function get_comunas_by_regionid($idregion) {
        $this->db->select('*');
        $this->db->where('region_id', $idregion);
        $this->db->order_by('nombre_comuna', 'asc');
        $q = $this->db->get('comuna');
        $response = $q->result_array();
        return $response;
    }

    public function get_subcategorias_by_categoriaid($idcategoria) {
        $this->db->select('*');
        $this->db->where('cat_beneficio_id', $idcategoria);
        $this->db->order_by('subcat_benef_nombre', 'asc');
        $q = $this->db->get('subcat_beneficio');
        $response = $q->result_array();
        return $response;
    }

    public function get_opciones_by_campoid($idcampo) {
        $this->db->select('*');
        $this->db->where('campo_id', $idcampo);
        $this->db->order_by('camvalor_valor', 'asc');
        $q = $this->db->get('campo_valor');
        $response = $q->result_array();
        return $response;
    }

    //JSON
    public function get_comunas_by_region($postData) {
        $this->db->select('comuna_id,nombre_comuna');
        $this->db->where('region_id', $postData['region']);
        $this->db->order_by('nombre_comuna', 'asc');
        $q = $this->db->get('comuna');
        $response = $q->result_array();

        return $response;
    }

    public function get_subcategorias_by_categoria($postData) {
        $this->db->select('subcat_beneficio_id,subcat_benef_nombre');
        $this->db->where('cat_beneficio_id', $postData['categoria']);
        $this->db->order_by('subcat_benef_nombre', 'asc');
        $q = $this->db->get('subcat_beneficio');
        $response = $q->result_array();

        return $response;
    }

    public function get_opciones_by_campo($postData) {
        $this->db->select('campo_valor_id,camvalor_valor');
        $this->db->where('campo_valor.campo_id', $postData['campox']);
        $this->db->order_by('camvalor_valor', 'asc');
        $q = $this->db->get('campo_valor');
        $response = $q->result_array();

        return $response;
    }
    
    
    public function get_ctipo($postData) {
        $this->db->select('campo_tipo');
        $this->db->where('campo.campo_id', $postData['ctipo']);
        $q = $this->db->get('campo');
        $response = $q->result_array();

        return $response;
    }



    //FIN JSON
}
