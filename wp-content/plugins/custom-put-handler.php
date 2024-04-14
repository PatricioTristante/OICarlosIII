<?php
/*
Plugin Name: Mi Plugin Personalizado
Description: Un plugin para manejar formularios personalizados.
Version: 1.0
Author: Patricio Tristante Parra
*/
add_action('admin_post_manejar_formulario', 'custom_form_request');
add_action('admin_post_nopriv_manejar_formulario', 'custom_form_request');

// Manejador para la petición PUT
function custom_form_request() {

        // Obtener los datos del cuerpo de la petición
        $nombre = sanitize_text_field($_POST['nombre']);
        $apellidos = sanitize_text_field($_POST['apellidos']);
        $email = sanitize_email($_POST['email']);
        $ciclo = intval($_POST['ciclo']);
        $curso = intval($_POST['curso']);
        $categoria = intval($_POST['categoria']);

        global $wpdb;
        $result =  $wpdb->insert('inscripciones', array(
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'email' => $email,
            'ciclo_id' => $ciclo,
            'curso' => $curso,
            'categoria_id' => $categoria));
        if ($result === false) {
            // Error al insertar los datos
            wp_die('Error al insertar los datos en la base de datos');
        }

        wp_redirect(home_url('/enviado')); // Redirigir a la página de confirmación
        exit;

}
