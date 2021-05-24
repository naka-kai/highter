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
<div class="mysingle">
  <div class="container">
    <h4 class="news-title"><?php the_title(); ?></h4>

    <time class="news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>

      <?php the_content(); ?>
  </div>
</div>


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
