<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Akreditační',
            'folder_name'   => 'akreditacni',
            'category_icon' => 'akreditacni.png',
            'button'        => 'akreditační',
            'color'         => 'blue'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Ošetřovatelské',
            'folder_name'   => 'osetrovatelske',
            'category_icon' => 'osetrovatelske.png',
            'button'        => 'ošetřovatelský',
            'color'         => 'pink'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Léčebné',
            'folder_name'   => 'lecebne',
            'category_icon' => 'lecebne.png',
            'button'        => 'léčebný',
            'color'         => 'red'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Speciální',
            'folder_name'   => 'specialni',
            'category_icon' => 'specialni.png',
            'button'        => 'speciální',
            'color'         => 'muted'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Operační',
            'folder_name'   => 'operacni',
            'category_icon' => 'operacni.png',
            'button'        => 'operační',
            'color'         => 'lime'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Anesteziologické',
            'folder_name'   => 'anesteziologicke',
            'category_icon' => 'anesteziologicke.png',
            'button'        => 'anesteziologický',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'RDG',
            'folder_name'   => 'rdg',
            'category_icon' => 'rdg.png',
            'button'        => 'radiologický',
            'color'         => 'yellow'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Rehabilitační',
            'folder_name'   => 'rehabilitacni',
            'category_icon' => 'Anesteziologické',
            'button'        => 'rehabilitační',
            'color'         => 'green'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'OPL',
            'folder_name'   => 'opl',
            'category_icon' => 'opl.png',
            'button'        => 'pracovní',
            'color'         => 'teal'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'OKB',
            'folder_name'   => 'okb',
            'category_icon' => 'okb.png',
            'button'        => 'laboratorní',
            'color'         => 'puple'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Logopedické',
            'folder_name'   => 'logopedicke',
            'category_icon' => 'logopedicke.png',
            'button'        => 'anesteziologický',
            'color'         => 'cyan'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Legislativní',
            'folder_name'   => 'legislativni',
            'category_icon' => 'legislativni.png',
            'button'        => 'legislativní',
            'color'         => 'orange'
        ]);
    }
}
