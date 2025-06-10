<aside class="sidebar">
  <div class="sidebar__aboutBox">
    <div class="sidebar__aboutImgWrap">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about-image.webp" alt="自分の顔のイメージ" width="200" height="200" decoding="async">
    </div>
    <p class="sidebar__aboutNameText">三浦　浩太</p>
    <p class="sidebar__aboutSentenceText">
      フリーランスでWeb制作を行っています。HTML、CSS、JavaScriptを駆使しモダンで魅力的なサイト構築をお手伝いします。
    </p>
  </div>

  <?php  /*フィルターフック */ ?>
  <?php
  add_filter('wp_list_categories', function ($output) {
    return str_replace('<a ', '<a class="sideBar__categoryLink" ', $output);
  });

  add_filter('wp_generate_tag_cloud', function ($tags) {
    return str_replace('<a ', '<a class="sideBar__tagLink" ', $tags);
  });
  ?>

  <dl class="sideBar__categoryWrap">
    <dt class="sideBar__categoryTitle">
      <h4>Category</h4>
    </dt>
    <dd>
      <ul class="sideBar__categoryMenu">
        <?php wp_list_categories('title_li=&hide_empty=1'); ?>
      </ul>
    </dd>
  </dl>

  <dl class="sideBar__tagsWrap">
    <dt class="sideBar__tagsTitle">
      <h4>Tags</h4>
    </dt>
    <dd class="sideBar__tagsBox">
      <?php wp_tag_cloud('format=list&number=0&smallest=16&largest=16&unit=px&orderby=count'); ?>
    </dd>
  </dl>

</aside>