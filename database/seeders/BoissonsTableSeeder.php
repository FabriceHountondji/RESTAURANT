<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoissonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boissons')->insert([
            [
                'label' => 'sprit',
                'prix' =>'1000'
            ],

        ]);
    }
}
