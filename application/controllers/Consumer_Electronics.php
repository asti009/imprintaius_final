<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Consumer_Electronics extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Consumer_Electronics()
	{		
		$this->load->view('body/solution/Consumer_Electronics');		
	}
}
