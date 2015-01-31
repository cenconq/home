<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Property_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get( $id = 0 ) {
        if ( $id ) {
            // Return one property
            $query = $this->db->get_where( 'properties', array( 'id' => $id ) );
        }else {
            // Return all properties
            $query = $this->db->get( 'properties' );
        }

        return $query->result();

    }

    public function put() {
        $data = array(
            'price'      => $this->input->post( 'price' ),
            'address'    => $this->input->post( 'address' ),
            'house_size' => $this->input->post( 'house_size' ),
            'land_size'  => $this->input->post( 'land_size' ),
            'post_code'  => $this->input->post( 'post_code' ),
            'bedrooms'   => $this->input->post( 'bedrooms' ),
            'bathrooms'  => $this->input->post( 'bathrooms' ),
            'bedrooms'   => $this->input->post( 'bedrooms' ),
            'ensuite'    => $this->input->post( 'ensuite' ),
            'garage'     => $this->input->post( 'garage' ),
            'carport'    => $this->input->post( 'carport' ),
            'carspace'   => $this->input->post( 'carspace' ),
            'suburb_id'  => $this->input->post( 'suburb_id' )
        );

        $this->db->insert( 'properties', $data );
    }

    public function post() {
        $data = array(
            'price'      => $this->input->post( 'price' ),
            'address'    => $this->input->post( 'address' ),
            'house_size' => $this->input->post( 'house_size' ),
            'land_size'  => $this->input->post( 'land_size' ),
            'post_code'  => $this->input->post( 'post_code' ),
            'bedrooms'   => $this->input->post( 'bedrooms' ),
            'bathrooms'  => $this->input->post( 'bathrooms' ),
            'ensuite'    => $this->input->post( 'ensuite' ),
            'garage'     => $this->input->post( 'garage' ),
            'carport'    => $this->input->post( 'carport' ),
            'carspace'   => $this->input->post( 'carspace' ),
            'suburb_id'  => $this->input->post( 'suburb_id' )
        );

        $id = $this->uri->segment( 3 );
        $this->db->where( 'id', $id );
        $this->db->update( 'properties', $data );
    }

    public function delete() {
        $id = $this->uri->segment( 3 );
        $this->db->delete( 'properties', array( 'id' => $id ) );
    }

    public function search() {
        // Get URL arguments
        $price      = $this->uri->segment( 3, 0 );
        $bedrooms   = $this->uri->segment( 4, 0 );
        $suburb_id  = $this->uri->segment( 5, 0 );
        $order_by   = $this->uri->segment( 6, 0 );
        $limit      = $this->uri->segment( 7, 0 );
        $offset     = $this->uri->segment( 8, 0 );
        
        $this->db->select()->from( 'properties' );

        if ( $price ) {
            $this->db->where( 'price <', $price );
        }

        if ( $bedrooms ) {
            $this->db->where( 'bedrooms', $bedrooms );
        }

        if ( $suburb_id ) {
            $this->db->where( 'suburb_id', $suburb_id );
        }

        if ( $order_by ) {
            $this->db->order_by( $order_by, "asc" );
        }

        if ( $limit ) {
            $this->db->limit( $limit, $offset );
        }

        $query = $this->db->get();

        return $query->result();
    }

    public function search_counter() {
        // Get URL arguments
        $price      = $this->uri->segment( 3, 0 );
        $bedrooms   = $this->uri->segment( 4, 0 );
        $suburb_id  = $this->uri->segment( 5, 0 );

        $this->db->select()->from( 'properties' );

        if ( $price ) {
            $this->db->where( 'price <', $price );
        }

        if ( $bedrooms ) {
            $this->db->where( 'bedrooms', $bedrooms );
        }

        if ( $suburb_id ) {
            $this->db->where( 'suburb_id', $suburb_id );
        }

        $query = $this->db->get();

        return $query->num_rows();
    }
}
