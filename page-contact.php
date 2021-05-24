<?php get_header(); ?>

<section class="mainvisual">
  <h3 class="mainvisual_text">お問い合わせ・資料請求</h3>
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

<section class="contact_main">
  <div class="container">
    <div class="contact_main-container">
      <form action="" method="POST" class="contact_form">
        <p class="contact_form-title">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>

        <?php the_content(); ?>

      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
