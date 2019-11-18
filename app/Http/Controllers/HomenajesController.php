<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomenajesController extends Controller
{
    public function index()
    {
        return view('obituaries');
    }

    public function show($id)
    {
        return view('single-obituary');
    }
}
