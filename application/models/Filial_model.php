<?php
class Filial_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_filiales()
        {
            $this->db->select('*');
            $this->db->from('filial');
            $this->db->join('comuna','filial.comuna_id = comuna.comuna_id','left');
            $query = $this->db->get();
        	//$query = $this->db->get('filial');
        	return $query->result_array();
        }

        public function get_filial_by_id($idfilial){
            $query = $this->db->get_where('filial',array('filial_id' => $idfilial));
            return $query->first_row();
        }

        public function get_cant_filial_by_id($idfilial){
            $query = $this->db->get_where('filial',array('filial_id' => $idfilial, 'fil_estado' => 1));
            return $query->num_rows();
        }

        public function activar_filial($idfilial){
            $this->db->set('fil_estado',1,FALSE);
            $this->db->where('filial_id',$idfilial);
            return $this->db->update('filial');
        }

        public function desactivar_filial($idfilial){
            $this->db->set('fil_estado',0,FALSE);
            $this->db->where('filial_id',$idfilial);
            return $this->db->update('filial');
        }

        public function agregar_filial($filial){
            return $this->db->insert('filial',$filial);
        }

        public function actualizar_filial($filial, $idfilial){
            $this->db->where('filial_id',$idfilial);
            return $this->db->update('filial',$filial);
        }
        public function get_filiales_empresa($idempresa){			//Muestra las filiales asociadas a una empresa

            $this->db->select('*');
            $this->db->from('filial_empresa');
            
            $this->db->join('empresa','empresa.empresa_id = filial_empresa.empresa_id','inner');
            $this->db->join('filial','filial.filial_id = filial_empresa.filial_id','inner');            
            $this->db->where('filial_empresa.empresa_id',$idempresa);
            $query = $this->db->get();
            //$query = $this->db->get('filial');
            return $query->result_array();
        } 
		
        public function not_get_filiales_empresa($idempresa){ 		//Muestra las filiales que no están asociadas a la empresa
			
		
			
			$this->db->select('* from filial where filial_id not in (select filial_id from filial_empresa where empresa_id = '.$idempresa.')');
			$query = $this->db->get();
			return $query->result_array();
        } 
		
}