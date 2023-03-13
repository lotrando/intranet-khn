<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear table

        DB::table('categories')->truncate();

        // Standards categories

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Akreditační',
            'folder_name'   => 'akreditacni',
            'category_icon' => 'akreditacni.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-file-certificate text-indigo" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path><circle cx="6" cy="14" r="3"></circle><path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path></svg>',
            'fa_icon'       => 'certificate',
            'button'        => 'akreditační',
            'color'         => 'blue'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Ošetřovatelské',
            'folder_name'   => 'osetrovatelske',
            'category_icon' => 'osetrovatelske.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-stethoscope text-pink" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1"></path><path d="M8 15a6 6 0 1 0 12 0v-3"></path><path d="M11 3v2"></path><path d="M6 3v2"></path><circle cx="20" cy="10" r="2"></circle></svg>',
            'fa_icon'       => 'stethoscope',
            'button'        => 'ošetřovatelský',
            'color'         => 'pink'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Léčebné',
            'folder_name'   => 'lecebne',
            'category_icon' => 'lecebne.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-hearts text-red" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784"></path><path d="M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z"></path></svg>',
            'fa_icon'       => 'heart',
            'button'        => 'léčebný',
            'color'         => 'red'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Speciální',
            'folder_name'   => 'specialni',
            'category_icon' => 'specialni.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-report-medical text-indigo" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path><rect x="9" y="3" width="6" height="4" rx="2"></rect><line x1="10" y1="14" x2="14" y2="14"></line><line x1="12" y1="12" x2="12" y2="16"></line></svg>',
            'fa_icon'       => 'notes-medical',
            'button'        => 'speciální',
            'color'         => 'indigo'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Operační',
            'folder_name'   => 'operacni',
            'category_icon' => 'operacni.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-slice text-lime" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4"></path></svg>',
            'fa_icon'       => 'notes-medical',
            'button'        => 'operační',
            'color'         => 'lime'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Anesteziologické',
            'folder_name'   => 'anesteziologicke',
            'category_icon' => 'anesteziologicke.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-heart-rate-monitor text-purple" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="4" width="18" height="12" rx="1"></rect><path d="M7 20h10"></path><path d="M9 16v4"></path><path d="M15 16v4"></path><path d="M7 10h2l2 3l2 -6l1 3h3"></path></svg>',
            'fa_icon'       => 'heartbeat',
            'button'        => 'anesteziologický',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'RDG',
            'folder_name'   => 'rdg',
            'category_icon' => 'rdg.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-radioactive text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6"></path><path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0"></path><path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6"></path></svg>',
            'fa_icon'       => 'radiation-alt',
            'button'        => 'radiologický',
            'color'         => 'yellow'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Rehabilitační',
            'folder_name'   => 'rehabilitacni',
            'category_icon' => 'rehabilitacni.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-physotherapist text-green" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 15l-1 -3l4 -2l4 1h3.5"></path><circle cx="4" cy="19" r="1"></circle><circle cx="12" cy="6" r="1"></circle><path d="M12 17v-7"></path><path d="M8 20h7l1 -4l4 -2"></path><path d="M18 20h3"></path></svg>',
            'fa_icon'       => 'crutch',
            'button'        => 'rehabilitační',
            'color'         => 'reha'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'OPL',
            'folder_name'   => 'opl',
            'category_icon' => 'opl.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-bandage text-cyan" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="14" y1="12" x2="14" y2="12.01"></line><line x1="10" y1="12" x2="10" y2="12.01"></line><line x1="12" y1="10" x2="12" y2="10.01"></line><line x1="12" y1="14" x2="12" y2="14.01"></line><path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path></svg>',
            'fa_icon'       => 'briefcase-medical',
            'button'        => 'pracovní',
            'color'         => 'cyan'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'OKB',
            'folder_name'   => 'okb',
            'category_icon' => 'okb.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-test-pipe text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124"></path><path d="M7 13h8"></path><path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path><path d="M15 3l6 6"></path></svg>',
            'fa_icon'       => 'flask',
            'button'        => 'laboratorní',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Logopedické',
            'folder_name'   => 'logopedicke',
            'category_icon' => 'logopedicke.png',
            'svg_icon'      => '<svg class="icon icon-tabler icon-tabler-messages text-teal" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path></svg>',
            'fa_icon'       => 'comments',
            'button'        => 'logopedický',
            'color'         => 'cyan'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'standardy',
            'category_type' => 'standard',
            'category_name' => 'Legislativní',
            'folder_name'   => 'legislativni',
            'category_icon' => 'legislativni.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rubber-stamp text-orange" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M21 17.85h-18c0 -4.05 1.421 -4.05 3.79 -4.05c5.21 0 1.21 -4.59 1.21 -6.8a4 4 0 1 1 8 0c0 2.21 -4 6.8 1.21 6.8c2.369 0 3.79 0 3.79 4.05z"></path><path d="M5 21h14"></path></svg>',
            'fa_icon'       => 'stamp',
            'button'        => 'legislativní',
            'color'         => 'orange'
        ]);

        // Documents Data

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Personální',
            'folder_name'   => 'personalni',
            'category_icon' => 'personalni.png',
            'svg_icon'      => '<svg class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>',
            'fa_icon'       => null,
            'button'        => 'personální',
            'color'         => 'green'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Sesterská',
            'folder_name'   => 'sesterska',
            'category_icon' => 'sesterska.png',
            'svg_icon'      => '<svg class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z"></path><path d="M10 12h4"></path><path d="M12 10v4"></path></svg>',
            'fa_icon'       => 'nurse',
            'button'        => 'sesterský',
            'color'         => 'red'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Hygienická',
            'folder_name'   => 'hygiena',
            'category_icon' => 'hygiena.png',
            'svg_icon'      => '<svg class="icon text-azure" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 21h10v-10a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v10z"></path><path d="M15 3h-6a2 2 0 0 0 -2 2"></path><path d="M12 3v5"></path><path d="M12 11v4"></path><path d="M10 13h4"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'hygienický',
            'color'         => 'azure'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Pacient',
            'folder_name'   => 'pacient',
            'category_icon' => 'pacient.png',
            'svg_icon'      => '<svg class="icon text-yellow" width="40" height="40" viewBox="0 0 24 24" stroke-width="21" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M11 21l-1 -4l-2 -3v-6"></path><path d="M5 14l-1 -3l4 -3l3 2l3 .5"></path><circle cx="8" cy="4" r="1"></circle><path d="M7 17l-2 4"></path><path d="M16 21v-8.5a1.5 1.5 0 0 1 3 0v.5"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'pacientský',
            'color'         => 'yellow'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'OKB',
            'folder_name'   => 'okb',
            'category_icon' => 'okb.png',
            'svg_icon'      => '<svg class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124"></path><path d="M7 13h8"></path><path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path><path d="M15 3l6 6"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'laboratorní',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'RDG',
            'folder_name'   => 'rdg',
            'category_icon' => 'rdg.png',
            'svg_icon'      => '<svg class="icon text-orange" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6"></path><path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0"></path><path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'radiologický',
            'color'         => 'orange'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'IT',
            'folder_name'   => 'it',
            'category_icon' => 'it.png',
            'svg_icon'      => '<svg class="icon text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 15h-6a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h6"></path><rect x="13" y="4" width="8" height="16" rx="1"></rect><line x1="7" y1="19" x2="10" y2="19"></line><line x1="17" y1="8" x2="17" y2="8.01"></line><circle cx="17" cy="16" r="1"></circle><line x1="9" y1="15" x2="9" y2="19"></line></svg>',
            'fa_icon'      => null,
            'button'        => 'IT',
            'color'         => 'blue'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'KPR',
            'folder_name'   => 'kpr',
            'category_icon' => 'kpr.png',
            'svg_icon'      => '<svg class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572"></path><path d="M3 13h2l2 3l2 -6l1 3h3"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'KPR',
            'color'         => 'pink'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Komunikační karty',
            'folder_name'   => 'komunikacni-karty',
            'category_icon' => 'komunikacni-karty.png',
            'svg_icon'      => '<svg class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3.604 7.197l7.138 -3.109a0.96 .96 0 0 1 1.27 .527l4.924 11.902a1.004 1.004 0 0 1 -.514 1.304l-7.137 3.109a0.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1.005 1.005 0 0 1 .514 -1.304z"></path><path d="M15 4h1a1 1 0 0 1 1 1v3.5"></path><path d="M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'komunikační',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Vyhodnocovací',
            'folder_name'   => 'vyhodnoceni-dotazniku',
            'category_icon' => 'vyhodnoceni-dotazniku.png',
            'svg_icon'      => '<svg class="icon text-lime" width="40" height="40" viewBox="0 0 24 24" stroke-width="21" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path><rect x="9" y="3" width="6" height="4" rx="2"></rect><path d="M9 14h.01"></path><path d="M9 17h.01"></path><path d="M12 16l1 1l3 -3"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'vyhodnocovací',
            'color'         => 'lime'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Postupová',
            'folder_name'   => 'navody',
            'category_icon' => 'navody.png',
            'svg_icon'      => '<svg class="icon text-teal" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><line x1="12" y1="17" x2="12" y2="17.01"></line><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'postupový',
            'color'         => 'teal'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'dokumenty',
            'category_type' => 'dokument',
            'category_name' => 'Ukrajinská',
            'folder_name'   => 'ukrajinske-dokumenty',
            'category_icon' => 'ukrajinske-dokumenty.png',
            'svg_icon'      => '<svg class="icon text-yellow" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M3.6 9l16.8 0"></path><path d="M3.6 15l16.8 0"></path><path d="M11.5 3a17 17 0 0 0 0 18"></path><path d="M12.5 3a17 17 0 0 1 0 18"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'ukrajinský',
            'color'         => 'yellow'
        ]);

        // BOZP Data

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Bezpečnostní plány',
            'folder_name'   => 'bezpecnostni-plany',
            'category_icon' => 'bezpecnostni-plany.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 12l2 2l4 -4"></path><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'bezpečnostní plány',
            'color'         => 'red'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Organizační směrnice',
            'folder_name'   => 'organizacni-smernice',
            'category_icon' => 'organizacni-smernice.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h1.341"></path><path d="M19.682 10.682l-7.682 -7.682l-9 9h2v7a2 2 0 0 0 2 2h5"></path><path d="M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'Organizační směrnice',
            'color'         => 'purple'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Metodiky školení',
            'folder_name'   => 'metodiky-skoleni',
            'category_icon' => 'metodiky-skoleni.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-orange" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path><path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path><path d="M5 8h4"></path><path d="M9 16h4"></path><path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path><path d="M14 9l4 -1"></path><path d="M16 16l3.923 -.98"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'metodiky školení',
            'color'         => 'orange'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Prezenční listiny',
            'folder_name'   => 'prezencni-listiny',
            'category_icon' => 'prezencni-listiny.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-lime" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path><path d="M14 19l2 2l4 -4"></path><path d="M9 8h4"></path><path d="M9 12h2"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'prezenční listiny',
            'color'         => 'lime'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Pracovní úrazy',
            'folder_name'   => 'pracovni-urazy',
            'category_icon' => 'pracovni-urazy.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 12l0 .01"></path><path d="M10 12l0 .01"></path><path d="M12 10l0 .01"></path><path d="M12 14l0 .01"></path><path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'pracovní úrazy',
            'color'         => 'pink'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Bezpečnostní značení',
            'folder_name'   => 'bezpecnostni-znaceni',
            'category_icon' => 'bezpecnostni-znaceni.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="8.5" cy="8.5" r="1" fill="currentColor"></circle><path d="M4 7v3.859c0 .537 .213 1.052 .593 1.432l8.116 8.116a2.025 2.025 0 0 0 2.864 0l4.834 -4.834a2.025 2.025 0 0 0 0 -2.864l-8.117 -8.116a2.025 2.025 0 0 0 -1.431 -.593h-3.859a3 3 0 0 0 -3 3z"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'bezpečnostní značení',
            'color'         => 'yellow'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Prověrky a kontroly',
            'folder_name'   => 'proverky-kontroly',
            'category_icon' => 'proverky-kontroly.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-azure" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M12 10.5v1.5"></path><path d="M12 16v1.5"></path><path d="M15.031 12.25l-1.299 .75"></path><path d="M10.268 15l-1.3 .75"></path><path d="M15 15.803l-1.285 -.773"></path><path d="M10.285 12.97l-1.285 -.773"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'prověrky a kontroly',
            'color'         => 'azure'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Provozně bezp. předpisy',
            'folder_name'   => 'provozne-bezpecnostni-predpisy',
            'category_icon' => 'provozne-bezpecnostni-predpisy.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-teal" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path: stroke="none" d="M0 0h24v24H0z" fill="none"></path:<path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'provozně bezp. předpisy',
            'color'         => 'teal'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Rizika',
            'folder_name'   => 'rizika',
            'category_icon' => 'rizika.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 20l16 0"></path><path d="M9.4 10l5.2 0"></path><path d="M7.8 15l8.4 0"></path><path d="M6 20l5 -15h2l5 15"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'rizika',
            'color'         => 'green'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Požární ochrana',
            'folder_name'   => 'pozarni-ochrana',
            'category_icon' => 'pozarni-ochrana.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M7 18h8m4 0h2v-6a5 5 0 0 0 -5 -5h-1l1.5 5h4.5"></path><path d="M12 18v-11h3"></path><path d="M3 17l0 -5l9 0"></path><path d="M3 9l18 -6"></path><path d="M6 12l0 -4"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'požární ochrana',
            'color'         => 'red'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Požární operativní karty',
            'folder_name'   => 'pozarni-operativni-karty',
            'category_icon' => 'pozarni-operativni-karty.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-lime" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3.604 7.197l7.138 -3.109a.96 .96 0 0 1 1.27 .527l4.924 11.902a1 1 0 0 1 -.514 1.304l-7.137 3.109a.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1 1 0 0 1 .514 -1.304z"></path><path d="M15 4h1a1 1 0 0 1 1 1v3.5"></path><path d="M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'požární operativní karty',
            'color'         => 'lime'
        ]);

        DB::table('categories')->insert([
            'category_file' => 'bozp',
            'category_type' => 'bozp',
            'category_name' => 'Bezpečnostní listy',
            'folder_name'   => 'bezpecnostni-listy',
            'category_icon' => 'bezpecnostni-listy.png',
            'svg_icon'      => '<svg xmlns="http://www.w3.org/2000/svg" class="icon text-orange" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path><path d="M9 17h6l-3 -6z"></path></svg>',
            'fa_icon'      => null,
            'button'        => 'bezpečnostní listy',
            'color'         => 'orange'
        ]);

        // Other Categories Data

    }
}
