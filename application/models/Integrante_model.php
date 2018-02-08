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
	
	/*public function get_familia_by_id($idencuesta){		
		$query = $this->db->get_where('encuesta_familia',array('encuesta_id' => $idencuesta));
		//return $query->row_array();	
		return $query->first_row();		
	}
	*/
	public function get_familia_by_id($idencuesta){
			
			$this->db->select('*');
			$this->db->from('encuesta_familia');
			$this->db->where('encuesta_id',$idencuesta);
			$query = $this->db->get();
			return $query->result_array();
	}
	public function crear_encuesta_familia($encuesta_familia){			
		return $this->db->insert('encuesta_familia',$encuesta_familia);
	}
	
	public function actualizar_encuesta_familia($encuesta_familia){
		return $this->db->update('encuesta_familia',$encuesta_familia);
	}
	
	
	/////////////////////// FAMILIA DATOS //////////////////////////
	
	public function verificar_registro_familia_datos($encuesta_familia_id){
		$query = $this->db->get_where('familia_datos',array('encuesta_familia_id' => $encuesta_familia_id));
		//return $query->first_row();
		return $query->num_rows();
	}
	
	public function get_familia_datos_by_id($encuesta_familia_id){		
		$query = $this->db->get_where('familia_datos',array('encuesta_familia_id' => $encuesta_familia_id));
		return $query->row_array();			
	}
	
	public function crear_familia_datos($familia_datos){			
		return $this->db->insert('familia_datos',$familia_datos);
	}
	
	public function actualizar_familia_datos($familia_datos){
		return $this->db->update('familia_datos',$familia_datos);
	}
	
	
	/*public function get_familia_by_encuesta_id($idencuesta){
		
		$this->db->select('*');
		$this->db->from('encuesta_familia');
		$this->db->join('encuesta','encuesta_familia.encuesta_id = encuesta.encuesta_id','left');
		
		
		$query = $this->db->get_where('encuesta_familia',array('encuesta_id' => $idencuesta));
		///return $query->row_array();	
		return $query->result_array();
	}
	*/
	
	
}