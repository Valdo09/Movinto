<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create( [
            'name'=>"Admin",
            'description'=>"Ceci est le rôle de l'administrateur de la plateforme"
        ]
            
        );
        Role::create([
            'name'=>"Owner",
            'description'=>"Ceci est le rôle des propriétaires de biens immobiliers"
        ]
            
        );
        Role::create(
            [
                'name'=>"User",
                'description'=>"Ceci est le rôle des utilisateurs/clients de la plateforme"
            ]
            
        );

    }
}
