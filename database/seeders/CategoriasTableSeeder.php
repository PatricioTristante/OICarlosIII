<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->truncate();
        $categorias = [
            [
                'nombre' => 'Algoritmos',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Programación Dinámica',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Estructuras de Datos',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Grafos',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Programación Competitiva',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Inteligencia Artificial',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Criptografía',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Redes',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Seguridad Informática',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Bases de Datos',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Desarrollo Web',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Sistemas Operativos',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Matemáticas Discretas',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Teoría de la Computación',
                'grado_id' => 1,
            ],
            [
                'nombre' => 'Computación Cuántica',
                'grado_id' => 1,
            ],
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert($categoria);
        }
    }
}
