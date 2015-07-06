<section class="skillset row" id="skill-nav">

  <?php $skills = get_field('skillset_skills'); ?>
  <!-- <pre><?php print_r($skills); ?></pre> -->

  <h2 class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-12 col-lg-offset-0">
    <?php the_field('skillset_title'); ?>
  </h2>

  <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-6 col-lg-8 skill-pic">

    <?php $skillsetImage = get_field('skillset_image'); ?>
    <img src="<?php echo $skillsetImage['url']; ?>" />

  </div>



  <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-5 col-lg-offset-0 col-lg-4">

    <ul class="skill-list row">

      <?php for ($i = 0;$i < count($skills); $i++) : ?>
      <li class="col-sm-6 col-md-12">
        <h2><?php echo $skills[$i]['title']; ?></h2>
        <ul>
          <?php for ($q =0; $q < count($skills[$i]['repeater']); $q++) : ?>
            <li><?php echo $skills[$i]['repeater'][$q]['description']; ?></li>
          <?php endfor; ?>
        </ul>
      </li>
      <?php endfor; ?>
    </ul>

  </div>

</section> <!-- end of skills div -->
