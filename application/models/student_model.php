<?php
	class student_model extends CI_Model
	{
		private $table= "sms";
		
		public function create()
		{
			$this->db->insert($this->table, $data);
			return TRUE;
		}
		
		public function read($condition=null)
		{
			 $this -> db -> select('*');
			 $this -> db -> from($this-> table);
			 if ( isset($condition)) $this->db->where($condition);
			 $query= $this->db->get();
			 return $query-> result_array();
		 
		}
		
		public function update()
		{
			$this->db->where($data);
			$this->db->update($this->table, $data);
			return TRUE;	
		}
		
		public function del()
		{
			$this->db->where($data);
			$this->db->delete($this->table);
			return TRUE;	
		}
	}
?>