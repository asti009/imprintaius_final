<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class thankyou extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function thankyou()
	{		
		$this->load->view('body/thankyou/index');		
	}
	

}
