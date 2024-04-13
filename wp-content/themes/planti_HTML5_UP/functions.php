<?php
// Esta funcion carga el CSS de la pagina desde la base de datos
// Se coge de la tabla ediciones, del campo edicion_11.css, el valor que corresponde a la edicion actual
function add_CSS() {
   global $wpdb;
   $ediciones = $wpdb->get_results("SELECT * FROM ediciones WHERE curso_escolar = '2023-2024'");
   if(count($ediciones) == 0) {
       return;
   }
   $css_file = $ediciones[0]->css_file;
   wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/' . $css_file);
}

// Esta funcion carga el banner de la pagina desde la base de datos
// Se coge de la tabla ediciones, del campo banner, el valor que corresponde a la edicion actual
function add_banner() {
   global $wpdb;
   $ediciones = $wpdb->get_results("SELECT banner FROM ediciones WHERE curso_escolar = '2023-2024'")[0];
   $banner = $ediciones->banner;
   return get_template_directory_uri() . '/images/banners/' . $banner;
}

add_action('wp_enqueue_scripts', 'add_CSS');