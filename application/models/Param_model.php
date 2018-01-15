<?php
class Param_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_regiones()
        {
        	$query = $this->db->get('region');
        	return $query->result_array();
        }

        public function get_comuna_by_comunaid($idcomuna)
        {
            $query = $this->db->get_where('comuna',array('comuna_id'=>$idcomuna));
            return $query->first_row();
        }

        public function get_comunas_by_region($postData){
            $this->db->select('comuna_id,nombre_comuna');
            $this->db->where('region_id', $postData['region']);
            $this->db->order_by('nombre_comuna','asc');
            $q = $this->db->get('comuna');
            $response = $q->result_array();

            return $response;
        }

        public function get_comunas_by_regionid($idregion){
            $this->db->select('*');
            $this->db->where('region_id', $idregion);
            $this->db->order_by('nombre_comuna','asc');
            $q = $this->db->get('comuna');
            $response = $q->result_array();
            return $response;
        }


}