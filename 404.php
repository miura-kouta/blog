


<!-- 本ブログの404.php -->
<?php get_header();?>
<!--------------MainContent--------------->
<article id="main-content">
<div class="grid"><!-- GRID MOTHER -->
<!--POST BOX-->
<div class="col-full">
  <div class="wrap-col">
    <article class="postBox">
     <div class="metaData clearfix">
     </div><!-- ^ .metaData END-->
     <div class="entry_heading clearfix">
     <div class="col-full"><h1>File Not Found...</h1></div>
     </div><!-- ^ .entry_heading END-->
     <div class="entry_body"><!------today's post Start------>
<p>ページは見つかりませんでした。</p>
<h2>可能性のある原因</h2>
<p>こちらの原因が考えられます。</p>
<ul>
<li>アドレスバーへの入力で、<b>タイプミス</b>はありませんか？</li>
<li>リンクをクリックした場合は、<b>リンク元が間違っている</b>か、<b>古い</b>かもしれません<br>
<span>★本サイトがリンク元の場合、お手数ですが<a href="<?php echo home_url();?>/about#mailForm_wdpr">メールフォーム</a>にて「リンク切れ」の箇所をお知らせいただけると幸いです。</span></li>
</ul>
<h2>対処方法</h2>
<p>下記のいずれかの対処をお願い致します。</p>
<ul>
<li>アドレスバーにスペルを確認して再入力してみる</li>
<li><a href="#searchBox">検索ボックス</a>で関連ページを探してみる</li>
<li><a href="#categoryMenuTtl">カテゴリー</a>や<a href="#tagMenuTtl">タグ</a>で探してみる</li>
<li><a href="javascript:history.back();">前のページに戻る</a></li>
</ul>
     </div><!-- ^ .entry_body END--><!------today's post End------>
     <div class="entry_body_bottom"></div>
     </article><!-- ^ .postBox END-->
  </div><!-- ^ .wrap-col END-->
</div><!-- ^ .col-full END-->
<!--POST BOX END-->
</div><!-- ^ .grid = GRID MOTHER END-->
</article><!-- ^ main-content END-->
<?php get_sidebar();?>
<?php get_footer();?>