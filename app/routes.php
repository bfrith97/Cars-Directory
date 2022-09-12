<?php


$router->get('home', 'CarsController@index');
$router->get('about', 'PagesController@about');

$router->post('home', 'CarsController@store');
