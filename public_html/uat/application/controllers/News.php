<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class news extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function News()
	{		
		$this->load->view('body/news/index');		
	}
		Public	function Asti_Flag_Flies_High_at_India_Innovation_Hub_Elevate_20()
	{		
		$this->load->view('body/news/Asti-Flag-Flies-High-at-India-Innovation-Hub-Elevate-20');		
	}
		Public	function Asti_Infotech_GIC_Award()
	{		
		$this->load->view('body/news/Asti-Infotech-GIC-Award');		
	}
	Public	function Appreciation_fuels_our_desire_for_Innovation()
	{		
		$this->load->view('body/news/Appreciation-fuels-our-desire-for-Innovation');		
	}
	Public	function Asti_Infotech_Recognized_Amongst_the_Most_Trusted_Companies_to_Watch_in_2022()
	{		
		$this->load->view('body/news/Asti-Infotech-Recognized-Amongst-the-Most-Trusted-Companies-to-Watch-in-2022');		
	}
	Public	function Asti_Infotech_Participated_in_the_iNFHRA_event_on_Global_Workspaces()
	{		
		$this->load->view('body/news/Asti-Infotech-Participated-in-the-iNFHRA-event-on-Global-Workspaces');		
	}
		Public	function Asti_Infotech_The_best_IoT_company_of_the_year()
	{		
		$this->load->view('body/news/Asti-Infotech-The-best-IoT-company-of-the-year');		
	}
    	Public	function Trakom_Best_School_App()
	{		
		$this->load->view('body/news/Trakom-Best-School-App');		
	}
		Public	function Championing_The_Business_Game()
	{		
		$this->load->view('body/news/Championing-The-Business-Game');		
	}
		Public	function PressReleases()
	{		
		$this->load->view('body/news/PressReleases');		
	}
}