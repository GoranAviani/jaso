<?php
class Person_Model extends CI_Model
{
	function saveperson($name, $email, $mobile)
	{
		$query="insert into users values('','$name','$email','$mobile')";
		$this->db->query($query);
	}

	function show_persons()
	{
		$query=$this->db->query("select * from users");
		return $query->result();
	}


}
