<?php
require_once('wp-config.php');

class ParticipantesTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {
            $wpdb->query("DELETE FROM participantes");

            $wpdb->query("ALTER TABLE participantes AUTO_INCREMENT = 1");

            $grupoInicial = 1;


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
    

            foreach ($participantes as $participante) {
                $wpdb->insert(
                    "participantes",
                    $participante
                );
            }

            echo "Los participantes se han insertado correctamente.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar los participantes: " . $e->getMessage();
            echo "<br>";
        }
    }
}