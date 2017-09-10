<?php
  /**
   *
   */
  class students_model extends CI_Model
  {
      private $table = "sms";

      public function create ($student) {
        //$this->db->select('*');
        //$this->db->from($this->table);

        $this->db->insert($this->table, $student);
        return TRUE;
      }
      public function read($condition=null) { //$condition=null//condition
        //SELECT * FORM sms
        $this->db->select('*');
        $this->db->from($this->table);

        //shorcut
        //$this->db->order_by('field_name');
        //joint
        //$this->db->join('table2','table.key=table2.fk','inner');

        //$this->db->select()
                  //->from()
                  //->join()
                  //->from()
        if (isset($condition) ) $this->db->where($condition);
        $query=$this->db->get();
        return $query->result_array();
      }
      public function update($id, $student) {
        $this->db->where("idno",$id);
        $this->db->update("sms", $student);
     //   $query=$this->db->get();
        return TRUE;
      }

      public function delete_students($id) {
        //$this->db->select('*');
        //$this->db->from($this->table);

        $this->db->where($id);
        $this->db->delete($this->table);
      //  $this->db->from($this->table);
        return TRUE;
        //$query=$this->db->get();
        //return $query->result_array();
      }
      //courses  public function read($condition=null) {

  }

 ?>
