<section class="three-c row" id="three-cee">

  <h2 class="col-xs-12"><?php the_field('development_title'); ?></h2>



  <div class="col-xs-12 col-sm-6 col-md-4 three-block">

    <div class="row">

      <div class="col-xs-12 pic">
        <?php $leftImage = get_field('development_left_image'); ?>

        <img src="<?php echo $leftImage['url']; ?>" />
      </div>

    </div>

    <div class="row">

      <h2 class="col-lg-12"><?php the_field('development_left_title'); ?></h2>

    </div>

    <div class="row">

      <p class="col-lg-10 col-lg-offset-1"><?php the_field('development_left_description'); ?></p>

    </div>

  </div>

  <div class="col-xs-12 col-sm-6 col-md-4 three-block">

    <div class="row">

      <div class="col-xs-12 pic">
        <?php $centerImage = get_field('development_center_image'); ?>
        <img src="<?php echo $centerImage['url']; ?>" />
      </div>

    </div>

    <div class="row">

      <h2 class="col-lg-12"><?php the_field('development_center_title'); ?></h2>

    </div>

    <div class="row">

      <p class="col-lg-10 col-lg-offset-1"><?php the_field('development_center_description'); ?></p>

    </div>

  </div>

  <div class="col-xs-12 col-sm-6 col-md-4 three-block">

    <div class="row">

      <div class="col-xs-12 pic">
        <?php $rightImage = get_field('development_right_image'); ?>
        <img src="<?php echo $rightImage['url']; ?>" />
      </div>
    </div>

    <div class="row">

      <h2 class="col-lg-12"><?php the_field('development_right_title'); ?></h2>

    </div>

    <div class="row">

      <p class="col-lg-10 col-lg-offset-1"><?php the_field('development_right_description'); ?></p>

    </div>

  </div>



</section>
<!-- end of three-c row -->
