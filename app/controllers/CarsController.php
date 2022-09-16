<?php

namespace App\Controllers;

use App\Core\App;

function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // print_r($data);
    return $data;
}

function validateBrand($data)
{
    if ($data !== 'bmw' ||  $data !== 'audi' ||  $data !== 'mercedes' ||  $data !== 'jaguar' ||  $data !== 'ford' ||  $data !== 'mazda') {
        return 'unknown';
    } else {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

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

        $brand = ($_POST['brand']);
        App::get('database')->insert($brand, [
            'brand' => validateBrand($_POST['brand']),
            'model' => validateInput($_POST['model']),
            'year' => validateInput($_POST['year']),
            'type' => validateInput($_POST['type'])
        ]);

        return redirect('home');
    }

    public function edit()
    {
        return view('edit', [
            'brand' => validateInput($_POST['brand']),
            'id' => validateInput($_POST['id']),
            'model' => validateInput($_POST['model']),
            'year' => validateInput($_POST['year']),
            'type' => validateInput($_POST['type'])
        ]);
    }

    public function update()
    {
        $brand = validateBrand($_POST['brand']);
        $id = validateInput($_POST['id']);
        $model = validateInput($_POST['model']);
        $year = validateInput($_POST['year']);
        $type = validateInput($_POST['type']);

        App::get('database')->update($brand, $model, $year, $type, $id);

        return redirect('home');
    }

    public function delete()
    {
        $brand = $_POST['brand'];
        $cars = App::get('database')->selectAll($brand);
        $id = $_POST['id'];

        $view_string = "edit-{$brand}";
        $view_string_corrected = str_replace(' ', '', $view_string);
        App::get('database')->delete($brand, $id);

        return view('edit-list', [
            'cars' => $cars,
        ]);
    }

    public function deleteAll()
    {
        $brand = $_POST['brand'];
        App::get('database')->deleteAll($brand);

        return redirect('home');
    }
}
