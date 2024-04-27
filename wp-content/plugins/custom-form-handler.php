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

        $advertencia = '';
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
        }else if($_POST['nombre2'] != '' || $_POST['dni2'] != ''){
            $advertencia = 'No se ha introducido el nombre y/o DNI del alumno 2';
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
        }else if($_POST['nombre3'] != '' || $_POST['dni3'] != ''){
            if($advertencia != ''){
                $advertencia .= ' , no se ha introducido el nombre y/o DNI del alumno 3';
            }
            else{
                $advertencia = 'No se ha introducido el nombre y/o DNI del alumno 3';
            }
        }

        $usuario = explode(" ", $_POST['prof_resp']);
        $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
        $apellido1 = array_pop($usuario);
        $profesor = array('nombre' => implode(" ", $usuario)
                    , 'apellidos' => $apellido1 . ' ' . $apellido2
                    , 'ciclo_id' => null
                    , 'identificacion' => null,
                    'email' => $_POST['email_prof_resp']);

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

        $centro = $wpdb->get_row("SELECT * FROM centros WHERE id = " . $_POST['centro']);
        $grupo = array('nombre' => $_POST['grupo']
                     , 'tutor' => $profesor_id
                     , 'centro_id' => $_POST['centro']
                     , 'categoria_id' => $_POST['categoria']);

        $result =  $wpdb->insert('grupos', $grupo);
        if ($result === false) {
            // Error al insertar los datos
            wp_die('Error al insertar los datos en la base de datos');
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
        if($advertencia != ''){
            //Esto se hace para reflejar las inscripcciones erroneas que se hayan producido, se guardan en la tabla errores_inscripcion
            $error = array('grupo_id' => $grupo_id, 'error' => $advertencia);
            $wpdb->insert('errores_inscripcion', $error);
            wp_redirect(home_url('/enviado?advertencia=' . $advertencia));
            //Redirigir a la página de confirmación pero con advertencia y con un tiempo de redireccion a la home del doble de tiempo
        }
        else
        {
            wp_redirect(home_url('/enviado')); // Redirigir a la página de confirmación
        }
        exit;

}

add_action('wp_head', 'redireccion_despues_de_segundos');
function redireccion_despues_de_segundos() {
    if (is_page('enviado')) {
        //Para modificar el tiempo que tarda en redireccionar, hay que cambiar el numero que pone en content
        //Tambien se puede cambiar la URL a la que redirige cambiando el valor de esc_url(home_url())
        echo '<meta http-equiv="refresh" content="5;URL=' . esc_url(home_url()) . '" />';
    }
}