<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('test', [
            'title' => 'Página de test',
            'description' => 'Curso de Laravel en Platzi'
        ]);
    }
}
