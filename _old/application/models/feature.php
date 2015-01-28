<?php

class Feature extends DataMapper {

    var $table = 'features';
    
    var $has_many = array('property');
    
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
