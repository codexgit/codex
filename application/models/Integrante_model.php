<?php
class Integrante_model extends CI_Model {
	
	public function __construct()
        {
            $this->load->database();
        }

////////////////////////////// FAMILIA ////////////////////////////////////
	
	
	/*public function agregar_integrante($encuesta_familia){
			return $this->db->insert($encuesta_familia);
	}
	*/
	
	
	
	public function verificar_registro_familia($idencuesta){
		$query = $this->db->get_where('encuesta_familia',array('encuesta_id' => $idencuesta));
		//return $query->first_row();
		return $query->num_rows();
	}
	
	public function get_familia_by_id($idencuesta){
		
		$query = $this->db->get_where('encuesta_familia',array('encuesta_id' => $idencuesta));
		return $query->row_array();			
	}
	
	public function crear_encuesta_familia($encuesta_familia){			
		return $this->db->insert('encuesta_familia',$encuesta_familia);
	}
	
	public function actualizar_encuesta_familia($encuesta_familia){
		return $this->db->update('encuesta_familia',$encuesta_familia);
	}
}