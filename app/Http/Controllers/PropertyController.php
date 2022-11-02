<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;

class PropertyController extends Controller
{
    public function show()
    {
        $properties=Bien::all();
        return view('welcome', compact('properties'));
    }
}
