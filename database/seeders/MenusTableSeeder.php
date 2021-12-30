<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'label' => 'MENU Suisse',
                'prix' =>'22000',
                'user_id' =>'1',
                'plat_id' =>'1',
                'accompagnement_id' =>'1',
                'boisson_id' =>'1',
                'sauce_id' =>'1',
                'commande_id' =>'1',

            ],

        ]);
    }
}
