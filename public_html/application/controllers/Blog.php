<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Blog extends CI_Controller
{
	
     public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function Blog($page = 1) 
    {
        $blogs = array(
          
             array(
        'title' => 'The Hidden Loophole in Field Employee Tracking – And How Imprint Solves It ',
        'date' => 'April 14, 2025',
        'category' => 'Field Service',
        'image' => 'device-info-field-employee-tracking.png',
        'slug' =>  'device-info-field-employee-tracking',
    ),
           array(
        'title' => 'Struggling with Workforce Management? Cut Scheduling Time by 50%, Fill Shifts Faster & Boost Team Productivity with Imprint Workforce Automation Tool!',
        'date' => 'April 02, 2025',
        'category' => 'Field Service',
        'image' => 'workforce-management-scheduling-imprint-automation.png',
        'slug' =>  'workforce-management-scheduling-imprint-automation',
    ),
    array(
        'title' => '10 Signs Your Field Force Urgently Needs Imprint',
        'date' => 'March 30, 2025',
        'category' => 'Field Service',
        'image' => '10-signs-your-field-force-needs-imprint.png',
        'slug' =>  'signs-your-field-force-needs-imprint',
    ),
          array(
        'title' => 'How AI is Revolutionizing Field Force Management (and Why You Should Care!)',
        'date' => 'March 14, 2025',
        'category' => 'Field Service',
        'image' => 'ai-powered-field-force-management-banner.png',
        'slug' =>  'how-ai-is-revolutionizing-field-force-management',
    ),
        array(
        'title' => 'Transforming Client Meetings with Imprint: AI-Powered Minutes of Meeting (MoM) Recording & Sharing',
        'date' => 'February 21, 2025',
        'category' => 'Field Service',
        'image' => 'ai-powered-minutes-of-meeting-recording-sharing.png',
        'slug' =>  'ai-powered-minutes-of-meeting-recording-sharing',
    ),
      
    array(
        'title' => 'Imprints Employee Attendance Management System: Comprehensive, Adaptable, and Reliable',
        'date' => 'February 09, 2025',
        'category' => 'Field Service',
        'image' => 'imprint-employee-attendance-management-system.png',
        'slug' => 'imprint-employee-attendance-management-system',
    ),
    array(
        'title' => 'The Evolution of Field Force Management in the USA: 2025 Trends',
        'date' => 'February 07, 2025',
        'category' => 'Field Service',
        'image' => 'the-evolution-of-field-force-management-in-the-2025-trends.png',
        'slug' => 'the-evolution-of-field-force-management-in-the-2025-trends',
    ),
    array(
        'title' => 'Streamlining Lead Management with Imprints New Business Card Scanner Feature',
        'date' => 'February 02, 2025',
        'category' => 'Field Service',
        'image' => 'streamlining-lead-management-with-imprint-new-business-card-scanner-feature.png',
        'slug' => 'streamlining-lead-management-with-imprint-new-business-card-scanner-feature',
    ),
			array(
                'title' => 'Optimizing Operations with Scheduling Software for Field Technicians',
                'date' => 'January 24, 2025',
                'category' => 'Field Service',
                'image' => 'optimizing-field-operations-with-scheduling-software.png',
                'slug' => 'optimizing-field-operations-with-scheduling-software',
            ),
            array(
                'title' => 'How Field Force Management Solutions Drive Solar Industry Success',
                'date' => 'December 18, 2024',
                'category' => 'Field Service',
                'image' => 'how-field-force-management-solutions-drive-solar-industry-success1.png',
                'slug' => 'how-field-force-management-solutions-drive-solar-industry-success',
            ),
			array(
                'title' => 'Field Force Management Tools for 2024: Key Features to Look For',
                'date' => 'November 12, 2024',
                'category' => 'Field Service',
                'image' => 'best-field-force-management-tools1.png',
                'slug' => 'best-field-force-management-tools',
            ),
            array(
                'title' => 'Effective Lead Management With Field Service Management Tools: Why It Matters',
                'date' => 'September 30, 2024',
                'category' => 'Field Service',
                'image' => 'effective-lead-management-with-field-service-management-tools-why-it-matters.png',
                'slug' => 'effective-lead-management-with-field-service-management-tools-why-it-matters',
            ),
            array(
                'title' => 'Expanding Frontiers: Imprint\'s Campaign Management Feature Redefines Field Service Management',
                'date' => 'September 18, 2024',
                'category' => 'Field Service',
                'image' => 'expanding-frontiers-imprint-campaign-management-feature-redefines-field-service-management.png',
                'slug' => 'expanding-frontiers-imprint-campaign-management-feature-redefines-field-service-management',
            ),
            array(
                'title' => 'Field Service Management in the Insurance Sector: Pivotal Role of Automation',
                'date' => 'September 06, 2024',
                'category' => 'Field Service',
                'image' => 'Field-Service-Management-in-the-Insurance-Sector-Pivotal-Role-of-Automation.png',
                'slug' => 'Field-Service-Management-in-the-Insurance-Sector-Pivotal-Role-of-Automation',
            ),
            array(
                'title' => 'How A Field Service Management Tool Can Turn The Tide For FMCG Brands',
                'date' => 'September 03, 2024',
                'category' => 'Field Service',
                'image' => 'How-A-Field-Service-Management-Tool-Can-Turn-The-Tide-For-FMCG-Brands.png',
                'slug' => 'How-A-Field-Service-Management-Tool-Can-Turn-The-Tide-For-FMCG-Brands',
            ),
            array(
                'title' => 'Ensuring Quality Elderly Care with Imprint: A Real-Time Field Staff Management Solution',
                'date' => 'August 22, 2024',
                'category' => 'Field Service',
                'image' => 'Ensuring-Quality-Elderly-Care-with-Imprint-A-Real-Time-Field-Staff-Management-Solution.png',
                'slug' => 'Ensuring-Quality-Elderly-Care-with-Imprint-A-Real-Time-Field-Staff-Management-Solution',
            ),
            array(
                'title' => 'The Future Is Here: AI Assistance in Field Service Management with Imprint',
                'date' => 'July 22, 2024',
                'category' => 'Field Service',
                'image' => 'The-Future-Is-Here-AI-Assistance-in-Field-Service-Management-with-Imprint.png',
                'slug' => 'The-Future-Is-Here-AI-Assistance-in-Field-Service-Management-with-Imprint',
            ),
            array(
                'title' => '7 Reasons Why Akash Is The Superstar Sales Agent of His Team!',
                'date' => 'July 15, 2024',
                'category' => 'Field Service',
                'image' => 'Seven-Reasons-Why-Akash-Is-The-Superstar-Sales-Agent-of-His-Team.png',
                'slug' => 'Seven-Reasons-Why-Akash-Is-The-Superstar-Sales-Agent-of-His-Team',
            ),
            array(
                'title' => 'Put A Fullstop To Lead Leakage With Imprint 360-degree Field Service Management Tool!',
                'date' => 'June 26, 2024',
                'category' => 'Field Service',
                'image' => 'Put-A-Fullstop-To-Lead-Leakage-With-Imprint-360-degree-Field-Service-Management-Tool.png',
                'slug' => 'Put-A-Fullstop-To-Lead-Leakage-With-Imprint-360-degree-Field-Service-Management-Tool',
            ),
            array(
                'title' => '5 Ways In Which Predictive Analytics in Field Service Management Can Win You More Loyal Clients',
                'date' => 'June 24, 2024',
                'category' => 'Field Service',
                'image' => 'Five-Ways-In-Which-Predictive-Analytics-in-Field-Service-Management-Can-Win-You-More-Loyal-Clients.png',
                'slug' => 'Five-Ways-In-Which-Predictive-Analytics-in-Field-Service-Management-Can-Win-You-More-Loyal-Clients',
            ),
            array(
                'title' => '5 Ways to Empower Your Field Agents to Seal More Deals!',
                'date' => 'June 06, 2024',
                'category' => 'Field Service',
                'image' => 'Five-Ways-to-Empower-Your-Field-Agents-to-Seal-More-Deals.png',
                'slug' => 'Five-Ways-to-Empower-Your-Field-Agents-to-Seal-More-Deals',
            ),
            array(
                'title' => 'Streamlining Target Tracking and Incentive Management with Imprint Field Force Performance Monitoring Tool',
                'date' => 'June 03, 2024',
                'category' => 'Field Service',
                'image' => 'Streamlining-Target-Tracking-and-Incentive-Management-with-Imprint-Field-Force-Performance-Monitoring-Tool.png',
                'slug' => 'Streamlining-Target-Tracking-and-Incentive-Management-with-Imprint-Field-Force-Performance-Monitoring-Tool',
            ),
            array(
                'title' => 'Finding Difficulty in Managing Your Field Force? IMPRINT Holds the Key!',
                'date' => 'May 15, 2024',
                'category' => 'Field Service',
                'image' => 'Finding-Difficulty-in-Managing-Your-Field-Force-IMPRINT-Holds-the-Key.png',
                'slug' => 'Finding-Difficulty-in-Managing-Your-Field-Force-IMPRINT-Holds-the-Key',
            ),
            array(
                'title' => 'Revolutionizing Field Service Management with AI and Gamification Elements',
                'date' => 'May 15, 2024',
                'category' => 'Field Service',
                'image' => 'Revolutionizing-Field-Service-Management-with-AI-and-Gamification-Elements.png',
                'slug' => 'Revolutionizing-Field-Service-Management-with-AI-and-Gamification-Elements',
            ),
            array(
                'title' => 'Simplifying Attendance & Leave Management with Field Force Management Software',
                'date' => 'May 08, 2024',
                'category' => 'Field Service',
                'image' => 'Simplifying-Attendance-and-Leave-Management-with-Field-Force-Management-Software.png',
                'slug' => 'Simplifying-Attendance-and-Leave-Management-with-Field-Force-Management-Software',
            ),
		   array(
                'title' => 'Maximizing ROI: Demystifying Metrics and Analytics in Sales Engagement With Field Service Management Software',
                'date' => 'May 02, 2024',
                'category' => 'Field Service',
                'image' => 'Maximizing-ROI-Demystifying-Metrics-and-Analytics-in-Sales-Engagement-With-Field-Service-Management-Software.png',
                'slug' => 'Maximizing-ROI-Demystifying-Metrics-and-Analytics-in-Sales-Engagement-With-Field-Service-Management-Software',
            ),
            array(
                'title' => 'Why Field Service Management (FSM) Solutions Give An Edge to Sales Teams in The Digital Age',
                'date' => 'Aug 28, 2023',
                'category' => 'Field Service',
                'image' => 'Why-Field-Service-Management-FSM-Solutions-Give-An-Edge-to-Sales-Teams-in-The-Digital-Age1.png',
                'slug' => 'Why-Field-Service-Management-FSM-Solutions-Give-An-Edge-to-Sales-Teams-in-The-Digital-Age',
            ),
		   array(
                'title' => 'Enabling Seamless Communication: Enhancing Collaboration with 24x7 Team Communication in Field Service Management',
                'date' => 'Aug 11, 2023',
                'category' => 'Field Service',
                'image' => 'Enabling-Seamless-Communication-Enhancing-Collaboration-with-24x7-Team-Communication-in-Field-Service-Management1.png',
                'slug' => 'Enabling-Seamless-Communication-Enhancing-Collaboration-with-24x7-Team-Communication-in-Field-Service-Management',
            ),
            array(
                'title' => 'Proactive Client Engagement: Leveraging Nearby Client Alerts in Field Force Management',
                'date' => 'Jun 09, 2023',
                'category' => 'Field Service',
                'image' => 'Proactive-Client-Engagement-Leveraging-Nearby-Client-Alerts-in-Field-Force-Management1.png',
                'slug' => 'Proactive-Client-Engagement-Leveraging-Nearby-Client-Alerts-in-Field-Force-Management',
            ),
		   array(
                'title' => 'Driving Success through Segment-Wise Performance Monitoring with Field Force Management Tools',
                'date' => 'Jun 07, 2023',
                'category' => 'Monitoring',
                'image' => 'Driving-Success-through-Segment-Wise-Performance-Monitoring-with-Field-Force-Management-Tools1.png',
                'slug' => 'Driving-Success-through-Segment-Wise-Performance-Monitoring-with-Field-Force-Management-Tools',
            ),
            array(
                'title' => 'Seamless Virtual Meetings: Simplifying Meeting Scheduling with Field Force Management Solutions',
                'date' => 'May 31, 2023',
                'category' => 'Field Service',
                'image' => 'Seamless-Virtual-Meetings-Simplifying-Meeting-Scheduling-with-Field-Force-Management-Solutions1.png',
                'slug' => 'Seamless-Virtual-Meetings-Simplifying-Meeting-Scheduling-with-Field-Force-Management-Solutions',
            ),
		   array(
                'title' => 'Building a Knowledge Hub: Empowering Field Agents with Updated Knowledge Base in Field Force Management',
                'date' => 'May 29, 2023',
                'category' => 'Field Service',
                'image' => 'Building-a-Knowledge-Hub-Empowering-Field-Agents-with-Updated-Knowledge-Base-in-Field-Force-Management1.png',
                'slug' => 'Building-a-Knowledge-Hub-Empowering-Field-Agents-with-Updated-Knowledge-Base-in-Field-Force-Management',
            ),
		   array(
                'title' => 'Unleash Exponential Business Growth With Imprint’s Client & Lead Management Feature',
                'date' => 'May 19, 2023',
                'category' => 'Business',
                'image' => 'Unleash-Exponential-Business-Growth-With-Imprint-Client-and-Lead-Management-Feature1.png',
                'slug' => 'Unleash-Exponential-Business-Growth-With-Imprint-Client-and-Lead-Management-Feature',
            ),
		   array(
                'title' => 'Pros & Cons of Field Force Management Solutions And Why Your Business Needs One Today',
                'date' => 'May 18, 2023',
                'category' => 'Technology',
                'image' => 'Pros-and-Cons-of-Field-Force-Management-Solutions-And-Why-Your-Business-Needs-One-Today1.png',
                'slug' => 'Pros-and-Cons-of-Field-Force-Management-Solutions-And-Why-Your-Business-Needs-One-Today',
            ),
		   array(
                'title' => 'Beyond Tracking: How Imprint&#39;s Advanced Reporting and Analytics Can Boost Your Business Intelligence',
                'date' => 'May 09, 2023',
                'category' => 'Technology',
                'image' => 'Beyond-Tracking-How-Imprint-Advanced-Reporting-and-Analytics-Can-Boost-Your-Business-Intelligence1.png',
                'slug' => 'Beyond-Tracking-How-Imprint-Advanced-Reporting-and-Analytics-Can-Boost-Your-Business-Intelligence',
            ),
		   array(
                'title' => 'Maximizing Field Force Efficiency with Beat Planning & Scheduling',
                'date' => 'April 21, 2023',
                'category' => 'Field Service',
                'image' => 'Maximizing-Field-Force-Efficiency-with-Beat-Planning-and-Scheduling1.png',
                'slug' => 'Maximizing-Field-Force-Efficiency-with-Beat-Planning-and-Scheduling',
            ),
		  array(
                'title' => 'Job Scheduling & Task Assignment: The Rescue For An Overworked Manager',
                'date' => 'April 20, 2023',
                'category' => 'Technology',
                'image' => 'Job-Scheduling-and-Task-Assignment-The-Rescue-For-An-Overworked-Manager1.png',
                'slug' => 'Job-Scheduling-and-Task-Assignment-The-Rescue-For-An-Overworked-Manager',
            ),
		   array(
                'title' => 'How Can Field Service Management Software Improve Service Quality & Increase Revenue For Business',
                'date' => 'April 19, 2023',
                'category' => 'Field Service',
                'image' => 'How-Can-Field-Service-Management-Software-Improve-Service-Quality-and-Increase-Revenue-For-Business1.png',
                'slug' => 'How-Can-Field-Service-Management-Software-Improve-Service-Quality-and-Increase-Revenue-For-Business',
            ),
		   array(
                'title' => 'The ROI of Investing in a Field Force Management Solution for Your Business',
                'date' => 'April 07, 2023',
                'category' => 'Workforce',
                'image' => 'The-ROI-of-Investing-in-a-Field-Force-Management-Solution-for-Your-Business1.png',
                'slug' => 'The-ROI-of-Investing-in-a-Field-Force-Management-Solution-for-Your-Business',
            ),
		   array(
                'title' => 'Maximizing Field Productivity With Real-Time Data & Analytics',
                'date' => 'April 04, 2023',
                'category' => 'Technology',
                'image' => 'Maximizing-Field-Productivity-With-Real-Time-Data-and-Analytics1.png',
                'slug' => 'Maximizing-Field-Productivity-With-Real-Time-Data-and-Analytics',
            ),
		  array(
                'title' => 'How IMPRINT Streamlined Business Processes and Boosted Business for Diagnostic labs',
                'date' => 'March 31, 2023',
                'category' => 'Business',
                'image' => 'How-IMPRINT-Streamlined-Business-Processes-and-Boosted-Business-for-Diagnostic-labs1.png',
                'slug' => 'How-IMPRINT-Streamlined-Business-Processes-and-Boosted-Business-for-Diagnostic-labs',
            ),
		   array(
                'title' => 'Why Does One of the Largest Mobile Fuel Suppliers in the Country Trust Imprint for Managing Its Workforce?',
                'date' => 'March 29, 2023',
                'category' => 'Workforce',
                'image' => 'Why-Does-One-of-the-Largest-Mobile-Fuel-Suppliers-in-the-Country-Trust-Imprint-for-Managing-Its-Workforce1.png',
                'slug' => 'Why-Does-One-of-the-Largest-Mobile-Fuel-Suppliers-in-the-Country-Trust-Imprint-for-Managing-Its-Workforce',
            ),
		   array(
                'title' => 'How To Effectively Manage A Mobile Workforce With Field Force Automation',
                'date' => 'March 14, 2023',
                'category' => 'Workforce',
                'image' => 'How-To-Effectively-Manage-A-Mobile-Workforce-With-Field-Force-Automation1.png',
                'slug' => 'How-To-Effectively-Manage-A-Mobile-Workforce-With-Field-Force-Automation',
            ),
		   array(
                'title' => 'Expense Management For Field Employees: Maximizing Efficiency & Transparency',
                'date' => 'February 18, 2023',
                'category' => 'Sales force',
                'image' => 'Expense-management-for-field-employees-maximizing-efficiency-transparency1.png',
                'slug' => 'Expense-management-for-field-employees-maximizing-efficiency-transparency',
            ),
		  array(
                'title' => 'The role of analytics in field service management',
                'date' => 'February 17, 2023',
                'category' => 'Business',
                'image' => 'The-role-of-analytics-in-field-service-management1.png',
                'slug' => 'The-role-of-analytics-in-field-service-management',
            ),
		   array(
                'title' => 'A Day in the Life of a Field Sales Agent',
                'date' => 'Feb 13, 2023',
                'category' => 'Sales',
                'image' => 'A-day-in-the-life-of-a-field-sales-agent1.png',
                'slug' => 'A-day-in-the-life-of-a-field-sales-agent',
            ),
		   array(
                'title' => 'How to Nurture A Motivated Field Sales Team',
                'date' => 'Jan 18 2023',
                'category' => 'Business',
                'image' => 'How-to-nurture-a-motivated-field-sales-team1.png',
                'slug' => 'How-to-nurture-a-motivated-field-sales-team',
            ),
		   array(
                'title' => 'Does ChatGPT Usher in the Future We Were Dreaming Of?',
                'date' => 'Dec 24, 2022',
                'category' => 'Sales',
                'image' => 'Does-chatgpt-usher-in-the-future-we-were-dreaming-of1.png',
                'slug' => 'Does-chatgpt-usher-in-the-future-we-were-dreaming-of',
            ),
		  array(
                'title' => 'Why IMPRINT AI Is Trusted Worldwide for its Extensive Workforce Automation Features?',
                'date' => 'Oct 26, 2022',
                'category' => 'Workforce',
                'image' => 'Why-imprint-ai-is-trusted-worldwide-for-its-extensive-workforce-automation-features1.png',
                'slug' => 'Why-imprint-ai-is-trusted-worldwide-for-its-extensive-workforce-automation-features',
            ),
		   array(
                'title' => 'Importance of Beat Planning for Sales and Distribution Agents',
                'date' => 'Sep 30, 2022',
                'category' => 'Sales',
                'image' => 'Importance-of-beat-planning-for-sales-and-distribution-agents1.png',
                'slug' => 'Importance-of-beat-planning-for-sales-and-distribution-agents',
            ),
		   array(
                'title' => 'How GPS technology has changed productivity measures in Sales space',
                'date' => 'Sep 26, 2022',
                'category' => 'Technology',
                'image' => 'How-GPS-technology-has-changed-productivity-measures-in-Sales-space1.png',
                'slug' => 'How-gps-technology-has-changed-productivity-measures-in-sales-space',
            ),
		   array(
                'title' => 'What&#39;s New With IMPRINT AI?',
                'date' => 'Sep 12, 2022',
                'category' => 'CRM',
                'image' => 'Whats-new-with-imprint-ai1.png',
                'slug' => 'Whats-new-with-imprint-ai',
            ),
		  array(
                'title' => 'The Ideal Companion To Every Sales Personnel Ever',
                'date' => 'Sep 12, 2022',
                'category' => 'Sales',
                'image' => 'The-ideal-companion-to-every-sales-personnel-ever1.png',
                'slug' => 'The-ideal-companion-to-every-sales-personnel-ever',
            ),
		   array(
                'title' => 'Multiple Problems, One Solution: IMPRINT AI',
                'date' => 'Sep 12, 2022',
                'category' => 'Money',
                'image' => 'Multiple-problems-one-solution-imprint-ai1.png',
                'slug' => 'Multiple-problems-one-solution-imprint-ai',
            ),
		   array(
                'title' => 'Make Your Small Business Digitally Booming: The IMPRINT Solution',
                'date' => 'Sep 12, 2022',
                'category' => 'Business',
                'image' => 'Make-your-small-business-digitally-booming-the-imprint-solution1.png',
                'slug' => 'Make-your-small-business-digitally-booming-the-imprint-solution',
            ),
		   array(
                'title' => 'Lead The Leads Right With IMPRINT&#39;S Lead Management',
                'date' => 'Sep 12, 2022',
                'category' => 'Lead Generation',
                'image' => 'Lead-the-leads-right-with-imprints-lead-management1.png',
                'slug' => 'Lead-the-leads-right-with-imprints-lead-management',
            ),
		  array(
                'title' => 'Know your customers better with imprint ai',
                'date' => 'Sep 12, 2022',
                'category' => 'Customer Experience',
                'image' => 'Know-your-customers-better-with-imprint-ai1.png',
                'slug' => 'Know-your-customers-better-with-imprint-ai',
            ),
		   array(
                'title' => 'Imprint inclusion protocol accommodation a diverse workforce',
                'date' => 'Sep 12, 2022',
                'category' => 'Employee Engagement',
                'image' => 'Imprint-inclusion-protocol-accommodation-a-diverse-workforce1.png',
                'slug' => 'Imprint-inclusion-protocol-accommodation-a-diverse-workforce',
            ),
		   array(
                'title' => 'Imprint ai super solution for superb sales',
                'date' => 'Sep 8, 2022',
                'category' => 'CRM',
                'image' => 'Imprint-ai-super-solution-for-superb-sales1.png',
                'slug' => 'Imprint-ai-super-solution-for-superb-sales',
            ),
		   array(
                'title' => 'How to choose the right companion to your workforce',
                'date' => 'Sep 8, 2022',
                'category' => 'CRM',
                'image' => 'How-to-choose-the-right-companion-to-your-workforce1.png',
                'slug' => 'How-to-choose-the-right-companion-to-your-workforce',
            ),
		  array(
                'title' => 'How does imprint help with operations and territory management',
                'date' => 'Sep 8, 2022',
                'category' => 'Teritory',
                'image' => 'How-does-imprint-help-with-operations-and-territory-management1.png',
                'slug' => 'How-does-imprint-help-with-operations-and-territory-management',
            ),
		   array(
                'title' => 'Happy customer holistic success making sales more customer centric',
                'date' => 'Sep 8, 2022',
                'category' => 'Customer Sucess',
                'image' => 'Happy-customer-holistic-success-making-sales-more-customer-centric1.png',
                'slug' => 'Happy-customer-holistic-success-making-sales-more-customer-centric',
            ),
		   array(
                'title' => 'Happier customer holistic revenue the imprint promise',
                'date' => 'Sep 8, 2022',
                'category' => 'Sales',
                'image' => 'Happier-customer-holistic-revenue-the-imprint-promise1.png',
                'slug' => 'Happier-customer-holistic-revenue-the-imprint-promise',
            ),
		   array(
                'title' => 'Finer field force with imprint ai',
                'date' => 'Sep 8, 2022',
                'category' => 'Sales',
                'image' => 'Finer-field-force-with-imprint-ai1.png',
                'slug' => 'Finer-field-force-with-imprint-ai',
            ),
		  array(
                'title' => 'Beat a lagging workforce with our beat planning',
                'date' => 'Sep 8, 2022',
                'category' => 'Business',
                'image' => 'Beat-a-lagging-workforce-with-our-beat-planning1.png',
                'slug' => 'Beat-a-lagging-workforce-with-our-beat-planning',
            ),
		   array(
                'title' => 'Skyrocket sales specifically the imprint edge',
                'date' => 'Jul 28, 2022',
                'category' => 'Rockets',
                'image' => 'Skyrocket-sales-specifically-the-imprint-edge1.png',
                'slug' => 'Skyrocket-sales-specifically-the-imprint-edge',
            ),
		   array(
                'title' => 'Our journey get to knows one to one',
                'date' => 'Jul 28, 2022',
                'category' => 'Work',
                'image' => 'Our-journey-get-to-knows-one-to-one1.png',
                'slug' => 'Our-journey-get-to-knows-one-to-one',
            ),
		   array(
                'title' => 'Taking your sales efforts to the moon',
                'date' => 'Jul 28, 2022',
                'category' => 'Sales',
                'image' => 'Taking-your-sales-efforts-to-the-moon1.png',
                'slug' => 'Taking-your-sales-efforts-to-the-moon',
            ),
		  array(
                'title' => 'The journey to a simpler workforce equation with imprint ai',
                'date' => 'Jul 28, 2022',
                'category' => 'Work',
                'image' => 'The-journey-to-a-simpler-workforce-equation-with-imprint-ai1.png',
                'slug' => 'The-journey-to-a-simpler-workforce-equation-with-imprint-ai',
            ),
		   array(
                'title' => 'A day in the life of a Sales Manager: Can Imprint make it better?',
                'date' => 'Jul 28, 2022',
                'category' => 'Sales',
                'image' => 'A-day-in-the-life-of-a-sales-manager-can-imprint-make-it-better1.png',
                'slug' => 'A-day-in-the-life-of-a-sales-manager-can-imprint-make-it-better',
            ),
		   array(
                'title' => 'Why is sales force automation a boon for the managers',
                'date' => 'Jul 28, 2022',
                'category' => 'Sales',
                'image' => 'Why-is-sales-force-automation-a-boon-for-the-managers1.png',
                'slug' => 'Why-is-sales-force-automation-a-boon-for-the-managers',
            ),
		   array(
                'title' => 'Healthcare fraternity needs an efficient crm heres why?',
                'date' => 'Jul 22, 2022',
                'category' => 'Hospital',
                'image' => 'Healthcare-fraternity-needs-an-efficient-crm-heres-why1.png',
                'slug' => 'Healthcare-fraternity-needs-an-efficient-crm-heres-why',
            ),
		  array(
                'title' => 'Can automation actually help your business',
                'date' => 'Jul 22, 2022',
                'category' => 'Automation',
                'image' => 'Can-automation-actually-help-your-business1.png',
                'slug' => 'Can-automation-actually-help-your-business',
            ),
		   array(
                'title' => 'Can Imprint AI help small businesses?',
                'date' => 'July 22 2022',
                'category' => 'Business',
                'image' => 'can-imprint-ai-help-small-businesses.png',
                'slug' => 'can-imprint-ai-help-small-businesses',
            ),
		   array(
                'title' => 'What is Field Force Management Software?',
                'date' => 'June 21 2022',
                'category' => 'Field Service',
                'image' => 'what-is-field-force-management-software.png',
                'slug' => 'what-is-field-force-management-software',
            ),
		   array(
                'title' => 'Ways to generate and nurture leads',
                'date' => 'June 14 2022',
                'category' => 'Lead Generation',
                'image' => 'ways-to-generate-and-nurture-leads.png',
                'slug' => 'ways-to-generate-and-nurture-leads',
            ),
		  array(
                'title' => 'How can businesses build a digitally ready workforce?',
                'date' => 'Jun 14 2022',
                'category' => 'Business',
                'image' => 'how-can-businesses-build-a-digitally-ready-workforce.png',
                'slug' => 'how-can-businesses-build-a-digitally-ready-workforce',
            ),
		   array(
                'title' => 'Effective Management of Sales channel for a reputed Insurance Company',
                'date' => 'March 18 2022',
                'category' => 'Sales',
                'image' => 'effective-management-of-sales-channel-for-a-reputed-insurance-company.png',
                'slug' => 'effective-management-of-sales-channel-for-a-reputed-insurance-company',
            ),
		   array(
                'title' => 'What is your approach to customer data?',
                'date' => 'March 10 2022',
                'category' => 'Customer Experience',
                'image' => 'what-is-your-approach-to-customer-data.png',
                'slug' => 'what-is-your-approach-to-customer-data',
            ),
		   array(
                'title' => '5 ways to develop strong work ethics among employees',
                'date' => 'Feb 11, 2022',
                'category' => 'Customer Experience',
                'image' => 'five-ways-to-develop-strong-work-ethics-among-employees.png',
                'slug' => 'five-ways-to-develop-strong-work-ethics-among-employees',
            ),
		  array(
                'title' => 'India&#39;s largest Mobile Fuel supplier trusts Imprint for its field workforce',
                'date' => 'Feb 9, 2022',
                'category' => 'Business',
                'image' => 'indias-largest-mobile-fuel-supplier-trusts-imprint-for-its-field-workforce.png',
                'slug' => 'indias-largest-mobile-fuel-supplier-trusts-imprint-for-its-field-workforce',
            ),
		   array(
                'title' => 'How to build a data driven CRM strategy?',
                'date' => 'Feb 4, 2022',
                'category' => 'Data Science',
                'image' => 'how-to-build-a-data-driven-crm-strategy.png',
                'slug' => 'how-to-build-a-data-driven-crm-strategy',
            ),
		   array(
                'title' => 'How Imprint boosted business for Imagesense Diagnostics?',
                'date' => 'Feb 2, 2022',
                'category' => 'Health',
                'image' => 'how-imprint-boosted-business-for-imagesense-diagnostics.png',
                'slug' => 'how-imprint-boosted-business-for-imagesense-diagnostics',
            ),
		   array(
                'title' => 'The Imprint approach: Catering to the Gen Z and Gen Y customers',
                'date' => 'Jan 26, 2022',
                'category' => 'Gen Z',
                'image' => 'the-imprint-approach-catering-to-the-gen-z-and-gen-y-customers.png',
                'slug' => 'the-imprint-approach-catering-to-the-gen-z-and-gen-y-customers',
            ),
		  array(
                'title' => 'Top 5 ways to boost your team morale',
                'date' => 'Jan 20, 2022',
                'category' => 'Teamwork',
                'image' => 'top-5-ways-to-boost-your-team-morale.png',
                'slug' => 'top-5-ways-to-boost-your-team-morale',
            ),
		   array(
                'title' => 'What&#39;s New with Imprint?',
                'date' => 'Jan 16, 2022',
                'category' => 'Automation',
                'image' => 'whats-new-with-imprint.png',
                'slug' => 'whats-new-with-imprint',
            ),
		   array(
                'title' => 'The Imprint Success: One of the leading NBFCs in India has adopted Imprint',
                'date' => 'Jan 11, 2022',
                'category' => 'Customer Service',
                'image' => 'the-imprint-success-one-of-the-leading-nbfcs-in-india-has-adopted-imprint.png',
                'slug' => 'the-imprint-success-one-of-the-leading-nbfcs-in-india-has-adopted-imprint',
            ),
		   array(
                'title' => 'LinkedIn: A powerful networking tool',
                'date' => 'Jan 8, 2022',
                'category' => 'Social media',
                'image' => 'linkedin-a-powerful-networking-tool.png',
                'slug' => 'linkedin-a-powerful-networking-tool',
            ),
		  array(
                'title' => '4 tools to be used for increasing sales in 2022',
                'date' => 'Dec 31, 2021',
                'category' => 'Business',
                'image' => 'four-tools-to-be-used-for-increasing-sales-in-2022.png',
                'slug' => 'four-tools-to-be-used-for-increasing-sales-in-2022',
            ),
		   array(
                'title' => 'Enhance your customer experience like never before: 3 ways to make it happen',
                'date' => 'Dec 29, 2021',
                'category' => 'Customer Experience',
                'image' => 'enhance-your-customer-experience-like-never-before-3-ways-to-make-it-happen.png',
                'slug' => 'enhance-your-customer-experience-like-never-before-3-ways-to-make-it-happen',
            ),
		   array(
                'title' => 'A cost effective workforce management solution',
                'date' => 'Dec 27, 2021',
                'category' => 'Cost',
                'image' => 'a-cost-effective-workforce-management-solution.png',
                'slug' => 'a-cost-effective-workforce-management-solution',
            ),
		   array(
                'title' => 'Imprint and Industries',
                'date' => 'Dec 22, 2021',
                'category' => 'Industry',
                'image' => 'imprint-and-industries.png',
                'slug' => 'imprint-and-industries',
            ),
		  array(
                'title' => 'How can a lead management system help in your business?',
                'date' => 'Sep 17, 2021',
                'category' => 'Lead Management',
                'image' => 'how-can-a-lead-management-system-help-in-your-business.png',
                'slug' => 'how-can-a-lead-management-system-help-in-your-business',
            ),
		   array(
                'title' => 'Workforce automation and its benefits',
                'date' => 'Sep 6, 2021',
                'category' => 'Automation',
                'image' => 'workforce-automation-and-its-benefits.png',
                'slug' => 'workforce-automation-and-its-benefits',
            ),
		   array(
                'title' => 'How to have better control and improved ROI?',
                'date' => 'Feb 17, 2023',
                'category' => 'Business Strategy',
                'image' => 'how-to-have-better-control-and-improved-roi.png',
                'slug' => 'how-to-have-better-control-and-improved-roi',
            ),
		   array(
                'title' => 'How can data management save your time and help you improve your sales?',
                'date' => 'Aug 26, 2021',
                'category' => 'Data',
                'image' => 'how-can-data-management-save-your-time-and-help-you-improve-your-sales.png',
                'slug' => 'how-can-data-management-save-your-time-and-help-you-improve-your-sales',
            ),
		  array(
                'title' => 'How to improve your workforce efficiency?',
                'date' => 'Aug 20, 2021',
                'category' => 'Workforce',
                'image' => 'how-to-improve-your-workforce-efficiency.png',
                'slug' => 'how-to-improve-your-workforce-efficiency',
            ),
		   array(
                'title' => 'Understanding Field Workforce Management',
                'date' => 'Aug 14, 2021',
                'category' => 'Field Service',
                'image' => 'understanding-field-workforce-management.png',
                'slug' => 'understanding-field-workforce-management',
            ),
		   array(
                'title' => '5 Reasons why Imprint AI is for your business',
                'date' => 'Aug 12, 2021',
                'category' => 'Work',
                'image' => 'five-reasons-why-imprint-ai-is-for-your-business.png',
                'slug' => 'five-reasons-why-imprint-ai-is-for-your-business',
            ),
		   array(
                'title' => 'Work management',
                'date' => 'Jul 31, 2021',
                'category' => 'Work',
                'image' => 'work-management1.png',
                'slug' => 'work-management',
            ),
		  array(
                'title' => 'Uses Of Crm',
                'date' => 'Jul 30, 2021',
                'category' => 'CRM',
                'image' => 'uses-of-crm1.png',
                'slug' => 'use-of-crm',
            ),
		   array(
                'title' => '5 Imprint Features You Haven&#39;t Discovered Yet',
                'date' => 'May 29, 2021',
                'category' => 'Artificial Intelligence',
                'image' => 'five-imprint-features-you-havent-discovered-yet1.png',
                'slug' => 'five-imprint-features-you-havent-discovered-yet',
            )
            // Add more blog data as needed
        );

        // Pagination
    $blogsPerPage = 9;
    $start = ($page - 1) * $blogsPerPage;
    $end = $start + $blogsPerPage;
    
    // Ensure that $end does not exceed the total number of blogs
    $end = min($end, count($blogs));
    
    $totalBlogs = count($blogs);
    $totalPages = ceil($totalBlogs / $blogsPerPage);
    $data['totalPages'] = $totalPages;
    $data['currentPage'] = $page;
    $data['blogs'] = array_slice($blogs, $start, $end - $start); // Adjust the array slice to only include the desired range of blogs

    $this->load->view('body/Blog/index', $data);
    }

	Public function five_imprint_features_you_havent_discovered_yet()
	{
		$this->load->view('body/Blog/five-imprint-features-you-havent-discovered-yet');
	}
		Public function use_of_crm()
	{
		$this->load->view('body/Blog/use-of-crm');
	}
		Public function work_management()
	{
		$this->load->view('body/Blog/work-management');
	}
	Public function Expense_management_for_field_employees_maximizing_efficiency_transparency()
	{
		$this->load->view('body/Blog/Expense-management-for-field-employees-maximizing-efficiency-transparency');
	}
	Public function The_role_of_analytics_in_field_service_management()
	{
		$this->load->view('body/Blog/The-role-of-analytics-in-field-service-management');
	}
  Public function can_imprint_ai_help_small_businesses()
	{
		$this->load->view('body/Blog/can-imprint-ai-help-small-businesses');
	}
	Public function what_is_field_force_management_software()
	{
		$this->load->view('body/Blog/what-is-field-force-management-software');
	}
	Public function ways_to_generate_and_nurture_leads()
	{
		$this->load->view('body/Blog/ways-to-generate-and-nurture-leads');
	}
	Public function how_can_businesses_build_a_digitally_ready_workforce()
	{
		$this->load->view('body/Blog/how-can-businesses-build-a-digitally-ready-workforce');
	}
	Public function effective_management_of_sales_channel_for_a_reputed_insurance_company()
	{
		$this->load->view('body/Blog/effective-management-of-sales-channel-for-a-reputed-insurance-company');
	}
	Public function what_is_your_approach_to_customer_data()
	{
		$this->load->view('body/Blog/what-is-your-approach-to-customer-data');
	}
	Public function five_ways_to_develop_strong_work_ethics_among_employees()
	{
		$this->load->view('body/Blog/five-ways-to-develop-strong-work-ethics-among-employees');
	}
	Public function indias_largest_mobile_fuel_supplier_trusts_imprint_for_its_field_workforce()
	{
		$this->load->view('body/Blog/indias-largest-mobile-fuel-supplier-trusts-imprint-for-its-field-workforce');
	}
	Public function how_to_build_a_data_driven_crm_strategy()
	{
		$this->load->view('body/Blog/how-to-build-a-data-driven-crm-strategy');
	}
	Public function how_imprint_boosted_business_for_imagesense_diagnostics()
	{
		$this->load->view('body/Blog/how-imprint-boosted-business-for-imagesense-diagnostics');
	}
	Public function the_imprint_approach_catering_to_the_gen_z_and_gen_y_customers()
	{
		$this->load->view('body/Blog/the-imprint-approach-catering-to-the-gen-z-and-gen-y-customers');
	}
	Public function top_5_ways_to_boost_your_team_morale()
	{
		$this->load->view('body/Blog/top-5-ways-to-boost-your-team-morale');
	}
	Public function whats_new_with_imprint()
	{
		$this->load->view('body/Blog/whats-new-with-imprint');
	}
	Public function the_imprint_success_one_of_the_leading_nbfcs_in_india_has_adopted_imprint()
	{
		$this->load->view('body/Blog/the-imprint-success-one-of-the-leading-nbfcs-in-india-has-adopted-imprint');
	}
	Public function linkedin_a_powerful_networking_tool()
	{
		$this->load->view('body/Blog/linkedin-a-powerful-networking-tool');
	}
	Public function four_tools_to_be_used_for_increasing_sales_in_2022()
	{
		$this->load->view('body/Blog/four-tools-to-be-used-for-increasing-sales-in-2022');
	}
	Public function enhance_your_customer_experience_like_never_before_3_ways_to_make_it_happen()
	{
		$this->load->view('body/Blog/enhance-your-customer-experience-like-never-before-3-ways-to-make-it-happen');
	}
	Public function a_cost_effective_workforce_management_solution()
	{
		$this->load->view('body/Blog/a-cost-effective-workforce-management-solution');
	}
	Public function imprint_and_industries()
	{
		$this->load->view('body/Blog/imprint-and-industries');
	}
	Public function how_can_a_lead_management_system_help_in_your_business()
	{
		$this->load->view('body/Blog/how-can-a-lead-management-system-help-in-your-business');
	}
	Public function workforce_automation_and_its_benefits()
	{
		$this->load->view('body/Blog/workforce-automation-and-its-benefits');
	}
	Public function how_to_have_better_control_and_improved_roi()
	{
		$this->load->view('body/Blog/how-to-have-better-control-and-improved-roi');
	}
	Public function how_can_data_management_save_your_time_and_help_you_improve_your_sales()
	{
		$this->load->view('body/Blog/how-can-data-management-save-your-time-and-help-you-improve-your-sales');
	}
	Public function how_to_improve_your_workforce_efficiency()
	{
		$this->load->view('body/Blog/how-to-improve-your-workforce-efficiency');
	}
	Public function understanding_field_workforce_management()
	{
		$this->load->view('body/Blog/understanding-field-workforce-management');
	}
	Public function five_reasons_why_imprint_ai_is_for_your_business()
	{
		$this->load->view('body/Blog/five-reasons-why-imprint-ai-is-for-your-business');
	}
	Public function A_day_in_the_life_of_a_field_sales_agent()
	{
		$this->load->view('body/Blog/A-day-in-the-life-of-a-field-sales-agent');
	}
	Public function How_to_nurture_a_motivated_field_sales_team()
	{
		$this->load->view('body/Blog/How-to-nurture-a-motivated-field-sales-team');
	}
	Public function Does_chatgpt_usher_in_the_future_we_were_dreaming_of()
	{
		$this->load->view('body/Blog/Does-chatgpt-usher-in-the-future-we-were-dreaming-of');
	}
	Public function Why_imprint_ai_is_trusted_worldwide_for_its_extensive_workforce_automation_features()
	{
		$this->load->view('body/Blog/Why-imprint-ai-is-trusted-worldwide-for-its-extensive-workforce-automation-features');
	}
	Public function Importance_of_beat_planning_for_sales_and_distribution_agents()
	{
		$this->load->view('body/Blog/Importance-of-beat-planning-for-sales-and-distribution-agents');
	}
	Public function How_gps_technology_has_changed_productivity_measures_in_sales_space()
	{
		$this->load->view('body/Blog/How-gps-technology-has-changed-productivity-measures-in-sales-space');
	}
	Public function Whats_new_with_imprint_ai()
	{
		$this->load->view('body/Blog/Whats-new-with-imprint-ai');
	}
	Public function The_ideal_companion_to_every_sales_personnel_ever()
	{
		$this->load->view('body/Blog/The-ideal-companion-to-every-sales-personnel-ever');
	}
	Public function Multiple_problems_one_solution_imprint_ai()
	{
		$this->load->view('body/Blog/Multiple-problems-one-solution-imprint-ai');
	}
	Public function Make_your_small_business_digitally_booming_the_imprint_solution()
	{
		$this->load->view('body/Blog/Make-your-small-business-digitally-booming-the-imprint-solution');
	}
	Public function Lead_the_leads_right_with_imprints_lead_management()
	{
		$this->load->view('body/Blog/Lead-the-leads-right-with-imprints-lead-management');
	}
	Public function Know_your_customers_better_with_imprint_ai()
	{
		$this->load->view('body/Blog/Know-your-customers-better-with-imprint-ai');
	}
	Public function Imprint_inclusion_protocol_accommodation_a_diverse_workforce()
	{
		$this->load->view('body/Blog/Imprint-inclusion-protocol-accommodation-a-diverse-workforce');
	}
	Public function Imprint_ai_super_solution_for_superb_sales()
	{
		$this->load->view('body/Blog/Imprint-ai-super-solution-for-superb-sales');
	}
	Public function How_to_choose_the_right_companion_to_your_workforce()
	{
		$this->load->view('body/Blog/How-to-choose-the-right-companion-to-your-workforce');
	}
	Public function How_does_imprint_help_with_operations_and_territory_management()
	{
		$this->load->view('body/Blog/How-does-imprint-help-with-operations-and-territory-management');
	}
	Public function Happy_customer_holistic_success_making_sales_more_customer_centric()
	{
		$this->load->view('body/Blog/Happy-customer-holistic-success-making-sales-more-customer-centric');
	}
	Public function Happier_customer_holistic_revenue_the_imprint_promise()
	{
		$this->load->view('body/Blog/Happier-customer-holistic-revenue-the-imprint-promise');
	}
	Public function Finer_field_force_with_imprint_ai()
	{
		$this->load->view('body/Blog/Finer-field-force-with-imprint-ai');
	}
	Public function Beat_a_lagging_workforce_with_our_beat_planning()
	{
		$this->load->view('body/Blog/Beat-a-lagging-workforce-with-our-beat-planning');
	}
	Public function Skyrocket_sales_specifically_the_imprint_edge()
	{
		$this->load->view('body/Blog/Skyrocket-sales-specifically-the-imprint-edge');
	}
	Public function Our_journey_get_to_knows_one_to_one()
	{
		$this->load->view('body/Blog/Our-journey-get-to-knows-one-to-one');
	}
	Public function Taking_your_sales_efforts_to_the_moon()
	{
		$this->load->view('body/Blog/Taking-your-sales-efforts-to-the-moon');
	}
	Public function The_journey_to_a_simpler_workforce_equation_with_imprint_ai()
	{
		$this->load->view('body/Blog/The-journey-to-a-simpler-workforce-equation-with-imprint-ai');
	}
	Public function A_day_in_the_life_of_a_sales_manager_can_imprint_make_it_better()
	{
		$this->load->view('body/Blog/A-day-in-the-life-of-a-sales-manager-can-imprint-make-it-better');
	}
	Public function Why_is_sales_force_automation_a_boon_for_the_managers()
	{
		$this->load->view('body/Blog/Why-is-sales-force-automation-a-boon-for-the-managers');
	}
	Public function Healthcare_fraternity_needs_an_efficient_crm_heres_why()
	{
		$this->load->view('body/Blog/Healthcare-fraternity-needs-an-efficient-crm-heres-why');
	}
	Public function Can_automation_actually_help_your_business()
	{
		$this->load->view('body/Blog/Can-automation-actually-help-your-business');
	}
	Public function How_To_Effectively_Manage_A_Mobile_Workforce_With_Field_Force_Automation()
	{
		$this->load->view('body/Blog/How-To-Effectively-Manage-A-Mobile-Workforce-With-Field-Force-Automation');
	}
  Public function Why_Does_One_of_the_Largest_Mobile_Fuel_Suppliers_in_the_Country_Trust_Imprint_for_Managing_Its_Workforce()
	{
		$this->load->view('body/Blog/Why-Does-One-of-the-Largest-Mobile-Fuel-Suppliers-in-the-Country-Trust-Imprint-for-Managing-Its-Workforce');
	}
  Public function How_IMPRINT_Streamlined_Business_Processes_and_Boosted_Business_for_Diagnostic_labs()
	{
		$this->load->view('body/Blog/How-IMPRINT-Streamlined-Business-Processes-and-Boosted-Business-for-Diagnostic-labs');
	}
	Public function Maximizing_Field_Productivity_With_Real_Time_Data_and_Analytics()
	{
		$this->load->view('body/Blog/Maximizing-Field-Productivity-With-Real-Time-Data-and-Analytics');
	}
	Public function The_ROI_of_Investing_in_a_Field_Force_Management_Solution_for_Your_Business()
	{
		$this->load->view('body/Blog/The-ROI-of-Investing-in-a-Field-Force-Management-Solution-for-Your-Business');
	}
		Public function How_Can_Field_Service_Management_Software_Improve_Service_Quality_and_Increase_Revenue_For_Business()
	{
		$this->load->view('body/Blog/How-Can-Field-Service-Management-Software-Improve-Service-Quality-and-Increase-Revenue-For-Business');
	}
			Public function Job_Scheduling_and_Task_Assignment_The_Rescue_For_An_Overworked_Manager()
	{
		$this->load->view('body/Blog/Job-Scheduling-and-Task-Assignment-The-Rescue-For-An-Overworked-Manager');
	}
			Public function Maximizing_Field_Force_Efficiency_with_Beat_Planning_and_Scheduling()
	{
		$this->load->view('body/Blog/Maximizing-Field-Force-Efficiency-with-Beat-Planning-and-Scheduling');
	}
				Public function Beyond_Tracking_How_Imprint_Advanced_Reporting_and_Analytics_Can_Boost_Your_Business_Intelligence()
	{
		$this->load->view('body/Blog/Beyond-Tracking-How-Imprint-Advanced-Reporting-and-Analytics-Can-Boost-Your-Business-Intelligence');
	}
				Public function Pros_and_Cons_of_Field_Force_Management_Solutions_And_Why_Your_Business_Needs_One_Today()
	{
		$this->load->view('body/Blog/Pros-and-Cons-of-Field-Force-Management-Solutions-And-Why-Your-Business-Needs-One-Today');
	}
			Public function Unleash_Exponential_Business_Growth_With_Imprint_Client_and_Lead_Management_Feature()
	{
		$this->load->view('body/Blog/Unleash-Exponential-Business-Growth-With-Imprint-Client-and-Lead-Management-Feature');
	}
		Public function Building_a_nowledge_Hub_Empowering_Field_Agents_with_Updated_Knowledge_Base_in_Field_Force_Management()
	{
		$this->load->view('body/Blog/Building-a-Knowledge-Hub-Empowering-Field-Agents-with-Updated-Knowledge-Base-in-Field-Force-Management');
	}
		Public function Seamless_Virtual_Meetings_Simplifying_Meeting_Scheduling_with_Field_Force_Management_Solutions()
	{
		$this->load->view('body/Blog/Seamless-Virtual-Meetings-Simplifying-Meeting-Scheduling-with-Field-Force-Management-Solutions');
	}
			Public function Driving_Success_through_Segment_Wise_Performance_Monitoring_with_Field_Force_Management_Tools()
	{
		$this->load->view('body/Blog/Driving-Success-through-Segment-Wise-Performance-Monitoring-with-Field-Force-Management-Tools');
	}
			Public function Proactive_Client_Engagement_Leveraging_Nearby_Client_Alerts_in_Field_Force_Management()
	{
		$this->load->view('body/Blog/Proactive-Client-Engagement-Leveraging-Nearby-Client-Alerts-in-Field-Force-Management');
	}
				Public function Enabling_Seamless_Communication_Enhancing_Collaboration_with_24x7_Team_Communication_in_Field_Service_Management()
	{
		$this->load->view('body/Blog/Enabling-Seamless-Communication-Enhancing-Collaboration-with-24x7-Team-Communication-in-Field-Service-Management');
	}
				Public function Why_Field_Service_Management_FSM_Solutions_Give_An_Edge_to_Sales_Teams_in_The_Digital_Age()
	{
		$this->load->view('body/Blog/Why-Field-Service-Management-FSM-Solutions-Give-An-Edge-to-Sales-Teams-in-The-Digital-Age');
	}
				Public function Maximizing_ROI_Demystifying_Metrics_and_Analytics_in_Sales_Engagement_With_Field_Service_Management_Software()
	{
		$this->load->view('body/Blog/Maximizing-ROI-Demystifying-Metrics-and-Analytics-in-Sales-Engagement-With-Field-Service-Management-Software');
	}
				Public function Simplifying_Attendance_and_Leave_Management_with_Field_Force_Management_Software()
	{
		$this->load->view('body/Blog/Simplifying-Attendance-and-Leave-Management-with-Field-Force-Management-Software');
	}
				Public function Revolutionizing_Field_Service_Management_with_AI_and_Gamification_Elements()
	{
		$this->load->view('body/Blog/Revolutionizing-Field-Service-Management-with-AI-and-Gamification-Elements');
	}	
    Public function Finding_Difficulty_in_Managing_Your_Field_Force_IMPRINT_Holds_the_Key()
	{
		$this->load->view('body/Blog/Finding-Difficulty-in-Managing-Your-Field-Force-IMPRINT-Holds-the-Key');
	}	
    Public function Streamlining_Target_Tracking_and_Incentive_Management_with_Imprint_Field_Force_Performance_Monitoring_Tool()
	{
		$this->load->view('body/Blog/Streamlining-Target-Tracking-and-Incentive-Management-with-Imprint-Field-Force-Performance-Monitoring-Tool');
	}	
	
    Public function Five_Ways_to_Empower_Your_Field_Agents_to_Seal_More_Deals()
	{
		$this->load->view('body/Blog/Five-Ways-to-Empower-Your-Field-Agents-to-Seal-More-Deals');
	}	
    Public function Five_Ways_In_Which_Predictive_Analytics_in_Field_Service_Management_Can_Win_You_More_Loyal_Clients()
	{
		$this->load->view('body/Blog/Five-Ways-In-Which-Predictive-Analytics-in-Field-Service-Management-Can-Win-You-More-Loyal-Clients');
	}	
    Public function Put_A_Fullstop_To_Lead_Leakage_With_Imprint_360_degree_Field_Service_Management_Tool()
	{
		$this->load->view('body/Blog/Put-A-Fullstop-To-Lead-Leakage-With-Imprint-360-degree-Field-Service-Management-Tool');
	}	
    Public function Seven_Reasons_Why_Akash_Is_The_Superstar_Sales_Agent_of_His_Team()
	{
		$this->load->view('body/Blog/Seven-Reasons-Why-Akash-Is-The-Superstar-Sales-Agent-of-His-Team');
	}	
    Public function The_Future_Is_Here_AI_Assistance_in_Field_Service_Management_with_Imprint()
	{
		$this->load->view('body/Blog/The-Future-Is-Here-AI-Assistance-in-Field-Service-Management-with-Imprint');
	}	
    Public function Ensuring_Quality_Elderly_Care_with_Imprint_A_Real_Time_Field_Staff_Management_Solution()
	{
		$this->load->view('body/Blog/Ensuring-Quality-Elderly-Care-with-Imprint-A-Real-Time-Field-Staff-Management-Solution');
	}	
    Public function How_A_Field_Service_Management_Tool_Can_Turn_The_Tide_For_FMCG_Brands()
	{
		$this->load->view('body/Blog/How-A-Field-Service-Management-Tool-Can-Turn-The-Tide-For-FMCG-Brands');
	}	
    Public function Field_Service_Management_in_the_Insurance_Sector_Pivotal_Role_of_Automation()
	{
		$this->load->view('body/Blog/Field-Service-Management-in-the-Insurance-Sector-Pivotal-Role-of-Automation');
	}	
    Public function effective_lead_management_with_field_service_management_tools_why_it_matters()
	{
		$this->load->view('body/Blog/effective-lead-management-with-field-service-management-tools-why-it-matters');
	}	
    Public function expanding_frontiers_imprint_campaign_management_feature_redefines_field_service_management()
	{
		$this->load->view('body/Blog/expanding-frontiers-imprint-campaign-management-feature-redefines-field-service-management');
	}	
	Public function best_field_force_management_tools()
	{
		$this->load->view('body/Blog/best-field-force-management-tools');
	}	
	Public function how_field_force_management_solutions_drive_solar_industry_success()
	{
		$this->load->view('body/Blog/how-field-force-management-solutions-drive-solar-industry-success');
	}	
	Public function optimizing_field_operations_with_scheduling_software()
	{
		$this->load->view('body/Blog/optimizing-field-operations-with-scheduling-software');
	}	
public function streamlining_lead_management_with_imprint_new_business_card_scanner_feature()
{
    $this->load->view('body/Blog/streamlining-lead-management-with-imprint-new-business-card-scanner-feature');
}

public function the_evolution_of_field_force_management_in_the_2025_trends() {
        // Load the view for "The Evolution of Field Force Management in the USA: 2025 Trends"
        $this->load->view('body/Blog/the-evolution-of-field-force-management-in-the-2025-trends');
    }

    public function imprint_employee_attendance_management_system() {
        // Load the view for "Imprints Employee Attendance Management System: Comprehensive, Adaptable, and Reliable"
        $this->load->view('body/Blog/imprint-employee-attendance-management-system');
    }
  public function ai_powered_minutes_of_meeting_recording_sharing() {
        // Load the view for "ai-powered-minutes-of-meeting-recording-sharing"
        $this->load->view('body/Blog/ai-powered-minutes-of-meeting-recording-sharing');
    }
   public function how_ai_is_revolutionizing_field_force_management() {
        // Load the view for "how-ai-is-revolutionizing-field-force-management"
        $this->load->view('body/Blog/how-ai-is-revolutionizing-field-force-management');
    }
    public function signs_your_field_force_needs_imprint() {
        // Load the view for "10-signs-your-field-force-needs-imprint"
        $this->load->view('body/Blog/signs-your-field-force-needs-imprint');
    }
    public function workforce_management_scheduling_imprint_automation() {
        // Load the view for "workforce-management-scheduling-imprint-automation"
        $this->load->view('body/Blog/workforce-management-scheduling-imprint-automation');
    }
  public function device_info_field_employee_tracking() {
        // Load the view for "device-info-field-employee-tracking"
        $this->load->view('body/Blog/device-info-field-employee-tracking');
    }
}
