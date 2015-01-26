<?php

class File extends DataMapper {

    var $table = 'files';
    
    var $has_one = array('user', 'property');
    
    var $validation = array(
        'name' => array(
            'label' => 'Name',
            'rules' => array('required', 'trim', 'alpha', 'max_length' => 45),
        ),
        'link' => array(
            'label' => 'Link',
            'rules' => array('required', 'trim', 'max_length' => 200),
        ),
        'type' => array(
            'label' => 'Type',
            'rules' => array('required', 'trim', 'alpha', 'max_length' => 10),
        ),
        'weight' => array(
            'label' => 'Weight',
            'rules' => array('required', 'trim', 'integer'),
        ),
        'user' => array(
            'label' => 'User',
            'rules' => array('required'),
        )                               
    );

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
