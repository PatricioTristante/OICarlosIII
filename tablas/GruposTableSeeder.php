<?php
require_once('wp-config.php');

class GruposTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {
            $wpdb->query("DELETE FROM grupos");

            $wpdb->query("ALTER TABLE grupos AUTO_INCREMENT = 1");


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
                [
                    'nombre' => 'Grupo H',
                    'tutor' => 8,
                    'centro_id' => 8,
                    'categoria_id' => 1,
                ],
                [
                    'nombre' => 'Grupo I',
                    'tutor' => 9,
                    'centro_id' => 9,
                    'categoria_id' => 1,
                ],
                [
                    'nombre' => 'Grupo J',
                    'tutor' => 10,
                    'centro_id' => 10,
                    'categoria_id' => 1,
                ],
            ];
            
    

            foreach ($grupos as $grupo) {
                $wpdb->insert(
                    "grupos",
                    $grupo
                );
            }

            echo "Los grupos se han insertado correctamente.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar los grupos: " . $e->getMessage();
            echo "<br>";
        }
    }
}