<?php
// Incluye el archivo de configuración de WordPress
require_once('../wp-config.php');
require_once('../wp-load.php');

if(current_user_can('administrator')){
    global $wpdb;

    $wpdb->query("DROP TABLE IF EXISTS edicion_elegida");

    // Definir la tabla correctamente
    $tabla = "CREATE TABLE IF NOT EXISTS edicion_elegida (
        id BIGINT AUTO_INCREMENT,
        PRIMARY KEY(id),
        edicion_id BIGINT NOT NULL,
        FOREIGN KEY (edicion_id) REFERENCES ediciones(id) ON DELETE CASCADE ON UPDATE CASCADE
    )";

    // Ejecutar la creación de la tabla
    $resultado = $wpdb->query($tabla);

    if($resultado === false){
        echo "Error al crear la tabla edicion_elegida: " . $wpdb->last_error;
        exit;
    }
    echo "Tabla edicion_elegida creada correctamente";
    echo "<br>";

    // Ejecutar la consulta SELECT para obtener la edición
    $edicion = $wpdb->get_row("SELECT id FROM ediciones WHERE curso_escolar = '2023-2024'");

    if($edicion === null){
        echo "No se encontró ninguna edición para el curso escolar '2023-2024'";
        exit;
    }

    // Insertar los datos en la tabla edicion_elegida
    $resultado = $wpdb->insert('edicion_elegida', array('edicion_id' => $edicion->id));

    if($resultado === false){
        echo "Error al insertar la edición en la tabla edicion_elegida: " . $wpdb->last_error;
        exit;
    }
    echo "Edición insertada correctamente en la tabla edicion_elegida";
}else{
    echo "No tienes permisos para acceder a esta página";
}
