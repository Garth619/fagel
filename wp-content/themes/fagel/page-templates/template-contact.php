<?php

/* Template Name: Contact */

get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/page_banner/template', 'banner_layout_video');?>

  <div id='contact-wrapper'>

    <div id='contact-left'>

      <?php $locations_logo = get_field('locations_logo', 'option');?>
      <?php if ($locations_logo) {?>
      <a id='contact-logo' href='<?php bloginfo('url');?>'>
        <img src="<?php echo $locations_logo['url']; ?>" alt="<?php echo $locations_logo['alt']; ?>" />
      </a><!-- contact-logo -->
      <?php }?>

      <span class='location-title main-office-title'><?php the_field('main_office_title', 'option');?></span>
      <!-- class -->

      <span class='main-office-address'><?php the_field('main_office_address', 'option');?></span>
      <!-- main-office-address -->

      <a class='map-link' href='<?php the_field('main_office_address_link', 'option');?>' target="_blank"
        rel="noopener">Map</a><!-- map-link -->

    </div><!-- contact-left -->

    <div id='contact-right'>

      <?php if (have_rows('locations', 'option')): ?>
      <?php while (have_rows('locations', 'option')): the_row();?>

      <div class='contact-single-location'>

        <span class='location-title'><?php the_sub_field('location_title');?></span><!-- location-title -->

        <span class='location-address'><?php the_sub_field('location_address');?></span>
        <!-- location-address -->

        <a class='map-link' href='<?php the_sub_field('address_link');?>' target="_blank" rel="noopener">Map</a>
        <!-- map-link -->

      </div><!-- footer-single-location -->

      <?php endwhile;?>
      <?php endif;?>

    </div><!-- contact-right -->

  </div><!-- contact-wrapper -->

</div><!-- internal-main -->

<?php get_footer();?>