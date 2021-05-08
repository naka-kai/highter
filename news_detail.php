<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />
  <title>お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</title>

  <!-- css -->
  <link rel="stylesheet" href="css/share_css/style.css">
  <link rel="stylesheet" href="css/share_css/header.css">
  <link rel="stylesheet" href="css/share_css/hero.css">
  <link rel="stylesheet" href="css/share_css/breadcrumb.css">
  <link rel="stylesheet" href="css/news_detail_css/news_detail_main.css">
  <link rel="stylesheet" href="css/share_css/contact.css">
  <link rel="stylesheet" href="css/share_css/footer.css">


  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
</head>

<body>

  <header class="header">
    <div class="header_logo">
      <a href="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Engress">
      </a>
    </div>
    <nav class="header_nav" id="header_nav">
      <nav class="header-sp-nav">
        <ul class="header-sp-menu">
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">ホーム</li>
          </a>
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">お知らせ</li>
          </a>
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">ブログ</li>
          </a>
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">コース・料金</li>
          </a>
        </ul>
        <div class="header_sp-btn-box">
          <a href="#">
            <div class="square-request-btn header_sp-btn">
              <span class="square-request-btn-text">
                資料請求
              </span>
            </div>
          </a>
          <a href="#">
            <div class="contact-btn header_sp-btn">
              <span class="contact-btn-text">
                お問い合わせ
              </span>
            </div>
          </a>
        </div>
        <div class="tel-box sp-tel-box">
          <small class="tel-hour">平日08:00〜20:00</small>
          <p class="tel-number sp-tel-number"><a href="tel:0123-456-7890" class="p">0123-456-7890</a></p>
        </div>
      </nav>
      <div class="ham" id="ham"><a href="#">
          <span class="ham-line ham-line1"></span>
          <span class="ham-line ham-line2"></span>
          <span class="ham-line ham-line3"></span>
        </a></div>
      <div class="black-bg" id="js-black-bg"></div>
      <ul class="header_list">
        <li class="header_list-item"><a href="#" class="p">ホーム</a></li>
        <li class="header_list-item"><a href="#" class="p">お知らせ</a></li>
        <li class="header_list-item"><a href="#" class="p">ブログ</a></li>
        <li class="header_list-item"><a href="#" class="p">コース・料金</a></li>
      </ul>
      <div class="header_right">
        <div class="tel-box">
          <small class="tel-hour">平日08:00〜20:00</small>
          <p class="tel-number"><a href="tel:0123-456-7890" class="p">0123-456-7890</a></p>
        </div>
        <a href="#">
          <div class="square-request-btn header_pc-btn">
            <span class="square-request-btn-text">
              資料請求
            </span>
          </div>
        </a>
        <a href="#">
          <div class="contact-btn header_pc-btn">
            <span class="contact-btn-text">
              お問い合わせ
            </span>
          </div>
        </a>
      </div>
    </nav>
  </header>

  <section class="breadcrumb">
    <div class="breadcrumb-list-box">
      <div class="container">
        <ul class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a class="item" href="https://kaiblo.com/portfolio/heighter/"><small>ホーム</small></a>
            <meta itemprop="position" content="1" />
          </li>
          <li class="breadcrumb-item">
            <small>お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</small>
          </li>
        </ul>
      </div>
    </div>
  </section>

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
          <figure class="news_article-sub-img"><img src="<?php echo get_template_directory_uri(); ?>/img/sample4.svg"
              alt=""></figure>
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
        <div class="circle-request-btn contact_circle-request-btn"><a href=""
            class="p circle-request-btn-text contact_circle-request-btn-text">資料請求 </a></div>
        <p class="contact-link-text contact_contact-link-text"><a href="">お問い合わせ</a></p>
      </div>
    </div>
    <div class="contact_tel-contact-box">
      <p class="contact_tel-contact-title">お電話でのお問い合わせはこちら</p>
      <h2 class="contact_tel-contact-number"><a href="tel:0123-456-7890">0123-456-7890</a></h2>
      <p class="contact_tel-contact-hour">平日 08:00~20:00</p>
    </div>
  </section>
  <footer class="footer">
    <div class="footer_top-wrapper">
      <div class="container">
        <div class="footer_top">
          <div class="footer_top-left">
            <ul class="footer_top-left-list">
              <li class="footer_top-left-list-item"><a href="" class="p">ホーム</a></li>
              <li class="footer_top-left-list-item"><a href="" class="p">お知らせ</a></li>
              <li class="footer_top-left-list-item"><a href="" class="p">ブログ</a></li>
              <li class="footer_top-left-list-item"><a href="" class="p">コース・料金</a></li>
            </ul>
          </div>
          <div class="footer_top-right">
            <div class="footer_logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
                  alt="Engress"></a></div>
            <div class="footer_top-right-tel-box">
              <p class="footer_top-right_tel-contact-number p"><a href="tel:0123-456-7890">0123-456-7890</a></p><small
                class="footer_top-right_tel-contact-hour">平日08:00~20:00</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="footer_bottom"><small class="footer_bottom-copy">© 2020 Engress.</small></div>
    </div>
  </footer>

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- javaScript -->
  <script src="js/script.js"></script>
</body>

</html>
