<?php get_header('single'); ?>

<?php
$share_url = get_permalink();
$share_title = get_the_title();
?>

<section class="breadcrumb">
  <div class="breadcrumb-list-box">
    <div class="container">
      <div class="breadcrumb-list">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog_detail_main">
  <div class="container blog_detail_main-container">
    <div class="blog_detail_main-left">
      <article class="blog_detail_main-article">
        <small class="blog_article-category"><?php the_category(); ?></small>
        <h4 class="blog_article-title"><?php the_title(); ?></h4>
        <div class="blog_article-date-wrapper">
          <p class="blog_article-date"><?php echo get_the_date(); ?></p>
        </div>
        <div class="content-wrapper">
          <?php the_content(); ?>
        </div>
      </article>

      
      <div class="blog_recommend">
        <h4 class="blog_recommend-title">おすすめの記事</h4>
        <article class="blog_recommend-article">
          <figure class="blog_recommend-article-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sample01.svg" alt=""><small class="blog_recommend-category">カテゴリ1</small>
          </figure>
          <div class="blog_recommend-article-text-box">
            <small class="blog_recommend-article-date">0000–00-00</small>
            <p class="blog_recommend-article-title">ブログタイトルテキストテキストテキストテキスト</p>
          </div>
        </article>
        <article class="blog_recommend-article">
          <figure class="blog_recommend-article-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sample02.svg" alt=""><small class="blog_recommend-category">カテゴリ3</small>
          </figure>
          <div class="blog_recommend-article-text-box">
            <small class="blog_recommend-article-date">0000–00-00</small>
            <p class="blog_recommend-article-title">ブログタイトルテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </article>
        <article class="blog_recommend-article">
          <figure class="blog_recommend-article-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sample03.svg" alt=""><small class="blog_recommend-category">カテゴリ2</small>
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
            <figure class="blog_related-article-img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/26.svg" alt=""></figure>
            <div class="blog_related-article-text-box">
              <small class="blog_related-article-title"><a href="">ブログタイトルテキストテキストテキストテキストテキストテキスト</a></small>
            </div>
          </article>
          <article class="blog_related-article">
            <figure class="blog_related-article-img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/26.svg" alt=""></figure>
            <div class="blog_related-article-text-box">
              <small class="blog_related-article-title"><a href="">ブログタイトルテキストテキストテキストテキスト</a></small>
            </div>
          </article>
          <article class="blog_related-article">
            <figure class="blog_related-article-img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/26.svg" alt=""></figure>
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

<section class="contact blog_detail_contact">
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
