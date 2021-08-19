<div id='banner-wrapper' class='banner-layout-two'>

  <div id='banner-content'>

    <h1 class='banner-title page-title'><?php the_title();?></h1><!-- page-title -->

    <a id='banner-button' class='button' href='#consultation'>

      <button><?php the_field('global_internal_banner_button_verbiage', 'option');?><span
          class='button-tri'><span></button>

    </a><!-- button -->

  </div><!-- banner-content -->

  <img id='banner-img' class='banner-img-two' src='<?php bloginfo('template_directory');?>/images/int.jpg' alt='' />

</div><!-- banner-wrapper -->