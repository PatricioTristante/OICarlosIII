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
        $nombre1 = sanitize_text_field($_POST['nombre1']);
        $dni1 = sanitize_text_field($_POST['dni1']);
        $nombre2 = sanitize_text_field($_POST['nombre2']) == '' ? null : sanitize_text_field($_POST['nombre2']);
        $dni2 = sanitize_text_field($_POST['dni2']) == '' ? null : sanitize_text_field($_POST['dni2']);
        $nombre3 = sanitize_text_field($_POST['nombre3']) == '' ? null : sanitize_text_field($_POST['nombre3']);
        $dni3 = sanitize_text_field($_POST['dni3']) == '' ? null : sanitize_text_field($_POST['dni3']);
        $prof_resp = sanitize_text_field($_POST['prof_resp']);
        $email_prof_resp = sanitize_text_field($_POST['email_prof_resp']);
        $centro = sanitize_text_field($_POST['centro']);
        $participacion = sanitize_text_field($_POST['participacion']);

        global $wpdb;
        $result =  $wpdb->insert('inscripciones', array(
            'nombre1' => $nombre1,
            'dni1' => $dni1,
            'nombre2' => $nombre2,
            'dni2' => $dni2,
            'nombre3' => $nombre3,
            'dni3' => $dni3,
            'prof_resp' => $prof_resp,
            'email_prof_resp' => $email_prof_resp,
            'centro' => $centro,
            'participacion' => $participacion,
        ));
        if ($result === false) {
            // Error al insertar los datos
            wp_die('Error al insertar los datos en la base de datos');
        }

        wp_redirect(home_url('/enviado')); // Redirigir a la página de confirmación
        exit;

}

add_action('wp_head', 'redireccion_despues_de_segundos');
function redireccion_despues_de_segundos() {
    if (is_page('enviado')) {
        //Para modificar el tiempo que tarda en redireccionar, hay que cambiar el numero que pone en content
        //Tambien se puede cambiar la URL a la que redirige cambiando el valor de esc_url(home_url())
        echo '<meta http-equiv="refresh" content="3;URL=' . esc_url(home_url()) . '" />';
    }
}