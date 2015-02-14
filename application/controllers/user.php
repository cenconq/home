<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    /* REQUEST HANDLERS */

	public function get()
	{
		print_r($this->user_model->get());
	}

	public function put()
	{
        $config = array(
            array(
                'field'   => 'first_name', 
                'label'   => 'First Name', 
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'last_name', 
                'label'   => 'Last Name', 
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'email', 
                'label'   => 'Email', 
                'rules'   => 'trim|required|valid_email|is_unique[users.email]'
            ),
            array(
                'field'   => 'password', 
                'label'   => 'Password', 
                'rules'   => 'trim|required|min_length[8]'
            ),
            array(
                'field'   => 'passconfirm', 
                'label'   => 'Confirm Password', 
                'rules'   => 'trim|required|match[password]'
            ),                                                          
        );

        $this->form_validation->set_rules($config);

        $this->load->model( 'suburb_model' );
        $data = array( 'suburbs' => $this->suburb_model->get(0, TRUE) );

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('user/put', $data);
        }
        else
        {
            $this->user_model->put();
        }
	}

	public function post()
	{
		$this->user_model->post();	
	}

	public function delete()
	{
		$this->user_model->delete();
	}

    /* Activities */

    public function login()
    {       
       $config = array(
            array(
                'field'   => 'email', 
                'label'   => 'Email', 
                'rules'   => 'trim|required|valid_email'
            ),
            array(
                'field'   => 'password', 
                'label'   => 'Password', 
                'rules'   => 'trim|required'
            ),                                                         
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('user/login');
        }
        else
        {
            if( $this->user_model->login() )
            {
                $data = array(
                   'email'     => $this->input->post( 'email' ),
                   'logged_in' => TRUE
               );

                $this->session->set_userdata( $data );
            }
        }        
    }

    public function logout()
    {
        $this->load->helper('url');
        $this->session->sess_destroy();

        redirect('/', 301);
    } 

    public function forgot()
    {
        $this->load->library('email');

        $config = array(
            array(
                'field'   => 'email', 
                'label'   => 'Email', 
                'rules'   => 'trim|required|valid_email'
            ),                                                        
        );

        $this->form_validation->set_rules($config);
                    
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('user/forgot');
        }
        else
        {
            $this->email->from('your@example.com', 'Your Name');
            $this->email->to( $this->input->post( 'email' ) );

            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');  

            $this->email->send();
        }
    }      
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */