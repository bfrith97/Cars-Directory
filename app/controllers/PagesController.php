<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function editList()
    {
        $brand = $_POST['brand'];
        $cars = App::get('database')->selectAll($brand);
        return view("edit-list", [
            'cars' => $cars,
        ]);
    }

    public function chooseTheme()
    {
        if (isset($_GET['choice'])) {
            $choice = $_GET['choice'];
            setcookie("sitestyle", $choice, time() + 60 + 60 + 24 + 100, "/");

            return redirect("home");
        }
    }
}
