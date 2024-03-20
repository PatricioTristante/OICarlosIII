<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class CentrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('centros')->truncate();
        /*
            La E indica Estatal, osea -> Publico
            La P indica Privado
        */
        $centros = [
            [
                'codcen' => 1,
                'dencen' => 'CIFP Carlos III',
                'titularidad' => 'E',
                'domcen' => 'C/Carlos III, 3',
                'cpcen' => 30201,
                'loccen' => 'Cartagena',
                'muncen' => 'Cartagena',
                'telcen' => '968123456',
                'email' => 'info@cifpcarlosiii.es',
            ],
            [
                'codcen' => 2,
                'dencen' => 'Instituto de Educación Secundaria José María de la Fuente',
                'titularidad' => 'E',
                'domcen' => 'Calle Mayor, 123',
                'cpcen' => 30001,
                'loccen' => 'Murcia',
                'muncen' => 'Murcia',
                'telcen' => '968123456',
                'email' => 'iesjosemaria@educarm.es',
            ],
            [
                'codcen' => 3,
                'dencen' => 'Centro de Formación Profesional Carmen Conde',
                'titularidad' => 'E',
                'domcen' => 'Avenida Libertad, 456',
                'cpcen' => 30002,
                'loccen' => 'Cartagena',
                'muncen' => 'Cartagena',
                'telcen' => '968654321',
                'email' => 'cfpcarmenconde@educarm.es',
            ],
            [
                'codcen' => 4,
                'dencen' => 'Colegio Público de Formación Profesional García Lorca',
                'titularidad' => 'E',
                'domcen' => 'Calle Gran Vía, 789',
                'cpcen' => 30003,
                'loccen' => 'Lorca',
                'muncen' => 'Lorca',
                'telcen' => '968987654',
                'email' => 'cpfp.garcialorca@educarm.es',
            ],
            [
                'codcen' => 5,
                'dencen' => 'Centro de Estudios Tecnológicos Juan Pablo II',
                'titularidad' => 'P',
                'domcen' => 'Calle San Francisco, 101',
                'cpcen' => 30004,
                'loccen' => 'Molina de Segura',
                'muncen' => 'Molina de Segura',
                'telcen' => '968234567',
                'email' => 'cet.juanpablo@educarm.es',
            ],
            [
                'codcen' => 6,
                'dencen' => 'Instituto de Formación Profesional Miguel Hernández',
                'titularidad' => 'E',
                'domcen' => 'Plaza España, 210',
                'cpcen' => 30005,
                'loccen' => 'Yecla',
                'muncen' => 'Yecla',
                'telcen' => '968345678',
                'email' => 'ifp.miguelhernandez@educarm.es',
            ],
            [
                'codcen' => 7,
                'dencen' => 'Centro de Formación Profesional María Candelaria',
                'titularidad' => 'P',
                'domcen' => 'Calle Principal, 15',
                'cpcen' => 30006,
                'loccen' => 'San Javier',
                'muncen' => 'San Javier',
                'telcen' => '968456789',
                'email' => 'cfpmariacandelaria@educarm.es',
            ],
            [
                'codcen' => 8,
                'dencen' => 'Instituto de Enseñanza Secundaria Antonio Machado',
                'titularidad' => 'E',
                'domcen' => 'Calle Real, 30',
                'cpcen' => 30007,
                'loccen' => 'Alcantarilla',
                'muncen' => 'Alcantarilla',
                'telcen' => '968567890',
                'email' => 'iesantoniomachado@educarm.es',
            ],
            [
                'codcen' => 9,
                'dencen' => 'Centro de Educación Secundaria Federico García Lorca',
                'titularidad' => 'P',
                'domcen' => 'Avenida de la Libertad, 5',
                'cpcen' => 30008,
                'loccen' => 'Cieza',
                'muncen' => 'Cieza',
                'telcen' => '968678901',
                'email' => 'cesfedericogarcia@educarm.es',
            ],
            [
                'codcen' => 10,
                'dencen' => 'Instituto de Educación Secundaria Ramón y Cajal',
                'titularidad' => 'E',
                'domcen' => 'Calle Mayor, 2',
                'cpcen' => 30009,
                'loccen' => 'Totana',
                'muncen' => 'Totana',
                'telcen' => '968789012',
                'email' => 'iesramonycajal@educarm.es',
            ],
            [
                'codcen' => 11,
                'dencen' => 'Centro de Enseñanza Secundaria Miguel de Cervantes',
                'titularidad' => 'P',
                'domcen' => 'Avenida de la Constitución, 100',
                'cpcen' => 30010,
                'loccen' => 'Mazarrón',
                'muncen' => 'Mazarrón',
                'telcen' => '968890123',
                'email' => 'cesmiguelcervantes@educarm.es',
            ],
        ];

        DB::table('centros')->truncate();
        // Insertar datos en la tabla
        foreach ($centros as $centro) {
            DB::table('centros')->insert($centro);
        }
    }
}
