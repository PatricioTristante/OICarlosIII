<!DOCTYPE html>
<html>
 <head>
   <title><?= get_bloginfo('name') ?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="<?= get_template_directory_uri() ?>/images/centro/cifpcarlosiii.svg">
   <!-- Agregar jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- SWIPER -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <!-- SELECT2 SCRIPT Y CSS -->
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <!-- FUNCIONES PERSONALIZADAS DE JAVASCRIPT -->
   <?php if(is_front_page()) : ?>
    <script src="<?= get_template_directory_uri() ?>/assets/js/custom/custom.js"></script>
   <?php endif; ?>
   <?php if(is_page_template('plantillas/administracion.php')) : ?>
    <script src="<?= get_template_directory_uri() ?>/assets/js/custom/administracion.js"></script>
    <?php endif; ?>

   <?php wp_head(); ?>
 </head>
 <body <?php body_class('is-preload'); ?>>