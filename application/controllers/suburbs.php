<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Suburbs extends REST_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function rest_get($id=FALSE)
	{
		$suburb = new suburb();

		// Get Suburb by ID
		if( $id ){
	        $suburb->get_by_id($id);
	        $suburb->set_json_content_type();
		}

		// Get All Suburb
		else
		{
	        $suburb->get();
	        $suburb->set_json_content_type();
		}

		print $suburb->all_to_json();
	}

	// Create Suburb
	public function rest_put()
	{
     	$suburb = new suburb();

        $suburb->name = $this->put('name');

		// State Relationship
		$state = new state();
		$state->where('id', $this->put('state'))->get();		

		// Relate the State to Suburb
        $suburb->save($state);

		print $suburb->error->string;
	}

	// Edit exist Suburb
	public function rest_post($id=FALSE)
	{
		if ( $id ) {
	    	$suburb = new suburb($id);

	        $suburb->name = $this->post('name');

			// State Relationship
			$state = new state();
			$state->where('id', $this->post('state'))->get();	

			// Relate the State to Suburb
	        $suburb->save($state);

			print $suburb->error->string;
		}
	}

	public function rest_delete($id=FALSE )
	{
		// Delete Suburb by ID
		if( $id ){
			$suburb = new suburb($id);
		    $suburb->delete();
		}		
	}
}