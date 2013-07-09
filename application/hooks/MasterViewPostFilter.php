<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
  * MasterViewPostFilter is "post_controller" hook to be invoked so that every controller can be mapped to the master page.
  *
  */

class MasterViewPostFilter
{
	public function LoadMasterView()
	{
		$CI =& get_instance();
		$CI->load->view("master_view", array('content' => $CI->content, 'title' => $CI->title));
	} 
}


?>