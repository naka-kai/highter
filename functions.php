<?php

//jQueryを読み込み
function add_jquery()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
}
//add_jqueryをフロントで呼び出す
add_action('wp_enqueue_scripts', 'add_jquery');

//CSS,JSを読み込む
function add_css_js()
{

  //cssの読み込み
  // //全てのページにreset.cssを読み込み
  // wp_enqueue_style('resetcss', get_template_directory_uri() . '/css/share_css/reset.css');
  //全てのページにstyle.cssを読み込み
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  //全てのページにheader.cssを読み込み
  wp_enqueue_style('headercss', get_template_directory_uri() . '/css/share_css/header.css');
  //全てのページにfooter.cssを読み込み
  wp_enqueue_style('footercss', get_template_directory_uri() . '/css/share_css/footer.css');

  //front-page.php,page-price.php,home.php,single-post.php,archive-news.php,single-news.php,page-contactの場合、hero.cssを読み込み
  if (is_front_page() || is_page('price') || is_home() || is_single('post') || is_archive('news') || is_single('news') || is_page('contact')) {
    wp_enqueue_style('herocss', get_template_directory_uri() . '/css/share_css/hero.css');
  }

  //page-price.php,home.php,archive-news.php,page-contact.phpの場合、share/mainvisualを読み込み
  if (is_page('price') || is_home() || is_archive('news') || is_page('contact')) {
    wp_enqueue_style('mainvisualcss', get_template_directory_uri() . '/css/share_css/mainvisual.css');
  }

  //front-page.php,home.phpにhome/blog.cssを読み込み
  if (is_front_page() || is_home()) {
    wp_enqueue_style('blogcss', get_template_directory_uri() . '/css/home_css/blog.css');
  }

  //front-page.php,page-price.php,home.php,single-post.php,archive-news.php,single-news.phpにcontact.cssを読み込み
  if (is_front_page() || is_page('price') || is_home() || is_singular('post') || is_archive('news') || is_singular('news')) {
    wp_enqueue_style('contactcss', get_template_directory_uri() . '/css/share_css/contact.css');
  }

  //front-pageにabout.css,feature.css,price.css,example.css,flow.css,faq.css,news.cssを読み込み
  if (is_front_page()) {
    wp_enqueue_style('aboutcss', get_template_directory_uri() . '/css/home_css/about.css');
    wp_enqueue_style('featurecss', get_template_directory_uri() . '/css/home_css/feature.css');
    wp_enqueue_style('pricecss', get_template_directory_uri() . '/css/home_css/price.css');
    wp_enqueue_style('examplecss', get_template_directory_uri() . '/css/home_css/example.css');
    wp_enqueue_style('flowcss', get_template_directory_uri() . '/css/home_css/flow.css');
    wp_enqueue_style('faqcss', get_template_directory_uri() . '/css/home_css/faq.css');
    wp_enqueue_style('newscss', get_template_directory_uri() . '/css/home_css/news.css');
  }

  //sidebar.phpにblog.css,news.cssを読み込み


  //page-price.phpにprice/price.css,scrollHint.cssを読み込み
  if (is_page('price')) {
    wp_enqueue_style('pricecss', get_template_directory_uri() . '/css/price_css/price_main.css');
    wp_enqueue_style('scrollhintcss', 'https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css');
  }

  //home.phpにblog_mainvisual.css,blog_main.cssを読み込み
  if (is_home()) {
    wp_enqueue_style('blog-mainvisualcss', get_template_directory_uri() . '/css/blog_css/blog_mainvisual.css');
    wp_enqueue_style('blog-maincss', get_template_directory_uri() . '/css/blog_css/blog_main.css');
  }

  //single-post.phpにblog_detail_main.cssを読み込み
  if (is_singular('post')) {
    wp_enqueue_style('blog-detailcss', get_template_directory_uri() . '/css/blog_detail_css/blog_detail_main.css');
  }

  //single-news.phpにnews-mainvisual,news-mainを読み込み
  if (is_singular('news')) {
    wp_enqueue_style('news-derail-maincss', get_template_directory_uri() . '/css/news_detail_css/news_detail_main.css');
    wp_enqueue_style('news-detail-mainvisualcss', get_template_directory_uri() . '/css/news_detail_css/news_detail_main.css');
  }

  //archive-news.phpにnews_detail.cssを読み込み
  if (is_archive('news')) {
    wp_enqueue_style('news-detail-maincss', get_template_directory_uri() . '/css/news_css/news_main.css');
  }

  //page-contact.phpにcontact_main.css,contact_mainvisual.cssを読み込み
  if (is_page('contact')) {
    wp_enqueue_style('contact-maincss', get_template_directory_uri() . '/css/contact_css/contact_main.css');
    wp_enqueue_style('contact-mainvisualcss', get_template_directory_uri() . '/css/contact_css/contact_mainvisual.css');
  }

  //page-contact-completed.phpにcontact_detail.cssを読み込み
  if (is_page('contact-completed')) {
    wp_enqueue_style('contact-completedcss', get_template_directory_uri() . '/css/contact_detail_css/contact_detail_main.css');
  }


  //JavaScriptの読み込み
  //全てのページにjs/script.jsを読み込み
  if (is_front_page() || is_page('price')) {
    wp_enqueue_script('scriptjs', get_template_directory_uri() . '/js/script.js');
  }

  //page-priceにscrollHint.jsを読み込み
  if (is_page('price')) {
    wp_enqueue_script('scrollHintjs', 'https://unpkg.com/scroll-hint@1.1.2/js/scroll-hint.js');
    wp_enqueue_script('myscrollHintjs', get_template_directory_uri() . '/js/scrollHint.js');
  }
}
//add_css_jsをフロントで呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

//アイキャッチ画像
add_theme_support('post-thumbnails');
