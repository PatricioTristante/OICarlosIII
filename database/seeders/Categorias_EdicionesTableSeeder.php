<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias_EdicionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias_ediciones')->truncate();

        $categoriasCount = DB::table('categorias')->count();
        $edicionesCount = DB::table('ediciones')->count();

        // Lista de combinaciones ya insertadas
        $insertedCombinations = [];

        for ($i = 0; $i < 10; $i++) {
            do {
                $categoria_id = rand(1, $categoriasCount);
                $edicion_id = rand(1, $edicionesCount);
                $combination = $categoria_id . '-' . $edicion_id;
            } while (in_array($combination, $insertedCombinations));

            $insertedCombinations[] = $combination;

            DB::table('categorias_ediciones')->insert([
                'categoria_id' => $categoria_id,
                'edicion_id' => $edicion_id,
            ]);
        }
    }
}
