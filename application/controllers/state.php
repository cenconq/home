<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class State extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library( 'form_validation' );
        $this->load->model( 'state_model' );
    }

    public function index() {
        $this->load->view( 'suburb/index' );
    }

    public function get( $id = 0 ) {
        if ( $id ) {
            return $this->state_model->get( $id );
        }

        return $this->state_model->get();
    }

    public function get_all() {
        return $this->state_model->get();
    }

    public function put() {

        $config = array(
            array(
                'field'   => 'name',
                'label'   => 'Name',
                'rules'   => 'trim|required|alpha|is_unique[states.name]'
            ),
        );

        $this->form_validation->set_rules( $config );

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view( 'state/put' );
        }
        else {
            $this->state_model->put();
        }
    }

    public function post() {
        $this->state_model->post();
    }

    public function delete() {
        $this->state_model->delete();
    }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
