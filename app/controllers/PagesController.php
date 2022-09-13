<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function landing()
    {
        return view('landing');
    }

    public function editAudi()
    {
        $audis = App::get('database')->selectAll('audi');
        return view('edit-audi', [
            'audis' => $audis,
        ]);
    }

    public function editBMW()
    {
        $bmws = App::get('database')->selectAll('bmw');
        return view('edit-bmw', [
            'bmws' => $bmws,
        ]);
    }

    public function editMerc()
    {
        $mercs = App::get('database')->selectAll('mercedes');
        return view('edit-merc', [
            'mercs' => $mercs,
        ]);
    }

    public function editJag()
    {
        $jags = App::get('database')->selectAll('jaguar');
        return view('edit-jag', [
            'jags' => $jags,
        ]);
    }

    public function editFord()
    {
        $fords = App::get('database')->selectAll('ford');
        return view('edit-ford', [
            'fords' => $fords,
        ]);
    }

    public function editMazda()
    {
        $mazdas = App::get('database')->selectAll('mazda');
        return view('edit-mazda', [
            'mazdas' => $mazdas,
        ]);
    }
    public function about()
    {
        return view('about');
    }
}
