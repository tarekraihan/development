<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EN extends CI_Controller {

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('index');
        $this->load->view('includes/footer');
    }

    public function regional()
    {
        $this->load->view('includes/header');
        $this->load->view('regional');
        $this->load->view('includes/footer');
    }

    public function bangladesh()
    {
        $this->load->view('includes/header');
        $this->load->view('bangladesh');
        $this->load->view('includes/footer');
    }
    public function adb_news()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('adbnews');
        $this->load->view('includes/footer');
    }
    public function seventh_fifth_year_plan()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('7th5thyear');
        $this->load->view('includes/footer');
    }

    public function bangladesh_index()
    {
        $this->load->view('includes/header_accordion');
        $this->load->view('bangladesh_index');
        $this->load->view('includes/footer');
    }
    public function development_initiative()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('blog');
        $this->load->view('includes/footer');
    }
    public function initiative_details()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('blog_details');
        $this->load->view('includes/footer');
    }
    public function adb_projects()
    {
        $this->load->view('includes/header_timeline');
        $this->load->view('adb_projects');
        $this->load->view('includes/footer');
    }
    public function adb_project_details()
    {
        $this->load->view('includes/header_timeline');
        $this->load->view('adb_project_details');
        $this->load->view('includes/footer');
    }

    public function world_bank_projects()
    {
        $this->load->view('includes/header_timeline');
        $this->load->view('worldbank_project');
        $this->load->view('includes/footer');
    }
    public function blog()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('blog');
        $this->load->view('includes/footer');
    }

    public function faq()
    {
        $this->load->view('includes/header_accordion');
        $this->load->view('faq');
        $this->load->view('includes/footer');
    }
    public function opinion()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('opinion');
        $this->load->view('includes/footer');
    }

    public function job_news()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('job-news');
        $this->load->view('includes/footer');
    }

    public function job_details()
    {
        $this->load->view('includes/header_tab');
        $this->load->view('job-news-details');
        $this->load->view('includes/footer');
    }
    public function privacy_privacy()
    {
        $this->load->view('includes/header');
        $this->load->view('privacy');
        $this->load->view('includes/footer');
    }
    public function sources()
    {
        $this->load->view('includes/header');
        $this->load->view('source');
        $this->load->view('includes/footer');
    }
    public function sitemap()
    {
        $this->load->view('includes/header_accordion');
        $this->load->view('sitemap');
        $this->load->view('includes/footer');
    }

}