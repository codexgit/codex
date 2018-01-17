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

}