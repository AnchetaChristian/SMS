<?php
/**
 *
 */
class courses_model extends CI_Model
{
  private $table = "sms_courses";
  public function read_crs($condition=null) { //$condition=null//condition
    $this->db->select('*');
    $this->db->from($this->table);
    if (isset($condition) ) $this->db->where($condition);
    $query=$this->db->get();
    return $query->result_array();
  }
  public function create ($crs) {
    //$this->db->select('*');
    //$this->db->from($this->table);

    $this->db->insert($this->table, $crs);
    return TRUE;
  }
  public function new_crs() { //$condition=null//condition
    $this->db->select('*');
    $res = $this->db->select('crs_code');
    $this->db->from($this->table);
    

    // while($row = $res->fectch_assoc())
    // {
    //   $option .= '<option value = "'.$row['crs_code'].'">'.$row['crs_code'].'</option>';
    // }



    if (isset($condition) ) $this->db->where($condition);
    $query=$this->db->get();
    return $query->result_array();
  }
}

 ?>
