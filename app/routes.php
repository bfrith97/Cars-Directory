<?php

$router->get('', 'CarsController@index');
$router->get('home', 'CarsController@index');
$router->get('choose-theme', 'PagesController@chooseTheme');


$router->post('store', "CarsController@store");
$router->post('delete-all', 'CarsController@deleteAll');
$router->post('delete', 'CarsController@delete');
$router->post('edit', 'CarsController@edit');
$router->post('update', 'CarsController@update');

$router->post('edit-list', 'PagesController@editList');
