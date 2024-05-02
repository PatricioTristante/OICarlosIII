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

        if($_POST['categoria'] == '4'){
            if ($_POST['nombre4'] != '' && $_POST['dni4'] != '') {
                $usuario = explode(" ", $_POST['nombre4']);
                $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
                $apellido1 = array_pop($usuario);
                $usuarios[] = array('nombre' => implode(" ", $usuario)
                                  , 'apellidos' => $apellido1 . ' ' . $apellido2
                                  , 'ciclo_id' => $_POST['ciclo']
                                  , 'identificacion' => $_POST['dni4']
                                  , 'ciclo_id' => $_POST['ciclo']);
            }else if($_POST['nombre4'] != '' || $_POST['dni4'] != ''){
                if($advertencia != ''){
                    $advertencia .= ' , no se ha introducido el nombre y/o DNI del alumno 4';
                }
                else{
                    $advertencia = 'No se ha introducido el nombre y/o DNI del alumno 4';
                }
            }

            if ($_POST['nombre5'] != '' && $_POST['dni5'] != '') {
                $usuario = explode(" ", $_POST['nombre5']);
                $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
                $apellido1 = array_pop($usuario);
                $usuarios[] = array('nombre' => implode(" ", $usuario)
                                  , 'apellidos' => $apellido1 . ' ' . $apellido2
                                  , 'ciclo_id' => $_POST['ciclo']
                                  , 'identificacion' => $_POST['dni5']
                                  , 'ciclo_id' => $_POST['ciclo']);
            }else if($_POST['nombre5'] != '' || $_POST['dni5'] != ''){
                if($advertencia != ''){
                    $advertencia .= ' , no se ha introducido el nombre y/o DNI del alumno 5';
                }
                else{
                    $advertencia = 'No se ha introducido el nombre y/o DNI del alumno 5';
                }
            }

            if ($_POST['nombre6'] != '' && $_POST['dni6'] != '') {
                $usuario = explode(" ", $_POST['nombre6']);
                $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
                $apellido1 = array_pop($usuario);
                $usuarios[] = array('nombre' => implode(" ", $usuario)
                                  , 'apellidos' => $apellido1 . ' ' . $apellido2
                                  , 'ciclo_id' => $_POST['ciclo']
                                  , 'identificacion' => $_POST['dni6']
                                  , 'ciclo_id' => $_POST['ciclo']);
            }else if($_POST['nombre6'] != '' || $_POST['dni6'] != ''){
                if($advertencia != ''){
                    $advertencia .= ' , no se ha introducido el nombre y/o DNI del alumno 6';
                }
                else{
                    $advertencia = 'No se ha introducido el nombre y/o DNI del alumno 6';
                }
            }

            if ($_POST['nombre7'] != '' && $_POST['dni7'] != '') {
                $usuario = explode(" ", $_POST['nombre7']);
                $apellido2 = (count($usuario) > 2) ? array_pop($usuario) : '';
                $apellido1 = array_pop($usuario);
                $usuarios[] = array('nombre' => implode(" ", $usuario)
                                  , 'apellidos' => $apellido1 . ' ' . $apellido2
                                  , 'ciclo_id' => $_POST['ciclo']
                                  , 'identificacion' => $_POST['dni7']
                                  , 'ciclo_id' => $_POST['ciclo']);
            }else if($_POST['nombre7'] != '' || $_POST['dni7'] != ''){
                if($advertencia != ''){
                    $advertencia .= ' , no se ha introducido el nombre y/o DNI del alumno 7';
                }
                else{
                    $advertencia = 'No se ha introducido el nombre y/o DNI del alumno 7';
                }
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

        session_start();

        $datos = array('correo' => $_POST['email_prof_resp'], 'grupo' => $_POST['grupo'], 'alumnos' => $usuarios);
        $prueba = $wpdb->get_row("SELECT * FROM categorias WHERE id = " . $_POST['categoria']);
        $datos['categoria'] = $prueba->nombre;

        if($advertencia != ''){
            //Esto se hace para reflejar las inscripcciones erroneas que se hayan producido, se guardan en la tabla errores_inscripcion
            $error = array('grupo_id' => $grupo_id, 'error' => $advertencia);
            $wpdb->insert('errores_inscripcion', $error);
            $datos['advertencia'] = $advertencia;        
        }

        $_SESSION['datos'] = $datos;

        wp_redirect(home_url('/enviado')); // Redirigir a la página de confirmación

        exit;

}

add_action('wp_head', 'redireccion_despues_de_segundos');
function redireccion_despues_de_segundos() {
    if (is_page('enviado')) {
        //Para modificar el tiempo que tarda en redireccionar, hay que cambiar el numero que pone en content
        //Tambien se puede cambiar la URL a la que redirige cambiando el valor de esc_url(home_url())
        echo '<meta http-equiv="refresh" content="6;URL=' . esc_url(home_url()) . '" />';
    }
}