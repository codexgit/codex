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
            $query = $this->db->get();
            return $query->result_array();
        }

        public function get_encuesta_by_id($idencuesta){
            $query = $this->db->get_where('encuesta',array('encuesta_id' => $idencuesta));
            return $query->first_row();
        }

        public function agregar_encuesta($encuesta){
            return $this->db->insert('encuesta',$encuesta);
        }	

		public function actualizar_encuesta_trabajador($encuesta_trabajador,$idencuesta){
			
			return $this->db->insert('encuesta_trabajador',$encuesta_trabajador);
		}
	
		public function actualizar_encuesta_educacion($encuesta_educacion,$idencuesta){
			return $this->db->insert('encuesta_educacion',$encuesta_educacion);
		}
		
		public function actualizar_encuesta_salud($encuesta_salud,$idencuesta){
			return $this->db->insert('encuesta_salud',$encuesta_salud);
		}
		public function actualizar_encuesta_vivienda($encuesta_vivienda,$idencuesta){
			return $this->db->insert('encuesta_vivienda',$encuesta_vivienda);
		}
	

}