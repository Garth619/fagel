<section id='section-three'>

  <div id='sec-three-left'>

    <div id='sec-three-left-inner'>

      <span id='sec-three-title'><?php the_field('sec_three_title');?></span><!-- sec-three-title -->

      <span id='sec-three-intro'><?php the_field('sec_three_intro');?></span><!-- sec-three-intro -->

      <span id='sec-three-description'><?php the_field('sec_three_description');?></span>
      <!-- sec-three-description -->

      <a id='sec-three-button' class='button-two button-two-blue'
        href='<?php the_field('sec_three_button_link');?>'><?php the_field('sec_three_button_verbiage');?></a>
      <!-- button-two -->

      <div id='sec-three-arrows'>

        <div id='sec-three-arrow-left' class='sec-three-arrow'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow-new.svg'); ?>

        </div><!-- sec-three-arrow-left -->

        <span id='sec-three-arrow-counter'>

          <span id='first-number'>01</span> - <span id='second-number'></span>

        </span><!-- sec-three-arrow-counter -->

        <div id='sec-three-arrow-right' class='sec-three-arrow'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow-new.svg'); ?>

        </div><!-- sec-three-arrow-right -->

      </div><!-- sec-three-arrows -->

    </div><!-- sec-three-left-inner -->

  </div><!-- sec-three-left -->

  <div id='sec-three-right'>

    <div id='sec-three-slider'>

      <?php if (have_rows('sec_three_case_results')): ?>
      <?php while (have_rows('sec_three_case_results')): the_row();?>

      <div class='sec-three-single'>

        <span class='sec-three-single-amount'><?php the_sub_field('amount');?></span><!-- sec-three-single-amount -->

        <span class='sec-three-single-type'><?php the_sub_field('type');?></span><!-- sec-three-single-type -->

        <span class='sec-three-single-title'><?php the_sub_field('title');?></span>
        <!-- sec-three-single-title -->

        <span class='sec-three-single-desc'><?php the_sub_field('description');?></span>
        <!-- sec-three-single-desc -->

        <?php

    if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

        <a class='sec-three-single-button' href='<?php the_sub_field('case_results_link');?>'>Detalles</a>
        <!-- sec-three-single-button -->

        <?php else: ?>

        <a class='sec-three-single-button' href='<?php the_sub_field('case_results_link');?>'>Details</a>
        <!-- sec-three-single-button -->
        <!-- class -->

        <?php endif;?>

      </div><!-- sec-three-single -->

      <?php endwhile;?>
      <?php endif;?>

    </div><!-- sec-three-slider -->

  </div><!-- sec-three-right -->

</section><!-- section-three -->