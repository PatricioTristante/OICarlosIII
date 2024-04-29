<?php
/*
Template Name: Plantilla base
*/
?>
<?php
	require_once('wp-config.php');
	global $wpdb;
?>
<?php get_header(); ?>

<!-- Header -->
<section id="header">

			<!-- Header -->
			
				<?php
					$menu = get_field('menu');
				?>
				<header>
					<span class="image avatar"><img src="<?= get_template_directory_uri() ?>/images/centro/cifpcarlosiiiblanco.svg" alt="" /></span>
					<h1 id="logo"><a href="#"><?= $menu['titulo'] ?></a></h1>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active"><?= $menu['botones']['boton'] ?></a></li>
						<li><a href="#two"><?= $menu['botones']['boton2'] ?></a></li>
						<li><a href="#three"><?= $menu['botones']['boton3'] ?></a></li>
						<li><a href="#four"><?= $menu['botones']['boton4'] ?></a></li>
						<li><a href="#five"><?= $menu['botones']['boton5'] ?></a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="<?= $menu['enlaces']['enlace'] ?>" target="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="<?= $menu['enlaces']['enlace2'] ?>" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="<?= $menu['enlaces']['enlace3'] ?>" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="<?= $menu['enlaces']['enlace4'] ?>" target="_blank" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="<?= $menu['enlaces']['enlace5'] ?>" target="_blank" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<?php
								$bloque1 = get_field('bloque1');
							?>
							<section id="one">
								<div class="image main" data-position="center">
									<img src="<?= add_banner() ?>" class="banner" alt="" />
								</div>
								<div class="container">
									<header class="major">
										<h2><?= $bloque1['titulo'] ?></h2>
									</header>
									<p><?= $bloque1['texto'] ?></p>
									<ul>
										<li><?= $bloque1['lista']['punto'] ?></li>
										<li><?= $bloque1['lista']['punto2'] ?></li>
									</ul>
								</div>
							</section>

						<!-- Two -->
							<?php
								$bloque2 = get_field('bloque2');
							?>

							<section id="two">
								<div class="container">
									<h3><?= $bloque2['titulo'] ?></h3>
									<p><?= $bloque2['texto'] ?></p>
									<ul class="feature-icons">
										<li class="icon solid fa-code">  <?= $bloque2['lista']['elemento'] ?></li>
										<li class="icon solid fa-cubes"> <?= $bloque2['lista']['elemento2'] ?></li>
										<li class="icon solid fa-book">  <?= $bloque2['lista']['elemento3'] ?></li>
										<li class="icon solid fa-coffee"><?= $bloque2['lista']['elemento4'] ?></li>
										<li class="icon solid fa-bolt">  <?= $bloque2['lista']['elemento5'] ?></li>
										<li class="icon solid fa-users"> <?= $bloque2['lista']['elemento6'] ?></li>
									</ul>
								</div>
							</section>

						<!-- Three -->
							<?php
								$bloque3 = get_field('bloque3');
								$ciclos = "ciclos";
								$resultados = $wpdb->get_results("SELECT * FROM $ciclos");
								$categorias = "categorias";
								$resultados2 = $wpdb->get_results("SELECT * FROM $categorias");
							?>
							<section id="three">
								<div class="container">
									<h3><?= $bloque3['titulo'] ?></h3>
									<p><?= $bloque3['texto'] ?></p>
									<form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
										<input type="hidden" name="action" value="manejar_formulario">
										<div class="row gtr-uniform">
											<div class="col-12"><input type="checkbox" name="terminos" id="terminos" required><label for="terminos">Hemos leido y aceptado las bases</label></div>
											<div class="col-12">
												<?php
													$centros = $wpdb->get_results("SELECT * FROM centros");
												?>
												<select name="centro" id="centro" class="js-example-basic-single" required>
													<option value="" default>- Selecciona tu centro -</option>
													<?php foreach($centros as $centro):?>
														<option value="<?= $centro->id ?>"><?= $centro->dencen ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="col-12">
												<input type="text" name="prof_resp" id="prof_resp" placeholder="Profesor responsable*" required/>
											</div>
											<div class="col-12">
												<input type="text" name="email_prof_resp" id="email_prof_resp" placeholder="Correo Profesor responsable*" required/>
											</div>

											<?php
												$ciclos = $wpdb->get_results("SELECT * FROM ciclos");
											?>
											<div class="col-12">
												<select name="ciclo" id="ciclo" required>
													<option value="" default>- Selecciona la formacion profesional del grupo/alumno -</option>
													<?php foreach($ciclos as $ciclo):?>
														<option value="<?= $ciclo->id ?>" class="<?= $ciclo->grado_id ?>"><?= $ciclo->nombre ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											
											

											<?php
												$categorias = $wpdb->get_results("SELECT * FROM categorias");
											?>
											<div class="col-12">
												<select name="categoria" id="categoria" disabled required>
													<option value="" default>- Selecciona la categoria en la que participará el grupo/alumno -</option>
													<?php foreach($categorias as $categoria):?>
														<option value="<?= $categoria->id ?>"><?= $categoria->nombre ?></option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="col-12 oculto grupo">
												<input type="text" name="grupo" id="grupo" placeholder="Nombre del grupo*" required/>
											</div>
											<?php for ($i=1; $i <= 7; $i++): ?>
												<div class="col-6 col-12-xsmall oculto alumnos"><input type="text" name="nombre<?= $i ?>" id="nombre<?= $i ?>" placeholder="Nombre Alumno <?= $i == 1 ? $i . "*" : $i ?>" <?= $i == 1 ? "required" : ""?>/></div>
												<div class="col-6 col-12-xsmall oculto dnis"><input type="text" name="dni<?= $i ?>" id="dni<?= $i ?>" placeholder="DNI Alumno <?= $i == 1 ? $i . "*" : $i ?>" <?= $i == 1 ? "required" : ""?>/></div>
											<?php endfor; ?>
											

											
											
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" class="primary" value="Enviar Inscripcion" /></li>
													<li><input type="reset" value="Reiniciar Formulario" /></li>
												</ul>
											</div>
											<span>(Los campos con * son obligatorios)</span>
										</div>
									</form>
								</div>
							</section>


						<!-- Four -->
							<section id="four">
								
							</section>

						<!-- Five -->
							<?php
								$bloque4 = get_field('bloque4');
							?>
							<section id="five">
								<div class="container">
									<h3><?= $bloque4['titulo'] ?></h3>
									<p><?= $bloque4['texto'] ?></p>
									<div class="features">
										<?php
										$patrocinadores = $wpdb->get_results("SELECT * FROM patrocinadores");
											if($patrocinadores):
												if(count($patrocinadores) <= 3):?>
													<?php foreach($patrocinadores as $patrocinador):?>
														<article>
															<?php if(filter_var($patrocinador->logotipo, FILTER_VALIDATE_URL)): ?>
																<img src="<?= $patrocinador->logotipo ?>" class="image" alt="" />
															<?php else: ?>
																<img src="<?= get_template_directory_uri() ?>/images/patrocinadores/<?= $patrocinador->logotipo ?>" class="image" alt="" />ç
															<?php endif; ?>
															<div class="inner">
																<h4><?= $patrocinador->nombre ?></h4>
															</div>
														</article>
													<?php endforeach; ?>
												<?php else: ?>
													<div class="swiper">
														<div class="swiper-wrapper mi_swiper_wrapper">
														<?php foreach($patrocinadores as $patrocinador):?>
															<div class="swiper-slide">
																<?php if(filter_var($patrocinador->logotipo, FILTER_VALIDATE_URL)): ?>
																	<img src="<?= $patrocinador->logotipo ?>" class="image logo" alt="" />
																<?php else: ?>
																	<img src="<?= get_template_directory_uri() ?>/images/patrocinadores/<?= $patrocinador->logotipo ?>" class="image logo" alt="" />
																<?php endif; ?>
																<div class="inner">
																	<h4 class="centrar-texto"><?= $patrocinador->nombre ?></h4>
																</div>
															</div>
														<?php endforeach; ?>
														</div>
														<div class="swiper-pagination"></div>
    													<div class="autoplay-progress">
    													  <svg viewBox="0 0 48 48">
    													    <circle cx="24" cy="24" r="20"></circle>
    													  </svg>
    													  <span></span>
    													</div>
													</div>
												<?php endif; ?>
											<?php endif; ?>
									</div>
								</div>
							</section>
                        </div>


<?php get_footer(); ?>