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

        $usuarios = [];
        $usuarios_id = [];
        $usuario = explode(" ", $_POST['nombre1']);
        $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
        $apellido1 = array_pop($usuario);
        $usuarios[] = array('nombre' => implode(" ", $usuario)
                          , 'apellidos' => $apellido1 . ' ' . $apellido2
                          , 'ciclo_id' => $_POST['ciclo']
                          , 'identificacion' => $_POST['dni1']
                          , 'ciclo_id' => $_POST['ciclo']);
        if ($_POST['nombre2'] != '' && $_POST['dni2'] != '') {
            $usuario = explode(" ", $_POST['nombre2']);
            $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
            $apellido1 = array_pop($usuario);
            $usuarios[] = array('nombre' => implode(" ", $usuario)
                              , 'apellidos' => $apellido1 . ' ' . $apellido2
                              , 'ciclo_id' => $_POST['ciclo']
                              , 'identificacion' => $_POST['dni2']
                              , 'ciclo_id' => $_POST['ciclo']);
        }

        if ($_POST['nombre3'] != '' && $_POST['dni3'] != '') {
            $usuario = explode(" ", $_POST['nombre3']);
            $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
            $apellido1 = array_pop($usuario);
            $usuarios[] = array('nombre' => implode(" ", $usuario)
                              , 'apellidos' => $apellido1 . ' ' . $apellido2
                              , 'ciclo_id' => $_POST['ciclo']
                              , 'identificacion' => $_POST['dni3']
                              , 'ciclo_id' => $_POST['ciclo']);
        }

        $usuario = explode(" ", $_POST['prof_resp']);
        $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
        $apellido1 = array_pop($usuario);
        $profesor = array('nombre' => implode(" ", $usuario)
                    , 'apellidos' => $apellido1 . ' ' . $apellido2
                    , 'ciclo_id' => null
                    , 'identificacion' => null);

        global $wpdb;
        foreach($usuarios as $usuario) {
            $result =  $wpdb->insert('users', $usuario);
            if ($result === false) {
                // Error al insertar los datos
                wp_die('Error al insertar los datos en la base de datos');
            }
            $usuarios_id[] = $wpdb->insert_id;
        }

        $result =  $wpdb->insert('users', $profesor);
        if ($result === false) {
            // Error al insertar los datos
            wp_die('Error al insertar los datos en la base de datos');
        }
        $profesor_id = $wpdb->insert_id;

        $centro = '%' . $wpdb->esc_like($_POST['centro']) . '%';
        $instruccion = $wpdb->prepare("SELECT * FROM centros WHERE dencen LIKE %s", $centro);
        $centro = $wpdb->get_results($instruccion);
        if(count($centro) == 0 || count($centro) > 1) {
            $result =  $wpdb->insert('grupos', array(
                'nombre' => $_POST['grupo'],
                'tutor' => $profesor_id,
                'centro_id' => null,
                'categoria_id' => $_POST['categoria']
            ));
            if ($result === false) {
                // Error al insertar los datos
                wp_die('Error al insertar los datos en la base de datos');
            }
        }else{
            $result =  $wpdb->insert('grupos', array(
                'nombre' => $_POST['grupo'],
                'tutor' => $profesor_id,
                'centro_id' => $centro[0]->id,
                'categoria_id' => $_POST['categoria']
            ));
            if ($result === false) {
                // Error al insertar los datos
                wp_die('Error al insertar los datos en la base de datos');
            }
        }

        $grupo_id = $wpdb->insert_id;
        foreach($usuarios_id as $usuario_id) {
            $result =  $wpdb->insert('participantes', array(
                'grupo_id' => $grupo_id,
                'user_id' => $usuario_id
            ));
            if ($result === false) {
                // Error al insertar los datos
                wp_die('Error al insertar los datos en la base de datos');
            }
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