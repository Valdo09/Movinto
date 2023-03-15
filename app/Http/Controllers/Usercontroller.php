<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Usercontroller extends Controller
{
    public function showOwners()
    {
        $owners=User::where('role_id',2)->paginate(5);
        return view('dashboard.users.owners',compact('owners'));
    }
    public function showCustomers()
    {
        $customers=User::where('role_id',3)->paginate(5);
        return view('dashboard.users.customers',compact('customers'));
    }
    public function showAllUsers()
    {
        $users=User::paginate(5);
        
        return view('dashboard.users.index',compact('users'));
    }
    public function changeCustomerToOwner($id){
        $customer=User::where('id',$id)->update(['role_id'=>2]);
        return redirect()->route('admin.customers.show')->with('success','Utilisateur modifié avec succès');


    }
    public function changeOwnerToCustomer($id){
        $ownerr=User::where('id',$id)->update(['role_id'=>3]);
        return redirect()->route('admin.owners.show')->with('success','Utilisateur modifié avec succès');
    }
}
