<?php if (have_posts()): while (have_posts()): the_post();?>

<div id='single_post'>

  <?php if (have_rows('page_overview')): ?>
  <ul id='page_meta'>
    <?php while (have_rows('page_overview')): the_row();?>
    <li><?php the_sub_field('list_item');?></li>
    <?php endwhile;?>
  </ul>
  <?php endif;?>

  <div class="blog-meta case-results-meta">

    <h2>

      <span><?php the_field('case_results_amount');?></span><!-- author -->

      <span><?php the_field('case_results_type');?></span>

    </h2>

  </div><!-- blog-meta -->

  <div class="blog_content content">

    <?php the_content();?>

    <?php if (get_field('view_pdf')) {?>

    <a class="read-more view-pdf" href="<?php the_field('view_pdf');?>" target='_blank'>View PDF</a>

    <?php }?>

  </div><!-- blog_content -->

  <?php edit_post_link(__('Edit'), '', '');?>

</div><!-- single_post -->

<?php endwhile; // end of loop ?>

<?php endif;?>