<?php

$routes = [
    '/' => 'ClientController@index',
    '/create' => 'ClientController@create',
    '/edit/update' => 'ClientController@update',
    '/edit/{id}' => 'ClientController@fetchById',
    '/destroy/{id}' => 'ClientController@destroy',
];