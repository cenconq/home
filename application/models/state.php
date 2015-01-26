<?php

class State extends DataMapper {

    var $table = 'states';
    
    var $has_many = array('suburb');
    
    var $validation = array(
        'name' => array(
            'label' => 'Name',
            'rules' => array('required', 'trim', 'alpha', 'max_length' => 45),
        )
    );

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
