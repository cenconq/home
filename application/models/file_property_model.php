<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class File_property_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function put( $pid, $fid ){
        $data = array(
            'property_id' => $pid,
            'file_id'     => $fid
        );

        $this->db->insert( 'files_properties', $data );
    }
}
