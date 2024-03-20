<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grupos')->truncate();
        $grupos = [
            [
                'nombre' => 'Grupo A',
                'tutor' => 1,
                'centro_id' => 1,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Grupo B',
                'tutor' => 2,
                'centro_id' => 2,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Grupo C',
                'tutor' => 3,
                'centro_id' => 3,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Grupo D',
                'tutor' => 4,
                'centro_id' => 4,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Grupo E',
                'tutor' => 5,
                'centro_id' => 5,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Grupo F',
                'tutor' => 6,
                'centro_id' => 6,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Grupo G',
                'tutor' => 7,
                'centro_id' => 7,
                'categoria_id' => 1,
            ],
        ];

        // Insertar datos en la tabla
        foreach ($grupos as $grupo) {
            DB::table('grupos')->insert($grupo);
        }
    }
}
