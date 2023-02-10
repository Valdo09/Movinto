<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Land;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\Room;

class HomeController extends Controller
{
    public function index()
    {
        $clients_number=User::where('role_id',3)->count();
        $owners_number=User::where('role_id',2)->count();
        $users_number=User::all()->count();
        $rooms_number=Room::all()->count();
        $homes_number=Home::all()->count();
        $lands_number=Land::all()->count();
        return view('home',compact(
            'clients_number',
            'owners_number',
            'users_number',
            'rooms_number',
            'homes_number',
            'lands_number',
    ));
    }
}
