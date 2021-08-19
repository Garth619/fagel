<div id='sidebar-video-wrapper'>

  <div id='sidebar-video' class='video-container'>

    <a href='https://www.youtube.com/embed/<?php the_field('blog_youtube_id', 'option');?>' data-lity>

      <?php $sidebar_video_thumbnail = get_field('sidebar_video_thumbnail', 'option');?>

      <?php if ($sidebar_video_thumbnail) {?>

      <img class='vid-thumb' src="<?php echo $sidebar_video_thumbnail['url']; ?>"
        alt="<?php echo $sidebar_video_thumbnail['alt']; ?>" />

      <?php }?>

      <div class='vid-overlay'>

        <span class='sidebar-video-play-button play-button'>

          <span></span>

        </span><!-- play-button -->

      </div><!-- vid-overlay -->

    </a>

  </div><!-- sidebar-video -->

  <span id='sidebar-video-title'><?php the_field('blog_video_title', 'option');?></span><!-- sidebar-video-title -->

</div><!-- sidebar-video-wrapper -->