<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Banks_and_NBFCs extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Banks_and_NBFCs()
	{		
		$this->load->view('body/solution/Banks_and_NBFCs');		
	}
}