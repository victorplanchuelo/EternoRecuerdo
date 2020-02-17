<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondolenciasController extends Controller
{
    public function show($tipo)
    {
        return view('condolence',compact('tipo'));
    }
}
