<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model( 'suburb_model' );

		$price = array(
			0 => '无限制',
			300000 => '$30万',
			400000 => '$40万',
			500000 => '$50万',
			600000 => '$60万',
			700000 => '$70万',
			800000 => '$80万',
			900000 => '$90万',
			1000000 => '$100万',
			1100000 => '$110万',
			1200000 => '$120万',
		);

		$bedrooms = array(
			0 => '无限制',
			1 => '1+', 
			2 => '2+', 
			3 => '3+',
			4 => '4+', 
		);

		$suburbs = array( 0 => '无限制' );

		foreach ($this->suburb_model->get() as $suburb) {
			$suburbs[$suburb->id] = $suburb->name;
		}

		$data = array(
			'price' => $price,
			'bedrooms' => $bedrooms,
			'suburbs' => $suburbs
		);

		$this->load->view('main', $data);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */