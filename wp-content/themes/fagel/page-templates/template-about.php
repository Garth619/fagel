<?php

/* Template Name: About */

get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/page_banner/template', 'banner_layout_video');?>

  <div id='page-container'>

    <div id='about-wrapper'>

      <span id='about-title' class='page-title'><?php the_field('about_subtitle');?></span><!-- about-title -->

      <div id='about-inner' class='content'>

        <div class='about-col'>

          <?php the_field('about_column_one');?>

        </div><!-- about-col -->

        <div class='about-col'>

          <div id='about-caption-wrapper'>

            <div id='about-image'>

              <?php $about_image = get_field('about_image');?>
              <?php if ($about_image) {?>
              <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
              <?php }?>

            </div><!-- about-image -->

            <div id='about-caption'>

              <?php the_field('about_caption');?>

            </div><!-- about-caption -->

          </div><!-- about-caption-wrapper -->

          <?php the_field('about_column_two');?>

        </div><!-- about-col -->

      </div><!-- about-inner -->

    </div><!-- about-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>