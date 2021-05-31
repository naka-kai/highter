  <?php get_header(); ?>

  <section class="mainvisual">
    <h3 class="mainvisual_text">ブログ</h3>
  </section>

  <div class="breadcrumbs-wrapper">
    <div class="container">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  </div>

  <section class="blog_main">
    <div class="container blog_container">
      <div class="articles">
        <h3 class="blog_title">記事一覧</h3>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <article class="blog_article">
          <figure class="blog_article-img-box"><img src="<?php echo get_stylesheet_uri() ?>/img/sample01.svg" alt=""><small class="blog_category"><?php the_category(); ?></small>
          </figure>
          <div class="blog_article-text-box">
            <p class="blog_article-date"><?php the_time('Y-m-d'); ?></p>
            <h4 class="blog_article-title"><?php the_title(); ?></h4>
            <p class="blog_article-text"><?php the_excerpt(); ?></p>
          </div>
        </article>

        <?php endwhile; endif; ?>
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
