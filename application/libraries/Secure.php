<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Secure {

	public function salt()
	{
		$CI =& get_instance();
		$CI->load->helper( 'string' );

		return random_string( 'alnum', 32 );
	}

	public function encrypt( $password, $salt )
	{
		return  sha1( $password . $salt );
	}

	public function compare( $password, $hashed )
	{
		return ( $password == $hashed );
	}
}
/* End of file Salt.php */
