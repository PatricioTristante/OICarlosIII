<?php
require_once('wp-config.php');

class UsersTableSeeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        global $wpdb;

        try {
            $wpdb->query("DELETE FROM users");

            $wpdb->query("ALTER TABLE users AUTO_INCREMENT = 1");


            $users = [
                ['ciclo_id' => 1, 'nombre' => 'Juan', 'apellidos' => 'González'],
                ['ciclo_id' => 2, 'nombre' => 'María', 'apellidos' => 'Rodríguez'],
                ['ciclo_id' => 3, 'nombre' => 'Pedro', 'apellidos' => 'Fernández'],
                ['ciclo_id' => 4, 'nombre' => 'Laura', 'apellidos' => 'López'],
                ['ciclo_id' => 1, 'nombre' => 'Carlos', 'apellidos' => 'Martínez'],
                ['ciclo_id' => 2, 'nombre' => 'Ana', 'apellidos' => 'Sánchez'],
                ['ciclo_id' => 3, 'nombre' => 'Luis', 'apellidos' => 'Pérez'],
                ['ciclo_id' => 4, 'nombre' => 'Elena', 'apellidos' => 'Gómez'],
                ['ciclo_id' => 1, 'nombre' => 'Pablo', 'apellidos' => 'Díaz'],
                ['ciclo_id' => 2, 'nombre' => 'Carmen', 'apellidos' => 'Hernández'],
                ['ciclo_id' => 3, 'nombre' => 'Diego', 'apellidos' => 'Moreno'],
                ['ciclo_id' => 4, 'nombre' => 'Sofía', 'apellidos' => 'Álvarez'],
                ['ciclo_id' => 1, 'nombre' => 'Manuel', 'apellidos' => 'Romero'],
                ['ciclo_id' => 2, 'nombre' => 'Isabel', 'apellidos' => 'Muñoz'],
                ['ciclo_id' => 3, 'nombre' => 'Javier', 'apellidos' => 'Ortega'],
                ['ciclo_id' => 4, 'nombre' => 'Lucía', 'apellidos' => 'Rubio'],
                ['ciclo_id' => 1, 'nombre' => 'Miguel', 'apellidos' => 'Delgado'],
                ['ciclo_id' => 2, 'nombre' => 'Paula', 'apellidos' => 'Torres'],
                ['ciclo_id' => 3, 'nombre' => 'José', 'apellidos' => 'Reyes'],
                ['ciclo_id' => 4, 'nombre' => 'Beatriz', 'apellidos' => 'Jiménez']
            ];
    

            foreach ($users as $user) {
                $wpdb->insert(
                    "users",
                    $user
                );
            }

            echo "Los usuarios se han insertado correctamente.\n";
            echo "<br>";
        } catch (Exception $e) {
            echo "Se produjo un error al insertar los usuarios: " . $e->getMessage();
            echo "<br>";
        }
    }
}