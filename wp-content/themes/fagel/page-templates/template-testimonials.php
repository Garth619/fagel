<?php

/* Template Name: Testimonials

Template Post Type: page, espanol */

get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/page_banner/template', 'banner_page_title');?>

  <div id='page-container'>

    <?php if (have_rows('video_testimonials')): ?>

    <div id='testi-videos-wrapper'>

      <span class='sub-title'><?php the_field('video_testimonials_title');?></span><!-- sub-title -->

      <div id='testi-videos'>

        <div id='testi-videos-slider'>

          <?php while (have_rows('video_testimonials')): the_row();?>

          <div class='testi-single-video'>

            <div class='testi-single-video-thumb video-container'>

              <div data-lity-target='https://www.youtube.com/embed/<?php the_sub_field('youtube_id');?>' data-lity>

                <img class='vid-thumb' src="https://img.youtube.com/vi/<?php the_sub_field('youtube_id');?>/0.jpg" />

                <div class='vid-overlay'>

                  <span class='testi-video-play-button play-button'>

                    <span></span>

                  </span><!-- play-button -->

                </div><!-- vid-overlay -->

              </div>

            </div><!-- testi-single-video-thumb -->

            <span class='testi-single-video-title'><?php the_sub_field('title');?></span>
            <!-- testi-single-video-title -->

            <span class='testi-single-video-descr'><?php the_sub_field('description');?></span>
            <!-- testi-single-video-descr -->

          </div><!-- testi-single-video -->

          <?php endwhile;?>

        </div><!-- testi-videos-slider -->

        <span id='testi-videos-arrow-left' class='testi-videos-arrow'>Prev</span><!-- testi-videos-arrow-left -->

        <span id='testi-videos-arrow-right' class='testi-videos-arrow'>Next</span><!-- testi-videos-arrow-right -->

      </div><!-- testi-videos -->

    </div><!-- testi-videos-wrapper -->

    <?php endif;?>

    <?php if (!have_rows('video_testimonials')) {

    $removeMargin = 'removemargin';

}?>

    <?php if (have_rows('testimonials')): ?>

    <div id='testi-text' class='<?php echo $removeMargin; ?>'>

      <span class='sub-title'><?php the_field('testimonials_title');?></span>
      <!-- sub-title -->

      <div id='testi-text-inner'>

        <?php while (have_rows('testimonials')): the_row();?>

        <div class='testi-text-single'>

          <div class='testi-text-left'>

            <img src='<?php bloginfo('template_directory');?>/images/test-quote.svg' alt='' />

            <img src='<?php bloginfo('template_directory');?>/images/test-stars.svg' alt='' />

          </div><!-- testi-text-left -->

          <div class='testi-text-right'>

            <div class='testi-descrip'>

              <?php the_sub_field('description');?>

              <span class='testi-name'> <?php the_sub_field('name');?></span><!-- testi-name -->

            </div><!-- testi-descrip -->

          </div><!-- testi-text-right -->

        </div><!-- testi-text-single -->

        <?php endwhile;?>

      </div><!-- testi-text-inner -->

    </div><!-- testi-text -->

    <?php endif;?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>