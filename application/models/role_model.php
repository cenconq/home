<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Role_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library( 'uuid' );
    }

    public function get()
    {
    }

    public function put()
    {
        $uuid = $this->uuid->v4( TRUE );

        $data = array(
            'id'   => $uuid,
            'name' => $this->input->post( 'name' )
        );

        $this->db->insert( 'roles', $data );
    }

    public function post()
    {
        $data = array(
            'name' => $this->input->post( 'name' )
        );

        $id = $this->uri->segment( 3 );
        $this->db->where( 'id', $id );
        $this->db->update( 'roles', $data );        
    }

    public function delete()
    {
    }
}
