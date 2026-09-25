<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class aboutus extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function aboutus()
	{		
		$this->load->view('body/aboutus/index');		
	}
	

}