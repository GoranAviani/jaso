<?php
/**
 * Created by PhpStorm.
 * User: Goran
 * Date: 10/3/2018
 * Time: 10:02 PM
 */

class Test extends CI_Controller
{
	public function index()
	{
		//echo 'Hello World from test!';
		$this->load->view('test');
	}

	function phpinfo()
	{
		phpinfo();
	}

	public function testing($word, $number)
	{
		echo $word;
		echo $number;
	}


	private function _message()
	{
		//private method
	}


}


?>
