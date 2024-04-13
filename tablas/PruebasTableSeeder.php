<?php

require_once('wp-config.php');

class PruebasTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;
        try{
            $wpdb->query("DELETE FROM pruebas");
            $wpdb->query("ALTER TABLE pruebas AUTO_INCREMENT = 1");
            
            $pruebas = [
                [
                    'nombre' => 'Prueba A',
                    'categorias_ediciones_id' => 1,
                    'patrocinadores_id' => 1,
                ],
                [
                    'nombre' => 'Prueba B',
                    'categorias_ediciones_id' => 2,
                    'patrocinadores_id' => 2,
                ],
                [
                    'nombre' => 'Prueba C',
                    'categorias_ediciones_id' => 3,
                    'patrocinadores_id' => 3,
                ],
                [
                    'nombre' => 'Prueba D',
                    'categorias_ediciones_id' => 4,
                    'patrocinadores_id' => 4,
                ],
                [
                    'nombre' => 'Prueba E',
                    'categorias_ediciones_id' => 5,
                    'patrocinadores_id' => 5,
                ],
                [
                    'nombre' => 'Prueba F',
                    'categorias_ediciones_id' => 6,
                    'patrocinadores_id' => 6,
                ],
                [
                    'nombre' => 'Prueba G',
                    'categorias_ediciones_id' => 7,
                    'patrocinadores_id' => 7,
                ],
                [
                    'nombre' => 'Prueba H',
                    'categorias_ediciones_id' => 8,
                    'patrocinadores_id' => 8,
                ],
                [
                    'nombre' => 'Prueba I',
                    'categorias_ediciones_id' => 9,
                    'patrocinadores_id' => 9,
                ],
                [
                    'nombre' => 'Prueba J',
                    'categorias_ediciones_id' => 10,
                    'patrocinadores_id' => 10,
                ],
            ];

                foreach ($pruebas as $prueba) {
                    // Inserta los datos en la tabla 'grados'
                    $wpdb->insert(
                        "pruebas",
                        $prueba
                    );
                }
                echo "Las pruebas se han insertado correctamente.";
                echo "<br>";
            }
            catch (Exception $e) {
                echo "Error al insertar los datos en la tabla 'pruebas': " . $e->getMessage();
                echo "<br>";
            }
    }
}