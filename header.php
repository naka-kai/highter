<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />
  <title>Engress</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_uri(); ?>/../img/favicon.ico">

  <!-- meta情報 -->
  <!-- Primary Meta Tags -->
  <title>Engress</title>
  <meta name="title" content="Engress">
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣の
コーチング型TOEFLスクール">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://engress.kaiblo.com/">
  <meta property="og:title" content="Engress">
  <meta property="og:description" content="日本人へのTOEFL指導歴豊かな講師陣の
コーチング型TOEFLスクール">
  <meta property="og:image" content="/img/fv.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://engress.kaiblo.com/">
  <meta property="twitter:title" content="Engress">
  <meta property="twitter:description" content="日本人へのTOEFL指導歴豊かな講師陣の
コーチング型TOEFLスクール">
  <meta property="twitter:image" content="/img/fv.jpg">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header_logo"><a href="<?php echo home_url('/') ?>"><img src="<?php echo get_stylesheet_uri(); ?>/../img/logo (2).svg" alt="Engress"></a></div>
    <nav class="header_nav" id="header_nav">
      <nav class="header-sp-nav">
        <ul class="header-sp-menu">
          <a href="<?php echo home_url('/'); ?>" class="header-sp-menu-link">
            <li class="header-sp-menu-list">ホーム</li>
          </a>
          <a href="<?php echo home_url('news'); ?>" class="header-sp-menu-link">
            <li class="header-sp-menu-list">お知らせ</li>
          </a>
          <a href="<?php echo home_url('blog'); ?>" class="header-sp-menu-link">
            <li class="header-sp-menu-list">ブログ</li>
          </a>
          <a href="<?php echo home_url('price'); ?>" class="header-sp-menu-link">
            <li class="header-sp-menu-list">コース・料金</li>
          </a>
        </ul>
        <div class="header_sp-btn-box"><a href="#">
            <div class="square-request-btn header_sp-btn"><span class="square-request-btn-text">資料請求</span></div>
          </a>
          <a href="#">
            <div class="contact-btn header_sp-btn"><span class="contact-btn-text">お問い合わせ</span></div>
          </a>
        </div>
        <div class="tel-box sp-tel-box">
          <small class="tel-hour">平日08:00〜20:00</small>
          <p class="tel-number sp-tel-number"><a href="tel:0123-456-7890" class="p">0123-456-7890</a></p>
        </div>
      </nav>
      <div class="ham js-trigger" id="ham"><a href="#"><span class="ham-line ham-line1"></span><span class="ham-line ham-line2"></span><span class="ham-line ham-line3"></span></a></div>
      <div class="black-bg" id="js-black-bg"></div>
      <ul class="header_list">
        <li class="header_list-item"><a href="<?php echo home_url('/') ?>" class="p">ホーム</a></li>
        <li class="header_list-item"><a href="<?php echo home_url('news') ?>" class="p">お知らせ</a></li>
        <li class="header_list-item"><a href="<?php echo home_url('blog'); ?>" class="p">ブログ</a></li>
        <li class="header_list-item"><a href="<?php echo home_url('price'); ?>" class="p">コース・料金</a></li>
      </ul>
      <div class="header_right">
        <div class="tel-box"><small class="tel-hour">平日08:00〜20:00</small>
          <p class="tel-number"><a href="tel:0123-456-7890" class="p">0123-456-7890</a></p>
        </div>
        <a href="#">
          <div class="square-request-btn header_pc-btn"><span class="square-request-btn-text">資料請求</span></div>
        </a>
        <a href="#">
          <div class="contact-btn header_pc-btn"><span class="contact-btn-text">お問い合わせ</span></div>
        </a>
      </div>
    </nav>

  </header>
