<?php
/*
Template Name: Plantilla base
*/
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
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
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
							<section id="three">
								<div class="container">
									<h3>Contact Me</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
											<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
											<div class="col-12"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
											<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" class="primary" value="Send Message" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								
							</section>

						<!-- Five -->
							
							<section id="five">
								<div class="container">
									<h3>A Few Accomplishments</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="<?= get_template_directory_uri() ?>/images/pic01.jpg" alt="" /></a>
											<div class="inner">
												<h4>Possibly broke spacetime</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="<?= get_template_directory_uri() ?>/images/pic02.jpg" alt="" /></a>
											<div class="inner">
												<h4>Terraformed a small moon</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="<?= get_template_directory_uri() ?>/images/pic03.jpg" alt="" /></a>
											<div class="inner">
												<h4>Snapped dark matter in the wild</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
									</div>
								</div>
							</section>
                        </div>


<?php get_footer(); ?>