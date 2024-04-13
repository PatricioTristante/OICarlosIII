<?php
require_once('wp-config.php');

class Categorias_EdicionesTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {
            $wpdb->query("DELETE FROM categorias_ediciones");

            $wpdb->query("ALTER TABLE categorias_ediciones AUTO_INCREMENT = 1");

            $categoriasCount = $wpdb->get_var("SELECT COUNT(*) FROM " .  "categorias");
            
            $edicionesCount = $wpdb->get_var("SELECT COUNT(*) FROM " . "ediciones");

            // Lista de combinaciones ya insertadas
            $categorias_ediciones = [];

            // Insertar 10 combinaciones únicas
            for ($i = 0; $i < 10; $i++) {
                do {
                    $categoria_id = rand(1, $categoriasCount);
                    $edicion_id = rand(1, $edicionesCount);
                    $combinacion = ["categoria_id" => $categoria_id, "edicion_id" => $edicion_id];
                } while (in_array($combinacion, $categorias_ediciones));

                $categorias_ediciones[] = $combinacion;
            }

            foreach ($categorias_ediciones as $categoria_edicion) {
                $wpdb->insert(
                    "categorias_ediciones",
                    $categoria_edicion
                );
            }

            echo "Los datos se han insertado correctamente en categorias_ediciones.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar los datos en categorias_ediciones: " . $e->getMessage();
            echo "<br>";
        }
    }
}