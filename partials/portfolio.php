<section class="portfolio row" id="portfolio-id">

  <h2 class="col-lg-12">previous work</h2>


  <?php
    global $post;
    $portfolioItems = get_field('homepage_portfolio_item');
    foreach ($portfolioItems as $post) :
      $portfolioImage = get_field('portfolio_image');
  ?>

  <a class="col-xs-offset-1 col-xs-10 col-sm-4 col-md-3 port-hold" href="http://dev3.stevequatrale.com">
    <img class="project-pic" id="creative" src="<?php echo $portfolioImage['url']; ?>" />
    <div class="overlay"><?php the_title(); ?></div>
  </a>
  <?php
    endforeach;
    wp_reset_query();
  ?>

</section>
