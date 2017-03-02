<?php

Class Healthlife_Model extends CI_model
{

    const db_table='health_life';
    const db_table_pk='hl_id';

    public function gethealthlife($h_life)
    {
        $this->db->select()-> from($this::db_table)->where("hl_id","$h_life");
        $result=$this->db->get();
        return $result->first_row('array');
    }
    public function updateHealthLife($hl_id,$head,$subtitle,$body1,$body2,$body3,$b1,$b2,$b3){

        $this->db->where('hl_id',$hl_id);
        $this->db->set(array('header'=>$head,'subtitle'=>$subtitle,'body1'=>$body1,'body2'=>$body2,'body3'=>$body3,'b1'=>$b1,'b2'=>$b2,'b3'=>$b3));
        $this->db->update($this::db_table);

    }
}
?>