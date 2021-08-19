<div id='sidebar-wrapper'>

  <?php

if (get_field('blog_youtube_id', 'option') || get_field('blog_video_title', 'option')) {

    get_template_part('page-templates/includes/template', 'sidebar_video');

}

?>

  <div id='sidebar-form'>

    <span id='sidebar-form-title'>Contact Us for a Free Consultation</span><!-- sidebar-form-title -->

    <?php gravity_form(2, false, false, false, '', true, 132);?>

    <span class='required'>* Required Field</span><!-- required -->

  </div><!-- sidebar-form -->

  <div id='sidebars'>

    <?php bulk_sidebar();?>

  </div><!-- sidebars -->

</div><!-- sidebar-wrapper -->