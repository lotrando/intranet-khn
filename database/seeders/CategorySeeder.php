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
            'category_name' => 'Akreditační',
            'folder_name'   => 'akreditacni',
            'category_icon' => 'akreditacni.png',
            'color'         => 'blue'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Ošetřovatelské',
            'folder_name'   => 'osetrovatelske',
            'category_icon' => 'osetrovatelske.png',
            'color'         => 'pink'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Léčebné',
            'folder_name'   => 'lecebne',
            'category_icon' => 'lecebne.png',
            'color'         => 'red'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Speciální',
            'folder_name'   => 'specialni',
            'category_icon' => 'specialni.png',
            'color'         => 'muted'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Operační',
            'folder_name'   => 'operacni',
            'category_icon' => 'operacni',
            'color'         => 'lime'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Anesteziologické',
            'folder_name'   => 'anesteziologicke',
            'category_icon' => 'anesteziologicke.png',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'RDG',
            'folder_name'   => 'rdg',
            'category_icon' => '<svg class="icon icon-tabler icon-tabler-radioactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6"></path>
                    <path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0"></path>
                    <path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6"></path>
                  </svg>',
            'color'         => 'yellow'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Rehabilitační',
            'folder_name'   => 'rehabilitacni',
            'category_icon' => 'rehabilitacni.png',
            'color'         => 'green'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'OPL',
            'folder_name'   => 'opl',
            'category_icon' => 'opl.png',
            'color'         => 'teal'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'OKB',
            'folder_name'   => 'okb',
            'category_icon' => 'okb.png',
            'color'         => 'puple'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Logopedické',
            'folder_name'   => 'logopedicke',
            'category_icon' => 'logopedicke.png',
            'color'         => 'cyan'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Legislativní',
            'folder_name'   => 'legislativni',
            'category_icon' => 'legislativni',
            'color'         => 'orange'
        ]);
    }
}
