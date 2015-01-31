<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Property extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library( 'form_validation' );
        $this->load->model( 'property_model' );
    }

    /* REQUEST HANDLERS */

    public function get( $id = 0 ) {
        if ( $id ) {
            return $this->property_model->get( $id );
        }

        return $this->property_model->get();
    }

    public function put() {

        $config = array(
            array(
                'field'   => 'price',
                'label'   => 'Price',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'address',
                'label'   => 'Address',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'house_size',
                'label'   => 'House Size',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'land_size',
                'label'   => 'Land Size',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'post_code',
                'label'   => 'Postcode',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'bedrooms',
                'label'   => 'Bedrooms',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'bathrooms',
                'label'   => 'Bathrooms',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'ensuite',
                'label'   => 'Ensuite',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'garage',
                'label'   => 'Garage',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'carport',
                'label'   => 'Carport',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'carspace',
                'label'   => 'Carspace',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'suburb_id',
                'label'   => 'Suburb',
                'rules'   => 'trim|required'
            )
        );

        $this->form_validation->set_rules( $config );

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view( 'property/put' );
        }
        else {
            $this->property_model->put();
        }
    }

    public function post() {
        $this->property_model->post();
    }

    public function delete() {
        $this->property_model->delete();
    }

    public function search() {
        $this->property_model->search();
    }

    /* PAGES - Link with VIEW */
    public function search_result() {
        $this->load->model( 'suburb_model' );
        $this->load->library( 'pagination' );

        $price      = $this->uri->segment( 3, 0 );
        $bedrooms   = $this->uri->segment( 4, 0 );
        $suburb_id  = $this->uri->segment( 5, 0 );
        $order_by   = $this->uri->segment( 6, 0 );
        $limit      = $this->uri->segment( 7, 0 );
        $offset     = $this->uri->segment( 8, 0 );

        $url = $price . '/' . $bedrooms . '/' . $suburb_id . '/' . $order_by . '/' . $limit;

        $config = array(
            'base_url'    => 'http://home.localhost/property/search_result/' . $url,
            'uri_segment' => 8,
            'total_rows'  => $this->property_model->search_counter(),
            'per_page'    => $limit,
            'num_links'   => 10,
            'next_link'   => '下一页',
            'prev_link'   => '上一页'
        );

        $this->pagination->initialize( $config );

        $data = array(
            'properties'   => $this->property_model->search(),
            'suburbs'      => $this->suburb_model->get(),
            'pagination'   => $this->pagination->create_links(),
            'total_result' => $this->property_model->search_counter(),
        );

        $this->load->view( 'property/result', $data );
    }

    public function get_result( $id ) {
        print_r( $this->property_model->get( $id ) );
    }
}

/* End of file property.php */
/* Location: ./application/controllers/property.php */
