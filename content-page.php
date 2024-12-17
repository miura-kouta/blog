<!--POST BOX-->
<div class="col-full">
  <div class="wrap-col">
    <article class="postBox">
     <div class="metaData clearfix">
     <p id="iconDate"><img src="<?php bloginfo('template_url');?>/images/icon_dat_wht.png"/><?php the_time('Y年n月j日'); ?></p>
     </div><!-- ^ .metaData END-->
     <div class="entry_heading clearfix">
     <h1><?php the_title();?></h1>
     </div><!-- ^ .entry_heading END-->
     <div class="entry_body">
     <?php the_content();?>
     </div><!-- ^ .entry_body END-->
     <div class="entry_body_bottom"></div>
    </article><!-- ^ .postBox END-->
  </div><!-- ^ .wrap-col END-->
</div><!-- ^ .col-full END-->
<!--POST BOX END-->