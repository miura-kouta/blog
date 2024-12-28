<?php get_template_part('components/header'); ?>
<div class="u-contentInner">
  <h1 class="u-headingLv1"><?php single_cat_title(); ?></h1>
  <div class="u-contentFlex u-content u-contentPaddingTop">
    <?php get_template_part('components/c-category'); ?>
    <?php get_template_part('components/sidebar'); ?>
  </div>

  <?php get_template_part('components/portfolio'); ?>
</div>
<?php get_template_part('components/footer'); ?>