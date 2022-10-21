<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'email' => 'melissa@gmail.com',
                'password' => Hash::make('controleur'),
            ],[
                'email' => 'grace@gmail.com',
                'password' => Hash::make('controleur'),
            ],

        ]);
    }
}
