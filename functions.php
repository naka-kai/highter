<?php

// titleタグを出力する
add_theme_support('title-tag');

//アイキャッチ画像を使用可能にする

add_theme_support('post-thumbnails');

// カテゴリースラッグが「price」の記事を10件取得する条件
$args = [
  'category_name' => 'price',
  'posts_per_page' => 10
];

add_action('scrollHint-script', 'add_files');
