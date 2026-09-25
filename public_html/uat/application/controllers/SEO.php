<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Seo extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    public function field_force_management_software()
    {
        $this->load->view('body/seo/field-force-management-software');
    }
	public function field_force_management_systems_bangalore() 
	{
		$this->load->view('body/seo/field-force-management-systems-bangalore');
	}
	public function field_team_management_software_with_task_assignment_features() 
	{
		$this->load->view('body/seo/field-team-management-software-with-task-assignment-features');
	}
  public function the_next_generation_field_force_management_tools() 
	{
		$this->load->view('body/seo/the-next-generation-field-force-management-tools');
	}
    public function mobile_workforce_tracking_for_medical_sales()
    {
        $this->load->view('body/seo/mobile-workforce-tracking-for-medical-sales');
    }
  public function field_service_management_software_for_small_business()
    {
        $this->load->view('body/seo/field-service-management-software-for-small-business');
    }
}


