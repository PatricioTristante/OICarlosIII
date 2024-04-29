<?php

require_once('wp-config.php');

class Edicion2024TableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {

            $edicion = [
                    'id' => 15,
                    'curso_escolar' => '2023-2024',
                    'num_olimpiada' => 'XV',
                    'num_modding' => 'XIX',
                    'num_c3runner' => 'II',
                    'fecha_celebracion' => '2024-05-15',
                    'fecha_apertura' => '2024-05-01',
                    'fecha_cierre' => '2024-05-14',
                    'css_file' => 'edicion_11.css',
                    'banner' => 'banner_11.jpg',
            ];
    

            $wpdb->insert(
                "ediciones",
                $edicion
            );

            $categorias = [
                [
                    'id' => 1,
                    'nombre' => 'Grado Medio - XV Olimpiada Informática',
                    'grado_id' => 1,
                ],
                [
                    'id' => 2,
                    'nombre' => 'Grado Superior - XV Olimpiada Informática',
                    'grado_id' => 2,
                ],
                [
                    'id' => 3,
                    'nombre' => 'XIX Concurso Regional de Modding',
                    'grado_id' => 2,
                ],
                [
                    'id' => 4,
                    'nombre' => 'II Concurso Regional de C3Runner',
                    'grado_id' => 2,
                ]
            ];

            foreach ($categorias as $categoria) {
                $wpdb->insert(
                    "categorias",
                    $categoria
                );
                $wpdb->insert(
                    "categorias_ediciones",
                    ["categoria_id" => $categoria['id'], "edicion_id" => $edicion['id']]
                );
            }

            echo "La presente edición se ha insertado correctamente.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar la edición: " . $e->getMessage();
            echo "<br>";
        }
    }
}