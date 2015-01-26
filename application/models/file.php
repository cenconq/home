<?php

class File extends DataMapper {

    var $table = 'files';
    
    var $has_one = array('user', 'property');
    
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
