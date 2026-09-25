<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos_and_Soundbox extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function Pos_and_Soundbox()
    {
        $this->load->view('body/solution/pos_and_soundbox');
    }
}
