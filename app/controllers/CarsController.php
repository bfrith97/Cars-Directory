<?php

namespace App\Controllers;

use App\Core\App;

class CarsController
{
    public function index()
    {
        $cars = App::get('database')->selectAll('cars');
        return view('home', ['cars' => $cars]);
    }

    public function store()
    {
        App::get('database')->insert('cars', [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function deleteAll()
    {
        App::get('database')->deleteAll('cars');

        return redirect('home');
    }
}
