<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Role_user_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library( 'uuid' );
    }

    public function get( $id )
    {
        if ( $id ) {
            $query = $this->db->get_where( 'roles_users', array( 'id' => $id ) );
        }
        else
        {
            $query = $this->db->get( 'roles_users' );
        }

        return $query->result();
    }

    public function put()
    {
        $data = array(
            'id'          => $this->uuid->v4( TRUE ),
            'role_id'     => $this->input->post( 'first_name' ),
            'user_id'     => $this->input->post( 'last_name' )
        );

        $this->db->insert( 'roles_users', $data );        
    }

    public function post( $id )
    {  
        $data = array(
            'role_id'     => $this->input->post( 'first_name' ),
            'user_id'     => $this->input->post( 'last_name' )
        );

        $this->db->where( 'id', $id );
        $this->db->update( 'roles_users', $data );        
    }

    public function delete( $id )
    {
        $data = array(
            'id' => $id
        );

        $this->db->delete( 'roles_users', $data );        
    }
}
