<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Lending extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Lending()
	{		
		$this->load->view('body/solution/Lending');		
	}
}