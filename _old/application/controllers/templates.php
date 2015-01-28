<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	// Home Page
	public function index()
	{
		$this->load->view('home');
	}	
}