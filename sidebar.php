
<aside class="sidebar">
  <dl class="sideBar__categoryWrap">
    <dt class="sideBar__categoryTitle"><h4>Category</h4></dt>
    <dd >
      <ul class="sideBar__categoryMenu">
        <?php wp_list_categories('title_li=&hide_empty=1');?>
      </ul>
    </dd>
  </dl>

  <dl class="sideBar__tagsWrap">
    <dt class="sideBar__tagsTitle"><h4>Tags</h4></dt>
    <dd >
        <?php wp_tag_cloud('format=list&number=0&smallest=16&largest=16&unit=px&orderby=count');?>
    </dd>
  </dl>
</aside>