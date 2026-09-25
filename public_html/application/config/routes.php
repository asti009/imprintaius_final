<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['solution']='Other_Solution/Other_Solution';
$route['contactus']='Contactus/Contactus';
$route['casestudy']='Casestudy/Casestudy';
// $route['blog']='Blog/Blog';
// $route['blog'] = 'blog/index';
// $route['blog/(:num)'] = 'Blog/Blog/$1';
// Route for handling default /blog URL
$route['blog'] = 'blog/blog';
$route['blog/(:num)'] = 'blog/blog/$1';
$route['thankyou']='Thankyou/Thankyou';
$route['aboutus']='Aboutus/Aboutus';
$route['features']='Features/Features';
$route['industries']='Industries/Industries';
$route['video']='Video/Video';

// ----------------solution-----------------------
$route['elderly-care']='Elderly_Care/Elderly_Care';
$route['collections']='Banks_and_NBFCs/Banks_and_NBFCs';
$route['lending']='Lending/Lending';
$route['pos-and-soundbox'] = 'Pos_and_Soundbox/Pos_and_Soundbox';
$route['consumer-electronics']='Consumer_Electronics/Consumer_Electronics';


// ----------------SEO Pages-----------------------
$route['field-force-management-software'] = 'SEO/field_force_management_software';
$route['field-force-management-systems-bangalore'] = 'SEO/field_force_management_systems_bangalore';
$route['field-team-management-software-with-task-assignment-features'] = 'SEO/field_team_management_software_with_task_assignment_features';
$route['the-next-generation-field-force-management-tools'] = 'SEO/the_next_generation_field_force_management_tools';
$route['mobile-workforce-tracking-for-medical-sales'] = 'SEO/mobile_workforce_tracking_for_medical_sales';
$route['field-service-management-software-for-small-business'] = 'SEO/field_service_management_software_for_small_business';





// ----------------case-study-----------------------

$route['how-imprint-field-force-management-solution-ensured-uptime-and-performance-of-atm-machines-a-case-study']='Casestudy/how_imprint_field_force_management_solution_ensured_uptime_and_performance_of_atm_machines_a_case_study';

$route['transforming-fourty-percent-of-non-transacting-merchants-into-active-customers-with-imprint-field-force-management-solution-a-case-study']='Casestudy/transforming_fourty_percent_of_non_transacting_merchants_into_active_customers_with_imprint_field_force_management_solution_a_case_study';

$route['Case-Study-FMC-Global-Streamlines-Agricultural-Field-Operations-with-Imprint-FSM-Software']='Casestudy/Case_Study_FMC_Global_Streamlines_Agricultural_Field_Operations_with_Imprint_FSM_Software';

$route['Imprint-Transforming-Field-Service-Management-for-Consumer-Electronics-Companies']='Casestudy/Imprint_Transforming_Field_Service_Management_for_Consumer_Electronics_Companies';

$route['Tracking-Sports-Teams-and-QR-based-Attendance-for-Club-Members-with-Imprint']='Casestudy/Tracking_Sports_Teams_and_QR_based_Attendance_for_Club_Members_with_Imprint';

$route['IMPRINT-The-Game-Changer-for-Finetech-Companies']='Casestudy/IMPRINT_The_Game_Changer_for_Finetech_Companies';

$route['Take-Your-Customer-Service-to-The-Next-Level-with-IMPRINT-Workforce-Automation']='Casestudy/Take_Your_Customer_Service_to_The_Next_Level_with_IMPRINT_Workforce_Automation';

$route['Smooth-Monitoring-and-Management-of-Metro-Project-for-Large-Tier-2-City']='Casestudy/Smooth_Monitoring_and_Management_of_Metro_Project_for_Large_Tier_2_City';

$route['Indias-largest-Mobile-Fuel-Supplier-Trusts-IMPRINT-for-Managing-its-Field-Workforce']='Casestudy/Indias_largest_Mobile_Fuel_Supplier_Trusts_IMPRINT_for_Managing_its_Field_Workforce';

$route['Direct-Sales-Operations-Done-Right-with-IMPRINT-SFA']='Casestudy/Direct_Sales_Operations_Done_Right_with_IMPRINT_SFA';
$route['transforming-sales-performance-in-the-solar-industry-with-imprint']='Casestudy/transforming_sales_performance_in_the_solar_industry_with_imprint';
$route['empowering-financial-card-companies-with-imprint-for-effective-field-sales-operations']='Casestudy/empowering_financial_card_companies_with_imprint_for_effective_field_sales_operations';
$route['security-guard-management']='Casestudy/security_guard_management';


// -------------------Blogs-------------------------

$route['five-imprint-features-you-havent-discovered-yet']='Blog/five_imprint_features_you_havent_discovered_yet';

$route['use-of-crm']='Blog/use_of_crm';

$route['work-management']='Blog/work_management';

$route['Expense-management-for-field-employees-maximizing-efficiency-transparency']='Blog/Expense_management_for_field_employees_maximizing_efficiency_transparency';

$route['The-role-of-analytics-in-field-service-management']='Blog/The_role_of_analytics_in_field_service_management';

$route['can-imprint-ai-help-small-businesses']='Blog/can_imprint_ai_help_small_businesses';

$route['what-is-field-force-management-software']='Blog/what_is_field_force_management_software';

$route['ways-to-generate-and-nurture-leads']='Blog/ways_to_generate_and_nurture_leads';

$route['how-can-businesses-build-a-digitally-ready-workforce']='Blog/how_can_businesses_build_a_digitally_ready_workforce';

$route['effective-management-of-sales-channel-for-a-reputed-insurance-company']='Blog/effective_management_of_sales_channel_for_a_reputed_insurance_company';

$route['what-is-your-approach-to-customer-data']='Blog/what_is_your_approach_to_customer_data';

$route['five-ways-to-develop-strong-work-ethics-among-employees']='Blog/five_ways_to_develop_strong_work_ethics_among_employees';

$route['indias-largest-mobile-fuel-supplier-trusts-imprint-for-its-field-workforce']='Blog/indias_largest_mobile_fuel_supplier_trusts_imprint_for_its_field_workforce';

$route['how-to-build-a-data-driven-crm-strategy']='Blog/how_to_build_a_data_driven_crm_strategy';

$route['how-imprint-boosted-business-for-imagesense-diagnostics']='Blog/how_imprint_boosted_business_for_imagesense_diagnostics';

$route['the-imprint-approach-catering-to-the-gen-z-and-gen-y-customers']='Blog/the_imprint_approach_catering_to_the_gen_z_and_gen_y_customers';

$route['top-5-ways-to-boost-your-team-morale']='Blog/top_5_ways_to_boost_your_team_morale';

$route['whats-new-with-imprint']='Blog/whats_new_with_imprint';

$route['the-imprint-success-one-of-the-leading-nbfcs-in-india-has-adopted-imprint']='Blog/the_imprint_success_one_of_the_leading_nbfcs_in_india_has_adopted_imprint';

$route['linkedin-a-powerful-networking-tool']='Blog/linkedin_a_powerful_networking_tool';

$route['four-tools-to-be-used-for-increasing-sales-in-2022']='Blog/four_tools_to_be_used_for_increasing_sales_in_2022';

$route['enhance-your-customer-experience-like-never-before-3-ways-to-make-it-happen']='Blog/enhance_your_customer_experience_like_never_before_3_ways_to_make_it_happen';

$route['a-cost-effective-workforce-management-solution']='Blog/a_cost_effective_workforce_management_solution';

$route['imprint-and-industries']='Blog/imprint_and_industries';

$route['how-can-a-lead-management-system-help-in-your-business']='Blog/how_can_a_lead_management_system_help_in_your_business';

$route['workforce-automation-and-its-benefits']='Blog/workforce_automation_and_its_benefits';

$route['how-to-have-better-control-and-improved-roi']='Blog/how_to_have_better_control_and_improved_roi';

$route['how-can-data-management-save-your-time-and-help-you-improve-your-sales']='Blog/how_can_data_management_save_your_time_and_help_you_improve_your_sales';

$route['how-to-improve-your-workforce-efficiency']='Blog/how_to_improve_your_workforce_efficiency';

$route['understanding-field-workforce-management']='Blog/understanding_field_workforce_management';

$route['five-reasons-why-imprint-ai-is-for-your-business']='Blog/five_reasons_why_imprint_ai_is_for_your_business';

$route['A-day-in-the-life-of-a-field-sales-agent']='Blog/A_day_in_the_life_of_a_field_sales_agent';

$route['How-to-nurture-a-motivated-field-sales-team']='Blog/How_to_nurture_a_motivated_field_sales_team';

$route['Does-chatgpt-usher-in-the-future-we-were-dreaming-of']='Blog/Does_chatgpt_usher_in_the_future_we_were_dreaming_of';

$route['Why-imprint-ai-is-trusted-worldwide-for-its-extensive-workforce-automation-features']='Blog/Why_imprint_ai_is_trusted_worldwide_for_its_extensive_workforce_automation_features';

$route['Importance-of-beat-planning-for-sales-and-distribution-agents']='Blog/Importance_of_beat_planning_for_sales_and_distribution_agents';

$route['How-gps-technology-has-changed-productivity-measures-in-sales-space']='Blog/How_gps_technology_has_changed_productivity_measures_in_sales_space';

$route['Whats-new-with-imprint-ai']='Blog/Whats_new_with_imprint_ai';

$route['The-ideal-companion-to-every-sales-personnel-ever']='Blog/The_ideal_companion_to_every_sales_personnel_ever';

$route['Multiple-problems-one-solution-imprint-ai']='Blog/Multiple_problems_one_solution_imprint_ai';

$route['Make-your-small-business-digitally-booming-the-imprint-solution']='Blog/Make_your_small_business_digitally_booming_the_imprint_solution';

$route['Lead-the-leads-right-with-imprints-lead-management']='Blog/Lead_the_leads_right_with_imprints_lead_management';

$route['Know-your-customers-better-with-imprint-ai']='Blog/Know_your_customers_better_with_imprint_ai';

$route['Imprint-inclusion-protocol-accommodation-a-diverse-workforce']='Blog/Imprint_inclusion_protocol_accommodation_a_diverse_workforce';

$route['Imprint-ai-super-solution-for-superb-sales']='Blog/Imprint_ai_super_solution_for_superb_sales';

$route['How-to-choose-the-right-companion-to-your-workforce']='Blog/How_to_choose_the_right_companion_to_your_workforce';

$route['How-does-imprint-help-with-operations-and-territory-management']='Blog/How_does_imprint_help_with_operations_and_territory_management';

$route['Happy-customer-holistic-success-making-sales-more-customer-centric']='Blog/Happy_customer_holistic_success_making_sales_more_customer_centric';

$route['Happier-customer-holistic-revenue-the-imprint-promise']='Blog/Happier_customer_holistic_revenue_the_imprint_promise';

$route['Finer-field-force-with-imprint-ai']='Blog/Finer_field_force_with_imprint_ai';

$route['Beat-a-lagging-workforce-with-our-beat-planning']='Blog/Beat_a_lagging_workforce_with_our_beat_planning';

$route['Skyrocket-sales-specifically-the-imprint-edge']='Blog/Skyrocket_sales_specifically_the_imprint_edge';

$route['Our-journey-get-to-knows-one-to-one']='Blog/Our_journey_get_to_knows_one_to_one';

$route['Taking-your-sales-efforts-to-the-moon']='Blog/Taking_your_sales_efforts_to_the_moon';

$route['The-journey-to-a-simpler-workforce-equation-with-imprint-ai']='Blog/The_journey_to_a_simpler_workforce_equation_with_imprint_ai';

$route['A-day-in-the-life-of-a-sales-manager-can-imprint-make-it-better']='Blog/A_day_in_the_life_of_a_sales_manager_can_imprint_make_it_better';

$route['Why-is-sales-force-automation-a-boon-for-the-managers']='Blog/Why_is_sales_force_automation_a_boon_for_the_managers';

$route['Healthcare-fraternity-needs-an-efficient-crm-heres-why']='Blog/Healthcare_fraternity_needs_an_efficient_crm_heres_why';

$route['Can-automation-actually-help-your-business']='Blog/Can_automation_actually_help_your_business';

$route['How-To-Effectively-Manage-A-Mobile-Workforce-With-Field-Force-Automation']='Blog/How_To_Effectively_Manage_A_Mobile_Workforce_With_Field_Force_Automation';

$route['Why-Does-One-of-the-Largest-Mobile-Fuel-Suppliers-in-the-Country-Trust-Imprint-for-Managing-Its-Workforce']='Blog/Why_Does_One_of_the_Largest_Mobile_Fuel_Suppliers_in_the_Country_Trust_Imprint_for_Managing_Its_Workforce';

$route['How-IMPRINT-Streamlined-Business-Processes-and-Boosted-Business-for-Diagnostic-labs']='Blog/How_IMPRINT_Streamlined_Business_Processes_and_Boosted_Business_for_Diagnostic_labs';

$route['Maximizing-Field-Productivity-With-Real-Time-Data-and-Analytics']='Blog/Maximizing_Field_Productivity_With_Real_Time_Data_and_Analytics';

$route['The-ROI-of-Investing-in-a-Field-Force-Management-Solution-for-Your-Business']='Blog/The_ROI_of_Investing_in_a_Field_Force_Management_Solution_for_Your_Business';

$route['How-Can-Field-Service-Management-Software-Improve-Service-Quality-and-Increase-Revenue-For-Business']='Blog/How_Can_Field_Service_Management_Software_Improve_Service_Quality_and_Increase_Revenue_For_Business';

$route['Job-Scheduling-and-Task-Assignment-The-Rescue-For-An-Overworked-Manager']='Blog/Job_Scheduling_and_Task_Assignment_The_Rescue_For_An_Overworked_Manager';

$route['Maximizing-Field-Force-Efficiency-with-Beat-Planning-and-Scheduling']='Blog/Maximizing_Field_Force_Efficiency_with_Beat_Planning_and_Scheduling';

$route['Beyond-Tracking-How-Imprint-Advanced-Reporting-and-Analytics-Can-Boost-Your-Business-Intelligence']='Blog/Beyond_Tracking_How_Imprint_Advanced_Reporting_and_Analytics_Can_Boost_Your_Business_Intelligence';

$route['Pros-and-Cons-of-Field-Force-Management-Solutions-And-Why-Your-Business-Needs-One-Today']='Blog/Pros_and_Cons_of_Field_Force_Management_Solutions_And_Why_Your_Business_Needs_One_Today';

$route['Unleash-Exponential-Business-Growth-With-Imprint-Client-and-Lead-Management-Feature']='Blog/Unleash_Exponential_Business_Growth_With_Imprint_Client_and_Lead_Management_Feature';

$route['Building-a-Knowledge-Hub-Empowering-Field-Agents-with-Updated-Knowledge-Base-in-Field-Force-Management']='Blog/Building_a_nowledge_Hub_Empowering_Field_Agents_with_Updated_Knowledge_Base_in_Field_Force_Management';

$route['Seamless-Virtual-Meetings-Simplifying-Meeting-Scheduling-with-Field-Force-Management-Solutions']='Blog/Seamless_Virtual_Meetings_Simplifying_Meeting_Scheduling_with_Field_Force_Management_Solutions';

$route['Driving-Success-through-Segment-Wise-Performance-Monitoring-with-Field-Force-Management-Tools']='Blog/Driving_Success_through_Segment_Wise_Performance_Monitoring_with_Field_Force_Management_Tools';

$route['Proactive-Client-Engagement-Leveraging-Nearby-Client-Alerts-in-Field-Force-Management']='Blog/Proactive_Client_Engagement_Leveraging_Nearby_Client_Alerts_in_Field_Force_Management';

$route['Enabling-Seamless-Communication-Enhancing-Collaboration-with-24x7-Team-Communication-in-Field-Service-Management']='Blog/Enabling_Seamless_Communication_Enhancing_Collaboration_with_24x7_Team_Communication_in_Field_Service_Management';

$route['Why-Field-Service-Management-FSM-Solutions-Give-An-Edge-to-Sales-Teams-in-The-Digital-Age']='Blog/Why_Field_Service_Management_FSM_Solutions_Give_An_Edge_to_Sales_Teams_in_The_Digital_Age';

$route['Maximizing-ROI-Demystifying-Metrics-and-Analytics-in-Sales-Engagement-With-Field-Service-Management-Software']='Blog/Maximizing_ROI_Demystifying_Metrics_and_Analytics_in_Sales_Engagement_With_Field_Service_Management_Software';

$route['Simplifying-Attendance-and-Leave-Management-with-Field-Force-Management-Software']='Blog/Simplifying_Attendance_and_Leave_Management_with_Field_Force_Management_Software';

$route['Revolutionizing-Field-Service-Management-with-AI-and-Gamification-Elements']='Blog/Revolutionizing_Field_Service_Management_with_AI_and_Gamification_Elements';

$route['Finding-Difficulty-in-Managing-Your-Field-Force-IMPRINT-Holds-the-Key']='Blog/Finding_Difficulty_in_Managing_Your_Field_Force_IMPRINT_Holds_the_Key';

$route['Streamlining-Target-Tracking-and-Incentive-Management-with-Imprint-Field-Force-Performance-Monitoring-Tool']='Blog/Streamlining_Target_Tracking_and_Incentive_Management_with_Imprint_Field_Force_Performance_Monitoring_Tool';

$route['Five-Ways-to-Empower-Your-Field-Agents-to-Seal-More-Deals']='Blog/Five_Ways_to_Empower_Your_Field_Agents_to_Seal_More_Deals';

$route['Five-Ways-In-Which-Predictive-Analytics-in-Field-Service-Management-Can-Win-You-More-Loyal-Clients']='Blog/Five_Ways_In_Which_Predictive_Analytics_in_Field_Service_Management_Can_Win_You_More_Loyal_Clients';

$route['Put-A-Fullstop-To-Lead-Leakage-With-Imprint-360-degree-Field-Service-Management-Tool']='Blog/Put_A_Fullstop_To_Lead_Leakage_With_Imprint_360_degree_Field_Service_Management_Tool';

$route['Seven-Reasons-Why-Akash-Is-The-Superstar-Sales-Agent-of-His-Team']='Blog/Seven_Reasons_Why_Akash_Is_The_Superstar_Sales_Agent_of_His_Team';

$route['The-Future-Is-Here-AI-Assistance-in-Field-Service-Management-with-Imprint']='Blog/The_Future_Is_Here_AI_Assistance_in_Field_Service_Management_with_Imprint';

$route['Ensuring-Quality-Elderly-Care-with-Imprint-A-Real-Time-Field-Staff-Management-Solution']='Blog/Ensuring_Quality_Elderly_Care_with_Imprint_A_Real_Time_Field_Staff_Management_Solution';

$route['How-A-Field-Service-Management-Tool-Can-Turn-The-Tide-For-FMCG-Brands']='Blog/How_A_Field_Service_Management_Tool_Can_Turn_The_Tide_For_FMCG_Brands';

$route['Field-Service-Management-in-the-Insurance-Sector-Pivotal-Role-of-Automation']='Blog/Field_Service_Management_in_the_Insurance_Sector_Pivotal_Role_of_Automation';

$route['expanding-frontiers-imprint-campaign-management-feature-redefines-field-service-management']='Blog/expanding_frontiers_imprint_campaign_management_feature_redefines_field_service_management';

$route['effective-lead-management-with-field-service-management-tools-why-it-matters']='Blog/effective_lead_management_with_field_service_management_tools_why_it_matters';

$route['best-field-force-management-tools']='Blog/best_field_force_management_tools';

$route['how-field-force-management-solutions-drive-solar-industry-success']='Blog/how_field_force_management_solutions_drive_solar_industry_success';

$route['optimizing-field-operations-with-scheduling-software']='Blog/optimizing_field_operations_with_scheduling_software';

$route['streamlining-lead-management-with-imprint-new-business-card-scanner-feature'] = 'Blog/streamlining_lead_management_with_imprint_new_business_card_scanner_feature';

$route['the-evolution-of-field-force-management-in-the-2025-trends'] = 'Blog/the_evolution_of_field_force_management_in_the_2025_trends';

$route['imprint-employee-attendance-management-system'] = 'Blog/imprint_employee_attendance_management_system';

$route['ai-powered-minutes-of-meeting-recording-sharing']='Blog/ai_powered_minutes_of_meeting_recording_sharing';

$route['how-ai-is-revolutionizing-field-force-management']='Blog/how_ai_is_revolutionizing_field_force_management';

$route['signs-your-field-force-needs-imprint']='Blog/signs_your_field_force_needs_imprint';

$route['workforce-management-scheduling-imprint-automation']='Blog/workforce_management_scheduling_imprint_automation';

$route['device-info-field-employee-tracking']='Blog/device_info_field_employee_tracking';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';

$route['']='Blog/';
