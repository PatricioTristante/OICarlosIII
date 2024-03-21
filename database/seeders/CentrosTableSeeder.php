<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\table;

class CentrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Centro::truncate();
        $json = File::get(database_path('seeders/centros.json'));
        $centros = json_decode($json);

        foreach ($centros as $centro) {
            if ($centro->fp === 'S' || $centro->fpmedio === 'S' || $centro->fpsuperior === 'S') {

                $dencen = $centro->dencen;

            /*
                Como hay registros que tienen mas de 100 caracteres, se trunca hasta el caracter 97 y se añaden 3 puntos
            */
            if (strlen($dencen) > 100) {

                $dencen = substr($dencen, 0, 97) . '...';
            }


                Centro::create(array(
                    'codcen' => $centro->codcen,
                    'dencen' => $dencen,
                    'titularidad' => $centro->titularidad,
                    'domcen' => $centro->domcen,
                    'cpcen' => $centro->cpcen,
                    'loccen' => $centro->loccen,
                    'muncen' => $centro->muncen,
                    'telcen' => $centro->telcen ?? null,
                    'email' => $centro->email ?? null,
                ));
            }
        }
    }
}
