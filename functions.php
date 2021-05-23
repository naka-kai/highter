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
function add_css_js() {

  //cssの読み込み
  //全てのページにstyle.cssを読み込み
  wp_enqueue_style('style', get_template_directory_uri().'/style.css');
  //全てのページにreset.cssを読み込み
  wp_enqueue_style('reset', get_template_directory_uri().'/css/share_css/reset.css');
  //全てのページにheader.cssを読み込み
  wp_enqueue_style('header', get_template_directory_uri().'/css/share_css/header.css');
  //全てのページにfooter.cssを読み込み
  wp_enqueue_style('footer', get_template_directory_uri().'/css/share_css/footer.css');

  //page-contact-completed以外にhero.cssを読み込み
  if(!is_page('page-contact-completed')) {
    wp_enqueue_style('hero', get_template_directory_uri() . '/css/share_css/hero.css');
  }

  //front-page.php,page-price.php,home.php,single-post.php,archive-news.php,single-news.php,page-contactの場合、hero.cssを読み込み
  if(is_front_page() || is_page('price') || is_home() || is_single('post') || is_archive('news') || is_single('news') || is_page('contact')) {
    wp_enqueue_style('hero', get_template_directory_uri().'/css/share_css/hero.css');
  }

  //page-price.php,home.php,archive-news.php,page-contact.phpの場合、share/mainvisualを読み込み
  if(is_page('price') || is_home() || is_archive('news') || is_page('contact')) {
    wp_enqueue_style('mainvisual',get_template_directory_uri().'/css/share_css/mainvisual.css');
  }

  //front-page.php,home.phpにhome/blog.cssを読み込み
  if(is_front_page() || is_home()) {
    wp_enqueue_style('blog',get_template_directory_uri().'/css/home_css/blog.css');
  }

  //front-page.php,page-price.php,home.php,single-post.php,archive-news.php,single-news.phpにcontact.cssを読み込み
  if (is_front_page() || is_page('price') || is_home() || is_single('post') || is_archive('news') || is_single('news')) {
    wp_enqueue_style('contact', get_template_directory_uri() . '/css/share_css/contact.css');
  }

  //front-pageにabout.css,feature.css,price.css,example.css,flow.css,faq.css,news.cssを読み込み
  if(is_front_page()) {
    wp_enqueue_style('about', get_template_directory_uri().'/css/home_css/about.css');
    wp_enqueue_style('feature', get_template_directory_uri().'/css/home_css/feature.css');
    wp_enqueue_style('price', get_template_directory_uri().'/css/home_css/price.css');
    wp_enqueue_style('example', get_template_directory_uri().'/css/home_css/example.css');
    wp_enqueue_style('flow', get_template_directory_uri().'/css/home_css/flow.css');
    wp_enqueue_style('faq', get_template_directory_uri().'/css/home_css/faq.css');
    wp_enqueue_style('news', get_template_directory_uri().'/css/home_css/news.css');
  }
  //JavaScriptの読み込み
  //全てのページにjs/script.jsを読み込み
  if(is_front_page()) {
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');
  }
}
//add_css_jsをフロントで呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');
