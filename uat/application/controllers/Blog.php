<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }

    public function index($page = 1) {
        $blogsPerPage = 9;
        $offset = ($page - 1) * $blogsPerPage;

        // Fetch blogs and total count
        $data['blogs'] = $this->Blog_model->get_blogs($blogsPerPage, $offset);
        $totalBlogs = $this->Blog_model->get_total_blogs();
        $data['totalPages'] = ceil($totalBlogs / $blogsPerPage);
        $data['currentPage'] = $page;

        // Load the blog listing view
        $this->load->view('body/Blog/index', $data);
    }

    public function view($slug) {
        // Fetch the blog by slug
        $data['blog'] = $this->Blog_model->get_blog_by_slug($slug);

        if (empty($data['blog'])) {
            show_404(); // Show 404 if blog not found
        }

        // Load the individual blog view (you need to create this view)
        $this->load->view('body/Blog/view', $data);
    }
}