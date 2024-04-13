<?php

require_once('wp-config.php');


class CentrosTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try{
        $wpdb->query("DELETE FROM centros");

        $wpdb->query("ALTER TABLE centros AUTO_INCREMENT = 1");

        // Lee el archivo JSON
        $json = file_get_contents('tablas/centros.json');
        $centros = json_decode($json);

        foreach ($centros as $centro) {
            if ($centro->fp === 'S' || $centro->fpmedio === 'S' || $centro->fpsuperior === 'S') {
                $dencen = $centro->dencen;

                // Trunca el nombre si es más largo de 100 caracteres
                if (strlen($dencen) > 100) {
                    $dencen = substr($dencen, 0, 97) . '...';
                }

                // Inserta los datos en la tabla 'centros'
                $wpdb->insert(
                    "centros",
                    array(
                        'codcen' => $centro->codcen,
                        'dencen' => $dencen,
                        'titularidad' => $centro->titularidad,
                        'domcen' => $centro->domcen,
                        'cpcen' => $centro->cpcen,
                        'loccen' => $centro->loccen,
                        'muncen' => $centro->muncen,
                        'telcen' => isset($centro->telcen) ? $centro->telcen : null,
                        'email' => isset($centro->email) ? $centro->email : null,
                    )
                );
            }
        }
        echo "Los centros se han insertado correctamente.";
        echo "<br>";
        }
        catch (Exception $e) {
            echo "Error al insertar los datos en la tabla 'centros': " . $e->getMessage();
            echo "<br>";
        } 
    }
}