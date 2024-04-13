<?php
require_once('wp-config.php');

class EdicionesTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {
            $wpdb->query("DELETE FROM ediciones");

            $wpdb->query("ALTER TABLE ediciones AUTO_INCREMENT = 1");


            $ediciones = [
                [
                    'curso_escolar' => '2013-2014',
                    'num_olimpiada' => 1,
                    'num_modding' => 1,
                    'fecha_celebracion' => '2014-05-20',
                    'fecha_apertura' => '2014-04-01',
                    'fecha_cierre' => '2014-05-10',
                    'css_file' => 'edicion_1.css',
                    'banner' => 'banner_1.jpg',
                ],
                [
                    'curso_escolar' => '2014-2015',
                    'num_olimpiada' => 2,
                    'num_modding' => 2,
                    'fecha_celebracion' => '2015-05-20',
                    'fecha_apertura' => '2015-04-01',
                    'fecha_cierre' => '2015-05-10',
                    'css_file' => 'edicion_2.css',
                    'banner' => 'banner_2.jpg',
                ],
                [
                    'curso_escolar' => '2015-2016',
                    'num_olimpiada' => 3,
                    'num_modding' => 3,
                    'fecha_celebracion' => '2016-05-20',
                    'fecha_apertura' => '2016-04-01',
                    'fecha_cierre' => '2016-05-10',
                    'css_file' => 'edicion_3.css',
                    'banner' => 'banner_3.jpg',
                ],
                [
                    'curso_escolar' => '2016-2017',
                    'num_olimpiada' => 4,
                    'num_modding' => 4,
                    'fecha_celebracion' => '2017-05-20',
                    'fecha_apertura' => '2017-04-01',
                    'fecha_cierre' => '2017-05-10',
                    'css_file' => 'edicion_4.css',
                    'banner' => 'banner_4.jpg',
                ],
                [
                    'curso_escolar' => '2017-2018',
                    'num_olimpiada' => 5,
                    'num_modding' => 5,
                    'fecha_celebracion' => '2018-05-20',
                    'fecha_apertura' => '2018-04-01',
                    'fecha_cierre' => '2018-05-10',
                    'css_file' => 'edicion_5.css',
                    'banner' => 'banner_5.jpg',
                ],
                [
                    'curso_escolar' => '2018-2019',
                    'num_olimpiada' => 6,
                    'num_modding' => 6,
                    'fecha_celebracion' => '2019-05-20',
                    'fecha_apertura' => '2019-04-01',
                    'fecha_cierre' => '2019-05-10',
                    'css_file' => 'edicion_6.css',
                    'banner' => 'banner_6.jpg',
                ],
                [
                    'curso_escolar' => '2019-2020',
                    'num_olimpiada' => 7,
                    'num_modding' => 7,
                    'fecha_celebracion' => '2020-05-20',
                    'fecha_apertura' => '2020-04-01',
                    'fecha_cierre' => '2020-05-10',
                    'css_file' => 'edicion_7.css',
                    'banner' => 'banner_7.jpg',
                ],
                [
                    'curso_escolar' => '2020-2021',
                    'num_olimpiada' => 8,
                    'num_modding' => 8,
                    'fecha_celebracion' => '2021-05-20',
                    'fecha_apertura' => '2021-04-01',
                    'fecha_cierre' => '2021-05-10',
                    'css_file' => 'edicion_8.css',
                    'banner' => 'banner_8.jpg',
                ],
                [
                    'curso_escolar' => '2021-2022',
                    'num_olimpiada' => 9,
                    'num_modding' => 9,
                    'fecha_celebracion' => '2022-05-20',
                    'fecha_apertura' => '2022-04-01',
                    'fecha_cierre' => '2022-05-10',
                    'css_file' => 'edicion_9.css',
                    'banner' => 'banner_9.jpg',
                ],
                [
                    'curso_escolar' => '2022-2023',
                    'num_olimpiada' => 10,
                    'num_modding' => 10,
                    'fecha_celebracion' => '2023-05-15',
                    'fecha_apertura' => '2023-04-01',
                    'fecha_cierre' => '2023-05-01',
                    'css_file' => 'edicion_10.css',
                    'banner' => 'banner_10.jpg',
                ],
                [
                    'curso_escolar' => '2023-2024',
                    'num_olimpiada' => 11,
                    'num_modding' => 11,
                    'fecha_celebracion' => '2024-05-20',
                    'fecha_apertura' => '2024-04-01',
                    'fecha_cierre' => '2024-05-10',
                    'css_file' => 'edicion_11.css',
                    'banner' => 'banner_11.jpg',
                ],
            ];
    

            foreach ($ediciones as $edicion) {
                $wpdb->insert(
                    "ediciones",
                    $edicion
                );
            }

            echo "Las ediciones se han insertado correctamente.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar las ediciones: " . $e->getMessage();
            echo "<br>";
        }
    }
}