<?php

require_once('wp-config.php');

class Resultados_PruebasTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;
        try{
            $wpdb->query("DELETE FROM resultados_pruebas");
            $wpdb->query("ALTER TABLE resultados_pruebas AUTO_INCREMENT = 1");
            
            $resultados_pruebas = [
                [
                    'grupo_id' => 1,
                    'prueba_id' => 1,
                    'puntos' => 100,
                    'tiempo' => '2024-03-20 10:00:00',
                    'penalizacion' => '00:05:00',
                ],
                [
                    'grupo_id' => 2,
                    'prueba_id' => 2,
                    'puntos' => 90,
                    'tiempo' => '2024-03-20 10:15:00',
                    'penalizacion' => '00:10:00',
                ],
                [
                    'grupo_id' => 3,
                    'prueba_id' => 3,
                    'puntos' => 80,
                    'tiempo' => '2024-03-20 10:30:00',
                    'penalizacion' => '00:15:00',
                ],
                [
                    'grupo_id' => 4,
                    'prueba_id' => 4,
                    'puntos' => 70,
                    'tiempo' => '2024-03-20 10:45:00',
                    'penalizacion' => '00:20:00',
                ],
                [
                    'grupo_id' => 5,
                    'prueba_id' => 5,
                    'puntos' => 60,
                    'tiempo' => '2024-03-20 11:00:00',
                    'penalizacion' => '00:25:00',
                ],
                [
                    'grupo_id' => 6,
                    'prueba_id' => 6,
                    'puntos' => 50,
                    'tiempo' => '2024-03-20 11:15:00',
                    'penalizacion' => '00:30:00',
                ],
                [
                    'grupo_id' => 7,
                    'prueba_id' => 7,
                    'puntos' => 40,
                    'tiempo' => '2024-03-20 11:30:00',
                    'penalizacion' => '00:35:00',
                ],
                [
                    'grupo_id' => 8,
                    'prueba_id' => 8,
                    'puntos' => 30,
                    'tiempo' => '2024-03-20 11:45:00',
                    'penalizacion' => '00:40:00',
                ],
                [
                    'grupo_id' => 9,
                    'prueba_id' => 9,
                    'puntos' => 20,
                    'tiempo' => '2024-03-20 12:00:00',
                    'penalizacion' => '00:45:00',
                ],
                [
                    'grupo_id' => 10,
                    'prueba_id' => 10,
                    'puntos' => 10,
                    'tiempo' => '2024-03-20 12:15:00',
                    'penalizacion' => '00:50:00',
                ],
            ];

                foreach ($resultados_pruebas as $resultados_prueba) {
                    // Inserta los datos en la tabla 'grados'
                    $wpdb->insert(
                        "resultados_pruebas",
                        $resultados_prueba
                    );
                }
                echo "Los datos se han insertado correctamente en la tabla 'resultados_pruebas'.";
                echo "<br>";
            }
            catch (Exception $e) {
                echo "Error al insertar los datos en la tabla 'resultados_pruebas': " . $e->getMessage();
                echo "<br>";
            }
    }
}