<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatrocinadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patrocinadores')->truncate();
        $patrocinadores = [
            [
                'nombre' => 'Empresa A',
                'logotipo' => 'empresa_a.png',
            ],
            [
                'nombre' => 'Empresa B',
                'logotipo' => 'empresa_b.png',
            ],
            [
                'nombre' => 'Empresa C',
                'logotipo' => 'empresa_c.png',
            ],
            [
                'nombre' => 'Empresa D',
                'logotipo' => 'empresa_d.png',
            ],
            [
                'nombre' => 'Empresa E',
                'logotipo' => 'empresa_e.png',
            ],
            [
                'nombre' => 'Empresa F',
                'logotipo' => 'empresa_f.png',
            ],
            [
                'nombre' => 'Empresa G',
                'logotipo' => 'empresa_g.png',
            ],
            [
                'nombre' => 'Empresa H',
                'logotipo' => 'empresa_h.png',
            ],
            [
                'nombre' => 'Empresa I',
                'logotipo' => 'empresa_i.png',
            ],
            [
                'nombre' => 'Empresa J',
                'logotipo' => 'empresa_j.png',
            ],
            [
                'nombre' => 'Empresa K',
                'logotipo' => 'empresa_k.png',
            ],
            [
                'nombre' => 'Empresa L',
                'logotipo' => 'empresa_l.png',
            ],
            [
                'nombre' => 'Empresa M',
                'logotipo' => 'empresa_m.png',
            ],
            [
                'nombre' => 'Empresa N',
                'logotipo' => 'empresa_n.png',
            ],
            [
                'nombre' => 'Empresa O',
                'logotipo' => 'empresa_o.png',
            ],
        ];

        // Insertar datos en la tabla
        foreach ($patrocinadores as $patrocinador) {
            DB::table('patrocinadores')->insert($patrocinador);
        }
    }
}
