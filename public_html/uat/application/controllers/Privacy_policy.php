<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Privacy_policy extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Privacy_policy()
	{		
		$this->load->view('body/privacy-policy/index');		
	} 
		Public	function AFM_privacy_policy()
	{		
		$this->load->view('body/privacy-policy/AFM-privacy-policy');		
	}
		Public	function Imprint_Privacy_policy()
	{		
		$this->load->view('body/privacy-policy/Imprint-Privacy-policy');		
	}
	Public	function Trakom_Privacy_policy()
	{		
		$this->load->view('body/privacy-policy/Trakom-Privacy-policy');		
	}
}