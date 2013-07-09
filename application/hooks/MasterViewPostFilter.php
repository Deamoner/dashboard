<?php 


class MasterViewPostFilter
{
	public function LoadMasterView()
	{
		$CI =& get_instance();
		var_dump($CI->content);
		//var_dump($CI->router);
		$CI->load->view("master_view", array('content' => $CI->content, 'title' => $CI->title));
	} 
}


?>