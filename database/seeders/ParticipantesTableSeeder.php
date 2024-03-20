<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('participantes')->truncate();
        $participantes = [
            [
                'grupo_id' => 1,
                'user_id' => 1,
            ],
            [
                'grupo_id' => 1,
                'user_id' => 2,
            ],
            [
                'grupo_id' => 2,
                'user_id' => 3,
            ],
            [
                'grupo_id' => 2,
                'user_id' => 4,
            ],
            [
                'grupo_id' => 3,
                'user_id' => 5,
            ],
            [
                'grupo_id' => 3,
                'user_id' => 6,
            ],
            [
                'grupo_id' => 4,
                'user_id' => 7,
            ],
            [
                'grupo_id' => 4,
                'user_id' => 8,
            ],
            [
                'grupo_id' => 5,
                'user_id' => 9,
            ],
            [
                'grupo_id' => 5,
                'user_id' => 10,
            ],
            [
                'grupo_id' => 6,
                'user_id' => 11,
            ],
            [
                'grupo_id' => 6,
                'user_id' => 12,
            ],
            [
                'grupo_id' => 7,
                'user_id' => 13,
            ],
            [
                'grupo_id' => 7,
                'user_id' => 14,
            ],
            [
                'grupo_id' => 1,
                'user_id' => 15,
            ],
        ];

        // Insertar datos en la tabla
        foreach ($participantes as $participante) {
            DB::table('participantes')->insert($participante);
        }
    }
}
