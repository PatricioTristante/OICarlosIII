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
                ['id' => 1, 'codigo' => 'IFC-131', 'nombre' => 'Informática y Comunicaciones', 'grado_id' => 1],
                ['id' => 2, 'codigo' => 'IFC-132', 'nombre' => 'Informática de Oficina', 'grado_id' => 1],
                ['id' => 3, 'codigo' => 'IFC-221', 'nombre' => 'Sistemas microinformaticos y redes', 'grado_id' => 2],
                ['id' => 4, 'codigo' => 'IFC-321', 'nombre' => 'Administracion de sistemas informaticos en red', 'grado_id' => 3],
                ['id' => 5, 'codigo' => 'IFC-322', 'nombre' => 'Desarrollo de aplicaciones Multiplataforma', 'grado_id' => 3],
                ['id' => 6, 'codigo' => 'IFC-323', 'nombre' => 'Desarrollo de aplicaciones web', 'grado_id' => 3]
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