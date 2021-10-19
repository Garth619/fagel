<div id='banner-wrapper' class='banner-layout-video'>

  <div id='banner-inner'>

    <div id='banner-left'>

      <div id='banner-content' class='video-layout-content'>

        <h1 class='banner-title page-title banner-video-title'><?php the_title();?></h1><!-- page-title -->

        <?php if (is_page_template('page-templates/template-about.php')) {?>

        <a id='banner-button' class='button about-banner-button' href='#consultation'>

          <button><?php the_field('global_internal_banner_button_verbiage', 'option');?><span
              class='button-tri'><span></button>

        </a><!-- button -->

        <?php }?>

        <?php if (is_page_template('page-templates/template-contact.php')) {?>

        <span id='banner-description'><?php the_field('contact_banner_description');?></span>
        <!-- banner-description -->

        <span id='banner-cta'><?php the_field('contact_banner_call_to_action');?></a></span>
        <!-- banner-cta -->

        <?php }?>

      </div><!-- banner-content -->

      <?php $video_banner_background = get_field('video_banner_background');?>
      <?php if ($video_banner_background) {?>
      <div id='banner-img-wrapper'>

        <img id='banner-img' class='banner-img-video' src="<?php echo $video_banner_background['url']; ?>"
          alt="<?php echo $video_banner_background['alt']; ?>" />

      </div><!-- banner-img-wrapper -->

      <?php }?>

    </div><!-- banner-left -->

    <div id='banner-right'>

      <div id='banner-video-wrapper'>

        <span id='title-one' class='vid-title'><?php the_field('video_in_banner_top_title');?></span>
        <!-- title-one -->

        <div id='banner-video' class="video-container">

          <div data-lity-target='https://www.youtube.com/embed/<?php the_field('video_in_top_banner_youtube_id');?>'
            data-lity>

            <div class='vid-overlay'>

              <span id='banner-play-button' class='play-button'>

                <span></span>

              </span><!-- play-button -->

            </div><!-- vid-overlay -->

            <img id='banner-vid-img' class="vid-thumb"
              src='<?php bloginfo('template_directory');?>/images/video-image.jpg' alt='' />

          </div>

        </div><!-- banner-video -->

        <span id='title-two' class='vid-title'><span><?php the_field('video_in_banner_bottom_title_one');?></span>
          <span><?php the_field('video_in_banner_bottom_title_two');?></span></span>
        <!-- title-two -->

      </div><!-- banner-video-wrapper -->

    </div><!-- banner-right -->

  </div><!-- banner-inner -->

</div><!-- banner-wrapper -->