<?php

class Property extends DataMapper {

    var $table = 'properties';

    var $has_one = array('user');
    var $has_many = array('file', 'feature');
    
    var $validation = array(
        'first_name' => array(
            'label' => 'First Name',
            'rules' => array('required', 'trim', 'alpha', 'max_length' => 45)
        ),
        'last_name' => array(
            'label' => 'Last Name',
            'rules' => array('required', 'trim', 'alpha', 'max_length' => 45)
        ),
        'email' => array(
            'label' => 'Email',
            'rules' => array('required', 'trim', 'unique', 'valid_email')
        ),
        'password' => array(
            'label' => 'Password',
            'rules' => array('required', 'trim')
        ),
        'suburb' => array(
            'label' => 'Suburb',
            'rules' => array('required')
        )
    );

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}