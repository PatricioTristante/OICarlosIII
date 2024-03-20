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
        $max_ediciones_id = DB::table('ediciones')->max('id');
        $max_categorias_id = (int)DB::table('categorias')->max('id');
        for ($i=0; $i < 10; $i++) {
            $categoria_edicion = ['categoria_id' => rand(1, $max_categorias_id)
            , 'edicion_id' => rand(1, $max_ediciones_id)];
            DB::table('categorias_ediciones')->insert($categoria_edicion);
        }
    }
}
