<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Blog routes
$route['blog'] = 'Blog/index';
$route['blog/(:num)'] = 'Blog/index/$1';
$route['blog/view/(:any)'] = 'Blog/view/$1';

// Other existing routes (keep only the ones you need)
$route['solution'] = 'Other_Solution/Other_Solution';
$route['contactus'] = 'Contactus/Contactus';
$route['casestudy'] = 'Casestudy/Casestudy';
$route['thankyou'] = 'Thankyou/Thankyou';
$route['aboutus'] = 'Aboutus/Aboutus';
$route['features'] = 'Features/Features';
$route['industries'] = 'Industries/Industries';
$route['video'] = 'Video/Video';

// Solution routes
$route['elderly-care'] = 'Elderly_Care/Elderly_Care';
$route['collections'] = 'Banks_and_NBFCs/Banks_and_NBFCs';
$route['lending'] = 'Lending/Lending';
$route['pos-and-soundbox'] = 'Pos_and_Soundbox/Pos_and_Soundbox';
$route['consumer-electronics'] = 'Consumer_Electronics/Consumer_Electronics';

// SEO Pages
$route['field-force-management-software'] = 'SEO/field_force_management_software';
$route['field-force-management-systems-bangalore'] = 'SEO/field_force_management_systems_bangalore';
$route['field-team-management-software-with-task-assignment-features'] = 'SEO/field_team_management_software_with_task_assignment_features';
$route['the-next-generation-field-force-management-tools'] = 'SEO/the_next_generation_field_force_management_tools';
$route['mobile-workforce-tracking-for-medical-sales'] = 'SEO/mobile_workforce_tracking_for_medical_sales';
$route['field-service-management-software-for-small-business'] = 'SEO/field_service_management_software_for_small_business';

// Case Study routes
$route['how-imprint-field-force-management-solution-ensured-uptime-and-performance-of-atm-machines-a-case-study'] = 'Casestudy/how_imprint_field_force_management_solution_ensured_uptime_and_performance_of_atm_machines_a_case_study';
$route['transforming-fourty-percent-of-non-transacting-merchants-into-active-customers-with-imprint-field-force-management-solution-a-case-study'] = 'Casestudy/transforming_fourty_percent_of_non_transacting_merchants_into_active_customers_with_imprint_field_force_management_solution_a_case_study';
$route['Case-Study-FMC-Global-Streamlines-Agricultural-Field-Operations-with-Imprint-FSM-Software'] = 'Casestudy/Case_Study_FMC_Global_Streamlines_Agricultural_Field_Operations_with_Imprint_FSM_Software';
$route['Imprint-Transforming-Field-Service-Management-for-Consumer-Electronics-Companies'] = 'Casestudy/Imprint_Transforming_Field_Service_Management_for_Consumer_Electronics_Companies';
$route['Tracking-Sports-Teams-and-QR-based-Attendance-for-Club-Members-with-Imprint'] = 'Casestudy/Tracking_Sports_Teams_and_QR_based_Attendance_for_Club_Members_with_Imprint';
$route['IMPRINT-The-Game-Changer-for-Finetech-Companies'] = 'Casestudy/IMPRINT_The_Game_Changer_for_Finetech_Companies';
$route['Take-Your-Customer-Service-to-The-Next-Level-with-IMPRINT-Workforce-Automation'] = 'Casestudy/Take_Your_Customer_Service_to_The_Next_Level_with_IMPRINT_Workforce_Automation';
$route['Smooth-Monitoring-and-Management-of-Metro-Project-for-Large-Tier-2-City'] = 'Casestudy/Smooth_Monitoring_and_Management_of_Metro_Project_for_Large_Tier_2_City';
$route['Indias-largest-Mobile-Fuel-Supplier-Trusts-IMPRINT-for-Managing-its-Field-Workforce'] = 'Casestudy/Indias_largest_Mobile_Fuel_Supplier_Trusts_IMPRINT_for_Managing_its_Field_Workforce';
$route['Direct-Sales-Operations-Done-Right-with-IMPRINT-SFA'] = 'Casestudy/Direct_Sales_Operations_Done_Right_with_IMPRINT_SFA';
$route['transforming-sales-performance-in-the-solar-industry-with-imprint'] = 'Casestudy/transforming_sales_performance_in_the_solar_industry_with_imprint';
$route['empowering-financial-card-companies-with-imprint-for-effective-field-sales-operations'] = 'Casestudy/empowering_financial_card_companies_with_imprint_for_effective_field_sales_operations';
$route['security-guard-management'] = 'Casestudy/security_guard_management';