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


            $categorias = [
                [
                    'nombre' => 'Algoritmos',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Programación Dinámica',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Estructuras de Datos',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Grafos',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Programación Competitiva',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Inteligencia Artificial',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Criptografía',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Redes',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Seguridad Informática',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Bases de Datos',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Desarrollo Web',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Sistemas Operativos',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Matemáticas Discretas',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Teoría de la Computación',
                    'grado_id' => 1,
                ],
                [
                    'nombre' => 'Computación Cuántica',
                    'grado_id' => 1,
                ],
            ];

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