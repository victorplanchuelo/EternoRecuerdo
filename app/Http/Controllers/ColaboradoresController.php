<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColaboradoresController extends Controller
{
    public function index()
    {
        return view('collaborators');
    }

    public function show($name)
    {
        return view('collaborators_' . $name);
    }
}
