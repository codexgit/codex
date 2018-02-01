<?php

class Usuario_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_usuario_by_login($login) {
        $query = $this->db->get_where('usuario', array('usr_login' => $login));
        return $query->first_row();
    }

    public function get_cant_usuario_by_login($login) {
        $query = $this->db->get_where('usuario', array('usr_login' => $login));
        return $query->num_rows();
    }

    public function get_filial_empresa_by_usuario($idusuario) {
        $this->db->select('filial_empresa.filial_empresa_id, filial.fil_rut, filial.fil_dv, filial.fil_nombre, empresa.emp_rut, empresa.emp_dv, empresa.emp_nombre, comuna.nombre_comuna');
        $this->db->from('usuario_filial_empresa');
        $this->db->join('filial_empresa', 'usuario_filial_empresa.filial_empresa_id = filial_empresa.filial_empresa_id', 'left');
        $this->db->join('filial', 'filial_empresa.filial_id = filial.filial_id', 'left');
        $this->db->join('empresa', 'filial_empresa.empresa_id = empresa.empresa_id', 'left');
        $this->db->join('comuna', 'empresa.comuna_id = comuna.comuna_id', 'left');
        $this->db->where('usuario_filial_empresa.usuario_id', $idusuario);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_usuario($usr_id, $usuario) {
        $this->db->where('usuario_id', $usr_id);
        return $this->db->update('usuario', $usuario);
    }

    public function set_pass($usr_id,$pass_new){
        $this->db->where('usuario_id', $usr_id);
        return $this->db->update('usuario', $pass_new);
    }
    public function get_pass($usr_id) {
        $this->db->select('usr_clave');
        $this->db->from('usuario');
        $this->db->where('usuario_id',$usr_id);
        $query = $this->db->get();
        return $query->first_row();
    }

}
