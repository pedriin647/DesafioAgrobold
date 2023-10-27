<?php

$routes = [
    '/' => 'ClientController@index',
    '/index' => 'ClientController@getAll',
    '/create' => 'ClientController@create',
    '/edit/update' => 'ClientController@update',
    '/edit/{id}' => 'ClientController@fetchById',
    '/destroy/{id}' => 'ClientController@destroy',
];