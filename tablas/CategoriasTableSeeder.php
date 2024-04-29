<?php

require_once('wp-config.php');

class CategoriasTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {
            $wpdb->query("DELETE FROM categorias");

            $wpdb->query("ALTER TABLE categorias AUTO_INCREMENT = 1");


            $categorias = [];

            foreach ($categorias as $categoria) {
                $wpdb->insert(
                    "categorias",
                    $categoria
                );
            }

            echo "Las categorías se han insertado correctamente.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar las categorías: " . $e->getMessage();
            echo "<br>";
        }
    }
}