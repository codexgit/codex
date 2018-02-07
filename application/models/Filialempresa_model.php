<?php
class Filialempresa_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_filialempresa_by_id($idfilempresa) //Obtiene todas las filiales asociadas a una empresa en particular
        {
            $this->db->select('*');
            $this->db->from('filial_empresa');
            $this->db->join('filial','filial_empresa.filial_id = filial.filial_id','left');
            $this->db->join('empresa','filial_empresa.empresa_id = empresa.empresa_id','left');
            $this->db->where('filial_empresa.filial_empresa_id',$idfilempresa);
            $query = $this->db->get();
            return $query->first_row();
        }
		
		public function get_id_encuesta_by_filialempresa_id($idfilempresa){
			$this->db->select('encuesta_id');
			$this->db->from('encuesta');		
			$this->db->where('encuesta.filial_empresa_id',$idfilempresa);
			//$this->db->select('encuesta_id from filial_empresa where($idfilempresa = filial_empresa.empresa_id)');
			$query = $this->db->get();
			//$data = $query->result_array();	
			return $query->result_array();			
		}
			
			
			

}