<?php

/* Template Name: Att Bio */

get_header();?>

<div id="internal-main" class='bio-banner'>

  <div id='bio-banner-wrapper'>

    <div id='bio-banner-inner'>

      <div id='bio-banner-left'>

      </div><!-- bio-banner-left -->

      <div id='bio-banner-right'>

        <h1 id='bio-title'><?php the_title();?></h1>

        <?php if (get_field('attorney_positions')) {?>

        <span id='bio-position'><?php the_field('attorney_positions');?></span><!-- bio-position -->

        <?php }?>

      </div><!-- bio-banner-right -->

    </div><!-- bio-banner-inner -->

    <img id='bio-banner-image' src='<?php bloginfo('template_directory');?>/images/int.jpg' alt='' />

  </div><!-- bio-banner-wrapper -->

  <div id='bio-page-container'>

    <div id='bio-page-content' class='content'>

      <?php $attorney_bio_image = get_field('attorney_bio_image');?>

      <div class='bio-img-wrapper'>

        <?php if ($attorney_bio_image): ?>

        <img src="<?php echo $attorney_bio_image['url']; ?>" alt="<?php echo $attorney_bio_image['alt']; ?>" />

        <?php else: ?>

        <img src='<?php bloginfo('template_directory');?>/images/ps.jpg' alt='' />

        <?php endif;?>

      </div><!-- bio-img-wrapper -->

      <?php the_content();?>

    </div><!-- bio-page-content -->

    <div id='bio-sidebar-wrapper'>

      <div class='bio-img-wrapper'>

        <?php if ($attorney_bio_image): ?>

        <img src="<?php echo $attorney_bio_image['url']; ?>" alt="<?php echo $attorney_bio_image['alt']; ?>" />

        <?php else: ?>

        <img src='<?php bloginfo('template_directory');?>/images/ps.jpg' alt='' />

        <?php endif;?>

      </div><!-- bio-img-wrapper -->

      <div id='sidebars'>

        <?php if (have_rows('sidebar_box')): ?>

        <?php while (have_rows('sidebar_box')): the_row();?>

        <div class='widget'>

          <h3><?php the_sub_field('title');?></h3>

          <?php if (have_rows('sidebar_list')): ?>

          <ul>

            <?php while (have_rows('sidebar_list')): the_row();?>

            <li> <?php the_sub_field('list_item');?></li>

            <?php endwhile;?>

          </ul>

          <?php endif;?>

        </div><!-- widget -->

        <?php endwhile;?>

        <?php endif;?>

        <?php if (have_rows('achievements_sidebar_box')): ?>

        <?php while (have_rows('achievements_sidebar_box')): the_row();?>

        <div class='widget'>

          <h3><?php the_sub_field('title');?></h3>

          <?php if (have_rows('buttons')): ?>

          <div id='bio-button-wrapper'>

            <?php while (have_rows('buttons')): the_row();?>

            <a class='bio-button button-two button-two-black' href='<?php the_sub_field('page_link');?>'>
              <?php the_sub_field('button_verbiage');?></a>
            <!-- button-two button-two-blue -->

            <?php endwhile;?>

          </div><!-- bio-button-wrapper -->

          <?php endif;?>

        </div><!-- widget -->

        <?php endwhile;?>

        <?php endif;?>

        <?php if (get_field('blog_youtube_id', 'option') || get_field('blog_video_title', 'option')): ?>

        <div class='widget video-widget'>

          <h3><?php the_field('video_sidebar_box_title');?></h3>

          <?php

if (get_field('blog_youtube_id', 'option') || get_field('blog_video_title', 'option')) {

    get_template_part('page-templates/includes/template', 'sidebar_video');

}

?>

        </div><!-- widget -->

        <?php endif;?>

      </div><!-- sidebars -->

    </div><!-- bio-sidebar-wrapper -->

  </div><!-- bio-page-container -->

</div><!-- internal-main -->

<?php get_footer();?>