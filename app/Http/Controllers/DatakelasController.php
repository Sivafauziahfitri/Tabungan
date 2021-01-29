<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakelasController extends Controller
{
    public function index()
    {
        return view('datakelas.index');
    }
}
