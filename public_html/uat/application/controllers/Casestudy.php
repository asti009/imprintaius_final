<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Casestudy extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database(); // Load database library
    }

    public function Casestudy()
    {
        // Pagination settings
        $items_per_page = 5;
        $current_page = $this->input->get('page') ? (int)$this->input->get('page') : 1;
        $current_page = max(1, $current_page);
        $offset = ($current_page - 1) * $items_per_page;

        // Get total count for pagination
        $this->db->where('type', 'case_study');
        $total_studies = $this->db->count_all_results('content');
        $total_pages = ceil($total_studies / $items_per_page);

        // Fetch case studies for current page
        $this->db->select('title, content AS description, date, slug, image, category, file_path');
        $this->db->where('type', 'case_study');
        $this->db->order_by('date', 'DESC');
        $this->db->limit($items_per_page, $offset);
        $query = $this->db->get('content');
        $data['case_studies'] = $query->result_array();

        // Fetch recent posts (top 3 case studies)
        $this->db->select('title, content AS description, date, slug, image, category, file_path');
        $this->db->where('type', 'case_study');
        $this->db->order_by('date', 'DESC');
        $this->db->limit(3);
        $query = $this->db->get('content');
        $data['recent_studies'] = $query->result_array();

        // Transform data for both case studies and recent studies
        foreach (['case_studies', 'recent_studies'] as $key) {
            foreach ($data[$key] as &$study) {
                // Generate link using slug
                $study['link'] = ($study['slug'] == 'casestudy.imprintai.us') 
                    ? 'https://casestudy.imprintai.us/' 
                    : base_url('/' . $study['slug']);
                // Prepend image path
                $study['image'] = 'assets/images/casestudy/' . $study['image'];
                // Format date
                $study['date'] = date('F d, Y', strtotime($study['date']));
            }
        }

        // Pass pagination data
        $data['total_pages'] = $total_pages;
        $data['current_page'] = $current_page;

        $this->load->view('body/Casestudy/index', $data);
    }

    // Dynamic method to handle individual case study pages
    public function view($slug = '')
    {
        if (empty($slug)) {
            show_404();
        }

        // Fetch case study by slug
        $this->db->select('title, content, date, category, image, slug, file_path');
        $this->db->where('type', 'case_study');
        $this->db->where('slug', $slug);
        $query = $this->db->get('content');
        
        if ($query->num_rows() == 0) {
            show_404();
        }

        $data['case_study'] = $query->row_array();
        
        // Check if file_path exists and is valid
        if (!empty($data['case_study']['file_path']) && file_exists(APPPATH . 'views/' . $data['case_study']['file_path'] . '.php')) {
            $this->load->view($data['case_study']['file_path'], $data);
        } else {
            // Fallback: Load a generic case study view or redirect for external links
            if ($data['case_study']['slug'] == 'casestudy.imprintai.us') {
                redirect('https://casestudy.imprintai.us/');
            } else {
                // Optional: Load a generic view with case study data
                $this->load->view('body/Casestudy/generic', $data);
            }
        }
    }
 
}
  