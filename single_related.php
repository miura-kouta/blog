<?php
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
  'post__not_in' => array($post -> ID),
  'posts_per_page'=> 3,
  'category__in' => $category_ID,
  //'orderby' => 'rand',ランダムじゃないほうがいいのでコメントアウト。orderbyを省略するとデフォルトの'date'になり最新記事から順に表示される
);
$query = new WP_Query($args);
if( $query -> have_posts() ):
while ($query -> have_posts()) : $query -> the_post(); ?>
  <div class="relPostBox clearfix">
   <div class="col-1-4">
   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
   </div><!-- ^ .col-1-4 END-->
   <div class="col-3-4">
   <h1 class="relPostH1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
   <p><?php echo mb_substr(strip_tags($post->post_content), 0, 80); ?><a href="<?php the_permalink(); ?>"> [記事を読む]</a></p>
   </div><!-- ^ .col-3-4 END-->
  </div><!-- ^ .relPostBox END-->
<?php
endwhile;
endif;
wp_reset_postdata(); ?>