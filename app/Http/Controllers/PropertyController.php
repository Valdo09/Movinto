<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties=Property::all();
        return view('welcome', compact('properties'));
    }
    public function show(Property $property)
    {
        return view('properties-details',compact('property'));
    }
}
