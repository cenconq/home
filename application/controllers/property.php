<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class Property extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->library( 'form_validation' );
        $this->load->model( 'property_model' );
    }

    /* REQUEST HANDLERS */

    public function get( $id = 0 )
    {   
        if ( $id ) {
            return $this->property_model->get( $id );
        }

        return $this->property_model->get();
    }

    public function put() 
    {
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

        $this->load->model( 'suburb_model' );

        $data = array( 'suburbs' => $this->suburb_model->get(0, TRUE) );
    
        $this->form_validation->set_rules( $config );

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view( 'property/put', $data );
        }
        else {
            $this->property_model->put();
        }
    }

    public function put_images( $id = 0 )
    {
        if ( ! $id ) {
            return FALSE;
        }

        $this->load->library( 'images_upload' );
        $this->images_upload->upload( $id );
        $this->load->view( 'property/put_images' );
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

    /* Activities */

    /* Search Result*/
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
            'num_links'   => 4,
            'next_link'   => '<i class="fa fa-chevron-right"></i>',
            'prev_link'   => '<i class="fa fa-chevron-left"></i>',
            'last_link'   => '<i class="fa fa-step-forward"></i>',
            'first_link'  => '<i class="fa fa-step-backward"></i>'
        );

        $this->pagination->initialize( $config );

        $data = array(
            'properties'   => $this->property_model->search( $price, $bedrooms, $suburb_id, $order_by, $limit, $offset ),
            'suburbs'      => $this->suburb_model->get(),
            'pagination'   => $this->pagination->create_links(),
            'total_result' => $this->property_model->search_counter(),
        );

        $this->template->load('html', 'property/search_result', $data);
    }

    public function get_result( $id ) {
        $data = array(
            'property' => $this->property_model->get( $id )
        );

        $this->template->load('plain', 'property/get_result', $data);
    }
}

/* End of file property.php */
/* Location: ./application/controllers/property.php */
