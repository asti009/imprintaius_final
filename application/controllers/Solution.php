<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Solution extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Solution()
	{		
		$this->load->view('body/solution/index');		
	}
}
