<?php
/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 10/14/2018
 * Time: 6:21 PM
 */

   class Person_controller extends CI_Controller {

	   function __construct() {
		   parent::__construct();
		   $this->load->helper('url');
		   $this->load->database();
	   }

	   public function index() {
		   $query = $this->db->get("person"); //gets persons
		   $data['records'] = $query->result(); //saves ad data

		   $this->load->helper('url');
		   $this->load->view('Person_view',$data);
	   }

	   public function add_person_view() {
		   $this->load->helper('form');
		   $this->load->view('Person_add');
	   }

	   public function add_person() {
		   $this->load->model('Person_Model');

		   $data = array(
			   'person_id' => $this->input->post('person_id'),
			   'name' => $this->input->post('name')
		   );

		   $this->Person_Model->insert($data);

		   $query = $this->db->get("person");
		   $data['records'] = $query->result();
		   $this->load->view('Person_view',$data);
	   }

	   public function update_person_view() {
		   $this->load->helper('form');
		   $person_id = $this->uri->segment('3');
		   $query = $this->db->get_where("person",array("person_id"=>$person_id));
		   $data['records'] = $query->result();
		   $data['old_person_id'] = $person_id;
		   $this->load->view('Person_edit',$data);
	   }

	   public function update_person(){
		   $this->load->model('Person_Model');

		   $data = array(
			   'person_id' => $this->input->post('person_id'),
			   'name' => $this->input->post('name')
		   );

		   $old_person_id = $this->input->post('old_person_id');
		   $this->Person_Model->update($data,$old_person_id);

		   $query = $this->db->get("person");
		   $data['records'] = $query->result();
		   $this->load->view('Person_view',$data);
	   }

	   public function delete_person() {
		   $this->load->model('Person_Model');
		   $person_id = $this->uri->segment('3');
		   $this->Person_Model->delete($person_id);

		   $query = $this->db->get("person");
		   $data['records'] = $query->result();
		   $this->load->view('Person_view',$data);
	   }
   }
?>
