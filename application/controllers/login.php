<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**********************************************
 * Developer : Tarek Raihan                   *
 * Project : Bangladesh Gate way              *
 * Script : All Login & Attendance Query      *
 * Start Date :   13-06-2015                  *
 * Last Update : 10-07-2015                   *
 **********************************************/

class Login extends CI_Controller {


	
	public function index()
    {
        $this->form_validation->set_rules('txtEmail','Email Address', 'trim|required|min_length[5]|max_length[80]|xss_clean');
        $this->form_validation->set_rules('txtPassword','Password', 'trim|required|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('login');

        }
        else
        {
            
            $data['email_address']=$this->input->post('txtEmail');
            $data['password']=$this->input->post('txtPassword');

            $result = $this->registration_model->check_admin_user($data);


            if($result)
            {
                	$sdata['user_id']=$result->user_id;
                    $sdata['email_address']=$result->email_address;
                    $sdata['first_name']=$result->first_name;
                    $sdata['last_name']=$result->last_name;
                    $sdata['user_role_id']=$result->user_role_id;
                    $sdata['password']=$result->password;
                    $this->session->set_userdata($sdata);

                    
                    redirect('backdoor/dashboard');
                

            }
            else
            {

                $sdata['error']="User Name and Password Not Correct!!";
                $this->session->set_userdata($sdata);
                redirect('backdoor/index');
            }

        }
    }
	
	
	public function admin_log_out()
    {
        

        $this->session->unset_userdata();
        $this->session->sess_destroy();
		
		redirect('backdoor');
    }
	
}