<div id='banner-wrapper' class='banner-layout-case-results'>

  <div id='banner-content' class='case-results-layout-content'>

    <h1 class='banner-title page-title banner-case-results-title'><?php if (is_post_type_archive('case_results')) {
    echo "Medical Malpractice Case Results";
}
;?><?php if (is_tax('case_results_categories')) {
    echo '' . single_term_title() . ' Case Results';
}
;?></h1>
    <!-- page-title -->

    <div id='banner-case-results-descrip' class='content'>

      <?php the_field('case_results_banner_description', 'option');?>

    </div><!-- banner-case-results-descrip -->

  </div><!-- banner-content -->

  <div id='banner-case-results-filters'>

    <?php if (have_rows('case_results_categories_filter', 'option')): ?>
    <?php while (have_rows('case_results_categories_filter', 'option')): the_row();?>

    <div class='case-results-row'>

      <span class='case-results-title'><?php the_sub_field('filter_title', 'option');?></span>
      <!-- case-results-title -->

      <div class='case-results-filter'>

        <span
          class='case-results-button button-two'><span><?php the_sub_field('filter_title', 'option');?></span></span>
        <!-- case-results-button -->

        <?php

    $terms = get_terms(array(
        'taxonomy' => 'case_results_categories',
        'child_of' => get_sub_field('filter_category'),
    ));

    echo '<ul>';

    foreach ($terms as $term) {

        $term_link = get_term_link($term);

        if (is_wp_error($term_link)) {
            continue;
        }

        echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
    }

    echo '</ul>';?>

      </div><!-- case-results-filter -->

    </div><!-- case-results-row -->

    <?php endwhile;?>

    <?php endif;?>

    <div class='case-results-row'>

      <div class='case-results-filter'>

        <a href='<?php the_field('button_three_page_link', 'option');?>'
          class='case-results-button kaiser-button button-two'><?php the_field('button_three_verbiage', 'option');?></a>
        <!-- case-results-button -->

      </div><!-- case-results-filter -->

    </div><!-- case-results-row -->

  </div><!-- banner-case-results-filters -->

  <picture>

    <?php $case_results_banner_image = get_field('case_results_banner_image', 'option');?>
    <?php if ($case_results_banner_image) {?>
    <img id='banner-img' class='banner-img-case-results' src="<?php echo $case_results_banner_image['url']; ?>"
      alt="<?php echo $case_results_banner_image['alt']; ?>" />
    <?php }?>

  </picture>

</div><!-- banner-wrapper -->