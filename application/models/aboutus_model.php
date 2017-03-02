<?php

Class Aboutus_Model extends CI_model
{

    const db_table='aboutus';
    const db_table_pk='a_id';

    public function getaboutus($aboutus)
    {
        $this->db->select()-> from($this::db_table)->where("a_id",$aboutus);
        $result=$this->db->get();
        return $result->first_row('array');
    }
    public function updateAboutus($a_id,$head,$body){

        $this->db->where('a_id',$a_id);
        $this->db->set(array('head'=>$head,'content'=>$body));
        $this->db->update($this::db_table);

    }
}
?>