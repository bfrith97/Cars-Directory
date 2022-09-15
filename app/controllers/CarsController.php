<?php

namespace App\Controllers;

use App\Core\App;

class CarsController
{
    public function index()
    {
        $bmws = App::get('database')->selectAll('bmw');
        $audis = App::get('database')->selectAll('audi');
        $mercs = App::get('database')->selectAll('mercedes');
        $jags = App::get('database')->selectAll('jaguar');
        $fords = App::get('database')->selectAll('ford');
        $mazdas = App::get('database')->selectAll('mazda');
        return view('home', [
            'audis' => $audis,
            'bmws' => $bmws,
            'mercs' => $mercs,
            'jags' => $jags,
            'fords' => $fords,
            'mazdas' => $mazdas
        ]);
    }

    public function store()
    {
        $brand = $_POST['brand'];
        App::get('database')->insert($brand, [
            'brand' => $_POST['brand'],
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function delete()
    {
        $brand = $_POST['brand'];
        $id = $_POST['id'];
        App::get('database')->delete($brand, $id);

        $redir_str = "edit$brand";
        $redir_location = str_replace(' ', '', $redir_str);
        return redirect($redir_location);
    }

    public function deleteAll()
    {
        $brand = $_POST['brand'];
        App::get('database')->deleteAll($brand);

        return redirect('home');
    }
}
