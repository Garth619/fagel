<?php get_header();?>

<?php

if (!get_field('disable_banner')) {
    $banner = 'pa-banner';
} else {
    $banner = 'no-banner';
}

?>

<div id="internal-main" class='<?php echo $banner; ?>'>

  <?php if (!get_field('disable_banner')) {

    get_template_part('page-templates/includes/page_banner/template', 'banner_pa');

}?>

  <div id='page-container' class='two-col'>

    <div id='page-content' class='content'>

      <?php if (!get_field('banner_h1') == "Yes"): ?>

      <h1 class='page-title'><?php the_title();?></h1><!-- page-title -->

      <?php endif;?>

      <a id='banner-button' class='button pa-banner-button' href='#consultation'>

        <button><?php the_field('spanish_global_internal_banner_title', 'option');?><span
            class='button-tri'><span></button>

      </a><!-- button -->

      <?php if (get_field('sidebar_video_youtube_id') || get_field('sidebar_video_title')) {

    get_template_part('page-templates/includes/template', 'sidebar_video');

}?>

      <?php if (have_posts()): while (have_posts()): the_post();?>

      <div id='single_post'>

        <?php if (have_rows('page_overview')): ?>
        <ul id='page_meta'>
          <?php while (have_rows('page_overview')): the_row();?>
          <li><?php the_sub_field('list_item');?></li>
          <?php endwhile;?>
        </ul>
        <?php endif;?>

        <div class="blog_content content">

          <?php the_content();?>

        </div><!-- blog_content -->

        <?php edit_post_link(__('Edit'), '', '');?>

      </div><!-- single_post -->

      <?php endwhile; // end of loop ?>

      <?php endif;?>

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>