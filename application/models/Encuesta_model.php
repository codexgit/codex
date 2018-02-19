<?php

class Encuesta_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_encuestas_by_usuario_filialempresa($idusuario, $idfilempresa) {
        $this->db->select('*');
        $this->db->from('encuesta');
        $this->db->join('comuna', 'encuesta.comuna_id = comuna.comuna_id', 'left');
        $where = "usuario_id = '" . $idusuario . "' AND filial_empresa_id = '" . $idfilempresa . "' AND (enc_estado = 1 OR enc_estado = 2)";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_encuesta_by_id($idencuesta) {
        $query = $this->db->get_where('encuesta', array('encuesta_id' => $idencuesta));
        return $query->first_row();
    }

    public function agregar_encuesta($encuesta) {
        return $this->db->insert('encuesta', $encuesta);
    }

////////////////////////////////////TRABAJADOR//////////////////////////////////////



    public function verificar_registro_trabajador($idencuesta) {
        $query = $this->db->get_where('encuesta_trabajador', array('encuesta_id' => $idencuesta));
        //return $query->first_row();
        return $query->num_rows();
    }

    public function get_trabajador_by_id($idencuesta) {

        $this->db->select('*');
        $this->db->from('encuesta_trabajador');
        $this->db->where('encuesta_id', $idencuesta);
        $query = $this->db->get();
        return $query->row_array();


        /*
          $query = $this->db->get_where('encuesta_trabajador',array('encuesta_id' => $idencuesta));
          //return $query->first_row();
          return $query->result_array(); */
    }

    public function crear_encuesta_trabajador($encuesta_trabajador) {

        return $this->db->insert('encuesta_trabajador', $encuesta_trabajador);
    }

    public function actualizar_encuesta_trabajador($encuesta_trabajador) {

        return $this->db->update('encuesta_trabajador', $encuesta_trabajador);
    }

///////////////////////////////////EDUCACION//////////////////////////////////////////////		

    public function verificar_registro_educacion($idencuesta) {
        $query = $this->db->get_where('encuesta_educacion', array('encuesta_id' => $idencuesta));
        //return $query->first_row();
        return $query->num_rows();
    }

    public function get_educacion_by_id($idencuesta) {

        $query = $this->db->get_where('encuesta_educacion', array('encuesta_id' => $idencuesta));
        return $query->row_array();
    }

    public function crear_encuesta_educacion($encuesta_educacion) {

        return $this->db->insert('encuesta_educacion', $encuesta_educacion);
    }

    public function actualizar_encuesta_educacion($encuesta_educacion) {
        return $this->db->update('encuesta_educacion', $encuesta_educacion);
    }

/////////////////////////////////////SALUD//////////////////////////////////////////		

    public function verificar_registro_salud($idencuesta) {
        $query = $this->db->get_where('encuesta_salud', array('encuesta_id' => $idencuesta));
        //return $query->first_row();
        return $query->num_rows();
    }

    public function get_salud_by_id($idencuesta) {

        $query = $this->db->get_where('encuesta_salud', array('encuesta_id' => $idencuesta));
        return $query->row_array();
    }

    public function crear_encuesta_salud($encuesta_salud) {
        return $this->db->insert('encuesta_salud', $encuesta_salud);
    }

    public function actualizar_encuesta_salud($encuesta_salud) {
        return $this->db->update('encuesta_salud', $encuesta_salud);
    }

///////////////////////////////////////VIVIENDA////////////////////////////////////		

    public function verificar_registro_vivienda($idencuesta) {
        $query = $this->db->get_where('encuesta_vivienda', array('encuesta_id' => $idencuesta));
        //return $query->first_row();
        return $query->num_rows();
    }

    public function get_vivienda_by_id($idencuesta) {

        $query = $this->db->get_where('encuesta_vivienda', array('encuesta_id' => $idencuesta));
        return $query->row_array();
    }

    public function crear_encuesta_vivienda($encuesta_vivienda) {

        return $this->db->insert('encuesta_vivienda', $encuesta_vivienda);
    }

    public function actualizar_encuesta_vivienda($encuesta_vivienda) {
        return $this->db->update('encuesta_vivienda', $encuesta_vivienda);
    }

    public function get_familia($idencuesta) {
        $this->db->select('*');
        $this->db->from('encuesta_familia');
        $this->db->join('encuesta', 'encuesta_familia.encuesta_id = encuesta_encuesta_id', 'left');
        $this->db->join('encuesta_trabajador', 'encuesta_familia.encuesta_id = encuesta_trabajador.encuesta_id', 'left');

        $this->db->where('encuesta_id', $idencuesta);
        $query = $this->db->get();
        return $query->result_array();
        /* if($query->num_rows()==1){

          return $query->row();
          }else{
          return false;
          }
         */
    }

}
