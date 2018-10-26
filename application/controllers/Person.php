<?php
class Person extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('Person_Model');
	}

	public function index()
	{
		echo 'Hi from Person controller, index function!';
	}


	public function savedata()
	{
		//load registration view form
		$this->load->view('registration');

		//Check submit button
		if($this->input->post('savePerson'))
		{
			//get form's data and store in local variable
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');

			//call saverecords method of Person_Model and pass variables as parameter
			$this->Person_Model->saveperson($name,$email,$mobile);
			echo "Person Saved Successfully";
		}
	}



	public function show_data()
	{
		$result['persons_data']=$this->Person_Model->show_persons();
		$this->load->view('show_all_persons',$result);
	}
}
?>
