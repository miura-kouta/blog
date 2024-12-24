<?php get_template_part('components/header'); ?>
<h1 class="u-headingLv1"><?php single_cat_title(); ?></h1>
<div class="u-contentFlex u-content u-contentPaddingTopBottom">
  <?php get_template_part('components/c-category'); ?>
  <?php get_template_part('components/sidebar'); ?>
</div>
<?php get_template_part('components/footer'); ?>