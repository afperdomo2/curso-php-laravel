<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        return view('test', [
            'title' => $request->query('title', 'Sin título'),
            'description' => 'Curso de Laravel en Platzi'
        ]);
    }
}
