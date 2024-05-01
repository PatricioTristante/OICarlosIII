<?php
/*
Template Name: Plantilla Envio
*/

function enviar_correo(){
    $to = $_GET['correo'];
    $subject = 'Inscripcion Olimpiada Informatica';
    if(isset($_GET['advertencia'])){
        $mensaje = 'La inscripcion se ha realizado con exito, pero se ha producido un error 
        en la inscripcion de uno o varios alumnos: ' . $_GET['advertencia'] . ', 
        por favor, contacte con el administrador para solucionarlo';
    }else{
        $mensaje = 'La inscripcion se ha realizado con exito';
    }
    wp_mail($to, $subject, $mensaje);
}


enviar_correo();
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