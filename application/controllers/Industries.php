<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Industries extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Industries()
	{		
		$this->load->view('body/Industries/index');		
	}

	Public function pharma_field_force_management_software()
	{		
		$this->load->view('body/Industries/pharma');		
	}

	Public function bank_nbfcs_field_force_management_software()
	{		
		$this->load->view('body/Industries/bank_nbfcs');		
	}
}