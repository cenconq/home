<?php

class Suburb extends DataMapper {

    var $table = 'suburbs';

    var $has_one = array('state');
    var $has_many = array('user');
    
    var $validation = array(
        'name' => array(
            'label' => 'Name',
            'rules' => array('required', 'trim', 'alpha', 'max_length' => 45),
        ),
        'state' => array(
            'label' => 'State',
            'rules' => array('required', 'trim', 'numeric')
        )
    );

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
