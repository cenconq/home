<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role_user extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library( 'form_validation' );
        $this->load->model( 'role_model' );
    }

    /* REQUEST HANDLERS */

	public function get( $id = FALSE )
	{   
        return $this->role_user_model->get( $id );
	}

	public function put()
	{
        $config = array(
            array(
                'field'   => 'role_id', 
                'label'   => 'Role ID', 
                'rules'   => 'trim|required|max_length[32]'
            ),

            array(
                'field'   => 'user_id', 
                'label'   => 'User ID', 
                'rules'   => 'trim|required|max_length[32]'
            ),                                                      
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('role_user/put');
        }
        else
        {
            $this->role_user_model->put();
        }        
	}

	public function post()
	{
        $config = array(
            array(
                'field'   => 'id', 
                'label'   => 'ID', 
                'rules'   => 'trim|required'
            ),

            array(
                'field'   => 'role_id', 
                'label'   => 'Role ID', 
                'rules'   => 'trim|required|max_length[32]'
            ),

            array(
                'field'   => 'user_id', 
                'label'   => 'User ID', 
                'rules'   => 'trim|required|max_length[32]'
            ),                                                      
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('role_user/post');
        }
        else
        {
            $id = $this->input->post( 'id' );
            $this->role_user_model->post( $id );
        }           
	}

	public function delete( $id = FALSE )
	{
        $this->role_user_model->delete( $id );
	}
}

/* End of file role_user.php */
/* Location: ./application/controllers/role_user.php */