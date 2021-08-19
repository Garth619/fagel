<?php

/* Template Name: Meet the Team */

get_header();?>

<div id="internal-main" class='no-banner'>

  <div id='page-container'>

    <h1 class="page-title"><?php the_title();?></h1>

    <div id='meet-team-wrapper'>

      <?php if (have_rows('meet_the_team')): ?>

      <?php while (have_rows('meet_the_team')): the_row();?>
      <?php $post_object = get_sub_field('attorney');?>

      <?php if ($post_object): ?>

      <?php $post = $post_object;?>

      <?php setup_postdata($post);?>

      <div class='single-att'>

        <a href='<?php the_permalink();?>'>

          <div class='single-att-img'>

            <?php $attorney_bio_image = get_field('attorney_bio_image');?>

            <?php if ($attorney_bio_image): ?>

            <img src="<?php echo $attorney_bio_image['url']; ?>" alt="<?php echo $attorney_bio_image['alt']; ?>" />

            <?php else: ?>

            <img src='<?php bloginfo('template_directory');?>/images/ps.jpg' alt='' />

            <?php endif;?>

          </div><!-- single-att-img -->

          <div class='single-att-content'>

            <span class='single-att-title'><?php the_title();?></span><!-- single-att-title -->

            <span class='single-att-position'><?php the_field('attorney_positions');?></span>
            <!-- single-att-position -->

            <span class='single-att-descrip'><?php the_sub_field('description');?></span><!-- single-att-descrip -->

            <span class='learn-more'>LEARN MORe</span><!-- learn-more -->

          </div><!-- single-att-content -->

        </a>

      </div><!-- single-att -->

      <?php wp_reset_postdata();?>
      <?php endif;?>

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- meet-team-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>