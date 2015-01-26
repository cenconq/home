<?php

class Property extends DataMapper {

    var $table = 'properties';

    var $has_one = array('user', 'suburb');
    var $has_many = array('file', 'feature');
    
    var $validation = array(
        'price' => array(
            'label' => 'Price',
            'rules' => array('required', 'trim', 'numeric')
        ),
        'address' => array(
            'label' => 'Address',
            'rules' => array('required', 'trim', 'alpha', 'max_length' => 45)
        ),
        'house_size' => array(
            'label' => 'House Size',
            'rules' => array('required', 'trim', 'numeric')
        ),
        'land_size' => array(
            'label' => 'Land Size',
            'rules' => array('required', 'trim', 'numeric')
        ),
        'post_code' => array(
            'label' => 'Postcode',
            'rules' => array('required', 'trim', 'integer')
        ),
        'bedrooms' => array(
            'label' => 'Bedrooms',
            'rules' => array('required', 'trim', 'integer')
        ),
        'bathrooms' => array(
            'label' => 'Bathrooms',
            'rules' => array('required', 'trim', 'integer')
        ),
        'ensuite' => array(
            'label' => 'Ensuite',
            'rules' => array('required', 'trim', 'integer')
        ),
        'garage' => array(
            'label' => 'Garage',
            'rules' => array('required', 'trim', 'integer')
        ),
        'carport' => array(
            'label' => 'Carport',
            'rules' => array('required', 'trim', 'integer')
        ),
        'carspace' => array(
            'label' => 'Car Space',
            'rules' => array('required', 'trim', 'integer')
        ),
        'suburb' => array(
            'label' => 'Suburb',
            'rules' => array('required')
        ),                                                             
    );

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
