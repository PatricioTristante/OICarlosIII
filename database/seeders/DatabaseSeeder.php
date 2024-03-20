<?php

namespace Database\Seeders;

use App\Models\Patrocinador;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call(CiclosTableSeeder::class);
        $this->call(GradosTableSeeder::class);
        $this->call(CentrosTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GruposTableSeeder::class);
        $this->call(ParticipantesTableSeeder::class);
        $this->call(PatrocinadoresTableSeeder::class);
        $this->call(EdicionesTableSeeder::class);
        $this->call(Categorias_EdicionesTableSeeder::class);
        $this->call(PruebasTableSeeder::class);
        $this->call(Resultados_PruebasTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
