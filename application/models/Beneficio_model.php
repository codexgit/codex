<?php
class Beneficio_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_beneficios()
        {
            $this->db->select('*');
            $this->db->from('beneficio');
            $this->db->join('subcat_beneficio','beneficio.subcat_beneficio_id = subcat_beneficio.subcat_beneficio_id','left');
            $query = $this->db->get();
        	return $query->result_array();
        }
		
		
		public function agregar_beneficio($beneficio){
            return $this->db->insert('beneficio',$beneficio);
        }

}