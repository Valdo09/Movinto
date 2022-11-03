<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Usercontroller extends Controller
{
    public function showOwners()
    {
        $owners=User::where('role_id',2)->get();
        return view('dashboard.users.owners',compact('owners'));
    }
    public function showCustomers()
    {
        $customers=User::where('role_id',3)->get();
        return view('dashboard.users.customers',compact('customers'));
    }
    public function showAllUsers()
    {
        $users=User::all();
        
        return view('dashboard.users.index',compact('users'));
    }
}
