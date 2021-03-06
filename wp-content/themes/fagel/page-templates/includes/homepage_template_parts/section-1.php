<section id='section-one'>

  <div id='sec-one-inner'>

    <div id='sec-one-video-wrapper'>

      <div id='sec-one-video-inner'>

        <span id='title-one' class='vid-title'><?php the_field('sec_one_video_title_one');?></span><!-- title-one -->

        <div id='sec-one-video' class="video-container">

          <div data-lity-target='https://www.youtube.com/embed/<?php the_field('sec_one_youtube_id');?>' data-lity>

            <div class='vid-overlay'>

              <span id='sec-one-play-button' class='play-button'>

                <span></span>

              </span><!-- play-button -->

            </div><!-- vid-overlay -->

            <?php $sec_one_video_image = get_field('sec_one_video_image');?>

            <?php if ($sec_one_video_image) {?>

            <img id='sec-one-vid-img' class="vid-thumb" src="<?php echo $sec_one_video_image['url']; ?>"
              alt="<?php echo $sec_one_video_image['alt']; ?>" />

            <?php }?>

          </div>

        </div><!-- sec-one-video -->

        <span id='title-two' class='vid-title'><span><?php the_field('sec_one_video_title_two');?></span>
          <span><?php the_field('sec_one_video_title_three');?></span></span>
        <!-- title-two -->

      </div><!-- sec-one-video-inner -->

    </div><!-- sec-one-video-wrapper -->

    <div id='sec-one-titles'>

      <span id='sec-one-subtitle'><?php the_field('sec_one_subtitle');?></span><!-- sec-one-subtitle -->

      <span id='sec-one-title'><?php the_field('sec_one_title');?></span><!-- sec-one-title -->

      <a id='sec-one-button' class='button' href='#consultation'>

        <button><?php the_field('sec_one_button_verbiage');?><span class='button-tri'><span></button>

      </a><!-- button -->

    </div><!-- sec-one-titles -->

    <div id='att-buttons'>

      <a class='att-button'>Dr. Devon fagel</a><!-- att-button -->

      <a class='att-button'>Dr. bruce fagel</a><!-- att-button -->

    </div><!-- att-buttons -->

    <div id='sec-one-sp' class='tablet-container'>

      <div id='sec-one-sp-slider'>

        <?php if (have_rows('section_one_selling_points')): ?>
        <?php while (have_rows('section_one_selling_points')): the_row();?>

        <div class='sec-one-single-sp'>

          <?php $svg = get_sub_field('svg');?>

          <?php if ($svg) {?>

          <img src='<?php the_sub_field('svg');?>' alt='' />

          <?php }?>

          <span class='sp-title'><?php the_sub_field('title');?></span><!-- sp-title -->

          <span class='sp-description'><?php the_sub_field('description');?></span><!-- sp-description -->

        </div><!-- sec-one-single-sp -->

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- sec-one-sp-slider -->

      <div id='sec-one-sp-arrows'>

        <div id='sp-arrow-left' class='sp-arrow'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow-new.svg'); ?>

        </div><!-- sp-arrow-left -->

        <span id='sp-arrow-counter'>01 - 03</span><!-- sp-arrow-counter -->

        <div id='sp-arrow-right' class='sp-arrow'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow-new.svg'); ?>

        </div><!-- sp-arrow-right -->

      </div><!-- sec-one-sp-arrows -->

    </div><!-- sec-one-sp -->

    <div id='sec-one-news' class='tablet-container'>

      <div id='sec-one-news-slider'>

        <?php if (have_rows('sec_one_news')): ?>
        <?php while (have_rows('sec_one_news')): the_row();?>
        <?php $post_object = get_sub_field('case_result_article');?>
        <?php if ($post_object): ?>
        <?php $post = $post_object;?>
        <?php setup_postdata($post);?>

        <div class='sec-one-single'>

          <a href='<?php the_permalink();?>'>

            <?php $case_results_image = get_sub_field('case_results_image');?>
            <?php if ($case_results_image) {?>
            <img class='sec-one-single-img' src="<?php echo $case_results_image['url']; ?>"
              alt="<?php echo $case_results_image['alt']; ?>" />
            <?php }?>

            <span class='sec-one-single-title'><?php the_sub_field('case_results_amount');?></span>
            <!-- sec-one-single-title -->

            <span class='sec-one-single-descrip'><?php the_title();?></span>
            <!-- sec-one-single-descrip -->

          </a>

        </div><!-- sec-one-news-single -->

        <?php wp_reset_postdata();?>
        <?php endif;?>

        <?php endwhile;?>
        <?php endif;?>

      </div><!-- sec-one-news-slider -->

      <div id='sec-one-news-arrows'>

        <div id='news-arrow-left' class='news-arrow'></div><!-- news-arrow -->

        <div id='news-arrow-right' class='news-arrow'></div><!-- news-arrow -->

      </div><!-- sec-one-news-arrow -->

    </div><!-- sec-one-news -->

  </div><!-- sec-one-inner -->

  <picture>

    <?php $sec_one_background_image_desktop_webp = get_field('sec_one_background_image_desktop_webp');?>
    <?php $sec_one_background_image_desktop = get_field('sec_one_background_image_desktop');?>

    <?php if ($sec_one_background_image_desktop_webp) {?>
    <source media='(min-width: 1540px)' srcset='<?php echo $sec_one_background_image_desktop_webp['url']; ?>'
      type='image/webp'>
    <?php }?>

    <?php if ($sec_one_background_image_desktop) {?>

    <source media='(min-width: 1540px)' srcset='<?php echo $sec_one_background_image_desktop['url']; ?>'>

    <?php }?>

    <?php $sec_one_background_image_large_laptop_webp = get_field('sec_one_background_image_large_laptop_webp');?>
    <?php $sec_one_background_image_large_laptop = get_field('sec_one_background_image_large_laptop');?>

    <?php if ($sec_one_background_image_large_laptop_webp) {?>
    <source media='(min-width: 1380px)' srcset='<?php echo $sec_one_background_image_large_laptop_webp['url']; ?>'
      type='image/webp'>
    <?php }?>

    <?php if ($sec_one_background_image_large_laptop) {?>

    <source media='(min-width: 1380px)' srcset='<?php echo $sec_one_background_image_large_laptop['url']; ?>'>

    <?php }?>

    <?php $sec_one_background_image_small_laptop_webp = get_field('sec_one_background_image_small_laptop_webp');?>
    <?php $sec_one_background_image_small_laptop = get_field('sec_one_background_image_small_laptop');?>

    <?php if ($sec_one_background_image_small_laptop_webp) {?>
    <source media='(min-width: 1170px)' srcset='<?php echo $sec_one_background_image_small_laptop_webp['url']; ?>'
      type='image/webp'>
    <?php }?>

    <?php if ($sec_one_background_image_small_laptop) {?>

    <source media='(min-width: 1170px)' srcset='<?php echo $sec_one_background_image_small_laptop['url']; ?>'>

    <?php }?>

    <?php $sec_one_background_image_mobile_webp = get_field('sec_one_background_image_mobile_webp');?>
    <?php $sec_one_background_image_mobile = get_field('sec_one_background_image_mobile');?>

    <?php if ($sec_one_background_image_mobile_webp) {?>
    <source srcset='<?php echo $sec_one_background_image_mobile_webp['url']; ?>' type='image/webp'>
    <?php }?>

    <img id='sec-one-hero-img' src="<?php echo $sec_one_background_image_mobile['url']; ?>"
      alt="<?php echo $sec_one_background_image_mobile['alt']; ?>" />

  </picture>

</section><!-- section-one -->