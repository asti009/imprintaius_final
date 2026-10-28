<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Terms_and_condition extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Terms_and_condition()
	{		
		$this->load->view('body/terms-and-condition/index');		
	}
	

}
