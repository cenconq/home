<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Suburb extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library( 'form_validation' );
        $this->load->model( 'suburb_model' );
    }

    public function index() {
        $this->load->view( 'suburb/index' );
    }

    public function get( $id = 0 ) {
        if ( $id ) {
            return $this->suburb_model->get( $id );
        }

        return $this->suburb_model->get();
    }

    public function get_all() {
        return $this->suburb_model->get();
    }

    public function put() {

        $this->load->model( 'state_model' );

        $config = array(
            array(
                'field'   => 'name',
                'label'   => 'Name',
                'rules'   => 'trim|required|alpha|is_unique[suburbs.name]'
            ),
            array(
                'field'   => 'state_id',
                'label'   => 'State ID',
                'rules'   => 'trim|required'
            ),
        );

        $data = array( 'states' => $this->state_model->get(0, TRUE) );

        $this->form_validation->set_rules( $config );

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view( 'suburb/put', $data);
        }
        else {
            $this->suburb_model->put();
        }
    }

    public function post() {
        $this->user_model->post();
    }

    public function delete() {
        $this->user_model->delete();
    }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
