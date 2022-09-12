<?php


$router->get('home', 'CarsController@index');
$router->get('about', 'PagesController@about');

$router->post('home', 'CarsController@store');
$router->post('deleteall', 'CarsController@deleteall');
