<?php

Class Predictionsystem_Model extends CI_model
{

    const db_table='prediction_system';
    const db_table_pk='p_id';

    public function getpredictionsystem($asdf)
    {
        $this->db->select()-> from($this::db_table)->where("p_id","$asdf");
        $result=$this->db->get();
        return $result->first_row('array');
    }
    public function updateHomeData($head,$body1,$body2,$body3){

        $this->db->where('head',$head);
        $this->db->set(array('body1'=>$body1,'body2'=>$body2,'body3=>$body3'));
        $this->db->update($this::db_table);

    }
}
?>