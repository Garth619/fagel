<div id='banner-wrapper' class='banner-layout-pa'>

  <div id='banner-content' class='pa-layout-content'>

    <div id='banner-content-inner'>

      <?php if (get_field('turn_off_subtitle') == "Yes"): ?>

      <?php else: ?>

      <?php if (get_field('banner_subtitle')): ?>

      <span id='banner-subtitle'><?php the_field('banner_subtitle');?></span><!-- page-title -->

      <?php else: ?>

      <?php if (is_page('gracias') || is_singular('espanol')): ?>

      <span id='banner-subtitle'><?php the_field('spanish__global_internal_banner_sub_title', 'option');?></span>
      <!-- page-title -->

      <?php else: ?>

      <span id='banner-subtitle'><?php the_field('global_internal_banner_sub_title', 'option');?></span>
      <!-- page-title -->

      <?php endif;?>

      <?php endif;?>

      <?php endif;?>

      <?php $str = get_the_title();
$banner_font_size = 'large-banner-text';
if (strlen($str) > 75) {
    $banner_font_size = 'small-banner-text';
}?>

      <?php if (get_field('banner_h1') == "Yes"): ?>

      <h1 class='banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>'><?php the_title();?></h1>
      <!-- page-title -->

      <?php else: ?>

      <?php if (get_field('banner_title')): ?>

      <span
        class='banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>'><?php the_field('banner_title');?></span>
      <!-- page-title -->

      <?php else: ?>

      <?php if (is_page('gracias') || is_singular('espanol')): ?>

      <span
        class='banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>'><?php the_field('spanish_global_internal_banner_title', 'option');?></span>
      <!-- page-title -->

      <?php else: ?>

      <span
        class='banner-title page-title banner-pa-title <?php echo $banner_font_size; ?>'><?php the_field('global_internal_banner_title', 'option');?></span>
      <!-- page-title -->

      <?php endif;?>

      <?php endif;?>

      <?php endif;?>

      <a id='banner-button' class='button pa-banner-button' href='#consultation'>

        <?php if (is_page('gracias') || is_singular('espanol')): ?>

        <button><?php the_field('spanish_global_internal_banner_title', 'option');?><span
            class='button-tri'><span></button>

        <?php else: ?>

        <button><?php the_field('global_internal_banner_button_verbiage', 'option');?><span
            class='button-tri'><span></button>

        <?php endif;?>

      </a><!-- button -->

    </div><!-- banner-content-inner -->

  </div><!-- banner-content -->

  <picture>

    <?php $banner_image_desktop = get_field('banner_image_desktop');?>
    <?php $global_internal_banner_image_desktop = get_field('global_internal_banner_image_desktop', 'option');?>

    <?php if ($banner_image_desktop): ?>

    <source media='(min-width: 1695px)' srcset='<?php echo $banner_image_desktop['url']; ?>'
      alt="<?php echo $banner_image_desktop['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 1695px)' srcset='<?php echo $global_internal_banner_image_desktop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_desktop['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_large_laptop = get_field('banner_image_large_laptop');?>
    <?php $global_internal_banner_image_large_laptop = get_field('global_internal_banner_image_large_laptop', 'option');?>

    <?php if ($banner_image_large_laptop): ?>

    <source media='(min-width: 1380px)' srcset='<?php echo $banner_image_large_laptop['url']; ?>'
      alt="<?php echo $banner_image_large_laptop['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 1380px)' srcset='<?php echo $global_internal_banner_image_large_laptop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_large_laptop['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_small_laptop = get_field('banner_image_small_laptop');?>
    <?php $global_internal_banner_image_small_laptop = get_field('global_internal_banner_image_small_laptop', 'option');?>

    <?php if ($banner_image_small_laptop): ?>

    <source media='(min-width: 1170px)' srcset='<?php echo $banner_image_small_laptop['url']; ?>'
      alt="<?php echo $banner_image_small_laptop['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 1170px)' srcset='<?php echo $global_internal_banner_image_small_laptop['url']; ?>'
      alt="<?php echo $global_internal_banner_image_small_laptop['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_tablet = get_field('banner_image_tablet');?>
    <?php $global_internal_banner_image_tablet = get_field('global_internal_banner_image_tablet', 'option');?>

    <?php if ($banner_image_tablet): ?>

    <source media='(min-width: 768px)' srcset='<?php echo $banner_image_tablet['url']; ?>'
      alt="<?php echo $banner_image_tablet['alt']; ?>">

    <?php else: ?>

    <source media='(min-width: 768px)' srcset='<?php echo $global_internal_banner_image_tablet['url']; ?>'
      alt="<?php echo $global_internal_banner_image_tablet['alt']; ?>">

    <?php endif;?>

    <?php $banner_image_mobile = get_field('banner_image_mobile');?>
    <?php $global_internal_banner_image_mobile = get_field('global_internal_banner_image_mobile', 'option');?>

    <?php if ($banner_image_mobile): ?>

    <img id='banner-img' class='banner-img-pa' src='<?php echo $banner_image_mobile['url']; ?>'
      alt='<?php echo $banner_image_mobile['alt']; ?>' />

    <?php else: ?>

    <img id='banner-img' class='banner-img-pa' src='<?php echo $global_internal_banner_image_mobile['url']; ?>'
      alt='<?php echo $global_internal_banner_image_mobile['alt']; ?>' />

    <?php endif;?>

  </picture>

</div><!-- banner-wrapper -->