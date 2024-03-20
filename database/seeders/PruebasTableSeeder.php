<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pruebas')->truncate();
        $pruebas = [
            [
                'nombre' => 'Prueba A',
                'categorias_ediciones_id' => 1,
                'patrocinadores_id' => 1,
            ],
            [
                'nombre' => 'Prueba B',
                'categorias_ediciones_id' => 2,
                'patrocinadores_id' => 2,
            ],
            [
                'nombre' => 'Prueba C',
                'categorias_ediciones_id' => 3,
                'patrocinadores_id' => 3,
            ],
            [
                'nombre' => 'Prueba D',
                'categorias_ediciones_id' => 4,
                'patrocinadores_id' => 4,
            ],
            [
                'nombre' => 'Prueba E',
                'categorias_ediciones_id' => 5,
                'patrocinadores_id' => 5,
            ],
            [
                'nombre' => 'Prueba F',
                'categorias_ediciones_id' => 6,
                'patrocinadores_id' => 6,
            ],
            [
                'nombre' => 'Prueba G',
                'categorias_ediciones_id' => 7,
                'patrocinadores_id' => 7,
            ],
            [
                'nombre' => 'Prueba H',
                'categorias_ediciones_id' => 8,
                'patrocinadores_id' => 8,
            ],
            [
                'nombre' => 'Prueba I',
                'categorias_ediciones_id' => 9,
                'patrocinadores_id' => 9,
            ],
            [
                'nombre' => 'Prueba J',
                'categorias_ediciones_id' => 10,
                'patrocinadores_id' => 10,
            ],
        ];

        // Insertar datos en la tabla
        foreach ($pruebas as $prueba) {
            DB::table('pruebas')->insert($prueba);
        }
    }
}
