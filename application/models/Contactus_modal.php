<?php
class Contactus_modal extends CI_Model
{
              public function __construct(){
		parent::__construct(); 
	}
              
	function insert_data($name,$email,$phone,$message)
	{
	$query=$this->db->query("select * from visitors_information where (email='".$email."' or phone='".$phone."')");
		$row = $query->num_rows();
		if($row)
		{
		$data['message']="<h3 style='color:red'>EmailID/ Phone number already exist</h3>";
		}
		else
		{
		$query=$this->db->query("insert into visitors_information set name='$name',email='$email',phone='$phone',message='$message'");

		$data['message']="<h3 style='color:blue'>Submitted</h3>";
		}

		$this->load->view('contact-us/index',@$data);
		}

	}
?>
