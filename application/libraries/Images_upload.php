<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Images_upload {

	public function upload( $id )
	{
		$CI =& get_instance();
		$CI->load->library( 'upload' );

		if ( $_FILES ) {
			$files = $_FILES;
			$cpt = count( $_FILES['userfile']['name'] );

			for ( $i = 0; $i < $cpt; $i++ ) {
				$_FILES['userfile']['name']  = $files['userfile']['name'][$i];
				$_FILES['userfile']['type']  = $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']  = $files['userfile']['error'][$i];
				$_FILES['userfile']['size']  = $files['userfile']['size'][$i];

				$CI->upload->initialize( $this->upload_config() );

				if ( ! $CI->upload->do_upload() ) {
					print_r( $CI->upload->display_errors() );

				} else {
					$uploaded = $CI->upload->data();
					$this->image_resize( $uploaded['file_name'] );

					/* Insert into database */
					$CI->load->model( 'file_model' );
					$CI->file_model->put( $uploaded['file_name'], 'image' );				
				}
			}
		}
	}

	private function upload_config() {
		$CI =& get_instance();

		$config = array();
		$config['upload_path']   = $CI->config->item( 'original_path' );
		$config['allowed_types'] = $CI->config->item( 'allowed_types' );
		$config['max_size']      = $CI->config->item( 'max_size' );
		$config['overwrite']     = $CI->config->item( 'overwrite' );
		$config['encrypt_name']  = $CI->config->item( 'encrypt_name' );

		return $config;
	}

	private function image_resize( $link ) {
		$CI =& get_instance();

		$config = array();
		$config['image_library']  = $CI->config->item( 'image_library' );
		$config['source_image']   = $CI->config->item( 'original_path' ). $link;
		$config['new_image']    = $CI->config->item( 'thumb_path' ) . $link;
		$config['maintain_ratio'] = $CI->config->item( 'maintain_ratio' );
		$config['width']     = $CI->config->item( 'width' );
		$config['height']     = $CI->config->item( 'height' );

		$CI =& get_instance();
		$CI->load->library( 'image_lib' );
		$CI->image_lib->initialize( $config );

		if ( ! $CI->image_lib->resize() ) {
			print_r( $CI->image_lib->display_errors() );
		}

		$CI->image_lib->clear();
	}
}
/* End of file Images_upload.php */
