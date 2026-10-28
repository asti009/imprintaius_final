<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contactus extends CI_Controller
{
	
  function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	
    	Public	function Contactus()
	{		
		$this->load->view('body/Contactus/index');
	}
	
Public function insert_data(){
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
		$interested=$_POST['interested'];
		

		 $data = array(
        'name'=>$name,
        'email_id'=>$email,
        'phone_number'=>$phone,
        'message'=>$message,
        'interested'=>$interested
        
  		  );		
		$this->db->insert('visitors_information',$data);		
	}

	Public function demo_data(){
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$companyName=$_POST['companyName'];
		$country=$_POST['country'];
		

		 $data = array(
        'name'=>$name,
        'work_email'=>$email,
        'phone_number'=>$phone,
        'company_name'=>$companyName,
        'country'=>$country
        
  		  );		
		$this->db->insert('request_demo',$data);		
	}

	Public function pricing_data(){
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$interested=$_POST['interested'];
		$radioValue=$_POST['radioValue'];
		$checkbox1=$_POST['checkbox1'];
		$checkbox2=$_POST['checkbox2'];
		$checkbox3=$_POST['checkbox3'];
		$checkbox4=$_POST['checkbox4'];
		$checkbox5=$_POST['checkbox5'];
		$checkbox6=$_POST['checkbox6'];
		$checkbox7=$_POST['checkbox7'];
		$checkbox8=$_POST['checkbox8'];
		$checkbox9=$_POST['checkbox9'];
		$checkbox10=$_POST['checkbox10'];
		$checkbox11=$_POST['checkbox11'];


		 $data = array(
        'name'=>$name,
        'email_id'=>$email,
        'phone_number'=>$phone,
        'interested'=>$interested,
        'radio_button'=>$radioValue,
        'check_box1'=>$checkbox1,
        'check_box2'=>$checkbox2,
        'check_box3'=>$checkbox3,
        'check_box4'=>$checkbox4,
        'check_box5'=>$checkbox5,
        'check_box6'=>$checkbox6,
        'check_box7'=>$checkbox7,
        'check_box8'=>$checkbox8,
        'check_box9'=>$checkbox9,
        'check_box10'=>$checkbox10,
        'check_box11'=>$checkbox11
        
  		  );		
		$this->db->insert('pricing',$data);		
	}
}
?>
