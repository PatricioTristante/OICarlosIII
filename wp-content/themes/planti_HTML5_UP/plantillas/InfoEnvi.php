<?php
/*
Template Name: Plantilla Envio
*/
session_start();

function enviar_correo(){
    $datos = $_SESSION['datos'];
    
    $destinatario = $datos['correo'];
    $asunto = 'Inscripción Olimpiada Informática';
    $mensaje = get_field('mensaje_correo');
    if(isset($datos['advertencia'])){
        $mensaje .= ', pero se ha producido un error en la inscripción de uno o varios alumnos:
        ' . $datos['advertencia'] . ', por favor, contacte con el administrador para solucionarlo';
    }
    
    custom_wp_mail($destinatario, $asunto, array(
        'mensaje' => $mensaje,
        'grupo' => $datos['grupo'],
        'alumnos' => $datos['alumnos'],
        'categoria' => $datos['categoria'],
		'centro' => $datos['centro']
    ));
    
}


enviar_correo();
?>
<?php get_header(); ?>


            <div class="image main" data-position="center">
            	<img src="<?= add_banner() ?>" class="banner" alt="" />
            </div>

            <br>

            <?php
                $titulo = get_field('titulo');
                $texto = get_field('texto');
                $nota = get_field('nota');

            ?>
            <div>
                <h3><?= $titulo ?></h3>
                <h4><?= $texto ?></h2>
                <p><?= $nota ?></p>
                <?php if(isset($_SESSION['datos']['advertencia'])): ?>
                    <p><?= $_SESSION['datos']['advertencia'] ?>, por favor, contacte con el administrador para solucionarlo</p>
                <?php endif; ?>
            </div>

<?php session_destroy(); ?>
<?php get_footer(); ?>
