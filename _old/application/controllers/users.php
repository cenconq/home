<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Users extends REST_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function rest_get($id=FALSE)
	{
		$user = new user();

		// Get User by ID
		if( $id ){
	        $user->get_by_id($id);
	        $user->set_json_content_type();
		}

		// Get All User
		else
		{
	        $user->get();
	        $user->set_json_content_type();
		}

		print $user->all_to_json();
	}

	// Create User
	public function rest_put()
	{
    	$user = new user();

        $user->first_name = $this->put('first_name');
        $user->last_name  = $this->put('last_name');
        $user->email = $this->put('email');
        $user->password = $this->put('password');
        $user->create_date = date('Y-m-d H:i:s');
        $user->last_update = date('Y-m-d H:i:s');

        // Suburb Relationship
		$suburb = new suburb();
		$suburb->where('id', $this->put('suburb'))->get();

		// File Relationship
		$file = new file();
		$file->where('id', $this->put('file'))->get();		

		// Relate the user to them
        $user->save( array($suburb, $file) );

		print $user->error->string;
	}

	// Edit exist User
	public function rest_post($id=FALSE)
	{
		if ( $id ) {
	    	$user = new user($id);

	        $user->first_name = $this->post('first_name');
	        $user->last_name  = $this->post('last_name');
	        $user->email = $this->post('email');
	        $user->password = $this->post('password');
	        $user->last_update = date('Y-m-d H:i:s');

	        // Suburb Relationship
			$suburb = new suburb();
			$suburb->where('id', $this->post('suburb'))->get();

			$user->save($suburb);

			print $user->error->string;
		}
	}

	public function rest_delete($id=FALSE)
	{
		// Delete User by ID
		if( $id ){
			$user = new user($id);
		    $user->delete();		
		}
	}
}