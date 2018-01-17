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
		
		public function actualizar_beneficio($beneficio, $idbeneficio){
            $this->db->where('beneficio_id',$idbeneficio);
            return $this->db->update('beneficio',$beneficio);
        }
		
		public function agregar_beneficio($beneficio){
            return $this->db->insert('beneficio',$beneficio);
        }

		public function activar_beneficio($idbeneficio){
            $this->db->set('benef_estado',1,FALSE);
            $this->db->where('beneficio_id',$idbeneficio);
            return $this->db->update('beneficio');
        }
		
		public function en_procesamiento($idbeneficio){
            $this->db->set('benef_estado',2,FALSE);
            $this->db->where('beneficio_id',$idbeneficio);
            return $this->db->update('beneficio');
        }
		
		public function desactivar_beneficio($idbeneficio){
            $this->db->set('benef_estado',3,FALSE);
            $this->db->where('beneficio_id',$idbeneficio);
            return $this->db->update('beneficio');
        }
		
		
}