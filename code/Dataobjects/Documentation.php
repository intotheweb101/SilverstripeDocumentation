<?php

class Documentation extends DataObject
{
    private static $singular_name = 'Documentation';
    private static $plural_name = 'Documentation';

    private static $db = array(
        'Title' => 'Varchar(255)',
        'Content' => 'HTMLText'
    );
}
