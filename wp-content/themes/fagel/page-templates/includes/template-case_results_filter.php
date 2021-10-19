<div id='case-result-wrapper'>

  <span class='sub-title'><?php if (is_post_type_archive('case_results')) {
    echo "Medical Malpractice Case Results";
}
;?><?php if (is_tax('case_results_categories')) {
    echo single_term_title();
}
;?></span>
  <!-- sub-title -->

  <div id='case-results-inner'>

    <?php

// Need to strip out the $ and the commas in the acf value so they will order properly in the wp_query below

// Archive page
if (is_post_type_archive('case_results')) {
    $posts = get_posts(array(
        'post_type' => 'case_results',
        'posts_per_page' => -1,
    ));
}

if (is_tax('case_results_category')) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

    $posts = get_posts(array(
        'post_type' => 'case_results',
        'posts_per_page' => '-1',
        'tax_query' => array(
            array(
                'taxonomy' => 'case_results_categories',
                'field' => 'slug',
                'terms' => $term->slug,
            ),
        ),
    ));
}

if ($posts):

    foreach ($posts as $post):

        setup_postdata($post);

        $acf_amount = get_field('case_results_amount');

        // remove spaces, dollar signs, commas, letters
        $searchVal = array("/\s+/", "/\\$/", "/\,/", "/[a-zA-Z]/");
        $amount = floatval(preg_replace($searchVal, "", $acf_amount));
        $amountvalue = $amount * 1000000;

        if ($amount > 1000) {
            // ignore six and seven figures that were manually typed
            $amountvalue = $amount;
        }

        //var_dump($amount . " " . $amountvalue);

        // build an associative array
        $amount_int[$post->ID] = $amountvalue;

    endforeach;

    wp_reset_postdata();

    // sort the associative array in descending order, according to the value(acf amount)

    natsort($amount_int);

    // reverse order while preserving keys (post ids)

    $amount_int = array_reverse($amount_int, true);

    //echo "<pre>" . print_r($amount_int, true) . "</pre>";

    // pull the post ids out (according to the amount) into an array (this will be used below as the orderby postid array)

    $amount_order = array_keys($amount_int);

endif;

$args = array(
    'post_type' => 'case_results',
    'post__in' => $amount_order,
    'orderby' => 'post__in',
    'posts_per_page' => -1,
);
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query($args);

while ($wp_query->have_posts()): $wp_query->the_post();?>

    <div class='case-results-single'>

      <div class='case-results-inner'>

        <span class='case-results-amount'><?php the_field('case_results_amount');?></span>
        <!-- case-results-amount -->

        <span class='case-results-title'><?php the_title();?> </span>
        <!-- case-results-title -->

        <span class='case-results-type'><?php the_field('case_results_type');?> </span>
        <!-- case-results-type -->

        <span class='case-results-descrip'><?php echo wp_trim_words(get_the_content(), 60, '...'); ?></span>
        <!-- case-results-descrip -->

        <a class='read-more-case-results' href='<?php the_permalink();?>'>Read More</a>
        <!-- read-more-case-results -->

      </div><!-- case-results-inner -->

    </div><!-- case-results-single -->

    <?php endwhile;?>

    <?php
$wp_query = null;
$wp_query = $temp; // Reset
?>

  </div><!-- case-results-inner -->

</div><!-- case-result-wrapper -->