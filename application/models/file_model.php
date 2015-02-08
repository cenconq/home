<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class File_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function put( $link, $type ) {
        $data = array(
            'link' => $link,
            'type' => $type
        );

        $this->db->insert( 'files', $data );
    }
}