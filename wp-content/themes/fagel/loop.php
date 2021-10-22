<?php if (!have_posts()): ?>

<div id="post-0" class="post error404 not-found">

  <h2>Not Found</h2>

  <div class="entry-content">
    <p>Apologies, but no posts have been created</p>

  </div><!-- .entry-content -->
</div><!-- #post-0 -->

<?php endif;?>

<div id="blog_feed">

  <?php if (have_posts()): while (have_posts()): the_post();?>

  <div class="blog-post">

    <?php if (get_the_post_thumbnail()) {?>

    <div class='blog-left'>

      <?php the_post_thumbnail();?>

    </div><!-- blog-left -->

    <?php }?>

    <div class='blog-right'>

      <h2 class="blog-header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

      <div class="blog-content content">

        <?php echo wp_trim_words(get_the_content(), 54, '...'); ?>

      </div><!-- blog-content -->

      <a class="read-more" href="<?php the_permalink();?>">Read More</a>

      <?php if (get_field('view_pdf')) {?>

      <a class="read-more view-pdf" href="<?php the_field('view_pdf');?>" target='_blank'>View PDF</a>

      <?php }?>

      <?php edit_post_link(__('Edit'), '', '');?>

    </div><!-- blog-right -->

  </div><!-- blog_post -->

  <?php endwhile; // end of loop ?>

  <?php endif;?>

</div><!-- blog_feed -->

<?php my_numeric_posts_nav();?>