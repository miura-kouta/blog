<section class="content">
      <article class="content__wrap">
        <div class="content__headingWrap">
          <p class="content__DateAndTitleText"><?php the_time('Y/n/d'); ?>　|　<?php $cat = get_the_category(); $cat = $cat[0]; $cat_name = $cat->cat_name; echo $cat_name; ?></p>
          <h1 class="content__heading u-headingLv1"><?php the_title();?></h1>
        </div>
        <?php the_post_thumbnail(); ?> 
        <div class="content__body"><?php the_content();?></div> 
      </article>

        <nav class="content__postWrap">
            <div class="content__postBox"><p class="content__postText">←前の記事</p><?php previous_post_link('%link', '%title'); ?></div> 
            <div class="content__postBox"><p class="content__postText">次の記事→<p><?php next_post_link('%link', '%title'); ?></div>

        </nav>
  

</section>