<?php get_header(); ?>

<div class="breadcrumbs-wrapper">
  <div class="container">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
</div>

<section class="news_detail_main">
  <div class="container news_detail_main-container">
    <div class="news_detail_main-left">
      <article class="news_detail_main-article">
        <h4 class="news_article-title">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</h4>
        <p class="news_article-date">2020-10-01</p>
        <h4 class="news_article-main-title">見出し1</h4>
        <p class="news_article-main-text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <h5 class="news_article-sub-title">見出し2</h5>
        <p class="news_article-sub-text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <blockquote class="news_article-quote">
          <div class="news_article-quote-text-box">
            <p class="news_article-quote-text">引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </blockquote>
        <figure class="news_article-sub-img"><img src="img/sample4.svg" alt=""></figure>
        <ul class="news_article-list-wrapper">
          <li class="news_article-list">
            <p class="news_article-list-text">リストリストリストリストリスト</p>
          </li>
          <li class="news_article-list">
            <p class="news_article-list-text">リストリストリストリストリストリストリストリストリスト</p>
          </li>
          <li class="news_article-list">
            <p class="news_article-list-text">リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</p>
          </li>
        </ul>
        <h5 class="news_article-link"><a href="">テキストリンクテキストリンク</a></h5>
      </article>
    </div>
  </div>
</section>

<section class="contact">
  <div class="contact_bg-img">
    <div class="contact_text-box">
      <h3 class="contact_text-title">まずは無料で資料請求から</h3>
      <div class="circle-request-btn contact_circle-request-btn"><a href="" class="p circle-request-btn-text contact_circle-request-btn-text">資料請求 </a></div>
      <p class="contact-link-text contact_contact-link-text"><a href="">お問い合わせ</a></p>
    </div>
  </div>
  <div class="contact_tel-contact-box">
    <p class="contact_tel-contact-title">お電話でのお問い合わせはこちら</p>
    <h2 class="contact_tel-contact-number"><a href="tel:0123-456-7890">0123-456-7890</a></h2>
    <p class="contact_tel-contact-hour">平日 08:00~20:00</p>
  </div>
</section>

<?php get_footer(); ?>
