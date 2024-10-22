<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        // return view('<h1>calc</h1>');
        return view('calc');
    }
}