<?php

// app/Http/Controllers/SavingsController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SavingsController extends Controller
{
    public function index()
    {
        return view('savings.index');
    }
}
