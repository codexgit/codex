<?php
class Encuesta_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_encuestas_by_usuario_filialempresa($idusuario,$idfilempresa)
        {
            $this->db->select('*');
            $this->db->from('encuesta');
            $this->db->join('comuna','encuesta.comuna_id = comuna.comuna_id','left');
            $where = "usuario_id = '".$idusuario."' AND filial_empresa_id = '".$idfilempresa."' AND (enc_estado = 1 OR enc_estado = 2)";
            $this->db->where($where);
            //$this->db->where('usuario_id',$idusuario);
            //$this->db->where('filial_empresa_id',$idfilempresa);
            //$this->db->where('enc_estado',1);
            //$this->db->or_where('enc_estado',2);

            $query = $this->db->get();
            return $query->result_array();
        }

}