<div id='sidebar-wrapper'>

  <?php

if (get_field('blog_youtube_id', 'option') || get_field('blog_video_title', 'option')) {

    get_template_part('page-templates/includes/template', 'sidebar_video');

}

?>

  <div id='sidebar-form'>

    <?php if (is_page('gracias') || is_singular('espanol')): ?>

    <span id='sidebar-form-title'><?php the_field('spanish_sidebar_form_title', 'option');?></span>
    <!-- sidebar-form-title -->

    <?php gravity_form(3, false, false, false, '', true, 1332);?>

    <?php else: ?>

    <span id='sidebar-form-title'><?php the_field('sidebar_form_title', 'option');?></span>
    <!-- sidebar-form-title -->

    <?php gravity_form(2, false, false, false, '', true, 1355);?>

    <?php endif;?>

  </div><!-- sidebar-form -->

  <div id='sidebars'>

    <?php bulk_sidebar();?>

  </div><!-- sidebars -->

</div><!-- sidebar-wrapper -->