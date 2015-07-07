<section class="portfolio row" id="portfolio-id">

  <h2 class="col-lg-12">previous work</h2>

  <?php

    $args = array(
        'post_type'=> 'portfolio'
        );

    $the_query = new WP_Query( $args );
    if($the_query->have_posts() ) :
      while ( $the_query->have_posts() ) :
        $the_query->the_post();
        $portfolioImage = get_field('portfolio_image');
  ?>
  <a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://dev3.stevequatrale.com">
    <img class="project-pic" id="creative" src="<?php echo $portfolioImage['url']; ?>" />
    <div class="overlay"><?php the_title(); ?></div>
  </a>
  <?php endwhile; ?>
  <?php endif; ?>




  <!--a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://yankeelobstercompany.com">
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
  </a-->



</section>
