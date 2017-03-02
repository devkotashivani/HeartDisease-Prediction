<?php

class Charts_model extends CI_Model
{
    const DB_TABLE = "charts";
    const DB_TABLE_PK = "id";

    public function getCharts($id=-1,$sortBy="id")
    {
        if($id==-1)
        {
            $this->db->select()->from($this::DB_TABLE)->order_by($sortBy,'id');
            $result=$this->db->get();
            return $result->result_array();
        }
        else
        {
            $this->db->select()->from($this::DB_TABLE)->where('id',$id)->order_by($sortBy,'id');
            $result=$this->db->get();
            return $result->first_row('array');
        }
    }

    public function insert($data)
    {
        $this->db->insert($this::DB_TABLE,$data);
        return $this->db->insert_id();
    }

    public function update($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->set($data);
        $this->db->update($this::DB_TABLE);
    }

    public function deleteCharts($id)
    {
        $this->db->where('id',$id)->delete($this::DB_TABLE);
    }
}
