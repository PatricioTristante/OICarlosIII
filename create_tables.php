<?php
// Incluye el archivo de configuración de WordPress
require_once('wp-config.php');
require_once('wp-load.php');
if(current_user_can('administrator')){
    $tablas = array(
        "edicion_elegida",
        "errores_inscripcion",
        "resultados_pruebas",
        "pruebas",
        "categorias_ediciones",
        "participantes",
        "grupos",
        "users",
        "ciclos",
        "categorias",
        "patrocinadores",
        "ediciones",
        "centros",
        "grados",
    );

    // Ejecuta las consultas DROP TABLE IF EXISTS para eliminar las tablas existentes
    foreach ($tablas as $nombre_tabla) {
        $drop_query = "DROP TABLE IF EXISTS $nombre_tabla";
        $resultado_drop = $wpdb->query($drop_query);
        if ($resultado_drop === false) {
            echo "Error al eliminar la tabla existente '$nombre_tabla': " . $wpdb->last_error;
            exit;
        }
    }

    // Define la consulta SQL para crear la tabla
    $queries = array(
        "grados" =>"
            CREATE TABLE IF NOT EXISTS grados (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(50)
            )
        ", 
        "centros" => "
            CREATE TABLE IF NOT EXISTS centros (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                codcen BIGINT,
                dencen VARCHAR(100),
                titularidad CHAR(1),
                domcen VARCHAR(255),
                cpcen INT,
                loccen VARCHAR(50),
                muncen VARCHAR(50),
                telcen VARCHAR(20),
                email VARCHAR(100)
            )
        ", 
        "ediciones" => "
            CREATE TABLE IF NOT EXISTS ediciones (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                curso_escolar CHAR(10),
                num_olimpiada CHAR(4),
                num_modding CHAR(4),
                num_c3runner CHAR(4),
                fecha_celebracion DATE,
                fecha_apertura DATE,
                fecha_cierre DATE,
                css_file VARCHAR(100),
                banner VARCHAR(200)
            )
        ", 
        "patrocinadores" => "
            CREATE TABLE IF NOT EXISTS patrocinadores (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(100),
                logotipo VARCHAR(100)
            )
        ", 
        "categorias" => "
            CREATE TABLE IF NOT EXISTS categorias (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                nombre CHAR(50),
                grado_id BIGINT,
                FOREIGN KEY (grado_id) REFERENCES grados(id) ON DELETE SET NULL ON UPDATE CASCADE
            )
        ", 
        "ciclos" =>  "
            CREATE TABLE IF NOT EXISTS ciclos (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                codigo CHAR(8),
                nombre VARCHAR(100),
                grado_id BIGINT,
                FOREIGN KEY (grado_id) REFERENCES grados(id) ON DELETE CASCADE
            )
        ", 
        "users" => "
            CREATE TABLE IF NOT EXISTS users (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                ciclo_id BIGINT,
                nombre VARCHAR(255),
                apellidos VARCHAR(255),
                identificacion VARCHAR(10),
                email VARCHAR(100),
                FOREIGN KEY (ciclo_id) REFERENCES ciclos(id) ON DELETE SET NULL ON UPDATE CASCADE
            )
        ", 
        "grupos" => "
            CREATE TABLE IF NOT EXISTS grupos (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(100),
                tutor BIGINT,
                centro_id BIGINT,
                categoria_id BIGINT,
                FOREIGN KEY (tutor) REFERENCES users(id) ON DELETE SET NULL ON UPDATE CASCADE,
                FOREIGN KEY (centro_id) REFERENCES centros(id) ON DELETE SET NULL ON UPDATE CASCADE,
                FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE SET NULL ON UPDATE CASCADE
            )
        ", 
        "participantes" => "
            CREATE TABLE IF NOT EXISTS participantes (
                grupo_id BIGINT,
                user_id BIGINT,
                PRIMARY KEY (grupo_id, user_id),
                FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON DELETE CASCADE,
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            ) 
        ", 
        "categorias_ediciones" => "
            CREATE TABLE IF NOT EXISTS categorias_ediciones (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                categoria_id BIGINT,
                edicion_id BIGINT,
                FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE,
                FOREIGN KEY (edicion_id) REFERENCES ediciones(id) ON DELETE CASCADE
            )
        ", 
        "pruebas" => "
            CREATE TABLE IF NOT EXISTS pruebas (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                nombre CHAR(50),
                categorias_ediciones_id BIGINT,
                patrocinadores_id BIGINT,
                FOREIGN KEY (categorias_ediciones_id) REFERENCES categorias_ediciones(id) ON DELETE CASCADE,
                FOREIGN KEY (patrocinadores_id) REFERENCES patrocinadores(id) ON DELETE SET NULL ON UPDATE CASCADE
            )
        ", 
        "resultados_pruebas" => "
            CREATE TABLE IF NOT EXISTS resultados_pruebas (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                grupo_id BIGINT,
                prueba_id BIGINT,
                puntos INT,
                tiempo TIMESTAMP,
                penalizacion TIME,
                FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON DELETE SET NULL ON UPDATE CASCADE,
                FOREIGN KEY (prueba_id) REFERENCES pruebas(id) ON DELETE CASCADE
            )
        ",
        "errores_inscripcion" => 
        "
            CREATE TABLE IF NOT EXISTS errores_inscripcion (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                grupo_id BIGINT,
                error VARCHAR(255),
                FOREIGN KEY (grupo_id) REFERENCES grupos(id) ON DELETE CASCADE
            )
        ",
        "edicion_elegida" => "
            CREATE TABLE IF NOT EXISTS edicion_elegida (
                id BIGINT AUTO_INCREMENT,
                PRIMARY KEY(id),
                edicion_id BIGINT NOT NULL,
                FOREIGN KEY (edicion_id) REFERENCES ediciones(id) ON DELETE CASCADE ON UPDATE CASCADE
            )"
        ,
    );

    // Ejecuta la consulta SQL para crear la tabla
    foreach ($queries as $tabla => $instruccion) {
        $resultado = $wpdb->query($instruccion);
        if ($resultado === false) {
            echo "Error al crear la tabla '{$tabla}': {$wpdb->last_error}";
            exit;
        }else{
            echo "Tabla '{$tabla}' creada exitosamente.";
            echo "<br>";
        }
    }

    echo "Tablas creadas correctamente.";
    echo "<br>";
    echo "<br>";
    echo "Pulse aqu&iacute; para insertar los datos iniciales";
    echo "<br>";
    echo "<a href='table_seeder.php'>Insertar datos iniciales</a>";
    echo "<br>";
    echo "Pulse aqui para volver a la pagina de inicio";
    echo "<br>";
    echo "<a href='/'>Inicio</a>";
    echo "<br>";
    echo "pulsa aqui para volver a wp-admin";
    echo "<br>";
    echo "<a href='/wp-admin'>wp-admin</a>";
}
else{
    echo "No tienes permisos para ejecutar este script";
    echo "<br>";
    echo "Pulse aqui para volver a la pagina de inicio";
    echo "<br>";
    echo "<a href='/'>Inicio</a>";
}

