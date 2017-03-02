<?php

Class Home_Model extends CI_model
{

	const db_table='home';
	const db_table_pk='h_id';

	public function gethome($home)
	{
		$this->db->select()-> from($this::db_table)->where("h_id",$home);
		$result=$this->db->get();
		return $result->first_row('array');
	}
	public function updateHome($h_id,$head,$body){

		$this->db->where('h_id',$h_id);
		$this->db->set(array('head'=>$head,'body'=>$body));
		$this->db->update($this::db_table);
		
	}
}
?>