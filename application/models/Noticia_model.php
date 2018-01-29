<?php

class Noticia_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_noticias() {

        $this->db->select('usuario.usr_nombre, noticia.not_encabezado, noticia.not_fec_publicacion');
        $this->db->from('noticia');
        $this->db->join('usuario', 'usuario.usuario_id = noticia.usuario_id', 'inner');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_noticias_by_perfilid($perfil_id) {
        $this->db->select('*');
        $this->db->from('noticia');
        $this->db->where('usuario_id', $perfil_id);
        $query = $this->db->get();
        return $query->result_array();
    }

}
