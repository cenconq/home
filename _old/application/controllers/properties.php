<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Properties extends REST_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function rest_get($id=FALSE)
	{
		$property = new property();

		// Get Property by ID
		if( $id ){
	        $property->get_by_id($id);
	        $property->set_json_content_type();
		}

		// Get All Property
		else
		{
	        $property->get();
	        $property->set_json_content_type();
		}

		print $property->all_to_json();
	}

	// Create Property
	public function rest_put()
	{
     	$property = new property();

        $property->price = $this->put('price');
        $property->address = $this->put('address');
        $property->house_size = $this->put('house_size');
        $property->land_size = $this->put('land_size');
        $property->post_code = $this->put('post_code');
        $property->bedrooms = $this->put('bedrooms');
        $property->bathrooms = $this->put('bathrooms');
        $property->ensuite = $this->put('ensuite');
        $property->garage = $this->put('garage');
        $property->carport = $this->put('carport');
        $property->carspace = $this->put('carspace');

        // Suburb Relationship
		$suburb = new suburb();
		$suburb->where('id', $this->put('suburb'))->get();

		// Relate the Suburb to Property
        $property->save($suburb);

		print $property->error->string;
	}

	// Edit exist Property
	public function rest_post($id=FALSE)
	{
		if ( $id ) {
	    	$property = new property($id);

	        $property->price = $this->put('price');
	        $property->address = $this->put('address');
	        $property->house_size = $this->put('house_size');
	        $property->land_size = $this->put('land_size');
	        $property->post_code = $this->put('post_code');
	        $property->bedrooms = $this->put('bedrooms');
	        $property->bathrooms = $this->put('bathrooms');
	        $property->ensuite = $this->put('ensuite');
	        $property->garage = $this->put('garage');
	        $property->carport = $this->put('carport');
	        $property->carspace = $this->put('carspace');

	        // Suburb Relationship
			$suburb = new suburb();
			$suburb->where('id', $this->put('suburb'))->get();

			// Relate the Suburb to Property
	        $property->save($suburb);

			print $property->error->string;		   	    	
		}
	}

	public function rest_delete($id=FALSE)
	{
		// Delete User by ID
		if( $id ){
			$property = new property($id);
		    $property->delete();		
		}
	}
}