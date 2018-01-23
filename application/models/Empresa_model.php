<?php

class Empresa_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_filiales() { //Devuelve un arreglo con todas las filiales 
        $this->db->select('*');
        $this->db->from('filial');
        $this->db->join('comuna', 'filial.comuna_id = comuna.comuna_id', 'left');
        $query = $this->db->get();
        //$query = $this->db->get('filial');
        return $query->result_array();
    }

    public function activar_empresa($idempresa) {
        $this->db->set('emp_estado', 1, FALSE);
        $this->db->where('empresa_id', $idempresa);
        return $this->db->update('empresa');
    }

    public function desactivar_empresa($idempresa) {
        $this->db->set('emp_estado', 0, FALSE);
        $this->db->where('empresa_id', $idempresa);
        return $this->db->update('empresa');
    }

    public function agregar_empresa($empresa) {
        return $this->db->insert('empresa', $empresa);
    }

    /*      public function get_empresas(){

      $this->db->select('*');
      $this->db->from('empresa');
      $this->db->join('comuna','empresa.comuna_id = comuna.comuna_id','left');
      $query = $this->db->get();
      //$query = $this->db->get('filial');
      return $query->result_array();
      }
     */

    public function get_cant_empresa_by_id($idempresa) {
        $query = $this->db->get_where('empresa', array('empresa_id' => $idempresa, 'emp_estado' => 1));
        return $query->num_rows();
    }

    public function get_empresa_by_id($idempresa) {
        $query = $this->db->get_where('empresa', array('empresa_id' => $idempresa));
        return $query->first_row();
    }

    public function get_empresas_filial() {  //Devuelve un arreglo de las filiales asociadas a la empresa
        $this->db->select('*');
        $this->db->from('filial_empresa');

        $this->db->join('empresa', 'empresa.empresa_id = filial_empresa.empresa_id', 'left');
        $this->db->join('filial', 'filial.filial_id = filial_empresa.filial_id', 'left');
        $this->db->join('comuna', 'empresa.comuna_id = comuna.comuna_id', 'inner');
        $query = $this->db->get();
        //$query = $this->db->get('filial');
        return $query->result_array();
    }

    public function get_empresas() {  //Devuelve un arreglo con todos los datos de la empresa junto con la cantidad de filiales asociadas
        $this->db->select('empresa.empresa_id,empresa.emp_nombre,empresa.emp_rut,empresa.emp_dv,empresa.emp_estado, comuna.nombre_comuna, count(filial_empresa.filial_id) as filiales from empresa left join filial_empresa on empresa.empresa_id = filial_empresa.empresa_id LEFT JOIN comuna ON empresa.comuna_id = comuna.comuna_id GROUP by empresa.empresa_id,empresa.emp_nombre,empresa.emp_rut,empresa.emp_dv,empresa.emp_estado, comuna.nombre_comuna');


        $query = $this->db->get();
        //$query = $this->db->get('filial');
        return $query->result_array();
    }

    public function actualizar_empresa($empresa, $idempresa) {
        $this->db->where('empresa_id', $idempresa);
        return $this->db->update('empresa', $empresa);
    }

}
