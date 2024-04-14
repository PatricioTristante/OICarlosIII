<?php
/*
Template Name: Plantilla Envio
*/
?>
<?php get_header(); ?>


            <div class="image main" data-position="center">
            	<img src="<?= add_banner() ?>" class="banner" alt="" />
            </div>

            <br>

            <?php
                $texto = get_field('texto');
            ?>
            <div>
                <h3><?= $texto ?></h3>
            </div>

            <!-- TODO Hacer que redirija a home -->

<?php get_footer(); ?>