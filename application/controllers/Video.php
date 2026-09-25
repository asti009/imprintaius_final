<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function Video() {
        // Video array with links and titles
        $videos = array(
            array('title' => "Why Choose an 'Intelligent' Field Force Automation Solution?", 'link' => 'https://www.youtube.com/embed/EfdpKdjC6ks'),
            array('title' => "A Word By The Founders", 'link' => 'https://www.youtube.com/embed/1tHRoGoXhXc'),
            array('title' => "IMPRINT AI Capabilities", 'link' => 'https://www.youtube.com/embed/LAClSXZcvvs'),
            array('title' => "Imprint Campaign Management video", 'link' => 'https://www.youtube.com/embed/2Hp7eljtKfk'),
            array('title' => "Game-changing Features to Empower Field Agents", 'link' => 'https://www.youtube.com/embed/_hmiTWIpCDs'),
            array('title' => "Unlock Unparalleled Customer Satisfaction with Imprint Field Service Management Software!", 'link' => 'https://www.youtube.com/embed/26NwEjEvoLE'),
            array('title' => "Unlock Your Sales Potential with Imprint!", 'link' => 'https://www.youtube.com/embed/SiG6OgD-5Bg'),
            array('title' => "Unlock Your Sales Potential: 7 Habits of a Superstar Field Agent with Imprint App", 'link' => 'https://www.youtube.com/embed/eKukwPTLKxI?si=askJ0wa5hP9XknxJ'),
        );

        // Reverse the videos array to show the latest first
        $videos = array_reverse($videos);

        // Pagination variables
        $videos_per_page = 9;
        $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $total_videos = count($videos);
        $total_pages = ceil($total_videos / $videos_per_page);
        $offset = ($current_page - 1) * $videos_per_page;
        $videos_to_display = array_slice($videos, $offset, $videos_per_page);

        // Pass data to the view
        $data['videos_to_display'] = $videos_to_display;
        $data['total_pages'] = $total_pages;
        $data['current_page'] = $current_page;

        // Load the view and pass the data
        $this->load->view('body/Video/index', $data);
    }
}
