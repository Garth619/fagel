<section id='section-six'>

  <div id='sec-six-inner'>

    <div id='sec-six-top'>

      <span id='sec-six-header'><?php the_field('sec_six_title');?></span><!-- sec-six-header -->

      <div id='sec-six-descrip' class='content'>

        <?php the_field('sec_six_description');?>

      </div><!-- sec-six-descrip -->

      <a id='sec-six-button' class='button' href='<?php the_field('sec_six_button_link');?>'>

        <button><?php the_field('sec_six_button_verbiage');?>

          <span class='button-tri'></span><!-- button-tri -->

        </button></a><!-- sec-six-button -->

    </div><!-- sec-six-top -->

    <div id='sec-six-bottom' class='grid'>

      <?php if (have_rows('sec_six_practice_areas')): ?>
      <?php while (have_rows('sec_six_practice_areas')): the_row();?>

      <div class='sec-six-single grid-item'>
        <div class='sec-six-single-inner'>

          <div class='sec-six-title'>

            <?php $icon = get_sub_field('icon');?>
            <?php if ($icon) {?>
            <img class='lazyload' data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
            <?php }?>

            <span><?php the_sub_field('title');?></span>

          </div><!-- sec-six-title -->

          <span class='sec-six-descrip'><?php the_sub_field('description');?></span><!-- sec-six-descrip -->

          <a class='learn-more'
            href='<?php the_sub_field('learn_more_link');?>'><?php the_sub_field('learn_more_verbiage');?></a>
          <!-- learn-more -->

        </div><!-- sec-six-single-inner -->

      </div><!-- sec-six-single grid-item -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- sec-six-bottom -->

  </div><!-- sec-six-inner -->

</section><!-- section-six -->