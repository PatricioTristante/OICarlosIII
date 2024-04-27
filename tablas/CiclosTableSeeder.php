<?php
require_once('wp-config.php');

class CiclosTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {
            $wpdb->query("DELETE FROM ciclos");

            $wpdb->query("ALTER TABLE ciclos AUTO_INCREMENT = 1");


            $ciclos = [
                ['codigo' => 'DAW', 'nombre' => 'Desarrollo de aplicaciones web', 'grado_id' => 2],
                ['codigo' => 'DAM', 'nombre' => 'Desarrollo de aplicaciones Multiplataforma', 'grado_id' => 2],
                ['codigo' => 'ASIR', 'nombre' => 'Administracion de sistemas informaticos en red', 'grado_id' => 2],
                ['codigo' => 'SMR', 'nombre' => 'Sistemas microinformaticos y redes', 'grado_id' => 1]
            ];
    

            foreach ($ciclos as $ciclo) {
                $wpdb->insert(
                    "ciclos",
                    $ciclo
                );
            }

            echo "Los ciclos se han insertado correctamente.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar los ciclos: " . $e->getMessage();
            echo "<br>";
        }
    }
}