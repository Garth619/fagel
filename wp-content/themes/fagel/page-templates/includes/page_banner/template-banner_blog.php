<div id='banner-wrapper' class='banner-layout-pa'>

  <div id='banner-content' class='pa-layout-content'>

    <div id='banner-content-inner'>

      <span id='banner-subtitle'><?php the_field('global_internal_banner_sub_title', 'option');?></span>
      <!-- page-title -->

      <?php $str = get_the_title();
$banner_font_size = 'large-banner-text';
if (strlen($str) > 75) {
    $banner_font_size = 'small-banner-text';
}?>

      <?php if (is_home()) {?>

      <h1 class='banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>'>
        <?php the_field('blog_banner_title', 12);?></h1>
      <!-- page-title -->

      <?php }?>

      <?php if (is_category()) {?>

      <h1 class="banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>"><?php single_cat_title();?>
      </h1>

      <?php }?>

      <?php if (is_archive() && !is_category()) {?>

      <h1 class="banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>">
        <?php printf(__('<span>%s</span>'), get_the_date(_x('Y', 'yearly archives date format')));?>
      </h1>

      <?php }?>

      <?php if (is_single()) {?>

      <h1 class="banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>"><?php the_title();?></h1>

      <?php }?>

      <a id='banner-button' class='button pa-banner-button' href='#consultation'>

        <button><?php the_field('global_internal_banner_button_verbiage', 'option');?><span
            class='button-tri'><span></button>

      </a><!-- button -->

    </div><!-- banner-content-inner -->

  </div><!-- banner-content -->

  <picture>

    <?php $global_internal_banner_image_desktop = get_field('global_internal_banner_image_desktop', 'option');?>

    <?php if ($global_internal_banner_image_desktop): ?>

    <source media='(min-width: 1695px)' srcset='<?php echo $global_internal_banner_image_desktop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_desktop['alt']; ?>">

    <?php endif;?>

    <?php $global_internal_banner_image_large_laptop = get_field('global_internal_banner_image_large_laptop', 'option');?>

    <?php if ($global_internal_banner_image_large_laptop): ?>

    <source media='(min-width: 1380px)' srcset='<?php echo $global_internal_banner_image_large_laptop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_large_laptop['alt']; ?>">

    <?php endif;?>

    <?php $global_internal_banner_image_small_laptop = get_field('global_internal_banner_image_small_laptop', 'option');?>

    <?php if ($global_internal_banner_image_small_laptop): ?>

    <source media='(min-width: 1170px)' srcset='<?php echo $global_internal_banner_image_small_laptop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_small_laptop['alt']; ?>">

    <?php endif;?>

    <?php $global_internal_banner_image_tablet = get_field('global_internal_banner_image_tablet', 'option');?>

    <?php if ($global_internal_banner_image_tablet): ?>

    <source media='(min-width: 768px)' srcset='<?php echo $global_internal_banner_image_tablet['url']; ?>'
      alt="<?php echo $global_internal_banner_image_tablet['alt']; ?>">

    <?php endif;?>

    <?php $global_internal_banner_image_mobile = get_field('global_internal_banner_image_mobile', 'option');?>

    <?php if ($global_internal_banner_image_mobile): ?>

    <img id='banner-img' class='banner-img-pa' src='<?php echo $global_internal_banner_image_mobile['url']; ?>'
      alt='<?php echo $global_internal_banner_image_mobile['alt']; ?>' />

    <?php endif;?>

  </picture>

</div><!-- banner-wrapper -->