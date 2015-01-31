<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Suburb_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get( $id = 0 ) {
        if ( $id ) {
            // Return one suburb
            $query = $this->db->get_where( 'suburbs', array( 'id' => $id ) );
        }else {
            // Return all suburbs
            $query = $this->db->get( 'suburbs' );
        }

        return $query->result();
    }

    public function put() {
        $data = array(
            'name'  => $this->input->post( 'name' ),
            'state_id'   => $this->input->post( 'state_id' )
        );

        $this->db->insert( 'suburbs', $data );
    }

    public function post() {
        $data = array(
            'name'  => $this->input->post( 'name' ),
            'state_id'   => $this->input->post( 'state_id' )
        );

        $id = $this->uri->segment( 3 );
        $this->db->where( 'id', $id );
        $this->db->update( 'suburbs', $data );
    }

    public function delete() {
        $id = $this->uri->segment( 3 );
        $this->db->delete( 'suburbs', array( 'id' => $id ) );
    }
}
