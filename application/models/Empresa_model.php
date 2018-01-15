<?php
class Empresa_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_filiales(){
            $this->db->select('*');
            $this->db->from('filial');
            $this->db->join('comuna','filial.comuna_id = comuna.comuna_id','left');
            $query = $this->db->get();
            //$query = $this->db->get('filial');
            return $query->result_array();
        }

        public function activar_empresa($idempresa){
            $this->db->set('emp_estado',1,FALSE);
            $this->db->where('empresa_id',$idempresa);
            return $this->db->update('empresa');
        }

        public function desactivar_empresa($idempresa){
            $this->db->set('emp_estado',0,FALSE);
            $this->db->where('empresa_id',$idempresa);
            return $this->db->update('empresa');
        }

        public function agregar_empresa($empresa){
            return $this->db->insert('empresa',$empresa);
        }

        
        public function get_empresas(){

            $this->db->select('*');
            $this->db->from('empresa');
            $this->db->join('comuna','empresa.comuna_id = comuna.comuna_id','left');
            $query = $this->db->get();
            //$query = $this->db->get('filial');
            return $query->result_array();
        }     

        public function get_empresas_filial(){

            $this->db->select('*');
            $this->db->from('filial_empresa');
            
            $this->db->join('empresa','empresa.empresa_id = filial_empresa.empresa_id','left');
            $this->db->join('filial','filial.filial_id = filial_empresa.filial_id','left');
            $this->db->join('comuna','empresa.comuna_id = comuna.comuna_id','inner');
            $query = $this->db->get();
            //$query = $this->db->get('filial');
            return $query->result_array();
        }

 

        public function actualizar_empresa($empresa, $idempresa){
            $this->db->where('empresa_id',$idempresa);
            return $this->db->update('empresa',$empresa);
        }        

}