<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library( 'uuid' );
        $this->load->library( 'secure' );
    }

    public function get( $id )
    {
        if ( $id ) {
            $query = $this->db->get_where( 'users', array( 'id' => $id ) );
        }
        else
        {
            $query = $this->db->get( 'users' );
        }

        return $query->result();
    }

    public function put()
    {
        $salt     = $this->secure->salt();
        $password = $this->input->post( 'password' );
        $user_id  = $this->uuid->v4( TRUE );

        $data = array(
            'id'          => $user_id,
            'first_name'  => $this->input->post( 'first_name' ),
            'last_name'   => $this->input->post( 'last_name' ),
            'email'       => $this->input->post( 'email' ),
            'password'    => $this->secure->encrypt( $password, $salt ),
            'salt'        => $salt,
            'suburb_id'   => $this->input->post( 'suburb_id' ),
            'create_date' => date( 'Y-m-d H:i:s' ),
            'last_update' => date( 'Y-m-d H:i:s' )
        );

        $role = array(
            'id'          => $this->uuid->v4( TRUE ),
            'role_id'     => 'dd4003908cb349bba6a393c6f36ba83a',
            'user_id'     => $user_id
        );

        $this->db->insert( 'users', $data );
        $this->db->insert( 'roles_users', $role );
    }

    public function post( $id )
    {
        $data = array(
            'first_name'  => $this->input->post( 'first_name' ),
            'last_name'   => $this->input->post( 'last_name' ),
            'email'       => $this->input->post( 'email' ),
            'password'    => $this->input->post( 'password' ),
            'create_date' => date( 'Y-m-d H:i:s' ),
            'last_update' => date( 'Y-m-d H:i:s' )
        );

        $this->db->where( 'id', $id );
        $this->db->update( 'users', $data );
    }

    public function delete( $id )
    {
        $data = array(
            'id' => $id
        );

        $this->db->delete( 'users', array( 'id' => $id ) );
    }

    public function login()
    {
        $email    = $this->input->post( 'email' );
        $password = $this->input->post( 'password' );

        $this->db->select( 'id, email, password, salt' )
                 ->from( 'users' )
                 ->where( 'email', $email )
                 ->limit( 1 );

        $query = $this->db->get();

        // Fail if Email not exist
        if ( $query->num_rows() !== 1 ) {
            return FALSE;
        }

        // Login Success if password matched
        if ( $this->secure->encrypt( $password, $query->row('salt') ) === $query->row('password') ) {
            return TRUE;
        }
    }
}
