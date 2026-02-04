<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'Website Portofolio',
                'description' => 'Website pribadi menggunakan Laravel',
                'technology' => 'Laravel, Bootstrap',

            ],
            [
                'title' => 'Aplikasi Kasir',
                'description' => 'Aplikasi kasir sederhana',
                'technology' => 'Laravel, MySQL',

            ]
        ]);
    }
}
