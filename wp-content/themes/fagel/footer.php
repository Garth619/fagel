<footer id='consultation'>

  <div id='footer-top'>

    <div id='footer-top-content'>

      <?php

if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

      <span id='footer-top-title'><?php the_field('spanish_footer_form_title', 'option');?></span>
      <!-- footer-top-title -->

      <span id='footer-top-descrip'><?php the_field('spanish_footer_form_description', 'option');?></span>
      <!-- footer-top-descrip -->

      <span id='footer-top-descrip-two'><?php the_field('spanish_footer_form_description_two', 'option');?></span>
      <!-- footer-top-descrip-two -->

      <?php else: ?>

      <span id='footer-top-title'><?php the_field('footer_form_title', 'option');?></span><!-- footer-top-title -->

      <span id='footer-top-descrip'><?php the_field('footer_form_description', 'option');?></span>
      <!-- footer-top-descrip -->

      <span id='footer-top-descrip-two'><?php the_field('footer_form_description_two', 'option');?></span>
      <!-- footer-top-descrip-two -->

      <?php endif;?>

    </div><!-- footer-top-content -->

    <div id='footer-top-form'>

      <?php if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

      <?php gravity_form(4, false, false, false, '', true, 1442);?>

      <?php else: ?>

      <?php gravity_form(1, false, false, false, '', true, 1244);?>

      <?php endif;?>

    </div><!-- footer-top-form -->

  </div><!-- footer-top -->

  <?php if (!is_page_template('page-templates/template-contact.php')) {?>

  <div id='footer-bottom'>

    <div id='footer-left'>

      <?php $locations_logo = get_field('locations_logo', 'option');?>
      <?php if ($locations_logo) {?>
      <a id='footer-logo' href='<?php bloginfo('url');?>'>
        <img src="<?php echo $locations_logo['url']; ?>" alt="<?php echo $locations_logo['alt']; ?>" />
      </a><!-- footer-logo -->
      <?php }?>

      <?php

    if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

      <span class='location-title main-office-title'><?php the_field('spanish_main_office_title', 'option');?></span>
      <!-- location-title -->

      <?php else: ?>

      <span class='location-title main-office-title'><?php the_field('main_office_title', 'option');?></span>
      <!-- location-title -->

      <?php endif;?>

      <span class='main-office-address'><?php the_field('main_office_address', 'option');?></span>
      <!-- main-office-address -->

      <?php

    if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

      <a class='map-link' href='<?php the_field('main_office_address_link', 'option');?>' target="_blank"
        rel="noopener">Mapa</a><!-- map-link -->
      <!-- map-link -->

      <?php else: ?>

      <a class='map-link' href='<?php the_field('main_office_address_link', 'option');?>' target="_blank"
        rel="noopener">Map</a><!-- map-link -->

      <?php endif;?>

      <?php

    if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

      <span class='footer-cta'><?php the_field('spanish_footer_locations_call_to_action', 'option');?></span>
      <!-- footer-cta -->

      <a id='view-locations-button' class='button'
        href='<?php the_field('spanish_view_all_locations_link', 'option');?>'>

        <button><?php the_field('spanish_view_all_locations_verbiage', 'option');?><span
            class='button-tri'><span></button>

      </a>
      <!-- view-locations-button -->

      <?php else: ?>

      <span class='footer-cta'><?php the_field('locations_call_to_action', 'option');?></span><!-- footer-cta -->

      <a id='view-locations-button' class='button' href='<?php the_field('view_all_locations_link', 'option');?>'>

        <button><?php the_field('view_all_locations_verbiage', 'option');?><span class='button-tri'><span></button>

      </a>
      <!-- view-locations-button -->

      <?php endif;?>

    </div><!-- footer-left -->

    <div id='footer-right'>

      <?php if (have_rows('locations', 'option')): ?>
      <?php while (have_rows('locations', 'option')): the_row();?>

      <div class='footer-single-location'>

        <span class='location-title'><?php the_sub_field('location_title');?></span><!-- location-title -->

        <span class='location-address'><?php the_sub_field('location_address');?></span>
        <!-- location-address -->

        <?php

        if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

        <a class='map-link' href='<?php the_sub_field('address_link');?>' target="_blank" rel="noopener">Mapa</a>
        <!-- map-link -->

        <?php else: ?>

        <a class='map-link' href='<?php the_sub_field('address_link');?>' target="_blank" rel="noopener">Map</a>
        <!-- map-link -->

        <?php endif;?>

      </div><!-- footer-single-location -->

      <?php endwhile;?>
      <?php endif;?>

    </div><!-- footer-right -->

  </div><!-- footer-bottom -->

  <?php }?>

  <div id='copyright'>

    <div id='copyright-inner'>

      <ul>

        <?php

if (is_page(4436) || is_page('gracias') || is_singular('espanol')): ?>

        <li>&copy; <?php echo date('Y'); ?> <?php the_field('spanish_copyright_firm_name', 'options');?></li>
        <li><?php the_field('spanish_all_rights_reserved', 'options');?></li>
        <?php if (get_field('copyright_page_link_verbiage', 'options') || get_field('copyright_page_link', 'options')) {?>
        <li><a
            href='<?php the_field('spanish_copyright_page_link', 'options');?>'><?php the_field('spanish_copyright_page_link_verbiage', 'options');?></a>
        </li>
        <?php }?>

        <?php else: ?>

        <li>&copy; <?php echo date('Y'); ?> <?php the_field('copyright_firm_name', 'options');?></li>
        <li><?php the_field('all_rights_reserved', 'options');?></li>
        <?php if (get_field('copyright_page_link_verbiage', 'options') || get_field('copyright_page_link', 'options')) {?>
        <li><a
            href='<?php the_field('copyright_page_link', 'options');?>'><?php the_field('copyright_page_link_verbiage', 'options');?></a>
        </li>
        <?php }?>

        <?php endif;?>

      </ul>

      <a id='ilawyer-logo' href='//ilawyermarketing.com' target='_blank' rel='noopener'>

        <img src='<?php bloginfo('template_directory');?>/images/ilawyer.svg' alt='' />

      </a><!-- ilawyer-logo -->

    </div><!-- copyright-inner -->

  </div><!-- copyright -->

</footer>

<?php wp_footer();?>

<?php the_field('footer_scripts', 'option');?>

<?php if (get_field('live_chat', 'option')) {?>

<script type="text/javascript">
// load all other scripts
function delayScript(src, timeout, attributes) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const scriptElem = document.createElement("script");
      scriptElem.src = src;
      for (const key in attributes) {
        const attribute = key;
        const value = attributes[key];
        scriptElem.setAttribute(attribute, value ? value : "");
      }
      scriptElem.addEventListener("readystatechange", () => {
        resolve();
      });
      document.head.appendChild(scriptElem);
    }, timeout);
  });
}
delayScript("<?php the_field('live_chat', 'option');?>", 2000);
</script>

<?php }?>

</body>

</html>