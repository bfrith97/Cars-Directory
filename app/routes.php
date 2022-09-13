<?php


$router->get('home', 'CarsController@index');
$router->get('about', 'PagesController@about');

//audi
$router->post('storeAudi', 'CarsController@storeAudi');
$router->post('deleteAllAudi', 'CarsController@deleteAllAudi');

//bmw
$router->post('storeBMW', 'CarsController@storeBMW');
$router->post('deleteAllBMW', 'CarsController@deleteAllBMW');

//merc
$router->post('storeMerc', 'CarsController@storeMerc');
$router->post('deleteAllMerc', 'CarsController@deleteAllMerc');

//jag
$router->post('storeJag', 'CarsController@storeJag');
$router->post('deleteAllJag', 'CarsController@deleteAllJag');

//ford
$router->post('storeFord', 'CarsController@storeFord');
$router->post('deleteAllFord', 'CarsController@deleteAllFord');

//mazda
$router->post('storeMazda', 'CarsController@storeMazda');
$router->post('deleteAllMazda', 'CarsController@deleteAllMazda');
