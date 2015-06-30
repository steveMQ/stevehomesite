<section class="slidearea row">

  <!--
  <img src="assets/imgs/coolpic2.jpg" class="coolpic col-sm-12" />
  -->

  <div class="col-sm-offset-2 col-sm-8 col-md-4 col-md-offset-1 col-xs-12 blurb">

    <h2><?php the_field('heading_title'); ?></h2>

    <?php the_field('heading_content'); ?>

    <button id="lets-talk"><?php the_field('heading_button_text'); ?></button>

  </div>

  <div class="col-md-6 col-md-offset-1">
    <?php
      // gets the image object, which is an associative array and assign to a variable.
      // Below we access the url by the key name, 'url'
      $headingImage = get_field('heading_image');
    ?>
    <img class="macpic" src="<?php echo $headingImage['url']; ?>" />
  </div>


</section>	<!-- end of slidearea section -->
