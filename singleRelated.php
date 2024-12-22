<!-- 関連記事を表示 -->
<?php
  $categories = get_the_category($post->ID);
  $category_ID = array();
    foreach($categories as $category):
      array_push( $category_ID, $category -> cat_ID);
    endforeach ;
    $args = array(
      'post__not_in' => array($post -> ID),
      'posts_per_page'=> 2,
      'category__in' => $category_ID,
    );
    $query = new WP_Query($args);
    if( $query -> have_posts() ):
    while ($query -> have_posts()) : $query -> the_post(); ?>
      <div class="singleRelated">
        <h2 class="singleRelated__headingLv2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <a href="<?php the_permalink(); ?>"><p class="singleRelated__text"><?php echo mb_substr(strip_tags($post->post_content), 0, 80); ?>[記事を読む]</p></a>
      </div>
    <?php
  endwhile;
  endif;
wp_reset_postdata(); ?>