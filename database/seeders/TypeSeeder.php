<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create( [
            'name'=>"Chambre",
            'description'=>"Ceci est le type dédié aux biens immobiliers qui sont une chambre"
        ]
            
        );
        Type::create( [
            'name'=>"Maison",
            'description'=>"Ceci est le type dédié aux biens immobiliers qui sont une maison"
        ]
            
        );
        Type::create( [
            'name'=>"Terrain",
            'description'=>"Ceci est le rôle dédié aux biens immobiliers qui sont une parcelle ou un terrain"
        ]
            
        );
    }
}
