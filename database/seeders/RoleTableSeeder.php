<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Super administrateur',
                'description' => 'C\'est le Super Administrateur'
            ],[
                'name' => 'administrateur',
                'description' => 'C\'est l\'Administrateur'
            ],[
                'name' => 'chef',
                'description' => 'C\'est le chef'
            ],[
                'name' => 'controleur',
                'description' => 'C\'est un controleur des livraisons'
            ],[
                'name' => 'livreur',
                'description' => 'C\'est le livreur'
            ],
        ]);
    }
}
