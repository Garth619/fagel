<?php if (is_singular('espanol')) {

    $sidebar_youtube_ID = get_field('spanish_blog_youtube_id', 'option');
    $sidebar_video_thumbnail = get_field('spanish_sidebar_video_thumbnail', 'option');
    $sidebar_video_title = get_field('spanish_blog_video_title', 'option');

} else {

    $sidebar_youtube_ID = get_field('blog_youtube_id', 'option');
    $sidebar_video_thumbnail = get_field('sidebar_video_thumbnail', 'option');
    $sidebar_video_title = get_field('blog_video_title', 'option');

}?>

<div id='sidebar-video-wrapper'>

  <div id='sidebar-video' class='video-container'>

    <div data-lity-target='https://www.youtube.com/embed/<?php echo $sidebar_youtube_ID; ?>' data-lity>

      <img class='vid-thumb' src="<?php echo $sidebar_video_thumbnail['url']; ?>"
        alt="<?php echo $sidebar_video_thumbnail['alt']; ?>" />

      <div class='vid-overlay'>

        <span class='sidebar-video-play-button play-button'>

          <span></span>

        </span><!-- play-button -->

      </div><!-- vid-overlay -->

    </div>

  </div><!-- sidebar-video -->

  <span id='sidebar-video-title'><?php echo $sidebar_video_title; ?></span><!-- sidebar-video-title -->

</div><!-- sidebar-video-wrapper -->