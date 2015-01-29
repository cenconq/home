<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suburb extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->model('suburb_model');
    }

	public function index()
	{
		$this->load->view('user');
	}

	public function get()
	{
		print_r($this->suburb_model->get());
	}

	public function put()
	{

		$config = array(
        	array(
            	'field'   => 'name', 
            	'label'   => 'Name', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'state_id', 
            	'label'   => 'State ID', 
            	'rules'   => 'trim|required'
            ),                                                          
        );

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('user/put');
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
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */