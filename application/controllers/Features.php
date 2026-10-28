<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Features extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Features()
	{		
		$this->load->view('body/Features/index');		
	}
	

}
