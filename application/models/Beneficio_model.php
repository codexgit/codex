<?php

class Beneficio_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_beneficios() {
        $this->db->select('*');
        $this->db->from('beneficio');
        $this->db->join('subcat_beneficio', 'beneficio.subcat_beneficio_id = subcat_beneficio.subcat_beneficio_id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_beneficio_by_id($idbeneficio) {
        $this->db->select('*');
        $this->db->from('beneficio');
        $this->db->join('subcat_beneficio', 'beneficio.subcat_beneficio_id = subcat_beneficio.subcat_beneficio_id', 'left');
        $this->db->join('cat_beneficio', 'cat_beneficio.cat_beneficio_id = subcat_beneficio.cat_beneficio_id', 'left');
        $this->db->where('beneficio_id', $idbeneficio);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {

            return $query->row();
        } else {
            return false;
        }
    }

    public function get_campo($idbeneficio) {
        $this->db->select('*');
        $this->db->from('beneficio');
        $this->db->join('subcat_beneficio', 'beneficio.subcat_beneficio_id = subcat_beneficio.subcat_beneficio_id', 'left');
        $this->db->join('cat_beneficio', 'cat_beneficio.cat_beneficio_id = subcat_beneficio.cat_beneficio_id', 'left');
        $this->db->where('beneficio_id', $idbeneficio);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {

            return $query->row();
        } else {
            return false;
        }
    }

    public function get_restricciones($idbeneficio) {
        $this->db->select('*');
        $this->db->from('beneficio_restriccion');
        $this->db->join('campo', 'beneficio_restriccion.campo_id = campo.campo_id', 'left');
        $this->db->where('beneficio_id', $idbeneficio);
        $query = $this->db->get();
        return $query->result_array();
        /* if($query->num_rows()==1){

          return $query->row();


          }else{
          return false;
          }
         */
    }

    public function actualizar_beneficio($beneficio, $idbeneficio) {
        $this->db->where('beneficio_id', $idbeneficio);
        return $this->db->update('beneficio', $beneficio);
    }

    public function agregar_beneficio($beneficio) {
        return $this->db->insert('beneficio', $beneficio);
    }

    public function agregar_restriccion($restriccion) {
        return $this->db->insert('beneficio_restriccion', $restriccion);
    }

    public function activar_beneficio($idbeneficio) {
        $this->db->set('benef_estado', 1, FALSE);
        $this->db->where('beneficio_id', $idbeneficio);
        return $this->db->update('beneficio');
    }

    public function en_procesamiento($idbeneficio) {
        $this->db->set('benef_estado', 2, FALSE);
        $this->db->where('beneficio_id', $idbeneficio);
        return $this->db->update('beneficio');
    }

    public function desactivar_beneficio($idbeneficio) {
        $this->db->set('benef_estado', 3, FALSE);
        $this->db->where('beneficio_id', $idbeneficio);
        return $this->db->update('beneficio');
    }

}
