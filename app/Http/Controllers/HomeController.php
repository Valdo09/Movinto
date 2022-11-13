<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;

class HomeController extends Controller
{
    public function index()
    {
        $clients_number=User::where('role_id',2)->orwhere('role_id',3)->count();
        $proprietes_number=Property::all()->count();
        return view('home',compact('clients_number','proprietes_number'));
    }
}
