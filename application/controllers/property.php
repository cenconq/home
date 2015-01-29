<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->model('property_model');
    }

	public function index()
	{
		$this->load->view('property/index');
	}

	public function get()
	{
		print_r($this->property_model->get());
	}

	public function put()
	{

		$config = array(
        	array(
            	'field'   => 'price', 
            	'label'   => 'Price', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'address', 
            	'label'   => 'Address', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'house_size', 
            	'label'   => 'House Size', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'land_size', 
            	'label'   => 'Land Size', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'post_code', 
            	'label'   => 'Postcode', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'bedrooms', 
            	'label'   => 'Bedrooms', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'bathrooms', 
            	'label'   => 'Bathrooms', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'ensuite', 
            	'label'   => 'Ensuite', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'garage', 
            	'label'   => 'Garage', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'carport', 
            	'label'   => 'Carport', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'carspace', 
            	'label'   => 'Carspace', 
            	'rules'   => 'trim|required'
            ),
        	array(
            	'field'   => 'suburb_id', 
            	'label'   => 'Suburb', 
            	'rules'   => 'trim|required'
            )                                                          
        );

		$this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('property/put');
        }
        else
        {
            $this->property_model->put();
        }
	}

	public function post()
	{
		$this->property_model->post();	
	}

	public function delete()
	{
		$this->property_model->delete();
	}

    public function search()
    {
        $config = array(
            array(
                'field'   => 'price', 
                'label'   => 'Price', 
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'bedrooms', 
                'label'   => 'Bedrooms', 
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'bathrooms', 
                'label'   => 'Bathrooms', 
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'suburb_id', 
                'label'   => 'Suburb', 
                'rules'   => 'trim|required'
            )                                                        
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('main');
        }
        else
        {
            $this->property_model->search();
        }        
    }		
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */