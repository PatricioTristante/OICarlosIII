<?php

require_once('wp-config.php');

class GradosTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;
        try{
            $wpdb->query("DELETE FROM grados");

            $wpdb->query("ALTER TABLE grados AUTO_INCREMENT = 1");
            
                $grados = [
                    ['id' => 1, 'nombre' => 'Formación Profesional Básica'],
                    ['id' => 2, 'nombre' => 'F.P. Grado Medio'],
                    ['id' => 3, 'nombre' => 'F.P. Grado Superior'],
                ];

                foreach ($grados as $grado) {
                    // Inserta los datos en la tabla 'grados'
                    $wpdb->insert(
                        "grados",
                        $grado
                    );
                }
                echo "Los grados se han insertado correctamente.";
                echo "<br>";
            }
            catch (Exception $e) {
                echo "Error al insertar los datos en la tabla 'grados': " . $e->getMessage();
                echo "<br>";
            }
    }
}