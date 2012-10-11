<?php

class Welcome extends CI_Controller {

	public function index()
	{

		$this->load->library('validation');

		$data = array(
			'username'	=> '',
			'password'	=> '123456',
			'conf_password'	=> '12345',
			'email'	=> 'email@emailcom'
		);

		$this->validation->set_data($data);

		$this->validation->set_rules('username','Username','required');
		$this->validation->set_rules('password','Password','required');
		$this->validation->set_rules('conf_password','Conf Password','required|matches[password]');
		$this->validation->set_rules('email','Email','required|valid_email');

		if($this->validation->run() === FALSE)
		{
			var_dump($this->validation->show_errors());	
		}
		else{
			echo 'VALID!';
		}
	}
}