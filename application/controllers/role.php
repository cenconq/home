<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library( 'form_validation' );
        $this->load->model( 'role_model' );
    }

    /* REQUEST HANDLERS */

	public function get()
	{
		print_r( $this->role_model->get() );
	}

	public function put()
	{
        $config = array(
            array(
                'field'   => 'name', 
                'label'   => 'Role Name', 
                'rules'   => 'trim|required|max_length[45]|is_unique[roles.name]'
            ),                                          
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('role/put');
        }
        else
        {
            $this->role_model->put();
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
}

/* End of file role.php */
/* Location: ./application/controllers/role.php */