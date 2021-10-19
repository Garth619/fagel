<section id='section-five'>

  <div id='sec-five-left'>

    <img class='lazyload' data-src='<?php bloginfo('template_directory');?>/images/img-test.jpg' alt='' />

  </div><!-- sec-five-left -->

  <div id='sec-five-right'>

    <span id='sec-five-title'><?php the_field('sec_five_title');?></span><!-- sec-five-title -->

    <div id='sec-five-slider'>

      <div id='sec-five-slider-inner'>

        <?php if (have_rows('sec_five_testimonials')): ?>
        <?php while (have_rows('sec_five_testimonials')): the_row();?>

        <div class='sec-five-single'>

          <img class='lazyload' data-src='<?php bloginfo('template_directory');?>/images/test-stars.svg' alt='' />

          <div class='sec-five-description'><?php the_sub_field('testimonial');?></div><!-- sec-five-description -->

          <span class='sec-five-name'><?php the_sub_field('name');?></span><!-- sec-five-name -->

        </div><!-- sec-five-single -->

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- sec-five-slider-inner -->

      <div id='sec-five-arrows-wrapper'>

        <div id='sec-five-quote'>

          <img class='lazyload' data-src='<?php bloginfo('template_directory');?>/images/test-quote.svg' alt='' />

        </div><!-- sec-five-quote -->

        <div id='sec-five-arrows'>

          <div id='sec-five-arrow-left' class='sec-five-arrow'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-new.svg'); ?>

          </div><!-- sec-five-arrow-left -->

          <span id='sec-five-arrow-counter'>

            <span id='first-number'>01</span> - <span id='second-number'></span>

          </span><!-- sec-five-arrow-counter -->

          <div id='sec-five-arrow-right' class='sec-five-arrow'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-new.svg'); ?>

          </div><!-- sec-five-arrow-right -->

        </div><!-- sec-five-arrows -->

        <a id='sec-five-button' class='button-two button-two-black'
          href='<?php the_field('sec_five_button_link');?>'><?php the_field('sec_five_button_verbiage');?></a>
        <!-- button -->

      </div><!-- sec-five-arrows-wrapper -->

    </div><!-- sec-five-slider -->

  </div><!-- sec-five-right -->

</section><!-- section-five -->