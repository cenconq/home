<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class State_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library( 'uuid' );
    }

    public function get( $id = 0, $isArray = FALSE ) {
        if ( $id ) {
            // Return one suburb
            $query = $this->db->get_where( 'states', array( 'id' => $id ) );
        }else {
            // Return all suburbs
            $query = $this->db->get( 'states' );
        }

        // Return Result as Array
        if ( $isArray ) {

            $states = array();

            foreach ( $query->result() as $state) {
                $states[ $state->id ] = $state->name;
            }

            return $states;
        }

        // Return Result as Object
        return $query->result();
    }

    public function put() {
        $uuid = $this->uuid->v4( TRUE );

        $data = array(
            'id'    => $this->uuid->v4( TRUE ),
            'name'  => $this->input->post( 'name' )
        );

        $this->db->insert( 'states', $data );
    }

    public function post() {
        $data = array(
            'name'  => $this->input->post( 'name' ),
        );

        $id = $this->uri->segment( 3 );
        $this->db->where( 'id', $id );
        $this->db->update( 'states', $data );
    }

    public function delete() {
        $id = $this->uri->segment( 3 );
        $this->db->delete( 'states', array( 'id' => $id ) );
    }
}
