<?php
/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 10/14/2018
 * Time: 6:37 PM
 */
   class Person_Model extends CI_Model {

	   function __construct() {
		   parent::__construct();
	   }

	   public function insert($data) {
		   if ($this->db->insert("person", $data)) {
			   return true;
		   }
	   }

	   public function delete($person_id) {
		   if ($this->db->delete("person", "person_id = ".$person_id)) {
			   return true;
		   }
	   }

	   public function update($data,$old_person_id) {
		   $this->db->set($data);
		   $this->db->where("person_id", $old_person_id);
		   $this->db->update("person", $data);
	   }
   }
?>
