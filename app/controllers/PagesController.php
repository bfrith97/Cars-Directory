<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function landing()
    {
        return view('landing');
    }

    public function editList()
    {
        $brand = $_POST['brand'];
        $cars = App::get('database')->selectAll($brand);
        return view("edit-list", [
            'cars' => $cars,
        ]);
    }
}
