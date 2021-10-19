<section id='section-four'>

  <span id='sec-four-header'
    class='<?php if (is_page(4436)) {echo 'spanish-header';}?>'><?php the_field('sec_four_title');?></span>
  <!-- sec-four-header -->

  <div id='sec-four-inner' class='content'>

    <?php

if (is_page(4436)): ?>

    <div class='sec-four-col spanish-col'>

      <?php the_field('sec_four_column_one');?>

    </div><!-- sec-four-col -->

    <?php else: ?>

    <div class='sec-four-col'>

      <?php the_field('sec_four_column_one');?>

    </div><!-- sec-four-col -->

    <div class='sec-four-col'>

      <?php the_field('sec_four_column_two');?>

    </div><!-- sec-four-col -->

    <?php endif;?>

  </div><!-- sec-four-inner -->

</section><!-- section-four -->