<?php

class Noticia_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_noticias() {

        $this->db->select('usuario.usr_nombre, noticia.not_encabezado, noticia.not_fec_publicacion');
        $this->db->from('noticia');
        $this->db->join('usuario', 'usuario.usuario_id = noticia.usuario_id', 'inner');
        $this->db->where('not_estado !=', '3');
        $this->db->order_by('not_fec_publicacion', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_noticias_by_perfilid($perfil_id) {
        $this->db->select('*');
        $this->db->from('noticia');
        $this->db->where('usuario_id', $perfil_id);
        $this->db->order_by('not_fec_publicacion', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function set_noticia($noticia) {
        return $this->db->insert('Noticia', $noticia);
    }
    
    public function bloquear_noticia($idnoticia) {
        $this->db->set('not_estado', 3, FALSE);
        $this->db->where('noticia_id', $idnoticia);
        return $this->db->update('noticia');
    }
    public function activar_noticia($idnoticia) {
        $this->db->set('not_estado', 1, FALSE);
        $this->db->where('noticia_id', $idnoticia);
        return $this->db->update('noticia');
    }

}
