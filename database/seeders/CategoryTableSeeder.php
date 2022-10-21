<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'boisson',
                'description' => 'C\'est une boisson'
            ],[
                'name' => 'Accompagnement',
                'description' => 'C\'est un Accompagnement'
            ],[
                'name' => 'Alcools/Cocktails',
                'description' => 'C\'est un Alcool/Cocktail'
            ],[
                'name' => 'Pizza',
                'description' => 'C\'est une Pizza'
            ],[
                'name' => 'Sauce',
                'description' => 'C\'est une Sauce'
            ],[
                'name' => 'Pâte',
                'description' => 'C\'est une pâte'
            ],
        ]);
    }
}
