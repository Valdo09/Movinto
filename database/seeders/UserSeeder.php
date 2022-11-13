<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => ' ',
            'last_name' => 'Admistrateur',
            'phone_number' => ' 00 229 61 61 61 61',
            'email' => 'admin@movinto.com',
            'sex' => 'Male',
            'password' => Hash::make('ROOT1234'),
        ]);
    }
}
