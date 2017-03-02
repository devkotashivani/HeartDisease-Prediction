<?php

Class Contactus_Model extends CI_model
{

    const db_table='contact_us';
    const db_table_pk='c_id';

    public function getcontactus($contactus)
    {
        $this->db->select()-> from($this::db_table)->where("c_id","$contactus");
        $result=$this->db->get();
        return $result->first_row('array');
    }
   
    public function updateContactus($c_id,$b1,$b2,$body1,$body2)
    {

        $this->db->where('c_id',$c_id);
        $this->db->set(array('b1'=>$b1,'b2'=>$b2,'body1'=>$body1,'body2'=>$body2));
        $this->db->update($this::db_table);

    }
}
?>