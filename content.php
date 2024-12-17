<section class="content">
      <article class="content__wrap">
          <?php the_post_thumbnail(); ?>
          <p class="content__DateAndTitleText"><?php the_time('Y/n/d'); ?>　|　<?php $cat = get_the_category(); $cat = $cat[0]; $cat_name = $cat->cat_name; echo $cat_name; ?></p>
          <h1 class="content__heading u-headingLv1"><?php the_title();?></h1>
        <div class="entry_body"><?php the_content();?></div> 
      </article>

    <div class="col-full">
      <div class="wrap-col">
        <nav class="adjacent_post_links clearfix">
        <div class="col-1-2">
        <div class="previous"><p></p><?php previous_post_link('%link', '%title'); ?></div>
        <div class="col-1-2">
        <div class="next"><p></p><?php next_post_link('%link', '%title'); ?></div>
        </div>
        </nav>
      </div>
    </div>

</section>