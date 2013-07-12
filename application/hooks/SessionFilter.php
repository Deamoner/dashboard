<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
  * MasterViewPostFilter is "post_controller" hook to be invoked so that every controller can be mapped to the master page.
  *
  */


class SessionFilter
{
	public function IsLoggedIn()
	{

		$redirectURL = $this->is_logged_in();
		redirect($redirectURL,'refresh');
	
	}

	private function is_logged_in() {
	    // Get current CodeIgniter instance
	    $CI =& get_instance();
	    $CI->load->helper('url');
	    //Load the session library first
	    if (!isset($this->CI->session))
	    {
	        $CI->load->library('session');
	    }

	    // We need to use $CI->session instead of $this->session
	    $user = $CI->session->userdata;

	    if (!isset($user)) { return '/'; } else { return '/main'; }
	}
}


?>