<?php
/*
Plugin Name: Mi Plugin Personalizado 2
Description: Un plugin para modificar y elegir ediciones.
Version: 1.0
Author: Patricio Tristante Parra
*/
add_action('admin_post_elegir_edicion', 'elegirEdicion');
add_action('admin_post_nopriv_elegir_edicion', 'elegirEdicion');

function elegirEdicion(){
    global $wpdb;
    $id = $_POST['edicion'];
    $wpdb->update('edicion_elegida', array('edicion_id' => $id), array('id' => 1));

    $edicion = $wpdb->get_row("SELECT * FROM ediciones WHERE id = " . $id);
    
    $categorias = array(
        'Grado Medio - ' . $edicion ->num_olimpiada . ' Olimpiada Informática',
        'Grado Superior - ' . $edicion ->num_olimpiada . ' Olimpiada Informática',
        $edicion ->num_modding . ' Concurso Regional de Modding',
        $edicion ->num_c3runner . ' Concurso Regional de C3Runner'
    );
    
    $tablaCategorias = $wpdb->get_results("SELECT * FROM categorias");
    
    foreach ($tablaCategorias as $index => $fila) {
        // Actualiza cada fila de la tabla `categorias` con el correspondiente valor de `$categorias`
        $wpdb->update(
            'categorias',
            array('nombre' => $categorias[$index]), // Datos a actualizar
            array('id' => $fila->id) // Condición de la actualización
        );
    }

    $wpdb->query(
        $wpdb->prepare(
            "UPDATE categorias_ediciones SET edicion_id = %d",
            $id
        )
    );
    
    wp_redirect(get_site_url() . '/administracion-de-ediciones?edicion=' . $id);
    exit;
}

add_action('admin_post_crear_edicion', 'crearEdicion');
add_action('admin_post_nopriv_crear_edicion', 'crearEdicion');

function crearEdicion(){
    global $wpdb;
    $id = $_POST['id'];
    $curso_escolar = $_POST['curso_escolar'];
    $numOlimpiada = $_POST['num_olimpiada'];
    $numModding = $_POST['num_modding'];
    $numC3runner = $_POST['num_c3runner'];
    $fechaCelebracion = $_POST['fecha_celebracion'];
    $fechaApertura = $_POST['fecha_apertura'];
    $fechaCierre = $_POST['fecha_cierre'];
    $cssFile = $_POST['css_file'];
    $banner = $_POST['banner'];
    $activa = isset($_POST['activa']) ? true : false;

    $wpdb->insert('ediciones', array(
        'id' => $id,
        'curso_escolar' => $curso_escolar,
        'num_olimpiada' => $numOlimpiada,
        'num_modding' => $numModding,
        'num_c3runner' => $numC3runner,
        'fecha_celebracion' => $fechaCelebracion,
        'fecha_apertura' => $fechaApertura,
        'fecha_cierre' => $fechaCierre,
        'css_file' => $cssFile,
        'banner' => $banner
    ));

    if($activa){
        $wpdb->update('edicion_elegida', array('edicion_id' => $id), array('id' => 1));

        $edicion = $wpdb->get_row("SELECT * FROM ediciones WHERE id = " . $id);

        $categorias = array(
            1 => 'Grado Medio - ' . $edicion ->num_olimpiada . ' Olimpiada Informática',
            2 =>'Grado Superior - ' . $edicion ->num_olimpiada . ' Olimpiada Informática',
            3 => $edicion ->num_modding . ' Concurso Regional de Modding',
            4 => $edicion ->num_c3runner . ' Concurso Regional de C3Runner'
        );
        
        $tablaCategorias = $wpdb->get_results("SELECT * FROM categorias");
        
        foreach ($tablaCategorias as $index => $fila) {
            // Actualiza cada fila de la tabla `categorias` con el correspondiente valor de `$categorias`
            $wpdb->update(
                'categorias',
                array('nombre' => $categorias[$index]), // Datos a actualizar
                array('id' => $fila->id) // Condición de la actualización
            );
        }
    
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE categorias_ediciones SET edicion_id = %d",
                $id
            )
        );
    }

    wp_redirect(get_site_url() . '/administracion-de-ediciones?crearEdicion=' . $id);
    exit;
}