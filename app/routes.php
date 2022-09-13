<?php


$router->get('home', 'CarsController@index');
$router->get('', 'CarsController@index');
$router->get('about', 'PagesController@about');

//audi
$router->post('storeAudi', 'CarsController@storeAudi');
$router->post('deleteAllAudi', 'CarsController@deleteAllAudi');
$router->get('editAudi', 'PagesController@editAudi');

//bmw
$router->post('storeBMW', 'CarsController@storeBMW');
$router->post('deleteAllBMW', 'CarsController@deleteAllBMW');
$router->get('editBMW', 'PagesController@editBMW');

//merc
$router->post('storeMerc', 'CarsController@storeMerc');
$router->post('deleteAllMerc', 'CarsController@deleteAllMerc');
$router->get('editMerc', 'PagesController@editMerc');

//jag
$router->post('storeJag', 'CarsController@storeJag');
$router->post('deleteAllJag', 'CarsController@deleteAllJag');
$router->get('editJag', 'PagesController@editJag');

//ford
$router->post('storeFord', 'CarsController@storeFord');
$router->post('deleteAllFord', 'CarsController@deleteAllFord');
$router->get('editFord', 'PagesController@editFord');

//mazda
$router->post('storeMazda', 'CarsController@storeMazda');
$router->post('deleteAllMazda', 'CarsController@deleteAllMazda');
$router->get('editMazda', 'PagesController@editMazda');
