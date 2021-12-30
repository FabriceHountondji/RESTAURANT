<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccompagnementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accompagnements')->insert([
            [
                'label' => 'frite',
                'prix' =>'1000'
            ],

        ]);
    }
}
