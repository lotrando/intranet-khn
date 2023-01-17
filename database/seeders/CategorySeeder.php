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
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-file-certificate text-indigo" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path><circle cx="6" cy="14" r="3"></circle><path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path></svg>',
            'fas_icon'      => 'certificate',
            'button'        => 'akreditační',
            'color'         => 'blue'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Ošetřovatelské',
            'folder_name'   => 'osetrovatelske',
            'category_icon' => 'osetrovatelske.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-stethoscope text-pink" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1"></path><path d="M8 15a6 6 0 1 0 12 0v-3"></path><path d="M11 3v2"></path><path d="M6 3v2"></path><circle cx="20" cy="10" r="2"></circle></svg>',
            'fas_icon'      => 'stethoscope',
            'button'        => 'ošetřovatelský',
            'color'         => 'pink'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Léčebné',
            'folder_name'   => 'lecebne',
            'category_icon' => 'lecebne.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-hearts text-red" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784"></path><path d="M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z"></path></svg>',
            'fas_icon'      => 'heart',
            'button'        => 'léčebný',
            'color'         => 'red'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Speciální',
            'folder_name'   => 'specialni',
            'category_icon' => 'specialni.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-report-medical text-teal" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path><rect x="9" y="3" width="6" height="4" rx="2"></rect><line x1="10" y1="14" x2="14" y2="14"></line><line x1="12" y1="12" x2="12" y2="16"></line></svg>',
            'fas_icon'      => 'notes-medical',
            'button'        => 'speciální',
            'color'         => 'teal'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Operační',
            'folder_name'   => 'operacni',
            'category_icon' => 'operacni.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-slice text-lime" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4"></path></svg>',
            'fas_icon'      => 'notes-medical',
            'button'        => 'operační',
            'color'         => 'lime'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Anesteziologické',
            'folder_name'   => 'anesteziologicke',
            'category_icon' => 'anesteziologicke.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-heart-rate-monitor text-purple" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="4" width="18" height="12" rx="1"></rect><path d="M7 20h10"></path><path d="M9 16v4"></path><path d="M15 16v4"></path><path d="M7 10h2l2 3l2 -6l1 3h3"></path></svg>',
            'fas_icon'      => 'heartbeat',
            'button'        => 'anesteziologický',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'RDG',
            'folder_name'   => 'rdg',
            'category_icon' => 'rdg.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-radioactive text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6"></path><path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0"></path><path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6"></path></svg>',
            'fas_icon'      => 'radiation-alt',
            'button'        => 'radiologický',
            'color'         => 'yellow'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Rehabilitační',
            'folder_name'   => 'rehabilitacni',
            'category_icon' => 'rehabilitacni.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-physotherapist text-green" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 15l-1 -3l4 -2l4 1h3.5"></path><circle cx="4" cy="19" r="1"></circle><circle cx="12" cy="6" r="1"></circle><path d="M12 17v-7"></path><path d="M8 20h7l1 -4l4 -2"></path><path d="M18 20h3"></path></svg>',
            'fas_icon'      => 'crutch',
            'button'        => 'rehabilitační',
            'color'         => 'green'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'OPL',
            'folder_name'   => 'opl',
            'category_icon' => 'opl.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-bandage text-cyan" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="14" y1="12" x2="14" y2="12.01"></line><line x1="10" y1="12" x2="10" y2="12.01"></line><line x1="12" y1="10" x2="12" y2="10.01"></line><line x1="12" y1="14" x2="12" y2="14.01"></line><path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path></svg>',
            'fas_icon'      => 'briefcase-medical',
            'button'        => 'pracovní',
            'color'         => 'teal'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'OKB',
            'folder_name'   => 'okb',
            'category_icon' => 'okb.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-test-pipe text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124"></path><path d="M7 13h8"></path><path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path><path d="M15 3l6 6"></path></svg>',
            'fas_icon'      => 'flask',
            'button'        => 'laboratorní',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Logopedické',
            'folder_name'   => 'logopedicke',
            'category_icon' => 'logopedicke.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-messages text-teal" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path></svg>',
            'fas_icon'      => 'comments',
            'button'        => 'logopedický',
            'color'         => 'cyan'
        ]);

        DB::table('categories')->insert([
            'category_type' => 'Standard',
            'category_name' => 'Legislativní',
            'folder_name'   => 'legislativni',
            'category_icon' => 'legislativni.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rubber-stamp text-orange" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M21 17.85h-18c0 -4.05 1.421 -4.05 3.79 -4.05c5.21 0 1.21 -4.59 1.21 -6.8a4 4 0 1 1 8 0c0 2.21 -4 6.8 1.21 6.8c2.369 0 3.79 0 3.79 4.05z"></path><path d="M5 21h14"></path></svg>',
            'fas_icon'      => 'stamp',
            'button'        => 'legislativní',
            'color'         => 'orange'
        ]);
    }
}
