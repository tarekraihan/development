<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backdoor extends CI_Controller {


    public function index()
    {
        if($this->session->userdata('email_address')){
            redirect('backdoor/dashboard');
        }else{
            $data['title']="Login";
            $this->load->view('admin/includes/admin_header');
            $this->load->view('admin/login',$data);
            $this->load->view('admin/includes/admin_footer');

        }
    }

    public function dashboard()
    {
        if($this->session->userdata('email_address')){
            redirect('backdoor/dashboard');
        }else{
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/index');
        $this->load->view('admin/includes/admin_footer');
        }
    }
    public function adb_fact_sheet()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/adb_fact_sheet');
        $this->load->view('admin/includes/admin_footer');
    }
    public function adb_business_plan()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/adb_business_plan');
        $this->load->view('admin/includes/admin_footer');
    }

    public function adb_strategy_program()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/adb_strategy_prog');
        $this->load->view('admin/includes/admin_footer');
    }

    public function five_years_plan()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/five_years_plan');
        $this->load->view('admin/includes/admin_footer');
    }

    public function create_user()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/create_user');
        $this->load->view('admin/includes/admin_footer');
    }
    public function blog_post()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/blog_post');
        $this->load->view('admin/includes/admin_footer');
    }

    public function development_initiative()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/development_initiative');
        $this->load->view('admin/includes/admin_footer');
    }

    public function country_info()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/country_info');
        $this->load->view('admin/includes/admin_footer');
    }

    public function economic_scenarios()
    {
        $this->load->view('admin/includes/admin_header');
        $this->load->view('admin/economic_scenarios');
        $this->load->view('admin/includes/admin_footer');
    }
}
