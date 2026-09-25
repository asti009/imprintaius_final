<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Casestudy extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function Casestudy()
	{
		$data['case_studies'] = [
          	[
				'title' => "Security Guard Management Case Study | IMPRINT AI",
				'description' => "Learn how IMPRINT AI transformed security guard attendance and payroll for a leading provider, cutting errors by 90% and ensuring 24/7 coverage.",
				'date' => "April 04, 2025",
				'link' => base_url('security-guard-management'),
				'image' => "assets/images/casestudy/security-guard-management.png",
				'category' => "Field Service"
			],
			[
				'title' => "Empowering Financial Card Companies with IMPRINT for Effective Field Sales Operations",
				'description' => "Financial card companies operate in a market where seamless merchant transactions are crucial to their business. With over 70% of merchants citing field support as a key factor in their decision to accept specific cards, ensuring efficient field sales operations is more important than ever.",
				'date' => "December 26, 2024",
				'link' => base_url('empowering-financial-card-companies-with-imprint-for-effective-field-sales-operations'),
				'image' => "assets/images/casestudy/empowering-financial-card-companies-with-imprint-for-effective-field-sales-operations.png",
				'category' => "Field Service"
			],
			[
				'title' => "Transforming Sales Performance in the Solar Industry with IMPRINT",
				'description' => "The solar industry, characterized by its dynamic and competitive landscape, relies heavily on field sales teams to drive growth.",
				'date' => "December 06, 2024",
				'link' => base_url('transforming-sales-performance-in-the-solar-industry-with-imprint'),
				'image' => "assets/images/casestudy/transforming-sales-performance-in-the-solar-industry-with-imprint.png",
				'category' => "Field Service"
			],
			[
				'title' => "How Imprint Field Force Management Solution Ensured Uptime and Performance of ATM Machines: A Case Study",
				'description' => "Maintaining 99% uptime for ATM machines is critical for banks and financial institutions to ensure customer satisfaction and smooth cash withdrawal operations",
				'date' => "October 16, 2024",
				'link' => base_url('how-imprint-field-force-management-solution-ensured-uptime-and-performance-of-atm-machines-a-case-study'),
				'image' => "assets/images/casestudy/how-imprint-field-force-management-solution-ensured-uptime-and-performance-of-atm-machines-a-case-study1.png",
				'category' => "Field Service"
			],
			[
				'title' => "Transforming 40% of Non-Transacting Merchants into Active Customers with Imprint’s Field Force Management Solution: A Case Study",
				'description' => "There is no denying the fact that digital transactions are here to stay. In today’s digitised economy, a smooth and reliable payment infrastructure is vital for businesses to thrive.",
				'date' => "October 08, 2024",
				'link' => base_url('transforming-fourty-percent-of-non-transacting-merchants-into-active-customers-with-imprint-field-force-management-solution-a-case-study'),
				'image' => "assets/images/casestudy/transforming-fourty-percent-of-non-transacting-merchants-into-active-customers-with-imprint-field-force-management-solution-a-case-study2.png",
				'category' => "Field Service"
			],
			[
				'title' => "Case Study: FMC Global Streamlines Agricultural Field Operations with Imprint FSM Software",
				'description' => "FMC Global, a leading Agritech company, is dedicated to improving agricultural practices by providing education, resources, and support to farmers.",
				'date' => "August 14, 2024",
				'link' => base_url('Case-Study-FMC-Global-Streamlines-Agricultural-Field-Operations-with-Imprint-FSM-Software'),
				'image' => "assets/images/casestudy/Case-Study-FMC-Global-Streamlines-Agricultural-Field-Operations-with-Imprint-FSM-Software1.png",
				'category' => "Field Service"
			],
			[
				'title' => "Imprint: Transforming Field Service Management for Consumer Electronics Companies",
				'description' => "Consumer electronics companies operate in a fast-paced industry where managing field service operations efficiently is crucial for customer satisfaction and business success.",
				'date' => "June 14, 2023",
				'link' => base_url('Imprint-Transforming-Field-Service-Management-for-Consumer-Electronics-Companies'),
				'image' => "assets/images/Imprint-Transforming-Field-Service-Management-for-Consumer-Electronics-Companies2.png",
				'category' => "Field Service"
			],
			[
				'title' => "Tracking Sports Teams & QR-based Attendance for Club Members with Imprint",
				'description' => "The rise in importance of various sports tournaments and increase in number of teams calls for a more systematic management of teams and sportspersons.",
				'date' => "December 16, 2022",
				'link' => base_url('Tracking-Sports-Teams-and-QR-based-Attendance-for-Club-Members-with-Imprint'),
				'image' => "assets/images/Tracking-Sports-Teams-and-QR-based-Attendance-for-Club-Members-with-Imprint-1.png",
				'category' => "Field Service"
			],
			[
				'title' => "IMPRINT: The Game Changer for Fintech Companies",
				'description' => "Fintech companies that offer Digital payment solutions or ATM management solutions rely largely on their field service agents for various after sales service activities i.e. installation, de-installation and other service requests related to POS machines, ATMs or other such devices, including MINI GPS & mPOS devices.",
				'date' => "December 08, 2022",
				'link' => base_url('IMPRINT-The-Game-Changer-for-Finetech-Companies'),
				'image' => "assets/images/case-study--D-1.png",
				'category' => "Services"
			],
			[
				'title' => "Take Your Customer Service to The Next Level with IMPRINT Workforce Automation",
				'description' => "Enhanced Customer Service & Higher Returns for Reputed PoS Company.",
				'date' => "January 17, 2022",
				'link' => base_url('Take-Your-Customer-Service-to-The-Next-Level-with-IMPRINT-Workforce-Automation'),
				'image' => "assets/images/outer-image.png",
				'category' => "Services"
			],
			[
				'title' => "Manage Infrastructure Projects Effortlessly with the Power of Imprint Work Force Automation: Smooth Monitoring and Management of Metro Project for Large Tier-2 City",
				'description' => "Enhanced Customer Service & Higher Returns for Reputed PoS Company.",
				'date' => "January 13, 2022",
				'link' => base_url('Smooth-Monitoring-and-Management-of-Metro-Project-for-Large-Tier-2-City'),
				'image' => "assets/images/Smooth-Monitoring-and-Management-of-Metro-Project-1.jpg",
				'category' => "Sales"
			],
			[
				'title' => "India's largest Mobile Fuel Supplier Trusts IMPRINT for Managing its Field Workforce",
				'description' => "Tricky transportation and lack of options for on-demand delivery of fuel have been a constant problem faced by corporates and educational institutions that run large fleets of vehicles.",
				'date' => "November 23, 2021",
				'link' => base_url('Indias-largest-Mobile-Fuel-Supplier-Trusts-IMPRINT-for-Managing-its-Field-Workforce'),
				'image' => "assets/images/Fuel-Supplier-Trusts-IMPRINT-1.jpg",
				'category' => "Sales"
			],
			[
				'title' => "Direct Sales Operations Done Right with IMPRINT SFA (Sales Force Automation): Effectively Managing Sales Channel for Reputed Insurance Company",
				'description' => "The client adopted IMPRINT SFA to streamline their direct sales operations, improve response time for clients and enhance overall productivity of the sales team…",
				'date' => "June 08, 2021",
				'link' => base_url('Direct-Sales-Operations-Done-Right-with-IMPRINT-SFA'),
				'image' => "assets/images/Direct-Sales-Operations-Done-Right-with-IMPRINT-SFA-1.jpg",
				'category' => "Sales"
			],
			[
				'title' => "How IMPRINT Streamlined Business Processes and Boosted Business for ImageSense Diagnostic",
				'description' => "In the current times, when COVID-19 #secondwave has become an uncontrollable storm that is stretching existing diagnostic facilities and health infrastructure to the seams, it is more important than ever to better manage and monitor these facilities.",
				'date' => "April 28, 2021",
				'link' => 'https://casestudy.imprintai.us/',
				'image' => "assets/images/casestudy.jpg",
				'category' => "Business"
			],
		];

		$this->load->view('body/Casestudy/index', $data);
	}
	public function Imprint_Transforming_Field_Service_Management_for_Consumer_Electronics_Companies()
	{
		$this->load->view('body/Casestudy/Imprint-Transforming-Field-Service-Management-for-Consumer-Electronics-Companies');
	}

	public function Tracking_Sports_Teams_and_QR_based_Attendance_for_Club_Members_with_Imprint()
	{
		$this->load->view('body/Casestudy/Tracking-Sports-Teams-and-QR-based-Attendance-for-Club-Members-with-Imprint');
	}

	public function IMPRINT_The_Game_Changer_for_Finetech_Companies()
	{
		$this->load->view('body/Casestudy/IMPRINT-The-Game-Changer-for-Finetech-Companies');
	}

	public function Take_Your_Customer_Service_to_The_Next_Level_with_IMPRINT_Workforce_Automation()
	{
		$this->load->view('body/Casestudy/Take-Your-Customer-Service-to-The-Next-Level-with-IMPRINT-Workforce-Automation');
	}

	public function Smooth_Monitoring_and_Management_of_Metro_Project_for_Large_Tier_2_City()
	{
		$this->load->view('body/Casestudy/Smooth-Monitoring-and-Management-of-Metro-Project-for-Large-Tier-2-City');
	}

	public function Indias_largest_Mobile_Fuel_Supplier_Trusts_IMPRINT_for_Managing_its_Field_Workforce()
	{
		$this->load->view('body/Casestudy/Indias-largest-Mobile-Fuel-Supplier-Trusts-IMPRINT-for-Managing-its-Field-Workforce');
	}

	public function Direct_Sales_Operations_Done_Right_with_IMPRINT_SFA()
	{
		$this->load->view('body/Casestudy/Direct-Sales-Operations-Done-Right-with-IMPRINT-SFA');
	}

	public function Case_Study_FMC_Global_Streamlines_Agricultural_Field_Operations_with_Imprint_FSM_Software()
	{
		$this->load->view('body/Casestudy/Case-Study-FMC-Global-Streamlines-Agricultural-Field-Operations-with-Imprint-FSM-Software');
	}

	public function transforming_fourty_percent_of_non_transacting_merchants_into_active_customers_with_imprint_field_force_management_solution_a_case_study()
	{
		$this->load->view('body/Casestudy/transforming-fourty-percent-of-non-transacting-merchants-into-active-customers-with-imprint-field-force-management-solution-a-case-study');
	}
	public function how_imprint_field_force_management_solution_ensured_uptime_and_performance_of_atm_machines_a_case_study()
	{
		$this->load->view('body/Casestudy/how-imprint-field-force-management-solution-ensured-uptime-and-performance-of-atm-machines-a-case-study');
	
	}
	public function transforming_sales_performance_in_the_solar_industry_with_imprint()
	{
		$this->load->view('body/Casestudy/transforming-sales-performance-in-the-solar-industry-with-imprint');
	}
	public function empowering_financial_card_companies_with_imprint_for_effective_field_sales_operations()
	{
		$this->load->view('body/Casestudy/empowering-financial-card-companies-with-imprint-for-effective-field-sales-operations');
	}
  public function security_guard_management()
	{
		$this->load->view('body/Casestudy/security-guard-management');
	}
}
