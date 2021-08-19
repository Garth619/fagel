<?php get_header();?>

<div id="internal-main" class='no-banner'>

  <div id='page-container'>

    <h1 class="page-title"><?php the_field('not_found_title', 'option');?></h1>

    <div id='not-found' class="content">

      <?php the_field('not_found_content', 'option');?>

    </div><!-- not-found -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>