<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
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
                'name' => 'Pizza marguerita',
                'description' => 'Composée de fromage',
                'prix' => '600',
                'category_id' => '1',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_1.jpg',
            ],[
                'name' => 'Pizza 4 fromages',
                'description' => 'Composée de fromage',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_2.jpg',
            ],[
                'name' => 'Pizza pili pili',
                'description' => 'Composée de fromage',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_3.jpg',
            ],[
                'name' => 'Poulet braisé',
                'description' => 'C\'est du poulet',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_4.jpg',
            ],[
                'name' => 'Poulet fumé',
                'description' => 'C\'est du poulet',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_1.jpg',
            ],[
                'name' => 'Poulet frit',
                'description' => 'C\'est du poulet',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_2.jpg',
            ],[
                'name' => 'Sprite en canette',
                'description' => 'sucrerie en canette',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_3.jpg',
            ],[
                'name' => 'Sauce arachide',
                'description' => 'sauce à base d\'arachide',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_4.jpg',
            ],[
                'name' => 'Piron',
                'description' => 'Fais à base de farine de manioc',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_1.jpg',
            ],[
                'name' => 'Pâte noire',
                'description' => 'Fais à base de cossette d\'igname',
                'prix' => '600',
                'category_id' => '1',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_2.jpg',
            ],[
                'name' => 'Baskets nike',
                'description' => 'chaussures de grande marque',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_2.jpg',
            ],[
                'name' => 'Baskets nike',
                'description' => 'chaussures de grande marque',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_3.jpg',
            ],[
                'name' => 'Baskets nike',
                'description' => 'chaussures de grande marque',
                'prix' => '500',
                'category_id' => '2',
                'acteur_id' => '1',
                'photo' => 'storage/IMGS/imgs_menus/_4.jpg',
            ],
        ]);
    }
}
