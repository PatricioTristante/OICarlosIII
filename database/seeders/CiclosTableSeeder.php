<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiclosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciclos = [['codigo' => 'DAW', 'nombre' => 'Desarrollo de aplicaciones web', 'grado_id' => 1],
        ['codigo' => 'DAM', 'nombre' => 'Desarrollo de aplicaciones Multiplataforma', 'grado_id' => 1],
        ['codigo' => 'ASIR', 'nombre' => 'Administracion de sistemas informaticos en red', 'grado_id' => 1],
        ['codigo' => 'SMR', 'nombre' => 'Sistemas microinformaticos y redes', 'grado_id' => 1],];
        DB::table('ciclos')->truncate();

        foreach ($ciclos as $ciclo) {
            DB::table('ciclos')->insert($ciclo);
        }
    }
}
