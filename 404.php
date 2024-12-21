

<?php get_header();?>
<article id="main-content">
    <div class="entry_heading clearfix">
      <div class="col-full">
        <h1>File Not Found...</h1>
      </div>
    </div>
    <div class="entry_body">
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
    </div>
    <div class="entry_body_bottom"></div>
</article>
<?php get_sidebar();?>
<?php get_footer();?>