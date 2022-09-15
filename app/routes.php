<?php

$router->get('', 'CarsController@index');
$router->get('home', 'CarsController@index');
$router->get('chooseTheme', 'PagesController@chooseTheme');


$router->post('store', "CarsController@store");
$router->post('deleteAll', 'CarsController@deleteAll');
$router->post('delete', 'CarsController@delete');
$router->post('edit', 'CarsController@edit');
$router->post('update', 'CarsController@update');

$router->post('editList', 'PagesController@editList');
