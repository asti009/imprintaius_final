<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Other_Solution extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Other_Solution()
	{		
		$this->load->view('body/Other_Solution/index');		
	}
}