<?php

require_once('wp-config.php');

class PatrocinadoresTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;
        try{
            $wpdb->query("DELETE FROM patrocinadores");

            $wpdb->query("ALTER TABLE patrocinadores AUTO_INCREMENT = 1");
            
            $patrocinadores = [
                [
                    'nombre' => 'Empresa A',
                    'logotipo' => 'empresa_a.png',
                ],
                [
                    'nombre' => 'Empresa B',
                    'logotipo' => 'empresa_b.png',
                ],
                [
                    'nombre' => 'Empresa C',
                    'logotipo' => 'empresa_c.png',
                ],
                /* [
                    'nombre' => 'Empresa D',
                    'logotipo' => 'empresa_d.png',
                ],
                [
                    'nombre' => 'Empresa E',
                    'logotipo' => 'empresa_e.png',
                ],
                [
                    'nombre' => 'Empresa F',
                    'logotipo' => 'empresa_f.png',
                ],
                [
                    'nombre' => 'Empresa G',
                    'logotipo' => 'empresa_g.png',
                ],
                [
                    'nombre' => 'Empresa H',
                    'logotipo' => 'empresa_h.png',
                ],
                [
                    'nombre' => 'Empresa I',
                    'logotipo' => 'empresa_i.png',
                ],
                [
                    'nombre' => 'Empresa J',
                    'logotipo' => 'empresa_j.png',
                ],
                [
                    'nombre' => 'Empresa K',
                    'logotipo' => 'empresa_k.png',
                ],
                [
                    'nombre' => 'Empresa L',
                    'logotipo' => 'empresa_l.png',
                ],
                [
                    'nombre' => 'Empresa M',
                    'logotipo' => 'empresa_m.png',
                ],
                [
                    'nombre' => 'Empresa N',
                    'logotipo' => 'empresa_n.png',
                ],
                [
                    'nombre' => 'Empresa O',
                    'logotipo' => 'empresa_o.png',
                ], */
            ];

                foreach ($patrocinadores as $patrocinador) {
                    // Inserta los datos en la tabla 'grados'
                    $wpdb->insert(
                        "patrocinadores",
                        $patrocinador
                    );
                }
                echo "Los patrocinadores se han insertado correctamente.";
                echo "<br>";
            }
            catch (Exception $e) {
                echo "Error al insertar los datos en la tabla 'patrocinadores': " . $e->getMessage();
                echo "<br>";
            }
    }
}