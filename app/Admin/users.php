<?php
/**
 * Created by PhpStorm.
 * User: �������
 * Date: 18.09.2015
 * Time: 12:52
 */
use App\User;

return [

    'title' => 'Users',
    'single' => 'User',
    'model' => 'App\User',
    'form_width' => 700,

    'columns' => array(
        /*'hotel' => array(
            'title' => 'Hotel',
            'relationship' => 'hotel',
            'select' => "(:table).name",
        ),
        'domain' => array(
            'title' => 'Site',
        ),
        'description' => array(
            'title' => 'Description',
        ),*/

        'name' => array(
            'title' => 'Name Lastname',
        ),
        'email' => array(
            'title' => 'Email',
        ),
    ),

    'edit_fields' => array(
        /*'hotel' => array(
            'type' => 'relationship',
            'title' => 'Hotel',
            'name_field' => 'name',
        ),
        'domain' => array(
            'title' => 'Site',
            'type' => 'text'
        ),
        'description' => array(
            'type' => 'wysiwyg',
            'title' => 'Description',
        ),*/

        'name' => array(
            'title' => 'Name Lastname',
            'type' => 'text'
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text'
        ),
    ),

];