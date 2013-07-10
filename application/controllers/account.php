<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function checklogin($username, $password)
	{
		var_dump($username);
		var_dump($password);

		$this->content = $this->load->view('welcome_message',null,true);
		$this->title = "Home Page";
	}

}

/* End of file account.php */
/* Location: ./application/controllers/account.php */