<?php
/*
Template Name: Administración
*/
?>
<?php
require_once ('wp-config.php');
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
        <?php if(isset($_GET['edicion']) || isset($_GET['crearEdicion'])) : ?>
            <section>
                <div class="container">
                    <h2><?= isset($_GET['edicion']) ? "¡Edición elegida correctamente!" : "¡Edición creada correctamente!" ?></h2>
                </div>
            </section>
        <?php endif; ?>

        <section>
            <div class="container">
                <?php 
                $elegida = $wpdb->get_row("SELECT * FROM edicion_elegida");
                $edicion = $wpdb->get_row("SELECT * FROM ediciones WHERE id = " . $elegida->edicion_id); ?>
                <h3>Edición actual: <?= $edicion->curso_escolar ?></h3>
                <h4>¿Que deseas hacer?</h4>
                <div class="flex">
                    <button class="boton" id="elegir">
                        Elegir edición
                    </button>

                    <button class="boton" id="crear">
                        Crear edición
                    </button>
                </div>
            </div>


        </section>

        <section>
            <div class="administrar oculto" id="elegirEdicion">
                <div class="container">
                    <?php
                    $ediciones = $wpdb->get_results("SELECT * FROM ediciones");
                    ?>
                    <h3>¿Que edición quieres elegir?</h3>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <input type="hidden" name="action" value="elegir_edicion">
                        <select name="edicion" id="edicion" required>
                            <option value="">- Elige una edición -</option>
                            <?php foreach ($ediciones as $edicion) : ?>
                                <option value="<?= $edicion->id ?>"><?= $edicion->curso_escolar ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <input type="submit" value="Elegir">
                    </form>
                </div>
            </div>
            <div class="administrar oculto" id="crearEdicion">
                <div class="container">
                    <h3>Crear edición</h3>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <input type="hidden" name="action" value="crear_edicion">
                        <label for="id" class="oculto">ID de la edición</label>
                        <input type="number" name="id" id="id" placeholder="ID de la edición">
                        <br>
                        <br>
                        <label for="curso_escolar" class="oculto">Curso escolar</label>
                        <input type="text" name="curso_escolar" id="curso_escolar" placeholder="Curso Escolar (aaaa-aaaa)">
                        <br>
                        <label for="num_olimpiada" class="oculto">Número de Olimpiada</label>
                        <input type="text" name="num_olimpiada" id="num_olimpiada" placeholder="Número de Olimpiada">
                        <br>
                        <label for="num_modding" class="oculto">Número de Modding</label>
                        <input type="text" name="num_modding" id="num_modding" placeholder="Número de Modding">
                        <br>
                        <label for="num_c3runner" class="oculto">Número de C3Runner</label>
                        <input type="text" name="num_c3runner" id="num_c3runner" placeholder="Número de C3Runner">
                        <br>
                        <label for="fecha_celebracion">Fecha de celebración</label>
                        <input type="date" name="fecha_celebracion" id="fecha_celebracion">
                        <br>
                        <label for="fecha_apertura">Fecha de apertura</label>
                        <input type="date" name="fecha_apertura" id="fecha_apertura">
                        <br>
                        <label for="fecha_cierre">Fecha de cierre</label>
                        <input type="date" name="fecha_cierre" id="fecha_cierre">
                        <br>
                        <br>
                        <label for="css_file" class="oculto">Archivo CSS</label>
                        <input type="text" name="css_file" id="css_file" placeholder="Archivo CSS (Nombre del Archivo)">
                        <br>
                        <label for="banner" class="oculto">Banner</label>
                        <input type="text" name="banner" id="banner" placeholder="Banner (Nombre del archivo o url, ambas formas se aceptan)">
                        <br>
                        <input type="checkbox" name="activa" id="activa">
                        <label for="activa">Elegir esta edición como la edición activa</label>
                        <br>
                        <input type="submit" value="Crear">
                    </form>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>