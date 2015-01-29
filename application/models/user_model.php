<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        if( $id = $this->uri->segment(3) ){
            $query = $this->db->get_where('users', array('id' => $id));
        }else{
            $query = $this->db->get('suburbs');
        }

        return $query->result();        
    }

    public function put()
    {
		$data = array(
	       	'first_name'  => $this->input->post('first_name'),
	        'last_name'   => $this->input->post('last_name'),
	        'email' 	  => $this->input->post('email'),
	        'password' 	  => $this->input->post('password'),
	        'create_date' => date('Y-m-d H:i:s'),
	        'last_update' => date('Y-m-d H:i:s')
		);

		$this->db->insert('users', $data); 
    }

    public function post()
    {
		$data = array(
	       	'first_name'  => $this->input->post('first_name'),
	        'last_name'   => $this->input->post('last_name'),
	        'email' 	  => $this->input->post('email'),
	        'password' 	  => $this->input->post('password'),
	        'create_date' => date('Y-m-d H:i:s'),
	        'last_update' => date('Y-m-d H:i:s')
		);

		$id = $this->uri->segment(3);
		$this->db->where('id', $id);
		$this->db->update('users', $data); 
    }

    public function delete()
    {
    	$id = $this->uri->segment(3);
    	$this->db->delete('users', array('id' => $id)); 
    }          
}