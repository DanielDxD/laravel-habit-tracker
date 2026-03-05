<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Daniel';
        $habits = ['Ler', 'Correr', 'Estudar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
