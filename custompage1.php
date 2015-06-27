<?php

/* Template Name: custompage */

?>

  <?php get_header(); the_post(); ?>


	<div id="home"></div>


	<?php get_template_part('partials/slidearea.php'); ?>



	<section class="skillset row" id="skill-nav">



		<h2 class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-12 col-lg-offset-0">what i do</h2>

		<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-6 col-lg-8 skill-pic">

			<img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/iphones.png" />

		</div>



		<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-5 col-lg-offset-0 col-lg-4">

			<ul class="skill-list row">

				<li class="col-sm-6 col-md-12">
					<h2>HTML5</h2>
					<ul>
						<li>New elements</li>
						<li>Full CSS3 support</li>
						<li>Video & Audio</li>
						<li>2D/3D graphics</li>
						<li>Local SQL database</li>
					</ul>

				</li>
				<li class="col-sm-6 col-md-12">
					<h2>CSS3</h2>
					<ul>
						<li>Impressive, highly-customizable styling options for websites</li>
						<li>Animations</li>
						<li>Multi-column layouts</li>
						<li>Text effects</li>
						<li>3D transformations</li>

					</ul>

				</li>
				<li class="col-sm-6 col-md-12">
					<h2>Javascript/jQuery</h2>
					<ul>
						<li>Highly advanced customization</li>
						<li>Animations</li>
						<li>Transitions</li>
						<li>Slideshows</li>
						<li>Advanced logic</li>
						<li>The list could go on forev...</li>
					</ul>

				</li>
				<li class="col-sm-6 col-md-12">
					<h2>Resonsive Design</h2>
					<ul>
						<li>Automatically morphs layout based on your device size</li>
						<li>Computer layout</li>
						<li>Tablet layout</li>
						<li>Mobile phone layout</li>
						<li>All-in-one code: no separate mobile site!</li>
					</ul>

				</li>

			</ul>

		</div>






	</section>

	<!-- end of skills div -->


	<section class="three-c row" id="three-cee">

		<h2 class="col-xs-12">development</h2>



		<div class="col-xs-12 col-sm-6 col-md-4 three-block">

			<div class="row">

				<div class="col-xs-12 pic">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/consultation.png" />
				</div>

			</div>

			<div class="row">

				<h2 class="col-lg-12">Consultation</h2>

			</div>

			<div class="row">

				<p class="col-lg-10 col-lg-offset-1">Let's start a dialogue.<br/> We can discuss the details and figure out a price quote.</p>

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 three-block">

			<div class="row">

				<div class="col-xs-12 pic">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/creation.png" />
				</div>

			</div>

			<div class="row">

				<h2 class="col-lg-12">Creation</h2>

			</div>

			<div class="row">

				<p class="col-lg-10 col-lg-offset-1">Your custom website will be created from scratch</p>

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 three-block">

			<div class="row">

				<div class="col-xs-12 pic">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/completion.png" />
				</div>
			</div>

			<div class="row">

				<h2 class="col-lg-12">Completion</h2>

			</div>

			<div class="row">

				<p class="col-lg-10 col-lg-offset-1">Officially publish your new website!</p>

			</div>

		</div>



	</section>
	<!-- end of three-c row -->


	<section class="portfolio row" id="portfolio-id">

		<h2 class="col-lg-12">previous work</h2>

		<a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://yankeelobstercompany.com">
			<img class="project-pic" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/lobstahh.png" />
			<div class="overlay">Yankee Lobster Company</div>
		</a>

		<a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://dev3.stevequatrale.com">
			<img class="project-pic" id="creative" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/creative.png" />
			<div class="overlay">Creative</div>
		</a>

		<a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://dev1.stevequatrale.com">
			<img class="project-pic" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/swiss.png" />
			<div class="overlay">Swiss</div>
		</a>

		<a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://dev2.stevequatrale.com">
			<img class="project-pic" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/centy.png" />
			<div class="overlay">Centy</div>
		</a>

		<a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://dev.stevequatrale.com">
			<img class="project-pic" id="travl" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/travlerLogo.png" />
			<div class="overlay">Travler</div>
		</a>



	</section>

	<section class="row" id="contact">

		<div class="col-lg-12">

			<div class="row" id="contact-header">

				<div class="col-lg-8 col-lg-offset-2">

					<h2>contact me</h2>

				</div>

			</div>


			<div class="row">

					<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2" id="contact-description">
						<p>I love good ideas, big challenges and forward thinking clients. Have an idea? Contact me below!</p>
					</div>

			</div>

			<form method="POST" action="/index.php">

				<div class="row">

					<input class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3" type="text" id="theName" placeholder="Your name:">

				</div>

				<div class="row">

					<input class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3" type="text" id="theEmail" placeholder="Your email:">

				</div>

				<div class="row">

					<textarea  id="input-msg" class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3" type="text" name="message" placeholder="Your message"></textarea>

				</div>

				<div class="row">

					<div class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-lg-2 col-lg-offset-5" id="sb-hold">

						<input type="submit" value="Submit" id="submit-button">

					</div>

				</div>

			</form>

			<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2" id="message">Thank you for your interest, i'll be in touch soon.</div>

		</div>

	</section>

<?php get_footer(); ?>
