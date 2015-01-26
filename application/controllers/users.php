<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Users extends REST_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function rest_get($id)
	{
		$u = new user();

		// Get User by ID
		if( $id ){
	        $u->get_by_id($id);
	        $u->set_json_content_type();
		}

		// Get All User
		else
		{
	        $u->get();
	        $u->set_json_content_type();
		}

		print $u->all_to_json();
	}

	// Create User
	public function rest_put()
	{
    	$u = new user();

        $u->first_name = $this->put('first_name');
        $u->last_name  = $this->put('last_name');
        $u->email = $this->put('email');
        $u->password = $this->put('password');
        $u->create_date = date('Y-m-d H:i:s');
        $u->last_update = date('Y-m-d H:i:s');

		$s = new suburb();
		$s->where('id', $this->put('suburb'))->get();

		$u->save($s);

		print $u->error->string;
	}

	// Edit exist User
	public function rest_post($id)
	{
		if ( $id ) {
	    	$u = new user($id);

	        $u->first_name = $this->post('first_name');
	        $u->last_name  = $this->post('last_name');
	        $u->email = $this->post('email');
	        $u->password = $this->post('password');
	        $u->last_update = date('Y-m-d H:i:s');

			$s = new suburb();
			$s->where('id', $this->post('suburb'))->get();

			$u->save($s);

			print $u->error->string;
		}
	}

	public function rest_delete($id)
	{
		// Delete User by ID
		if( $id ){
			$u = new user($id);
		    $u->delete();		
		}
	}
}