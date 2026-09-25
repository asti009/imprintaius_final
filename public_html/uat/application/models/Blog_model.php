<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get blogs with pagination
    public function get_blogs($limit, $offset) {
        $this->db->select('id, title, date, category, image, slug');
        $this->db->from('blogs'); // Replace 'blogs' with your actual table name
        $this->db->where('type', 'blog');
        $this->db->order_by('date', 'DESC');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }

    // Get total number of blogs
    public function get_total_blogs() {
        $this->db->where('type', 'blog');
        return $this->db->count_all_results('blogs'); // Replace 'blogs' with your actual table name
    }

    // Get single blog by slug
    public function get_blog_by_slug($slug) {
        $this->db->where('slug', $slug);
        $this->db->where('type', 'blog');
        $query = $this->db->get('blogs'); // Replace 'blogs' with your actual table name
        return $query->row_array();
    }
}