<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Elderly_Care extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Elderly_Care()
	{		
		$this->load->view('body/solution/Elderly_Care');		
	}
}
