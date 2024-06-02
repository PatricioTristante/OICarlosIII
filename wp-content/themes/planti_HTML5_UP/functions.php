<?php
// Esta funcion carga el CSS de la pagina desde la base de datos
// Se coge de la tabla ediciones, del campo edicion_11.css, el valor que corresponde a la edicion actual
function add_CSS() {
   global $wpdb;
   $elegida = $wpdb->get_results("SELECT edicion_id FROM edicion_elegida")[0];
   $ediciones = $wpdb->get_results("SELECT css_file FROM ediciones WHERE id = $elegida->edicion_id")[0];

   $css_file = $ediciones->css_file;
   wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/' . $css_file);
   wp_enqueue_style( 'style2', get_template_directory_uri() . '/style.css');
}

// Esta funcion carga el banner de la pagina desde la base de datos
// Se coge de la tabla ediciones, del campo banner, el valor que corresponde a la edicion actual
function add_banner() {
   global $wpdb;
   $elegida = $wpdb->get_results("SELECT edicion_id FROM edicion_elegida")[0];
   $ediciones = $wpdb->get_results("SELECT banner FROM ediciones WHERE id = $elegida->edicion_id")[0];
   $banner = $ediciones->banner;
   if(filter_var($banner, FILTER_VALIDATE_URL)){
         return $banner;
   }else{
         return get_template_directory_uri() . '/images/banners/' . $banner;
   }
}

add_action('wp_enqueue_scripts', 'add_CSS');


function custom_wp_mail( $destinatario, $asunto, $datos_extra = array() ) {
   // Variables que deseas pasar a la plantilla de correo
   $ruta_plantilla = get_template_directory() . '/emails/plantillaEstandar.php';
   ob_start();
   include $ruta_plantilla;
   $mensaje = ob_get_contents();
   ob_end_clean();

   $headers = array('Content-Type: text/html; charset=UTF-8');

   wp_mail( $destinatario, $asunto, $mensaje, $headers );
   
}
