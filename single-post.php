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

<section class="blog_detail_main">
  <div class="container blog_detail_main-container">
    <div class="blog_detail_main-left">
      <article class="blog_detail_main-article">
        <small class="blog_article-category">カテゴリ１</small>
        <h4 class="blog_article-title"><?php the_title(); ?></h4>
        <div class="blog_article-snsDate-wrapper">
          <div class="blog_article-date-wrapper">
            いいね
          </div>
          <p class="blog_article-date"><?php the_time('Y-m-d'); ?></p>
        </div>
        <figure class="blog_article-main-img"><img src="img/sample01.svg" alt=""></figure>
        <h4 class="blog_article-main-title">見出しh2</h4>
        <p class="blog_article-main-text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
        <h5 class="blog_article-sub-title">見出しh3</h5>
        <p class="blog_article-sub-text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <blockquote class="blog_article-quote">
          <div class="blog_article-quote-text-box">
            <p class="blog_article-quote-text">引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </blockquote>
        <figure class="blog_article-sub-img"><img src="img/sample4.svg" alt=""></figure>
        <ul class="blog_article-list-wrapper">
          <li class="blog_article-list">
            <p class="blog_article-list-text">リストリストリストリストリスト</p>
          </li>
          <li class="blog_article-list">
            <p class="blog_article-list-text">リストリストリストリストリストリストリストリストリスト</p>
          </li>
          <li class="blog_article-list">
            <p class="blog_article-list-text">リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</p>
          </li>
        </ul>
        <h5 class="blog_article-link"><a href="">テキストリンクテキストリンク</a></h5>
      </article>

      <div class="blog_recommend">
        <h4 class="blog_recommend-title">おすすめの記事</h4>
        <article class="blog_recommend-article">
          <figure class="blog_recommend-article-img"><img src="img/sample01.svg" alt=""><small class="blog_recommend-category">カテゴリ1</small>
          </figure>
          <div class="blog_recommend-article-text-box">
            <small class="blog_recommend-article-date">0000–00-00</small>
            <p class="blog_recommend-article-title">ブログタイトルテキストテキストテキストテキスト</p>
          </div>
        </article>
        <article class="blog_recommend-article">
          <figure class="blog_recommend-article-img"><img src="img/sample02.svg" alt=""><small class="blog_recommend-category">カテゴリ3</small>
          </figure>
          <div class="blog_recommend-article-text-box">
            <small class="blog_recommend-article-date">0000–00-00</small>
            <p class="blog_recommend-article-title">ブログタイトルテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </article>
        <article class="blog_recommend-article">
          <figure class="blog_recommend-article-img"><img src="img/sample03.svg" alt=""><small class="blog_recommend-category">カテゴリ2</small>
          </figure>
          <div class="blog_recommend-article-text-box">
            <p class="blog_recommend-article-date">0000–00-00</p>
            <h5 class="blog_recommend-article-title">ブログタイトルテキストテキストテキストテキスト</h5>
          </div>
        </article>
      </div>
    </div>

    <div class="blog_detail_main-right">
      <div class="blog_sidebar">
        <div class="blog_sidebar-related">
          <h5 class="blog_sidebar-related-title">関連記事</h5>
          <article class="blog_related-article blog_related-first-article">
            <figure class="blog_related-article-img-box"><img src="img/26.svg" alt=""></figure>
            <div class="blog_related-article-text-box">
              <small class="blog_related-article-title"><a href="">ブログタイトルテキストテキストテキストテキストテキストテキスト</a></small>
            </div>
          </article>
          <article class="blog_related-article">
            <figure class="blog_related-article-img-box"><img src="img/26.svg" alt=""></figure>
            <div class="blog_related-article-text-box">
              <small class="blog_related-article-title"><a href="">ブログタイトルテキストテキストテキストテキスト</a></small>
            </div>
          </article>
          <article class="blog_related-article">
            <figure class="blog_related-article-img-box"><img src="img/26.svg" alt=""></figure>
            <div class="blog_related-article-text-box">
              <small class="blog_related-article-title"><a href="">ブログタイトルテキストテキスト</a></small>
            </div>
          </article>
        </div>

        <div class="blog_sidebar-category">
          <h5 class="blog_sidebar-category-title">カテゴリー</h5>
          <ul class="blog_sidebar-category-list-wrapper">
            <li class="blog_sidebar-category-list blog_sidebar-category-first-list">カテゴリー1</li>
            <li class="blog_sidebar-category-list">カテゴリー2</li>
            <li class="blog_sidebar-category-list">カテゴリー3</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
