<?php

$router->get('', 'CarsController@index');
$router->get('home', 'CarsController@index');

//audi
// NEED TO REFACTOR ALL storeBrand, deleteAllBrand, deleteBrand, editBrand INTO JUST 4 FUNCTIONS WITH BRAND BEING PARAMATER BUT DON'T KNOW HOW
// $router->post('storeAudi', "CarsController@store('audi')");
$router->post('store', "CarsController@store");
$router->post('deleteAll', 'CarsController@deleteAll');
$router->post('delete', 'CarsController@delete');
$router->get('editaudi', 'PagesController@editAudi');

//bmw
$router->post('storeBMW', 'CarsController@storeBMW');
$router->post('deleteAllBMW', 'CarsController@deleteAllBMW');
$router->get('editbmw', 'PagesController@editBMW');

//merc
$router->post('storeMerc', 'CarsController@storeMerc');
$router->post('deleteAllMerc', 'CarsController@deleteAllMerc');
$router->get('editmerc', 'PagesController@editMerc');

//jag
$router->post('storeJag', 'CarsController@storeJag');
$router->post('deleteAllJag', 'CarsController@deleteAllJag');
$router->get('editjag', 'PagesController@editJag');

//ford
$router->post('storeFord', 'CarsController@storeFord');
$router->post('deleteAllFord', 'CarsController@deleteAllFord');
$router->get('editford', 'PagesController@editFord');

//mazda
$router->post('storeMazda', 'CarsController@storeMazda');
$router->post('deleteAllMazda', 'CarsController@deleteAllMazda');
$router->get('editmazda', 'PagesController@editMazda');
