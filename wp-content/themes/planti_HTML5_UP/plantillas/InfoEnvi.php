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
                <?php if(isset($_GET['advertencia'])): ?>
                    <p><?= $_GET['advertencia'] ?>, por favor, contacte con el administrador para solucionarlo</p>
                <?php endif; ?>
            </div>


<?php get_footer(); ?>