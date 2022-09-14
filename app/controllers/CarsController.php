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

    public function store($brand)
    {
        die(1 + 1);
        App::get('database')->insert($brand, [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }
    //COULD REFACTOR AND HAVE SINGLE STORE() FUNCTION BUT DON'T KNOW HOW TO CALL FUNCTION WITH PARAMATERS IN ROUTES.PHP
    //audi
    public function storeAudi()
    {
        App::get('database')->insert('audi', [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function deleteAllAudi()
    {
        App::get('database')->deleteAll('audi');

        return redirect('home');
    }

    public function delete()
    {
        print_r($_POST);
        die;
        App::get('database')->delete('audi',);

        return redirect('editAudi');
    }

    //bmw
    public function storeBMW()
    {
        App::get('database')->insert('bmw', [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function deleteAllBMW()
    {
        App::get('database')->deleteAll('bmw');

        return redirect('home');
    }

    //merc
    public function storeMerc()
    {
        App::get('database')->insert('mercedes', [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function deleteAllMerc()
    {
        App::get('database')->deleteAll('merc');

        return redirect('home');
    }

    //jag
    public function storeJag()
    {
        App::get('database')->insert('jaguar', [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function deleteAllJag()
    {
        App::get('database')->deleteAll('jaguar');

        return redirect('home');
    }

    //ford
    public function storeFord()
    {
        App::get('database')->insert('ford', [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function deleteAllFord()
    {
        App::get('database')->deleteAll('ford');

        return redirect('home');
    }

    //mazda
    public function storeMazda()
    {
        App::get('database')->insert('mazda', [
            'model' => $_POST['model'],
            'year' => $_POST['year'],
            'type' => $_POST['type']
        ]);

        return redirect('home');
    }

    public function deleteAllMazda()
    {
        App::get('database')->deleteAll('mazda');

        return redirect('home');
    }
}
