<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title('|', true, 'right');

// Add the blog name.
bloginfo('name');

// Add the blog description for the home/front page.
$site_description = get_bloginfo('description', 'display');
if ($site_description && (is_home() || is_front_page())) {
    echo " | $site_description";
}

// Add a page number if necessary:
if (($paged >= 2 || $page >= 2) && !is_404()) {
    echo esc_html(' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page)));
}

?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

  <?php if (get_field('host_google_fonts_locally', 'option') == "Yes"): ?>

  <style>
  <?php if (have_rows('locally_hosted_google_fonts_repeater', 'option')): ?><?php while (have_rows('locally_hosted_google_fonts_repeater', 'option')): the_row();

  ?>@font-face {
    font-family: '<?php the_sub_field('font_family', 'option');?>';
    font-style: <?php the_sub_field('font_style', 'option');
    ?>;
    font-weight: <?php the_sub_field('font_weight', 'option');
    ?>;
    font-display: <?php the_sub_field('font_display', 'option');
    ?>;
    src: local('<?php the_sub_field('src: local', 'option');?>'), local('<?php the_sub_field('local', 'option');?>'),
      url('<?php the_sub_field('font_file_woff2', 'option');?>') format('woff2');
  }

  <?php endwhile;
  ?><?php endif;
  ?>
  </style>

  <?php else: ?>

  <?php if (get_field('fonts', 'option')): ?>

  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  <style>
  <?php while (has_sub_field('fonts', 'option')): ?>@import url(<?php the_sub_field('font_url');
  ?>);

  <?php endwhile;
  ?>
  </style>

  <?php endif;
?>

  <?php endif;?>

  <style>
  <?php the_field('review_css', 'option');
  ?>
  </style>

  <?php wp_head();?>

  <?php the_field('schema_code', 'option');?>

  <?php the_field('analytics_code', 'option');?>

</head>

<?php

if (basename(get_page_template()) === 'page.php') {
    if (!get_field('disable_banner')) {
        $banner = 'pa-banner';
    } else {
        $banner = 'no-banner';
    }

}if (is_404() || is_page_template('page-templates/template-meetteam.php')) {
    $banner = 'no-banner';
}

?>

<body <?php body_class();?>>

  <header id='header' class='<?php echo $banner; ?>'>

    <div id='header-left'>

      <a id='logo' href='<?php bloginfo('url');?>'>

        <?php $logo = get_field('logo', 'option');?>
        <?php if ($logo) {?>
        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
        <?php }?>

      </a><!-- logo -->

    </div><!-- header-left -->

    <div id='header-right'>

      <nav>

        <?php

if (is_page(4436) || is_page('gracias') || is_singular('espanol')) {

    wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'spanish_menu'));

} else {

    wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'main_menu'));

}?>

      </nav>

      <div id='call-container'>

        <a href='tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('header_phone', 'option')); ?>'>

          <?php

if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

          <span id='call-cta'><?php the_field('spanish_phone_cta', 'option');?></span><!-- call-cta -->

          <span id='phone'><?php the_field('spanish_header_phone', 'option');?></span><!-- phone -->

          <?php else: ?>

          <span id='call-cta'><?php the_field('phone_cta', 'option');?></span><!-- call-cta -->

          <span id='phone'><?php the_field('header_phone', 'option');?></span><!-- phone -->

          <?php endif;?>

        </a>

      </div><!-- call-container -->

      <div id='spanish-container'>

        <?php

if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

        <a href='<?php bloginfo('url');?>'>En Inglés</a>

        <?php else: ?>

        <a
          href='<?php the_field('en_espanol_page_link', 'option');?>'><?php the_field('en_espanol_verbiage', 'option');?></a>
        <!-- class -->

        <?php endif;?>

      </div><!-- spanish-container -->

      <div id='menu'>

        <div id='menu-bars'>

          <span></span>
          <span></span>
          <span></span>

        </div><!-- menu-bars -->

        <div id='menu-title'>

          <span id='menu-open'>Menu</span><!-- menu-open -->

          <span id='menu-close' class='fade'>Close</span><!-- menu-close -->

        </div><!-- menu-title -->

      </div><!-- menu -->

    </div><!-- header-right -->

  </header>