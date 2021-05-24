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

<section class="contact_detail_main">
  <p class="contact_detail_main-text">お問い合わせいただきありがとうございます<br>内容を確認した後、<br class="smallDone">担当者よりご連絡いたします</p>
  <p class="contact_detail_main-home"><a href="">ホームへ戻る</a></p>
</section>

<?php get_footer(); ?>
