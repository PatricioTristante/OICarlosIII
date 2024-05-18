<?php
/*
Template Name: Plantilla Equipos
*/
?>
<?php
	require_once('wp-config.php');
	global $wpdb;
?>
<?php get_header(); ?>




<!-- Wrapper -->
<div>

<!-- Main -->
    <div id="main">


            <section>
                <div class="image main" data-position="center">
                    <img src="<?= add_banner() ?>" class="banner" alt="" />
                </div>
            </section>

            <section>
                <?php 
                    $categorias = "SELECT * FROM categorias";
                    $categorias = $wpdb->get_results($categorias);
                    foreach ($categorias as $categoria):
                    $grupos = "SELECT * FROM grupos WHERE categoria_id = $categoria->id";
                ?>
                <div class="container">
                    <table class="textoNegro">
                        <tr class="cabeceraTabla">
                            <td class="textoBlanco">
                                <p>Categoría:</p>
                            </td>
                            <td colspan="2" class=" textoBlanco">
                                <p><?= $categoria->nombre ?></p>
                            </td>
                        </tr>
                        <tr class="subcabeceraTabla">
                            <td>
                                <p>Nombre grupo</p>
                            </td>
                            <td>
                                <p>Tutor</p>
                            </td>
                            <td>
                                <p>Nº Participantes</p>
                            </td>
                        </tr>
                        <?php 
                            $grupos = $wpdb->get_results($grupos);
                            foreach ($grupos as $grupo):
                            $cantidadParticipantes = "SELECT COUNT(*) FROM participantes WHERE grupo_id = $grupo->id";
                            $tutor = "SELECT * FROM users WHERE id = $grupo->tutor";
                            $tutor = $wpdb->get_row($tutor);
                        ?>
                        <tr>
                            <td>
                                <p><?= $grupo->nombre ?></p>
                            </td>
                            <td>
                                <p><?= $tutor->nombre ?> <?= $tutor->apellidos ?></p>
                            </td>
                            <td>
                                <p><?= $wpdb->get_var($cantidadParticipantes) ?></p>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endforeach; ?>
            </section>

<?php get_footer(); ?>