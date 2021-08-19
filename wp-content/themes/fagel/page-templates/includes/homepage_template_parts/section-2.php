<section id='section-two'>

  <div id='sec-two-inner' class='content'>

    <div class='sec-two-col'>

      <h1><?php the_field('sec_two_title');?></h1>

      <?php $sec_two_image = get_field('sec_two_image');?>
      <?php if ($sec_two_image) {?>
      <div id='sec-two-img'>
        <img class="lazyload" data-src="<?php echo $sec_two_image['url']; ?>"
          alt="<?php echo $sec_two_image['alt']; ?>" />
      </div><!-- sec-two-img -->
      <?php }?>

      <?php if (get_field('sec_two_intro')) {?>
      <div id='sec-two-intro'>
        <?php the_field('sec_two_intro');?>
      </div><!-- sec-two-intro -->
      <?php }?>

      <?php if (get_field('sec_two_intro_two')) {?>
      <div id='sec-two-intro-two'>
        <?php the_field('sec_two_intro_two');?>
      </div><!-- sec-two-intro-two -->
      <?php }?>

      <?php the_field('sec_two_column_one');?>

    </div><!-- sec-two-col -->

    <div class='sec-two-col'>

      <?php the_field('sec_two_column_two');?>

    </div><!-- sec-two-col -->

  </div><!-- sec-two-inner -->

</section><!-- section-two -->