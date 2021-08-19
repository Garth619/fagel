<?php

/* Template Name: Video Center */

get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/page_banner/template', 'banner_page_title');?>

  <div id='page-container'>

    <div id='video-center'>

      <?php if (have_rows('video_center_')): ?>
      <?php while (have_rows('video_center_')): the_row();?>

      <div class='single-video'>

        <div class='single-video-inner'>

          <a href='https://www.youtube.com/embed/<?php the_sub_field('youtube_id_video_center');?>' data-lity>

            <div class='single-video-thumb video-container'>

              <img class='vid-thumb'
                src="https://img.youtube.com/vi/<?php the_sub_field('youtube_id_video_center');?>/0.jpg" />

              <div class='vid-overlay'>

                <span class='single-video-play-button play-button'>

                  <span></span>

                </span><!-- play-button -->

              </div><!-- vid-overlay -->

            </div><!-- single-video-thumb -->

            <span class='single-video-title'><?php the_sub_field('video_title_video_center');?></span>
            <!-- single-video-title -->

          </a>

        </div><!-- single-video-inner -->

      </div><!-- single-video -->
      <?php endwhile;?>

      <?php endif;?>

    </div><!-- video-center -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>