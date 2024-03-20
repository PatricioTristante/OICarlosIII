<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grados = [['nombre' => 'Informatica'],
        ['nombre' => 'Administracion'],
        ['nombre' => 'Comercio y Marketing'],];
        DB::table('grados')->truncate();

        foreach ($grados as $grado) {
            DB::table('grados')->insert($grado);
        }
    }
}
