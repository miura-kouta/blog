  
<section class="post">
    <article class="post__card">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="post__linkPic">
                <?php the_post_thumbnail(); ?>
            </a>
        <?php else : ?>
            <a href="<?php the_permalink(); ?>" class="post__linkPic">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/noImage.webp' ); ?>" alt="Default Image" class="post__noImage">
            </a>
        <?php endif; ?>

      <div class="post__body">
        <time datetime="<?php echo get_the_date('Y/m/d'); ?>" class="post__date"><?php echo get_the_date('Y/m/d'); ?></time>
        <a href="<?php the_permalink(); ?>" class=""><h2 class="post__heading"><?php the_title(); ?></h2></a>
        <a href="<?php the_permalink(); ?>" class="post__text"><?php the_excerpt(); ?></a>

      </div>
    </article>

  </section>