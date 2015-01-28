<?php

class Role extends DataMapper {

    var $table = 'roles';
    
    var $has_many = array('user');
    
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
