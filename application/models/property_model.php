<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Property_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get() {
        if ( $id = $this->uri->segment( 3 ) ) {
            $query = $this->db->get_where( 'properties', array( 'id' => $id ) );
        }else {
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
        $price      = $this->input->post( 'price' );
        $bedrooms   = $this->input->post( 'bedrooms' );
        $bathrooms  = $this->input->post( 'bathrooms' );
        $suburb_id  = $this->input->post( 'suburb_id' );

        $this->db->select()->from( 'properties' )
        ->where( 'price', $price )
        ->where( 'bedrooms', $bedrooms )
        ->where( 'bathrooms', $bathrooms )
        ->where( 'suburb_id', $suburb_id );
    }
}
